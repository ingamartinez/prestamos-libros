<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "libros";

    protected $fillable = ['titulo','autor'];
    
}
