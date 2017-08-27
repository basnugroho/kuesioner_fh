<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('kuesioner_id');
            $table->integer('pertanyaan_id');
            $table->integer('pilihan_jawaban_id')->nullable();
            $table->string('jawaban_text')->nullable();
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
        Schema::dropIfExists('respons');
    }
}
