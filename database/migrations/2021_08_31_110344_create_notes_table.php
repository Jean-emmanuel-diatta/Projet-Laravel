<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('appreciation');
            $table->integer('eleve')->unsigned();
            $table->foreign('eleve')->references('id')->on('eleves');
            $table->integer('epreuve')->unsigned();
            $table->foreign('epreuve')->references('id')->on('epreuves');
            $table->float('noteObtenue');
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
        Schema::dropIfExists('notes');
    }
}
