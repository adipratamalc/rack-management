<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('raks', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->unsignedBigInteger('main_row_id')->constrained('rak_main_rows')->onDelete('set null');
      $table->unsignedBigInteger('sub_row_id')->constrained('rak_sub_rows')->onDelete('set null');
      $table->char('kode_rak');
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
    Schema::dropIfExists('raks');
  }
}
