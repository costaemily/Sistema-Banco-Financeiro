<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->date('data_abertura');
            $table->float('saldo', 8, 2);
            $table->string('numero', 10);
            $table->string('senha_cartao', 10);
            $table->string('senha_internet', 10);
            $table->string('taxa_juros', 10);
            $table->string('limite_credito', 10);
            $table->string('taxa_rendimento', 10);
            $table->string('tipo_conta', 100);
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
        Schema::dropIfExists('contas');
    }
}
