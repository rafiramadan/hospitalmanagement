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
        Schema::create('rawatinap', function (Blueprint $table) {
            $table->id();
            $table->foreignId('datapasien_id')->constrained('datapasien')->onDelete('cascade')->onUpdate('cascade');
            $table->string('poliigd');
            $table->string('ruang');
            $table->string('kelas');
            $table->string('diagnosa');
            $table->string('dischargeplanning');
            $table->foreignId('datadokter_id')->constrained('datadokter')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tglmasuk');
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
        Schema::dropIfExists('rawatinap');
    }
};
