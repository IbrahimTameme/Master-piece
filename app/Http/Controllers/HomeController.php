<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


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
      $view1 = DB::table('sliders')->select('sliders_name','sliders_img','sliders_desc')->get();
      $view2 = DB::table('categories')->select('category_name','category_image')->get();
      $view3 = DB::table('contacts')->take(3)->get();


        return view('home',compact('view1','view2','view3'));
    }


    public function profile_page()
    {


       $id = auth()->user()->id;
      $view1 = DB::table('tournaments')->where('tourn_creator', $id)->get();

        
       


    return view('profile_page',compact('view1'));

        
    }


    public function edit_profile()
    {

        
        $id = auth()->user()->id;



    return view('edit_profile');

        
    }




    ///// user controlloers 
    public function updateuser(Request $request)
{
  $id = Auth::user()->id;
  
  $name=$request->input('name');
  $email=$request->input('email');
  $hobbies=$request->input('hobbies');
  $skills=$request->input('skills');
  $location=$request->input('location');
  $number=$request->input('number');
  $age=$request->input('age');
  // DB::update('update users set name = ?  where id = ?', [$name,$id]);
  DB::update('update users set name = ? ,email = ? , hobbies=?, skills=?, location=?, number=?, age=? where id = ?', [$name,$email,$hobbies,$skills,$location,$number,$age,$id]);

  return redirect('/profile_page')->with('message','The data has been updated successfully');

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
    return redirect('profile_page');


  }




}
