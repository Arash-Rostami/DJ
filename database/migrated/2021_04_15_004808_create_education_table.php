<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->text('title_edu')->nullable();
            $table->longText('text_date')->nullable();
            $table->longText('text_place')->nullable();
            $table->longText('text_course')->nullable();
            $table->text('title_pro')->nullable();
            $table->text('text_pro')->nullable();
            $table->text('title_edu_f')->nullable();
            $table->text('title_pro_f')->nullable();
            $table->text('text_pro_f')->nullable();
            $table->longText('text_date_f')->nullable();
            $table->longText('text_place_f')->nullable();
            $table->longText('text_course_f')->nullable();
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
        Schema::dropIfExists('education');
    }
}
