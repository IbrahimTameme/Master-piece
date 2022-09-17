<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\contact;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
   
    public function create_contact(Request $request)
    {
        $name=$request->input('name');
        $phone_number=$request->input('phone_number');
        $email=$request->input('email');
        $message=$request->input('message');
      
      
        DB::insert('insert into contacts (name,phone_number,email,message) values (?,?,?,?)',[$name,$phone_number,$email,$message]);


      
        return redirect('home')->with('done','You have successfully added a tournament');
      

        
    }
}
