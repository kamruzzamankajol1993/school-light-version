<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomeField;
use Illuminate\Support\Str;
class CustomeFieldController extends Controller
{
    public Function index(){



        $custome_filed_list = CustomeField::orderBy('field_order','asc')->get();

        return view('admin.custome_field.index',['custome_filed_list'=>$custome_filed_list]);



    }

    public function store(Request $request){


        $main_str = Str::slug($request->field_name);


        $str = str_replace('-', '_', $main_str);


         // Create New User
         $user = new CustomeField();
         $user->belongs_to = $request->belongs_to;
         $user->field_type= $request->field_type;
         $user->field_value= $request->field_value;
         $user->field_name	 = $request->field_name	;
         $user->field_group	 = $request->field_group;
         $user->database_colomn_name = $str;
         $user->validation = $request->validation;
         $user->visibility = $request->visibility;
         $user->save();

         return redirect()->route('admin.custome_field')->with('success','Created successfully!');
    }


    public function update(Request $request){

        $main_str = Str::slug($request->field_name);


        $str = str_replace('-', '_', $main_str);
        // Create New User
        $user = CustomeField::find($request->id);
        $user->belongs_to = $request->belongs_to;
        $user->field_type= $request->field_type;
        $user->field_value= $request->field_value;
        $user->field_name	 = $request->field_name	;
        $user->field_group	 = $request->field_group;
        $user->database_colomn_name = $str;
        $user->validation = $request->validation;
        $user->visibility = $request->visibility;
        $user->save();

        return redirect()->route('admin.custome_field')->with('info','Updated successfully!');
   }


   public function destroy($id){

    $user = CustomeField::find($id);
   if (!is_null($user)) {
       $user->delete();
   }


   return redirect()->route('admin.custome_field')->with('error','Deleted successfully!');
}


public function system_field_index(){


    $student_field_list = CustomeField::where('belongs_to',1)->get();
    $staff_field_list = CustomeField::where('belongs_to',0)->get();

    return view('admin.custome_field.system_field_index',['student_field_list'=>$student_field_list,'staff_field_list'=>$staff_field_list]);


}

public function system_field_search_category_wise(Request $request){


          $array_data = $request->all();


           $data_id = $array_data['id'];
//dd($array_data['visibility']);

           foreach ($data_id as $key => $data_id) {

                 $table_list_data = CustomeField::find($array_data['id'][$key]);

                 if(empty($array_data['visibility'][$key])){
                    $table_list_data->visibility	=0;
                 }else{
                    $table_list_data->visibility	=$array_data['visibility'][$key];
                 }


                 if(empty($array_data['validation'][$key])){
                    $table_list_data->validation	=0;
                 }else{
                    $table_list_data->validation	=$array_data['validation'][$key];
                 }

                //  $table_list_data->visibility	=$array_data['visibility'][$key] == 1 ? 1 : 0;
                 $table_list_data->save();


           }


           return redirect()->back()->with('success','Updated successfully!');


}

public function studentTable_database_field(){


    $student_field_list = CustomeField::where('belongs_to',1)->get();
    $staff_field_list = CustomeField::where('belongs_to',0)->get();

    return view('admin.custome_field.studentTable_database_field',['student_field_list'=>$student_field_list,'staff_field_list'=>$staff_field_list]);





}


public function studentTable_database_field_update(Request $request){


    $array_data = $request->all();


    $data_id_new = $array_data['tb_data'];

    $counts_data = array_count_values($data_id_new);


    $final_result = $counts_data[1];

    //dd($final_result);

    if($final_result > 10){




        return redirect()->back()->with('error','You Have Selected More Than 10 Coloumn');


    }else{


        $data_id = $array_data['id'];
//dd($array_data['visibility']);

    foreach ($data_id as $key => $data_id) {

        $table_list_data = CustomeField::find($array_data['id'][$key]);
        $table_list_data->tb_data	=$array_data['tb_data'][$key];
        $table_list_data->save();

    }

    return redirect()->back()->with('success','Updated successfully!');
    }


//dd($counts[1]);






}


public function drag_drop_custome_field(){



    $custome_filed_list = CustomeField::orderBy('field_order','asc')->where('belongs_to',1)->get();

    return view('admin.custome_field.drag_drop_custome_field',['custome_filed_list'=>$custome_filed_list]);



}


public function drag_drop_custome_field_staff(){



    $custome_filed_list = CustomeField::orderBy('field_order','asc')->where('belongs_to',0)->get();

    return view('admin.custome_field.drag_drop_custome_field_staff',['custome_filed_list'=>$custome_filed_list]);



}


public function drag_drop_custome_field_update(Request $request)
{


    if($request->has('ids')){
        $arr = explode(',',$request->input('ids'));

        foreach($arr as $sortOrder => $id){


            CustomeField::where('id', $id)->where('belongs_to',1)
       ->update([
           'field_order' => $sortOrder
        ]);




        }
        return ['success'=>true,'message'=>'Updated'];
    }

}


public function drag_drop_custome_field_update_staff(Request $request)
{


    if($request->has('ids')){
        $arr = explode(',',$request->input('ids'));

        foreach($arr as $sortOrder => $id){


            CustomeField::where('id', $id)->where('belongs_to',0)
       ->update([
           'field_order' => $sortOrder
        ]);




        }
        return ['success'=>true,'message'=>'Updated'];
    }

}
}
