@extends('admin.master.master')

@section('title')
{{ trans('ward.wardlist')}} | {{ $ins_name }}
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endsection
@section('body')

 <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">{{ trans('ward.wardlist')}} </h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ trans('message.sakho')}}</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ trans('ward.wardlist')}}</a></li>

                                </ol>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="float-right d-md-block">
                                <div class="dropdown">
                                    @if (Auth::guard('admin')->user()->can('ward.create'))
                                    <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button" onclick="window.location.href='{{ route('admin.ward.create') }}'">
                                        <i class="far fa-calendar-plus  mr-2"></i> {{ trans('ward.addnewward')}}
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
<div class="table-responsive">
                                    <table id="myTable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>{{ trans('message.sl')}}.</th>
                                                <th>{{ trans('message.wardno')}}.</th>
                                                <th>{{ trans('ward.caname')}}</th>
                                                <th>{{ trans('ward.cityName')}}</th>
                                                <th>{{ trans('ward.address')}}</th>
                                                <th>{{ trans('message.status')}}</th>
                                                <th>{{ trans('message.action')}}</th>
                                             </tr>
                                        </thead>


                                        <tbody>
                                              @php
                                                $main = date('Y-m-d');
                                              @endphp
                                        	@foreach($wardList as $key=>$list)

                        @php

       $currentDate245 =$key+1;

      $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
        'May','June','July','August','September','October','November','December','Saturday','Sunday',
        'Monday','Tuesday','Wednesday','Thursday','Friday');
      $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার'
      );

       $convertedDATE245  = str_replace($engDATE, $bangDATE, $currentDate245 );

      @endphp
                                            <tr>
                                                <td>

 @if(session()->get('locale') == 'en')

{{ $convertedDATE245  }}

                                            @else
                                                {{ $key + 1 }}
@endif

                                            </td>
                                                <td>

                                                    @if(session()->get('locale') == 'en')

{{ $list->ward_no_ban}}
                                                    @else

                                                    {{ $list->ward_no_eng }}

                                                 @endif


                                                </td>
                                                <td>


                                                	@foreach($wardAdminList as $new)
                                            @if($new->ward_id == $list->id)
                                             @if(session()->get('locale') == 'en')

{{ $new->username }} ,
                                                    @else
                                                {{ $new->name }} ,
                                                @endif
                                              @endif
                                                   @endforeach

                                                 </td>

                                                <td>
                                                    @if(session()->get('locale') == 'en')
{{ $list->city_cor_name_ban }}
                                                    @else
                                                	{{ $list->city_cor_name_eng }}
                                                    @endif
                                            </td>

                                                <td>
                                                    @if(session()->get('locale') == 'en')
                                                       {{  $list->office_address_ban}}

                                                    @else

                                                    {{  $list->office_address_eng}}
@endif

                                                </td>

                                                <td>

                                                	@foreach($paymentList as $new1)

                                                	@if($list->id == $new1->ward_id)
                                                	@if($new1->status == 1)

                                                 <span class="badge badge-success"> {{ trans('message.active')}}</span>

                                                	@else
                                                <span class="badge badge-danger"> {{ trans('message.inActive')}}</span>

                                                	@endif
                                                	@endif
@endforeach
                                                </td>

                                                <td>
                                                    <div class="btn-group">
                    <button type="button" class="btn btn-primary waves-light waves-effect" onclick="window.location.href='{{ route('admin.ward.view',$list->id) }}'"><i class="fa fa-eye"></i></button>


@if (Auth::guard('admin')->user()->can('ward.edit'))
                                                        <a  href="{{ route('admin.ward.edit',$list->id) }}" type="button" class="btn btn-primary waves-light waves-effect"
                                                        title="This is some text I want to display."><i class="fas fa-pencil-alt"></i></a>

@endif
@if (Auth::guard('admin')->user()->can('ward.delete'))
                                                        <button type="button" class="btn btn-primary waves-light waves-effect" onclick="deleteTag({{ $list->id }})">
                                                            <i class="fas fa-trash-alt"></i></button>
<form id="delete-form-{{ $list->id }}" action="{{ route('admin.ward.destroy',$list->id) }}" method="POST" style="display: none;">
                                                    @csrf

                                                </form>
                                                @endif
                                                @if (Auth::guard('admin')->user()->can('payment.add'))
                                                        	@foreach($paymentList as $new1)

                                                	@if($list->id == $new1->ward_id)
                                                	@if($new1->status == 1)

                                                <a  href="{{ route('admin.ward.inactive',$new1->id) }}" type="button"
                                                class="btn btn-primary waves-light waves-effect">{{ trans('message.inActive')}}</i></a>
<a href="{{ route('admin.ward.paymenthistory', ['id' => $list->id,'payment_id'=>$new1->id]) }}" type="button" class="btn btn-primary waves-light waves-effect"><i class="fas fa-money-bill-alt"></i></a>
                                                	@else
                                                 <a  href="{{ route('admin.ward.active',$new1->id) }}" type="button"
                                                 class="btn btn-primary waves-light waves-effect">{{ trans('message.active')}}</i></a>
<a href="{{ route('admin.ward.paymenthistory', ['id' => $list->id,'payment_id'=>$new1->id]) }}" type="button" class="btn btn-primary waves-light waves-effect"><i class="fas fa-money-bill-alt"></i></a>
                                                	@endif
                                                	@endif
@endforeach
@endif
 @if (Auth::guard('admin')->user()->can('payment.add'))



                                                          @endif
                                                    </div>
                                                </td>
                                            </tr>
                                           @endforeach

                                        </tbody>
                                    </table>
</div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!--  Modal content for the above example -->

<script type="text/javascript">
        function deleteTag(id) {
            swal({
                title: '{{ trans('notification.success_one')}}',
                text: "{{ trans('notification.success_two')}}",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ trans('notification.success_three')}}',
                cancelButtonText: '{{ trans('notification.success_four')}}',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        '{{ trans('notification.success_five')}}',
                        '{{ trans('notification.success_six')}} :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection
@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection
