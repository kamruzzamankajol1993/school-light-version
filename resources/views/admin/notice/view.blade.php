@extends('admin.master.master')

@section('title')
{{ trans('notice.noticeforadmin') }}| {{ trans('message.sakho') }}
@endsection

@section('body')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">{{ trans('notice.noticeforadmin') }}</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="index.php">{{ trans('message.sakho') }}</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.notice_admin')}}">{{ trans('notice.allnotice') }}</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        

                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label>{{ trans('notice.noticebangla') }}:</label>
                                               <p>{{ $view_notification->subject }}</p>
                                            </div>

                                           

                                            <div class="form-group col-lg-12">
                                                <label>{{ trans('notice.des') }}:</label>
                                                <p>{{ $view_notification->des }}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div> <!-- end col -->

                          


                        </div> <!-- end row -->
                    



                </div> <!-- container-fluid -->
            </div>

@endsection