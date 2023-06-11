<?php

namespace Database\Seeders;

use App\Enum\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permission = Permission::create(['name' => 'all']);

        Role::create(['name' => RoleEnum::SUPER_ADMIN])->givePermissionTo($permission);
        Role::create(['name' => RoleEnum::TRAINER])->givePermissionTo($permission);
        Role::create(['name' => RoleEnum::TRAINEE])->givePermissionTo($permission);
    }
}
