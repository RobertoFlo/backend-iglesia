<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,  
            CtlReligion::class,
            CtlDepartamentos::class,
            CtlEstadoCivil::class,
            CtlParentesco::class,
            CtlDocumentos::class,
            RoleSeeder::class,
            PermisosSeeder::class,
            mnt_opcion_menu::class,
            mnt_opcion_menu_permission::class,
           
        ]);
    }
}
