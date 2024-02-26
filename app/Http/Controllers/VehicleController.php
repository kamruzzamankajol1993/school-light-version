<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VechileRoute;
use App\Vehicle;
class VehicleController extends Controller
{
    public function index(){


        $route_details = VechileRoute::latest()->get();

        $vechile_details = Vehicle::latest()->get();

        return view('admin.vechile_info.index',['route_details'=>$route_details,'vechile_details'=>$vechile_details]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'v_number' => 'required|max:350',

        ]);

        // Create New User
        $user = new Vehicle();
        $user->route_id = $request->route_id;
        $user->v_number = $request->v_number;
        $user->v_model = $request->v_model;
        $user->year_made = $request->year_made;
        $user->driver_name = $request->driver_name;
        $user->driver_license = $request->driver_license;
        $user->driver_contact = $request->driver_contact;
        $user->note = $request->note;
        $user->save();

        return redirect()->route('admin.vehicle_info')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =Vehicle::find($request->id);
        $user->route_id = $request->route_id;
        $user->v_number = $request->v_number;
        $user->v_model = $request->v_model;
        $user->year_made = $request->year_made;
        $user->driver_name = $request->driver_name;
        $user->driver_license = $request->driver_license;
        $user->driver_contact = $request->driver_contact;
        $user->note = $request->note;
        $user->save();

        return redirect()->route('admin.vehicle_info')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = Vehicle::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.vehicle_info')->with('error','Deleted successfully!');
    }
}
