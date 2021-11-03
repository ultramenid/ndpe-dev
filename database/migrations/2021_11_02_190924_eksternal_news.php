<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EksternalNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eksternalnews', function (Blueprint $table) {
            $table->id();
            $table->timestamp('publishdate')->nullable();
            $table->string('tags');
            $table->string('img');
            $table->string('titleEN');
            $table->string('titleID');
            $table->string('titleJP');
            $table->string('descEN');
            $table->string('descID');
            $table->string('descJP');
            $table->integer('isActive');
            $table->string('slugEN');
            $table->string('slugID');
            $table->string('slugJP');
            $table->string('sourcename');
            $table->string('sourceurl');

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
        Schema::dropIfExists('eksternalnews');

    }
}
