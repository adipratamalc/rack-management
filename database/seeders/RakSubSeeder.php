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
        $data = [
            [
                'id'            => 1,
                'nama_sub_row' => 'First level'
            ],
            [
                'id'            => 2,
                'nama_sub_row' => 'Second level'
            ],
            [
                'id'            => 3,
                'nama_sub_row' => 'Third level'
            ],
        ];

        Rak_sub_row::insert($data);
    }
}
