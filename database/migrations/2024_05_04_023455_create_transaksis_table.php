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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_pembeli');
            $table->Integer('jumlah');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('baranggs')->onDelete('cascade');
            $table->foreign('id_pembeli')->references('id')->on('pembelis')->onDelete('cascade');

        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
