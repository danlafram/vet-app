<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Animal;

class AnimalController extends Controller
{
    public function index(Request $request)
    {
    	return view('animals', ['animals' => Animal::all()]);
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
