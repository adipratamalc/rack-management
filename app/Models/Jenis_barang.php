<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_barang extends Model
{
  use HasFactory;
  public $fllable = ['nama_jenis'];

  public function barang()
  {
    return $this->hasOne('App\Models\Barang', 'id_jenis_barang');
  }
}
