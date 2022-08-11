<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TournamentController extends Controller
{

    public function tournaments()
{
  $id = Auth::user()->id;
    $data = User::find($id);
 

    $view2 = DB::table('tournaments')
    ->join('users', 'users.id','=','tournaments.tourn_creator')
    ->select('tournaments.*','users.name')->get();

return view('tournaments',compact('view2'));
  
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




}
