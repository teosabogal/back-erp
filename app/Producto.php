<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use SoftDeletes;
    protected $fillable = [
         'reference'
        ,'name'
        ,'description'
        ,'logo'
        ,'date_release'
        ,'date_revision'
     ];

}
