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
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('title');
            $table->string('url');
            $table->string('description')->nullable();
            $table->string('panel')->nullable();
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
