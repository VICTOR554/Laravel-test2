<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalKeeperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_keeper', function (Blueprint $table) {
            $table->primary(['animal_id', 'keeper_id']);
            $table->bigInteger('animal_id')->unsigned();
            $table->bigInteger('keeper_id')->unsigned();

            $table->foreign('animal_id')->references('id')->on('enclosures')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('keeper_id')->references('id')->on('enclosures')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('animal_keeper');
    }
}
