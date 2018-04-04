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

    public function view(Request $request, $id)
    {
        $animal = Animal::where('id', $id)->first();
        return view('animal')->with('animal', $animal);
    }

    public function store(Request $request)
    {
        if($request->input('animalId') != null)
        {
            $id = $request->input('animalId');
            $animal_to_update = Animal::where('id', $id)->first();
            return view('register-animal', ['animal_to_update' => $animal_to_update]);
        }
        else if($request->session()->get('id'))
        {
            $animal = new Animal;
            if($request->session()->get('id'))
            {
                $animal->ownerId = $request->session()->get('id');
            }
            $animal->name = $request->input('name');
            $animal->type = $request->input('type');
            $animal->description = $request->input('description');
            $animal->dob = $request->input('dob');
            $animal->dateInscription = $request->input('date_inscription');
            $animal->animal_state = $request->input('animal_state');
            $animal->save();
            $request->session()->flush();
            return view('success')->with('message', 'Successfully registered new animal');
        }
        else
        {
            $owners = \App\Owner::all();
            return view('register-animal')->with(compact('owners'));
        }
    }

    public function update(Request $request)
    {
        $id = $request->input('animalId');
		$animal = Animal::Where('id', $id)->first();
        $animal->name = $request->input('name');
        $animal->type = $request->input('type');
        $animal->description = $request->input('description');
        $animal->dob = $request->input('dob');
        $animal->dateInscription = $request->input('date_inscription');
        $animal->animal_state = $request->input('animal_state');
        $animal->save();
        $request->session()->flush();
        return view('success')->with('message', 'Successfully updated animal');
    }

    public function delete(Request $request)
    {
        $id = $request->input('animalId');
        $animal = Animal::where('id', $id)->first();
        $animal->delete();
        return view('success')->with('message', 'Successfully deleted animal');;
    }
}
