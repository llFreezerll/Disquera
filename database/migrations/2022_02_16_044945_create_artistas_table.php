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
        Schema::create('artistas', function (Blueprint $table) {
            $table->Increments('id_Artista');
            $table->string('no_Documento','20')->unique();
            $table->string('tipo_Documento','20');
            $table->string('nombre_Artista','50');
            $table->string('apellido_Artista','50');
            $table->string('nombre_Artistico','50');
            $table->date('fe_Nacimi_Artista');
            $table->string('email_Artista','50')->nullable();
            $table->unsignedInteger('idDisqueraFK');
            $table->foreign('idDisqueraFK')->references('id_Disquera')->on('Disqueras');
            
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
        Schema::dropIfExists('artistas');
    }
};
