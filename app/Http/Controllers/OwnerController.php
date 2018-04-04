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

    public function single(Request $request, $id)
    {

        $owner = Owner::where('id', $id)->first();
        return view('owner', ['owner' => $owner]);
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
            return view('success')->with('message', 'You have successfully registered a new owner');
        }
        else{
            $id = $request->session()->put('id', $owner->id);
            $owners = \App\Owner::where('id', $id)->get();
            return view('register-animal')->with('owners', $owners);
        }
    }

    public function update(Request $request)
    {
		$name = $request->input('name');
    	// TBC
    }
}
