<?php

namespace App\Models;

use App\Traits\uuidAsKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
  use HasFactory, uuidAsKey;
  public $fillable = ['rak_id', 'jenis_barang_id', 'kode_barang', 'nama_barang', 'gambar_barang', 'stok', 'harga'];
  public $timestamps = true;


  public function jenis_barang()
  {
    return $this->belongsTo(Jenis_barang::class);
  }
  public function rak()
  {
    return $this->belongsTo(rak::class);
  }
}
