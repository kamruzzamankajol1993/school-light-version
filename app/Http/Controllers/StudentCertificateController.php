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
use App\Models\StaffIdCard;
use App\Models\StudentCertificate;
use Illuminate\Support\Str;
class StudentCertificateController extends Controller
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

        $staff_card_id = StaffIdCard::latest()->get();


        $student_certificate = StudentCertificate::latest()->get();


        $bracket_name = "{{ }}";

        return view('admin.student_certificate.index',[
            'exam_details'=>$exam_details,
            'design_admit_card'=>$design_admit_card,
            'exam_details'=>$exam_details,
            'session_detail'=>$session_detail,
            'class_details'=>$class_details,
            'design_mark_sheet'=>$design_mark_sheet,
            'student_card_id'=>$student_card_id,
            'staff_card_id'=>$staff_card_id,
            'student_certificate'=>$student_certificate,
            'bracket_name'=>$bracket_name
        ]);
    }



    public function generate_student_certificate_index(){

        //dd(1);

        $class_details = Srani::latest()->get();
        $session_detail = SessionYear::latest()->get();
       $exam_details = Exam::latest()->get();
       $design_admit_card = DesignAdmit::latest()->get();
       $exam_details = Exam::latest()->get();

       $design_mark_sheet = DesignMarkSheet::latest()->get();

        $student_card_id = StudentIdCard::latest()->get();

        $staff_card_id = StaffIdCard::latest()->get();


        $student_certificate = StudentCertificate::latest()->get();

        return view('admin.generate_student_certificate.index',[
            'exam_details'=>$exam_details,
            'design_admit_card'=>$design_admit_card,
            'exam_details'=>$exam_details,
            'session_detail'=>$session_detail,
            'class_details'=>$class_details,
            'design_mark_sheet'=>$design_mark_sheet,
            'student_card_id'=>$student_card_id,
            'staff_card_id'=>$staff_card_id,
            'student_certificate'=>$student_certificate
        ]);
    }


    public function store(Request $request){

        //dd(1);


           $user = new StudentCertificate();
           $user->certificate_name = $request->certificate_name;
           $user->header_color = $request->header_color;
           $user->header_text_left = $request->header_text_left;
           $user->header_center_text = $request->header_center_text;
           $user->header_right_text = $request->header_right_text;
           $user->body_text = $request->body_text;
           $user->footer_left_text = $request->footer_left_text;
           $user->footer_center_text = $request->footer_center_text;
           $user->footer_right_text = $request->footer_right_text;
           $user->photo = $request->photo;

           if ($request->hasfile('backfround_image')) {
            $file = $request->file('backfround_image');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->backfround_image =  'public/uploads/'.$filename;
        }
           $user->save();

           return redirect()->route('admin.student_certificate')->with('success','Created successfully!');




    }


    public function destroy($id){

        $user = StudentCertificate::find($id);
       if (!is_null($user)) {
           $user->delete();
       }


       return redirect()->route('admin.student_certificate')->with('error','Deleted successfully!');
   }



   public function update(Request $request){

    //dd(1);


       $user =StudentCertificate::find($request->id);
       $user->certificate_name = $request->certificate_name;
       $user->header_color = $request->header_color;
       $user->header_text_left = $request->header_text_left;
       $user->header_center_text = $request->header_center_text;
       $user->header_right_text = $request->header_right_text;
       $user->body_text = $request->body_text;
       $user->footer_left_text = $request->footer_left_text;
       $user->footer_center_text = $request->footer_center_text;
       $user->footer_right_text = $request->footer_right_text;
       $user->photo = $request->photo;

       if ($request->hasfile('backfround_image')) {
        $file = $request->file('backfround_image');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/uploads/', $filename);
        $user->backfround_image =  'public/uploads/'.$filename;
    }
       $user->save();

       return redirect()->route('admin.student_certificate')->with('info','Updated successfully!');




}


    public function exam_id_template_id(Request $request){

        $states = DesignMarkSheet::where('exam_name',$request->id_country)->get();
        $data = view('admin.generate_admit_card.exam_id_template_id',compact('states'))->render();


        return response()->json(['options'=>$data]);



    }


    public function print_view_all_or_single_admin_student_certificate(Request $request){



        $institute_list = DB::table('institute_information')->latest()->first();
        $student_certificate = StudentCertificate::where('id',$request->template_id)->latest()->first();


        //body text

        $certificate_body_text = StudentCertificate::where('id',$request->template_id)->value('body_text');

        $find_student_name =Str::contains($certificate_body_text, '$student_name');



        if($find_student_name == 1){







        }else{



        }


        //body text





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







        return view('admin.generate_student_certificate.print_view_all_or_single_admin_student_certificate')->with([


'find_student_name'=>$find_student_name,
'certificate_body_text'=>$certificate_body_text,
            'class_id'=>$class_id,
            'department_id'=>$department_id,
            'section_id'=>$section_id,



            'student_details'=>$student_details,
            'student_certificate'=>$student_certificate,
            'institute_list'=>$institute_list,
            'class_name'=>$class_name,
            'section_name'=>$section_name,

            'session_name'=>$request->session_id


]);




    }
}
