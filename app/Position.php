<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    public $table="position";
    protected $fillable = ['id', 'description'];
}
