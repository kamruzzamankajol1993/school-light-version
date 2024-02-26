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
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
 <form class="custom-validation" action="{{route('admin.ward.paymenthistoryUpdate')}}" method="post" enctype="multipart/form-data">
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
                                                    
                                                    <option value="By Annualy" {{$wardedit == 'By Annualy' ? 'selected':''}}>{{ trans('ward.annual')}}</option>
                                                    <option value="Quterly"{{$wardedit == 'Quterly' ? 'selected':''}}>{{ trans('ward.quater')}}</option>
                                                    <option value="Monthly"{{$wardedit == 'Monthly' ? 'selected':''}}>{{ trans('ward.month')}}</option>
                                                </select>
                                            </div>
                                            
                                            
                                             <div class="form-group">
                                                <label>{{ trans('ward.month')}}</label>
                                                <select id="" name="month" class="form-control">
                                                    <option value="January" {{$wardedit->month == 'January' ? 'selected':''}}>January</option>
                                                    <option value="February" {{$wardedit->month == 'February' ? 'selected':''}}>February</option>
                                                    <option value="March" {{$wardedit->month == 'March' ? 'selected':''}}>March</option>
                                                    <option value="April" {{$wardedit->month == 'April' ? 'selected':''}}>April</option>
                                                    <option value="May" {{$wardedit->month == 'May' ? 'selected':''}}>May</option>
                                                    <option value="June" {{$wardedit->month == 'June' ? 'selected':''}}>June</option>
                                                    <option value="July" {{$wardedit->month == 'July' ? 'selected':''}}>July</option>
                                                    <option value="August" {{$wardedit->month == 'August' ? 'selected':''}}>August</option>
                                                    <option value="September" {{$wardedit->month == 'September' ? 'selected':''}}>September</option>
                                                    <option value="October" {{$wardedit->month == 'October' ? 'selected':''}}>October</option>
                                                    <option value="November" {{$wardedit->month == 'November' ? 'selected':''}}>November</option>
                                                    <option value="December" {{$wardedit->month == 'December' ? 'selected':''}}>December</option>

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
                                                    <option value="Bkash" {{$wardedit == 'Bkash' ? 'selected':''}}>{{ trans('ward.bcash')}}</option>
                                                    <option value="Nogod" {{$wardedit == 'Nogod' ? 'selected':''}}>{{ trans('ward.nogod')}}</option>
                                                    <option value="Hand Cash" {{$wardedit == 'Hand Cash' ? 'selected':''}}>{{ trans('ward.Handcash')}}</option>
                                                    <option value="Payment Gateway" {{$wardedit == 'Payment Gateway' ? 'selected':''}}>{{ trans('ward.paymentgateway')}}</option>
                                                </select>
                                            </div>

                                                <div class="form-group">
                                                    <label>{{ trans('ward.paymentamount')}}:</label>
                                                    <input type="text" class="form-control" value="{{$wardedit->payment_amount}}" name="payment_amount"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>{{ trans('ward.payble')}}:</label>
                                                    <input type="text" name="payable_amount" value="{{$wardedit->payable_amount}}" class="form-control" />
                                                    <input type="hidden" name="id" value="{{$wardedit->id}}" class="form-control" />
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
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            
@endsection
@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection