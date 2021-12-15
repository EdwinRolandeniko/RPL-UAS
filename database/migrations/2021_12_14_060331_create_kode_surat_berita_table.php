<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodeSuratBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kode_surat_berita', function (Blueprint $table) {
            $table->id();
            $table->integer('id_surat')->unsigned();
            $table->foreign('id_surat')->references('id')->on('berita')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kode_surat');
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
        Schema::dropIfExists('kode_surat_berita');
    }
}
