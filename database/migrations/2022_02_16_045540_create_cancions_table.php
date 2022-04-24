<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancions', function (Blueprint $table) {
            $table->Increments('id_Cancion');
            $table->string('nombre_Cancion','50');
            $table->date('fecha_Grabacion');
            $table->string('duracion_Cancion','5');
            $table->unsignedInteger('idAlbumFK');
            $table->foreign('idAlbumFK')->references('id_Album')->on('Albums');

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
        Schema::dropIfExists('cancions');
    }
};
