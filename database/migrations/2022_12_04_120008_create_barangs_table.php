<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('barangs', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->foreignUuid('rak_id')->constrained('raks');
      $table->unsignedBigInteger('jenis_barang_id')->constrained('jenis_barang')->onDelete('set null');
      $table->string('kode_barang');
      $table->string('nama_barang');
      $table->string('gambar_barang');
      $table->integer('stok');
      $table->integer('harga');
      $table->timestamps();

      // $table->foreign('rak_id')->references('id')->on('raks');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('barangs');
  }
}
