<?php

namespace Database\Seeders;

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
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'describe' => 'this the Admin Account',
            ]);
        User::create([
            'name' =>'Teacher Mohammed',
            'email' => 'Mohmmed@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'trainer',
            'describe' => 'Web Teacher',
            ]);
        User::create([
            'name' =>'Teacher Ali',
            'email' => 'Ali@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'trainer',
            'describe' => 'Mobile Teacher',
            ]);
        User::create([
            'name' =>'Ala',
            'email' => 'Ala@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'describe' => 'this the Admin Account',
            ]);



    }
}
