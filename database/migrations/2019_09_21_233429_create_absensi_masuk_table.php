<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_masuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enkripsi')->nullable();
            $table->timestamp('waktu_scan')->nullable();
            $table->boolean('guru_id');
            $table->string('kehadiran');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi_masuk');
    }
}
