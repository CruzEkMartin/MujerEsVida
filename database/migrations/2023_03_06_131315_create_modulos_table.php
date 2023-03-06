<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->id();
            $table->integer('idMunicipio');
            $table->string('municipio');
            $table->string('nombre');
            $table->string('domicilio');
            $table->string('telefono_publico');
            $table->string('geolocalizacion');
            $table->string('responsable');
            $table->string('telefono_responsable');
            $table->string('longitud');
            $table->string('latitud');
            $table->boolean('status');
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
        Schema::dropIfExists('modulos');
    }
}
