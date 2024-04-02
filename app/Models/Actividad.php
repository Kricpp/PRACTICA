<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Actividad extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'dia',
        'horario',
    ];

    public function actividadanimals()
    {
        return $this->hasMany('App\Models\ActividadAnimal','actividad_Id');
    }
}
