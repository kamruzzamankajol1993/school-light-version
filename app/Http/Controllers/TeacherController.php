<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\Teacher;
class TeacherController extends Controller
{
    public function index(){


        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
 $section_details = Teacher::latest()->get();
        return view('admin.teacher.index',['class_details'=>$class_details,'dp_details'=>$dp_details,'section_details'=>$section_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            
        ]);

        // Create New User
        $user = new Teacher();
        $user->name = $request->name;
        $user->email= $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect()->route('admin.teacher')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Teacher::find($request->id);
       $user->name = $request->name;
        $user->email= $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect()->route('admin.teacher')->with('success','Updated successfully!');

        
    }


    public function destroy($id){

         $user = Teacher::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.teacher')->with('error','Deleted successfully!');
    }


}
