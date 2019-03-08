<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specaility;
use App\doctor;

class homecontroller extends Controller
{
	public function index()
	{
		$docs = doctor::all();
		return view('home')->with('docs', $docs);
	}

    public function viewspeciality(Request $request)
    {
    	$special = speciality::where("id",$id)->first();
    	
    	return view("home")->with('special',$special);
    }
}
