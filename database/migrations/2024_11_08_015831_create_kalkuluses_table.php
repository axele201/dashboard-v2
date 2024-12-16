<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKalkulusesTable extends Migration
{
    public function up()
    {
        Schema::create('kalkulus', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('namatugas');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kalkulus');
    }
}