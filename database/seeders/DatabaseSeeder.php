<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'admin',
            'fullname' => 'admin',
            'role' => 'admin',
            'password' => '1234',
            'phone' => '',
            'status' => 'admin',
            'profile' => 'profiles/avatar.jpg',
        ]);
    }
}
