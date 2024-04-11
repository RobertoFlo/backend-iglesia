<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Familiar extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Familiar';

    protected $fillable = [
       'id_persona',
       'id_parentesco',
    ];


    public function persona()
    {
        return $this->hasMany(Persona::class, 'id_persona');
    }

    public function parentesco()
    {
        return $this->hasOne(Parentesco::class, 'id_parentesco');
    }
}
