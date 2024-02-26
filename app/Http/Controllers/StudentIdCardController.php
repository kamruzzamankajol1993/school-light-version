<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Exam;
use App\Srani;
use App\Subject;
use App\Section;
use App\Department;
use App\MainStudent;
use App\Models\SessionYear;
use App\Models\AssaignClassToExam;
use App\Models\ExamSchedule;
use App\Models\TeacherRemark;
use App\Models\DesignAdmit;
use App\Models\DesignMarkSheet;
use App\Models\StudentIdCard;
use App\Models\StudentCertificate;
use Illuminate\Support\Str;
class StudentIdCardController extends Controller
{
    public function index(){

        //dd(1);

        $class_details = Srani::latest()->get();
        $session_detail = SessionYear::latest()->get();
       $exam_details = Exam::latest()->get();
       $design_admit_card = DesignAdmit::latest()->get();
       $exam_details = Exam::latest()->get();

       $design_mark_sheet = DesignMarkSheet::latest()->get();

        $student_card_id = StudentIdCard::latest()->get();

        return view('admin.student_card_id.index',[
            'exam_details'=>$exam_details,
            'design_admit_card'=>$design_admit_card,
            'exam_details'=>$exam_details,
            'session_detail'=>$session_detail,
            'class_details'=>$class_details,
            'design_mark_sheet'=>$design_mark_sheet,
            'student_card_id'=>$student_card_id
        ]);
    }


    public function generate_student_id_card_index(){

        //dd(1);

        $class_details = Srani::latest()->get();
        $session_detail = SessionYear::latest()->get();
       $exam_details = Exam::latest()->get();
       $design_admit_card = DesignAdmit::latest()->get();
       $exam_details = Exam::latest()->get();

       $design_mark_sheet = DesignMarkSheet::latest()->get();

        $student_card_id = StudentIdCard::latest()->get();

        return view('admin.generate_student_id_card.index',[
            'exam_details'=>$exam_details,
            'design_admit_card'=>$design_admit_card,
            'exam_details'=>$exam_details,
            'session_detail'=>$session_detail,
            'class_details'=>$class_details,
            'design_mark_sheet'=>$design_mark_sheet,
            'student_card_id'=>$student_card_id
        ]);
    }


    public function store(Request $request){


        $user = new StudentIdCard();

           $user->signature = $request->template;
           $user->id_card_title = $request->heading;
           $user->header_color = $request->header_color;
           $user->school_name = $request->school_name;
           $user->background_image = $request->background_image;


           $user->name = $request->name;
           $user->father_name = $request->father_name;
           $user->mother_name = $request->mother_name;
           $user->date_of_birth = $request->date_of_birth;
           $user->admission_no = $request->admission_no;
           $user->photo = $request->photo;
           $user->school_name = $request->school_name;
           $user->gender = $request->gender;
           $user->class = $request->class;
           $user->section = $request->section;
           $user->roll_no = $request->roll_no;
           $user->exam_session = $request->exam_session;
           if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->logo =  'public/uploads/'.$filename;
        }
           $user->save();

           return redirect()->route('admin.student_id_card')->with('success','Created successfully!');



    }

    public function destroy($id){

        $user = StudentIdCard::find($id);
       if (!is_null($user)) {
           $user->delete();
       }


       return redirect()->route('admin.student_id_card')->with('error','Deleted successfully!');
   }


   public function update(Request $request){


    $user = StudentIdCard::find($request->id);

    $user->signature = $request->template;
    $user->id_card_title = $request->heading;
    $user->header_color = $request->header_color;
    $user->school_name = $request->school_name;
    $user->background_image = $request->background_image;


    $user->name = $request->name;
    $user->father_name = $request->father_name;
    $user->mother_name = $request->mother_name;
    $user->date_of_birth = $request->date_of_birth;
    $user->admission_no = $request->admission_no;
    $user->photo = $request->photo;
    $user->school_name = $request->school_name;
    $user->gender = $request->gender;
    $user->class = $request->class;
    $user->section = $request->section;
    $user->roll_no = $request->roll_no;
    $user->exam_session = $request->exam_session;
    if ($request->hasfile('logo')) {
     $file = $request->file('logo');
     $extension = $file->getClientOriginalName();
     $filename = $extension;
     $file->move('public/uploads/', $filename);
     $user->logo =  'public/uploads/'.$filename;
 }
       $user->save();

       return redirect()->route('admin.student_id_card')->with('success','Created successfully!');
}

public function exam_id_template_id(Request $request){

    $states = DesignMarkSheet::where('exam_name',$request->id_country)->get();
    $data = view('admin.generate_admit_card.exam_id_template_id',compact('states'))->render();


    return response()->json(['options'=>$data]);



}


public function print_view_all_or_single_admin(Request $request){

    $institute_list = DB::table('institute_information')->latest()->first();
    $student_id_card = StudentIdCard::where('id',$request->template_id)->latest()->first();








    $class_name =Srani::where('id',$request->class_id)->value('name');
    $department_name=Department::where('id',$request->department_id)->value('name');
    $section_name = Section::where('id',$request->section_id)->value('name');


    $class_id = $request->class_id;
    $department_id = $request->department_id;
    $section_id = $request->section_id;

    if(empty($department_name)){

       $new_dp = 0;
    }else{

        $new_dp = $department_name;

    }



    if($request->students_id == 'all'){

        $student_details = MainStudent::where('class',$class_name)
        ->where('department',$new_dp)->where('session_year',$request->session_id)->where('section',$section_name)->get();

    }else{

//dd($department_name);

        $student_details = MainStudent::where('class',$class_name)->where('department',$new_dp)->where('session_year',$request->session_id)
        ->where('section',$section_name)->where('id',$request->students_id)->get();


    }







    return view('admin.generate_student_id_card.print_view_all_or_single_admin_student_id_card')->with([



        'class_id'=>$class_id,
        'department_id'=>$department_id,
        'section_id'=>$section_id,



        'student_details'=>$student_details,
        'student_id_card'=>$student_id_card,
        'institute_list'=>$institute_list,
        'class_name'=>$class_name,
        'section_name'=>$section_name,

        'session_name'=>$request->session_id


]);


}

}
