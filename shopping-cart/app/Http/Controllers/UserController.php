<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignup(){
        return view('users.signup');
    }

    public function postSignup(Request $request){
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
//             'remember_token' => $request->input('remember_token')
        ]);

        $user->save();

        return redirect()->route('product.index');
    }

    public function getSignin(){
        return view('users.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function getProfile(){
        return view('users.profile');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->back();

    }
}
