<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    use HasFactory;

    protected $table = 'ctl_parentesco';

    protected $fillable = [
        'nombre',
    ];


    public function familiar()
    {
        return $this->hasMany(Familiar::class, 'id_parentesco');
    }
}
