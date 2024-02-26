@extends('admin.master.master')

@section('title')
{{ trans('role.dataentry')}} | {{ trans('message.sakho')}}
@endsection


@section('body')

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">{{ trans('role.dataentry')}}</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">{{ trans('message.sakho')}}</a></li>
                                    
                                    <li class="breadcrumb-item"><a href="#">{{ trans('role.dataentry')}}</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                   <form class="custom-validation" action="{{ route('admin.import_civildata') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">

                                               

                                                <div class="form-group">
                                                    <label>{{ trans('role.file')}}:</label>
                                                    <input type="file" name="file"  class="form-control" />
                                                 
                                                </div>

                                               


                                            </div>

                                        </div>
                                    </div>

                             
                                    <div class="col-lg-12">
                                        <div class="float-right d-none d-md-block">
                                            <div class="form-group mb-4">
                                                <div>
                                                    <button type="submit" class="btn btn-primary btn-lg  waves-effect waves-light mr-1">
                                                        {{ trans('message.add')}}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </form>



                </div> <!-- container-fluid -->
            </div>

@endsection