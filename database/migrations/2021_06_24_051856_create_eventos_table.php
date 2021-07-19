<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->string('lugar', 100);
            $table->enum('categoria', ['Conciertos', 'Infantiles', 'Familiares', 'Deportes', 'Festivales', 'Teatro y cultura']);
            $table->integer('precio');
            $table->enum('tipo_publico', ['Adultos', 'Todo público']);
            $table->string('descripcion', 250);
            $table->string('img');
            $table->boolean('disponible');
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
        Schema::dropIfExists('evento');
    }
}
