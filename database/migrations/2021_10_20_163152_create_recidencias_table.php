<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recidencias', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->text('descripcion');
            $table->text('imagen');
            $table->string('lugar');

            $table->string('pago');
            $table->string('facilidad');
            $table->string('enganche');
            $table->text('caracteristica');
            
            $table->string('metros');
            $table->boolean('habitaciones');
            $table->boolean('banos');
            $table->boolean('closet');
            $table->boolean('piscina');
            $table->boolean('valcon');
            $table->boolean('terraza');
            $table->boolean('rooftop');
            $table->boolean('estacionamiento');
            $table->boolean('seguridad');
            $table->boolean('barda');
            $table->boolean('verdes');
            $table->boolean('parque');
            $table->boolean('casaclub');
            $table->boolean('porton');
            $table->boolean('familyroom');
            $table->boolean('sala');
            $table->boolean('escalera');
            $table->boolean('recamara');
            $table->boolean('vestibulo');
            $table->boolean('bodega');
            $table->boolean('lavado');
            $table->boolean('estudio'); 
            
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
        Schema::dropIfExists('recidencias');
    }
}
