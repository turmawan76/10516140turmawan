<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaganganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dagangan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode');
            $table->string('nama_barang',100);
            $table->string('kondisi_barang',100);
            $table->string('harga_barang',100);
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
        Schema::dropIfExists('dagangan');
    }
}
