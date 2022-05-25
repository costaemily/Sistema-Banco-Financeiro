<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciasBancariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencia_bancarias', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nome', 50);
            $table->string('numero', 20);
            $table->string('cnpj', 20);
            $table->string('email', 50);
            $table->string('numero_endereco', 20);
            $table->string('numero_telefone', 20);
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
        Schema::dropIfExists('agencia_bancarias');
    }
}
