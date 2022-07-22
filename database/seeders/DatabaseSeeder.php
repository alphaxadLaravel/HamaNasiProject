<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        // \App\Models\User::factory()->create([
           
        // ]);

        DB::table('users')->insert([
            'username' => 'admin',
            'fullname' => 'admin',
            'role' => 'admin',
            'password' => '1234',
            'phone' => '',
            'status' => 'admin',
            'profile' => 'profiles/avatar.jpg',
        ]);

        // Normal user seed
        DB::table('users')->insert([
            'username' => 'alpha',
            'fullname' => 'alpha jozee kakulu',
            'role' => 'normal_user',
            'password' => '1234',
            'phone' => '',
            'status' => 'normal_user',
            'profile' => 'profiles/avatar.jpg',
        ]);

        // House Agent Seed
        DB::table('users')->insert([
            'username' => 'alex',
            'fullname' => 'alex jumanne Ngoyi',
            'role' => 'house_agent',
            'password' => '1234',
            'phone' => '',
            'status' => 'house_agent',
            'profile' => 'profiles/avatar.jpg',
        ]);

        //transport Agent
        DB::table('users')->insert([
            'username' => 'kanuti',
            'fullname' => 'kanuti kanute mkuu',
            'role' => 'transport_agent',
            'password' => '1234',
            'phone' => '',
            'status' => 'transport_agent',
            'profile' => 'profiles/avatar.jpg',
        ]);

        // Amount in Branch
        DB::table('branches')->insert([
            'phone' => '0743196599',
            'amount' => '1000000',
            'pin' => '1234',
            'branch' => 'M-Pesa',
        ]);

        // Amount in bank here
        DB::table('banks')->insert([
            'account' => '00001',
            'amount' => '1000000',
            'cvv' => '1234',
            'expire' => '0212',
        ]);


    }
}
