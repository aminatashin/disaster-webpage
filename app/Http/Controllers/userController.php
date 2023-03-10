<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{
    public function register(){
        return view('signup');
    }
    public function signup(Request $request){
        $form = $request->validate([
            'name'=>['required', 'min:3'],
            'email'=>['required','email', Rule::unique('users','email')],
            'password'=>'required|confirmed|min:6'

        ]);

        $form['password']= bcrypt($form['password']);
        $user = User::create($form);
        auth()->login($user);
        return redirect('/')->with('message','User Created');

    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function login(){
        return view('login');
    }
    public function userlogin(Request $request){
        $form = $request->validate([
           
            'email'=>['required','email'],
            'password'=>'required'

        ]);
        if(auth()->attempt($form)){
            $request->session()->regenerate();
            return redirect('/');
         
        }
        return back()->withErrors(['email'=>'invalid credentials'])->onlyInput('email');
    }
}
