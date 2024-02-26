<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\Student;
use App\Result;
use App\Exam;
use App\Models\Homework;
use Illuminate\Support\Facades\Auth;
class HomeworkController extends Controller
{
    public function index(){

        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = Student::latest()->get();
        $result_details = Result::latest()->get();
 $subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();

$home_work_detail = Homework::latest()->get();
        return view('admin.home_work.index',['home_work_detail'=>$home_work_detail,'exam_details'=>$exam_details,'result_details'=>$result_details,'class_details'=>$class_details,'dp_details'=>$dp_details,'section_details'=>$section_details,'student_details'=>$student_details,'subject_details'=>$subject_details]);

   }



   public function store(Request $request){

    $user = new Homework();
    $user->status = $request->status;
    $user->class = $request->class_id;
    $user->department= $request->department_id;
    $user->section = $request->section_id;
    $user->homework_date = $request->homework_date;
    $user->submission_date = $request->submission_date;
    $user->subject = $request->subject_id;
    $user->created_by = Auth::guard('admin')->user()->name;
    $user->des = $request->des;
    if ($request->hasfile('doc')) {
        $file = $request->file('doc');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/uploads/', $filename);
        $user->doc =  'public/uploads/'.$filename;
    }
    $user->save();


    return redirect()->route('admin.home_work')->with('success','Created successfully!');
   }


   public function update(Request $request){

    $user = Homework::find($request->id);
    $user->status = $request->status;
    $user->class = $request->class_id;
    $user->department= $request->department_id;
    $user->section = $request->section_id;
    $user->homework_date = $request->homework_date;
    $user->submission_date = $request->submission_date;
    $user->subject = $request->subject_id;
    $user->created_by = Auth::guard('admin')->user()->name;
    $user->des = $request->des;
    if ($request->hasfile('doc')) {
        $file = $request->file('doc');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/uploads/', $filename);
        $user->doc =  'public/uploads/'.$filename;
    }
    $user->save();


    return redirect()->route('admin.home_work')->with('info','Updated successfully!');
   }


   public function destroy($id){

    $user = Homework::find($id);
   if (!is_null($user)) {
       $user->delete();
   }


   return redirect()->route('admin.home_work')->with('error','Deleted successfully!');
}
}
