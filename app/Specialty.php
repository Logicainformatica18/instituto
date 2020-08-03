<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
     // las tablas deben de ser creadas en plural sino
     // se puede especificar
    public $table = "specialty";
    //
    protected $fillable = ['id', 'description'];
}
