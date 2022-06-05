<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    //function untuk insert inputan jenis posisi
    public function simpanjenisposisi(Request $request)
    {
        $simpans = DB::table('positions')->insert([
            'nama_posisi'=>$request->post('posisi')
        ]);

        return redirect('/okrcrew');
    }
}
