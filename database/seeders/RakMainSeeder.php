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
                'nama_main_row' => 'First Row'
            ],
            [
                'id'            => 2,
                'nama_main_row' => 'Second Row'
            ],
            [
                'id'            => 3,
                'nama_main_row' => 'Third Row'
            ],
        ];

        Rak_main_row::insert($data);
    }
}
