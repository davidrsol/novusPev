<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
   protected $table = "Departamentos";

    protected $fillable = ['id', 'departamento', 'idCampus'];

    public function campus()
    {
    	return $this->belongsTo(Campus::class, 'idCampus');
    }
}