<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\Student;
use App\MainStudent;
use App\Models\AssaignClassToExam;
class SectionController extends Controller
{
       public function index(){


        $class_details = Srani::latest()->get();
        $dp_details = Department::latest()->get();
 $section_details = Section::latest()->get();
        return view('admin.section.index',['class_details'=>$class_details,'dp_details'=>$dp_details,'section_details'=>$section_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:50',

        ]);

        // Create New User
        $user = new Section();
        $user->name = $request->name;
        $user->department_id= $request->department_id;
        $user->class_id = $request->class_id;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.section')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Section::find($request->id);
        $user->class_id= $request->class_id;
        $user->department_id= $request->department_id;
        $user->name = $request->name;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.section')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Section::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.section')->with('error','Deleted successfully!');
    }



     public function department_search(Request $request)
    {


            $states = Department::where('class_id',$request->id_country)->get();
            $data = view('admin.section.dp',compact('states'))->render();


            return response()->json(['options'=>$data]);

}


public function search_class_from_exam(Request $request){

    $class_id = AssaignClassToExam::where('exam_id',$request->id_country)->select('class_id')->get();

    $convert_name_title = $class_id->implode("class_id", ",");


$separated_data_title = explode(", ", $convert_name_title);

$states = Srani::whereIn('id',$separated_data_title)->get();


            $data = view('admin.exam.search_class_from_exam',compact('states'))->render();


            return response()->json(['options'=>$data]);



}


 public function section_search(Request $request)
    {


            $states = Section::where('class_id',$request->id_country)->get();
            $data = view('admin.section.section',compact('states'))->render();


            return response()->json(['options'=>$data]);

}

public function dpsection_search(Request $request)
    {


            $states = Section::where('department_id',$request->id_country)->get();
            $data = view('admin.section.dp_section',compact('states'))->render();


            return response()->json(['options'=>$data]);

}

public function subject_search(Request $request){


    $states = Subject::where('class_id',$request->id_country)->get();
            $data = view('admin.section.subject_search',compact('states'))->render();


            return response()->json(['options'=>$data]);


}

public function subject_search_dpwise(Request $request){


      $states = Subject::where('department_id',$request->id_country)->get();
            $data = view('admin.section.subject_search_dpwise',compact('states'))->render();


            return response()->json(['options'=>$data]);


}


public function student_search(Request $request){
    $section_id = Section::where('id',$request->id_country)->value('name');

         $states = MainStudent::where('section',$section_id)->get();
            $data = view('admin.section.student_search',compact('states'))->render();


            return response()->json(['options'=>$data]);


}

public function department_search_name(Request $request)
{

    $class_id = Srani::where('name',$request->id_country)->value('id');


        $states = Department::where('class_id',$class_id)->get();
        $data = view('admin.section.dp_name',compact('states'))->render();


        return response()->json(['options'=>$data]);

}


public function section_search_name(Request $request)
{

    //class_id
    $class_id = Srani::where('name',$request->id_country)->value('id');


        $states = Section::where('class_id',$class_id)->get();
        $data = view('admin.section.section_name',compact('states'))->render();


        return response()->json(['options'=>$data]);

}

public function dpsection_search_name(Request $request)
{

    $dp_id = Department::where('name',$request->id_country)->value('id');


        $states = Section::where('department_id',$dp_id)->get();
        $data = view('admin.section.dp_section_name',compact('states'))->render();


        return response()->json(['options'=>$data]);

}
}
