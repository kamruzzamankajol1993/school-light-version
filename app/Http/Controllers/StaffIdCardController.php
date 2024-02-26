<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Exam;
use App\Srani;
use App\Subject;
use App\Section;
use App\HrDepartment;
use App\Designation;
use App\MainStudent;
use App\Models\SessionYear;
use App\Models\AssaignClassToExam;
use App\Models\ExamSchedule;
use App\Models\TeacherRemark;
use App\Models\DesignAdmit;
use App\Models\DesignMarkSheet;
use App\Models\StudentIdCard;
use App\Models\StaffIdCard;
use App\Staff;
class StaffIdCardController extends Controller
{


    public function staff_id_card_post(Request $request){

        $states = staff::where('designation',$request->id_country)->where('department',$request->dp_id)->get();
        $data = view('admin.generate_staff_id_card.exam_id_template_id',compact('states'))->render();


        return response()->json(['options'=>$data]);
    }


    public function exam_name_search(Request $request){


        $states = Exam::where('year',$request->id_country)->get();
        $data = view('admin.exam.exam_name_search',compact('states'))->render();


        return response()->json(['options'=>$data]);


    }
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

        return view('admin.staff_card_id.index',[
            'exam_details'=>$exam_details,
            'design_admit_card'=>$design_admit_card,
            'exam_details'=>$exam_details,
            'session_detail'=>$session_detail,
            'class_details'=>$class_details,
            'design_mark_sheet'=>$design_mark_sheet,
            'student_card_id'=>$student_card_id,
            'staff_card_id'=>$staff_card_id
        ]);
    }


    public function generate_staff_id_card_index(){

        //dd(1);

        $class_details = Srani::latest()->get();
        $session_detail = SessionYear::latest()->get();
       $exam_details = Exam::latest()->get();
       $design_admit_card = DesignAdmit::latest()->get();
       $exam_details = Exam::latest()->get();

       $design_mark_sheet = DesignMarkSheet::latest()->get();

        $student_card_id = StudentIdCard::latest()->get();

        $staff_card_id = StaffIdCard::latest()->get();


        $staff_designa = Designation::latest()->get();
        $staff_department = HrDepartment::latest()->get();
        //$staff_card_id = StaffIdCard::latest()->get();
        return view('admin.generate_staff_id_card.index',[
            'exam_details'=>$exam_details,
            'design_admit_card'=>$design_admit_card,
            'exam_details'=>$exam_details,
            'session_detail'=>$session_detail,
            'class_details'=>$class_details,
            'design_mark_sheet'=>$design_mark_sheet,
            'student_card_id'=>$student_card_id,
            'staff_card_id'=>$staff_card_id,
            'staff_designa'=>$staff_designa,
            'staff_department'=>$staff_department
        ]);
    }


    public function store(Request $request){


        $user = new StaffIdCard();

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

           $user->exam_session = $request->exam_session;

           $user->desi = $request->desi;
           $user->date_of_joining = $request->date_of_joining;
           $user->depart = $request->depart;
           $user->address = $request->address;

           $user->phone = $request->phone;



           if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->logo =  'public/uploads/'.$filename;
        }
           $user->save();

           return redirect()->route('admin.staff_id_card')->with('success','Created successfully!');



    }

    public function destroy($id){

        $user = StaffIdCard::find($id);
       if (!is_null($user)) {
           $user->delete();
       }


       return redirect()->route('admin.staff_id_card')->with('error','Deleted successfully!');
   }


   public function update(Request $request){


    $user = StaffIdCard::find($request->id);

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

    $user->exam_session = $request->exam_session;

    $user->desi = $request->desi;
    $user->date_of_joining = $request->date_of_joining;
    $user->depart = $request->depart;
    $user->address = $request->address;

    $user->phone = $request->phone;



    if ($request->hasfile('logo')) {
     $file = $request->file('logo');
     $extension = $file->getClientOriginalName();
     $filename = $extension;
     $file->move('public/uploads/', $filename);
     $user->logo =  'public/uploads/'.$filename;
 }
       $user->save();

       return redirect()->route('admin.staff_id_card')->with('success','Created successfully!');
}

public function exam_id_template_id(Request $request){

    $states = StaffIdCard::where('exam_name',$request->id_country)->get();
    $data = view('admin.generate_staff_id_card.exam_id_template_id',compact('states'))->render();


    return response()->json(['options'=>$data]);



}

public function print_view_all_or_single_admin(Request $request){

    $institute_list = DB::table('institute_information')->latest()->first();
    $student_certificate = StaffIdCard::where('id',$request->template_id)->latest()->first();





    //body text





    $class_name =Srani::where('id',$request->class_id)->value('name');
    //$department_name=Department::where('id',$request->department_id)->value('name');
    $section_name = Section::where('id',$request->section_id)->value('name');


    $class_id = $request->class_id;
    $department_id = $request->department_id;
    $section_id = $request->section_id;

    if(empty($department_name)){

       $new_dp = 0;
    }else{

        $new_dp = $department_name;

    }



    if($request->staff_id == 'all'){

        $student_details = Staff::where('department',$request->dp_id)->where('designation',$request->desi_id)->get();

    }else{

//dd($department_name);

        $student_details = Staff::where('department',$request->dp_id)->where('designation',$request->desi_id)->where('id',$request->staff_id)->get();


    }







    return view('admin.generate_staff_id_card.print_view_all_or_single_admin_staff_id_card')->with([



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
