@extends('admin.master.master')

@section('title')
{{ trans('notice.noticehistory') }}| {{ trans('message.sakho') }}
@endsection

@section('body')

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">{{ trans('notice.noticehistory') }}</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ trans('message.sakho') }}</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ trans('notice.noticehistory') }}</a></li>

                                </ol>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button" onclick="window.location.href='{{ route('admin.notice_admin.create') }}'">
                                        <i class="far fa-calendar-plus  mr-2"></i>{{ trans('notice.sendnotice') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="myTable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>{{ trans('message.sl') }}.</th>
                                                <th>{{ trans('message.date') }}</th>
                                                <th>{{ trans('notice.subject') }}</th>
                                                <th>{{ trans('notice.from') }}</th>
                                                <th>{{ trans('message.status') }}</th>
                                                <th>{{ trans('message.action') }}</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                        	@foreach($view_notification as $key=>$list)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $list->date}}</td>
                                                <td>{{ $list->subject }}</td>
                                                <td>

                                                	@foreach($adminLists as $admin)

                                                	@if($admin->id == $list->sender_id)

                                                	{{ $admin->name }}


                                                     @endif
                                                    @endforeach

                                                </td>
                                                <td>
                                                	@if($list->status == 0)
                                                	<span class="badge badge-danger">{{ trans('notice.not_Viewd') }}</span>

                                                	@else

<span class="badge badge-success">{{ trans('notice.view') }}</span>
                                                     @endif
                                                </td>
                                                
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary waves-light waves-effect" onclick="window.location.href='{{ route('admin.notice_admin.view',$list->id) }}'"><i class="fa fa-eye"></i></button>



                                    
                                                    </div>
                                                </td>
                                            </tr>
                                       @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection