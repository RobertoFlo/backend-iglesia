<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Enums\RoleEnum;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate([
            'name' => RoleEnum::ROLE_ADMINISTRADOR,
            'guard_name' => 'sanctum',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);


        Role::firstOrCreate([
            'name' => RoleEnum::ROLE_TECNICO,
            'guard_name' => 'sanctum',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),

        ]);
    }
}
