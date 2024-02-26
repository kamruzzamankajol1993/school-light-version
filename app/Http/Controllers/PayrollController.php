<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use App\Staff;
use App\Payroll;
use App\Earning;
use App\Deduction;
use App\StaffAttandence;
use App\ApplyLeave;
Use App\Models\Admin;
Use App\Models\Transection;
use Carbon\Carbon;
class PayrollController extends Controller
{
    public function index(){

        $role_list = DB::table('roles')->where('id','>',1)->get();
        return view('admin.staff_payroll.index',['role_list'=>$role_list]);

    }


    public function staff_search_for_payroll($staff_id ,$year, $month){


        $staff_id = $staff_id;

        $year = $year;
        $month = $month;

         $staff_list = Staff::where('id','=',$staff_id)->first();


         if($month == 1){
            $previous_month_first =  12;

            $previous_month_second =  $previous_month_first -1;


         }elseif($month == 2){


            $previous_month_first =  1;

            $previous_month_second =  12;


         }else{

            $previous_month_first =  $month -1;

             $previous_month_second =  $previous_month_first -1;


         }


         //dd($previous_month_second);



             //for current month condition

             if($month == 1){


                $current_month = 'January';

             }elseif($month == 2){

                $current_month = 'February';
             }elseif($month == 3){


                $current_month = 'March';

            }
            elseif($month == 4){

                $current_month = 'April';
            }
            elseif($month == 5){

                $current_month = 'May';
            }
            elseif($month == 6){

                $current_month = 'June';
            }
            elseif($month == 7){

                $current_month = 'July';
            }
            elseif($month == 8){
                $current_month = 'August';

            }
            elseif($month == 9){

                $current_month = 'September';
            }elseif($month == 10){

                $current_month = 'October';
            }elseif($month == 11){

                $current_month = 'November';
            }elseif($month == 12){
                $current_month = 'December';

            }







             //end for current month condition



              //for previous_month_first condition

              if($previous_month_first == 1){


                $previous_month_first_annual = 'January';

             }elseif($previous_month_first == 2){

                $previous_month_first_annual = 'February';
             }elseif($previous_month_first == 3){


                $previous_month_first_annual = 'March';

            }
            elseif($previous_month_first == 4){

                $previous_month_first_annual = 'April';
            }
            elseif($previous_month_first == 5){

                $previous_month_first_annual = 'May';
            }
            elseif($previous_month_first == 6){

                $previous_month_first_annual = 'June';
            }
            elseif($previous_month_first == 7){

                $previous_month_first_annual = 'July';
            }
            elseif($previous_month_first == 8){
                $previous_month_first_annual = 'August';

            }
            elseif($previous_month_first == 9){

                $previous_month_first_annual = 'September';
            }elseif($previous_month_first == 10){

                $previous_month_first_annual = 'October';
            }elseif($previous_month_first == 11){

                $previous_month_first_annual = 'November';
            }elseif($previous_month_first == 12){
                $previous_month_first_annual = 'December';

            }







             //end for previous_month_first condition



               //for previous_month_second condition

               if($previous_month_second == 1){


                $previous_month_second_annual = 'January';

             }elseif($previous_month_second == 2){

                $previous_month_second_annual = 'February';
             }elseif($previous_month_second == 3){


                $previous_month_second_annual = 'March';

            }
            elseif($previous_month_second == 4){

                $previous_month_second_annual = 'April';
            }
            elseif($previous_month_second == 5){

                $previous_month_second_annual = 'May';
            }
            elseif($previous_month_second == 6){

                $previous_month_second_annual = 'June';
            }
            elseif($previous_month_second == 7){

                $previous_month_second_annual = 'July';
            }
            elseif($previous_month_second == 8){
                $previous_month_second_annual = 'August';

            }
            elseif($previous_month_second == 9){

                $previous_month_second_annual = 'September';
            }elseif($previous_month_second == 10){

                $previous_month_second_annual = 'October';
            }elseif($previous_month_second == 11){

                $previous_month_second_annual = 'November';
            }elseif($previous_month_second == 12){
                $previous_month_second_annual = 'December';

            }







             //end for previous_month_second condition

//dd($month);





 $catch_data_from_admin_id = Admin::where('staff_main_id',$staff_id)->value('id');
 $new_main_id = Admin::where('staff_main_id',$staff_id)->value('staff_main_id');

 $basic_salary = Staff::where('id',$new_main_id)->value('basic_salary');
//dd($catch_data_from_admin_id);
//current_month_data
$present_list = StaffAttandence::where('attandences','Present')
->where('staff_main_id',$new_main_id)
->where('month',$current_month)
->where('year',$year)
->count();


$late_list = StaffAttandence::where('attandences','Late')
->where('staff_main_id',$new_main_id)
->where('month',$current_month)
->where('year',$year)
->count();
$absent_list = StaffAttandence::where('attandences','Absent')
->where('staff_main_id',$new_main_id)
->where('month',$current_month)
->where('year',$year)
->count();

$half_day_list = StaffAttandence::where('attandences','Half Day')
->where('staff_main_id',$new_main_id)
->where('month',$current_month)
->where('year',$year)
->count();


$holiday_list = StaffAttandence::where('attandences','holiday')
->where('staff_main_id',$new_main_id)
->where('month',$current_month)
->where('year',$year)
->count();


//dd($holiday_list);

//current_month_date


//previous_month_first_data
$previous_month_first_present_list = StaffAttandence::where('attandences','Present')
->where('staff_main_id',$new_main_id)
->where('month',$previous_month_first_annual)
->where('year',$year)
->count();


$previous_month_first_late_list = StaffAttandence::where('attandences','Late')
->where('staff_main_id',$new_main_id)
->where('month',$previous_month_first_annual)
->where('year',$year)
->count();
$previous_month_first_absent_list = StaffAttandence::where('attandences','Absent')
->where('staff_main_id',$new_main_id)
->where('month',$previous_month_first_annual)
->where('year',$year)
->count();

$previous_month_first_half_day_list = StaffAttandence::where('attandences','Half Day')
->where('staff_main_id',$new_main_id)
->where('month',$previous_month_first_annual)
->where('year',$year)
->count();


$previous_month_first_holiday_list = StaffAttandence::where('attandences','holiday')
->where('staff_main_id',$new_main_id)
->where('month',$previous_month_first_annual)
->where('year',$year)
->count();




//previous_month_first_data


//previous_month_second_data
$previous_month_second_present_list = StaffAttandence::where('attandences','Present')
->where('staff_main_id',$new_main_id)
->where('month',$previous_month_second_annual)
->where('year',$year)
->count();


$previous_month_second_late_list = StaffAttandence::where('attandences','Late')
->where('staff_main_id',$new_main_id)
->where('month',$previous_month_second_annual)
->where('year',$year)
->count();
$previous_month_second_absent_list = StaffAttandence::where('attandences','Absent')
->where('staff_main_id',$new_main_id)
->where('month',$previous_month_second_annual)
->where('year',$year)
->count();

$previous_month_second_half_day_list = StaffAttandence::where('attandences','Half Day')
->where('staff_main_id',$new_main_id)
->where('month',$previous_month_second_annual)
->where('year',$year)
->count();


$previous_month_second_holiday_list = StaffAttandence::where('attandences','holiday')
->where('staff_main_id',$new_main_id)
->where('month',$previous_month_second_annual)
->where('year',$year)
->count();




//previous_month_second_data



 $last_date_of_leave = ApplyLeave::where('staff_id',$catch_data_from_admin_id)
                                   ->where('to_month',$month)
                                   ->value('to_month');

 $from_date_of_leave = ApplyLeave::where('staff_id',$catch_data_from_admin_id)
                                   ->where('from_month',$month)
                                   ->value('from_month');






        // if($from_date_of_leave == $last_date_of_leave){

             $current_vacation_day = ApplyLeave::where('staff_id',$catch_data_from_admin_id)
             ->where('staff_id',$catch_data_from_admin_id)
             ->where('to_month',$month)
             ->sum('total_days');


             $previous_first_vacation_day = ApplyLeave::where('staff_id',$catch_data_from_admin_id)
             ->where('staff_id',$catch_data_from_admin_id)
             ->where('to_month',$previous_month_first)
             ->sum('total_days');


             $previous_second_vacation_day = ApplyLeave::where('staff_id',$catch_data_from_admin_id)
             ->where('staff_id',$catch_data_from_admin_id)
             ->where('to_month',$previous_month_second)
             ->sum('total_days');

        // }else{

        //     //check for current month




        //     dd(12);

        //     //check for current month

        // }



//dd($from_date_of_leave);


        return view('admin.staff_payroll.serach_result_page',[
            'basic_salary'=>$basic_salary,
            'current_month'=>$current_month,
            'previous_month_first_annual'=>$previous_month_first_annual,
            'previous_month_second_annual'=>$previous_month_second_annual,
            'staff_list'=>$staff_list,
            'staff_id'=>$staff_id,
            'year'=>$year,
            'month'=>$month,
            'present_list'=>$present_list,
            'late_list'=>$late_list,
            'absent_list'=>$absent_list,
            'half_day_list'=>$half_day_list,
            'holiday_list'=>$holiday_list,
            'current_vacation_day'=>$current_vacation_day,
            'previous_month_second_present_list'=>$previous_month_second_present_list,
            'previous_month_second_late_list'=>$previous_month_second_late_list,
            'previous_month_second_absent_list'=>$previous_month_second_absent_list,
            'previous_month_second_half_day_list'=>$previous_month_second_half_day_list,
            'previous_month_second_holiday_list'=>$previous_month_second_holiday_list,
            'previous_second_vacation_day'=>$previous_second_vacation_day,
            'previous_month_first_present_list'=>$previous_month_first_present_list,
            'previous_month_first_late_list'=>$previous_month_first_late_list,
            'previous_month_first_absent_list'=>$previous_month_first_absent_list,
            'previous_month_first_half_day_list'=>$previous_month_first_half_day_list,
            'previous_month_first_holiday_list'=>$previous_month_first_holiday_list,
            'previous_first_vacation_day'=>$previous_first_vacation_day,
            'new_main_id'=>$new_main_id,
        ]);


    }


    public function staff_searchlist_for_payroll(Request $request){


        $role_name = $request->role_id;
        $year = $request->year;
        $month = $request->month;

        $staff_list = Staff::where('role','=',$role_name)->get();
        $payroll_list = Payroll::latest()->get();
        return view('admin.staff_payroll.staff_searchlist_for_payroll',[
'payroll_list'=>$payroll_list,
            'staff_list'=>$staff_list,
            'role_name'=>$role_name,
            'year'=>$year,
            'month'=>$month
        ]);

    }



    public function store(Request $request){

        $staff_id_main =  $request->staff_id;;
//dd($staff_id_main);
        $array_data = $request->all();

        $earning_type = $array_data['earning_type'];
        $deduction_type = $array_data['deduction_type'];


        foreach ($earning_type as $key => $earning_type) {

            $earning_data = new Earning();
            $earning_data->staff_id=$request->staff_id;
            $earning_data->type=$array_data['earning_type'][$key];
            $earning_data->money=$array_data['earning_amount'][$key];
            $earning_data->save();
          }

          foreach ($deduction_type as $key => $deduction_type) {

            $deduction_data = new Deduction();
            $deduction_data->staff_id=$request->staff_id;
            $deduction_data->type=$array_data['deduction_type'][$key];
            $deduction_data->money=$array_data['deduction_amount'][$key];
            $deduction_data->save();
          }



             $paroll_data = new Payroll();
             $paroll_data->staff_id =$staff_id_main;
             $paroll_data->year = date('Y');
             $paroll_data->month = date('F');
             $paroll_data->digit_month = date('m');
             $paroll_data->basic_salary = $request->final_basic;
             $paroll_data->total_earning = $request->final_earning;
             $paroll_data->total_deduction = $request->final_deduction;
             $paroll_data->gross_salary = $request->gross_salary;
             $paroll_data->tax = $request->tax_value;
             $paroll_data->netsalary = $request->net_salary;
             $paroll_data->save();

            //  DB::table('staff')
            //  ->where('id', $request->staff_id)
            //  ->update([

            //      'status' => 0,

            //  ]);

      return redirect()->route('admin.staff_payroll')->with('success','Created successfully!');


    }



    public function staff_payroll_trasection(Request $request){

        $paroll_data = new Transection();
        $paroll_data->staff_name =$request->id;
        $paroll_data->payment_amount = $request->payment_amount;
        $paroll_data->month_year = $request->month_year;
        $paroll_data->payment_mode = $request->payment_mode;
        $paroll_data->payment_date = $request->payment_date;
        $paroll_data->text_note = $request->text_note;
        $paroll_data->save();

        DB::table('payrolls')
        ->where('staff_id',$request->id)
        ->update(['status' => 'Paid']);

        return redirect()->route('admin.staff_payroll')->with('success','Paid successfully!');

    }
}
