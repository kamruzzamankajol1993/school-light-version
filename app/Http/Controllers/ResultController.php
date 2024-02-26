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
use App\Models\SessionYear;
class ResultController extends Controller
{
    public function index(){

        $session_detail = SessionYear::latest()->get();

         $class_details = Srani::latest()->get();
         $dp_details = Department::latest()->get();
         $section_details = Section::latest()->get();
         $student_details = MainStudent::latest()->get();
         $result_details = Result::latest()->get();
  $subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();
         return view('admin.result.index',['session_detail'=>$session_detail,'exam_details'=>$exam_details,'result_details'=>$result_details,'class_details'=>$class_details,'dp_details'=>$dp_details,'section_details'=>$section_details,'student_details'=>$student_details,'subject_details'=>$subject_details]);

    }



    public function create(){
//dd(1);
$session_detail = SessionYear::latest()->get();
         $class_details = Srani::latest()->get();
         $dp_details = Department::latest()->get();
         $section_details = Section::latest()->get();
         $student_details = MainStudent::latest()->get();
       $subject_details = Subject::latest()->get();
         $exam_details = Exam::latest()->get();

         return view('admin.result.create',['session_detail'=>$session_detail,'exam_details'=>$exam_details,'class_details'=>$class_details,'dp_details'=>$dp_details,'section_details'=>$section_details,'student_details'=>$student_details,'subject_details'=>$subject_details]);

    }


    public function store(Request $request){


        //  $request->validate([
        //     'class_id' => 'required|max:50',
        //     'department_id' => 'required|max:50',
        //     'section_id' => 'required|max:50',
        //     'students_id' => 'required|max:50',
        //      'subject_id' => 'required|max:50',
        //      'exam_id' => 'required|max:50',
        //      'written_exam' => 'required|max:50',
        //      'mcq_exam' => 'required|max:50',
        //      'prac_exam' => 'required|max:50',

        // ]);


         //student_id_check

         if($request->department_id == 0 ){


         $roll_check = Result::where('sreni_id',$request->class_id)

->where('section_id',$request->section_id)
->where('subject_id',$request->subject_id)
->where('exam_id',$request->exam_id)->value('students_id');


if($request->students_id == $roll_check){

    return response()->json(
        [
          'success' => false,
          'message' => 'You Have already Add Result To Number'
        ]
   );

        // return redirect()->back()->with('error','You Have already Add Result To Number');

}else{



    $mainTotal = $request->written_exam+$request->mcq_exam+$request->prac_exam;
//grade point Code
      if($mainTotal>= 0 && $mainTotal<=32){
        $gradePoint = 0;
        $gradeLetter= 'F';
      }elseif($mainTotal>= 33 && $mainTotal<=39){
       $gradePoint = 1;
        $gradeLetter= 'D';
      }elseif($mainTotal>= 40 && $mainTotal<=49){
        $gradePoint = 2;
        $gradeLetter= 'C';
      }elseif($mainTotal>= 50 && $mainTotal<=59){
        $gradePoint = 3;
        $gradeLetter= 'B';
      }elseif($mainTotal>= 60 && $mainTotal<=69){
        $gradePoint = 3.5;
        $gradeLetter= 'A-';
      }elseif($mainTotal>= 70 && $mainTotal<=79){
        $gradePoint = 4;
        $gradeLetter= 'A';
      }else{

        $gradePoint = 5;
        $gradeLetter= 'A+';

      }
      //gradepoint Code

       $Student_roll = MainStudent::where('id',$request->students_id)->value('roll_number');

        $user = new Result();
        $user->sreni_id = $request->class_id;
        $user->department_id= $request->department_id;
        $user->section_id = $request->section_id;
        $user->students_id = $request->students_id;
        $user->exam_id = $request->exam_id;
        $user->subject_id = $request->subject_id;
        $user->written_exam = $request->written_exam;
        $user->mcq_exam = $request->mcq_exam;
        $user->prac_exam = $request->prac_exam;
        $user->roll = $Student_roll;
        $user->main_total = $mainTotal;
        $user->grade_point = $gradePoint;
        $user->grade_letter = $gradeLetter;
        $user->save();

// return redirect()->route('admin.result')->with('success','Created successfully!');


return response()->json(
    [
      'success' => true,
      'message' => 'Success'
    ]
);


}

         //studet_id_check
}else{


  $roll_check = Result::where('sreni_id',$request->class_id)
         ->where('department_id',$request->department_id)
->where('section_id',$request->section_id)
->where('subject_id',$request->subject_id)
->where('exam_id',$request->exam_id)->value('students_id');



if($request->students_id == $roll_check){

    return response()->json(
        [
          'success' => false,
          'message' => 'You Have already Add Result To Number'
        ]
   );

// return redirect()->back()->with('error','You Have already Add Result To Number');

}else{



     $mainTotal = $request->written_exam+$request->mcq_exam+$request->prac_exam;
//grade point Code
      if($mainTotal>= 0 && $mainTotal<=32){
        $gradePoint = 0;
        $gradeLetter= 'F';
      }elseif($mainTotal>= 33 && $mainTotal<=39){
       $gradePoint = 1;
        $gradeLetter= 'D';
      }elseif($mainTotal>= 40 && $mainTotal<=49){
        $gradePoint = 2;
        $gradeLetter= 'C';
      }elseif($mainTotal>= 50 && $mainTotal<=59){
        $gradePoint = 3;
        $gradeLetter= 'B';
      }elseif($mainTotal>= 60 && $mainTotal<=69){
        $gradePoint = 3.5;
        $gradeLetter= 'A-';
      }elseif($mainTotal>= 70 && $mainTotal<=79){
        $gradePoint = 4;
        $gradeLetter= 'A';
      }else{

        $gradePoint = 5;
        $gradeLetter= 'A+';

      }
      //gradepoint Code

 $Student_roll = MainStudent::where('id',$request->students_id)->value('roll_number');
        $user = new Result();
        $user->sreni_id = $request->class_id;
        $user->department_id= $request->department_id;
        $user->section_id = $request->section_id;
        $user->students_id = $request->students_id;
        $user->exam_id = $request->exam_id;
        $user->session_id = $request->session_id;
        $user->subject_id = $request->subject_id;
        $user->written_exam = $request->written_exam;
        $user->mcq_exam = $request->mcq_exam;
        $user->prac_exam = $request->prac_exam;
        $user->roll = $Student_roll;
        $user->main_total = $mainTotal;
        $user->grade_point = $gradePoint;
        $user->grade_letter = $gradeLetter;
        $user->save();

// return redirect()->route('admin.result')->with('success','Created successfully!');

return response()->json(
    [
      'success' => true,
      'message' => 'Success'
    ]
);


}


}




}

public function edit($id){


    $result_details = Result::where('id',$id)->first();

     $class_details = Srani::latest()->get();
         $dp_details = Department::latest()->get();
         $section_details = Section::latest()->get();
         $student_details = MainStudent::latest()->get();
       $subject_details = Subject::latest()->get();
         $exam_details = Exam::latest()->get();

         return view('admin.result.edit',['result_details'=>$result_details,'exam_details'=>$exam_details,'class_details'=>$class_details,'dp_details'=>$dp_details,'section_details'=>$section_details,'student_details'=>$student_details,'subject_details'=>$subject_details]);
}



public function update(Request $request){


        //student_id_check

         if($request->department_id == 0 ){






    $mainTotal = $request->written_exam+$request->mcq_exam+$request->prac_exam;
//grade point Code
      if($mainTotal>= 0 && $mainTotal<=32){
        $gradePoint = 0;
        $gradeLetter= 'F';
      }elseif($mainTotal>= 33 && $mainTotal<=39){
       $gradePoint = 1;
        $gradeLetter= 'D';
      }elseif($mainTotal>= 40 && $mainTotal<=49){
        $gradePoint = 2;
        $gradeLetter= 'C';
      }elseif($mainTotal>= 50 && $mainTotal<=59){
        $gradePoint = 3;
        $gradeLetter= 'B';
      }elseif($mainTotal>= 60 && $mainTotal<=69){
        $gradePoint = 3.5;
        $gradeLetter= 'A-';
      }elseif($mainTotal>= 70 && $mainTotal<=79){
        $gradePoint = 4;
        $gradeLetter= 'A';
      }else{

        $gradePoint = 5;
        $gradeLetter= 'A+';

      }
      //gradepoint Code



        $user =Result::find($request->id);
        $user->sreni_id = $request->class_id;
        $user->department_id= $request->department_id;
        $user->section_id = $request->section_id;
        $user->students_id = $request->students_id;
        $user->exam_id = $request->exam_id;
        $user->session_id = $request->session_id;
        $user->subject_id = $request->subject_id;
        $user->written_exam = $request->written_exam;
        $user->mcq_exam = $request->mcq_exam;
        $user->prac_exam = $request->prac_exam;

        $user->main_total = $mainTotal;
        $user->grade_point = $gradePoint;
        $user->grade_letter = $gradeLetter;
        $user->save();

return redirect()->route('admin.result')->with('success','Updated successfully!');




         //studet_id_check
}else{






     $mainTotal = $request->written_exam+$request->mcq_exam+$request->prac_exam;
//grade point Code
      if($mainTotal>= 0 && $mainTotal<=32){
        $gradePoint = 0;
        $gradeLetter= 'F';
      }elseif($mainTotal>= 33 && $mainTotal<=39){
       $gradePoint = 1;
        $gradeLetter= 'D';
      }elseif($mainTotal>= 40 && $mainTotal<=49){
        $gradePoint = 2;
        $gradeLetter= 'C';
      }elseif($mainTotal>= 50 && $mainTotal<=59){
        $gradePoint = 3;
        $gradeLetter= 'B';
      }elseif($mainTotal>= 60 && $mainTotal<=69){
        $gradePoint = 3.5;
        $gradeLetter= 'A-';
      }elseif($mainTotal>= 70 && $mainTotal<=79){
        $gradePoint = 4;
        $gradeLetter= 'A';
      }else{

        $gradePoint = 5;
        $gradeLetter= 'A+';

      }
      //gradepoint Code


        $user = Result::find($request->id);
        $user->sreni_id = $request->class_id;
        $user->department_id= $request->department_id;
        $user->section_id = $request->section_id;
        $user->students_id = $request->students_id;
        $user->exam_id = $request->exam_id;
        $user->subject_id = $request->subject_id;
        $user->written_exam = $request->written_exam;
        $user->mcq_exam = $request->mcq_exam;
        $user->prac_exam = $request->prac_exam;

        $user->main_total = $mainTotal;
        $user->grade_point = $gradePoint;
        $user->grade_letter = $gradeLetter;
        $user->save();

return redirect()->route('admin.result')->with('success','Updated successfully!');




}


}


public function destroy($id){

    $user = Result::find($id);
   if (!is_null($user)) {
       $user->delete();
   }


   return redirect()->route('admin.result')->with('error','Deleted successfully!');
}


public function result_search(Request $request){






    if($request->department_id == 0 ){



        if($request->subject_id == "all" && $request->students_id == "all"){


             $result_details = Result::where('sreni_id',$request->class_id)

->where('section_id',$request->section_id)

->where('exam_id',$request->exam_id)->get();




        }elseif($request->subject_id == "all"){

             $result_details = Result::where('sreni_id',$request->class_id)

->where('section_id',$request->section_id)
->where('students_id',$request->students_id)
->where('exam_id',$request->exam_id)->get();

        }elseif($request->students_id == "all"){


            $result_details = Result::where('sreni_id',$request->class_id)

->where('section_id',$request->section_id)
->where('subject_id',$request->subject_id)
->where('exam_id',$request->exam_id)->get();


        }else{


             $result_details = Result::where('sreni_id',$request->class_id)
        ->where('students_id',$request->students_id)
->where('section_id',$request->section_id)
->where('subject_id',$request->subject_id)
->where('exam_id',$request->exam_id)->get();


        }




    }else{


   if($request->subject_id == "all" && $request->students_id == "all"){


             $result_details = Result::where('sreni_id',$request->class_id)
        ->where('department_id',$request->department_id)
->where('section_id',$request->section_id)

->where('exam_id',$request->exam_id)->get();




        }elseif($request->subject_id == "all"){

             $result_details = Result::where('sreni_id',$request->class_id)
        ->where('department_id',$request->department_id)
->where('section_id',$request->section_id)
->where('students_id',$request->students_id)
->where('exam_id',$request->exam_id)->get();

        }elseif($request->students_id == "all"){


            $result_details = Result::where('sreni_id',$request->class_id)
        ->where('department_id',$request->department_id)
->where('section_id',$request->section_id)
->where('subject_id',$request->subject_id)
->where('exam_id',$request->exam_id)->get();


        }else{


             $result_details = Result::where('sreni_id',$request->class_id)
             ->where('department_id',$request->department_id)
        ->where('students_id',$request->students_id)
->where('section_id',$request->section_id)
->where('subject_id',$request->subject_id)
->where('exam_id',$request->exam_id)->get();


        }


    }




       $class_details = Srani::latest()->get();
         $dp_details = Department::latest()->get();
         $section_details = Section::latest()->get();
         $student_details = MainStudent::latest()->get();

  $subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();

//new code

$sreni_id = $request->class_id;
$department_id = $request->department_id;
$students_id = $request->students_id;
$section_id =$request->section_id;
$subject_id = $request->subject_id;
$exam_id = $request->exam_id;

//new code
         return view('admin.result.search',[
            'exam_details'=>$exam_details,
            'result_details'=>$result_details,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,
            'student_details'=>$student_details,
            'subject_details'=>$subject_details,

            'sreni_id'=>$sreni_id,
            'department_id'=>$department_id,
            'students_id'=>$students_id,
            'section_id'=>$section_id,
            'subject_id'=>$subject_id,
            'exam_id'=>$exam_id

        ]);




}

}
