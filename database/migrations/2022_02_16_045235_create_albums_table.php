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
        Schema::create('albums', function (Blueprint $table) {
            $table->Increments('id_Album');
            $table->string('nombre_Album','70');
            $table->year('año_Publicacion',);
            $table->string('nombre_Artistico','50');
            $table->unsignedInteger('idArtistaFK');
            $table->foreign('idartistaFK')->references('id_Artista')->on('Artistas');
            $table->unsignedInteger('idgeneroFK');
            $table->foreign('idgeneroFK')->references('id_Genero')->on('Generos');
            $table->string('estado_Album','10');

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
        Schema::dropIfExists('albums');
    }
};
