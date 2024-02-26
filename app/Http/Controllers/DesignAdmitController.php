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

class DesignAdmitController extends Controller
{
    public function index(){

        $class_details = Srani::latest()->get();
        $session_detail = SessionYear::latest()->get();
       $exam_details = Exam::latest()->get();
       $design_admit_card = DesignAdmit::latest()->get();
       $exam_details = Exam::latest()->get();
        return view('admin.design_admit_card.index',['exam_details'=>$exam_details,'design_admit_card'=>$design_admit_card,'exam_details'=>$exam_details,'session_detail'=>$session_detail,'class_details'=>$class_details]);
    }


    public function generate_admit_card_index(){


        $class_details = Srani::latest()->get();
        $session_detail = SessionYear::latest()->get();
       $exam_details = Exam::latest()->get();
       $design_admit_card = DesignAdmit::latest()->get();
       $exam_details = Exam::latest()->get();
        return view('admin.generate_admit_card.index',['exam_details'=>$exam_details,'design_admit_card'=>$design_admit_card,'exam_details'=>$exam_details,'session_detail'=>$session_detail,'class_details'=>$class_details]);

    }



    public function print_view_all_or_single_admin(Request $request){

        $institute_list = DB::table('institute_information')->latest()->first();
        $design_admit_card = DesignAdmit::where('id',$request->template_id)
        ->where('exam_name',$request->exam_id)->latest()->first();


        $exam_name = DB::table('exams')->where('id',$request->exam_id)->value('exam_name');
        $session_name = DB::table('exams')->where('id',$request->exam_id)->value('year');


        $class_name =Srani::where('id',$request->class_id)->value('name');
        $department_name=Department::where('id',$request->department_id)->value('name');
        $section_name = Section::where('id',$request->section_id)->value('name');



        if($request->students_id == 'all'){

            $student_details = MainStudent::where('class',$class_name)->where('section',$section_name)->get();

        }else{



            $student_details = MainStudent::where('class',$class_name)
            ->where('section',$section_name)->where('id',$request->students_id)->get();


        }




        $subject_list = Subject::latest()->get();

        $exam_schedule = ExamSchedule::where('class_id',$request->class_id)
        ->where('department_id',$request->department_id)->where('exam_id',$request->exam_id)->get();


        return view('admin.generate_admit_card.print_view_all_or_single_admin')->with([
            'exam_schedule'=>$exam_schedule,
            'subject_list'=>$subject_list,
            'student_details'=>$student_details,
            'design_admit_card'=>$design_admit_card,
            'institute_list'=>$institute_list,
            'class_name'=>$class_name,
            'section_name'=>$section_name,
            'exam_name'=>$exam_name,
            'session_name'=>$session_name


]);



    }


    public function exam_id_template_id(Request $request){

        $states = DesignAdmit::where('exam_name',$request->id_country)->get();
        $data = view('admin.generate_admit_card.exam_id_template_id',compact('states'))->render();


        return response()->json(['options'=>$data]);



    }


    public function store(Request $request){


        $user = new DesignAdmit();

           $user->template = $request->template;
           $user->heading = $request->heading;
           $user->exam_name = $request->exam_name;
           $user->footer_text = $request->footer_text;
           $user->backfround_image = $request->backfround_image;
           $user->name = $request->name;
           $user->father_name = $request->father_name;
           $user->mother_name = $request->mother_name;
           $user->date_of_birth = $request->date_of_birth;
           $user->admission_no = $request->admission_no;
           $user->address = $request->address;
           $user->gender = $request->gender;
           $user->class = $request->class;
           $user->section = $request->section;
           $user->roll_no = $request->roll_no;

           if ($request->hasfile('sign')) {
            $file = $request->file('sign');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->sign =  'public/uploads/'.$filename;
        }
           $user->save();

           return redirect()->route('admin.design_admit_card')->with('success','Created successfully!');
    }


    public function destroy($id){

        $user = DesignAdmit::find($id);
       if (!is_null($user)) {
           $user->delete();
       }


       return redirect()->route('admin.design_admit_card')->with('error','Deleted successfully!');
   }


   public function update(Request $request){


    $user = DesignAdmit::find($request->id);

    $user->template = $request->template;
    $user->heading = $request->heading;
    $user->exam_name = $request->exam_name;
    $user->footer_text = $request->footer_text;

    $user->name = $request->name;
    $user->father_name = $request->father_name;
    $user->mother_name = $request->mother_name;
    $user->date_of_birth = $request->date_of_birth;
    $user->admission_no = $request->admission_no;
    $user->address = $request->address;
    $user->gender = $request->gender;
    $user->class = $request->class;
    $user->section = $request->section;
    $user->roll_no = $request->roll_no;
    $user->backfround_image = $request->backfround_image;

       if ($request->hasfile('sign')) {
        $file = $request->file('sign');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/uploads/', $filename);
        $user->sign =  'public/uploads/'.$filename;
    }
       $user->save();

       return redirect()->route('admin.design_admit_card')->with('success','Created successfully!');
}
}
