<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //edit
    public function editMember($id){
        try{
            $member = Member::find($id);
            return view('admin.members.edit-member',compact('member'));
        }catch (\Exception $e){
            dd($e->getMessage());
        }
    }
    //store
    public function storeMember(Request $request){
        $request->validate([
            'name'=>'required',
            'gender' => 'required',
            'age'=>'required',
            'material_status'=>'required',
            'religion'=>'required',
            'nationality'=>'required',
            'city'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'occupation'=>'required',
            'qualification'=>'required',
            'created_for'=>'required',
        ]);
        try {
            $id = isset($request->id)?$request->id:'';
            if($id){
                $member = Member::find($id);
            }else{
                $member = new Member();
            }
            $member->created_by = Auth::user()->id;
            $member->created_for = $request->created_for;
            $member->name = $request->name;
            $member->gender = $request->gender;
            $member->age = $request->age;
            $member->material_status = $request->material_status;
            $member->religion = $request->religion;
            $member->nationality = $request->nationality;
            $member->city = $request->city;
            $member->address = $request->address;
            $member->mobile = $request->mobile;

            if($request->hasFile('pic')){
                $image = $request->file('pic');
                $imageName = $member->name.'_'.time().'.'.$image->extension();
                $folderPath = 'members/';

                $image->move(public_path($folderPath), $imageName);

                $member->pic = $folderPath.$imageName;
            }

            $member->occupation = $request->occupation;
            $member->qualification = $request->qualification;
            $member->status = isset($request->status)?$request->status:0;
            $member->save();
            if($id){
                return redirect('/members/list')->with('success','Member information update successfully.');
            }
            return redirect('/home');
        } catch (\Exception $e){
            return redirect()->back()->withInput();
        }
    }
}
