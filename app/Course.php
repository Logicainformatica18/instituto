<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public $table="course";
    protected $fillable=["id","description","cicle","specialtyid"];
}
