<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitCouleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_couleurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('couleurs_id');
            $table->foreign('couleurs_id')->references('id')->on('couleurs')->onDelete('cascade');
            $table->unsignedBigInteger('produits_id');
            $table->foreign('produits_id')->references('id')->on('produits')->onDelete('cascade');
            $table->bigInteger('quantite_produits');
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
        Schema::dropIfExists('produit_couleurs');
    }
}
