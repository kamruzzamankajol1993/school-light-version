@extends('admin.master.master')

@section('title')
@if(session()->get('locale') == 'sp')
{{ $adminLists->name }} 
@else

{{ $adminLists->username }} 
@endif

| {{ trans('message.sakho')}}
@endsection


@section('body')
 <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">{{ trans('ward.wardcounsilorinformation')}}</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ trans('message.sakho')}}</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.counsilor') }}">{{ trans('ward.wardcounsilor')}}</a></li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                           

                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">

                                    <img class=" mx-auto d-block" src="{{ asset('/') }}{{ $adminLists->image }}" alt="" width="60%">
                                    <div class="card-body">
                                        <h4 style="text-align:center">{{ trans('ward.wardcounsilorinformation')}}</h4>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">

                                                <tbody>
                                                    <tr>
                                                        <td style="text-align:right;">{{ trans('message.name')}}:</td>
                                                        <td>{{ $adminLists->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:right;">{{ trans('ward.Email')}}:</td>
                                                        <td>{{ $adminLists->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:right;">{{ trans('ward.Phone')}}:</td>
                                                        <td>{{ $adminLists->phone }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">

                                    <h4>{{ trans('ward.wardcounsilor')}}</h4>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">

                                              <tbody>
                                                <tr>
                                                    <td>{{ trans('ward.ward')}}:</td>
                                                    <td>

@if(session()->get('locale') == 'sp')
                                                        {{ $wards->ward_no_eng }}

                                                        @else

{{ $wards->ward_no_ban}}
                                                        @endif

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.cityName')}}</td>
                                                    <td>

@if(session()->get('locale') == 'sp')
                                                        {{ $wards->city_cor_name_eng }}

 @else


                   {{ $wards->city_cor_name_ban}}                                     @endif

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.District')}}:</td>
                                                    <td>

@if(session()->get('locale') == 'sp')
                                                        {{ $wards->district_eng }}

 @else

{{ $wards->district_ban }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.postoffice')}}:</td>
                                                    <td>
@if(session()->get('locale') == 'sp')
                                                        {{ $wards->post_office_eng }}
 @else

 {{ $wards->post_office_ban}}
                                                        @endif


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.postcode')}}:</td>
                                                    <td>
@if(session()->get('locale') == 'sp')
                                                        {{ $wards->postal_code_eng }}
 @else

{{ $wards->postal_code_ban}}
                                                        @endif



                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>


                                </div>

                                <div class="card-body">

                                    <h4>{{ trans('ward.ContactInformation')}}</h4>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">

                                             <tbody>
                                                <tr>
                                                    <td>{{ trans('ward.Email')}}:</td>
                                                    <td>{{ $wards->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.Phone')}}:</td>
                                                    <td>{{ $wards->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.office')}}:</td>
                                                    <td>

@if(session()->get('locale') == 'sp')
                                                        {{ $wards->office_address_eng }}


 @else
{{ $wards->office_address_ban }}

                                                        @endif


                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>


                                </div>
@if (Auth::guard('admin')->user()->can('payment.view'))
                                <div class="card-body">
                                    <h4 class="card-title mb-4">{{ trans('message.latesttransection')}}</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-centered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>{{ trans('message.transectionid')}}</th>
                                                    <th scope="col">{{ trans('message.date')}}</th>
                                                    <th scope="col">{{ trans('message.amount')}}</th>
                                                    <th scope="col" colspan="2">{{ trans('message.status')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($payment_history as $payment)
                                                               @php
      $currentDate21 =$payment->active_date;
      $currentDate212 =$payment->transection_id;
      $currentDate13 =$payment->payment_amount;
     
      $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
        'May','June','July','August','September','October','November','December','Saturday','Sunday',
        'Monday','Tuesday','Wednesday','Thursday','Friday');
      $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার' 
      );
      $convertedDATE21 = str_replace($engDATE, $bangDATE, $currentDate21);
       $convertedDATE212 = str_replace($engDATE, $bangDATE, $currentDate212);
 $convertedDATE13 = str_replace($engDATE, $bangDATE, $currentDate13);

      @endphp
                                                <tr>
                                                   

                                                         <th scope="row">

                                                   
             @if(session()->get('locale') == 'sp')
{{($payment->transection_id)}}


                                            @else
                                                        
{{ $convertedDATE212 }}
                                                        @endif



                                                    </th>
                                                    <td>

@if(session()->get('locale') == 'sp')

                                                        {{($payment->active_date)}}
@else

{{ $convertedDATE21 }}
@endif


                                                    </td>
                                                    <td>

@if(session()->get('locale') == 'sp')

                                                        {{($payment->payment_amount)}}
@else
{{ $convertedDATE13 }}


@endif

                                                    </td>
                                                    <td>
                                                        
                                                       @if($payment->status == 1)
                                                        <span class="badge badge-success">{{ trans('message.paid')}}</span>
                                                        @else
                                                        <span class="badge badge-warning">{{ trans('message.unpaid')}}</span>
                                                        @endif
                                                        
                                                        </td>
                                                </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
@endif
                                
                            </div>
                        </div>


                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

          
@endsection