<?php

namespace Database\Seeders;

use App\Models\appraisalaspect;
use App\Models\User;
use App\Models\Follow;
use App\Models\Contact;
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Detailinvoice;
use App\Models\employee;
use App\Models\Keyresult;
use App\Models\objectiveaspect;
use App\Models\Position;
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
        objectiveaspect::create([
            'description' => 'Objective di Seeder'
        ]);

        objectiveaspect::create([
            'description' => 'Objective di Seeder 2'
        ]);

        objectiveaspect::create([
            'description' => 'Objective di Seeder 3'
        ]);

        Keyresult::create([
            'aspects' => 'Membuat'
        ]);

        Keyresult::create([
            'aspects' => 'Memakai'
        ]);

        Keyresult::create([
            'aspects' => 'Membuang'
        ]);

        Position::create([
            'nama_posisi' => 'designer'
        ]);

        Position::create([
            'nama_posisi' => 'content writer'
        ]);

        Position::create([
            'nama_posisi' => 'advertiser'
        ]);

        Position::create([
            'nama_posisi' => 'manager'
        ]);

        appraisalaspect::create([
            'positions_id' => '1',
            'objectiveaspects_id' => '1', 
            'keyresults_id' => '1', 
            'target' => '1', 
            'satuan' => 'jam'
        ]);

        appraisalaspect::create([
            'positions_id' => '2',
            'objectiveaspects_id' => '2', 
            'keyresults_id' => '2', 
            'target' => '1', 
            'satuan' => 'jam'
        ]);

        appraisalaspect::create([
            'positions_id' => '2',
            'objectiveaspects_id' => '2', 
            'keyresults_id' => '3', 
            'target' => '1', 
            'satuan' => 'jam'
        ]);

        employee::create([
            'name' => 'Hafiidh',
        	'positions_id' => '2',
            'levels_id' => '1',
        	'address' => 'Karanganyar',
        	'phone' => '0888888',
            'email' => 'hafiidhannaafi@gmail.com',
        	'password' => 'halo123'
        ]);

        employee::create([
            'name' => 'Hafiidh',
        	'positions_id' => '2',
            'levels_id' => '1',
        	'address' => 'Karanganyar',
        	'phone' => '0888888',
            'email' => 'hafiidhannaafi@gmail.com',
        	'password' => 'halo123'
        ]);

        employee::create([
            'name' => 'Vili',
        	'positions_id' => '1',
            'levels_id' => '1',
        	'address' => 'Tegal',
        	'phone' => '0811111',
            'email' => 'vili@gmail.com',
        	'password' => 'vilili'
        ]);

        employee::create([
            'name' => 'Dimas',
        	'positions_id' => '3',
            'levels_id' => '1',
        	'address' => 'Kalimantan',
        	'phone' => '089999999',
            'email' => 'dimasmas@gmail.com',
        	'password' => 'dimasmas'
        ]);

        employee::create([
            'name' => 'suzy',
        	'positions_id' => '1',
            'levels_id' => '1',
        	'address' => 'Korea',
        	'phone' => '08888999',
            'email' => 'suzy@gmail.com',
        	'password' => 'halosuzy'
        ]);

        employee::create([
            'name' => 'Minah',
        	'positions_id' => '1',
            'levels_id' => '1',
        	'address' => 'seoul',
        	'phone' => '0888444',
            'email' => 'minah@gmail.com',
        	'password' => 'halominah'
        ]);

        employee::create([
            'name' => 'Saebom',
        	'positions_id' => '2',
            'levels_id' => '2',
        	'address' => 'Jeju',
        	'phone' => '0888188',
            'email' => 'saebom@gmail.com',
        	'password' => 'halosaebom'
        ]);

        employee::create([
            'name' => 'Hyungsik',
        	'positions_id' => '3',
            'levels_id' => '3',
        	'address' => 'Seoul',
        	'phone' => '0888788',
            'email' => 'hyungsik@gmail.com',
        	'password' => 'halohyungsik'
        ]);

        User::factory(10)->create();
        Customer::factory(70)->create();
        Contact::factory(50)->create();
        Follow::factory(200)->create();
        Invoice::factory(70)->create();
        Detailinvoice::factory(70)->create();
        $this->call([
            UserSeeder::class,
        ]);
    }
}
