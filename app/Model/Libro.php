<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "libros";

    protected $fillable = ['titulo','autor'];

    public function estudiante()
    {
        return $this->belongsTo('App\Model\Estudiante','estudiantes_id');
    }
}
