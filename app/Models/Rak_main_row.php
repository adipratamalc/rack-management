<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak_main_row extends Model
{
  use HasFactory;
  public $fllable = ['nama_main_rak'];

  public function rak()
  {
    return $this->hasMany(Rak::class);
  }
}
