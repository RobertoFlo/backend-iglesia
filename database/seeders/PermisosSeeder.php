<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::where('name','Administrador')->first();
        $adminTEC= Role::where('name','Técnico')->first();

       
        $AGREGAR_REGISTROS = Permission::create(['name' => 'GUARDAR_REGISTRO', 'label' => 'Visualizar boton agregar registro', 'guard_name' => 'sanctum']);
        $EDITAR_REGISTROS = Permission::create(['name' => 'EDITAR_REGISTRO', 'label' => 'Visualizar boton editar registro', 'guard_name' => 'sanctum']);
        $LISTAR_REGISTROS = Permission::create(['name' => 'LISTAR_REGISTROS', 'label' => 'Visualizar listado de registro', 'guard_name' => 'sanctum']);
        $GENERAR_REPORTE = Permission::create(['name' => 'GENERAR_REPORTE', 'label' => 'Visualizar boton de generar reporte', 'guard_name' => 'sanctum']);
        $AGREGAR_PERSONA = Permission::create(['name' => 'GUARDAR_PERSONA', 'label' => 'Visualizar boton de agregar persona', 'guard_name' => 'sanctum']);
        $EDITAR_PERSONAS = Permission::create(['name' => 'EDITAR_PERSONA', 'label' => 'Visualizar boton de editar persona', 'guard_name' => 'sanctum']);
        $LISTAR_PERSONAS = Permission::create(['name' => 'LISTAR_PERSONAS', 'label' => 'Visualizar listado de personas', 'guard_name' => 'sanctum']);
        $DASHBOARD = Permission::create(['name'=> 'DASHBOARD', 'label' => 'Visualizar dashboard','guard_name' =>'sanctum']);
        
        $adminPermisos = [
            $AGREGAR_REGISTROS,
            $EDITAR_REGISTROS, 
            $LISTAR_REGISTROS, 
            $GENERAR_REPORTE, 
            $AGREGAR_PERSONA,
            $EDITAR_PERSONAS,
            $LISTAR_PERSONAS,
            $DASHBOARD,
        ];
      
        $adminTECPermisos = [
            $AGREGAR_REGISTROS,
            $EDITAR_REGISTROS, 
            $LISTAR_REGISTROS, 
            $AGREGAR_PERSONA,
            $EDITAR_PERSONAS,
            $LISTAR_PERSONAS,
            $DASHBOARD,
        ];
      
        $adminTEC->syncPermissions($adminTECPermisos);
        
        $admin->syncPermissions($adminPermisos);
    }
}
