<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Staff;
use App\Department;
use App\Section;
use App\Subject;
use App\Student;
use App\Result;
use App\InstituteInformation;
use App\Exam;
use App\CustomeField;
use App\Teststudent;
use Image;
use App\StudentCategory;
use App\MainStudent;
use App\StudentHouse;
use App\Vehicle;
use App\HostelInfo;
use App\Sibling;
use App\Document;
use App\HostelRoom;
use App\DisableReason;
use DB;
use App\HrDepartment;
use App\Designation;
use Illuminate\Support\Facades\Auth;
Use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\ApplyLeave;
class StaffController extends Controller
{

    public function index(){
    $selectTable_value_name = CustomeField::where('belongs_to',0)->where('tb_data',1)->get();



        //colomn Field Name

$convert_name_title = $selectTable_value_name->implode("field_name", " ");

$count_vlue = count($selectTable_value_name);
$separated_data_title = explode(" ", $convert_name_title);

//dd($separated_data_title);
if(array_key_exists(0, $separated_data_title)){

    $first_value_title = $separated_data_title[0];
  }else{

      $first_value_title = '';
  }

if(array_key_exists(1, $separated_data_title)){

  $second_value_title = $separated_data_title[1];
}else{

    $second_value_title = '';
}




if(array_key_exists(2, $separated_data_title)){

    $third_value_title = $separated_data_title[2];
  }else{

      $third_value_title = '';
  }



  if(array_key_exists(3, $separated_data_title)){

    $fourth_value_title = $separated_data_title[3];
  }else{

      $fourth_value_title = '';
  }




  if(array_key_exists(4, $separated_data_title)){

    $fifth_value_title = $separated_data_title[4];
  }else{

      $fifth_value_title = '';
  }



  if(array_key_exists(5, $separated_data_title)){

    $sixth_value_title = $separated_data_title[5];
  }else{

      $sixth_value_title = '';
  }



  if(array_key_exists(6, $separated_data_title)){

    $seventh_value_title = $separated_data_title[6];
  }else{

      $seventh_value_title = '';
  }



  if(array_key_exists(7, $separated_data_title)){

    $eight_value_title = $separated_data_title[7];
  }else{

      $eight_value_title = '';
  }


  if(array_key_exists(8, $separated_data_title)){

    $ninth_value_title = $separated_data_title[8];
  }else{

      $ninth_value_title = '';
  }


  if(array_key_exists(9, $separated_data_title)){

    $tenth_value_title = $separated_data_title[9];
  }else{

      $tenth_value_title = '';
  }


//colomn Field Name

//database Field Name

$convert_name = $selectTable_value_name->implode("database_colomn_name", " ");

$count_vlue = count($selectTable_value_name);
$separated_data = explode(" ", $convert_name);


if(array_key_exists(0, $separated_data)){

    $first_value = $separated_data[0];
  }else{

      $first_value = '';
  }

if(array_key_exists(1, $separated_data)){

  $second_value = $separated_data[1];
}else{

    $second_value = '';
}




if(array_key_exists(2, $separated_data)){

    $third_value = $separated_data[2];
  }else{

      $third_value = '';
  }



  if(array_key_exists(3, $separated_data)){

    $fourth_value = $separated_data[3];
  }else{

      $fourth_value = '';
  }




  if(array_key_exists(4, $separated_data)){

    $fifth_value = $separated_data[4];
  }else{

      $fifth_value = '';
  }



  if(array_key_exists(5, $separated_data)){

    $sixth_value = $separated_data[5];
  }else{

      $sixth_value = '';
  }



  if(array_key_exists(6, $separated_data)){

    $seventh_value = $separated_data[6];
  }else{

      $seventh_value = '';
  }



  if(array_key_exists(7, $separated_data)){

    $eight_value = $separated_data[7];
  }else{

      $eight_value = '';
  }


  if(array_key_exists(8, $separated_data)){

    $ninth_value = $separated_data[8];
  }else{

      $ninth_value = '';
  }


  if(array_key_exists(9, $separated_data)){

    $tenth_value = $separated_data[9];
  }else{

      $tenth_value = '';
  }


//database Field Name
//dd($second_value_title); // piece1


if($count_vlue == 1){

    $test_student = Staff::where('status',1)->select('id',$first_value)->get();

}elseif($count_vlue == 2){
    $test_student = Staff::where('status',1)->select('id',$first_value,$second_value)->get();

}elseif($count_vlue == 3){

    $test_student = Staff::where('status',1)->select('id',$first_value,$second_value,$third_value)->get();
}elseif($count_vlue == 4){

    $test_student = Staff::where('status',1)->select('id',$first_value,$second_value,$third_value,$fourth_value)->get();
}elseif($count_vlue == 5){

    $test_student = Staff::where('status',1)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value)->get();
}elseif($count_vlue == 6){

    $test_student = Staff::where('status',1)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value)->get();
}elseif($count_vlue == 7){

    $test_student = Staff::where('status',1)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value)->get();
}elseif($count_vlue == 8){

    $test_student = Staff::where('status',1)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value,$eight_value)->get();
}elseif($count_vlue == 9){

    $test_student = Staff::where('status',1)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value,$eight_value,$ninth_value)->get();
}elseif($count_vlue == 10){

    $test_student = Staff::where('status',1)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value,$eight_value,$ninth_value,$tenth_value)->get();
}




//$test_student = Teststudent::all();


         $class_details = Srani::latest()->get();
         $dp_details = Department::latest()->get();
         $section_details = Section::latest()->get();
         $student_details = Student::latest()->get();






        return view('admin.staff.index',[
            'count_vlue'=>$count_vlue,
            'first_value_title'=>$first_value_title,
            'second_value_title'=>$second_value_title,
            'third_value_title'=>$third_value_title,
            'fourth_value_title'=>$fourth_value_title,
            'fifth_value_title'=>$fifth_value_title,
            'sixth_value_title'=>$sixth_value_title,
            'seventh_value_title'=>$seventh_value_title,
            'eight_value_title'=>$eight_value_title,
            'ninth_value_title'=>$ninth_value_title,
            'test_student'=>$test_student,
            'tenth_value_title'=>$tenth_value_title,
            'first_value'=>$first_value,
            'second_value'=>$second_value,
            'third_value'=>$third_value,
            'fourth_value'=>$fourth_value,
            'fifth_value'=>$fifth_value,
            'sixth_value'=>$sixth_value,
            'seventh_value'=>$seventh_value,
            'eight_value'=>$eight_value,
            'ninth_value'=>$ninth_value,
            'third_value'=>$third_value,
            'tenth_value'=>$tenth_value,
            'selectTable_value_name'=>$selectTable_value_name,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,
            'student_details'=>$student_details
        ]);
    }


    public function dis_able_staff(){

        $selectTable_value_name = CustomeField::where('belongs_to',0)->where('tb_data',1)->get();



        //colomn Field Name

$convert_name_title = $selectTable_value_name->implode("field_name", " ");

$count_vlue = count($selectTable_value_name);
$separated_data_title = explode(" ", $convert_name_title);

//dd($separated_data_title);
if(array_key_exists(0, $separated_data_title)){

    $first_value_title = $separated_data_title[0];
  }else{

      $first_value_title = '';
  }

if(array_key_exists(1, $separated_data_title)){

  $second_value_title = $separated_data_title[1];
}else{

    $second_value_title = '';
}




if(array_key_exists(2, $separated_data_title)){

    $third_value_title = $separated_data_title[2];
  }else{

      $third_value_title = '';
  }



  if(array_key_exists(3, $separated_data_title)){

    $fourth_value_title = $separated_data_title[3];
  }else{

      $fourth_value_title = '';
  }




  if(array_key_exists(4, $separated_data_title)){

    $fifth_value_title = $separated_data_title[4];
  }else{

      $fifth_value_title = '';
  }



  if(array_key_exists(5, $separated_data_title)){

    $sixth_value_title = $separated_data_title[5];
  }else{

      $sixth_value_title = '';
  }



  if(array_key_exists(6, $separated_data_title)){

    $seventh_value_title = $separated_data_title[6];
  }else{

      $seventh_value_title = '';
  }



  if(array_key_exists(7, $separated_data_title)){

    $eight_value_title = $separated_data_title[7];
  }else{

      $eight_value_title = '';
  }


  if(array_key_exists(8, $separated_data_title)){

    $ninth_value_title = $separated_data_title[8];
  }else{

      $ninth_value_title = '';
  }


  if(array_key_exists(9, $separated_data_title)){

    $tenth_value_title = $separated_data_title[9];
  }else{

      $tenth_value_title = '';
  }


//colomn Field Name

//database Field Name

$convert_name = $selectTable_value_name->implode("database_colomn_name", " ");

$count_vlue = count($selectTable_value_name);
$separated_data = explode(" ", $convert_name);


if(array_key_exists(0, $separated_data)){

    $first_value = $separated_data[0];
  }else{

      $first_value = '';
  }

if(array_key_exists(1, $separated_data)){

  $second_value = $separated_data[1];
}else{

    $second_value = '';
}




if(array_key_exists(2, $separated_data)){

    $third_value = $separated_data[2];
  }else{

      $third_value = '';
  }



  if(array_key_exists(3, $separated_data)){

    $fourth_value = $separated_data[3];
  }else{

      $fourth_value = '';
  }




  if(array_key_exists(4, $separated_data)){

    $fifth_value = $separated_data[4];
  }else{

      $fifth_value = '';
  }



  if(array_key_exists(5, $separated_data)){

    $sixth_value = $separated_data[5];
  }else{

      $sixth_value = '';
  }



  if(array_key_exists(6, $separated_data)){

    $seventh_value = $separated_data[6];
  }else{

      $seventh_value = '';
  }



  if(array_key_exists(7, $separated_data)){

    $eight_value = $separated_data[7];
  }else{

      $eight_value = '';
  }


  if(array_key_exists(8, $separated_data)){

    $ninth_value = $separated_data[8];
  }else{

      $ninth_value = '';
  }


  if(array_key_exists(9, $separated_data)){

    $tenth_value = $separated_data[9];
  }else{

      $tenth_value = '';
  }


//database Field Name
//dd($second_value_title); // piece1


if($count_vlue == 1){

    $test_student = Staff::where('status',0)->select('id',$first_value)->get();

}elseif($count_vlue == 2){
    $test_student = Staff::where('status',0)->select('id',$first_value,$second_value)->get();

}elseif($count_vlue == 3){

    $test_student = Staff::where('status',0)->select('id',$first_value,$second_value,$third_value)->get();
}elseif($count_vlue == 4){

    $test_student = Staff::where('status',0)->select('id',$first_value,$second_value,$third_value,$fourth_value)->get();
}elseif($count_vlue == 5){

    $test_student = Staff::where('status',0)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value)->get();
}elseif($count_vlue == 6){

    $test_student = Staff::where('status',0)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value)->get();
}elseif($count_vlue == 7){

    $test_student = Staff::where('status',0)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value)->get();
}elseif($count_vlue == 8){

    $test_student = Staff::where('status',0)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value,$eight_value)->get();
}elseif($count_vlue == 9){

    $test_student = Staff::where('status',0)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value,$eight_value,$ninth_value)->get();
}elseif($count_vlue == 10){

    $test_student = Staff::where('status',0)->select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value,$eight_value,$ninth_value,$tenth_value)->get();
}




//$test_student = Teststudent::all();


         $class_details = Srani::latest()->get();
         $dp_details = Department::latest()->get();
         $section_details = Section::latest()->get();
         $student_details = Student::latest()->get();






        return view('admin.staff.disable_list',[
            'count_vlue'=>$count_vlue,
            'first_value_title'=>$first_value_title,
            'second_value_title'=>$second_value_title,
            'third_value_title'=>$third_value_title,
            'fourth_value_title'=>$fourth_value_title,
            'fifth_value_title'=>$fifth_value_title,
            'sixth_value_title'=>$sixth_value_title,
            'seventh_value_title'=>$seventh_value_title,
            'eight_value_title'=>$eight_value_title,
            'ninth_value_title'=>$ninth_value_title,
            'test_student'=>$test_student,
            'tenth_value_title'=>$tenth_value_title,
            'first_value'=>$first_value,
            'second_value'=>$second_value,
            'third_value'=>$third_value,
            'fourth_value'=>$fourth_value,
            'fifth_value'=>$fifth_value,
            'sixth_value'=>$sixth_value,
            'seventh_value'=>$seventh_value,
            'eight_value'=>$eight_value,
            'ninth_value'=>$ninth_value,
            'third_value'=>$third_value,
            'tenth_value'=>$tenth_value,
            'selectTable_value_name'=>$selectTable_value_name,
            'class_details'=>$class_details,
            'dp_details'=>$dp_details,
            'section_details'=>$section_details,
            'student_details'=>$student_details
        ]);

    }


    public function create(){

        $custome_filed_list = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Basic Information')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $payroll_information = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Payroll')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $leaves_information = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Leaves')

                                          ->orderBy('field_order','asc')
                                          ->get();
        $bank_information = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Bank Account Details')

                                          ->orderBy('field_order','asc')
                                          ->get();
$social_information = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Social Media Link')

                                          ->orderBy('field_order','asc')
                                          ->get();


$upload_documents_information = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Upload Documents')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $class_details = HrDepartment::latest()->get();
        $dp_details = Designation::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = Student::latest()->get();

        $student_category = StudentCategory::all();

        $student_house = StudentHouse::all();

        $route_list = Vehicle::all();

        $hostel_details = HostelInfo::latest()->get();

        $role_list = DB::table('roles')->where('id','>',1)->get();




       return view('admin.staff.create',[
           'hostel_details'=>$hostel_details,
           'route_list'=>$route_list,
            'role_list'=>$role_list,
        'payroll_information'=>$payroll_information,
        'leaves_information'=>$leaves_information,
        'bank_information'=>$bank_information,
        'social_information'=>$social_information,
        'upload_documents_information'=>$upload_documents_information,

        'student_category'=>$student_category,
        'student_house'=>$student_house,
           'custome_filed_list'=>$custome_filed_list,
           'class_details'=>$class_details,
           'dp_details'=>$dp_details,
           'section_details'=>$section_details,
           'student_details'=>$student_details
        ]);



    }


    protected function imageUpload($request){
        $productImage = $request->file('photo');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/upload/';
        $imageUrl = $directory.$imageName;

        Image::make($productImage)->resize(200,200)->save($imageUrl);

        return $imageUrl;
    }

    public function store(Request $request){


        if($request->hasfile('photo')){
            $image_staff=$this->imageUpload($request);
          }else{
             $image_staff=null;
          }




           // Create New User
        $user = new Staff();
        $user->staff_id = $request->staff_id;
        $user->role= $request->role;
        $user->designation = $request->designation;
        $user->department = $request->department;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->father_name = $request->father_name;
        $user->mother_name = $request->mother_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->work_experience = $request->work_experience;
        $user->date_of_joining = $request->date_of_joining;
        $user->phone = $request->phone;
        $user->emergency_contact_number = $request->emergency_contact_number;
        $user->marital_status = $request->marital_status;
        $user->photo = $image_staff;
        $user->current_address = $request->current_address;
        $user->permanent_address = $request->permanent_address;
        $user->qualification = $request->qualification;
        $user->note = $request->note;
        $user->pan_number = $request->pan_number;
        $user->epf_no = $request->epf_no;
        $user->basic_salary = $request->basic_salary;
        $user->contract_type = $request->contract_type;
        $user->work_shift = $request->work_shift;
        $user->location = $request->location;
        $user->medical_leave = $request->medical_leave;
        $user->casual_leave = $request->casual_leave;
        $user->maternity_leave = $request->maternity_leave;
        $user->account_title = $request->account_title;
        $user->bank_account_number = $request->bank_account_number;
        $user->bank_name = $request->bank_name;
        $user->ifsc_code = $request->ifsc_code;
        $user->bank_branch_name = $request->bank_branch_name;
        $user->facebook_url = $request->facebook_url;
        $user->twitter_url = $request->twitter_url;
        $user->linkedin_url = $request->linkedin_url;
        $user->instagram_url = $request->instagram_url;


        if ($request->hasfile('resume')) {
            $file = $request->file('resume');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->resume =  $filename;
        }

        if ($request->hasfile('joining_letter')) {
            $file = $request->file('joining_letter');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->joining_letter =  $filename;
        }

        if ($request->hasfile('other_documents')) {
            $file = $request->file('other_documents');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->other_documents =  $filename;
        }
        $user->save();



        $staff_main_id = $user->id;
        $staff__id = $user->staff_id;
        $staff_mail = $user->email;



        $user_admin = new Admin();
        $user_admin->staff_id = $staff__id;
        $user_admin->staff_main_id = $staff_main_id;
        $user_admin->name = $request->first_name.' '.$request->last_name;
        $user_admin->email = $request->first_name.'_'.$request->last_name.'@email.com';
        $user_admin->password = Hash::make(12345);
        $user_admin->save();

        if ($request->role) {
            $user_admin->assignRole($request->role);
        }



        return redirect()->route('admin.staff')->with('success','Created successfully!');


    }

    public function update(Request $request){







           // Create New User
        $user = Staff::find($request->id);
        $user->staff_id = $request->staff_id;
        $user->role= $request->role;
        $user->designation = $request->designation;
        $user->department = $request->department;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->father_name = $request->father_name;
        $user->mother_name = $request->mother_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->date_of_joining = $request->date_of_joining;
        $user->phone = $request->phone;
        $user->emergency_contact_number = $request->emergency_contact_number;
        $user->marital_status = $request->marital_status;
        $user->work_experience = $request->work_experience;
        $user->current_address = $request->current_address;
        $user->permanent_address = $request->permanent_address;
        $user->qualification = $request->qualification;
        $user->note = $request->note;
        $user->pan_number = $request->pan_number;
        $user->epf_no = $request->epf_no;
        $user->basic_salary = $request->basic_salary;
        $user->contract_type = $request->contract_type;
        $user->work_shift = $request->work_shift;
        $user->location = $request->location;
        $user->medical_leave = $request->medical_leave;
        $user->casual_leave = $request->casual_leave;
        $user->maternity_leave = $request->maternity_leave;
        $user->account_title = $request->account_title;
        $user->bank_account_number = $request->bank_account_number;
        $user->bank_name = $request->bank_name;
        $user->ifsc_code = $request->ifsc_code;
        $user->bank_branch_name = $request->bank_branch_name;
        $user->facebook_url = $request->facebook_url;
        $user->twitter_url = $request->twitter_url;
        $user->linkedin_url = $request->linkedin_url;
        $user->instagram_url = $request->instagram_url;


        if ($request->hasfile('resume')) {
            $file = $request->file('resume');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->resume =  $filename;
        }

        if ($request->hasfile('joining_letter')) {
            $file = $request->file('joining_letter');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->joining_letter =  $filename;
        }

        if ($request->hasfile('other_documents')) {
            $file = $request->file('other_documents');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/uploads/', $filename);
            $user->other_documents =  $filename;
        }

        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('public/upload/', $filename);
            $directory = 'public/upload/';
            $user->photo =  $directory.$filename;
        }
        $user->save();







        return redirect()->route('admin.staff')->with('info','Updated successfully!');


    }


    public function edit($id){

        $custome_filed_list = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Basic Information')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $payroll_information = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Payroll')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $leaves_information = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Leaves')

                                          ->orderBy('field_order','asc')
                                          ->get();
        $bank_information = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Bank Account Details')

                                          ->orderBy('field_order','asc')
                                          ->get();
$social_information = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Social Media Link')

                                          ->orderBy('field_order','asc')
                                          ->get();


$upload_documents_information = CustomeField::where('belongs_to',0)
                                          ->where('visibility',1)
                                          ->where('field_group','Upload Documents')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $class_details = HrDepartment::latest()->get();
        $dp_details = Designation::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = Student::latest()->get();

        $student_category = StudentCategory::all();

        $student_house = StudentHouse::all();

        $route_list = Vehicle::all();

        $hostel_details = HostelInfo::latest()->get();

        $role_list = DB::table('roles')->where('id','>',1)->get();


      $saff_list = Staff::where('id',$id)->first();

       return view('admin.staff.edit',[
           'saff_list'=>$saff_list,
           'hostel_details'=>$hostel_details,
           'route_list'=>$route_list,
            'role_list'=>$role_list,
        'payroll_information'=>$payroll_information,
        'leaves_information'=>$leaves_information,
        'bank_information'=>$bank_information,
        'social_information'=>$social_information,
        'upload_documents_information'=>$upload_documents_information,

        'student_category'=>$student_category,
        'student_house'=>$student_house,
           'custome_filed_list'=>$custome_filed_list,
           'class_details'=>$class_details,
           'dp_details'=>$dp_details,
           'section_details'=>$section_details,
           'student_details'=>$student_details
        ]);



    }


    public function destroy($id){

        $user = Staff::find($id);
       if (!is_null($user)) {
           $user->delete();
       }

       return redirect()->route('admin.staff')->with('error','Deleted successfully!');
    }


    public function view($id){



        $single_staff_info = Staff::where('id',$id)->first();

        $staff_id = Auth::guard('admin')->user()->id;



        //find admin_id


        $admin_id = Admin::where('staff_main_id',$id)->value('id');

        $apply_leave_details = ApplyLeave::where('staff_id',$admin_id)->get();


        //dd($apply_leave_details);
        $user_list = Admin::all();
          return view('admin.staff.view',[
            'apply_leave_details'=>$apply_leave_details,
'user_list'=>$user_list,
            'single_staff_info'=> $single_staff_info


        ]);

    }


    public function staff_doc_download($title,$id){





        if($title == 'Resume'){


            $documnent_info = Staff::where('id',$id)->value('resume');


        }elseif($title == 'Joining Letter'){

            $documnent_info = Staff::where('id',$id)->value('joining_letter');

        }else{
            $documnent_info = Staff::where('id',$id)->value('other_documents');


        }




        $filePath = public_path('uploads'.'/'.$documnent_info);

        //dd($filePath);
            // $headers = ['Content-Type: application/pdf'];
            // $fileName = time().'.pdf';

            return response()->download($filePath, $documnent_info);

    }


    public function staff_doc_update(Request $request){


        if($request->document_title == 'Resume'){


            $user = Staff::find($request->id);
            if ($request->hasfile('resume')) {
                $file = $request->file('resume');
                $extension = $file->getClientOriginalName();
                $filename = $extension;
                $file->move('public/uploads/', $filename);
                $user->resume =  $filename;
            }
            $user->save();


        }elseif($request->document_title == 'Joining Letter'){



            $user = Staff::find($request->id);
            if ($request->hasfile('joining_letter')) {
                $file = $request->file('joining_letter');
                $extension = $file->getClientOriginalName();
                $filename = $extension;
                $file->move('public/uploads/', $filename);
                $user->joining_letter =  $filename;
            }
            $user->save();




        }else{

            $user = Staff::find($request->id);
            if ($request->hasfile('other_documents')) {
                $file = $request->file('other_documents');
                $extension = $file->getClientOriginalName();
                $filename = $extension;
                $file->move('public/uploads/', $filename);
                $user->other_documents =  $filename;
            }
            $user->save();

        }


        return redirect()->back()->with('info','Updated successfully!');



    }


    public function status($status,$id){

        $user = Staff::find($id);
        $user->status =$status;
        $user->save();

        Admin::where('staff_main_id', $id)
       ->update([
           'status' => $status
        ]);



        return redirect()->back()->with('info','Updated successfully!');

    }
}
