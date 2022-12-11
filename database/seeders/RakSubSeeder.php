<?php

namespace Database\Seeders;

use App\Models\Rak_sub_row;
use Illuminate\Database\Seeder;

class RakSubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rak_sub_row::create(
            [
                'id'            => 1,
                'nama_sub_row' => 'First Row'
            ],
            [
                'id'            => 2,
                'nama_sub_row' => 'Second Row'
            ],
            [
                'id'            => 3,
                'nama_sub_row' => 'Third Row'
            ],
            [
                'id'            => 4,
                'nama_sub_row' => 'Fourth Row'
            ]
        );
    }
}
