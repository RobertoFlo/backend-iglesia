<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CtlReligion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $religiones = [
            'Cristianismo',
            'Islam',
            'Hinduismo',
            'Budismo',
            'Judaísmo',
            'Sikhismo',
            'Jainismo',
            'Zoroastrismo',
            'Bahaísmo',
            'Shinto',
            'Taoísmo',
            'Confucianismo',
            'Sintoísmo',
            'Wicca',
            'Druidismo',
            'N/A',
        ];
    
        foreach($religiones as $religion){
            DB::table('ctl_religion')->insert([
                'nombre' => $religion,
            ]);
        }
    }
}
