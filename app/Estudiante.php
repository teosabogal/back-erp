<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use SoftDeletes;
    protected $fillable = [
         'nombre' 
        ,'fecha_nacimiento'    
        ,'experiencia'
     ];

     

    
}
