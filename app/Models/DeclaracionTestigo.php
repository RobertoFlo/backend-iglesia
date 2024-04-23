<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclaracionTestigo extends Model
{
    use HasFactory;

    protected $table = 'declaracion_testigo';


    protected $fillable = [
        'id_persona',
        'id_declaracion',
    ];


    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_Persona');
    }

    public function declaracion()
    {
        return $this->belongsTo(Declaracion::class, 'id_declaracion');
    }
}
