<?php

namespace App\Models;

use App\Traits\uuidAsKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kode_rak extends Model
{
    use HasFactory, uuidAsKey;
    public $fillable = ['kode_rak'];
    public $timestamps = true;


    public function rak()
    {
        return $this->hasMany(Rak::class);
    }
}
