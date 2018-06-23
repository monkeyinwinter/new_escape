<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('spots', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('slug');
          $table->string('nombre_voies');
          $table->string('nombre_degaines');
          $table->string('temps_approche');
          $table->string('type_roche');
          $table->string('altitude');
          $table->string('longueur_corde');
          $table->string('nombre_secteur');
          $table->string('voies_4');
          $table->string('voies_5');
          $table->string('voies_6');
          $table->string('voies_7');
          $table->string('voies_8');
          $table->string('expo_soleil');
          $table->timestamps();

          $table->integer('ville_id')->unsigned()->nullable();
          $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade')->onUpdate('cascade');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spots');
    }
}
