<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupation', function (Blueprint $table) {
            $table->id();
            $table->text('title_ocu')->nullable();
            $table->longText('text_date')->nullable();
            $table->longText('text_place')->nullable();
            $table->longText('text_job')->nullable();
            $table->text('title_ocu_f')->nullable();
            $table->longText('text_date_f')->nullable();
            $table->longText('text_place_f')->nullable();
            $table->longText('text_job_f')->nullable();
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
        Schema::dropIfExists('occupation');
    }
}
