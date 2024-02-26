<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApplyLeave;
use App\LeaveType;
use App\HolidayData;
use Illuminate\Support\Facades\Auth;
Use App\Models\Admin;
use DB;
use Carbon\Carbon;
class ApplyLeaveController extends Controller
{
    public function index(){


        $leave_type_details = LeaveType::latest()->get();
        $apply_leave_details = ApplyLeave::where('staff_id',Auth::guard('admin')->user()->id)->latest()->get();
        $user_list = Admin::latest()->get();

        return view('admin.apply_leave.index',['user_list'=>$user_list,'leave_type_details'=>$leave_type_details,'apply_leave_details'=>$apply_leave_details]);
    }



    public function apporoved_leave_request(){


        $leave_type_details = LeaveType::latest()->get();
        $apply_leave_details = ApplyLeave::latest()->get();
        $user_list = Admin::latest()->get();
        $role_list = DB::table('roles')->get();
        return view('admin.apply_leave.apporoved_leave_request',[
            'role_list'=>$role_list,
            'user_list'=>$user_list,
            'leave_type_details'=>$leave_type_details,
            'apply_leave_details'=>$apply_leave_details
        ]);
    }






    public function store(Request $request){





        $to = \Carbon\Carbon::parse($request->to_date);
$from = \Carbon\Carbon::parse($request->from_date);

$days = $from->diffInDays($to);


//dd($days);
$date = Carbon::createFromFormat('Y-m-d', $request->from_date);
$date_one = Carbon::createFromFormat('Y-m-d', $request->to_date);


 $from_monthName = $date_one->format('m');
 $to_monthName = $date->format('m');

 if (substr($from_monthName, 0, 1) == '0' ) {

    $final_from_month = substr($from_monthName,-1) ;

}else{
    $final_from_month =  $from_monthName;

}


if (substr($to_monthName, 0, 1) == '0' ) {

    $final_to_month = substr($to_monthName,-1) ;

}else{
    $final_to_month =  $to_monthName;

}


//month wise holiday save


//month wise holiday save


        // Create New User
        $user = new ApplyLeave();

        if(empty($request->staff_id)){
        $user->staff_id = Auth::guard('admin')->user()->id;
        }else{
            $user->staff_id = $request->staff_id ;
        }
        $user->total_days = $request->total_days;
        $user->apply_date = $request->apply_date;
        $user->available_leave = $request->available_leave;
        $user->from_date = $request->from_date;
        $user->to_date = $request->to_date;
        $user->to_month = $final_to_month;
        $user->from_month = $final_from_month;
        $user->status = $request->status;
        $user->note = $request->note;
        $user->reason = $request->reason;
        $user->total_days = $days+1;
        if ($request->hasfile('doc')) {
            $file = $request->file('doc');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->doc =  $filename;
        }
        $user->save();

        if(empty($request->staff_id)){

            return redirect()->route('admin.apply_leave')->with('success','Created successfully!');

            }else{

                return redirect()->route('admin.apporoved_leave_request')->with('success','Created successfully!');
            }


    }


    public function update(Request $request){
        $to = \Carbon\Carbon::parse($request->to_date);
        $from = \Carbon\Carbon::parse($request->from_date);

        $days = $from->diffInDays($to);


//dd($diff_in_months);
        $date = Carbon::createFromFormat('Y-m-d', $request->from_date);
$date_one = Carbon::createFromFormat('Y-m-d', $request->to_date);


 $from_monthName = $date->format('m');
 $to_monthName = $date_one->format('m');

 if (substr($from_monthName, 0, 1) == '0' ) {

    $final_from_month = substr($from_monthName,-1) ;

}else{
    $final_from_month =  $from_monthName;

}


if (substr($to_monthName, 0, 1) == '0' ) {

    $final_to_month = substr($to_monthName,-1) ;

}else{
    $final_to_month =  $to_monthName;

}

//dd($final_to_month);




//dd(substr($to_monthName,-1));

        // Create New User
        $user =ApplyLeave::find($request->id);
        if(empty($request->staff_id)){
            $user->staff_id = Auth::guard('admin')->user()->id;
            }else{
                $user->staff_id = $request->staff_id ;
            }
        $user->total_days = $request->total_days;
        $user->apply_date = $request->apply_date;
        $user->available_leave = $request->available_leave;
        $user->from_date = $request->from_date;
        $user->to_date = $request->to_date;
        $user->to_month = $final_to_month;
        $user->from_month = $final_from_month;
        $user->status = $request->status;
        $user->note = $request->note;
        $user->reason = $request->reason;
        $user->total_days = $days+1;
        if ($request->hasfile('doc')) {
            $file = $request->file('doc');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->doc =  $filename;
        }
        $user->save();


$leave_id = $user->id;

        //month wise holiday save



if($from_monthName == $to_monthName ){

    $diff_value = 0;



}else{

$diff_value = $to->diffInMonths($from)+1;

}


//dd($diff_value);

if($diff_value == 0){
    dd(11);


    $insert_data = new HolidayData();
    if(empty($request->staff_id)){
    $insert_data->staff_id = Auth::guard('admin')->user()->id;
    }else{
        $insert_data->staff_id = $request->staff_id ;
    }
    $insert_data->leave_id = $leave_id;
    $insert_data->month =$final_from_month;
    $insert_data->totalday = $days+1;
    $insert_data->save();



}elseif($diff_value == 1){
    //dd(1);


$from_date_new = \Carbon\Carbon::parse($request->from_date);
$last_day_of_month_from_date =  \Carbon\Carbon::parse(date("Y-m-t", strtotime($from_date_new)));
$total_holiday_first_month =($from_date_new->diffInDays($last_day_of_month_from_date))+1;


$insert_data = new HolidayData();
if(empty($request->staff_id)){
$insert_data->staff_id = Auth::guard('admin')->user()->id;
}else{
    $insert_data->staff_id = $request->staff_id ;
}
$insert_data->leave_id = $leave_id;
$insert_data->month =$final_from_month;
$insert_data->totalday = $total_holiday_first_month;
$insert_data->save();

$to_date_new = \Carbon\Carbon::parse($request->to_date);
$first_day_of_month_to_date = date("Y-m-01", strtotime($to_date_new));
$total_holiday_last_month =($to_date_new->diffInDays($first_day_of_month_to_date))+1;


$insert_data = new HolidayData();
if(empty($request->staff_id)){
$insert_data->staff_id = Auth::guard('admin')->user()->id;
}else{
    $insert_data->staff_id = $request->staff_id ;
}
$insert_data->leave_id = $leave_id;
$insert_data->month =$final_to_month;
$insert_data->totalday = $total_holiday_last_month;
$insert_data->save();

//  dd($total_holiday_last_month);

//  for($i = 0; $i < max_value; $i++){



//  }


}elseif($diff_value == 2){
//dd(2);

    $last_entry_value = $final_from_month +1;

    if($last_entry_value == 12 || $last_entry_value == 11 || $last_entry_value == 10){

                $get_date_all = cal_days_in_month(CAL_GREGORIAN,$last_entry_value, date('Y'));

    }elseif($last_entry_value == 13 ){
        $get_date_all = cal_days_in_month(CAL_GREGORIAN, 01, date('Y'));

    }else{

        $with_zero ='0'.$last_entry_value;

        $get_date_all =cal_days_in_month(CAL_GREGORIAN, $with_zero, date('Y'));


        //cal_days_in_month(CAL_GREGORIAN, 1, 2021);

    }

    //dd($get_date_all);

//dd($diff_value);




// $lopr

    $from_date_new = \Carbon\Carbon::parse($request->from_date);
$last_day_of_month_from_date =  \Carbon\Carbon::parse(date("Y-m-t", strtotime($from_date_new)));
$total_holiday_first_month =($from_date_new->diffInDays($last_day_of_month_from_date))+1;


$insert_data = new HolidayData();
if(empty($request->staff_id)){
$insert_data->staff_id = Auth::guard('admin')->user()->id;
}else{
    $insert_data->staff_id = $request->staff_id ;
}
$insert_data->leave_id = $leave_id;
$insert_data->month =$final_from_month;
$insert_data->totalday = $total_holiday_first_month;
$insert_data->save();

$to_date_new = \Carbon\Carbon::parse($request->to_date);
$first_day_of_month_to_date = date("Y-m-01", strtotime($to_date_new));
$total_holiday_last_month =($to_date_new->diffInDays($first_day_of_month_to_date))+1;


$insert_data = new HolidayData();
if(empty($request->staff_id)){
$insert_data->staff_id = Auth::guard('admin')->user()->id;
}else{
    $insert_data->staff_id = $request->staff_id ;
}
$insert_data->leave_id = $leave_id;
$insert_data->month =$final_to_month;
$insert_data->totalday = $total_holiday_last_month;
$insert_data->save();

//  dd($total_holiday_last_month);

//  for($i = 0; $i < max_value; $i++){



//  }



$insert_data = new HolidayData();
if(empty($request->staff_id)){
$insert_data->staff_id = Auth::guard('admin')->user()->id;
}else{
    $insert_data->staff_id = $request->staff_id ;
}
$insert_data->leave_id = $leave_id;
$insert_data->month =$last_entry_value;
$insert_data->totalday = $get_date_all;
$insert_data->save();






}
//month wise holiday save

        if(empty($request->staff_id)){

        return redirect()->route('admin.apply_leave')->with('success','Updated successfully!');

        }else{

            return redirect()->route('admin.apporoved_leave_request')->with('success','Updated successfully!');
        }


    }


    public function destroy($id){

         $user = ApplyLeave::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.apply_leave')->with('error','Deleted successfully!');
    }



    public function apporoved_leave_destroy($id){

        $user = ApplyLeave::find($id);
       if (!is_null($user)) {
           $user->delete();
       }


       return redirect()->route('admin.apporoved_leave_request')->with('error','Deleted successfully!');
   }


    public function apply_leave_doc_download($id){
        $documnent_info = ApplyLeave::where('id',$id)->value('doc');


        $filePath = public_path('uploads'.'/'.$documnent_info);

        //dd($filePath);
            // $headers = ['Content-Type: application/pdf'];
            // $fileName = time().'.pdf';

            return response()->download($filePath, $documnent_info);

    }
}
