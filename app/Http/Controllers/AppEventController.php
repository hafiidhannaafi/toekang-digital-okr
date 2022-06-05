<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\appraisalaspect;
use App\Models\appraisalevent;
use App\Models\Position;
use App\Models\employee;
use App\Models\appraisaleventdetail;
use Illuminate\Support\Facades\DB;

class AppEventController extends Controller
{
    public function index()
    {
        $jenisposisi= Position::all();
        $employee= employee::all();
        $appraisalevent = appraisalevent::all();
        $appeventdetail = appraisaleventdetail::all();
        $status='Tidak OK';

        $dropdowndependentposisi = Position::pluck('nama_posisi', 'id');

        return view('okrappevent.index',[
            'title' => "Appraisal Event",
            'jenisposisi' => $jenisposisi,
            'employee' => $employee,
            'appraisalevent' => $appraisalevent,
            'appeventdetail' => $appeventdetail,
            'dropdowndependentposisi' => $dropdowndependentposisi,
            'status' => $status,
        ]);
    }

    /*public function getNamaCrew()
    {
        $namacrew = 
    }*/

    public function search(Request $request)
    {
        $keyword = $request->search;
        $appraisalevent = appraisalevent::all();
        $appeventdetail = appraisaleventdetail::all();
        $employee = employee::where('name', 'positions_id','like', "%". $keyword . "%");

        //dependent dropdown
        $employees = employee::pluck('name', 'id');

        return view('okrappevent.index',[
            'title' => "Appraisal Event",
            'employee' =>$employee,
            'appraisalevent' => $appraisalevent,
            'appeventdetail' => $appeventdetail,
            'employees' => $employees
        ]);
        
    }

    public function searchcrew(Request $request)
    {
        $keyword=$request->crew;
        $crew=employee::where('id',$keyword)->first();
        $employee=employee::all();
        $data=appraisalaspect::where('positions_id',$crew->positions_id)->get();
        $nyoba=$crew->load('projects');
        $status="OK";
        return view('okrappevent.index',[
            'title' => "Appraisal Event",
            'employee' => $employee,
            'crew'=>$crew,
            'nyoba' => $nyoba,
            'data' => $data,
            'status'=>$status,
        ]); 
    }

    public function simpanappeventdetail(Request $request)
    {
        return $request->targets;
        $events=appraisalevent::create([
            'periodeevent' => $request->periodeevent,
            'datetime'=>$request->datetime,
            'employees_id'=>$request->employees_id,
            'total_score'=>$request->total_score,
        ]);

        $project_id=array();
        $aspects_id=array();
        $target_id=array();
        $satuan_id=array();
        $score_id=array();
        foreach($request->scores as $score)
        {
            array_push($score_id, $score);
        }
        foreach($request->satuans as $satuan)
        {
            array_push($satuan_id, $satuan);
        }
        foreach($request->targets as $target)
        {
            array_push($target_id, $target);
        }
        foreach($request->aspects as $aspect)
        {
            array_push($aspects_id, $aspect);
        }
        foreach($request->projects as $project)
        {
            array_push($project_id, $project);
        }


        appraisalaspect::create([
            'appraisalevents_id' => $events->id,

        ]);
        
        for($i=0;$i<sizeof($aspects_id);$i++)
        {
            appraisaleventdetail::create([
                'appraisalevents_id' => $events->id,
                'projects_id' => $project_id[$i],
                'appraisalaspects_id' => $aspects_id[$i],
                'target' => $target_id[$i],
                'score' => $score_id[$i],
            ]);
        }
        /* DB::table('appraisaleventdetails')->insert([
            'appraisalevents_id' => $request->post('appraisalevents_id'),
            'projects_id' => $request->post('projects_id'),
            'appraisalaspects_id' => $request->post('appraisalaspects_id'),
            'first_date' => $request->post('last_date'),
            'last_date' => $request->post('last_date'),
            'target' => $request->post('target'),
            'score' => $request->post('score'),
        ]); */

        return redirect('/okrappevent.appeventdetail');
    }
}
