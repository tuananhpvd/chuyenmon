<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GiaovienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user2 = User::create([
            'name' => 'Trần Tuấn Anh', 
            'email' => 'ttanh.thpt.pvd@phuyen.edu.vn',
            'password' => bcrypt('123456789')
        ]);
        $user3 = User::create([
            'name' => 'Huỳnh Xuân Mai', 
            'email' => 'hxmai.thpt.pvd@phuyen.edu.vn',
            'password' => bcrypt('123456789')
        ]);
    }
}
