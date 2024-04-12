<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    use HasFactory;

    protected $table = 'ctl_documentos';

    protected $fillable = [
        'nombre',
    ];

    public function documento()
    {
        return $this->hasOne(Documento::class, 'id_tipo_documento');
    }
}
