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
        Schema::create('pengantarlab', function (Blueprint $table) {
            $table->id();
            $table->foreignId('datapasien_id')->constrained('datapasien')->onDelete('restrict')->onUpdate('restrict');
            $table->string('diagnosaklinik');
            $table->string('labhematologi');
            $table->string('laburine');
            $table->string('labfaeces');
            $table->string('labglukosadarah');
            $table->string('labfaalhati');
            $table->string('labprofillipid');
            $table->string('labtumormaker');
            $table->string('labelektrolit');
            $table->string('labmikrobiologi');
            $table->string('labtiroid');
            $table->string('labmunoserologi');
            $table->string('labtorch');
            $table->string('labhepatitis');
            $table->foreignId('datadokter_id')->constrained('datadokter')->onDelete('restrict')->onUpdate('restrict');
            $table->String('catatan');
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
        Schema::dropIfExists('pengantarlab');
    }
};
