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
        Schema::create('datatriase', function (Blueprint $table) {
            $table->id();
            $table->foreignId('datapasien_id')->constrained('datapasien')->onDelete('restrict')->onUpdate('restrict');
            $table->string('caradatang');
            $table->string('jeniskasus');
            $table->string('kategori');
            $table->string('kesadaran');
            $table->string('respontime');
            $table->string('ruang');
            $table->string('urgensi');
            $table->string('jenispelayanan');
            $table->string('alasandatang');
            $table->string('caramasuk');
            $table->string('keadaanprars');
            $table->string('tindakprars');
            $table->string('keluhan');
            $table->string('anamnesa');
            $table->string('riwayatpenyakit');
            $table->string('statuspsikolog');
            $table->string('riwayatalergi');
            $table->string('pengkajianairway');
            $table->string('pengkajianbreathing');
            $table->string('pengkajiancirculation');
            $table->string('tgldatang');
            $table->foreignId('dataperawat_id')->constrained('dataperawat')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('datatriase');
    }
};
