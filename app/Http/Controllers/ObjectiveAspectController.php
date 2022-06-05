<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\objectiveaspect;
use App\Models\aspect;

class ObjectiveAspectController extends Controller
{
    
    public function simpanobjective(Request $request)   //function untuk insert inputan objective aspect
    {
        
        $simpan = DB::table('objectiveaspects')->insert([
            'description'=>$request->post('objective')
        ]);

        return redirect('/okrsetup');
    }

    public function editobjective($id)
    {
        $jenisobjectiveaspect = objectiveaspect::find($id);
        //$jenisobjectiveaspect = objectiveaspect::all();
        return view('okrsetup.editobjective',[
            'jenisobjectiveaspect' => $jenisobjectiveaspect,
            'title' => "OKR SetUp"
        ]); 
    
    }

    public function updateobjective(Request $request, $id)
    {
        $jenisobjectiveaspect = objectiveaspect::find($id)->update($request->all());

        return redirect('/okrsetup');
    }

    public function hapusobjective($id)
    {
        DB::table('objectiveaspects')->where('id', '=', $id)->delete();

        return redirect ('okrsetup');
    }
}
