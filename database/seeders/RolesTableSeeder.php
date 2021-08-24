<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name' => 'Vendedor' //1
            ],
            [
                'name' => 'Estoquista'//2
            ],
            [
                'name' => 'Gerente' //3
            ],
        ]);
    }
}
