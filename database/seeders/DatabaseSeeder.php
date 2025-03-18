<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(GoldRateSeeder::class);
        $this->call(SchemeTypeSeeder::class);
        $this->call(SchemeSeeder::class);
        $this->call(SchemeSettingSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
