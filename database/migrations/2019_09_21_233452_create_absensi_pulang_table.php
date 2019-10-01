<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiPulangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_pulang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enkripsi')->nullable();
            $table->string('waktu_scan')->nullable();
            $table->string('guru_id');
            $table->string('kehadiran');
            $table->rememberToken();
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
        Schema::dropIfExists('absensi_pulang');
    }
}
