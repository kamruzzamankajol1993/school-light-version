<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Srani;
use App\Subject;
use App\Section;
use App\MainStudent;
use App\Models\SessionYear;
use App\Models\AssaignClassToExam;
use App\Models\ExamSchedule;
use App\Models\TeacherRemark;
class ExamController extends Controller
{

    public function add_exam_schedule(Request $request){


        //dd(1);


        $check_data_availableornot = ExamSchedule::where('exam_id',$request->exam_id)
        ->where('department_id',$request->department_id)
        ->where('class_id',$request->class_id)
        ->value('subject_id');


        if(empty( $check_data_availableornot)){


        $array_data = $request->all();

        $subject_id = $array_data['subject_id'];

// dd($array_data['time']);



        foreach($subject_id as $key=>$subject_id){

            //$time_format = date('h:i:s a', strtotime($array_data['time'][$key]));

           $user = new ExamSchedule();
           $user->subject_id = $array_data['subject_id'][$key];
           $user->date = $array_data['date'][$key];
           $user->time = date('h:i:s a', strtotime($array_data['time'][$key]));
           $user->duration = $array_data['duration'][$key];
           $user->main_time = $array_data['time'][$key];
           $user->room_no = $array_data['room_no'][$key];
           $user->mark_max = $array_data['mark_max'][$key];
           $user->mark_min = $array_data['mark_min'][$key];
           $user->exam_id = $request->exam_id;
           $user->department_id = $request->department_id;
           $user->class_id = $request->class_id;
           $user->save();

        }

    }else{


        return redirect()->back()->with('error','You have Allready Added Shedule!');




    }

        return redirect()->route('admin.exam')->with('success',' Added successfully!');


    }

    public function exam_schedule_update(Request $request){


        $user =ExamSchedule::find($request->id);
        $user->subject_id = $request->subject_id;;
        $user->date = $request->date;;
        $user->time = date('h:i:s a', strtotime($request->time));
        $user->duration = $request->duration;
        $user->main_time = $request->time;
        $user->room_no = $request->room_no;
        $user->mark_max = $request->mark_max;
        $user->mark_min = $request->mark_min;
        $user->save();


        return redirect()->back()->with('info',' Updated successfully!');



    }
    public function index(){

        $class_details = Srani::latest()->get();
        $session_detail = SessionYear::latest()->get();
 $exam_details = Exam::latest()->get();
        return view('admin.exam.index',['exam_details'=>$exam_details,'session_detail'=>$session_detail,'class_details'=>$class_details]);
    }


    public function exam_schedule(){

        $class_details = Srani::latest()->get();
        $session_detail = SessionYear::latest()->get();
 $exam_details = Exam::latest()->get();
        return view('admin.exam.exam_schedule',['exam_details'=>$exam_details,'session_detail'=>$session_detail,'class_details'=>$class_details]);
    }


    public function exam_schedule_search(Request $request){

        $subject_list = Subject::latest()->get();

        $exam_schedule = ExamSchedule::where('class_id',$request->class_id)
        ->where('department_id',$request->department_id)->where('exam_id',$request->exam_id)->get();


        return view('admin.exam.exam_schedule_search')->with([
            'exam_schedule'=>$exam_schedule,
            'subject_list'=>$subject_list

]);



    }


    public function assaign_class_to_exam(Request $request){



         $array_data = $request->all();

         $class_id = $array_data['class_id'];
// dd($class_id);
//dd($class_id);

$delete_data =  AssaignClassToExam::where('exam_id',$request->exam_id)->delete();
         foreach($class_id as $key=>$class_id){

            $user = new AssaignClassToExam();
            $user->class_id = $array_data['class_id'][$key];
        $user->exam_id = $request->exam_id;
        $user->save();

         }

         return redirect()->route('admin.exam')->with('success','Class Added successfully!');
    }



    public function subject_search_for_exam(Request $request){


        $states = Subject::where('class_id',$request->id_country)->get();
                $data = view('admin.exam.subject_search_for_exam',compact('states'))->render();


                return response()->json(['options'=>$data]);


    }

    public function subject_search_dpwise_for_exam(Request $request){


          $states = Subject::where('department_id',$request->id_country)->get();
                $data = view('admin.exam.subject_search_dpwise_for_exam',compact('states'))->render();


                return response()->json(['options'=>$data]);


    }

    public function exam_name_search(Request $request){


        $states = Exam::where('year',$request->id_country)->get();
        $data = view('admin.exam.exam_name_search',compact('states'))->render();


        return response()->json(['options'=>$data]);


    }


    public function student_search_examwise(Request $request){


        $section_id = Section::where('id',$request->id_country)->value('name');


        $states = MainStudent::where('section',$section_id)->get();
           $data = view('admin.exam.student_search_examwise',compact('states'))->render();


           return response()->json(['options'=>$data]);


}





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'exam_name' => 'required|max:250',

        ]);

        // Create New User
        $user = new Exam();
        $user->start_date = $request->start_date;
        $user->end_date= $request->end_date;
        $user->year = $request->year;
        $user->des = $request->des;
        $user->exam_name = $request->exam_name;
        $user->save();

        return redirect()->route('admin.exam')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Exam::find($request->id);
        $user->start_date = $request->start_date;
        $user->end_date= $request->end_date;
        $user->year = $request->year;
        $user->des = $request->des;
        $user->exam_name = $request->exam_name;
        $user->save();

        return redirect()->route('admin.exam')->with('success','Updated successfully!');


    }


    public function add_teacher_remark(Request $request){




        $array_data = $request->all();

         $student_id = $array_data['student_id'];

         foreach($student_id as $key=>$student_id){

            $student_id = $array_data['student_id'];

            $delete_data =  TeacherRemark::where('exam_id',$request->exam_id)
            ->where('session',$request->session_year)->where('student_id',$student_id)->delete();

            $user = new TeacherRemark();
            $user->student_id = $array_data['student_id'][$key];
            $user->comment = $array_data['comment'][$key];
        $user->exam_id = $request->exam_id;
        $user->session = $request->session_year;

        $user->save();

         }


         return redirect()->route('admin.exam')->with('success','Added successfully!');

    }


    public function destroy($id){

         $user = Exam::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.exam')->with('error','Deleted successfully!');
    }



    public function destroy_exam_schedule($id){

        $user = ExamSchedule::find($id);
       if (!is_null($user)) {
           $user->delete();
       }


       return redirect()->back()->with('error','Deleted successfully!');
   }



}
