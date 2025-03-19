<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Carlos Medina',
            'email' => 'carlosjuni.medina@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        $user->assignRole('Administrador');



        $users = User::factory(5)->create();
        foreach ($users as $user) {
            $users->assignRole('Cliente');
        }
    }
}
