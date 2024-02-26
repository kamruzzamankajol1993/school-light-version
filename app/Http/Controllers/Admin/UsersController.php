<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Ward;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\AdminNotice;

class UsersController extends Controller
{

	public $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }


    public function index()
    {
    	if (is_null($this->user) || !$this->user->can('admin.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any admin !');
        }

        $wardID = Auth::guard('admin')->user()->ward_id;
        $adminID = Auth::guard('admin')->user()->id;

        if(empty($wardID)){
 $wardID = Auth::guard('admin')->user()->ward_id;
        $adminID = Auth::guard('admin')->user()->id;
            $wards = Ward::latest()->get();
         $roles  = Role::all();

        $users = Admin::where('cstatus',0)->latest()->get();
        $notificationLists = AdminNotice::whereIn('admin_id',[$adminID,'all'])->where('status',0)->count();


        }else{
 $wardID = Auth::guard('admin')->user()->ward_id;
        $adminID = Auth::guard('admin')->user()->id;
            $wards = Ward::where('id',$wardID)->latest()->get();
         $roles  = Role::all();

        $users = Admin::where('ward_id',$wardID)->where('cstatus',0)->latest()->get();
        $notificationLists = AdminNotice::whereIn('admin_id',[$adminID,'all'])->where('status',0)->count();



        }


        return view('admin.users.index', compact('users','wards','roles','notificationLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if (is_null($this->user) || !$this->user->can('admin.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any admin !');
        }
        $roles  = Role::all();
        //dd($roles);
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create New User
        $user = new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->ward_id = $request->ward_id;
        $user->cstatus = 0;
        $user->password = Hash::make($request->password);
         if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/upload/adminimage/', $filename);
            $user->image = 'public/upload/adminimage/' . $filename;
        }
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }


        return redirect()->route('admin.users')->with('success','Created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	if (is_null($this->user) || !$this->user->can('admin.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any admin !');
        }

        $wardID = Auth::guard('admin')->user()->ward_id;

        if(empty($wardID)){

            $adminID = Auth::guard('admin')->user()->id;
        $wards = Ward::latest()->get();
        $user = Admin::find($id);
        $roles  = Role::all();
        $notificationLists = AdminNotice::whereIn('admin_id',[$adminID,'all'])->where('status',0)->count();

        return view('admin.users.edit', compact('user', 'roles','wards','notificationLists'));

        }else{


            $adminID = Auth::guard('admin')->user()->id;
        $wards = Ward::latest()->get();
        $user = Admin::find($id);
        $roles  = Role::all();
        $notificationLists = AdminNotice::whereIn('admin_id',[$adminID,'all'])->where('status',0)->count();

        return view('admin.users.admin_wise_edit', compact('user', 'roles','wards','notificationLists'));

        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Create New User
        $user = Admin::find($request->id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:users,email,' . $request->id,
            'password' => 'nullable|min:6|confirmed',
        ]);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->cstatus = 0;
         if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/upload/adminimage/', $filename);
            $user->image = 'public/upload/adminimage/' . $filename;
        }
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        return redirect()->route('admin.users')->with('info','Updated successfully!');
    }


    public function update_admin(Request $request)
    {
        // Create New User
        $user = Admin::find($request->id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:users,email,' . $request->id,
            'password' => 'nullable|min:6|confirmed',
        ]);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->cstatus = 0;
         if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/upload/adminimage/', $filename);
            $user->image = 'public/upload/adminimage/' . $filename;
        }

        $user->save();



        return redirect()->back()->with('info','Updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	if (is_null($this->user) || !$this->user->can('admin.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to delete any admin !');
        }
        $user = Admin::find($id);
        if (!is_null($user)) {
            $user->delete();
        }


        return redirect()->route('admin.users')->with('error','Deleted successfully!');
    }


     public function view($id)
    {

        $wardID = Auth::guard('admin')->user()->ward_id;
        $adminID = Auth::guard('admin')->user()->id;




        $wardid =Admin::where('id', $id)->value('ward_id');

        $wards = Ward::where('id', $wardid)->first();


        $adminLists = Admin::where('id', $id)->first();

        $notificationLists = AdminNotice::whereIn('admin_id',[$adminID,'all'])->where('status',0)->count();


        return view('admin.ward.admin.view', ['wards' => $wards, 'adminLists' => $adminLists,'notificationLists'=>$notificationLists]);
    }
}
