<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quejas', function (Blueprint $table) {
            $table->id();
            $table->string("autogenerado_que", 100);
            $table->string("motivo_que", 100);
            $table->date("fecha_recepcion");
            $table->foreignId("id_clientes")->constrained("clientes");
            $table->foreignId("id_usuarios")->constrained("users");
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
        Schema::dropIfExists('quejas');
    }
}
