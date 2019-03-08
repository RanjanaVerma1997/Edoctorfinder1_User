<?php
	
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appointment;
use App\doctor;
use App\patient;

class appointmentController extends Controller
{
    public function showAddForm(Request $request)
    {
        $appointment = appointment::all();
        return view('appointmentadd')->with('appointment',$appointment);
    }
    //add method Here
    public function appointmentadd(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post= appointment::create([
    		"pat_id"=>$request->pat_id,
    		"doc_id"=>$request->doc_id,
    		"status"=>$request->status,
    		"date_time"=>$request->date_time,
    		"description"=>$request->description,
    		]);
    		return redirect('/appointmentshow');
    		    
	}
	//creat show method here
	public function appointmentshow(Request $request)
	{
		//Get ALL data from database
		$posts = appointment::all();
		//simple display all data here
		return view('appointmentshow')->with('postdata',$posts);
		//we can you the data in variable postdata in view
	}


	//add method for delete here
	public function appointmentdelete(Request $request,$id)
	{
		//delete the row
		appointment::where('id',$id)->delete();
		return redirect('/appointmentshow');

	}


	//update post method
	public function appointmentupdate(Request $request,$id)
	{
		//get the data of this id form db
		$post = appointment::find($id);
		// print the data
		// dd($post);
		// psaa the data to update view 
		return view('appointmentupdate')->with('post', $post);
	}
	public function appointmentsaveUpdated(Request $request)
	{
		//update row
		appointment::where('id', $request->id)->update([
			"pat_id"=>$request->pat_id,
			"doc_id"=>$request->doc_id,
			"status"=>$request->status,
			"date_time"=>$request->date_time,
            "description"=>$request->description,
		]);
		// Redirect to table
		return redirect('/appointmentshow');
		// oops we forgot one something
		// change route from update form 
		// pass only those fields which in our table
	}
     // add method for view here
    public function appointmentview(Request $request,$id)
    {
    //get the data of this id from db
    $post = appointment::find($id);
    // print the data
    //dd($post);
    // pass the data to update view
    return view('appointmentview')->with('post',$post);
    }

    public function makeappointment(Request $request)
    {
        $appointment = appointment::create([
            "pat_name"=>$request->pat_name,
            "doc_id"=>$request->doc_id,
            "status"=>$request->status,
            "date_time"=>date('Y-m-d h:i:s', strtotime($request->date_time)),
            "description"=>$request->description,
            ]);

        return redirect()->back();
    }
}    	





