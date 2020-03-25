<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandLivreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_livrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('commandes_id');
            $table->foreign('commandes_id')->references('id')->on('commandes')->onDelete('cascade');
            $table->unsignedBigInteger('livrees_id');
            $table->foreign('livrees_id')->references('id')->on('livrees')->onDelete('cascade');
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
        Schema::dropIfExists('command_livrees');
    }
}
