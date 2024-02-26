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
use App\Lesson;
use App\Lesson_list;
class LessonController extends Controller
{
    public function index(){


        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $lesson_details = Lesson::latest()->get();
        $lessonlist_details = Lesson_list::latest()->get();
 $subject_details = Subject::latest()->get();

        return view('admin.lesson.index',[
            'lessonlist_details'=>$lessonlist_details,
            'lesson_details'=>$lesson_details,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,

            'subject_details'=>$subject_details
        ]);
    }


    public function store(Request $request){



        $request->validate([
            'subject_id' => 'required|max:50',

        ]);


        $new_data_insert = new Lesson();
        $new_data_insert->sreni_id = $request->class_id;
        $new_data_insert->department_id= $request->department_id;
        $new_data_insert->section_id = $request->section_id;
        $new_data_insert->subject_id = $request->subject_id;
        $new_data_insert->save();



        $lesson_table_id = $new_data_insert->id;


           $array_data = $request->all();


           $lesson_detail = $array_data['lesson'];


           foreach ($lesson_detail as $key => $lesson_detail) {

                 $table_list_data = new Lesson_list();
                 $table_list_data->lesson_table_id	=$lesson_table_id;
                 $table_list_data->lesson_name	=$array_data['lesson'][$key];
                 $table_list_data->save();


           }


           return redirect()->back()->with('success','Created successfully!');


    }



    public function update(Request $request){



        $new_data_insert =Lesson::find($request->id);
        $new_data_insert->sreni_id = $request->class_id;
        $new_data_insert->department_id= $request->department_id;
        $new_data_insert->section_id = $request->section_id;
        $new_data_insert->subject_id = $request->subject_id;
        $new_data_insert->save();



        $lesson_table_id = $request->id;


        $first_delete_data = Lesson_list::where('lesson_table_id',$lesson_table_id)->delete();


           $array_data = $request->all();


           $lesson_detail = $array_data['name'];


           foreach ($lesson_detail as $key => $lesson_detail) {

                 $table_list_data = new Lesson_list();
                 $table_list_data->lesson_table_id	=$lesson_table_id;
                 $table_list_data->lesson_name	=$array_data['name'][$key];
                 $table_list_data->save();


           }


           return redirect()->back()->with('success','Updated successfully!');


    }



    public function destroy($id){

        $user = Lesson::find($id);
       if (!is_null($user)) {
           $user->delete();
       }
       $first_delete_data = Lesson_list::where('lesson_table_id',$id)->delete();

       return redirect()->route('admin.lesson')->with('error','Deleted successfully!');
   }
}
