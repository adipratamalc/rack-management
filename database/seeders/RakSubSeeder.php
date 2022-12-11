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
                'nama_main_row' => 'First Level'
            ],
            [
                'nama_main_row' => 'Second Level'
            ],
            [
                'nama_main_row' => 'Third Level'
            ],
            [
                'nama_main_row' => 'Fourth Level'
            ]
        );
    }
}
