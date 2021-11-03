<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageBenchmark extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagebenchmark', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('benchmarkEN');
            $table->text('benchmarkID');
            $table->text('benchmarkJP');
            $table->text('producerEN');
            $table->text('producerID');
            $table->text('producerJP');
            $table->text('buyerinvestorEN');
            $table->text('buyerinvestorID');
            $table->text('buyerinvestorJP');
            $table->text('individualEN');
            $table->text('individualID');
            $table->text('individualJP');
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
        Schema::dropIfExists('pagebenchmark');
    }
}
