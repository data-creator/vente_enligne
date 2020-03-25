<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitRayonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_rayons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produits_id');
            $table->foreign('produits_id')->references('id')->on('produits')->onDelete('cascade');
            $table->unsignedBigInteger('rayons_id');
            $table->foreign('rayons_id')->references('id')->on('rayons')->onDelete('cascade');
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
        Schema::dropIfExists('produit_rayons');
    }
}
