<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var User $admin */
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
        ]);

        $admin->syncRoles([UserRole::Admin]);

        $manager1 = User::create([
            'name' => 'Manager1',
            'email' => 'manager1@manager.com',
            'email_verified_at' => now(),
            'password' => Hash::make('manager'),
        ]);

        $manager2 = User::create([
            'name' => 'Manager2',
            'email' => 'manager2@manager.com',
            'email_verified_at' => now(),
            'password' => Hash::make('manager'),
        ]);

        $manager1->syncRoles([UserRole::Manager]);
        $manager2->syncRoles([UserRole::Manager]);
    }
}
