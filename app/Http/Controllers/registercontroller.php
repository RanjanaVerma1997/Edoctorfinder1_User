<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;
use Auth;
class registercontroller extends Controller
{
    public function register_add(Request $request)
    {
        //only print requested params
        //save this data to table
        $post= register::create([
            "first_name"=>$request->f_name,
            "last_name"=>$request->l_name,
            "email_address"=>$request->email_address,
            "gender"=>$request->gender,
            "password"=>bcrypt($request->password),
            "confirm_password"=>$request->confirm_password,
            ]);
           // dd($post);
        	return redirect('/login');
    }
        public function attemptLogin(Request $request)
        {
            if(Auth::attempt([
                "email_address"=>$request->email_address,
                "password"=>$request->password,
            ]))
            {
                return redirect('/');
            }
            else
            {
                return redirect('/login?error=Invalid Credentials');
            }
        }
        //crete show method
        public function register_show(Request $request)
        {
            //Get ALL data from database
            $posts = register::all();
            //simple display all data here
            return view('register_show')->with('postdata',$posts);
            //we can you the data in variable postdata in view
        }
         //add method for delete here
        public function delete(Request $request,$id)
        {
            //delete the row
            doctor::where('id',$id)->delete();
            return redirect('/register_show');

        }
         //update post method
        public function update(Request $request,$id)
        {
            //get the data of this id form db
            $post = register::find($id);
            // print the data
            // dd($post);
            // psaa the data to update view 
            return view('register_update')->with('post', $post);
        }
        public function saveupdated(Request $request)
        {
            //update row
            register::where('id', $request->id)->update([
                "id"=>$request->id,
            	"first_name"=>$request->first_name,
            	"last_name"=>$request->last_name,
            	"email_address"=>$request->email_address,
            	"gender"=>$request->gender,
            	"password"=>$request->password,
            	"confirm_password"=>$request->confirm_password,
            	]);
            // Redirect to table
            return redirect('/register_show');
            // oops we forgot one something
            // change route from update form 
            // pass only those fields which in our table
        }
}
