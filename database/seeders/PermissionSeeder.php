<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('permissions')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $superAdmin = Role::where('name', 'superadmin')->first();

        $permissions = [
            ['name' => 'sanctum.csrf-cookie', 'guard_name' => 'web'],
            ['name' => 'livewire.update', 'guard_name' => 'web'],
            ['name' => 'cache.clear', 'guard_name' => 'web'],
            ['name' => 'login', 'guard_name' => 'web'],
            ['name' => 'logout', 'guard_name' => 'web'],
            ['name' => 'register', 'guard_name' => 'web'],
            ['name' => 'password.request', 'guard_name' => 'web'],
            ['name' => 'password.email', 'guard_name' => 'web'],
            ['name' => 'password.reset', 'guard_name' => 'web'],
            ['name' => 'password.update', 'guard_name' => 'web'],
            ['name' => 'password.confirm', 'guard_name' => 'web'],
            ['name' => 'home', 'guard_name' => 'web'],
            ['name' => 'roles.index', 'guard_name' => 'web'],
            ['name' => 'roles.create', 'guard_name' => 'web'],
            ['name' => 'roles.store', 'guard_name' => 'web'],
            ['name' => 'roles.show', 'guard_name' => 'web'],
            ['name' => 'roles.edit', 'guard_name' => 'web'],
            ['name' => 'roles.update', 'guard_name' => 'web'],
            ['name' => 'roles.destroy', 'guard_name' => 'web'],
            ['name' => 'permissions.index', 'guard_name' => 'web'],
            ['name' => 'permissions.create', 'guard_name' => 'web'],
            ['name' => 'permissions.store', 'guard_name' => 'web'],
            ['name' => 'permissions.show', 'guard_name' => 'web'],
            ['name' => 'permissions.edit', 'guard_name' => 'web'],
            ['name' => 'permissions.update', 'guard_name' => 'web'],
            ['name' => 'permissions.destroy', 'guard_name' => 'web'],
            ['name' => 'users.index', 'guard_name' => 'web'],
            ['name' => 'users.create', 'guard_name' => 'web'],
            ['name' => 'users.store', 'guard_name' => 'web'],
            ['name' => 'users.show', 'guard_name' => 'web'],
            ['name' => 'users.edit', 'guard_name' => 'web'],
            ['name' => 'users.update', 'guard_name' => 'web'],
            ['name' => 'users.destroy', 'guard_name' => 'web'],
            ['name' => 'schemes.index', 'guard_name' => 'web'],
            ['name' => 'schemes.create', 'guard_name' => 'web'],
            ['name' => 'schemes.store', 'guard_name' => 'web'],
            ['name' => 'schemes.show', 'guard_name' => 'web'],
            ['name' => 'schemes.edit', 'guard_name' => 'web'],
            ['name' => 'schemes.update', 'guard_name' => 'web'],
            ['name' => 'schemes.destroy', 'guard_name' => 'web'],
            ['name' => 'goldrates.index', 'guard_name' => 'web'],
            ['name' => 'goldrates.create', 'guard_name' => 'web'],
            ['name' => 'goldrates.store', 'guard_name' => 'web'],
            ['name' => 'goldrates.show', 'guard_name' => 'web'],
            ['name' => 'goldrates.edit', 'guard_name' => 'web'],
            ['name' => 'goldrates.update', 'guard_name' => 'web'],
            ['name' => 'goldrates.destroy', 'guard_name' => 'web'],
            ['name' => 'countries.index', 'guard_name' => 'web'],
            ['name' => 'countries.create', 'guard_name' => 'web'],
            ['name' => 'countries.store', 'guard_name' => 'web'],
            ['name' => 'countries.show', 'guard_name' => 'web'],
            ['name' => 'countries.edit', 'guard_name' => 'web'],
            ['name' => 'countries.update', 'guard_name' => 'web'],
            ['name' => 'countries.destroy', 'guard_name' => 'web'],
            ['name' => 'states.index', 'guard_name' => 'web'],
            ['name' => 'states.create', 'guard_name' => 'web'],
            ['name' => 'states.store', 'guard_name' => 'web'],
            ['name' => 'states.show', 'guard_name' => 'web'],
            ['name' => 'states.edit', 'guard_name' => 'web'],
            ['name' => 'states.update', 'guard_name' => 'web'],
            ['name' => 'states.destroy', 'guard_name' => 'web'],
            ['name' => 'districts.index', 'guard_name' => 'web'],
            ['name' => 'districts.create', 'guard_name' => 'web'],
            ['name' => 'districts.store', 'guard_name' => 'web'],
            ['name' => 'districts.show', 'guard_name' => 'web'],
            ['name' => 'districts.edit', 'guard_name' => 'web'],
            ['name' => 'districts.update', 'guard_name' => 'web'],
            ['name' => 'districts.destroy', 'guard_name' => 'web'],
            ['name' => 'logactivities.index', 'guard_name' => 'web'],
            ['name' => 'logactivities.create', 'guard_name' => 'web'],
            ['name' => 'logactivities.store', 'guard_name' => 'web'],
            ['name' => 'logactivities.show', 'guard_name' => 'web'],
            ['name' => 'logactivities.edit', 'guard_name' => 'web'],
            ['name' => 'logactivities.update', 'guard_name' => 'web'],
            ['name' => 'logactivities.destroy', 'guard_name' => 'web'],
            ['name' => 'settings.index', 'guard_name' => 'web'],
            ['name' => 'settings.create', 'guard_name' => 'web'],
            ['name' => 'settings.store', 'guard_name' => 'web'],
            ['name' => 'settings.show', 'guard_name' => 'web'],
            ['name' => 'settings.edit', 'guard_name' => 'web'],
            ['name' => 'settings.update', 'guard_name' => 'web'],
            ['name' => 'settings.destroy', 'guard_name' => 'web'],
            ['name' => 'countries.get-states', 'guard_name' => 'web'],
            ['name' => 'states.get-districts', 'guard_name' => 'web'],
            ['name' => 'users.get-user-subscriptions', 'guard_name' => 'web'],
            ['name' => 'subscriptions.index', 'guard_name' => 'web'],
            ['name' => 'subscriptions.create', 'guard_name' => 'web'],
            ['name' => 'subscriptions.store', 'guard_name' => 'web'],
            ['name' => 'subscriptions.edit', 'guard_name' => 'web'],
            ['name' => 'subscriptions.update', 'guard_name' => 'web'],
            ['name' => 'subscriptions.destroy', 'guard_name' => 'web'],
            ['name' => 'users.current-plan-history', 'guard_name' => 'web'],
            ['name' => 'users.generate-random-number', 'guard_name' => 'web'],
            ['name' => 'users.edit-scheme-details', 'guard_name' => 'web'],
            ['name' => 'users.pay-deposit', 'guard_name' => 'web'],
            ['name' => 'users.unpaid-list', 'guard_name' => 'web'],
            ['name' => 'users.update-plan-status', 'guard_name' => 'web'],
            ['name' => 'users.get-plan-status', 'guard_name' => 'web'],
            ['name' => 'users.fetch-success-deposit-by-order', 'guard_name' => 'web'],
            ['name' => 'users.save-transaction-details', 'guard_name' => 'web'],
            ['name' => 'users.fetch-transaction-details', 'guard_name' => 'web'],
            ['name' => 'users.fetch-failed-deposit-by-order', 'guard_name' => 'web'],
            ['name' => 'users.save-failed-process-status', 'guard_name' => 'web'],
            ['name' => 'orders.index', 'guard_name' => 'web'],
            ['name' => 'users.change-status', 'guard_name' => 'web'],
            ['name' => 'deposits.index', 'guard_name' => 'web'],
            ['name' => 'deposits.destroy', 'guard_name' => 'web'],
            ['name' => 'users.get-user-subscriptions-list', 'guard_name' => 'web'],
            ['name' => 'accounts.index', 'guard_name' => 'web'],
            ['name' => 'transaction-details.index', 'guard_name' => 'web'],
            ['name' => 'transaction-details.fetch-transaction-details', 'guard_name' => 'web'],
            ['name' => 'scheme-settings.index', 'guard_name' => 'web'],
            ['name' => 'scheme-settings.create', 'guard_name' => 'web'],
            ['name' => 'scheme-settings.edit', 'guard_name' => 'web'],
            ['name' => 'scheme-settings.update', 'guard_name' => 'web'],
            ['name' => 'scheme-settings.destroy', 'guard_name' => 'web'],
            ['name' => 'scheme-settings.store', 'guard_name' => 'web'],
            ['name' => 'gold-deposit.index', 'guard_name' => 'web'],
            ['name' => 'gold-deposit.create', 'guard_name' => 'web'],
            ['name' => 'gold-deposit.edit', 'guard_name' => 'web'],
            ['name' => 'gold-deposit.destroy', 'guard_name' => 'web'],
            ['name' => 'gold-deposit.store', 'guard_name' => 'web'],
            ['name' => 'gold-deposit.update', 'guard_name' => 'web'],
            ['name' => 'create-admin', 'guard_name' => 'web'],
            ['name' => 'edit-admin', 'guard_name' => 'web'],
            ['name' => 'delete-admin', 'guard_name' => 'web'],
            ['name' => 'admins.index', 'guard_name' => 'web'],
            ['name' => 'admins.create', 'guard_name' => 'web'],
            ['name' => 'admins.store', 'guard_name' => 'web'],
            ['name' => 'admins.update', 'guard_name' => 'web'],
            ['name' => 'admins.edit', 'guard_name' => 'web'],
            ['name' => 'admins.show', 'guard_name' => 'web'],
            ['name' => 'admins.destroy', 'guard_name' => 'web'],
            ['name' => 'password.change', 'guard_name' => 'web'],
            ['name' => 'subscriptionsExport', 'guard_name' => 'web'],
            ['name' => 'change-subscription-status', 'guard_name' => 'web'],
            ['name' => 'change-maturity-status', 'guard_name' => 'web'],
            ['name' => 'payments.index', 'guard_name' => 'web'],
            ['name' => 'change-scheme', 'guard_name' => 'web'],
            ['name' => 'update-claim-status', 'guard_name' => 'web'],
        ];

        

        // ✅ Fix: Use the correct array keys here
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission['name'],
                'guard_name' => $permission['guard_name']
            ]);
        }

        $superAdmin->givePermissionTo(Permission::all());
    }
}
