<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerrenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrenos', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->text('descripcion');
            $table->text('imagen');

            $table->text('lugar');

            $table->text('metros');
            $table->text('pago');
            $table->text('facilidad');
            $table->text('enganche');
            $table->text('caracteristica');

            $table->text('imagen1');
            $table->text('imagen2');
            $table->text('imagen3');
            $table->text('imagen4');
            $table->text('imagen5');
            $table->text('imagen6');
            $table->text('imagen7');
            $table->text('imagen8');
            $table->text('imagen9');

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
        Schema::dropIfExists('terrenos');
    }
}

