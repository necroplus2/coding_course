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
            $table->string('judul');
            $table->integer('sub_bab');
            $table->longText('isi');
            $table->unsignedBigInteger('bab_id');
            $table->foreign('bab_id')->references('id')->on('chapters');
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
