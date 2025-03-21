<?php

namespace App\Console\Commands;

use App\Models\Deposit;
use App\Models\DepositPeriod;
use App\Models\SchemeType;
use App\Models\SubscriptionHistory;
use App\Models\UserSubscription;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HoldSchema extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hold:scheme';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '10 Days after hold Kuri Scheme';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->holdScheme();

        return true;
    }

    private function holdScheme()
    {
        try {
            $currentDate = now();
            $userSubscriptions = UserSubscription::with('scheme.schemeSetting', 'deposits')->where('is_closed', false)->get();

            foreach ($userSubscriptions as $userSubscription) {
                $startDate = Carbon::parse($userSubscription->start_date);
                $endDate = Carbon::parse($userSubscription->end_date);
                $holdDates = [];
                $currentHoldDate = $startDate->copy();

                while ($currentHoldDate->lessThanOrEqualTo($endDate)) {
                    $holdDates[] = $currentHoldDate->copy();
                    $currentHoldDate->addMonthNoOverflow()->startOfMonth();
                }

                Log::info("Hold Dates for Subscription ID {$userSubscription->id}: " . implode(', ', array_map(fn($date) => $date->format('Y-m-d'), $holdDates)));

                foreach ($holdDates as $holdDate) {
                    $duration = $userSubscription->scheme->schemeSetting->due_duration;
                    $schemeType = SchemeType::find($userSubscription->scheme->scheme_type_id);
                    $flexibility_duration = $schemeType ? $schemeType->flexibility_duration : 0;

                    // Check unpaid periods

                    $holdDateFixed = $holdDate->copy()->addDays($duration);
                    $endSixMonthPeriod = $startDate->copy()->addMonths($flexibility_duration)->addDays($duration);
                    $holdDateFlexible = ($endSixMonthPeriod->format('Y-m') == $holdDate->format('Y-m')) ? 
                        $holdDate->copy()->startOfMonth()->addDays($duration) : 
                        $endSixMonthPeriod->copy()->startOfMonth()->addDays($duration);

                    $monthKey = $holdDate->format('Y-m');
                    $existingPayments = Deposit::where('subscription_id', $userSubscription->id)
                        ->whereRaw("DATE_FORMAT(paid_at, '%Y-%m') = ?", [$monthKey])
                        ->where('status', true)
                        ->exists();

                    $totalFlexibleSchemeAmount = Deposit::where('subscription_id', $userSubscription->id)
                        ->where('paid_at', '>=', $startDate->format('Y-m-d'))
                        ->where('paid_at', '<', $holdDateFlexible->format('Y-m-d'))
                        ->where('status', true)
                        ->sum('total_scheme_amount');

                    if (
                        (
                            $currentDate->format('Y-m') == $holdDate->format('Y-m') &&
                            $currentDate->diffInDays($holdDate) >= $duration &&
                            $userSubscription->scheme->scheme_type_id == SchemeType::FIXED_PLAN &&
                            !$existingPayments
                        ) ||
                        (
                            $currentDate->greaterThanOrEqualTo($holdDateFlexible) &&
                            $userSubscription->scheme->scheme_type_id != SchemeType::FIXED_PLAN &&
                            $totalFlexibleSchemeAmount == 0
                        )
                    ) {
                        DB::transaction(function () use ($userSubscription, $currentDate, $startDate) {
                            $userSubscription->update([
                                'reason' => "The Subscription Hold Period for " . $startDate->format('d-M-Y') . " to after 15 days " . $currentDate->format('d-M-Y'),
                                'status' => UserSubscription::STATUS_ONHOLD
                            ]);

                            SubscriptionHistory::updateOrCreate(
                                ['subscription_id' => $userSubscription->id],
                                [
                                    'description' => "The Subscription Hold Period for " . $startDate->format('d-M-Y') . " to after 15 days " . $currentDate->format('d-M-Y'),
                                    'status' => UserSubscription::STATUS_ONHOLD,
                                    'is_closed' => false,
                                ]
                            );
                        });

                        Log::info("Subscription ID {$userSubscription->id} has been placed on hold as of {$currentDate->format('Y-m-d')}.");
                    }
                }
            }
        } catch (\Exception $e) {
            Log::error('Error in Hold Scheme: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }
}
