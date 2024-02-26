@extends('admin.master.master')

@section('title')
{{ trans('ward.addnewward')}} | {{ $ins_name }}
@endsection


@section('body')

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">{{ trans('ward.newward')}}</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="index.php">{{ trans('message.sakho')}}</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.ward') }}">{{ trans('ward.wardlist')}}</a></li>
                                    <li class="breadcrumb-item"><a href="#">{{ trans('ward.addnewward')}}</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form class="custom-validation" action="{{ route('admin.ward.store') }}" method="post" enctype="multipart/form-data">
                    	@csrf
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">{{ trans('ward.wardinfoenglish')}} :</h4>

                                        <div class="form-group">
                                            <label>{{ trans('message.wardno')}}:</label>
                                            <input type="text" class="form-control" name="ward_no_eng" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.cityName')}}:</label>
                                            <input type="text" class="form-control" name="city_cor_name_eng" />
                                        </div>

                                       <!-- <div class="form-group">
                                            <label>{{ trans('ward.District')}}:</label>
                                            <input type="text" class="form-control" name="district_eng" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.postcode')}}:</label>
                                            <input type="text" class="form-control" name="postal_code_eng" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.postoffice')}}:</label>
                                            <input type="text" class="form-control" name="post_office_eng" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.pollice')}}:</label>
                                            <input type="text" class="form-control" name="police_station_eng" />
                                        </div>-->

                                        <div class="form-group">
                                            <label>{{ trans('ward.office')}}:</label>
                                            <input type="text" class="form-control" name="office_address_eng" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.Email')}}:</label>
                                            <input type="text" class="form-control" name="email" />
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('ward.Phone')}}:</label>
                                            <input type="text" class="form-control" name="phone"/>
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
                                            <input type="text" class="form-control" name="ward_no_ban"/>
                                        </div>

                                        <div class="form-group">
                                            <label>সিটি কর্পোরেশন নাম :</label>
                                            <input type="text" class="form-control" name="city_cor_name_ban" />
                                        </div>

                                        <div class="form-group">
                                            <label>কার্যালয়:</label>
                                            <input type="text" class="form-control" name="office_address_ban"/>
                                        </div>

                                        <div class="form-group">
                                              <label>{{ trans('role.division') }}:</label>


                                                <select class="form-control" name="div_ban" >
                                                    <option selected disabled>{{ trans('message.select') }}</option>
                                                    @foreach($divisions as $divi)
<option value="{{ $divi->division_bn }}">{{ $divi->division_bn }}</option>

                                                    @endforeach

                                                </select>
                                        </div>

                                        <div class="form-group">

                                              <label>{{ trans('role.district') }}:</label>


                                                <select class="form-control" name="district_ban" >


                                                </select>
                                        </div>

                                        <div class="form-group">


                                             <label>{{ trans('role.pollicestation') }}:</label>

<select class="form-control" name="police_station_ban" >


                                                </select>
                                        </div>

                                        <div class="form-group">


                                            <label>{{ trans('role.postoffice') }}:</label>
                                                <select class="form-control" name="post_office_ban" />

                                            </select>
                                        </div>

                                        <div class="form-group">
                                           <label>{{ trans('role.postcode') }}:</label>
                                                <select class="form-control" name="postal_code_ban" /></select>
                                        </div>





                                    </div>

                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ trans('ward.payinformation')}}:</h4>

                                        <div class="row">

                                            <div class="form-group col-lg-6">
                                                <label>{{ trans('ward.monthlyprice')}}:</label>
                                         <input type="number" class="form-control" name="price" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>{{ trans('ward.subtype')}}:</label>
                                                <select id="" name="subscription_type" class="form-control">
                                                    <option value="">--{{ trans('message.select')}}--</option>

                                                    <option value="By Annualy">{{ trans('ward.annual')}}</option>
                                                    <option value="Quterly">{{ trans('ward.quater')}}</option>
                                                    <option value="Monthly">{{ trans('ward.month')}}</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>{{ trans('ward.PaymentMethod')}}:</label>
                                                <select id="" name="method" class="form-control">
                                                    <option value="">--{{ trans('message.select')}}--</option>
                                                    <option value="Bkash">{{ trans('ward.bcash')}}</option>
                                                    <option value="Nogod">{{ trans('ward.nogod')}}</option>
                                                    <option value="Hand Cash">{{ trans('ward.Handcash')}}</option>
                                                    <option value="Payment Gateway">{{ trans('ward.paymentgateway')}}</option>
                                                </select>
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
                                                {{ trans('message.add')}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </form>



                </div> <!-- container-fluid -->
            </div>


            <script src="{{ asset('/') }}public/admin/assets/libs/jquery/jquery.min.js"></script>
      <script src="{{ asset('/') }}public/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
  $("select[name='div_ban']").change(function(){
      var id_country = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ route('admin.select_district') }}",
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='district_ban'").html('');
            $("select[name='district_ban'").html(data.options);
          }
      });
  });
</script>



   <script type="text/javascript">
  $("select[name='district_ban']").change(function(){
      var id_country1 = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ route('admin.select_thana') }}",
          method: 'POST',
          data: {id_country1:id_country1, _token:token},
          success: function(data) {
            $("select[name='police_station_ban'").html('');
            $("select[name='police_station_ban'").html(data.options);


          }
      });
  });
</script>


<script type="text/javascript">
    $("select[name='police_station_ban']").change(function(){
        var id_country12 = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('admin.select_postoffice') }}",
            method: 'POST',
            data: {id_country12:id_country12, _token:token},
            success: function(data) {
              $("select[name='post_office_ban'").html('');
              $("select[name='post_office_ban'").html(data.options);


            }
        });
    });
  </script>


<script type="text/javascript">
    $("select[name='post_office_ban']").change(function(){
        var id_country13 = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('admin.select_postcode') }}",
            method: 'POST',
            data: {id_country13:id_country13, _token:token},
            success: function(data) {
              $("select[name='postal_code_ban'").html('');
              $("select[name='postal_code_ban'").html(data.options);


            }
        });
    });
  </script>


@endsection
