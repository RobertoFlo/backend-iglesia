<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'ctl_departamento';

    protected $fillable = [
      'nombre',
    ];


    public function persona()
    {
        return $this->hasMany(Persona::class, 'id_departamento');
    }
}
