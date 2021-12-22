<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{

    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('color1');
            $table->string('color2');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('correo');
            $table->string('whatsapp');
            $table->string('footer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('headers');
    }
}
