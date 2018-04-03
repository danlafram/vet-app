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
        $result = new Result();
    	$result->treatment_quantity = $request->input('treatment_quantity');
        $result->start_date = $request->input('start_date');
        $result->end_date = $request->input('end_date');
        $result->save();
        return 'Successfully saved';
    }

    public function update(Request $request)
    {
		$name = $request->input('name');
    	// TBC
    }
}
