<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Siswa', function (Blueprint $table) {
            $table->increments('id');
                    $table->string('Nama');
            $table->integer('Nis');
            $table->UnsignedInteger('id_guru');
            $table->foreign('id_guru')->references('id')->on('guru')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->UnsignedInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('Siswa');
    }
}
