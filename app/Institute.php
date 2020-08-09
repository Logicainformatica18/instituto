<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    // las tablas deben de ser creadas en plural sino
    // se puede especificar
    public $table = "institute";
    /*Y en esta parte si utilizaramos PHP POO
        tendriamos que crear las propiedades,
        los getter y setter, pero en Laravel usaremos un array $fillable
         y le agregamos los campos o columnas de la tabla que queremos llenar.
    */
    protected $fillable = ['id', 'description'];
}
