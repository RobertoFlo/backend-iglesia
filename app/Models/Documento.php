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
   
     'numero_tomo',
     'numero_pagina',
     'id_tipo_documento',
     'comentarios',
     'anio',
     'libro',
    ];


    public function documentos()
    {
        return $this->belongsTo(Documentos::class, 'id_tipo_documento');
    }

    public function confirma()
    {
        return $this->hasOne(Confirma::class, 'id_documento');
    }

    public function bautizo()
    {
        return $this->hasOne(Bautizo::class, 'id_documento');
    }

  
    public function declaracion()
    {
        return $this->hasMany(Declaracion::class, 'id_documento');
    }
}
