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
        Schema::create('disqueras', function (Blueprint $table) {
            $table->Increments('id_Disquera');
            $table->string('nit_Disquera','20');
            $table->string('nombre_Disquera','100');
            $table->string('telefono','15');
            $table->string('direccion_Disquera','100');
            $table->string('Estado_Disquera','80');

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
        Schema::dropIfExists('disqueras');
    }
};
