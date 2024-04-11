<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;

    protected $table = 'ctl_estado_civil';

    protected $fillable = [
       'nombre',
    ];

    
    public function persona()
    {
        return $this->hasMany(Persona::class, 'id_estado_civil');
    }
}
