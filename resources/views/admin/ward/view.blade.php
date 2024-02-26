@extends('admin.master.master')

@section('title')
@if(session()->get('locale') == 'en')
{{ $wards->ward_no_ban }}
@else

{{ $wards->ward_no_eng}}
@endif
 | {{ $ins_name }}
@endsection


@section('body')
 <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">{{ trans('ward.wardcounsilinfo')}}</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> {{ trans('message.sakho')}}</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.ward') }}">{{ trans('ward.ward')}}</a></li>
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

                                                         @if(session()->get('locale') == 'en')
{{ $wards->office_address_ban }}

                                                         @else

                                                        {{ $wards->office_address_eng }}

                                                        @endif


                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>


                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">

                                    <h4>{{ trans('ward.wardinfoenglish')}}</h4>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">

                                            <tbody>
                                                <tr>
                                                    <td>{{ trans('message.wardno')}}:</td>
                                                    <td>{{ $wards->ward_no_eng }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.cityName')}}</td>
                                                    <td>{{ $wards->city_cor_name_eng }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.District')}}:</td>
                                                    <td>{{ $wards->district_eng }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.postoffice')}}:</td>
                                                    <td>{{ $wards->post_office_eng }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.postcode')}}:</td>
                                                    <td>{{ $wards->postal_code_eng }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>


                                </div>

                               <div class="card-body">

                                    <h4>{{ trans('ward.wardinfobangla')}}</h4>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">

                                            <tbody>
                                                <tr>
                                                    <td>{{ trans('message.wardno')}}:</td>
                                                    <td>{{ $wards->ward_no_ban }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.cityName')}}</td>
                                                    <td>{{ $wards->city_cor_name_ban }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.District')}}:</td>
                                                    <td>{{ $wards->district_ban }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.postoffice')}}:</td>
                                                    <td>{{ $wards->post_office_ban }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('ward.postcode')}}:</td>
                                                    <td>{{ $wards->postal_code_ban }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>


                                </div>


                            </div>
                        </div>
<div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">{{ trans('ward.bimageLa')}}</div>
                                <div class="card-body">
                                    <img src="{{asset('/')}}{{$wards->border_image }}" height="170px" width="300px" />
            </div>
            </div>

    </div>


    <div class="col-lg-4">
                        <div class="card">
                                <div class="card-header">{{ trans('ward.bimageLo')}}</div>
                                <div class="card-body">
                                   <center><img src="{{asset('/')}}{{$wards->blong }}" height="300px" width="200px" /></center>
            </div>
            </div>

    </div>


    <div class="col-lg-4">
                     <div class="card">
                                <div class="card-header">{{ trans('ward.Logo')}}</div>
                                <div class="card-body">
                                   <center><img src="{{asset('/')}}{{$wards->logo }}" height="100px" width="100px" /></center>
            </div>
            </div>

    </div>

                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


@endsection
