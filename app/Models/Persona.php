<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory;
    use SoftDeletes;

   protected $table = 'persona';

   protected $fillable = [
     'id_familiar',
     'primer_nombre',
     'segundo_nombre',
     'primer_apellido',
     'segundo_apellido',
     'fecha_nacimiento',
     'id_departamento',
     'id_estado_civil',
     'profesion',
     'id_religion',
     'dui',
     'direccion_residencia',
     'acta_nacimiento_folio',
     'acta_nacimiento_libro',
     'acta_nacimiento_partida',
     'acta_nacimiento_anio',
     'acta_nacimiento_alcaldia',
   ];

   public function departamento()
   {
    return $this->belongsTo(Departamento::class, 'id_departamento');
   }

   public function estado_civil()
   {
    return $this->belongsTo(EstadoCivil::class, 'id_estado_civil');
   }

   public function religion()
   {
    return $this->belongsTo(Religion::class, 'id_religion');
   }

   public function familiar()
   {
    return $this->hasOne(Familiar::class, 'id_persona');
   }

   public function documento()
   {
    return $this->belongsTo(Documento::class, 'id_Persona');
   }

   public function declaracion()
   {
    return $this->hasMany(Declaracion::class, 'id_Persona');
   }

   public function declaracion_testigo()
   {
    return $this->hasMany(DeclaracionTestigo::class, 'id_Persona');
   }
}