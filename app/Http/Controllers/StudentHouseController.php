<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentHouse;
class StudentHouseController extends Controller
{
    public function index(){



        $student_house_details = StudentHouse::latest()->get();
               return view('admin.student_house_details.index',['student_house_details'=>$student_house_details]);
           }





           public function store(Request $request){


               // Validation Data
               $request->validate([
                   'name' => 'required|max:250',

               ]);

               // Create New User
               $user = new StudentHouse();
               $user->name = $request->name;
               $user->des= $request->des;
                $user->save();

               return redirect()->route('admin.student_house')->with('success','Created successfully!');


           }


           public function update(Request $request){


               // Create New User
               $user =StudentHouse::find($request->id);
               $user->name = $request->name;
               $user->des= $request->des;
               $user->save();

               return redirect()->route('admin.student_house')->with('success','Updated successfully!');


           }


           public function destroy($id){

                $user = StudentHouse::find($id);
               if (!is_null($user)) {
                   $user->delete();
               }


               return redirect()->route('admin.student_house')->with('error','Deleted successfully!');
           }
}
