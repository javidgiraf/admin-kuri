<?php

namespace Database\Seeders;

use App\Models\SchemeType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $schemes = [
            [
                'title' => 'Fixed Payment Scheme',
                'total_period' => '15',
                'scheme_type_id' => SchemeType::FIXED_PLAN,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'title' => 'Flexible Payment Scheme',
                'total_period' => '15',
                'scheme_type_id' => SchemeType::FLEXIBLE_PLAN,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Easy Gold Scheme',
                'total_period' => '15',
                'scheme_type_id' => SchemeType::GOLD_PLAN,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        
        DB::table('schemes')->insert($schemes);
        
    }
}
