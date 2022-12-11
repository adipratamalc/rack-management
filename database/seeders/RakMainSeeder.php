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
        Rak_main_row::create(
            [
                'nama_main_row' => 'First Row'
            ],
            [
                'nama_main_row' => 'Second Row'
            ],
            [
                'nama_main_row' => 'Third Row'
            ],
            [
                'nama_main_row' => 'Fourth Row'
            ]
        );
    }
}
