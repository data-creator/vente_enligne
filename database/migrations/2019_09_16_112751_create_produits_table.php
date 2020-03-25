<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nom_produit');
            $table->text('discription_produit');
            $table->float('prix_achat_produit');
            $table->float('prix_vents_produit');
            $table->unsignedBigInteger('univers_id');
            $table->foreign('univers_id')->references('id')->on('univers')->onDelete('cascade');
            $table->unsignedBigInteger('sous_types_id');
            $table->foreign('sous_types_id')->references('id')->on('sous_types')->onDelete('cascade');
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
        Schema::dropIfExists('produits');
    }
}
