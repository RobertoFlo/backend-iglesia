<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enums\RoleEnum;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $admin = new User();
        $admin->name = RoleEnum::ROLE_ADMINISTRADOR;
        $admin->email = 'admin@admin.com';
        $admin->email_verified_at = new \DateTime();
        $admin->password = Hash::make(env('USER_SEEDER_PASSWORD', 'Admin123$'));
        $admin->created_at = new \DateTime();
        $admin->updated_at = new \DateTime();
        $admin->save();
        $admin->assignRole(RoleEnum::ROLE_ADMINISTRADOR);

        $tecConsulado = new User();
        $tecConsulado->name = RoleEnum::ROLE_TECNICO;
        $tecConsulado->email = 'tec.consulado@gmail.com';
        $tecConsulado->email_verified_at = new \DateTime();
        $tecConsulado->password = Hash::make(env('USER_SEEDER_PASSWORD', 'Admin123$'));
        $tecConsulado->created_at = new \DateTime();
        $tecConsulado->updated_at = new \DateTime();
        $tecConsulado->save();
        $tecConsulado->assignRole(RoleEnum::ROLE_TECNICO);

    }
}
