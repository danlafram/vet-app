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

    public function view(Request $request)
    {
        $examiners = \App\Employee::all();
        $animals = \App\Animal::all();
        return view('conduct-exam')->with(compact('examiners', 'animals'));
    }

    public function store(Request $request)
    {
    	$exam = new Exam();
        $exam->exam_date = $request->input('exam_date');
        $exam->description = $request->input('description');
        $exam->examiner = $request->input('examinerId');
        $exam->animalId = $request->input('animalId');
        $exam->save();
        if($request->input('save'))
        {
            return view('success')->with('message', 'Successfully conducted exam');
        }
        else
        {
            $treatments = \App\Treatment::all();
            return view('treatment-recommendation')->with(compact('treatments', 'exam'));
        }
        
    }

    public function update(Request $request)
    {
		$name = $request->input('name');
    	// TBC
    }
}
