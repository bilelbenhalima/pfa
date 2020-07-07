<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('addresse')->nullable();
            $table->string('codepostal')->nullable();
            $table->string('ville')->nullable();
            $table->string('telfixe')->nullable();
            $table->string('telmobile')->nullable();
            $table->string('mail')->nullable();
            $table->string('web')->nullable();
            $table->string('specialite')->nullable();
            $table->integer('Docteur_id')->unsigned();
            $table->foreign('Docteur_id')->references('id')->on('users');
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
        Schema::dropIfExists('secretaires');
    }
}
