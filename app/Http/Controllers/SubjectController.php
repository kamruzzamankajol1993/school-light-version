<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
class SubjectController extends Controller
{
     public function index(){


        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
 $section_details = Subject::latest()->get();
        return view('admin.subject.index',['class_details'=>$class_details,'dp_details'=>$dp_details,'section_details'=>$section_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            
        ]);

        // Create New User
        $user = new Subject();
        $user->name = $request->name;
        $user->department_id= $request->department_id;
        $user->class_id = $request->class_id;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.subject')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Subject::find($request->id);
        $user->class_id= $request->class_id;
        $user->department_id= $request->department_id;
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.subject')->with('success','Updated successfully!');

        
    }


    public function destroy($id){

         $user = Subject::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.subject')->with('error','Deleted successfully!');
    }



     
}
