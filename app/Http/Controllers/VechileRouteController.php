<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VechileRoute;
class VechileRouteController extends Controller
{
    public function index(){


        $route_details = VechileRoute::latest()->get();


        return view('admin.vechile_route.index',['route_details'=>$route_details,]);
    }





    public function store(Request $request){


        // Validation Data
        $request->validate([
            'route_title' => 'required|max:350',

        ]);

        // Create New User
        $user = new VechileRoute();
        $user->route_title = $request->route_title;
        $user->fare = $request->fare;

        $user->save();

        return redirect()->route('admin.vehicle_route')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =VechileRoute::find($request->id);
        $user->route_title = $request->route_title;
        $user->fare = $request->fare;
        $user->save();

        return redirect()->route('admin.vehicle_route')->with('success','Updated successfully!');


    }


    public function destroy($id){

         $user = VechileRoute::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.vehicle_route')->with('error','Deleted successfully!');
    }
}
