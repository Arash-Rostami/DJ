<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('me', function (Blueprint $table) {
            $table->id();
            $table->text('title_me')->nullable();
            $table->longText('text_me')->nullable();
            $table->text('title_mis')->nullable();
            $table->longText('text_mis')->nullable();
            $table->text('title_me_f')->nullable();
            $table->longText('text_me_f')->nullable();
            $table->text('title_mis_f')->nullable();
            $table->longText('text_mis_f')->nullable();
            $table->text('pic')->nullable();
            $table->text('pic_caption')->nullable();
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
        Schema::dropIfExists('me');
    }
}
