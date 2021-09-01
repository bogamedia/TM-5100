<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id('id_evento');
            $table->string('imagen');
            $table->tinyText('titulo');
            $table->string('lugar_evento');
            $table->dateTime('fecha_hora');
            $table->tinyText('categoria');
            $table->string('descripcion');
            $table->boolean('tipo_pago');
            $table->boolean('restriccion_evento');
            $table->integer('precio_adultos');
            $table->integer('precio_ninios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
