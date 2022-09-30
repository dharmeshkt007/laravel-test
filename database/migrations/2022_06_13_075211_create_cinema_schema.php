<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinemaSchema extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('name')->length(255)->nullable();
            $table->timestamps();
        });

        Schema::create('show', function (Blueprint $table) {
            $table->id();
            $table->integer('movie_id')->nullable();
            $table->timestamp('start_times')->length(255)->nullable();
            $table->timestamp('end_times')->length(255)->nullable();
            $table->string('location')->length(255)->nullable();
            $table->timestamps();
        });

        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->integer('show_id')->nullable();
            $table->string('price')->length(255)->nullable();
            $table->enum('type',['vip','couple','super','normal'])->default('normal');
            $table->timestamps();
        });

        Schema::create('seating', function (Blueprint $table) {
            $table->id();
            $table->integer('price_id')->nullable();
            $table->string('seat')->length(255)->nullable();
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
        Schema::dropIfExists('cinema_schema');
    }
}
