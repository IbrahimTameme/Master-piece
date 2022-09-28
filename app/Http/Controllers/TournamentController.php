<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TournamentController extends Controller
{

  public function tournaments_filter (Request $request) {
    $id = Auth::user()->id;
    $data = User::find($id);
  
  
       $view1 = DB::table('categories')->select('category_name','category_id')->get();
  
    $category = $request->input('category');
  
  
   
      $category = $request->input('category');
      
  
  
      $view2 = DB::table('tournaments')->where('tourn_category',$category)->where('is_set',1)
        ->join('users', 'users.id','=','tournaments.tourn_creator')
        ->join('categories','category_id','=','tournaments.tourn_category')
        ->select('tournaments.*','users.name','categories.category_image')->get();


        if ($category == '*') {
          $view2 = DB::table('tournaments')->where('is_set',1)
          ->join('users', 'users.id','=','tournaments.tourn_creator')
          ->join('categories','category_id','=','tournaments.tourn_category')
          ->select('tournaments.*','users.name','categories.category_image')->get();
  
        }
    
    
       
    
  
  return view('tournaments',compact('view1','view2'));
  
  
  
  }
  

    public function tournaments()
{
  $id = Auth::user()->id;
    $data = User::find($id);


       $view1 = DB::table('categories')->select('category_name','category_id')->get();

        $view2 = DB::table('tournaments')->where('is_set',1)
    ->join('users', 'users.id','=','tournaments.tourn_creator')
    ->join('categories','category_id','=','tournaments.tourn_category')
    ->select('tournaments.*','users.name','categories.category_image')->get();

   


   
   
    
       
    

return view('tournaments',compact('view1','view2'));
  
}





public function info_tournament($tourn_id)
{
  $id = Auth::user()->id;
    $user_data = User::find($id);
 

    // $data = DB::table('tournaments')->where('tourn_id',$tourn_id)->first();

    $data = DB::table('tournaments')->where('tourn_id',$tourn_id)
    ->join('users', 'users.id','=','tournaments.tourn_creator')
    ->select('tournaments.*','users.name')->first();


    if($data)
{
  return view('info_tournament',compact('data'));
}
  
}


public function reg_to_tourn($user_id , $tourn_id)
{

  DB::update('update users set tourn_joined = ? where id = ?', [$tourn_id,$user_id]);
  
      return redirect(`info_tournament/id/$tourn_id`)->back()->with('done','You have successfully registered to this tournament');
  

}


 public function add_tournament()
{

  return view('add_tournament');
}


public function create_tournament(Request $request )
{

  $id = Auth::user()->id;

  $name=$request->input('name');
  $category=$request->input('category');
  $number_of_teams=$request->input('number_of_teams');
  $prize=$request->input('prize');
  $start_date=$request->input('start_date');
  $end_date=$request->input('end_date');
  $description=$request->input('description');

  DB::insert('insert into tournaments (tourn_name,tourn_category,tourn_teams_amount,tourn_desciption,tourn_start_data,tourn_end_data,tourn_prize,tourn_creator) values (?,?,?,?,?,?,?,?)',[$name,$category,$number_of_teams,$description,$start_date,$end_date,$prize,$id]);

  return redirect('/profile_page')->with('done','You have successfully added a tournament');


}








}
