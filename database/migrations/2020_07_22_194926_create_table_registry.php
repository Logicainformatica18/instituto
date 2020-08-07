<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRegistry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registry', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("personid")->unsigned();
            $table->foreign("personid")->references("id")->on("person"); 
            $table->bigInteger("teacher")->unsigned();
            $table->foreign("teacher")->references("id")->on("person"); 
            $table->bigInteger("instituteid")->unsigned();
            $table->foreign("instituteid")->references("id")->on("institute");
            $table->bigInteger("courseid")->unsigned();
            $table->foreign("courseid")->references("id")->on("course");
            $table->bigInteger("scheduleid")->unsigned();
            $table->foreign("scheduleid")->references("id")->on("schedule");
            $table->date("start");
            $table->date("end");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registry');
    }
}
