<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRegistrydetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrydetail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("registryid")->unsigned();
            $table->foreign("registryid")->references("id")->on("registry"); 
            $table->bigInteger("student")->unsigned();
            $table->foreign("student")->references("id")->on("person"); 
            $table->bigInteger("specialtyid")->unsigned();
            $table->foreign("specialtyid")->references("id")->on("specialty");
            $table->string("module",3);
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
        Schema::dropIfExists('registrydetail');
    }
}
