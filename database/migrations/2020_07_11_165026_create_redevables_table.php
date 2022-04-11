<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedevablesTable extends Migration
{

    public function up()
    {
        Schema::create('redevables', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('noms');
          $table->string('prenoms');
          $table->string('telephone');
          $table->string('email')->unique();
          $table->string('nature');
          $table->string('Patente');
          $table->string('password');
          $table->integer('id_quartier')->unsigned();
          $table->foreign('id_quartier')->references('id')->on('quartiers');
          $table->integer('id_activite')->unsigned();
          $table->foreign('id_activite')->references('id')->on('activites');
          $table->integer('id_typeR')->unsigned();
          $table->foreign('id_typeR')->references('id')->on('types_redevabilites');
          $table->softDeletes();
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
        Schema::dropIfExists('redevables');
    }
}
