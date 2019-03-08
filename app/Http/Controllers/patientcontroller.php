<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;

class patientcontroller extends Controller
{
    public function patient_add(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post= patient::create([
    		"pat_name"=>$request->pat_name,
    		"pat_age"=>$request->pat_age,
    		"pat_gender"=>$request->pat_gender,
    		"pat_email_id"=>$request->pat_email_id,
    		"pat_password"=>$request->pat_password,
    		"pat_contact_no"=>$request->pat_contact_no,
    		"pat_address"=>$request->pat_address,
    		]);
            return redirect('/patient_show');
            //dd($post)
    }
    	//crete show method
        public function patient_show(Request $request)
        {
            //Get ALL data from database
            $posts = patient::all();
            //simple display all data here
            return view('patient_show')->with('postdata',$posts);
            //we can you the data in variable postdata in view
        }
        //add method for delete here
        public function patient_delete(Request $request,$id)
        {
            //delete the row
            patient::where('id',$id)->delete();
            return redirect('/patient_show');

        }
        //update post method
        public function patient_update(Request $request,$id)
        {
            //get the data of this id form db
            $post = patient::where("id",$id)->first();
            // print the data
            // dd($post);
            // psaa the data to update view 
            return view('patient_update')->with('post', $post);
        }
        public function patientsaveupdated(Request $request)
        {
            //update row
            patient::where('id', $request->id)->update([
                "pat_name"=>$request->pat_name,
                "pat_age"=>$request->pat_age,
                "pat_gender"=>$request->pat_gender,
                "pat_email_id"=>$request->pat_email_id,
                "pat_password"=>$request->pat_password,
                "pat_contact_no"=>$request->pat_contact_no,
                "pat_address"=>$request->pat_address,
            ]);
            // Redirect to table
            return redirect('/patient_show');
            // oops we forgot one something
            // change route from update form 
            // pass only those fields which in our table
        }
         // add method for view here
    	public function patient_view(Request $request,$id)
    	{
        //get the data of this id from db
        $post = patient::find($id);
        // print the data
        //dd($post);
        // pass the data to update view
        return view('patient_view')->with('post',$post);
    	}


         public function showpatient(Request $request)
        {
        $patients = patient::limit(8)->get();
        // dd($doctors->toArray();
        return view("patients")->with('patients',$patients);
        }
       

}
