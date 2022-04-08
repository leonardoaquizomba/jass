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
        Schema::create('projectos', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->longText("descricao");
            $table->date("conclusao");
            $table->string("cliente");
            $table->string("arquitecto");
            $table->string("localizacao");
            $table->string("area");
            $table->string("servicos_prestados");
            $table->double("custo");
            $table->longText("imagens");
            $table->unsignedBigInteger("projecto_categoria_id");
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
        Schema::dropIfExists('projectos');
    }
};
