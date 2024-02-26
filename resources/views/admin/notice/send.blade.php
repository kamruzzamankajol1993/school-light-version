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
                                <h4 class="font-size-18">{{ trans('notice.noticeforadmin') }} </h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="index.php">{{ trans('message.sakho') }}</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.notice_admin')}}">{{ trans('notice.allnotice') }}</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form class="custom-validation" action="{{route('admin.notice_admin.store')}}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ trans('notice.noticeforadmin') }}:</h4>
                                        <p class="card-title-desc">{{ trans('notice.fill') }}</p>

                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>{{ trans('notice.noticebangla') }}:</label>
                                                <input type="text" class="form-control" name="subject" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>{{ trans('notice.selectad') }}:</label>
                                                <select id="" name="admin_id" class="form-control">
                                                    <option value="">--{{ trans('message.select') }}--</option>
                                                    <option value="all">All</option>
                                                    @foreach($adminLists as $admin)
                                                    <option value="{{$admin->id}}">{{$admin->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <label>{{ trans('notice.des') }}:</label>
                                                <textarea class="form-control" placeholder="" rows="5" id="comment" name="des"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div> <!-- end col -->

                            <div class="col-lg-12">
                                <div class="float-right d-none d-md-block">
                                    <div class="form-group mb-4">
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-lg  waves-effect waves-light mr-1">
                                                {{ trans('message.add') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div> <!-- end row -->
                    </form>



                </div> <!-- container-fluid -->
            </div>

@endsection