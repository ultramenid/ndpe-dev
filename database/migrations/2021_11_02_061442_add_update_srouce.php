<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdateSrouce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('internalnews', function (Blueprint $table) {
            $table->string('sourcename');
            $table->string('sourceurl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('internalnews', function (Blueprint $table) {
            $table->dropColumn('sourcename');
            $table->dropColumn('sourceurl');
        });
    }
}
