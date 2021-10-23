<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocions', function (Blueprint $table) {
            $table->id();
            $table->string("descripcion_pro", 100);
            $table->date("fecha_inicio");
            $table->date("fecha_fin");
            $table->string("objetivo", 100);
            $table->foreignId("id_clientes")->constrained("clientes");
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
        Schema::dropIfExists('promocions');
    }
}
