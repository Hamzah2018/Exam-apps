<?php

namespace Database\Seeders;

use App\Enum\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' =>'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'describe' => 'this the Admin Account',
            ])->assignRole(RoleEnum::SUPER_ADMIN);

        User::create([
            'name' =>'Teacher Mohammed',
            'email' => 'Mohmmed@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'describe' => 'Web Teacher',
            ])->assignRole(RoleEnum::TRAINER);

            // TRAINER
        User::create([
            'name' =>'Teacher Ali',
            'email' => 'Ali@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'describe' => 'Mobile Teacher',
            ])->assignRole(RoleEnum::TRAINER);

        User::create([
            'name' =>'Ala',
            'email' => 'Ala@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'describe' => 'this the Admin Account',
            ])->assignRole(RoleEnum::TRAINEE);

    }
}
