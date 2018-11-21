<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Library extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_kz')->unique();
            $table->text('etimology');
            $table->text('termin');
            $table->string('orphography');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('title_cn');
            $table->string('title_tr');
            $table->string('title_de');
            $table->string('title_kg');
            $table->string('title_uz');
            $table->string('title_az');
            $table->string('title_tm');
            $table->timestamps();
        });
        Schema::create('relations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type');
            $table->integer('ida');
            $table->integer('idb');
        });
        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
