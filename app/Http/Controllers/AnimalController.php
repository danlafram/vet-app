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
        if($request->input('animalId') != null)
        {
            //$animal_to_update = new Animal();
            //$animal_to_update = $request->input('animal');
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
        }
        else
        {
            return view('register-animal');
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
        return 'Successfully updated';
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
