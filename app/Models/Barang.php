<?php

namespace App\Models;

use App\Traits\uuidAsKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
  use HasFactory, uuidAsKey;
  public $fllable = ['kode_barang', 'nama_barang', 'stok', 'harga'];
  public $timestamps = true;


  public function jenis_barang()
  {
    return $this->belongsTo('App\Model\Jenis_barang', 'id');
  }
}
