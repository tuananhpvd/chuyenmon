<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Daytot;
use App\Models\User;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::where('slug', 'author')->first();
        $editor = Role::where('slug', 'editor')->first();

        $user5 = User::create([
        	'id' => 'PVD002',
            'name' => 'Quản trị viên 2', 
            'email' => 'qtv2@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $user5->roles()->attach($editor);

        $user6 = User::create([
        	'id' => 'PVD007',
            'name' => 'Giáo viên 7', 
            'email' => 'gv7@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $user6->roles()->attach($author);

        $user4 = User::create([
        	'id' => 'PVD008',
            'name' => 'Giáo viên 8', 
            'email' => 'gv8@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $user4->roles()->attach($author);

        
    }
}
