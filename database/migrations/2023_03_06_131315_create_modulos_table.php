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
        Schema::create('c_modulos', function (Blueprint $table) {
            $table->id();
            $table->integer('idMunicipio')->nullable();
            $table->string('municipio')->nullable();
            $table->string('nombre')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('telefono_publico')->nullable();
            $table->string('geolocalizacion')->nullable();
            $table->string('responsable')->nullable();
            $table->string('telefono_responsable')->nullable();
            $table->string('longitud')->nullable();
            $table->string('latitud')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('c_modulos');
    }
}
