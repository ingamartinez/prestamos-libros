<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = "prestamos";

    public function estudiante()
    {
        return $this->belongsTo('App\Model\Estudiante','estudiantes_id');
    }

    public function libro(){

        return $this->belongsTo('App\Model\Libro','libros_id');
    }
}
