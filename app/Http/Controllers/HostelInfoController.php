<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HostelRoomType;
use App\HostelInfo;
class HostelInfoController extends Controller
{
    public function index(){


        $room_type_details = HostelRoomType::latest()->get();
        $hostel_details = HostelInfo::latest()->get();

        return view('admin.hostel.index',['room_type_details'=>$room_type_details,'hostel_details'=>$hostel_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new HostelInfo();
        $user->name = $request->name;
        $user->type = $request->type;
        $user->address = $request->address;
        $user->intake = $request->intake;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.hostel')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =HostelInfo::find($request->id);
        $user->name = $request->name;
        $user->type = $request->type;
        $user->address = $request->address;
        $user->intake = $request->intake;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.hostel')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = HostelInfo::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.hostel')->with('error','Deleted successfully!');
    }
}
