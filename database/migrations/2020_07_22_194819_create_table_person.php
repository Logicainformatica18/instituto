<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string("dni",9);
            $table->bigInteger("positionid")->unsigned();
            $table->foreign("positionid")->references("id")->on("position");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("names");
            $table->string("password");
            $table->date("datebirth");
            $table->string("cellphone",20);
            $table->binary("photo");
           $table->string("email",100)->unique();
            $table->string("sex",1);
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
        Schema::dropIfExists('person');
    }
}
