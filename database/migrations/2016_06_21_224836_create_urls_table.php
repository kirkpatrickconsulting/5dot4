<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUrlsTable
 */
class CreateUrlsTable extends Migration
{

    /**
     *
     */
    public function up()
    {
        Schema::create('urls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('link');
            $table->string('panel');
            $table->timestamps();
        });
    }


    /**
     *
     */
    public function down()
    {
        Schema::drop('urls');
    }
}
