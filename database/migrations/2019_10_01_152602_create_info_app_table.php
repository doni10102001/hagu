<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_app', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo', 200)->nullable();
            $table->string('link', 50)->nullable();
            $table->string('url_link', 300)->nullable();
            $table->string('text_banner', 300)->nullable();
            $table->string('judul_content', 100)->nullable();
            $table->string('isi_content', 300)->nullable();
            $table->string('judul_card', 100)->nullable();
            $table->string('isi_card', 300)->nullable();
            $table->string('judul_box1', 100)->nullable();
            $table->string('isi_box1', 200)->nullable();
            $table->string('foto_box1',200)->nullable();
            $table->string('judul_box2', 100)->nullable();
            $table->string('isi_box2', 200)->nullable();
            $table->string('foto_box2', 200)->nullable();
            $table->string('maps', 400)->nullable();
            $table->string('judul_screen_fitur', 100)->nullable();
            $table->string('isi_screen_fitur', 200)->nullable();
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
        Schema::dropIfExists('info_app');
    }
}
