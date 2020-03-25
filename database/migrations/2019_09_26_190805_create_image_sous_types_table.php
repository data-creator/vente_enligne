<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageSousTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_sous_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('src_image');

            $table->unsignedBigInteger('sou_typs_id');
            $table->foreign('sou_typs_id')->references('id')->on('sous_types')->onDelete('cascade');
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
        Schema::dropIfExists('image_sous_types');
    }
}
