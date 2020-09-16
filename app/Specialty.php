<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    //
    public $table="specialty";
    protected $fillable=["id","description","instituteid"];
    public function institute()
    {
        return $this->belongsTo(Institute::class,"instituteid");
    }

}
