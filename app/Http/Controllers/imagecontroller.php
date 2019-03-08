<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;

class imagecontroller extends Controller
{
    public function single_page(Request $request,$id)
    {
    	$sing = doctor::where("id",$id)->first();


    	return view('balasubramanya')->with('sing', $sing);
    }
}
