<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
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
                'name'          => "Admin Ayuna",
                'email'         => 'adminayuna@gmail.com',
                'password'      => '$2y$10$4zYAOEzF90.hilgkTLvZQ.ZVwZVmtytRrA63E/2mezhF0OY7o2BKa'
            ],
        ];

        User::insert($data);
    }
}
