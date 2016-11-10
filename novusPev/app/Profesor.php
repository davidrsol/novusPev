<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = "Profesores";

    protected $fillable = ['id', 'nombre', 'apellido', 'idPaisOrigen', 'idPaisResidencia', 'link', 'emailItesm', 'emailPersonal', 'foto', 'experiencia', 'idDirector', 'campus'];

    public function director()
    {
    	return $this->belongsTo(Director::class, 'idDirector');
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'idProfesor');
    }

    public function paisDeOrigen()
    {
        return $this->belongsTo(Pais::class, 'idPaisOrigen');
    }

    public function paisResidencia()
    {
        return $this->belongsTo(Pais::class, 'idPaisResidencia');
    }

    public function campus()
    {
        return $this->belongsTo(Campus::class, 'campus');
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class, 'idProfesor');
    }
}