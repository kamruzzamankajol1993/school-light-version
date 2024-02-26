<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class DistrictController extends Controller
{
     public function select_district(Request $request)
    {

        $divisions_id =DB::table('civilinfos')->where('division_bn',$request->id_country)->value('division_bn');
        if($request->ajax()){
            $states = DB::table('civilinfos')->where('division_bn',$divisions_id)->select('district_bn')->distinct()->get();
            $data = view('admin.people.districtEng',compact('states'))->render();
            return response()->json(['options'=>$data]);

}

}


 public function select_thana(Request $request)
    {

        $divisions_id =DB::table('civilinfos')->where('district_bn',$request->id_country1)->value('district_bn');
        if($request->ajax()){
            $states = DB::table('civilinfos')->where('district_bn',$divisions_id)->select('thana_bn')->distinct()->get();
            $data = view('admin.people.upozilaEng',compact('states'))->render();
            return response()->json(['options'=>$data]);

}

}



public function select_postoffice(Request $request)
{

    $divisions_id =DB::table('civilinfos')->where('thana_bn',$request->id_country12)->value('thana_bn');
    if($request->ajax()){
        $states = DB::table('civilinfos')->where('thana_bn',$divisions_id)->select('suboffice_bn')->distinct()->get();
        $data = view('admin.people.postofficeEng',compact('states'))->render();
        return response()->json(['options'=>$data]);

}

}




public function select_postcode(Request $request)
{

    $divisions_id =DB::table('civilinfos')->where('suboffice_bn',$request->id_country13)->value('suboffice_bn');
    if($request->ajax()){
        $states = DB::table('civilinfos')->where('suboffice_bn',$divisions_id)->select('postcode_bn')->distinct()->get();
        $data = view('admin.people.postcodeEng',compact('states'))->render();
        return response()->json(['options'=>$data]);

}

}






 public function select_district_bangla(Request $request)
    {

        $divisions_id =DB::table('divisions')->where('bn_name',$request->id_country)->value('id');
        if($request->ajax()){
            $states_b = DB::table('districts')->where('division_id',$divisions_id)->get();
            $data = view('admin.people.districtBng',compact('states_b'))->render();
            return response()->json(['options'=>$data]);

}

}


 public function select_thana_bangla(Request $request)
    {

        $divisions_id =DB::table('districts')->where('bn_name',$request->id_country1)->value('id');
        if($request->ajax()){
            $states_l = DB::table('upazilas')->where('district_id',$divisions_id)->get();
            $data = view('admin.people.upozilaBan',compact('states_l'))->render();
            return response()->json(['options'=>$data]);

}

}



 public function permanent_select_district(Request $request)
    {

        $divisions_id =DB::table('civilinfos')->where('division_bn',$request->id_country)->value('division_bn');
        if($request->ajax()){
            $statesp = DB::table('civilinfos')->where('division_bn',$divisions_id)->select('district_bn')->distinct()->get();
            $data = view('admin.people.perDisEng',compact('statesp'))->render();
            return response()->json(['options'=>$data]);

}

}


 public function permanent_select_thana(Request $request)
    {

        $divisions_id =DB::table('civilinfos')->where('district_bn',$request->id_country1)->value('district_bn');
        if($request->ajax()){
            $statesp1 = DB::table('civilinfos')->where('district_bn',$divisions_id)->select('thana_bn')->distinct()->get();
            $data = view('admin.people.perThanaEng',compact('statesp1'))->render();
            return response()->json(['options'=>$data]);

}

}



public function permanent_select_postoffice(Request $request)
{

    $divisions_id =DB::table('civilinfos')->where('thana_bn',$request->id_country12)->value('thana_bn');
    if($request->ajax()){
        $states = DB::table('civilinfos')->where('thana_bn',$divisions_id)->select('suboffice_bn')->distinct()->get();
        $data = view('admin.people.perpostofficeEng',compact('states'))->render();
        return response()->json(['options'=>$data]);

}

}




public function permanent_select_postcode(Request $request)
{

    $divisions_id =DB::table('civilinfos')->where('suboffice_bn',$request->id_country13)->value('suboffice_bn');
    if($request->ajax()){
        $states = DB::table('civilinfos')->where('suboffice_bn',$divisions_id)->select('postcode_bn')->distinct()->get();
        $data = view('admin.people.perpostcodeEng',compact('states'))->render();
        return response()->json(['options'=>$data]);

}

}






 public function permanent_select_district_bangla(Request $request)
    {

        $divisions_id =DB::table('divisions')->where('bn_name',$request->id_country)->value('id');
        if($request->ajax()){
            $states_b1 = DB::table('districts')->where('division_id',$divisions_id)->get();
            $data = view('admin.people.perDisBan',compact('states_b1'))->render();
            return response()->json(['options'=>$data]);

}

}


 public function permanent_select_thana_bangla(Request $request)
    {

        $divisions_id =DB::table('districts')->where('bn_name',$request->id_country1)->value('id');
        if($request->ajax()){
            $states_l1 = DB::table('upazilas')->where('district_id',$divisions_id)->get();
            $data = view('admin.people.perThanaBan',compact('states_l1'))->render();
            return response()->json(['options'=>$data]);

}

}




}
