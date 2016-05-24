<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "estudiantes";

    protected $fillable = ['nombre','apellido','codigo'];

    public function libro()
    {
        return $this->hasMany('App\Model\Libro','estudiantes_id');
    }
    
}
