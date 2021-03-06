<?php

namespace Database\Seeders;

use App\Models\RolePermission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RolePermission::insert([
            // vendedor: ver_produto
            [
                'role_id' => 1,
                'permission_id' => 3
            ],
            // Estoquista: cadastrar_produto
            [
                'role_id' => 1,
                'permission_id' => 6
            ],
            // Estoquista: ver_produto
            [
                'role_id' => 2,
                'permission_id' => 1
            ],
            // Estoquista: alterar_produto
            [
                'role_id' => 2,
                'permission_id' => 3
            ],

            // Gerente: alterar_produto
            [
                'role_id' => 3,
                'permission_id' => 1
            ],
            [
                'role_id' => 3,
                'permission_id' => 2
            ],
            [
                'role_id' => 3,
                'permission_id' => 3
            ],
            [
                'role_id' => 3,
                'permission_id' => 4
            ],
            [
                'role_id' => 3,
                'permission_id' => 5
            ],
            [
                'role_id' => 3,
                'permission_id' => 6
            ],


        ]);
    }
}
