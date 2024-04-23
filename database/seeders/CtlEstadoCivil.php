<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CtlEstadoCivil extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estado_civil = [
            'Solter@',
            'Casad@',
            'Viud@',
            'N/A',
            
        ];
    
        foreach($estado_civil as $estado){
            DB::table('ctl_estado_civil')->insert([
                'nombre' => $estado,
            ]);
        }
    }
}
