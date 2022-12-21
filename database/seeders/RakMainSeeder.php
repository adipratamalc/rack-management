<?php

namespace Database\Seeders;

use App\Models\Rak_main_row;
use Illuminate\Database\Seeder;

class RakMainSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $data = [
      [
        'id'            => 1,
        'nama_main_row' => 'Baris Pertama'
      ],
      [
        'id'            => 2,
        'nama_main_row' => 'Baris Kedua'
      ],
      [
        'id'            => 3,
        'nama_main_row' => 'Baris Ketiga'
      ],
    ];

    Rak_main_row::insert($data);
  }
}
