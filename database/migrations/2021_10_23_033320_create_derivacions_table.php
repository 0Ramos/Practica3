<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDerivacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('derivacions', function (Blueprint $table) {
            $table->id();
            $table->string("destino_der", 100);
            $table->date("fecha_der");
            $table->foreignId("id_quejas")->constrained("quejas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('derivacions');
    }
}
