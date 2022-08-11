<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\contact;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
   
    public function create_contact(array $data)
    {
        return contact::create([
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'message' => $data['message'],
            
        ]);

        echo "this worked";
    }
}
