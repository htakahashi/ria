<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDynamicWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic_words', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading_text');
            $table->string('headline_text_1');
            $table->string('headline_text_2');
            $table->string('headline_text_3');
            $table->string('button_text');
            $table->string('action_text');
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
        Schema::drop('dynamic_words');
    }
}
