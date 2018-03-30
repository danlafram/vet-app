<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;

class ExamController extends Controller
{
    public function index(Request $request)
    {
    	return view('exams', ['exams' => Exam::all()]);
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

    public function request5(Request $request)
    {
    	//
    }

    public function request8(Request $request)
    {
    	//
    }

    public function request14(Request $request)
    {
    	//
    }
}
