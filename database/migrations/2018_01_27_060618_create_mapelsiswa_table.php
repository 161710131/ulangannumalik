<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapelsiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapelsiswa', function (Blueprint $table) {
            $table->increments('id');
             $table->UnsignedInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswa')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->UnsignedInteger('id_MataPelajaran');
            $table->foreign('id_MataPelajaran')->references('id')->on('MataPelajaran')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('mapelsiswa');
    }
}
