<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tournament;
use App\Models\category;
use App\Models\Sliders;


use App\Models\admin;
use Illuminate\Support\Facades\DB;
class NewController extends Controller
{
    public function displaydash(){
        return view('layout.dashbord');
     }
     public function displaylogin(){
        return view('layout.log');
     }
  
       public function displayUTables(){
        return view('layout.userTable');
     }
  
     public function displayPenUsers(){
        return view('layout.penusers');
     }
     public function displayPenReq(){
        return view('layout.penreq');
     }
     public function displayETables(){
        return view('layout.ElderTable');
     }
     public function displayUsers(){
        return view('layout.Users');
     }
     public function displayRequests(){
        return view('layout.Request');
     }
  
     public function viewadd()
     {
        return view('layout.create');
     }
  
     public function viewData()
     {
        $ud = User::where('is_deleted',0)->get();
        return view('layout.UserTable', compact('ud'));
     }
  
     public function viewlogindata()
     {
           $name= request('name');
           $pass= request('password');
           $users = DB::select('select * from admins');
           foreach ($users as $user) {
               if($user->name == $name){
                   if(($user->password == $pass)){
                       return redirect('Dashbord')->with('id',$user->id);
                   }else{
                       if($users[count($users)-1]->id == $user->id){
                       return redirect('/log')->with('message','name or password is wrong');
                       }else{
                           continue;
                       }
                   }
               }else{
                   if($users[count($users)-1]->id == $user->id){
                       return redirect('Dashbord')->with('message','name or password is wrong');
                   }else{
                       continue;
                   }
               }
           }
       }
           
  
     public function viewdashData()
     {
        $ud = admin::where('is_set',1)->get();
        return view('layout.penusers', compact('ud'));
     }
  
     public function viewdashreqData()
     {
        $rd = tournament::where('is_set',0)->get();
        return view('layout.penreq', compact('rd'));
     }

     public function displayCategories()
     {
        $category = DB::table('categories')->get();
        return view('layout.Categoires', compact('category'));
     }

     public function displaySliders()
     {
        $sliders = DB::table('sliders')->get();
        return view('layout.Sliders', compact('sliders'));
     }
  
     public function deleteData($id){
        $usersInfo = DB::update('update users set is_deleted = ? where id = ?',[1,$id]);         
        return redirect('utable')->with('message','The data has been Deleted successfully');
     }
  
     public function denyData($id){
        $usersInfo = DB::update('update admins set is_set = ? where id = ?',[0,$id]);         
        return redirect('PendingUsers')->with('message','The data has been Deleted successfully');
     }
     
     
  
     public function Acceptuser($id){
        DB::update('update users set is_accepted =? where id = ?', [1, $id]);
        return redirect('PendingUsers')->with('message','The user has been Accepted Successfully');
     }
  
     public function Acceptreq($id){
        DB::update('update tournaments set is_set =? where tourn_id = ?', [1, $id]);
        return redirect('PendingRequests')->with('message','The request has been deleted Successfully');
     }
  
     public function editData($id){
        $update = DB::select('select * from users where id = :id', ['id' => $id]);
        return view('layout.updateus',compact('update'));
     }
  
     public function updateData(Request $request, $id)
     {   
        $name=$request->input('name');
        $img=$request->input('img');
        $number=$request->input('number');
        $email=$request->input('email');
        $age=$request->input('age');
        $location=$request->input('location');
        $skills=$request->input('skills');
        $hobbies=$request->input('hobbies');

        DB::update('update users set name = ?  , img = ?, number = ? ,email = ? , age = ? , location =?, skills = ? , hobbies= ?  where id = ?', [$name,$img,$number,$email,$age,$location,$skills,$hobbies,$id]);
        return redirect('utable')->with('message','The data has been updated successfully'); 
  
  
     }
     public function denyreq($id){
        $usersInfo = DB::update('delete from tournaments  where tourn_id = ?',[ $id]);         
        return redirect('PendingRequests')->with('message','The data has been Deleted successfully');
     }

     public function delete_category($id){
        $usersInfo = DB::update('delete from categories  where category_id = ?',[ $id]);         
        return redirect('Categories')->with('message','The data has been Deleted successfully');
     }

     public function delete_slider($id){
        $usersInfo = DB::update('delete from sliders  where id = ?',[ $id]);         
        return redirect('Sliders')->with('message','The data has been Deleted successfully');
     }

     
     #################################### Elder ################################################
  
     public function viewElderData()
     {  $ud = tournament::where('is_set',1)->get();
        return view('layout.ElderTable', compact('ud'));
     }
  
     public function viewaddd()
     {
        return view('layout.createElder');
     }
  
     public function createElderData(Request $request){
           $create=new tournament();
           $create->tourn_name=$request->input('name');
           $create->tourn_category=$request->input('category');
           $create->tourn_teams_amount=$request->input('team_ammount');
           $create->tourn_desciption=$request->input('descrption');
           $create->tourn_start_data=$request->input('start_date');
           $create->tourn_end_data=$request->input('end_date');
           $create->tourn_prize=$request->input('prize');
           $create->tourn_creator=$request->input('creator');
           $create->tourn_staduim=$request->input('staduim');
           $create->is_set='1';
           
           $create->save();
           return redirect('etable')->with('message','The data has been added successfully');
         }

         public function viewcreateCategory()
         {
            return view('layout.createCategory');
         }

         public function createCategory(Request $request){
            $create=new category();
            $create->category_name=$request->input('name');
            $create->category_image=$request->input('img');
            
            $create->save();
            return redirect('Categories')->with('message','The data has been added successfully');
          }

          public function viewcreateSlider()
          {
             return view('layout.createSlider');
          }

          public function createSlider(Request $request){
            $create=new Sliders();
            $create->sliders_name=$request->input('name');
            $create->sliders_desc=$request->input('desc');
            $create->sliders_img=$request->input('img');
            
            $create->save();
            return redirect('Sliders')->with('message','The data has been added successfully');
          }
  
        public function deleteElderData($id){
           $usersInfo = DB::table('tournaments')->where('tourn_id',$id)->delete();       
           return redirect('etable')->with('message','The data has been Deleted successfully');
        }
  
        public function editElderData($id){
           $update = DB::select('select * from tournaments where tourn_id = :id', ['id' => $id]);
           return view('layout.updateElder',compact('update'));
        }
              
        public function updateElderData(Request $request, $id)
        {  
           $name= $request->input('name');
           $tourn_category=$request->input('tourn_category');
           $tourn_teams_amount=$request->input('tourn_teams_amount');
           $tourn_desciption=$request->input('tourn_desciption');
           $tourn_start_data=$request->input('tourn_start_data');
           $tourn_end_data=$request->input('tourn_end_data');
           $tourn_prize=$request->input('tourn_prize');
           $is_set=$request->input('is_set');
          
  
           DB::update('update tournaments set tourn_category = ? , tourn_teams_amount=?,tourn_desciption = ? , tourn_start_data=?,tourn_end_data = ? , tourn_prize=?, is_set=?, tourn_name=? where tourn_id = ?', [$tourn_category,$tourn_teams_amount,$tourn_desciption,$tourn_start_data,$tourn_end_data,$tourn_prize,$is_set,$name,$id]);
           return redirect('etable')->with('message','The data has been updated successfully');
     
        }
           public function insert_user(Request $request){
  
                  $request->validate([
                    'name'=>'required|alpha',
                   
                    'email'=>'required|email',
                    'password'=>'required|min:8',
                    'number'=>'numeric|digits_between:9,11',
                    'age'=>'required',
                    'password_confirmation' => 'required_with:password|same:password|min:8',
                ]);
                  $create=new User();
                  $create->name=$request->input('name');
                  
                  $create->number=$request->input('number');
                  $create->email=$request->input('email');
                  $create->password=$request->input('password');
                  $create->age=$request->input('age');
                  $create->img=$request->input('img');
                  $create->location=$request->input('location');
                  $create->hobbies=$request->input('hobbies');
                  $create->skills=$request->input('skills');
                  $create->save();
                  return redirect('/Dashbord')->with('messageRej','The data has been add user successfully');
                  }
  
  
                  
                  public function showdynamicdata ()
                  {
                    $users = DB::table('users')->get();
                    $users_count = $users->count();
  
                    $elders = DB::table('tournaments')->get();
                    $elders_count = $elders->count();
                
                  return view('layout.dashbord',compact('elders_count' , 'users_count'));
                  } 
  
                 //  public function createElderData(Request $request){
                 //    $request->validate([
                 //       'name'=>'required|alpha',
                 //       'phone_num'=>'numeric|digits_between:9,11',
                 //       'age'=>'required','before:13 years ago',
                 //       'needed_services'=>'required',
                 //       'guardian_name'=>'required|alpha',
                 //       'guardian_number'=>'required|numeric',
                 //       'guardian_relation'=>'required|alpha',
                 //       'password'=>'required|min:8',
                 //       'password_confirmation' => 'required_with:password|same:password|min:8',
                 //   ]);
  
                 //    $create=new elders();
                 //    $create->name=$request->input('name');
                 //    $create->age=$request->input('age');
                 //    $create->phone_num=$request->input('phone_num');
                 //    $create->needed_services=$request->input('needed_services');
                 //    $create->time_needed=$request->input('time_needed');
                 //    $create->gender=$request->input('gender');
                 //    $create->location=$request->input('location');
                 //    $create->guardian_name=$request->input('guardian_name');
                 //    $create->guardian_number=$request->input('guardian_number');
                 //    $create->guardian_relation=$request->input('guardian_relation');
                 //    $create->guardian_id_pic=$request->input('guardian_id_pic');
                 //    $create->save();
  
                 //    return view('etable')->with('message','The request has been added successfully');
                 //  }
              
}
