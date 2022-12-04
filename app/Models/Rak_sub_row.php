<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak_sub_row extends Model
{
  use HasFactory;
  public $fllable = ['nama_sub_row'];

  public function rak()
  {
    return $this->hasMany('App\Models\Rak', 'id_sub_row');
  }
}
