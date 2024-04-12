<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bautizo extends Model
{
   

    use HasFactory, SoftDeletes;

    protected $table = 'Bautizo';

    protected $fillable = [
     'fecha_bautizo',
     'id_Persona',
     'nombre_Parroco',
     'id_tipo_documento',
     'id_documento',

    ];


    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_Persona');
    }
    public function documento()
    {
        return $this->belongsTo(Documento::class, 'id_documento');
    }


    
}


