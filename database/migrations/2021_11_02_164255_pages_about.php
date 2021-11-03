<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PagesAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pageabout', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('theplatformEN');
            $table->text('theplatformID');
            $table->text('theplatformJP');
            $table->text('ownershipEN');
            $table->text('ownershipID');
            $table->text('ownershipJP');
            $table->text('editorialEN');
            $table->text('editorialID');
            $table->text('editorialJP');
            $table->text('contentEN');
            $table->text('contentID');
            $table->text('contentJP');
            $table->text('timelineEN');
            $table->text('timelineID');
            $table->text('timelineJP');
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
        Schema::dropIfExists('pageabout');

    }
}
