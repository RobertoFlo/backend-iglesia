<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcionMenu extends Model
{
    
    use HasFactory;
    protected $table = "mnt_opcion_menu";
    protected $fillable = ["nombre", "path", "icono"];

    public function permisos()
    {
        return $this->belongsToMany(Role::class, 'mnt_opcion_menu_permission','id_opcion_menu', 'permission_id');
    }
}
