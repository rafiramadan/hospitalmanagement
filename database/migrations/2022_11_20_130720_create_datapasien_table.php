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
            $table->string('nama');
            $table->string('ttl');
            $table->string('nik');
            $table->string('tipependaftaran');
            $table->string('kategoripasien');
            $table->string('nobpjs');
            $table->string('nosurat');
            $table->string('faskesrujuk');
            $table->string('jenisasuransi');
            $table->string('noasuransi');
            $table->string('politujuan');
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
