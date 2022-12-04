<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
  use HasFactory;
  public $fllable = ['kode_barang', 'nama_barang', 'stok', 'harga'];
  public $timestamps = true;

  public function jenis_barang()
  {
    return $this->belongsTo('App\Model\Jenis_barang', 'id');
  }
}
