<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request){
        // validate data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // login code

        if(\Auth::attempt($request->only('email','password'))){
            if(Auth::user()->user_type=='admin'){
                return redirect('/dashboard');
            }
            return redirect('/home');
        }

        return redirect('login')->withError('Login details are not valid');

    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request){
        // validate
        $request->validate([
            'name'=>'required',
            'email' => 'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        // save in users table
        $status = 0;
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> \Hash::make($request->password),
        ]);

        // login user here

        if(\Auth::attempt($request->only('email','password'))){
            if(Auth::user()->user_type=='admin'){
                return redirect('/dashboard');
            }
            return redirect('/home');
        }

        return redirect('register')->withError('Error');


    }



    public function home(){
        $members = Member::where('status',1)->get();
        return view('home.homepage',compact('members'));
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }


}
