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
use App\Topic;
use App\Topic_list;
class TopicController extends Controller
{
    public function index(){


        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $lesson_details = Lesson::latest()->get();
        $topic_details = Topic::latest()->get();
        $lessonlist_details = Lesson_list::latest()->get();
 $subject_details = Subject::latest()->get();

        return view('admin.topic.index',[
            'lessonlist_details'=>$lessonlist_details,
            'lesson_details'=>$lesson_details,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,
   'topic_details'=>$topic_details,
            'subject_details'=>$subject_details
        ]);
    }


    public function store(Request $request){



        $request->validate([
            'subject_id' => 'required|max:50',

        ]);


        $new_data_insert = new Topic();
        $new_data_insert->sreni_id = $request->class_id;
        $new_data_insert->department_id= $request->department_id;
        $new_data_insert->section_id = $request->section_id;
        $new_data_insert->subject_id = $request->subject_id;
        $new_data_insert->lesson_id = $request->lesson_id;
        $new_data_insert->save();



        $topic_table_id = $new_data_insert->id;


           $array_data = $request->all();


           $lesson_detail = $array_data['topic'];


           foreach ($lesson_detail as $key => $lesson_detail) {

                 $table_list_data = new Topic_list();
                 $table_list_data->topic_table_id	=$topic_table_id;
                 $table_list_data->topic_name	=$array_data['topic'][$key];
                 $table_list_data->save();


           }


           return redirect()->back()->with('success','Created successfully!');


    }



    public function update(Request $request){



        $new_data_insert =Topic::find($request->id);
        $new_data_insert->sreni_id = $request->class_id;
        $new_data_insert->department_id= $request->department_id;
        $new_data_insert->section_id = $request->section_id;
        $new_data_insert->subject_id = $request->subject_id;
        $new_data_insert->lesson_id = $request->lesson_id;
        $new_data_insert->save();



        $topic_table_id = $request->id;


        $first_delete_data = Topic_list::where('topic_table_id',$topic_table_id)->delete();


           $array_data = $request->all();


           $lesson_detail = $array_data['name'];


           foreach ($lesson_detail as $key => $lesson_detail) {

                 $table_list_data = new Topic_list();
                 $table_list_data->topic_table_id	=$topic_table_id;
                 $table_list_data->topic_name	=$array_data['name'][$key];
                 $table_list_data->save();


           }


           return redirect()->back()->with('success','Updated successfully!');


    }



    public function destroy($id){

        $user = Topic::find($id);
       if (!is_null($user)) {
           $user->delete();
       }
       $first_delete_data = Topic_list::where('topic_table_id',$id)->delete();

       return redirect()->route('admin.topic')->with('error','Deleted successfully!');
   }


   public function lesson_search_subject_wise(Request $request){



      $collect_id =Lesson::where('sreni_id',$request->class_id)
      ->where('section_id',$request->section_id)
      ->where('department_id',$request->department_id)
      ->where('subject_id',$request->subject_id)
      ->value('id');

      //dd($collect_id);
      $lesson_name_list = Lesson_list::where('lesson_table_id',$collect_id)->get();


      $data = view('admin.topic.lesson_list',compact('lesson_name_list'))->render();


      return response()->json(['options'=>$data]);



   }
}
