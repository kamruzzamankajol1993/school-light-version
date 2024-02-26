<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentCategory;
class StudentCategoryController extends Controller
{
     public function index(){



        $student_category_details = StudentCategory::latest()->get();
               return view('admin.student_category_details.index',['student_category_details'=>$student_category_details]);
           }





           public function store(Request $request){


               // Validation Data
               $request->validate([
                   'name' => 'required|max:250',

               ]);

               // Create New User
               $user = new StudentCategory();
               $user->name = $request->name;
               $user->save();

               return redirect()->route('admin.student_category')->with('success','Created successfully!');


           }


           public function update(Request $request){


               // Create New User
               $user =StudentCategory::find($request->id);
               $user->name = $request->name;
               $user->save();

               return redirect()->route('admin.student_category')->with('success','Updated successfully!');


           }


           public function destroy($id){

                $user = StudentCategory::find($id);
               if (!is_null($user)) {
                   $user->delete();
               }


               return redirect()->route('admin.student_category')->with('error','Deleted successfully!');
           }
}
