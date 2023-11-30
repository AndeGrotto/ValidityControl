<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Administrador', 'email' => 'admin@gmail.com', 'password' => '$2y$10$dDFOPoKvdWgCoxTCSdcL1.ZI8gNZGm4hNeNdcBD.pGc./Bb51o6X2']); //Senha: admin
    }
}
