<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->text('nama_lengkap')->nullable();
            $table->text('avatar')->nullable();
            $table->text('nrp')->nullable();
            $table->tinyInteger('jenis_kelamin')->nullable()->default();
            $table->text('asal_smu')->nullable();
            $table->text('kota_smu')->nullable();
            $table->text('alamat_kantor')->nullable();
            $table->text('alamat_rumah')->nullable();
            $table->text('phone')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
