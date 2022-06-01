<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserLocation;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //admin
    public function admin_login(){
        return view('auth.login');
    }
    //save_login
    public function save_login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = User::where('email', $request->email)->where('password', md5($request->password))->first();
        if($user){
            if($user->role_id == 0){
                \Session::put('id', $request->id);
                \Session::put('admin_login', true);
                return redirect('user-list');
            }else{
                \Session::put('id', $request->id);
                \Session::put('user_login', true);
                
            }
        }else{
            \Session::put('error', 'Email or Password Not Match..!');
                return back();
        }
    }  
    //user_list
    public function list(){
        $collection = UserLocation::orderBy('id', 'desc')->get();
        return view('data.list', compact('collection'));
    }
}
