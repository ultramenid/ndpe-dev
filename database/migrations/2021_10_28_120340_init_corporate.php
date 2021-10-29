<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InitCorporate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporateprofile', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('img');
            $table->string('descEN');
            $table->string('descID');
            $table->string('descJP');
            $table->text('overviewEN');
            $table->text('overviewID');
            $table->text('overviewJP');
            $table->text('areaEN');
            $table->text('areaID');
            $table->text('areaJP');
            $table->text('ownershipEN');
            $table->text('ownershipID');
            $table->text('ownershipJP');
            $table->text('financialEN');
            $table->text('financialID');
            $table->text('financialJP');
            $table->text('buyerEN');
            $table->text('buyerID');
            $table->text('buyerJP');
            $table->text('performanceEN');
            $table->text('performanceID');
            $table->text('performanceJP');
            $table->integer('deforestation');
            $table->integer('biodiversityloss');
            $table->integer('peatlanddestruc');
            $table->integer('socialconflict');
            $table->string('nilai1');
            $table->string('nilai2');

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
        Schema::dropIfExists('corporateprofile');
    }
}
