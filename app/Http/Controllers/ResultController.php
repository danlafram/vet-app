<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class ResultController extends Controller
{
    public function index(Request $request)
    {
    	return view('results', ['results' => Result::all()]);
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
