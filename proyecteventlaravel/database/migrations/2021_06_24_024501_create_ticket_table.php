<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table -> id('id_ticket');
            $table->tinyText('id_evento');
            $table -> dateTime('fecha_hora');
            $table -> tinyText('nombre');
            $table -> tinyText('apellidos');
            $table -> tinyText('correo');
            $table -> integer('espacio_ninio');
            $table -> integer('espacio_adulto');
            $table -> integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
