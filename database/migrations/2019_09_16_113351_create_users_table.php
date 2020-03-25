<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nom_user');
            $table->text('prenom_user');
            $table->text('email_user');
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password_user');
            $table->date('date_nai_user');
            $table->text('image_user');
            $table->unsignedBigInteger('villes_id');
            $table->foreign('villes_id')->references('id')->on('villes')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
