<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendistribusiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendistribusians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang');
            $table->date('tanggal');
            $table->foreignId('id_tempat_distribusi');
            $table->integer('jumlah_barang');
            $table->foreignId('id_harga_jual');
            $table->integer('pending')->nullable();
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
        Schema::dropIfExists('pendistribusians');
    }
}
