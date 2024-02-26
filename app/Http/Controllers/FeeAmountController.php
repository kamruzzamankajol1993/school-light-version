<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeeAmount;
use App\Models\FeeGroup;
use App\Models\FeeType;
use App\MainStudent;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\Student;
use App\Result;
use App\Exam;
use App\Models\AssignStudentToFeeGroup;
class FeeAmountController extends Controller
{
    public function index(){


        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();

        $result_details = Result::latest()->get();
 $subject_details = Subject::latest()->get();
$exam_details = Exam::latest()->get();


        $fee_amount_details = FeeAmount::select('fee_group')->distinct()->latest()->get();
        $fee_group_details = FeeGroup::latest()->get();
        $fee_type_details = FeeType::latest()->get();
        $student_details = MainStudent::latest()->get();
        return view('admin.fee_amount.index',[
            'fee_amount_details'=>$fee_amount_details,
            'fee_group_details'=>$fee_group_details,
            'fee_type_details'=>$fee_type_details,
            'student_details'=>$student_details,
            'exam_details'=>$exam_details,
            'result_details'=>$result_details,
            'class_details'=>$class_details,'
            dp_details'=>$dp_details,
            'section_details'=>$section_details,
            'student_details'=>$student_details,
            'subject_details'=>$subject_details
        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'fee_group' => 'required|max:350',

        ]);

        // Create New User
        $user = new FeeAmount();
        $user->fee_group = $request->fee_group;
        $user->fee_type = $request->fee_type;
        $user->due_date = $request->due_date;
        $user->amount = $request->amount;
        $user->fine_type = $request->fine_type;
        $user->percen = $request->percen;
        $user->fine_amount = $request->fine_amount;
        $user->save();

        return redirect()->route('admin.fee_amount')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =FeeAmount::find($request->id);
        $user->fee_group = $request->fee_group;
        $user->fee_type = $request->fee_type;
        $user->due_date = $request->due_date;
        $user->amount = $request->amount;
        $user->fine_type = $request->fine_type;
        $user->percen = $request->percen;
        $user->fine_amount = $request->fine_amount;
        $user->save();

        return redirect()->route('admin.fee_amount')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = FeeAmount::where('fee_group',$id)->delete();



        return redirect()->route('admin.fee_amount')->with('error','Deleted successfully!');
    }

    public function fee_amount_single($id){


        $user = FeeAmount::where('id',$id)->delete();



        return redirect()->route('admin.fee_amount')->with('error','Deleted successfully!');


    }

    public function assign_student_to_fee_group(Request $request){




        $user = new AssignStudentToFeeGroup();
        $user->fee_group_id = $request->fee_group_id;
        $user->department_id= $request->department_id;
        $user->class_id = $request->class_id;
        $user->save();

        return redirect()->route('admin.fee_amount')->with('success','Created successfully!');


    }

    
}
