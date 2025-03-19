<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Dashboard
        Permission::create([
            'name' => 'Ver dashboard'
        ]);
        //Clientes
        Permission::create([
            'name' => 'Listar mesas'
        ]);
        Permission::create([
            'name' => 'Crear mesas'
        ]);
        Permission::create([
            'name' => 'Editar mesas'
        ]);
        Permission::create([
            'name' => 'Eliminar mesas'
        ]);
    }
}
