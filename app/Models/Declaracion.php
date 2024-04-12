<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Declaracion extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'Declaracion';

    protected $fillable = [
        'fecha_declaracion',
        'fecha_celebracion',
        'id_persona',
        'fecha_expediente',
        'fecha_documento',
        'id_documento',
    ];


    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'id_documento');
    }
    public function declaracion_testigo()
    {
        return $this->hasOne(DeclaracionTestigo::class,'id_declaracion');
    }

   
}
