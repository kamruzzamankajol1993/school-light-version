@extends('admin.master.master')

@section('title')
{{ trans('ward.uw')}}  | {{ $ins_name }}
@endsection


@section('body')

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">{{ trans('ward.upd')}} </h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ trans('message.sakho')}}</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.ward') }}">{{ trans('ward.wardlist')}}</a></li>
                                    <li class="breadcrumb-item"><a href="#">{{ trans('ward.uw')}} </a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form class="custom-validation" action="{{ route('admin.ward.update') }}" method="post" enctype="multipart/form-data">
                    	@csrf
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">{{ trans('ward.wardinfoenglish')}}  :</h4>

                                        <div class="form-group">
                                            <label>{{ trans('message.wardno')}}:</label>
                                            <input type="text" class="form-control" name="ward_no_eng" value="{{ $wards->ward_no_eng }}" />

                                             <input type="hidden" class="form-control" name="id" value="{{ $wards->id }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.cityName')}}:</label>
                                            <input type="text" class="form-control" name="city_cor_name_eng" value="{{ $wards->city_cor_name_eng }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.District')}}:</label>
                                            <input type="text" class="form-control" name="district_eng" value="{{ $wards->district_eng }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.postcode')}}:</label>
                                            <input type="text" class="form-control" name="postal_code_eng" value="{{ $wards->postal_code_eng }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.postoffice')}}:</label>
                                            <input type="text" class="form-control" name="post_office_eng" value="{{ $wards->post_office_eng }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.pollice')}}:</label>
                                            <input type="text" class="form-control" name="police_station_eng" value="{{ $wards->police_station_eng }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.office')}}:</label>
                                            <input type="text" class="form-control" name="office_address_eng" value="{{ $wards->office_address_eng }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.Email')}}:</label>
                                            <input type="text" class="form-control" name="email" value="{{ $wards->email }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.bimageLa')}}</label>
                                            <input type="file" class="form-control" name="border_image">
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.bimageLo')}}</label>
                                            <input type="file" class="form-control" name="blong">
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.Logo')}}</label>
                                            <input type="file" class="form-control" name="logo">
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">{{ trans('ward.wardinfobangla')}}:</h4>

                                        <div class="form-group">
                                            <label>ওয়ার্ড নং :</label>
                                            <input type="text" class="form-control" name="ward_no_ban" value="{{ $wards->ward_no_ban }}"/>
                                        </div>

                                        <div class="form-group">
                                            <label>সিটি কর্পোরেশন নাম :</label>
                                            <input type="text" class="form-control" name="city_cor_name_ban" value="{{ $wards->city_cor_name_ban }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>জেলা :</label>
                                            <input type="text" class="form-control" name="district_ban" value="{{ $wards->district_ban }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>পোস্ট নং :</label>
                                            <input type="text" class="form-control" name="postal_code_ban" value="{{ $wards->postal_code_ban }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>ডাকঘর :</label>
                                            <input type="text" class="form-control" name="post_office_ban" value="{{ $wards->post_office_ban }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>থানা :</label>
                                            <input type="text" class="form-control" name="police_station_ban" value="{{ $wards->police_station_ban }}" />
                                        </div>

                                        <div class="form-group">
                                            <label>কার্যালয়:</label>
                                            <input type="text" class="form-control" name="office_address_ban" value="{{ $wards->office_address_ban }}"/>
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.Phone')}}:</label>
                                            <input type="text" class="form-control" name="phone" value="{{ $wards->phone }}"/>
                                        </div>

                                    </div>

                                </div>
                            </div>




                            <div class="col-lg-12">
                                <div class="float-right d-none d-md-block">
                                    <div class="form-group mb-4">
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-lg  waves-effect waves-light mr-1">
                                                {{ trans('message.update')}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </form>



                </div> <!-- container-fluid -->
            </div>

@endsection
