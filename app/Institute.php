<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
     // las tablas deben de ser creadas en plural sino
     // se puede especificar
    public $table = "institute";
    //
    protected $fillable = ['id', 'description'];
}
