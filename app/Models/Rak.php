<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
  use HasFactory;
  public $fllable = ['kode_rak'];
  public $timestamps = true;

  public function rak_sub()
  {
    return $this->belongsTo('App\Model\Rak_sub_row', 'id');
  }
  public function rak_main()
  {
    return $this->belongsTo('App\Model\Rak_main_row', 'id');
  }
}
