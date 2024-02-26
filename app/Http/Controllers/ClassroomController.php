<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
class ClassroomController extends Controller
{
    public function index(){



        $room_details = Classroom::latest()->get();
               return view('admin.class_room.index',['room_details'=>$room_details]);
           }





           public function store(Request $request){


               // Validation Data
               $request->validate([
                   'room_no' => 'required|max:250',

               ]);

               // Create New User
               $user = new Classroom();
               $user->room_no = $request->room_no;
               $user->capacity= $request->capacity;
                $user->save();

               return redirect()->route('admin.class_room')->with('success','Created successfully!');


           }


           public function update(Request $request){


               // Create New User
               $user =Classroom::find($request->id);
               $user->room_no = $request->room_no;
               $user->capacity= $request->capacity;
               $user->save();

               return redirect()->route('admin.class_room')->with('success','Updated successfully!');


           }


           public function destroy($id){

                $user = Classroom::find($id);
               if (!is_null($user)) {
                   $user->delete();
               }


               return redirect()->route('admin.class_room')->with('error','Deleted successfully!');
           }
}
