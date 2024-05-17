<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
//        if(Auth::user() && Auth::user()->user_type=='admin'){
//            return redirect('/dashboard');
//        }
        $members = Member::where('status',1)->get();
        return view('home.homepage',compact('members'));
    }
    public function seeAllMember(Request $request){
        $age_from = intval(isset($request->age_from)?$request->age_from:0);
        $age_to = intval(isset($request->age_to)?$request->age_to:0);
        $religion = isset($request->religion)?$request->religion:'';
        $gender = isset($request->gender)?$request->gender:'';
        $nationality = isset($request->nationality)?$request->nationality:'';
        $members = Member::where('status',1);
        if($age_from && $age_to){
            $members = $members->whereBetween('age', [$age_from, $age_to]);
        }
        if($religion){
            $members = $members->where('religion',$religion);
        }
        if($gender){
            $members = $members->where('gender',$gender);
        }
        if($nationality){
            $members = $members->where('nationality',$nationality);
        }
        $members = $members->paginate(12);
        return view('home.all-members',compact('members'));
    }
}
