<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userList(){
        $users = User::orderBy('updated_at','desc')->paginate(10);
        return view('admin.users.list',compact('users'));
    }
    public function userStatus(Request $request,$id){
        try {
            $user = User::find($id);
            $user->status = $request->status;
            $user->save();
            return redirect('/users/list')->with('success', 'User Status Update Successfully.');
        } catch (\Exception $e){
            return redirect('/users/list')->with('error', 'Something Went Wrong.');
        }
    }
    public function membersList(){
        $members = Member::orderBy('updated_at','desc')->paginate(10);
        return view('admin.members.member-list',compact('members'));
    }
    public function memberDelete($id){
        $members = Member::where('id',$id)->delete();
        return redirect('members/list')->with('success','Member delete successfully.');
    }
    public function memberStatus(Request $request,$id){
        try {
            $user = Member::find($id);
            $user->status = $request->status;
            $user->save();
            return redirect('/members/list')->with('success', 'Member Status Update Successfully.');
        } catch (\Exception $e){
            return redirect('/members/list')->with('error', 'Something Went Wrong.');
        }
    }

}
