<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('gather', function (Blueprint $table) {
        $table->increments('id');
        $table->string('site_name');
        $table->string('doc_title');
        $table->string('auto');
        $table->string('space_time');
        $table->string('doc_content');
        $table->string('category_url');
        $table->string('category_keyword');
        $table->string('time_selector');
        $table->string('title_selector');
        $table->string('content_url_selector');
        $table->string('preview_img_selector');
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
      Schema::drop('gather');
    }
}
