@extends('admin.master.master')

@section('title')
{{ $adminLists->name }} | {{ trans('message.sakho')}}
@endsection


@section('body')
 <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">{{ trans('ward.wardadmininformation')}}</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ trans('message.sakho')}}</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.users') }}">{{ trans('ward.wardadmin')}}</a></li>
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
                                        <h4 style="text-align:center">{{ trans('ward.wardadmininformation')}}</h4>
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

                                    <h4>{{ trans('ward.WardInformation')}}</h4>
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

                                
                            </div>
                        </div>


                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

          
@endsection