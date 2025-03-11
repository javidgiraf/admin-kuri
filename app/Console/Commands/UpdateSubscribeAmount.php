<?php

namespace App\Console\Commands;

use App\Models\DepositPeriod;
use App\Models\SchemeType;
use App\Models\UserSubscription;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateSubscribeAmount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:subscribe-amount';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Subscribe Amount for Flexible & Gold Scheme';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $userSubscriptions = UserSubscription::with('scheme.schemeSetting')
            ->whereHas('scheme', function ($query) {
                $query->where('scheme_type_id', '<>', SchemeType::FIXED_PLAN);
            })
            ->where('is_closed', false)
            ->get();

        collect($userSubscriptions)->map(function ($subscription) {
            $currentDate = now();
            $startDate = Carbon::parse($subscription->start_date);
            $endDate = Carbon::parse($subscription->end_date);
            $schemeType = SchemeType::find($subscription->scheme->scheme_type_id);
            $flexibility_duration = $schemeType ? $schemeType->flexibility_duration : 6; 
            $holdDateFlexible = $startDate->copy()->addMonths($flexibility_duration);

            $totalFlexibleSchemeAmount = DepositPeriod::whereHas('deposit', function ($query) use ($subscription) {
                $query->where('subscription_id', $subscription->id)
                    ->where('status', true);
            })
                ->where('due_date', '>=', $startDate->format('Y-m-d'))
                ->where('due_date', '<', $holdDateFlexible->format('Y-m-d'))
                ->where('status', true)
                ->sum('scheme_amount');

            if (
                $currentDate->greaterThanOrEqualTo($holdDateFlexible) &&
                $subscription->scheme->scheme_type_id != SchemeType::FIXED_PLAN
            ) {
                $roundOftotalAmount = round($totalFlexibleSchemeAmount / $flexibility_duration);

                UserSubscription::where('id', $subscription->id)
                    ->update(['subscribe_amount' => $roundOftotalAmount]);
            }
        });
    }
}
