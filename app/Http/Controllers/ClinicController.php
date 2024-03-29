<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinic;

class ClinicController extends Controller
{
    public function index(Request $request)
    {
    	return view('clinics', ['clinics' => Clinic::all()]);
    }

    public function view(Request $request, $id)
    {
        $clinic = Clinic::where('id', $id)->first();
        return view('clinic', ['clinic' => $clinic]);
    }

    public function store(Request $request)
    {
    	$name = $request->input('name');
    	// TBC
    }

    public function update(Request $request)
    {
		$name = $request->input('name');
    	// TBC
    }

    public function request1(Request $request)
    {
    	//
    }

    public function request6(Request $request)
    {
    	//
    }
}
