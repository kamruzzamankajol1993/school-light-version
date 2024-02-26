<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;
use App\Section;
use App\Teacher;
use App\Subject;
use App\Student;
use App\Result;
use App\ClassRoutine;
use App\InstituteInformation;
use App\Exam;
use Image;
use App\Lesson;
use App\Lesson_list;
use App\Topic;
use App\Topic_list;
class LessonPlanController extends Controller
{
   public function index(){

          $teacher_lists = Teacher::latest()->get();

          return view('admin.lesson_plan.index',['teacher_lists'=>$teacher_lists]);

   }


   public function class_routine_search_teacherwise(Request $request){


    $productList=ClassRoutine::where('teacher_id',$request->teacher_id)->get();








    $saturday_class = ClassRoutine::where('teacher_id',$request->teacher_id)

    ->where('day','Saturday')


    ->get();
    $sunday_class = ClassRoutine::where('teacher_id',$request->teacher_id)
    ->where('day','Sunday')
    ->get();
    $monday_class = ClassRoutine::where('teacher_id',$request->teacher_id)
    ->where('day','Monday')
    ->get();
    $tuesday_class = ClassRoutine::where('teacher_id',$request->teacher_id)
    ->where('day','Tuesday')
    ->get();
    $wednesday_class = ClassRoutine::where('teacher_id',$request->teacher_id)
    ->where('day','Wednesday')
    ->get();
    $thursday_class = ClassRoutine::where('teacher_id',$request->teacher_id)
    ->where('day','Thursday')
    ->get();



    return view('admin.lesson_plan.search_view')->with([
        'productList'=>$productList,

        'thursday_class'=>$thursday_class,
        'wednesday_class'=>$wednesday_class,
        'tuesday_class'=>$tuesday_class,
        'monday_class'=>$monday_class,
        'sunday_class'=>$sunday_class,


        'saturday_class'=>$saturday_class


    ]);
   }
}
