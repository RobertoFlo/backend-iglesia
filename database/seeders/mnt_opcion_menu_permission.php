<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class mnt_opcion_menu_permission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mnt_opcion_menu_permission')->insert([
            ['id_opcion_menu' => 1, 'permission_id' => 3],
            ['id_opcion_menu' => 2, 'permission_id' => 4],
            ['id_opcion_menu' => 3, 'permission_id' => 7],
         
        ]);
    }
}
