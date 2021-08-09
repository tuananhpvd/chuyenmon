<?php

namespace Database\Seeders;
namespace App\Http\Controllers;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(App\Http\Controllers\RolesSeeder::class);
        $this->call(\UsersSeeder::class);
        $this->call(\DaytotSeeder::class);
    }
}
