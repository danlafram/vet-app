<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
    	return view('employees', ['employees' => Employee::all()]);
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

    public function request6(Request $request)
    {
    	//
    }

    public function request9(Request $request)
    {
    	//
    }

    public function request11(Request $request)
    {
    	//
    }
}
