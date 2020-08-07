<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("registrydetailid")->unsigned();
            $table->foreign("registrydetailid")->references("id")->on("registrydetail");
            $table->integer("n1")->default(0);
            $table->integer("n2")->default(0);
            $table->integer("n3")->default(0);
            $table->integer("n4")->default(0);
            $table->integer("n5")->default(0);
            $table->integer("ex1")->default(0);
            $table->integer("p1")->default(0);
            $table->integer("n7")->default(0);
            $table->integer("n8")->default(0);
            $table->integer("n9")->default(0);
            $table->integer("n10")->default(0);
            $table->integer("n11")->default(0);
            $table->integer("ex2")->default(0);
            $table->integer("p2")->default(0);
            $table->integer("pend")->default(0);
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
        Schema::dropIfExists('note');
    }
}
