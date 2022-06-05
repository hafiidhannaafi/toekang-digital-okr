<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        // insert data ke table employee
        DB::table('employees')->insert([
        	'name' => 'Hafiidh',
        	'position' => 'Content Writer',
        	'address' => 'Karanganyar',
        	'phone' => '0888888',
            'email' => 'hafiidhannaafi@gmail.com',
        	'password' => 'halo123'
        ]);
    }
}
