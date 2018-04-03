<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
    public function index(Request $request)
    {
    	return view('owners', ['owners' => Owner::all()]);
    }

    public function store(Request $request)
    {
        $owner = new Owner;
    	$owner->fname = $request->input('fname');
        $owner->lname = $request->input('lname');
        $owner->address = $request->input('address');
        $owner->address = $request->input('address');
        $owner->telephone = $request->input('telephone');
        $owner->save();
        if($request->input('finish')){
            return $owner->id;
        }
        else{
            $request->session()->put('id', $owner->id);
            return view('register-animal');
        }
    }

    public function update(Request $request)
    {
		$name = $request->input('name');
    	// TBC
    }

    public function request3(Request $request)
    {
    	//
    }

    public function request10(Request $request)
    {
    	//
    }

    public function request12(Request $request)
    {
    	//
    }

    public function request13(Request $request)
    {
    	//
    }
}
