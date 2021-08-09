<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Daytot;
use App\Models\User;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::create([
            'name' => 'Giáo viên', 
            'slug' => 'author',
            'permissions' => [
                'daytot.create' => true,
                'daytot.update' => true,
                'daytot.delete' => true,
                'daytot.publish' => true,
            ]
        ]);
        $editor = Role::create([
            'name' => 'Quản trị viên', 
            'slug' => 'editor',
            'permissions' => [
                'daytot.create' => true,
                'daytot.update' => true,
                'daytot.delete' => true,
                'daytot.publish' => true,
            ]
        ]);
    }
}
