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
}
