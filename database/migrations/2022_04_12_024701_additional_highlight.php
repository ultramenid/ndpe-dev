<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corporateprofile', function (Blueprint $table) {
            $table->string('nilai1DescID');
            $table->string('nilai1DescEN');
            $table->string('nilai1DescJP');
            $table->string('nilai2DescID');
            $table->string('nilai2DescEN');
            $table->string('nilai2DescJP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
