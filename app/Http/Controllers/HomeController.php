<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function profile_page()
    {

        
        
        $id = auth()->user()->id;


    return view('profile_page');

        
    }



    ///// user controlloers 
    public function updateuser(Request $request)
{
  $id = Auth::user()->id;
  
  $name=$request->input('name');
  $lname=$request->input('lname');
  $phone=$request->input('phone');
  $email=$request->input('email');
  $time=$request->input('time');
  $timeTo=$request->input('timeTo');
  $age=$request->input('age');
  $gender=$request->input('gender');
  DB::update('update users set name = ? ,lname = ? , phone=?, email=?, age=?, gender=?, time=?, timeTo=? where id = ?', [$name,$lname,$phone,$email,$age,$gender,$time,$timeTo,$id]);
  return redirect('/home')->with('message','The data has been updated successfully');

}


  public function editPic(Request $request){
   $id = Auth::user()->id;
    $data = User::find($id);
    $file= $request->file('img');
    $filename=$file->getClientOriginalName();
    $file-> move(public_path('img'), $filename);
    $file_store= $filename;
    $data-> img =$file_store; /// cloum name
    $data->update();
    return redirect('home');


  }




}
