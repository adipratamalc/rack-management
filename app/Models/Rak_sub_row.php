<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak_sub_row extends Model
{
  use HasFactory;
  public $fillable = ['nama_sub_row'];

  public function rak()
  {
    return $this->hasMany(Rak::class);
  }
}
