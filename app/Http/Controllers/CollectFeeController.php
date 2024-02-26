<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeeAmount;
use App\Models\FeeGroup;
use App\Models\FeeType;
use App\Models\FeeDiscount;
use App\MainStudent;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\Student;
use App\Result;
use App\Exam;
use App\Models\AssignStudentToFeeGroup;
use App\Models\CollectFee;
class CollectFeeController extends Controller
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
        return view('admin.collect_fee.index',[
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


    public function collect_fee_student_searchBy_class(Request $request){


        $class_details = Srani::where('id',$request->class_id)->value('name');
        $dp_details = Department::where('id',$request->department_id)->value('name');
        $section_details = Section::where('id',$request->section_id)->value('name');

        if($request->department_id == 0){


            $student_list=MainStudent::where('class',$class_details)
        ->where('section',$section_details)

        ->get();


        }else{
        $student_list=MainStudent::where('class',$class_details)
        ->where('section',$section_details)
        ->where('department',$dp_details)

        ->get();
        }
        //dd($student_list);

           return view('admin.collect_fee.collect_fee_student_searchBy_class')->with([

            'student_list'=>$student_list



        ]);



    }


    public function collect_fee_student_searchBy_name(Request $request){


        $student_list=MainStudent::where('admission_no','LIKE','%'.$request->student_admission_number.'%')
        ->orWhere('first_name','LIKE','%'.$request->student_admission_number.'%')
        ->orWhere('roll_number','LIKE','%'.$request->student_admission_number.'%')
                                  ->get();



           return view('admin.collect_fee.collect_fee_student_searchBy_name')->with([

            'student_list'=>$student_list



        ]);




    }

    public function collect_fee_list($id){

        $student_list=MainStudent::where('id',$id)->first();
        $class_name = MainStudent::where('id',$id)->value('class');
        $class_id = Srani::where('name',$class_name)->value('id');


        $fee_group_list = AssignStudentToFeeGroup::where('class_id',$class_id)->select('fee_group_id')->get();


        $fee_amount_detail = FeeAmount::whereIn('fee_group',$fee_group_list)->get();

        //dd($fee_amount_detail);
        $fee_discount_details = FeeDiscount::latest()->get();
        return view('admin.collect_fee.collect_fee_list')->with([

            'student_list'=>$student_list,
            'fee_amount_detail'=>$fee_amount_detail,
            'fee_discount_details'=>$fee_discount_details




        ]);

    }


    public function collect_discount(Request $request){


        if($request->discount_type == 'none'){

            $states = 0;

        }else{

            $states = FeeDiscount::where('name',$request->discount_type)->value('amount');
        }



        $data =$states;


        return response()->json(['options'=>$data]);


    }


    public function store(Request $request){


        $fee_amount_detail = FeeAmount::where('id',$request->fee_id)->value('amount');







        $user = new CollectFee();
        $user->student_id = $request->student_id;
        $user->fee_id = $request->fee_id;
        $user->date = $request->date;

        if($request->account_money == $fee_amount_detail){
        $user->account_money = $request->account_money;
        $user->status = 'Paid';
        $user->due = 0;
        }else{
            $user->account_money = $request->account_money;
            $user->status = 'Partial';
            $user->due = $fee_amount_detail-$request->account_money;

        }
        $user->discount_type = $request->discount_type;
        $user->fine_amount = $request->fine_amount;
        $user->discount_amount = $request->discount_amount;
        $user->payment_mode = $request->payment_mode;
        $user->payment_id = $request->student_id.'-'.rand(1,10);
        $user->note = $request->note;


        $user->save();

        return redirect()->back()->with('success','Created successfully!');

    }
}
