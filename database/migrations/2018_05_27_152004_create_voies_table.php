<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('slug');
            $table->string('quotation_voies');
            $table->string('descriptif');
            $table->string('longueur_corde_conseillees');
            $table->string('nbre_degaines_conseillees');
            $table->string('quotation_plaisir');

            $table->integer('spot_id')->unsigned()->nullable();
            $table->foreign('spot_id')->references('id')->on('spots')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voies');
    }
}
