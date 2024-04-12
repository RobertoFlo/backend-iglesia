<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Confirma extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Confirma';

    protected $fillable = [
     'fecha_confirma',
     'id_Persona',
     'nombre_Parroco',
     'padrino',
     'madrina',
     'parroquia_bautizo',
     'id_documento'

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
