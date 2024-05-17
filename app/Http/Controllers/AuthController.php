<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function dashboard()
    {
        $data['total_users'] = User::get()->count();
        $data['active_users'] = User::where('status',1)->get()->count();
        $data['pending_users'] = User::where('status',0)->get()->count();

        $data['total_brides'] = Member::where('gender','male')->get()->count();
        $data['active_brides'] = Member::where('gender','male')->where('status',1)->get()->count();
        $data['pending_brides'] = Member::where('gender','male')->where('status',0)->get()->count();

        $data['total_grooms'] = Member::where('gender','female')->get()->count();
        $data['active_grooms'] = Member::where('gender','female')->where('status',1)->get()->count();
        $data['pending_grooms'] = Member::where('gender','female')->where('status',0)->get()->count();

        return view('admin.dashboard',$data);
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
            if (Session::has('url.intended')) {
                return redirect()->intended();
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
