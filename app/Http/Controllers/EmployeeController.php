<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\employee;
use App\Models\Position;
use App\Models\Level;
use Illuminate\Support\Facades\DB;
use Session;
use Facade\Ignition\Middleware\AddDumps;

class EmployeeController extends Controller
{
    public function index()
    {
        //function untuk menampilkan data tabel crew dan jenis posisi di select
        $employee = Employee::all();
        $jenisposisi = Position::all();
        $jenislevel = Level::all();
        return view('okrcrew.index',[
            'title' => "Crew",
            'jenisposisi' => $jenisposisi, 
            'employee' => $employee,
            'jenislevel' => $jenislevel
        ]);
       
    }

    public function simpancrew(Request $request)
    {
        //function untuk insert data tambah crew dari form ke database
        $simpan = DB::table('employees')->insert([
            'name'=>$request->post('nama'),
            'positions_id'=>$request->post('positions_id'),
            'levels_id'=>$request->post('levels_id'),
            'address'=>$request->post('alamat'), //nama di database ke name di form
            'phone'=>$request->post('phone'),
            'email'=>$request->post('email'),
            'password'=>$request->post('password'),
        ]);
        
        return redirect('/okrcrew');
        
    }
    

    
}
