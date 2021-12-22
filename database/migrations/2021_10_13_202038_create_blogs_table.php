<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            
            $table->string('image'); 

            $table->string('image1'); 
            $table->string('titulo1');
            $table->text('tema1');

            $table->string('image2'); 
            $table->string('titulo2');
            $table->text('tema2');

            $table->string('image3'); 
            $table->string('titulo3');
            $table->text('tema3');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
