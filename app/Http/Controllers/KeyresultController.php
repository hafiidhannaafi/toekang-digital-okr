<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Keyresult;

class KeyresultController extends Controller
{
    public function simpankeyresult(Request $request)
    {
        DB::table('keyresults')->insert([
            'aspects'=>$request->post('aspects')
            
        ]);

        return redirect ('okrsetup');
    }

    public function editkeyresult($id)
    {
        $aspects = Keyresult::find($id);
        return view('okrsetup.editkeyresult',[
            'aspects' => $aspects,
            'title' => "Edit KeyResult"
        ]);
    }

    public function updatekeyresult(Request $request, $id)
    {
        Keyresult::find($id)->update($request->all());

        return redirect ('okrsetup');
    }

    public function hapuskeyresult($id)
    {
        DB::table('keyresults')->where('id', '=', $id)->delete();

        return redirect ('okrsetup');
    }
}
