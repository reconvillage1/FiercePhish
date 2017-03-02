<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostedFileViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosted_file_views', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hosted_file_id');
            $table->string('ip');
            $table->string('useragent');
            $table->string('browser');
            $table->string('browser_version');
            $table->string('browser_maker');
            $table->string('platform');
            $table->string('uuid');
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
        Schema::dropIfExists('hosted_file_views');
    }
}