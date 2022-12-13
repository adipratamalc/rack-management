<?php

namespace App\Models;

use App\Traits\uuidAsKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
  use HasFactory, uuidAsKey;
  public $fillable = ['main_row_id', 'sub_row_id', 'kode_rak_id'];
  public $timestamps = true;

  public function barang()
  {
    return $this->hasMany(Barang::class);
  }

  public function rak_main_row()
  {
    return $this->belongsTo(Rak_main_row::class);
  }
  public function rak_sub_row()
  {
    return $this->belongsTo(Rak_sub_row::class);
  }
  public function kode_rak()
  {
    return $this->belongsTo(Kode_rak::class);
  }
}
