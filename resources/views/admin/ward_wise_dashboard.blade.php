@extends('admin.master.master')

@section('title')
{{ trans('message.dashboard')}}| {{ trans('message.sakho')}}
@endsection


@section('body')
@php
      $currentDate =$peopleCount;
      $currentDate1 =$certificateCount;
      $currentDate2 =$currentMonthCount;
      $currentDate3 =$previousMonthCount;
      $currentDate4 =$char_cer;
      $currentDate5= $income_cer;
      $currentDate6= $family_cer;
      $currentDate7=  $peopleCount;
      $currentDate8= $per_male_user;
      $currentDate9= $per_female_user;
      $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
        'May','June','July','August','September','October','November','December','Saturday','Sunday',
        'Monday','Tuesday','Wednesday','Thursday','Friday');
      $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার' 
      );
      $convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
      $convertedDATE1 = str_replace($engDATE, $bangDATE, $currentDate1);
      $convertedDATE2 = str_replace($engDATE, $bangDATE, $currentDate2);
      $convertedDATE3 = str_replace($engDATE, $bangDATE, $currentDate3);
      $convertedDATE4 = str_replace($engDATE, $bangDATE, $currentDate4);
      $convertedDATE5 = str_replace($engDATE, $bangDATE, $currentDate5);
      $convertedDATE6 = str_replace($engDATE, $bangDATE, $currentDate6);
      $convertedDATE7 = str_replace($engDATE, $bangDATE, $currentDate7);
      $convertedDATE8 = str_replace($engDATE, $bangDATE, $currentDate8);
      $convertedDATE9 = str_replace($engDATE, $bangDATE, $currentDate9);
//echo "$convertedDATE";
      @endphp
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                   <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">{{ trans('message.dashboard')}}</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item active">{{ trans('message.wellcome')}}</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <img src="{{ asset('/') }}public/admin/assets/images/services-icon/01.png" alt="">
                                        </div>
                                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">{{ trans('message.totaluser')}}</h5>
                                        <h4 class="font-weight-medium font-size-24">


                                            @if(session()->get('locale') == 'sp')

{{ $peopleCount }}

                                            @else
                                            
                                             {{ $convertedDATE }}

                                         @endif

                                            <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right">
                                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                        </div>

                                        <p class="text-white-50 mb-0 mt-1">{{ trans('message.fromthebegin')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <img src="{{ asset('/') }}public/admin/assets/images/services-icon/02.png" alt="">
                                        </div>
                                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">{{ trans('message.totalcer')}}</h5>
                                        <h4 class="font-weight-medium font-size-24">
 @if(session()->get('locale') == 'sp')

      {{ $certificateCount }}

                                            @else

                  {{ $convertedDATE1 }}                           


@endif

                                            <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>

                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right">
                                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                        </div>

                                        <p class="text-white-50 mb-0 mt-1">{{ trans('message.fromthebegin')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <img src="{{ asset('/') }}public/admin/assets/images/services-icon/03.png" alt="">
                                        </div>
                                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">{{ trans('message.currentmonthcertificate')}}</h5>
                                        <h4 class="font-weight-medium font-size-24">

 @if(session()->get('locale') == 'sp')

  {{ $currentMonthCount }}

                                            @else
                                            
{{ $convertedDATE2 }} 
@endif

                                            <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right">
                                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                        </div>

                                        <p class="text-white-50 mb-0 mt-1">{{ trans('message.sincethismonth')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <img src="{{ asset('/') }}public/admin/assets/images/services-icon/04.png" alt="">
                                        </div>
                                        <h5 class="font-size-16 text-uppercase mt-0 text-white-50">{{ trans('message.lastmonthcertificate')}}</h5>
                                        <h4 class="font-weight-medium font-size-24">


 @if(session()->get('locale') == 'sp')

     {{ $previousMonthCount }}

                                            @else
                                    {{ $convertedDATE3 }}         
@endif


                                            <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right">
                                            <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                        </div>

                                        <p class="text-white-50 mb-0 mt-1">{{ trans('message.sincelastmonth')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">{{ trans('message.monthlycertificateprint')}}</h4>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div>
                                                <div id="chart-with-area" class="ct-chart earning ct-golden-section">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="text-center">
                                                        <p class="text-muted mb-4">{{ trans('message.thismonth')}}</p>
                                                        <h3>
@if(session()->get('locale') == 'sp')

  {{ $currentMonthCount }}

                                            @else
                                         {{ $convertedDATE2 }}  

@endif


                                                    </h3>
                                                       
                                                        <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">4/5</span>
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="text-center">
                                                        <p class="text-muted mb-4">{{ trans('message.lastmonth')}}</p>
                                                        <h3>


                                              @if(session()->get('locale') == 'sp')

 {{ $previousMonthCount }}

                                            @else
                         {{ $convertedDATE3 }}                    
@endif



                                                    </h3>
                                                        
                                                        <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">3/5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <!-- end card -->
                        </div>

                         <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <h4 class="card-title mb-4">{{ trans('message.certicateanalysic')}}</h4>
                                    </div>
                                    <div class="wid-peity mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted">{{ trans('message.charcer')}}</p>
                                                    <h5 class="mb-4">
                                                         @if(session()->get('locale') == 'sp')

  {{ $char_cer}}

                                            @else
{{ $convertedDATE4 }}
                                                    

@endif
                                                </h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wid-peity mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted">{{ trans('message.incomcer')}}</p>
                                                    <h5 class="mb-4">

                                                         @if(session()->get('locale') == 'sp')

 {{ $income_cer}}

                                            @else
{{ $convertedDATE5 }} 
                                                    

@endif
                                                </h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted">{{ trans('message.familycer')}}</p>
                                                    <h5>
                                                         @if(session()->get('locale') == 'sp')

 {{$family_cer}}

                                            @else
{{ $convertedDATE6 }} 
                                                    
@endif

                                                </h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <span class="peity-line" data-width="100%" 
                                                    data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">
                                                        6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">{{ trans('message.usergenderreport')}}</h4>

                                    <div class="cleafix">
                                        <p class="float-left"><i class="mdi mdi-calendar mr-1 text-primary"></i> @if(session()->get('locale') == 'sp')

  Jan 01 - Dec 31

                                            @else
                                        জানুয়ারী ০১ - ৩১ ডিসেম্বর 
@endif</p>
                                        <h5 class="font-18 text-right">@if(session()->get('locale') == 'en')

 {{ $peopleCount }}

                                            @else
     {{ $convertedDATE7 }}                                    

@endif</h5>
                                    </div>

                                    <div id="ct-donut" class="ct-chart wid"></div>

                                    <div class="mt-4">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>{{ trans('message.male')}}</td>
                                                    <td class="text-right">


@if(session()->get('locale') == 'sp')

      {{$per_male_user}}%

                                            @else
                                                    
{{ $convertedDATE8 }}% 

@endif
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('message.female')}}</td>
                                                    <td class="text-right">

@if(session()->get('locale') == 'sp')

  {{$per_female_user}}%

                                            @else
     {{ $convertedDATE9 }}%                                                
@endif

                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">{{ trans('message.todays_activity')}}</h4>
                                    <ol class="activity-feed">
                                        @foreach($todays_activity as $activity)

                                                                     @php
      $currentDate21 =$activity->date;
     
     
      $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
        'May','June','July','August','September','October','November','December','Saturday','Sunday',
        'Monday','Tuesday','Wednesday','Thursday','Friday');
      $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার' 
      );
      $convertedDATE21 = str_replace($engDATE, $bangDATE, $currentDate21);
       

      @endphp
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">

                                                 @if(session()->get('locale') == 'sp')
                                                    {{$activity->date}}
                                                  @else

                                                  {{ $convertedDATE21 }}

                                                  @endif

                                                </span>
                                                <span class="activity-text">
                                                    
                                                    @foreach($certificatesNames as $cer)
                                                    @if($cer->id == $activity->certificate_id)

                                                     @if(session()->get('locale') == 'sp')
                                                   {{$cer->name_eng}}
                                                   @else


                                                {{$cer->name_ban}}
                                                   @endif
                                                    
                                                    @endif
                                                    @endforeach
                                                    </span>
                                            </div>
                                        </li>
                                       @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
@if (Auth::guard('admin')->user()->can('payment.view'))
                         <div class="col-xl-5">
                            <div class="card">
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
                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">{{ trans('message.latestcertificateprint')}}</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-centered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    
                                                       <th scope="col">#</th>
                                                    <th scope="col">{{ trans('message.name')}}</th>
                                                    <th scope="col">{{ trans('message.date')}}</th>
                                                    <th scope="col">{{ trans('message.certificatename')}}</th>
                                                    <th scope="col">{{ trans('message.editedby')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($latest_cet_pri as $key=>$pri)

                                                                                  @php
      
      
       $currentDate245 =$key+1;

       $currentDate2451 =$pri->date;
     
      $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
        'May','June','July','August','September','October','November','December','Saturday','Sunday',
        'Monday','Tuesday','Wednesday','Thursday','Friday');
      $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার' 
      );
     
       $convertedDATE245  = str_replace($engDATE, $bangDATE, $currentDate245 );
       $convertedDATE2451  = str_replace($engDATE, $bangDATE, $currentDate2451 );
      @endphp
                                                <tr>
                                                    <th scope="row">


 @if(session()->get('locale') == 'sp')
                                                    {{$key+1}}
                                                    @else


{{      $convertedDATE245 }}

                                                    @endif


                                                </th>
                                                    <td>
                                                        
                                                        @foreach($peopleAll as $peo)
                                                        
                                                        @if($peo->id == $pri->user_id)

                                                 @if(session()->get('locale') == 'sp')
                                                       {{$peo->name_eng}}
                                                  @else
                                                             {{$peo->name_ban}}

                                                  @endif


                                                        @endif
                                                        @endforeach
                                                        </td>
                                                    <td>

                                                  @if(session()->get('locale') == 'sp')
                                                        {{$pri->date}}
                                                  @else
                                                          {{ $convertedDATE2451 }}

                                                  @endif

                                                    </td>
                                                    <td> @foreach($certificatesNames as $cer)
                                                    @if($cer->id == $pri->certificate_id)


                                                   @if(session()->get('locale') == 'sp')
                                                       {{$cer->name_eng}}
                                                  @else
                                                             {{$cer->name_ban}}

                                                  @endif
                                                    
                                                    @endif
                                                    @endforeach</td>
                                                    <td>
                                               @foreach($edit_person_list as $newlist)

                                               @if($pri->other_id == $newlist->id)

                                                @if(session()->get('locale') == 'sp')

{{ $newlist->name }}
                                                @else


{{ $newlist->name }}
                                                @endif
                                                       
                                                 @endif
                                                 @endforeach
                                                    </td>
                                                </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->



                </div>
                <!-- container-fluid -->
            </div>
@endsection