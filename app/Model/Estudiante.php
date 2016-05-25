<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "estudiantes";

    protected $fillable = ['nombre','apellido','codigo'];


    
}
