<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\Student;
use App\Result;
use App\InstituteInformation;
use App\Models\SessionYear;
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
class StudentController extends Controller
{
    public function index(){

        $selectTable_value_name = CustomeField::where('belongs_to',1)->where('tb_data',1)->get();



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

    $test_student = MainStudent::select('id',$first_value)->get();

}elseif($count_vlue == 2){
    $test_student = MainStudent::select('id',$first_value,$second_value)->get();

}elseif($count_vlue == 3){

    $test_student = MainStudent::select('id',$first_value,$second_value,$third_value)->get();
}elseif($count_vlue == 4){

    $test_student = MainStudent::select('id',$first_value,$second_value,$third_value,$fourth_value)->get();
}elseif($count_vlue == 5){

    $test_student = MainStudent::select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value)->get();
}elseif($count_vlue == 6){

    $test_student = MainStudent::select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value)->get();
}elseif($count_vlue == 7){

    $test_student = MainStudent::select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value)->get();
}elseif($count_vlue == 8){

    $test_student = MainStudent::select('id','last_name',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value,$eight_value)->get();
}elseif($count_vlue == 9){

    $test_student = MainStudent::select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value,$eight_value,$ninth_value)->get();
}elseif($count_vlue == 10){

    $test_student = MainStudent::select('id',$first_value,$second_value,$third_value,$fourth_value,$fifth_value,$sixth_value,$seventh_value,$eight_value,$ninth_value,$tenth_value)->get();
}




//$test_student = Teststudent::all();


         $class_details = Srani::latest()->get();
         $dp_details = Department::latest()->get();
         $section_details = Section::latest()->get();
         $student_details = Student::latest()->get();






        return view('admin.student.index',[
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

        $custome_filed_list = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Student information')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $parent_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Parent Guardian Detail')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $student_address_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Student Address Details')

                                          ->orderBy('field_order','asc')
                                          ->get();
        $sibling_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Sibling Details')

                                          ->orderBy('field_order','asc')
                                          ->get();
$transport_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Transport Details')

                                          ->orderBy('field_order','asc')
                                          ->get();
$hostel_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Hostel Details')

                                          ->orderBy('field_order','asc')
                                          ->get();

$miscellaneous_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Miscellaneous Details')

                                          ->orderBy('field_order','asc')
                                          ->get();

$upload_documents_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Upload Documents')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = Student::latest()->get();

        $student_category = StudentCategory::all();

        $student_house = StudentHouse::all();

        $route_list = Vehicle::all();

        $hostel_details = HostelInfo::latest()->get();

       return view('admin.student.create',[
           'hostel_details'=>$hostel_details,
           'route_list'=>$route_list,
        'student_address_information'=>$student_address_information,
        'sibling_information'=>$sibling_information,
        'transport_information'=>$transport_information,
        'hostel_information'=>$hostel_information,
        'miscellaneous_information'=>$miscellaneous_information,
        'upload_documents_information'=>$upload_documents_information,
        'parent_information'=>$parent_information,
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
        $productImage = $request->file('student_photo');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/upload/';
        $imageUrl = $directory.$imageName;

        Image::make($productImage)->resize(200,200)->save($imageUrl);

        return $imageUrl;
    }


    protected function imageUpload_father_photo($request){
        $productImage = $request->file('father_photo');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/upload/';
        $imageUrl_father_photo = $directory.$imageName;

        Image::make($productImage)->resize(200,200)->save($imageUrl_father_photo);

        return $imageUrl_father_photo;
    }



    protected function imageUpload_mother_photo($request){
        $productImage = $request->file('mother_photo');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/upload/';
        $imageUrl_mother_photo = $directory.$imageName;

        Image::make($productImage)->resize(200,200)->save($imageUrl_mother_photo);

        return $imageUrl_mother_photo;
    }


    protected function imageUpload_g_photo($request){
        $productImage = $request->file('guardian_photo');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/upload/';
        $imageUrl_g_photo = $directory.$imageName;

        Image::make($productImage)->resize(200,200)->save($imageUrl_g_photo);

        return $imageUrl_g_photo;
    }

    public function store(Request $request){


         $active_year = SessionYear::where('status',1)->value('name');




              $array_data = $request->all();






          if($request->hasfile('student_photo')){
        $image_student=$this->imageUpload($request);
      }else{
         $image_student=null;
      }




      if($request->hasfile('father_photo')){
        $image_father=$this->imageUpload_father_photo($request);
      }else{
         $image_father=null;
      }



      if($request->hasfile('mother_photo')){
        $image_mother=$this->imageUpload_mother_photo($request);
      }else{
         $image_mother=null;
      }
      //dd($image_mother);

      if($request->hasfile('guardian_photo')){
        $image_guardiant=$this->imageUpload_g_photo($request);
      }else{
         $image_guardiant=null;
      }

        // Create New User
        $user = new MainStudent();
        $user->admission_no = $request->admission_no;
        $user->roll_number= $request->roll_number;
        $user->class = $request->class_id;
        $user->session_year = $active_year;
        $user->section = $request->section_id;
        $user->department = $request->department_id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->category = $request->category;
        $user->religion = $request->religion;
        $user->caste = $request->caste;
        $user->mobile_number = $request->mobile_number;
        $user->email = $request->email;
        $user->admission_date = $request->admission_date;
        $user->student_photo = $image_student;
        $user->blood_group = $request->blood_group;
        $user->student_house = $request->student_house;
        $user->height = $request->height;
        $user->weight = $request->weight;
        $user->as_on_date = $request->as_on_date;
        $user->medical_history = $request->medical_history;
        $user->father_name = $request->father_name;
        $user->father_phone = $request->father_phone;
        $user->father_occupation = $request->father_occupation;
        $user->father_yearly_incme = $request->father_yearly_incme;
        $user->father_photo = $image_father;
        $user->mother_name = $request->mother_name;
        $user->mother_phone = $request->mother_phone;
        $user->mother_occupation = $request->mother_occupation;
        $user->mother_yearly_income = $request->mother_yearly_income;
        $user->mother_photo = $image_mother;
        $user->if_guardian_is = $request->if_guardian_is;
        $user->guardian_name = $request->guardian_name;
        $user->guardian_relation = $request->guardian_relation;
        $user->guardian_email = $request->guardian_email;
        $user->guardian_phone = $request->guardian_phone;
        $user->guardian_occupation = $request->guardian_occupation;
        $user->guardian_photo = $image_guardiant;
        $user->guardian_address = $request->guardian_address;
        $user->if_guardian_address_is_current_address = $request->if_guardian_address_is_current_address;
        $user->if_permanent_address_is_current_address = $request->if_permanent_address_is_current_address;
        $user->current_address = $request->current_address;
        $user->permanent_address = $request->permanent_address;
        $user->route_list = $request->route_list;
        $user->hostel = $request->hostel;
        $user->room_no = $request->room_no;
        $user->bank_account_number = $request->bank_account_number;
        $user->bank_name = $request->bank_name;
        $user->ifsc_code = $request->ifsc_code;
        $user->national_identification_number = $request->national_identification_number;
        $user->birth_certificate_number = $request->birth_certificate_number;
        $user->rte = $request->rte;
        $user->previous_school_details = $request->previous_school_details;
        $user->note = $request->note;
         $user->save();

         $student_id = $user->id;



        return redirect()->route('admin.student')->with('success','Created successfully!');


    }


    public function update(Request $request){

        $array_data = $request->all();

    $user =MainStudent::find($request->id);
    $user->admission_no = $request->admission_no;
    $user->roll_number= $request->roll_number;
    $user->class = $request->class_id;
    $user->section = $request->section_id;
    $user->department = $request->department_id;
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->gender = $request->gender;
    $user->date_of_birth = $request->date_of_birth;
    $user->category = $request->category;
    $user->religion = $request->religion;
    $user->caste = $request->caste;
    $user->mobile_number = $request->mobile_number;
    $user->email = $request->email;
    $user->admission_date = $request->admission_date;

   if ($request->hasfile('student_photo')) {
        $file = $request->file('student_photo');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/upload/', $filename);
        $user->student_photo = 'public/upload/' . $filename;
    }

    $user->blood_group = $request->blood_group;
    $user->student_house = $request->student_house;
    $user->height = $request->height;
    $user->weight = $request->weight;
    $user->as_on_date = $request->as_on_date;
    $user->medical_history = $request->medical_history;
    $user->father_name = $request->father_name;
    $user->father_phone = $request->father_phone;
    $user->father_occupation = $request->father_occupation;
    $user->father_yearly_incme = $request->father_yearly_incme;





    if ($request->hasfile('father_photo')) {
        $file = $request->file('father_photo');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/upload/', $filename);
        $user->father_photo = 'public/upload/' . $filename;
    }


    $user->mother_name = $request->mother_name;
    $user->mother_phone = $request->mother_phone;
    $user->mother_occupation = $request->mother_occupation;
    $user->mother_yearly_income = $request->mother_yearly_income;





    if ($request->hasfile('mother_photo')) {
        $file = $request->file('mother_photo');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/upload/', $filename);
        $user->mother_photo = 'public/upload/' . $filename;
    }

    $user->if_guardian_is = $request->if_guardian_is;
    $user->guardian_name = $request->guardian_name;
    $user->guardian_relation = $request->guardian_relation;
    $user->guardian_email = $request->guardian_email;
    $user->guardian_phone = $request->guardian_phone;
    $user->guardian_occupation = $request->guardian_occupation;




    if ($request->hasfile('guardian_photo')) {
        $file = $request->file('guardian_photo');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/upload/', $filename);
        $user->mother_photo = 'public/upload/' . $filename;
    }


    $user->guardian_address = $request->guardian_address;
    $user->if_guardian_address_is_current_address = $request->if_guardian_address_is_current_address;
    $user->if_permanent_address_is_current_address = $request->if_permanent_address_is_current_address;
    $user->current_address = $request->current_address;
    $user->permanent_address = $request->permanent_address;
    $user->route_list = $request->route_list;
    $user->hostel = $request->hostel;
    $user->room_no = $request->room_no;
    $user->bank_account_number = $request->bank_account_number;
    $user->bank_name = $request->bank_name;
    $user->ifsc_code = $request->ifsc_code;
    $user->national_identification_number = $request->national_identification_number;
    $user->birth_certificate_number = $request->birth_certificate_number;
    $user->rte = $request->rte;
    $user->previous_school_details = $request->previous_school_details;
    $user->note = $request->note;
     $user->save();

     $student_id = $user->id;


     if(empty($request->siblingname)){



     }else{


     $sibling_detail = $array_data['siblingname'][0];






     if(empty($sibling_detail)){



     }else{

        $sibling_delete = Sibling::where('student_id',$request->id)->delete();
        $array_data = $request->all();


        $sibling_detail = $array_data['siblingname'];

        foreach ($sibling_detail as $key => $sibling_detail) {

            $table_list_data = new Sibling();
            $table_list_data->student_id	=$student_id;
            $table_list_data->sibling_name	=$array_data['siblingname'][$key];
            $table_list_data->sibling_class	=$array_data['siblingclass'][$key];
            $table_list_data->save();


      }




     }
}
  



    //    $session_data = new SessionYear()

    return redirect()->route('admin.student')->with('info','Updated successfully!');





    }


    public function destroy($id){

         $user = MainStudent::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.student')->with('error','Deleted successfully!');
    }


    public function student_result($id){

           $id = $id;
           $exam_details = Exam::latest()->get();
        return view('admin.student.student_result',['id'=>$id,'exam_details'=>$exam_details]);



    }



    public function student_wise_result($student_id,$exam_id){


//dd(1);
        $exam_atendence_check = Result::where('students_id',$student_id)->where('exam_id',$exam_id)->value('exam_id');


if(empty($exam_atendence_check)){

return redirect()->back()->with('error','This student Did not attend exam!');

}else{

$ins_details = InstituteInformation::latest()->first();
$student_details = Student::where('id',$student_id)->first();
$exam_details = Exam::where('id',$exam_id)->first();

$class_name = Srani::where('id',$student_details->sreni_id)->value('name');
$department_name = Department::where('id',$student_details->department_id)->value('name');
$section_name = Section::where('id',$student_details->section_id)->value('name');

$result_details = Result::where('students_id',$student_id)->where('exam_id',$exam_id)->get();

$subject_count = Result::where('students_id',$student_id)->where('exam_id',$exam_id)->count();

$sum_of_grade_pont = Result::where('students_id',$student_id)->where('exam_id',$exam_id)->sum('grade_point');

$avg_gpa = number_format($sum_of_grade_pont /$subject_count);


$total_mark = Result::where('students_id',$student_id)->where('exam_id',$exam_id)->sum('main_total');

$subject_details = Subject::latest()->get();
  return view('admin.student.student_wise_result',[
    'avg_gpa'=>$avg_gpa,
    'total_mark'=>$total_mark,
    'ins_details'=>$ins_details,
    'student_details'=>$student_details,
    'exam_details'=>$exam_details,
    'class_name'=>$class_name,
    'department_name'=>$department_name,
    'section_name'=>$section_name,
    'result_details'=>$result_details,
    'subject_details'=>$subject_details


]);


}





    }



    public function edit($id){

          $single_student_info = MainStudent::where('id',$id)->first();
          $sibling_info = Sibling::where('student_id',$id)->get();
          $documnent_info = Document::where('student_id',$id)->get();

        $custome_filed_list = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Student information')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $parent_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Parent Guardian Detail')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $student_address_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Student Address Details')

                                          ->orderBy('field_order','asc')
                                          ->get();
        $sibling_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Sibling Details')

                                          ->orderBy('field_order','asc')
                                          ->get();
$transport_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Transport Details')

                                          ->orderBy('field_order','asc')
                                          ->get();
$hostel_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Hostel Details')

                                          ->orderBy('field_order','asc')
                                          ->get();

$miscellaneous_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Miscellaneous Details')

                                          ->orderBy('field_order','asc')
                                          ->get();

$upload_documents_information = CustomeField::where('belongs_to',1)
                                          ->where('visibility',1)
                                          ->where('field_group','Upload Documents')

                                          ->orderBy('field_order','asc')
                                          ->get();

        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
        $section_details = Section::latest()->get();
        $student_details = Student::latest()->get();

        $student_category = StudentCategory::all();

        $student_house = StudentHouse::all();

        $route_list = Vehicle::all();

        $hostel_details = HostelInfo::latest()->get();

        $hostel_room_details = HostelRoom::latest()->get();

       return view('admin.student.edit',[
           'hostel_room_details'=>$hostel_room_details,
       'single_student_info'=> $single_student_info,
       'sibling_info'=>$sibling_info ,
       'documnent_info'=> $documnent_info,
           'hostel_details'=>$hostel_details,
           'route_list'=>$route_list,
        'student_address_information'=>$student_address_information,
        'sibling_information'=>$sibling_information,
        'transport_information'=>$transport_information,
        'hostel_information'=>$hostel_information,
        'miscellaneous_information'=>$miscellaneous_information,
        'upload_documents_information'=>$upload_documents_information,
        'parent_information'=>$parent_information,
        'student_category'=>$student_category,
        'student_house'=>$student_house,
           'custome_filed_list'=>$custome_filed_list,
           'class_details'=>$class_details,
           'dp_details'=>$dp_details,
           'section_details'=>$section_details,
           'student_details'=>$student_details
        ]);



    }



    public function view($id){



        $single_student_info = MainStudent::where('id',$id)->first();
          $sibling_info = Sibling::where('student_id',$id)->get();
          $documnent_info = Document::where('student_id',$id)->get();

          $vehicle_list = Vehicle::where('route_id',$single_student_info->route_list)->first();

         $hostel_room_info = HostelRoom::where('number_or_name',$single_student_info->room_no)->first();
          return view('admin.student.view',[
         'hostel_room_info'=>$hostel_room_info,
            'vehicle_list'=>$vehicle_list,
            'single_student_info'=> $single_student_info,
            'sibling_info'=>$sibling_info ,
            'documnent_info'=> $documnent_info

        ]);

    }


    public function student_related_docDownload($id){

    $documnent_info = Document::where('id',$id)->value('documents');


    $filePath = public_path('uploads'.'/'.$documnent_info);

    //dd($filePath);
    	// $headers = ['Content-Type: application/pdf'];
    	// $fileName = time().'.pdf';

    	return response()->download($filePath, $documnent_info);



}


public function store_doc(Request $request){



    $array_data = $request->all();


    $doc_detail = $array_data['doctitle'];

    foreach ($doc_detail as $key => $doc_detail) {

        $table_list_data = new Document();
        $table_list_data->student_id	=$request->student_id;
        $table_list_data->document_title	=$array_data['doctitle'][$key];

        $file=$array_data['doc'][$key];
    $name=$file->getClientOriginalName();
    $file->move('public/uploads/', $name);
    $table_list_data->documents=$name;

        $table_list_data->save();


  }

  return redirect()->back()->with('info','Document Uploaded successfully!');

}


public function update_doc(Request $request){

    $user =Document::find($request->id);

    $user->document_title	= $request->document_title;

    if ($request->hasfile('documents')) {
        $file = $request->file('documents');
        $extension = $file->getClientOriginalName();
        $filename = $extension;
        $file->move('public/uploads/', $filename);
        $user->documents =  $filename;
    }

    $user->save();


    return redirect()->back()->with('info','Document Updated successfully!');

}


public function destroy_doc($id){

    $user = Document::find($id);
   if (!is_null($user)) {
       $user->delete();
   }


   return redirect()->back()->with('error','Deleted successfully!');
}

public function student_bulk_delete_list(){







$test_student = MainStudent::select('id','admission_no','roll_number','class','section','department','first_name','last_name','gender','date_of_birth','student_house')->get();





//$test_student = Teststudent::all();


     $class_details = Srani::latest()->get();
     $dp_details = Department::latest()->get();
     $section_details = Section::latest()->get();
     $student_details = Student::latest()->get();






    return view('admin.student.student_bulk_delete_list',[

        'test_student'=>$test_student,
        'class_details'=>$class_details,
        'dp_details'=>$dp_details,
        'section_details'=>$section_details,
        'student_details'=>$student_details
    ]);



}

public function student_bulk_delete_post(Request $request)
    {
        $ids = $request->ids;
        MainStudent::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Child Category  Deleted successfully."]);
    }



    public function student_disable_list(){







        $test_student = MainStudent::select('disable_reason','id','admission_no','roll_number','class','section','department','first_name','last_name','gender','date_of_birth','student_house')->get();





        //$test_student = Teststudent::all();


             $class_details = Srani::latest()->get();
             $dp_details = Department::latest()->get();
             $section_details = Section::latest()->get();
             $student_details = Student::latest()->get();


             $disable_reason_details = DisableReason::latest()->get();



            return view('admin.student.student_disable_list',[
'disable_reason_details'=>$disable_reason_details,
                'test_student'=>$test_student,
                'class_details'=>$class_details,
                'dp_details'=>$dp_details,
                'section_details'=>$section_details,
                'student_details'=>$student_details
            ]);



        }



        public function student_disable_post(Request $request){


            $student = MainStudent::find($request->id);

            $student->disable_reason  = $request->reason_name;

            $student->save();


            return redirect()->back()->with('success','Updated successfully!');

        }
}

