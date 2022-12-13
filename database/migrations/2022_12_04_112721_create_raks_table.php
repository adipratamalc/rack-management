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
      $table->foreignId('main_row_id')->nullable()->constrained('rak_main_rows')->onDelete('set null')->onUpdate('cascade');
      $table->foreignId('sub_row_id')->nullable()->constrained('rak_sub_rows')->onDelete('set null')->onUpdate('cascade');
      $table->foreignUuid('kode_rak_id')->nullable()->constrained('kode_raks')->onDelete('set null')->onUpdate('cascade');
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
