<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadFakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidad_fakers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email_personal');
            $table->string('email_establecimiento');
            $table->string('password');
            $table->date('fecha_nacimiento');
            $table->string('telefono');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('pregunta');
            $table->string('respuesta');
            $table->string('categoria');
            $table->string('faq_pregunta');
            $table->string('faq_respuesta');
            $table->string('avatar');
            $table->unsignedInteger('puntaje');
            $table->string('nombre_establecimiento');
            $table->string('direccion');
            $table->string('nombre_premio');
            $table->string('tipo_premio');
            $table->unsignedDecimal('descuento');
            $table->boolean('correcto');
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
        Schema::dropIfExists('entidad_fakers');
    }
}
