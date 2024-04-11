<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documento extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Documento';

    protected $fillable = [
     'parroquia',
     'id_persona',
     'numero_tomo',
     'numero_pagina',
     'id_tipo_documento',
     'comentarios',
     'anio',
     'libro',
    ];


    public function documentos()
    {
        return $this->hasOne(Documentos::class, 'id_tipo_documento');
    }

    public function persona()
    {
        return $this->hasMany(Persona::class, 'id_persona');
    }
    public function declaracion()
    {
        return $this->hasOne(Declaracion::class, 'id_documento');
    }
}
