<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpreuvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epreuves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomEpreuve');
            $table->time('heureDebut');
            $table->time('heureFin');
            $table->integer('examens_id')->unsigned();
            $table->foreign('examens_id')->references('id')->on('examens');
            $table->integer('commissions_id')->unsigned();
            $table->foreign('commissions_id')->references('id')->on('commissions');
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
        Schema::dropIfExists('epreuves');
    }
}
