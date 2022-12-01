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
        Schema::create('obatpasien', function (Blueprint $table) {
            $table->id();
            $table->foreignId('datapasien_id')->constrained('datapasien')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('dataobat_id')->constrained('dataobat')->onDelete('restrict')->onUpdate('restrict');
            $table->string('diagnosa');
            $table->integer('jumlah');
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
        Schema::dropIfExists('obatpasien');
    }
};
