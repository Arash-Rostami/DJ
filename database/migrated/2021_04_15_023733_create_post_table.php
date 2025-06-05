<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('title_page')->nullable();
            $table->text('title_post')->nullable();
            $table->longText('text_post')->nullable();
            $table->text('pic')->nullable();
            $table->longText('pic_caption')->nullable();
            $table->text('title_page_f')->nullable();
            $table->text('title_post_f')->nullable();
            $table->longText('text_post_f')->nullable();
            $table->text('pic_f')->nullable();
            $table->longText('pic_caption_f')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
