<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppEventDetailController extends Controller
{
    public function index()
    {
        return view('okrappevent.appperformance', [
            'title' => "Appraisal Event Detail",
            
        ]);
    }
}
