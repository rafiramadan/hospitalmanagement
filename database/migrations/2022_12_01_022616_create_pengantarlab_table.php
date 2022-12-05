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
            $table->foreignId('datapasien_id')->constrained('datapasien')->onDelete('cascade')->onUpdate('cascade');
            $table->string('diagnosaklinik'); 
            $table->string('labhematologi')->nullable();
            $table->string('laburine')->nullable();;
            $table->string('labfaeces')->nullable();;
            $table->string('labglukosadarah')->nullable();;
            $table->string('labfaalhati')->nullable();;
            $table->string('labprofillipid')->nullable();;
            $table->string('labtumormaker')->nullable();;
            $table->string('labelektrolit')->nullable();;
            $table->string('labmikrobiologi')->nullable();;
            $table->string('labtiroid')->nullable();;
            $table->string('labmunoserologi')->nullable();;
            $table->string('labtorch')->nullable();;
            $table->string('labhepatitis')->nullable();;
            $table->foreignId('datadokter_id')->constrained('datadokter')->onDelete('cascade')->onUpdate('cascade');
            $table->String('catatan')->nullable();;
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
