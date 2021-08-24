<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\RolePermission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(
            [
                ///RolesTableSeeder::class,
                RolePermissionSeeder::class,
                PermissionsTableSeeder::class
            ]
        );
    }
}
