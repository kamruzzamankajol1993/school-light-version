<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Ward;
use App\Payment;
use App\User;
use App\People;
use App\Models\Admin;
use Image;
use PDF;
use App\Certificatename;
use App\CertificateDetail;
use App\AdminNotice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminNoticeController extends Controller
{
    public function index_notice(){
     
     $wardID = Auth::guard('admin')->user()->ward_id;
     $adminLists = Admin::where('ward_id',$wardID)->get();
     $certificatesNames =Certificatename::all();
     $wardID = Auth::guard('admin')->user()->ward_id;
     $adminID = Auth::guard('admin')->user()->id; 
   $notificationLists = AdminNotice::whereIn('admin_id',[$adminID,'all'])->where('status',0)->where('all_id','!=',$adminID)->count();

   $view_notification = AdminNotice::whereIn('admin_id',[$adminID,'all'])->where('all_id','!=',$adminID)->get();

     return view('admin.notice.index',['adminLists'=>$adminLists,'certificatesNames'=>$certificatesNames,'notificationLists'=>$notificationLists,'view_notification'=>$view_notification]);

    }


     public function create_notice(){

     	//dd('ok');


     $wardID = Auth::guard('admin')->user()->ward_id;
     $adminID = Auth::guard('admin')->user()->id;

     $adminLists = Admin::where('ward_id',$wardID)->where('id','!=',$adminID)->get();
     $notificationLists = AdminNotice::whereIn('admin_id',[$adminID,'all'])->where('status',0)->where('all_id','!=',$adminID)->count();
     
   $certificatesNames =Certificatename::all(); 
     return view('admin.notice.send',['adminLists'=>$adminLists,'certificatesNames'=>$certificatesNames,'notificationLists'=>$notificationLists]);

    }




    public function store_notice(Request $request){

        $this->validate($request,[
           
            'subject' => 'required',
            'admin_id' => 'required',
            'des' => 'required', 
         
   ]);


        $new = new AdminNotice();
         $new->ward_id = Auth::guard('admin')->user()->ward_id;
         $new->sender_id = Auth::guard('admin')->user()->id;

         if($request->admin_id == 'all'){

            $new->all_id = Auth::guard('admin')->user()->id;
         }
         $new->admin_id = $request->admin_id;
         $new->date = date('d-m-Y');
         $new->subject = $request->subject;
         $new->des = $request->des;
         //$new->road_ban = $request->road_ban;
       
         $new->save();

Toastr::success('Successfully Send :)','Success');
        return redirect()->back();
    }


    public function view_notice($id){

    	$affected =AdminNotice::
              where('id', $id)
              ->update(['status' => 1]);

$wardID = Auth::guard('admin')->user()->ward_id;
     $adminLists =Admin::where('ward_id',$wardID)->get();
     $certificatesNames =Certificatename::all();
     $wardID = Auth::guard('admin')->user()->ward_id;
     $adminID = Auth::guard('admin')->user()->id; 
   $notificationLists = AdminNotice::whereIn('admin_id',[$adminID,'all'])->where('status',0)->where('all_id','!=',$adminID)->count();

   $view_notification = AdminNotice::where('id',$id)->where('all_id','!=',$adminID)->first();

     return view('admin.notice.view',['adminLists'=>$adminLists,'certificatesNames'=>$certificatesNames,'notificationLists'=>$notificationLists,'view_notification'=>$view_notification]);


    }
}
