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
        Schema::create('tambah_models', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nis');
            $table->string('kelas');
            $table->string('tmtlhr');
            $table->date('tgllhr');
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
        Schema::dropIfExists('tambah_models');
    }
};
