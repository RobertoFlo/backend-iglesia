<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CtlDocumentos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ctldocumentos = [
            'Bautizo',
            'Matrimonio',
            'Confirma',
        ];
    
        foreach($ctldocumentos as $ctldocumento){
            DB::table('ctl_documentos')->insert([
                'nombre' => $ctldocumento,
            ]);
        }
    }
}
