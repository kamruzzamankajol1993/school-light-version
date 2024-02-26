<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\Student;
use App\Result;
use App\Exam;
use App\Models\Homework;
use App\Models\UploadContent;
use Illuminate\Support\Facades\Auth;
class UploadContentController extends Controller
{
    public function index(){

        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = Student::latest()->get();
        $result_details = Result::latest()->get();
 $subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();

$upload_content_detail = UploadContent::latest()->get();
        return view('admin.upload_content.index',[
            'upload_content_detail'=>$upload_content_detail,
            'exam_details'=>$exam_details,
            'result_details'=>$result_details,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,
            'student_details'=>$student_details,
            'subject_details'=>$subject_details
        ]);

   }


   public function assignments(){


    $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = Student::latest()->get();
        $result_details = Result::latest()->get();
 $subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();

$upload_content_detail = UploadContent::where('content_type','Assignments')->latest()->get();
        return view('admin.upload_content.assignments',[
            'upload_content_detail'=>$upload_content_detail,
            'exam_details'=>$exam_details,
            'result_details'=>$result_details,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,
            'student_details'=>$student_details,
            'subject_details'=>$subject_details
        ]);


   }

   public function study_matrials(){


    $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = Student::latest()->get();
        $result_details = Result::latest()->get();
 $subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();

$upload_content_detail = UploadContent::where('content_type','Study Material')->latest()->get();
        return view('admin.upload_content.study_matrials',[
            'upload_content_detail'=>$upload_content_detail,
            'exam_details'=>$exam_details,
            'result_details'=>$result_details,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,
            'student_details'=>$student_details,
            'subject_details'=>$subject_details
        ]);


}


public function syllabus(){


    $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = Student::latest()->get();
        $result_details = Result::latest()->get();
 $subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();

$upload_content_detail = UploadContent::where('content_type','Syllabus')->latest()->get();
        return view('admin.upload_content.syllabus',[
            'upload_content_detail'=>$upload_content_detail,
            'exam_details'=>$exam_details,
            'result_details'=>$result_details,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,
            'student_details'=>$student_details,
            'subject_details'=>$subject_details
        ]);


}

public function other_download(){


    $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = Student::latest()->get();
        $result_details = Result::latest()->get();
 $subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();

$upload_content_detail = UploadContent::where('content_type','Other Download')->latest()->get();
        return view('admin.upload_content.other_download',[
            'upload_content_detail'=>$upload_content_detail,
            'exam_details'=>$exam_details,
            'result_details'=>$result_details,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,
            'student_details'=>$student_details,
            'subject_details'=>$subject_details
        ]);


}





   public function store(Request $request){


    $all_data = $request->all();

    $lesson_detail = $all_data['assaign_section'];


    $final_result = implode(',',$lesson_detail);

    //dd($final_result);

    $user = new UploadContent();
    $user->class = $request->class_id;
    $user->department= $request->department_id;
    $user->section = $request->section_id;
    $user->title = $request->title;
    $user->content_type = $request->content_type;
    $user->assaign_section = $final_result;
    $user->upload_date = $request->upload_date;
    $user->des = $request->des;
    if ($request->hasfile('doc')) {
        $file = $request->file('doc');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/uploads/', $filename);
        $user->doc =  $filename;
    }
    $user->save();


    return redirect()->route('admin.upload_content')->with('success','Created successfully!');
   }


   public function update(Request $request){

    $user = UploadContent::find($request->id);
    $user->class = $request->class_id;
    $user->department= $request->department_id;
    $user->section = $request->section_id;
    $user->title = $request->title;
    $user->content_type = $request->content_type;
    $user->assaign_section = $request->assaign_section;
    $user->upload_date = $request->upload_date;
    $user->des = $request->des;
    if ($request->hasfile('doc')) {
        $file = $request->file('doc');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/uploads/', $filename);
        $user->doc =  $filename;
    }
    $user->save();


    return redirect()->route('admin.upload_content')->with('info','Updated successfully!');
   }


   public function destroy($id){

    $user = UploadContent::find($id);
   if (!is_null($user)) {
       $user->delete();
   }


   return redirect()->route('admin.upload_content')->with('error','Deleted successfully!');
}

public function upload_content_down_load($id){








        $documnent_info = UploadContent::where('id',$id)->value('doc');







    $filePath = public_path('uploads'.'/'.$documnent_info);

    //dd($filePath);
        // $headers = ['Content-Type: application/pdf'];
        // $fileName = time().'.pdf';

        return response()->download($filePath, $documnent_info);

}
}
