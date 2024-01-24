<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id'); // ID del cliente (clave externa)
            $table->foreign('client_id')->references('id')->on('clientes');
            $table->string('color_principal');
            $table->string('color_secundario');
            $table->string('logo_path')->nullable();
            $table->text('productos');

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
        Schema::dropIfExists('webs');
    }
}
