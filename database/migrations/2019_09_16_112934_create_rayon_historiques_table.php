<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRayonHistoriquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rayon_historiques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rayons_id');
            $table->foreign('rayons_id')->references('id')->on('rayons')->onDelete('cascade');
            $table->unsignedBigInteger('historiques_id');
            $table->foreign('historiques_id')->references('id')->on('historiques')->onDelete('cascade');
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
        Schema::dropIfExists('rayon_historiques');
    }
}
