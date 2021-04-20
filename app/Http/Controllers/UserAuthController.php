<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserAuthController extends Controller
{
    //
    function login(){
            return view('auth.login');
    } 
    function register(){
        return view('auth.register');
    }

    function create(Request $request){
        $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = $request->is_admin;
        $query = $user->save();

        if($query){
            return back()->with('success','You have been successfuly reqistered');
        }else{
            return back()->with('fail', 'something went wrong');
        }

        // if($user->is_admin == 1){
        //     return redirect('/admin');
        // }else{
        //     return redirect('/user');
        // }

    }
}
