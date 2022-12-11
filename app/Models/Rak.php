<?php

namespace App\Models;

use App\Traits\uuidAsKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
  use HasFactory, uuidAsKey;
  public $fllable = ['kode_rak'];
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
}
