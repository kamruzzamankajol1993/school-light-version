<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HostelRoomType;
class HostelRoomTypeController extends Controller
{
    public function index(){


        $room_type_details = HostelRoomType::latest()->get();


        return view('admin.hostel_room_type.index',['room_type_details'=>$room_type_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'room_type' => 'required|max:350',

        ]);

        // Create New User
        $user = new HostelRoomType();
        $user->room_type = $request->room_type;
        $user->des = $request->des;

        $user->save();

        return redirect()->route('admin.hostel_room_type')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =HostelRoomType::find($request->id);
        $user->room_type = $request->room_type;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.hostel_room_type')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = HostelRoomType::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.hostel_room_type')->with('error','Deleted successfully!');
    }
}
