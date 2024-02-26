<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HostelRoomType;
use App\HostelInfo;
use App\HostelRoom;
class HostelRoomController extends Controller
{
    public function index(){


        $room_type_details = HostelRoomType::latest()->get();
        $hostel_details = HostelInfo::latest()->get();
        $hostel_room_details = HostelRoom::latest()->get();

        return view('admin.hostel_room.index',[
            'hostel_room_details'=>$hostel_room_details,
            'room_type_details'=>$room_type_details,
            'hostel_details'=>$hostel_details
        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'number_or_name' => 'required|max:350',

        ]);

        // Create New User
        $user = new HostelRoom();
        $user->number_or_name = $request->number_or_name;
        $user->hostel = $request->hostel;
        $user->room_type = $request->room_type;
        $user->number_of_bed = $request->number_of_bed;
        $user->cost_per_bed = $request->cost_per_bed;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.hostel_room')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =HostelRoom::find($request->id);
        $user->number_or_name = $request->number_or_name;
        $user->hostel = $request->hostel;
        $user->room_type = $request->room_type;
        $user->number_of_bed = $request->number_of_bed;
        $user->cost_per_bed = $request->cost_per_bed;
        $user->des = $request->des;
        $user->save();

        return redirect()->route('admin.hostel_room')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = HostelRoom::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.hostel_room')->with('error','Deleted successfully!');
    }


    public function student_hostel_room(Request $request){


        $states = HostelRoom::where('hostel',$request->id_country)->get();
        $data = view('admin.student.room_list',compact('states'))->render();


        return response()->json(['options'=>$data]);
    }
}
