<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\employee;
use App\Models\appraisalaspect;
use App\Models\Keyresult;
use App\Models\objectiveaspect;
use App\Models\Position;
use Illuminate\Support\Facades\DB;
use Session;
use Facade\Ignition\Middleware\AddDumps;

class AppAspectController extends Controller
{

    public function index()
    {
        //function untuk menampilkan data tabel crew dan jenis posisi di select
        $appraisalaspects = appraisalaspect::all();
        $jenisobjectiveaspect = objectiveaspect::all();
        $jenisposisi= Position::all();
        $aspects = Keyresult::all();
        
        return view('okrsetup.index',[
            'title' => "OKR SetUp",
            'jenisobjectiveaspect' => $jenisobjectiveaspect, 
            'appraisalaspects' =>  $appraisalaspects,
            'jenisposisi' => $jenisposisi,
            'aspects' => $aspects
        ]);
       
    }

    public function simpanokr(Request $request)
    {
        $target=array();
        $aspects=array();
        $satuan=array();
        foreach($request->aspects as $i)
        {
            array_push($aspects,$i);
        }
        foreach($request->target as $i)
        {
            array_push($target,$i);
        }
        foreach($request->satuan as $i)
        {
            array_push($satuan,$i);
        }

        for($i=0; $i<sizeof($aspects); $i++)
        {
            DB::table('appraisalaspects')->insert([
                'objectiveaspects_id'=>$request->post('objectiveaspects_id'),
                'positions_id'=>$request->post('positions_id'),
                'keyresults_id'=>$aspects[$i],
                'target'=>$target[$i],
                'satuan'=>$satuan[$i],
            ]);
        }

        return redirect('/okrsetup');
    }

    public function editokr($id)
    {
        $appraisalaspect = appraisalaspect::find($id);
        $jenisobjectiveaspect = objectiveaspect::all();
        $jenisposisi= Position::all();
        return view('okrsetup.edit',[
            'appraisalaspect' => $appraisalaspect,
            'title' => "OKR SetUp",
            'jenisobjectiveaspect' => $jenisobjectiveaspect,
            'jenisposisi' => $jenisposisi,
        ]); 
    
    }

    public function updateokr(Request $request, $id)
    {
        appraisalaspect::find($id)->update($request->all());

        return redirect('/okrsetup');
    }

    public function hapusokr($id)
    {
        DB::table('appraisalaspects')->where('id', '=', $id)->delete();

        return redirect ('okrsetup');
    }

}
