<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\Student;
use App\Result;
use App\InstituteInformation;
use App\Exam;
use Image;
use App\Teacher;
use App\AssignClassToTeacher;
class AssignClassToTeacherController extends Controller
{
    public function index(){


        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $class_teacher_details = AssignClassToTeacher::latest()->get();
        $teacher_details = Teacher::latest()->get();
       return view('admin.class_teacher.index',[
           'class_details'=>$class_details,
           'dp_details'=>$dp_details,
           'section_details'=>$section_details,
           'class_teacher_details'=>$class_teacher_details,
           'teacher_details'=>$teacher_details
        ]);
   }





   public function store(Request $request){


       // Validation Data
       $request->validate([
           'teacher_id' => 'required|max:350',

       ]);



       // Create New User
       $user = new AssignClassToTeacher();
       $user->class_id = $request->class_id;
       $user->department_id= $request->department_id;
       $user->section_id = $request->section_id;

       $user->teacher_id = $request->teacher_id;
        $user->save();

       return redirect()->route('admin.class_teacher')->with('success','Created successfully!');


   }


   public function update(Request $request){


       // Create New User
       $user =AssignClassToTeacher::find($request->id);
       $user->class_id = $request->class_id;
       $user->department_id= $request->department_id;
       $user->section_id = $request->section_id;

       $user->teacher_id = $request->teacher_id;

       $user->save();

       return redirect()->route('admin.class_teacher')->with('success','Updated successfully!');


   }


   public function destroy($id){

        $user = AssignClassToTeacher::find($id);
       if (!is_null($user)) {
           $user->delete();
       }


       return redirect()->route('admin.class_teacher')->with('error','Deleted successfully!');
   }

}
