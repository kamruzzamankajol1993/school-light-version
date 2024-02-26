<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassRoutine;
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
use App\Classroom;
use App\Class_shedule;
class ClassRoutineController extends Controller
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
       return view('admin.class_routine.index',[
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
   return view('admin.class_routine.add',[
       'class_details'=>$class_details,
       'dp_details'=>$dp_details,
       'section_details'=>$section_details,
       'class_teacher_details'=>$class_teacher_details,
       'teacher_details'=>$teacher_details
    ]);
}



public function store(Request $request){

    $input = $request->all();

    $class_schedule = $input['class_shedule'];
//dd($input);

         foreach ($class_schedule as $key1 => $class_schedule_new) {
            $user = new ClassRoutine;
            $user->subject_id = $input['subject'][$key1];
            $user->teacher_id = $input['teacher'][$key1];
            $user->date = $input['class_shedule'][$key1];
            $user->sreni_id = $request->class_id;
            $user->department_id= $request->department_id;
            $user->section_id = $request->section_id;
            $user->room = $request->room;
            $user->day = $request->day;
            $user->save();
            }


            return redirect()->route('admin.class_routine')->with('success','Created successfully!');



}

public function class_routine_search_sectionwise(Request $request){




    $productList=ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->get();


    $class_name = Srani::where('id',$request->class_id)->value('name');
    $department_name = Department::where('id',$request->department_id)->value('name');
    $section_name = Section::where('id',$request->section_id)->value('name');


    $roomdetails = ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->value('room');

    $uniq_day_details = ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->select('day')->distinct()->get();


    $schedule_all=ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->select('date')->distinct()->get();


    $saturday_class = ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)

    ->where('day','Saturday')


    ->get();
    $sunday_class = ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->where('day','Sunday')
    ->get();
    $monday_class = ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->where('day','Monday')
    ->get();
    $tuesday_class = ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->where('day','Tuesday')
    ->get();
    $wednesday_class = ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->where('day','Wednesday')
    ->get();
    $thursday_class = ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->where('day','Thursday')
    ->get();

    $class_id = $request->class_id;
    $section_id = $request->section_id;

    $department_id = $request->department_id;

    return view('admin.class_routine.search_view')->with([
        'productList'=>$productList,
        'class_name'=>$class_name,
        'department_name'=>$department_name,
        'section_name'=>$section_name,
        'uniq_day_details'=>$uniq_day_details,
        'schedule_all'=>$schedule_all,
        'thursday_class'=>$thursday_class,
        'wednesday_class'=>$wednesday_class,
        'tuesday_class'=>$tuesday_class,
        'monday_class'=>$monday_class,
        'sunday_class'=>$sunday_class,
        'roomdetails'=>$roomdetails,
        'class_id'=>$class_id,
        'section_id'=>$section_id,
        'saturday_class'=>$saturday_class,
        'department_id'=>$department_id

    ]);



}

public function class_routine_del_up(Request $request){

    $productList_new=ClassRoutine::where('sreni_id',$request->class_id)
    ->where('section_id',$request->section_id)
    ->where('department_id',$request->department_id)
    ->get();



        $class_details_new = Srani::latest()->get();
        $dp_details_new = Department::latest()->get();
        $section_details_new = Section::latest()->get();
       $teacher_details_new = Teacher::latest()->get();
       $uniq_subject_details_new = Subject::select('name')->distinct()->get();


       $class_room_details_new = Classroom::latest()->get();
        $class_schedule_details_new = Class_shedule::latest()->get();


       return view('admin.class_routine.del_up_view')->with([

        'productList_new'=>$productList_new,
        'class_details_new'=>$class_details_new,
        'dp_details_new'=>$dp_details_new,
        'section_details_new'=>$section_details_new,
        'teacher_details_new'=>$teacher_details_new,
        'uniq_subject_details_new'=>$uniq_subject_details_new,

        'class_room_details_new'=>$class_room_details_new,
        'class_schedule_details_new'=>$class_schedule_details_new


    ]);


}


public function destroy($id){

    $user = ClassRoutine::find($id);
   if (!is_null($user)) {
       $user->delete();
   }


   return redirect()->route('admin.class_routine')->with('error','Deleted successfully!');
}

public function update(Request $request){



            $user = ClassRoutine::find($request->id);
            $user->subject_id = $request->subject_id;
            $user->teacher_id = $request->teacher_id;
            $user->date = $request->date;
            $user->sreni_id = $request->class_id;
            $user->department_id= $request->department_id;
            $user->section_id = $request->section_id;
            $user->room = $request->room_new;
            $user->day = $request->day;
            $user->save();

            return redirect()->route('admin.class_routine')->with('info','Updated successfully!');


}
}
