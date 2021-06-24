<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->id();
            $table->integer('tickets_adultos');
            $table->integer('tickets_infantiles');
            $table->datetime('fecha_compra');
            $table->foreignId('id_evento')->constrained('evento');
            $table->foreignId('id_usuario')->constrained('usuario');
            $table->foreignId('id_fecha')->constrained('fechas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro');
    }
}
