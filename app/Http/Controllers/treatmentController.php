<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\treatment;

class treatmentController extends Controller
{
        //creat show method here
    	public function treatment_show(Request $request)
    	{
    		//Get ALL data from database
    		$posts = treatment::all();
    		//simple display all data here
            dd($posts);
    		return view('treatment_show')->with('postdata',$posts);
    		//we can you the data in variable postdata in view
    	}

        public function maketreatment(Request $request)
        {
            $treatment = treatment::create([
                "doc_name" => $request->doc_name,
                "treatment" => $request->treatment,
                "appointment" => $request->treatment,
                "date_time" => date('Y-m-d h:i:s', strtotime($request->date_time))
            ]);

            return redirect()->back();
        }
}

    	

	