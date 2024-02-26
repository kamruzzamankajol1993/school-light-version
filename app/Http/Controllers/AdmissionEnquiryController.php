<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComplainType;
use App\Source;
use App\Complain;
use App\Srani;
use App\FollowupDetail;
use App\Reference;
use App\AdmissionEnquiry;
Use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
class AdmissionEnquiryController extends Controller
{
    public function index(){

        $admission_details = AdmissionEnquiry::latest()->get();
        $reference_details = Reference::latest()->get();
        $class_details = Srani::latest()->get();
        $source_details = Source::latest()->get();
        $user_list = Admin::latest()->get();


       ///$detail_enquiry = FollowupDetail::all();

        return view('admin.admission_enquiry.index',[

'user_list'=>$user_list,
            'admission_details'=>$admission_details,
            'reference_details'=>$reference_details,
            'class_details'=>$class_details,
            'source_details'=>$source_details,

        ]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'name' => 'required|max:350',

        ]);

        // Create New User
        $user = new AdmissionEnquiry();
        $user->email = $request->email;
        $user->name= $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->des = $request->des;
        $user->note	 = $request->note;
        $user->date	= $request->date;
        $user->next_follow_up_date	= $request->next_follow_up_date	;
        $user->assigned	 = $request->assigned;
        $user->refrence = $request->refrence;
        $user->source = $request->source;
        $user->class = $request->class;
        $user->creator_name =Auth::guard('admin')->user()->name;
        $user->number_of_child = $request->number_of_child;
        $user->save();

        return redirect()->route('admin.admission_enquiry')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =AdmissionEnquiry::find($request->id);
        $user->email = $request->email;
        $user->name= $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->des = $request->des;
        $user->note	 = $request->note;
        $user->date	= $request->date;
        $user->next_follow_up_date	= $request->next_follow_up_date	;
        $user->assigned	 = $request->assigned;
        $user->refrence = $request->refrence;
        $user->source = $request->source;
        $user->class = $request->class;
        $user->number_of_child = $request->number_of_child;
        $user->save();

        return redirect()->route('admin.admission_enquiry')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = AdmissionEnquiry::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.admission_enquiry')->with('error','Deleted successfully!');
    }


    public function admission_enquiry_status(Request $request){


        AdmissionEnquiry::where('id', $request->main_id_value)
       ->update([
           'status' => $request->status_value
        ]);

        $states = $request->status_value;
            $data = view('admin.admission_enquiry.status_name',compact('states'))->render();


            return response()->json(['options'=>$data,'status'=>'success','message'=>'Succesfully Updated']);
    }




    public function admission_enquiry_extra(Request $request){


        $user = new FollowupDetail();
        $user->en_id = $request->last_two_id;
        $user->follow_up_date= $request->follow_up_value;
        $user->next_follow_up_date	 = $request->next_follow_up_value;
        $user->response = $request->response_value;
        $user->creator_name =Auth::guard('admin')->user()->name;
        $user->note = $request->note_value;
        $user->save();


        AdmissionEnquiry::where('id', $request->last_two_id)
       ->update([
           'last_follow_up_date' => $request->follow_up_value,
           'next_follow_up_date' => $request->next_follow_up_value
        ]);



            $states = FollowupDetail::where('en_id',$request->last_two_id)->get();
            $data = view('admin.admission_enquiry.detail_follow_up',compact('states'))->render();



            return response()->json(['options'=>$data,'status'=>'success','message'=>'Succesfully Updated']);




    }


    public function admission_enquiry_detail_delete($id){

        $company = FollowupDetail::find($id);
        $company->delete();
        return response()->json([
          'message2' => 'Data deleted successfully!'
        ]);

    }


}
