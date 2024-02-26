<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GradeMark;
class GradeMarkController extends Controller
{
    public function index(){


        $grade_mark_details = GradeMark::latest()->get();


        return view('admin.grade_mark.index',['grade_mark_details'=>$grade_mark_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'grader_name' => 'required|max:350',

        ]);

        // Create New User
        $user = new GradeMark();
        $user->grader_name = $request->grader_name;
        $user->grader_point = $request->grader_point;
        $user->lower_mark = $request->lower_mark;
        $user->upper_mark = $request->upper_mark;
        $user->save();

        return redirect()->route('admin.grade_mark')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =GradeMark::find($request->id);
        $user->grader_name = $request->grader_name;
        $user->grader_point = $request->grader_point;
        $user->lower_mark = $request->lower_mark;
        $user->upper_mark = $request->upper_mark;
        $user->save();

        return redirect()->route('admin.grade_mark')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = GradeMark::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.grade_mark')->with('error','Deleted successfully!');
    }
}
