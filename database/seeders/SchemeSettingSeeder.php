<?php

namespace Database\Seeders;

use App\Models\SchemeSetting;
use App\Models\SchemeType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchemeSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('scheme_settings')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $schemeSettings = [
            [
                'scheme_id' => SchemeType::FIXED_PLAN,
                'max_payable_amount' => 500000,
                'min_payable_amount' => 500,
                'denomination' => 500,
                'due_duration' => 15,
                'start_from' => 1, 
                'end_to' => 15,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'scheme_id' => SchemeType::FLEXIBLE_PLAN,
                'max_payable_amount' => 500000,
                'min_payable_amount' => 100,
                'denomination' => 500,
                'due_duration' => 15,
                'start_from' => 1, 
                'end_to' => 6,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'scheme_id' => SchemeType::GOLD_PLAN,
                'max_payable_amount' => 500000,
                'min_payable_amount' => 100,
                'denomination' => 500,
                'due_duration' => 15,
                'start_from' => 1, 
                'end_to' => 6,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        SchemeSetting::insert($schemeSettings);
    }
}
