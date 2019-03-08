<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;

class feedbackcontroller extends Controller
{
    public function feedback_add(Request $request)
    {
        //only print requested params
        //save this data to table
        $post= feedback::create([
            "pat_id"=>$request->pat_id,
            "admin_id"=>$request->admin_id,
            "comment"=>$request->comment,
            "status"=>$request->status,
            ]);
            return redirect('/feedback_show');
            //dd($post)
        }
    //crete show method
    public function feedback_show(Request $request)
    {
        //Get ALL data from database
        $posts = feedback::all();
        //simple display all data here
        return view('feedback_show')->with('postdata',$posts);
        //we can you the data in variable postdata in view
    }
    //add method for delete here
    public function feedback_delete(Request $request,$id)
    {
        //delete the row
        feedback::where('id',$id)->delete();
        return redirect('/feedback_show');

    }
     // add method for view here
    public function feedback_view(Request $request,$id)
    {
    //get the data of this id from db
    $post = feedback::find($id);
    // print the data
    //dd($post);
    // pass the data to update view
    return view('feedback_view')->with('post',$post);
    }

    public function postQuickFeedback(Request $request)
    {
        $post= feedback::create([
            "pat_name"=>$request->name,
            "email"=>$request->email,
            "feedback"=>$request->feedback,
            "comment"=>$request->comments,
            ]);

            return redirect()->back();
        
    }
}
