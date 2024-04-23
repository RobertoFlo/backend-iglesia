<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CtlParentesco extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $ctlparentesco = [
            'Padre',
            'Madre',
        ];
    
        foreach($ctlparentesco as $ctl_parentesco){
            DB::table('ctl_parentesco')->insert([
                'nombre' => $ctl_parentesco,
            ]);
        }
    }
}
