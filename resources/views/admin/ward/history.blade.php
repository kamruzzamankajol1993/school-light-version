@extends('admin.master.master')

@section('title')
{{ trans('ward.phis')}} | {{ trans('message.sakho')}}
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
                                <h4 class="font-size-18">{{ trans('ward.wardlist')}}</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ trans('message.sakho')}}</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.ward')}}">{{ trans('ward.wardlist')}}</a></li>
<li class="breadcrumb-item"><a href="javascript: void(0);">{{ trans('ward.phis')}}</a></li>
                                </ol>
                            </div>
                        </div>

                          <div class="col-sm-6">
                            <div class="float-right d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button" data-toggle="modal" data-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i>{{ trans('ward.renew')}}
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
<div class="table-responsive">
                                    <table id="myTable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>{{ trans('message.sl')}}.</th>
                                                <th>{{ trans('message.wardno')}}.</th>
                                                <th>{{ trans('ward.month')}}</th>
                                                <th>{{ trans('message.transectionid')}}</th>
                                               
                                               <th>{{ trans('ward.PaymentMethod')}}</th>
                                                <th>{{ trans('ward.payble')}}</th>
                                                <th>{{ trans('ward.paymentamount')}}</th>
                                            <th>{{ trans('ward.due')}}</th>
                                                <th>{{ trans('message.date')}}</th>
                                                <th>{{ trans('message.status')}}</th>
                                                <th>{{ trans('message.action')}}</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                        	@foreach($payments as $key=>$payment)
                                               @php
   
       $currentDate245 =$key+1;
       $ward_name = $wardsName;
       $month_name = $payment->month;
       $tarnsectionId = $payment->transection_id;
       $payable_amount = $payment->payable_amount;
       $price = $payment->price;
       $due = $payment->due;
       $active_date = $payment->active_date;
     
      $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
        'May','June','July','August','September','October','November','December','Saturday','Sunday',
        'Monday','Tuesday','Wednesday','Thursday','Friday');
      $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার' 
      );
    
       $convertedDATE245  = str_replace($engDATE, $bangDATE, $currentDate245 );
        $converted_ward_name  = str_replace($engDATE, $bangDATE, $ward_name);

        $converted_tarnsectionId = str_replace($engDATE, $bangDATE, $tarnsectionId);
        $converted_month_name  = str_replace($engDATE, $bangDATE, $month_name);
        $converted_payable_amount  = str_replace($engDATE, $bangDATE, $payable_amount);
        $converted_price = str_replace($engDATE, $bangDATE, $price);
        $converted_due  = str_replace($engDATE, $bangDATE, $due);
        $converted_active_date = str_replace($engDATE, $bangDATE, $active_date);
     
      @endphp
                                            <tr>
                                                <td> @if(session()->get('locale') == 'en')

{{ $convertedDATE245  }}

                                            @else
                                                {{ $key + 1 }}
@endif</td>
                                                <td>


                                                 @if(session()->get('locale') == 'en')   

{{ $converted_ward_name }}
                                                 @else

                                                {{ $wardsName}}

@endif

                                            </td>
                                                <td>

                                                     @if(session()->get('locale') == 'en')   

{{ $converted_month_name }}
                                                 @else

                                                    {{$payment->month}}

@endif
                                                </td>
<td>
     @if(session()->get('locale') == 'en')   

{{ $converted_tarnsectionId }}
                                                 @else
    {{$payment->transection_id}}
@endif
</td>
                                                 
                                                
                                                <td>{{ $payment->method }}</td>
                                               <td>

                                                 @if(session()->get('locale') == 'en')   
{{ $converted_payable_amount }}

                                                 @else
                                                {{ $payment->payable_amount }}

@endif

                                            </td>
                                               <td>
 @if(session()->get('locale') == 'en')   
{{ $converted_price }}

                                                 @else

                                                {{ $payment->price }}

@endif

                                            </td>
                                                <td>


 @if(session()->get('locale') == 'en') 


 {{ $converted_due }}  


                                                 @else
                                                    {{ $payment->due }}

@endif

                                                </td>
                                                
                                                <td>

 @if(session()->get('locale') == 'en')  

 {{ $converted_active_date }} 


                                                 @else
                                                    {{ $payment->active_date }}

@endif

                                                </td>
                                               
                                                  
                                               <td>@if($payment->status == 1)

{{ trans('message.active')}}
                                                	 @else

{{ trans('message.inActive')}}                                      	 @endif</td>
                                                <td>
                                                    <div class="btn-group">
                                                        
                                                      
                                                        <a  href="{{ route('admin.ward.paymenthistory_Edit',$payment->id) }}" type="button" 
                                                        class="btn btn-primary waves-light waves-effect"><i class="fa fa-edit"></i></a>
                                                       
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
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myLargeModalLabel">{{ trans('ward.renew')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="custom-validation" action="{{route('admin.renew_payment')}}" method="post" enctype="multipart/form-data">
                            	@csrf
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label>{{ trans('message.wardno')}}:</label>
                                                   <input type="text" name="ward_id" value="{{ $wardsName}}" class="form-control" />
                                                </div>
                                                
                                                
                                               <div class="form-group">
                                                <label>{{ trans('ward.subtype')}} :</label>
                                                <select id="" name="subscription_type" class="form-control">
                                                    <option value="">--{{ trans('message.select')}}--</option>
                                                    
                                                    <option value="By Annualy" {{$sub_type == 'By Annualy' ? 'selected':''}}>{{ trans('ward.annual')}}</option>
                                                    <option value="Quterly"{{$sub_type == 'Quterly' ? 'selected':''}}>{{ trans('ward.quater')}}</option>
                                                    <option value="Monthly"{{$sub_type == 'Monthly' ? 'selected':''}}>{{ trans('ward.month')}}</option>
                                                </select>
                                            </div>
                                            
                                            
                                             <div class="form-group">
                                                <label>{{ trans('ward.month')}}</label>
                                                <select id="" name="month" class="form-control">
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="">March</option>
                                                    <option value="March">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>

                                                </select>
                                            </div>

                                               
                                                

                                                


                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group">
                                                <label>{{ trans('ward.PaymentMethod')}}:</label>
                                                <select id="" name="method" class="form-control">
                                                    <option value="">--{{ trans('message.select')}}--</option>
                                                    <option value="Bkash" {{$method_payment == 'Bkash' ? 'selected':''}}>{{ trans('ward.bcash')}}</option>
                                                    <option value="Nogod" {{$method_payment == 'Nogod' ? 'selected':''}}>{{ trans('ward.nogod')}}</option>
                                                    <option value="Hand Cash" {{$method_payment == 'Hand Cash' ? 'selected':''}}>{{ trans('ward.Handcash')}}</option>
                                                    <option value="Payment Gateway" {{$method_payment == 'Payment Gateway' ? 'selected':''}}>{{ trans('ward.paymentgateway')}}</option>
                                                </select>
                                            </div>

                                                <div class="form-group">
                                                    <label>{{ trans('ward.paymentamount')}}:</label>
                                                    <input type="text" class="form-control" value="{{$paid_amount}}" name="payment_amount"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>{{ trans('ward.payble')}}:</label>
                                                    <input type="text" name="payable_amount" value="{{$paid_amount}}" class="form-control" />
                                                    <input type="hidden" name="payment_id" value="{{$payment_id}}" class="form-control" />
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
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
@endsection
@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection