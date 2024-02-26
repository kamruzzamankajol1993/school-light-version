<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\MainStudent;
use App\Result;
use App\Exam;
use App\Models\Homework;
use App\Models\UploadContent;
use Illuminate\Support\Facades\Auth;
use App\Models\AluminiEvent;
use App\Models\SessionYear;
class AluminiEventController extends Controller
{
    public function index(){

        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = MainStudent::latest()->get();
        $result_details = Result::latest()->get();
 $subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();

$session_detail = SessionYear::latest()->get();

$alumini_event_detail = AluminiEvent::latest()->get();
        return view('admin.alumini_event.index',[
            'alumini_event_detail'=>$alumini_event_detail,
            'exam_details'=>$exam_details,
            'result_details'=>$result_details,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,
            'student_details'=>$student_details,
            'subject_details'=>$subject_details,
            'session_detail'=>$session_detail
        ]);

   }


   public function manage_all_alumni(){

    $class_details = Srani::latest()->get();
    $dp_details = Department::latest()->get();
    $section_details = Section::latest()->get();
    $student_details = MainStudent::latest()->get();
    $result_details = Result::latest()->get();
$subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();

$session_detail = SessionYear::latest()->get();

$alumini_event_detail = AluminiEvent::latest()->get();
    return view('admin.alumini_event.manage_all_alumni',[
        'alumini_event_detail'=>$alumini_event_detail,
        'exam_details'=>$exam_details,
        'result_details'=>$result_details,
        'class_details'=>$class_details,
        'dp_details'=>$dp_details,
        'section_details'=>$section_details,
        'student_details'=>$student_details,
        'subject_details'=>$subject_details,
        'session_detail'=>$session_detail
    ]);

}


   public function alumni_section_search(Request $request)
   {


           $states = Section::where('class_id',$request->id_country)->get();
           $data = view('admin.alumini_event.section.section',compact('states'))->render();


           return response()->json(['options'=>$data]);

}

public function alumni_section_search_dp_wise(Request $request)
   {


           $states = Section::where('department_id',$request->id_country)->get();
           $data = view('admin.alumini_event.section.dp_section',compact('states'))->render();


           return response()->json(['options'=>$data]);

}


public function alumni_section_search_edit(Request $request)
{


        $states = Section::where('class_id',$request->id_country)->get();
        $data = view('admin.alumini_event.section.section',compact('states'))->render();


        return response()->json(['options'=>$data]);

}

public function alumni_section_search_dp_wise_edit(Request $request)
{


        $states = Section::where('department_id',$request->id_country)->get();
        $data = view('admin.alumini_event.section.dp_section',compact('states'))->render();


        return response()->json(['options'=>$data]);

}


public function store(Request $request){

    $all_data = $request->all();





    if($request->event_for == 'Class'){



        $section_detail = $all_data['section_id'];
        $notify_detail = $all_data['type_noti'];


        $final_result_section = implode(',',$section_detail);
        $final_result_notify = implode(',',$notify_detail);


    $user = new AluminiEvent();
    $user->class = $request->class_id;
    $user->event_for= $request->event_for;
    $user->section = $final_result_section;
    $user->event_title = $request->event_title;
    $user->from_date = $request->from_date;
    $user->type_noti = $final_result_notify;
    $user->to_date = $request->to_date;
    $user->pass_out_session = $request->pass_out_session;
    $user->event_notification_msg = $request->event_notification_msg;
    $user->note = $request->note;
    $user->save();

    }else{
        $notify_detail = $all_data['type_noti'];
        $final_result_notify = implode(',',$notify_detail);
        $user = new AluminiEvent();
        $user->class = '';
        $user->event_for= $request->event_for;
        $user->section = '';
        $user->event_title = $request->event_title;
        $user->from_date = $request->from_date;
        $user->type_noti = $final_result_notify;
        $user->to_date = $request->to_date;
        $user->pass_out_session = '';
        $user->event_notification_msg = $request->event_notification_msg;
        $user->note = $request->note;
        $user->save();


    }

    return redirect()->route('admin.alumni_event')->with('success','Created successfully!');

}


public function update(Request $request){

    $all_data = $request->all();





    if($request->event_for == 'Class'){



        $section_detail = $all_data['section_id'];
        $notify_detail = $all_data['type_noti'];


        $final_result_section = implode(',',$section_detail);
        $final_result_notify = implode(',',$notify_detail);


    $user = AluminiEvent::find($request->id);
    $user->class = $request->class_id;
    $user->event_for= $request->event_for;
    $user->section = $final_result_section;
    $user->event_title = $request->event_title;
    $user->from_date = $request->from_date;
    $user->type_noti = $final_result_notify;
    $user->to_date = $request->to_date;
    $user->pass_out_session = $request->pass_out_session;
    $user->event_notification_msg = $request->event_notification_msg;
    $user->note = $request->note;
    $user->save();

    }else{
        $notify_detail = $all_data['type_noti'];
        $final_result_notify = implode(',',$notify_detail);
        $user = AluminiEvent::find($request->id);
        $user->class = '';
        $user->event_for= $request->event_for;
        $user->section = '';
        $user->event_title = $request->event_title;
        $user->from_date = $request->from_date;
        $user->type_noti = $final_result_notify;
        $user->to_date = $request->to_date;
        $user->pass_out_session = '';
        $user->event_notification_msg = $request->event_notification_msg;
        $user->note = $request->note;
        $user->save();


    }

    return redirect()->route('admin.alumni_event')->with('info','Updated successfully!');

}


public function destroy($id){

    $user = AluminiEvent::find($id);
   if (!is_null($user)) {
       $user->delete();
   }


   return redirect()->route('admin.alumni_event')->with('error','Deleted successfully!');
}

public function search_session_wise(Request $request){


    $class_details = Srani::where('id',$request->class_id)->value('name');
    $dp_details = Department::where('id',$request->department_id)->value('name');
    $section_details = Section::where('id',$request->section_id)->value('name');

    if($request->department_id == 0){


        $student_list=MainStudent::where('class',$class_details)
    ->where('section',$section_details)
  ->where('session_year',$request->session_id)
    ->get();


    }else{
    $student_list=MainStudent::where('class',$class_details)
    ->where('section',$section_details)
    ->where('department',$dp_details)
    ->where('session_year',$request->session_id)
    ->get();
    }
    //dd($student_list);

       return view('admin.alumini_event.search_session_wise')->with([

        'student_list'=>$student_list



    ]);



}


public function search_admission_no_wise(Request $request){


    $student_list=MainStudent::where('admission_no',$request->student_admission_number)->get();



       return view('admin.alumini_event.search_admission_no_wise')->with([

        'student_list'=>$student_list



    ]);




}



}
