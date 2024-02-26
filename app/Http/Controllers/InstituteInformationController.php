<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srani;
use App\Department;
use App\Section;
use App\Subject;
use App\Student;
use Image;
use App\InstituteInformation;
class InstituteInformationController extends Controller
{
    public function index(){



         $ins_details = InstituteInformation::latest()->get();
        return view('admin.institute.index',['ins_details'=>$ins_details]);
    }



 protected function imageUpload($request){
        $productImage = $request->file('logo');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/upload/';
        $imageUrl = $directory.$imageName;

        Image::make($productImage)->save($imageUrl);

        return $imageUrl;
    }



    protected function imageUpload_icon($request){
        $productImage = $request->file('icon');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/upload/';
        $imageUrl = $directory.$imageName;

        Image::make($productImage)->resize(202,202)->save($imageUrl);

        return $imageUrl;
    }

    public function store(Request $request){


        // Validation Data
        $request->validate([
            'logo' => 'required|max:350',

        ]);




          if($request->file('logo')!==null){
        $image=$this->imageUpload($request);
      }else{
         $image=null;
      }


      if($request->file('icon')!==null){
        $icon=$this->imageUpload_icon($request);
      }else{
         $icon=null;
      }

        // Create New User
        $user = new InstituteInformation();
        $user->name = $request->name;
        $user->code= $request->code;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user-> email = $request->  email;
        $user->session = $request->session;
        $user->session_start_month = $request->session_start_month;
        $user->logo = $image;
        $user->icon = $icon;
         $user->save();

        return redirect()->route('admin.institute_information')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =InstituteInformation::find($request->id);
         $user->name = $request->name;
        $user->code= $request->code;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user-> email = $request->  email;
        $user->session = $request->session;
        $user->session_start_month = $request->session_start_month;
        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/upload/', $filename);
            $user->logo = 'public/upload/' . $filename;
        }

        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/upload/', $filename);
            $user->icon = 'public/upload/' . $filename;
        }


        $user->save();

        return redirect()->route('admin.institute_information')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = InstituteInformation::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.institute_information')->with('error','Deleted successfully!');
    }

}
