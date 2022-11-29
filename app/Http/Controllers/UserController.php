<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{
   // public function index(){
   //     return User::all();
            

        


    

    public function store(Request $request){

        $validator = Validator::make($request->all(), 
            [
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email_id' => 'requird|email_id',
            'phone_no' => 'required',
            'state' => 'required',
            'city' => 'required',
            'country'=>'required',

        ]);
        
        

        



    }
        

    

    
        
    

    
    

    
}
