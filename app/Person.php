<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    public $table="person";
    protected $fillable = ['id','dni', 'positionid','firstname','lastname','names','password','datebirth','cellphone','photo','email','sex'];
    //

}
