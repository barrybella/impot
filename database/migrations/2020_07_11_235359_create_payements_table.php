<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payements', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->string('montant');
              $table->date('Date');
              $table->integer('id_taxes')->unsigned();
              $table->foreign('id_taxes')->references('id')->on('taxes');
              $table->integer('id_redevable')->unsigned();
              $table->foreign('id_redevable')->references('id')->on('redevables');
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
        Schema::dropIfExists('payements');
    }
}
