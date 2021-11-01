<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InternalUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internalnews', function (Blueprint $table) {
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
            $table->text('contentEN');
            $table->text('contentID');
            $table->text('contentJP');
            $table->integer('isActive');
            $table->string('slugEN');
            $table->string('slugID');
            $table->string('slugJP');


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
        Schema::dropIfExists('internalnews');
    }
}
