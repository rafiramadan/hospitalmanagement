<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapasien', function (Blueprint $table) {
            $table->id();
            $table->integer('nopasien');
            $table->string('nama');
            $table->string('nik');
            $table->string('tempatlahir');
            $table->string('tgllahir');
            $table->integer('umur');
            $table->string('kategori');
            $table->string('jeniskelamin');
            $table->string('alamat');
            $table->string('notelp');
            $table->char('goldar');
            $table->string('pekerjaan');
            $table->string('jenisbayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapasien');
    }
};
