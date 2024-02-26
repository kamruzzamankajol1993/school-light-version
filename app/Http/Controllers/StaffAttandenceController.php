<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DB;
use App\Staff;
use App\StaffAttandence;
class StaffAttandenceController extends Controller
{
    public function index(){

        $role_list = DB::table('roles')->where('id','>',1)->get();
        return view('admin.staff_Attandence.index',['role_list'=>$role_list]);

    }


    public function create(){

        $role_list = DB::table('roles')->where('id','>',1)->get();
        return view('admin.staff_Attandence.create',['role_list'=>$role_list]);

    }


    public function staff_search(Request $request){

          $role_base_staff_list = Staff::where('role',$request->role_id)->get();
          return view('admin.staff_Attandence.role_base_staff_list',['role_base_staff_list'=>$role_base_staff_list]);

    }


    public function store(Request $request){


        $all_input_date = $request->all();

        $note_data = array_filter($all_input_date['note']);




        $staff_id = $all_input_date['staff_id'];


        //$empty_check_note = reset($note_data);
//dd($request->holiday);

        if($request->holiday == 'holiday'){


            if($note_data == []){
                foreach($staff_id as $key => $staff_id){
                    $insert_data = new StaffAttandence();
                    $insert_data->year = date('Y');
                    $insert_data->month = date('F');
                    $insert_data->staff_id = $all_input_date['staff_id'][$key];
                    $insert_data->staff_main_id = $all_input_date['staff_main_id'][$key];
                    $insert_data->name = $all_input_date['name'][$key];
                    $insert_data->date =$request->date;
                    $insert_data->role =$all_input_date['role'][$key];
                    $insert_data->attandences ='holiday';
                    $insert_data->save();

                    }
                    }else{
                        foreach($staff_id as $key => $staff_id){
                            $insert_data = new StaffAttandence();
                            $insert_data->year = date('Y');
                            $insert_data->month = date('F');
                    $insert_data->staff_id = $all_input_date['staff_id'][$key];
                    $insert_data->staff_main_id = $all_input_date['staff_main_id'][$key];
                    $insert_data->name = $all_input_date['name'][$key];
                    $insert_data->date =$request->date;
                    $insert_data->role =$all_input_date['role'][$key];
                    $insert_data->attandences ='holiday';
                            $insert_data->note = $all_input_date['note'][$key];
                           $insert_data->save();

                            }

                    }

        }else{



            if($note_data == []){
                foreach($staff_id as $key => $staff_id){
                    $insert_data = new StaffAttandence();
                    $insert_data->year = date('Y');
                    $insert_data->month = date('F');
                    $insert_data->staff_id = $all_input_date['staff_id'][$key];
                    $insert_data->staff_main_id = $all_input_date['staff_main_id'][$key];
                    $insert_data->name = $all_input_date['name'][$key];
                    $insert_data->date =$request->date;
                    $insert_data->role =$all_input_date['role'][$key];
                    $insert_data->attandences =$all_input_date['present_status'][$key];
                    $insert_data->save();

                    }
                    }else{
                        foreach($staff_id as $key => $staff_id){
                            $insert_data = new StaffAttandence();
                            $insert_data->year = date('Y');
                            $insert_data->month = date('F');
                    $insert_data->staff_id = $all_input_date['staff_id'][$key];
                    $insert_data->staff_main_id = $all_input_date['staff_main_id'][$key];
                    $insert_data->name = $all_input_date['name'][$key];
                    $insert_data->date =$request->date;
                    $insert_data->role =$all_input_date['role'][$key];
                    $insert_data->attandences =$all_input_date['present_status'][$key];
                            $insert_data->note = $all_input_date['note'][$key];
                           $insert_data->save();

                            }

                    }


        }









        return redirect()->route('admin.staff_attandance.create')->with('success','Created successfully!');


    }


    public function role_base_search_staff_list(Request $request){



        $role_base_search_staff_list=StaffAttandence::where('role',$request->role_id)

        ->where('date',$request->date)
        ->get();




        $role_id=$request->role_id;
        $date = $request->date;

        return view('admin.staff_Attandence.role_base_search_staff_list',[
            'role_base_search_staff_list'=>$role_base_search_staff_list,
'role_id'=>$role_id,
            'date'=>$date
        ]);



    }


    public function update(Request $request){


        $student_attandence_search=StaffAttandence::where('role',$request->role_id)
        ->where('date',$request->date_old)
        ->delete();

        $all_input_date = $request->all();

        $note_data = array_filter($all_input_date['note']);




        $staff_id = $all_input_date['staff_id'];


        //$empty_check_note = reset($note_data);



        if($note_data == []){
            foreach($staff_id as $key => $staff_id){
                $insert_data = new StaffAttandence();
                $insert_data->year = date('Y');
                $insert_data->month = date('F');
                $insert_data->staff_id = $all_input_date['staff_id'][$key];
                $insert_data->staff_main_id = $all_input_date['staff_main_id'][$key];
                $insert_data->name = $all_input_date['name'][$key];
                $insert_data->date =$request->date;
                $insert_data->role =$all_input_date['role'][$key];
                $insert_data->attandences =$all_input_date['present_status'][$key];
                $insert_data->save();

                }
                }else{
                    foreach($staff_id as $key => $staff_id){
                        $insert_data = new StaffAttandence();
                        $insert_data->year = date('Y');
                        $insert_data->month = date('F');
                $insert_data->staff_id = $all_input_date['staff_id'][$key];
                $insert_data->staff_main_id = $all_input_date['staff_main_id'][$key];
                $insert_data->name = $all_input_date['name'][$key];
                $insert_data->date =$request->date;
                $insert_data->role =$all_input_date['role'][$key];
                $insert_data->attandences =$all_input_date['present_status'][$key];
                        $insert_data->note = $all_input_date['note'][$key];
                       $insert_data->save();

                        }

                }





        return redirect()->route('admin.staff_attandance')->with('info','Updated successfully!');



    }
}
