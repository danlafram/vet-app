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
         $animal = new Animal;
         if($request->session()->get('id')){
            $animal->ownerId = $request->session()->get('id');
        }
        $animal->name = $request->input('name');
        $animal->type = $request->input('type');
        $animal->description = $request->input('description');
        $animal->dob = $request->input('dob');
        $animal->dateInscription = $request->input('date_inscription');
        $animal->animal_state = $request->input('animal_state');
        $animal->save();
        return 'Successfully saved';
    }

    public function update(Request $request)
    {
		$name = $request->input('name');
    }

    public function delete(Request $request)
    {
        $id = $request->input('animalId');
        $animal = Animal::where('id', $id)->first();
        $animal->delete();
        return 'Successfully Deleted';
    }

    public function request2(Request $request)
    {
    	//
    }

    public function request4(Request $request)
    {
    	//
    }

    public function request7(Request $request)
    {
    	//
    }

    public function request15(Request $request)
    {
    	//
    }
}
