<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function login(Request $request){
       $useremail = $request->input('useremail');
       $userpassword = $request->input('userpassword');
       if($useremail == "" || $userpassword == ""){
           $request->session()->flash('status', 'NO User Found!');
           return redirect()->back();
       }
       else{

           $user = DB::table('master')->where('useremail',$useremail)->first();
           if($user){
               $is_HASH = $user->userpassword;
               if (Hash::check($userpassword, $is_HASH)) {
                   $request->session()->put('USER',$user);
                   return redirect('/dashboard');
               }
               else{
                   $request->session()->flash('status', 'USER NOT FOUND');
                   return redirect()->back();
               }
           }
           else{
               $request->session()->flash('status', 'USER NOT FOUND');
               return redirect()->back();
           }

       }
    }
}
