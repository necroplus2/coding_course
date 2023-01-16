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
        Schema::create('knowledge_contents', function (Blueprint $table) {
            $table->id();
            $table->integer('bab');
            $table->integer('sub_bab');
            $table->longText('isi');
            $table->unsignedBigInteger('kelas_id');
            $table->foreign('kelas_id')->references('id')->on('modules');
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
        Schema::dropIfExists('knowledge_contents');
    }
};