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
        Schema::create('rujukrslain', function (Blueprint $table) {
            $table->id();
            $table->foreignId('datapasien_id')->constrained('datapasien')->onDelete('cascade')->onUpdate('cascade');
            $table->string('diagnosa');
            $table->string('rstujuan');
            $table->string('polirujukan');
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
        Schema::dropIfExists('rujukrslain');
    }
};
