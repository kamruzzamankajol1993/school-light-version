<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassRoutine;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\MainStudent;
use App\Student;
use App\Result;
use App\InstituteInformation;
use App\Exam;
use Image;
use App\Teacher;
use App\AssignClassToTeacher;
use App\Classroom;
use App\Class_shedule;
use App\Attendence;
class StudentAttController extends Controller
{
    public function index(){


        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $class_teacher_details = AssignClassToTeacher::latest()->get();
        $teacher_details = Teacher::latest()->get();

        $class_room_details = Classroom::latest()->get();
        $class_schedule_details = Class_shedule::latest()->get();
        $uniq_subject_details = Subject::select('name')->distinct()->get();
       return view('admin.student_att.index',[
           'class_details'=>$class_details,
           'dp_details'=>$dp_details,
           'section_details'=>$section_details,
           'class_teacher_details'=>$class_teacher_details,
           'teacher_details'=>$teacher_details,
           'class_room_details'=>$class_room_details,
           'class_schedule_details'=>$class_schedule_details,
           'uniq_subject_details'=>$uniq_subject_details
        ]);
   }


   public function create(){


    $class_details = Srani::latest()->get();
    $dp_details = Department::latest()->get();
    $section_details = Section::latest()->get();
    $class_teacher_details = AssignClassToTeacher::latest()->get();
    $teacher_details = Teacher::latest()->get();

    $class_room_details = Classroom::latest()->get();
    $class_schedule_details = Class_shedule::latest()->get();
    $uniq_subject_details = Subject::select('name')->distinct()->get();
   return view('admin.student_att.create',[
       'class_details'=>$class_details,
       'dp_details'=>$dp_details,
       'section_details'=>$section_details,
       'class_teacher_details'=>$class_teacher_details,
       'teacher_details'=>$teacher_details,
       'class_room_details'=>$class_room_details,
       'class_schedule_details'=>$class_schedule_details,
       'uniq_subject_details'=>$uniq_subject_details
    ]);
}

public function section_wise_student_view(Request $request){
    
    
        $class_details = Srani::where('id',$request->class_id)->value('name');
        $dp_details = Department::where('id',$request->department_id)->value('name');
        $section_details = Section::where('id',$request->section_id)->value('name');


$student_details = MainStudent::where('class',$class_details)
->where('section',$section_details)
->where('department',$request->department_id)
->get();


return view('admin.student_att.section_wise_student_view',[
    'student_details'=>$student_details

 ]);

}



public function store(Request $request){


    $all_input_date = $request->all();
    
    //dd($all_input_date);

    $note_data = array_filter($all_input_date['note']);




    $student_id = $all_input_date['student_id'];


    //$empty_check_note = reset($note_data);



    if($note_data == []){
        foreach($student_id as $key => $student_id){
            $insert_data = new Attendence();
            $insert_data->sreni_id = $request->class_id;
            $insert_data->department_id = $request->department_id;
            $insert_data->section_id = $request->section_id;
            $insert_data->student_id = $all_input_date['student_id'][$key];
            $insert_data->roll = $all_input_date['student_roll'][$key];
            $insert_data->student_name = $all_input_date['student_name'][$key];
            $insert_data->date =$request->date;
            $insert_data->present_status =$all_input_date['present_status'][$key];
            $insert_data->subject =$request->subject_id;
            $insert_data->save();

            }
            }else{
                foreach($student_id as $key => $student_id){
                    $insert_data = new Attendence();
                    $insert_data->sreni_id = $request->class_id;
                    $insert_data->department_id = $request->department_id;
                    $insert_data->section_id = $request->section_id;
                    $insert_data->student_id = $all_input_date['student_id'][$key];
                    $insert_data->roll = $all_input_date['student_roll'][$key];
                    $insert_data->student_name = $all_input_date['student_name'][$key];
                    $insert_data->note = $all_input_date['note'][$key];
                    $insert_data->date =$request->date;
                    $insert_data->present_status =$all_input_date['present_status'][$key];
                    $insert_data->subject =$request->subject_id;
                    $insert_data->save();

                    }

            }





    return redirect()->route('admin.attendance_student.create')->with('success','Created successfully!');


}

public function attendance_student_search(Request $request){



    $student_attandence_search=Attendence::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->where('subject',$request->subject_id)
    ->where('date',$request->date)
    ->get();


    $class_id = $request->class_id;
    $section_id = $request->section_id;

    $department_id = $request->department_id;

    $subject_id = $request->subject_id;


    $date = $request->date;

    return view('admin.student_att.search_result',[
        'student_attandence_search'=>$student_attandence_search,
        'class_id'=>$class_id,
        'section_id'=>$section_id,
        'department_id'=>$department_id,
        'subject_id'=>$subject_id,
        'date'=>$date
    ]);



}


public function update(Request $request){


    $student_attandence_search=Attendence::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->where('subject',$request->subject_id)
    ->where('date',$request->date_old)
    ->delete();

//dd(1);
    $all_input_date = $request->all();

    $note_data = array_filter($all_input_date['note']);




    $student_id = $all_input_date['student_id'];


    //$empty_check_note = reset($note_data);



    if($note_data == []){
        foreach($student_id as $key => $student_id){
            $insert_data = new Attendence();
            $insert_data->sreni_id = $request->class_id;
            $insert_data->department_id = $request->department_id;
            $insert_data->section_id = $request->section_id;
            $insert_data->student_id = $all_input_date['student_id'][$key];
            $insert_data->roll = $all_input_date['student_roll'][$key];
            $insert_data->student_name = $all_input_date['student_name'][$key];
            $insert_data->date =$request->date;
            $insert_data->present_status =$all_input_date['present_status'][$key];
            $insert_data->subject =$request->subject_id;
            $insert_data->save();

            }
            }else{
                foreach($student_id as $key => $student_id){
                    $insert_data = new Attendence();
                    $insert_data->sreni_id = $request->class_id;
                    $insert_data->department_id = $request->department_id;
                    $insert_data->section_id = $request->section_id;
                    $insert_data->student_id = $all_input_date['student_id'][$key];
                    $insert_data->roll = $all_input_date['student_roll'][$key];
                    $insert_data->student_name = $all_input_date['student_name'][$key];
                    $insert_data->note = $all_input_date['note'][$key];
                    $insert_data->date =$request->date;
                    $insert_data->present_status =$all_input_date['present_status'][$key];
                    $insert_data->subject =$request->subject_id;
                    $insert_data->save();

                    }

            }





    return redirect()->route('admin.attendance_student')->with('success','Update successfully!');


}

}
