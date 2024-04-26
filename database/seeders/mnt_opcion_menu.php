<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class mnt_opcion_menu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mnt_opcion_menu')->insert([
            ['nombre' => 'Administración general de registro', 'path' => 'administracion-general', 'icono' => 'settings', 'created_at' => now(), 'updated_at' => now(), 'mostrar'=>true],
            ['nombre' => 'Generar reporte', 'path' => 'bandeja-solicitudes', 'icono' => 'group_add', 'created_at' => now(), 'updated_at' => now(), 'mostrar'=>true],
            ['nombre' => 'Personas', 'path' => 'usuarios', 'icono' => 'account_circle', 'created_at' => now(), 'updated_at' => now(), 'mostrar'=>true],
            
        ]);
        DB::statement('ALTER SEQUENCE mnt_opcion_menu_id_seq RESTART WITH 2');
    }
}
