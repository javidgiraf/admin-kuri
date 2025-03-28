<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SchemeType;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SchemeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('scheme_types')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Define the schemes to be added
        $schemes = [
            [
                'title' => 'Fixed Plan',
                'shortcode' => 'Fixed',
                'flexibility_duration' => null,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Flexible Plan',
                'shortcode' => 'Flexible',
                'flexibility_duration' => 6,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Gold Plan',
                'shortcode' => 'Gold',
                'flexibility_duration' => 6,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        SchemeType::insert($schemes);
    }
}
