<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('title_project')->nullable();
            $table->longText('text_project')->nullable();
            $table->text('description_project')->nullable();
            $table->longText('date_project')->nullable();
            $table->longText('audio_address')->nullable();
            $table->text('title_project_f')->nullable();
            $table->longText('text_project_f')->nullable();
            $table->text('description_project_f')->nullable();
            $table->longText('date_project_f')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
