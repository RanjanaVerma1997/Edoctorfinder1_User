<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;

class patimagecontroller extends Controller
{
    public function singlepage(Request $request,$id)
    {
    	$patimg=patient::where("id",$id)->first();

    	return view('diya')->with('patimg',$patimg);
    }
}
