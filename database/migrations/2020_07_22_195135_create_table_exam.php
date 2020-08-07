<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableExam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("registryid")->unsigned();
            $table->foreign("registryid")->references("id")->on("registry"); 
            $table->string("question");
            $table->string("a");
            $table->string("b");
            $table->string("c");
            $table->string("d");
            $table->string("e");
            $table->string("reply");
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
        Schema::dropIfExists('exam');
    }
}
