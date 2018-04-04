<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreatmentController extends Controller
{
	public function index(Request $request)
	{
		$treatments = \App\Treatment::all();
		return view('treatments')->with('treatments', $treatments);
	}
}
