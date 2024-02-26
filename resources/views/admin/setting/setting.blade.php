@extends('admin.master.master')
@section('title')
Setting
@stop
@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Setting</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $ins_name }} </a></li> --}}
                    <li class="breadcrumb-item active">{{ $ins_name }} </li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Edit Your Profile</h4>
            {{-- <p class="card-title-desc">Example of Nav pills</p> --}}

            <!-- Nav tabs -->
            <ul class="nav nav-pills mt-4" role="tablist">
                <li class="nav-item waves-effect  btn-sm waves-light">
                    <a class="nav-link active" data-bs-toggle="tab" href="#navpills-home"
                        role="tab">
                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                        <span class="d-none d-sm-block">About Setting</span>
                    </a>
                </li>
                <li class="nav-item waves-effect  btn-sm waves-light">
                    <a class="nav-link" data-bs-toggle="tab" href="#navpills-profile" role="tab">
                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-block">Password Setting</span>
                    </a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="navpills-home" role="tabpanel">
                    <form method="POST" action="{{ url('/') }}/admin/profile/update/{{ Auth::guard('admin')->user()->id  }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                       {{ method_field('PUT') }}
                        <div class="row clearfix mt-2">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control form-control-sm-label">
                                <label for="name"> Name: </label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" class="form-control form-control-sm" placeholder="Enter your name" name="name" value="{{  Auth::guard('admin')->user()->name }}">
                                      <input type="hidden" class="form-control form-control-sm" name="id" value="{{  Auth::guard('admin')->user()->id }}" placeholder="Post Title">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix mt-2">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control form-control-sm-label">
                                <label for="email_address_2">Email</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address_2" class="form-control form-control-sm" placeholder="Enter your email address" name="email" value="{{  Auth::guard('admin')->user()->email }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix mt-2">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control form-control-sm-label">
                                <label for="email_address_2">Phone</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address_2" class="form-control form-control-sm" placeholder="Enter your email address" name="phone" value="{{  Auth::guard('admin')->user()->phone }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix mt-2">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control form-control-sm-label">
                                <label for="email_address_2">Profile Image: </label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix mt-2">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control form-control-sm-label">
                                <label for="email_address_2">About: </label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="5" name="about" class="form-control form-control-sm">{{  Auth::guard('admin')->user()->about }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row clearfix mt-2">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control form-control-sm-label">
                                <label for="email_address_2">Address : </label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="5" name="address" class="form-control form-control-sm">{{  Auth::guard('admin')->user()->address }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <div class="row clearfix mt-2">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect  btn-sm">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="navpills-profile" role="tabpanel">
                    <form method="POST" action="{{ route('admin.password.update') }}" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="row clearfix mt-2">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control form-control-sm-label">
                                <label for="old_password">Old Password: </label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="old_password" class="form-control form-control-sm" placeholder="Enter your old password" name="old_password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix mt-2">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control form-control-sm-label">
                                <label for="password">New Password: </label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" class="form-control form-control-sm" placeholder="Enter your new password" name="password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix mt-2">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control form-control-sm-label">
                                <label for="confirm_password">Confirm Password: </label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="confirm_password" class="form-control form-control-sm" placeholder="Enter your new password again" name="password_confirmation">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row clearfix mt-2">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect  btn-sm">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
</div>


@stop
