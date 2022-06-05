<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'admin',
                'email' => 'admin@test.test',
                'level' => 'manager',
                'position' => 'manager',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'user',
                'email' => 'user@test.test',
                'level' => 'pegawai',
                'position' => 'designer',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'jono',
                'email' => 'jono@gmail.com',
                'level' => 'pegawai',
                'position' => 'advertiser',
                'password' => Hash::make('1234'),
            ],
            [
                'name' => 'CJ',
                'email' => 'cj@test.test',
                'level' => 'pegawai',
                'position' => 'content writer',
                'password' => Hash::make('1234'),
            ],
        ])->each(function($user){
            \App\Models\User::create($user);
        });
    }
}
