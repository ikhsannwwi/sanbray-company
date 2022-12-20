<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditdebitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kreditdebits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang');
            $table->date('tanggal');
            $table->integer('pemasukan');
            $table->integer('pengeluaran');
            $table->text('deskripsi');
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
        Schema::dropIfExists('kreditdebits');
    }
}
