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
        $result->examId = $request->input('examId');
        $result->animalId = $request->input('animalId');
        $result->treatmentId = $request->input('treatmentId');
        $result->save();
        return view('success')->with('message', 'Successfully saved recommended treatment');
    }

    public function animal(Request $request, $id)
    {
        $results = \App\Result::where('animalId', $id)->get();
        return view('spec-treatment')->with('results', $results);
    }

    public function update(Request $request)
    {
		$name = $request->input('name');
    	// TBC
    }
}
