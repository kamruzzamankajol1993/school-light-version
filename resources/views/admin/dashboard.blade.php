@extends('admin.master.master')

@section('title')
Dashboard | {{ $ins_name }}
@endsection


@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">School Management</a></li> --}}
                    <li class="breadcrumb-item active">School Management</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="total-revenue-chart"></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
                    <p class="text-muted mb-0">Total Revenue</p>
                </div>
                <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                </p>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="orders-chart"> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                    <p class="text-muted mb-0">Orders</p>
                </div>
                <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                </p>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="customers-chart"> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
                    <p class="text-muted mb-0">Customers</p>
                </div>
                <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                </p>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">

        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="growth-chart"></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
                    <p class="text-muted mb-0">Growth</p>
                </div>
                <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                </p>
            </div>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title mb-4">Sales Analytics</h4>

                <div class="mt-1">
                    <ul class="list-inline main-chart mb-0">
                        <li class="list-inline-item chart-border-left me-0 border-0">
                            <h3 class="text-primary">$<span data-plugin="counterup">2,371</span><span class="text-muted d-inline-block font-size-15 ms-3">Income</span></h3>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h3><span data-plugin="counterup">258</span><span class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
                            </h3>
                        </li>
                     
                    </ul>
                </div>

                <div class="mt-3">
                    <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->


</div> <!-- end row-->


<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Transaction</h4>
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead class="table-light">
                        <tr>
                            <th style="width: 20px;">
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                </div>
                            </th>
                            <th>Order ID</th>
                            <th>Billing Name</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Payment Status</th>
                            <th>Payment Method</th>
                            <th>View Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                </div>
                            </td>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2540</a> </td>
                            <td>Neal Matthews</td>
                            <td>
                                07 Oct, 2019
                            </td>
                            <td>
                                $400
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                            </td>
                            <td>
                                <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                    View Details
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="customCheck3">
                                    <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                </div>
                            </td>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2541</a> </td>
                            <td>Jamal Burnett</td>
                            <td>
                                07 Oct, 2019
                            </td>
                            <td>
                                $380
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-soft-danger font-size-12">Chargeback</span>
                            </td>
                            <td>
                                <i class="fab fa-cc-visa me-1"></i> Visa
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                    View Details
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="customCheck4">
                                    <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                </div>
                            </td>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2542</a> </td>
                            <td>Juan Mitchell</td>
                            <td>
                                06 Oct, 2019
                            </td>
                            <td>
                                $384
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                            </td>
                            <td>
                                <i class="fab fa-cc-paypal me-1"></i> Paypal
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                    View Details
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="customCheck5">
                                    <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                </div>
                            </td>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2543</a> </td>
                            <td>Barry Dick</td>
                            <td>
                                05 Oct, 2019
                            </td>
                            <td>
                                $412
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                            </td>
                            <td>
                                <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                    View Details
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="customCheck6">
                                    <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                </div>
                            </td>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2544</a> </td>
                            <td>Ronald Taylor</td>
                            <td>
                                04 Oct, 2019
                            </td>
                            <td>
                                $404
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-soft-warning font-size-12">Refund</span>
                            </td>
                            <td>
                                <i class="fab fa-cc-visa me-1"></i> Visa
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                    View Details
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="customCheck7">
                                    <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                </div>
                            </td>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2545</a> </td>
                            <td>Jacob Hunter</td>
                            <td>
                                04 Oct, 2019
                            </td>
                            <td>
                                $392
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                            </td>
                            <td>
                                <i class="fab fa-cc-paypal me-1"></i> Paypal
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                    View Details
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->

{{-- <div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Dashboard</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Welcome to School Management System</li>
                    </ol>
                </div>
            </div>

        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-success text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-user-tie" style="font-size: 20px;"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Total Student</h5>
                            <h4 class="font-weight-medium font-size-24">{{$student_details}}</h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">From Start</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-info text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-user-tie" style="font-size: 20px;"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">New Student</h5>
                            <h4 class="font-weight-medium font-size-24">{{$student_details}}  <h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">From This Year</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-danger text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-chalkboard-teacher" style="font-size: 20px;"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Total Teacher</h5>
                            <h4 class="font-weight-medium font-size-24">{{$teacher_details}}</h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">From the beginning</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-chalkboard" style="font-size: 20px;"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Total Class</h5>
                            <h4 class="font-weight-medium font-size-24">{{$class_details}} <i
                                    class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">From the beginning</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-success text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-chalkboard" style="font-size: 20px;"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Total Section</h5>
                            <h4 class="font-weight-medium font-size-24">{{$section_details}} <i
                                    class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">From the beginning</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-info text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">

                                <i class="fas fa-calendar-alt" style="font-size: 20px;"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Total Event</h5>
                            <h4 class="font-weight-medium font-size-24">0 <i
                                    class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">From the beginning</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-danger text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">

                                <i class="fas fa-calendar-alt" style="font-size: 20px;"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Upcoming Event</h5>
                            <h4 class="font-weight-medium font-size-24">0 <i
                                    class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">This Month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-graduation-cap" style="font-size: 20px;"></i>

                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Total Exam</h5>
                            <h4 class="font-weight-medium font-size-24">{{$exam_details}} <i
                                    class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">From the beginning</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

  <!--      <div class="row mt-2">-->
  <!--          <div class="col-xl-4 col-md-6">-->
  <!--<div class="card">-->
  <!--  <div class="card-header">-->
  <!--    <h5 class="text-center">Notice Board</h5>-->
  <!--  </div>-->
  <!--    <div class="card-body">-->
  <!--      <div class="alert alert-success" role="alert">-->
  <!--          A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.-->
  <!--        </div>-->

  <!--        <div class="alert alert-success" role="alert">-->
  <!--          A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.-->
  <!--        </div>-->

  <!--        <div class="alert alert-success" role="alert">-->
  <!--          A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.-->
  <!--        </div>-->
  <!--    </div>-->
  <!--</div>-->

  <!--          </div>-->
  <!--          <div class="col-xl-4 col-md-6">-->
  <!--              <div class="card">-->
  <!--                <div class="card-header">-->
  <!--                  <h5 class="text-center">Up Coming Holiday</h5>-->
  <!--                </div>-->
  <!--                  <div class="card-body">-->
  <!--                      <div class="alert alert-danger" role="alert">-->
  <!--                          A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.-->
  <!--                        </div>-->
  <!--                        <div class="alert alert-danger" role="alert">-->
  <!--                          A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.-->
  <!--                        </div>-->
  <!--                        <div class="alert alert-danger" role="alert">-->
  <!--                          A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.-->
  <!--                        </div>-->
  <!--                  </div>-->
  <!--              </div>-->

  <!--                        </div>-->
  <!--                        <div class="col-xl-4 col-md-6">-->
  <!--                          <div class="card">-->
  <!--                            <div class="card-header">-->
  <!--                              <h5 class="text-center">Today Event</h5>-->
  <!--                            </div>-->
  <!--                              <div class="card-body">-->
  <!--                                  <div class="alert alert-info" role="alert">-->
  <!--                                      A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.-->
  <!--                                    </div>-->
  <!--                                    <div class="alert alert-info" role="alert">-->
  <!--                                      A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.-->
  <!--                                    </div>-->

  <!--                                    <div class="alert alert-info" role="alert">-->
  <!--                                      A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.-->
  <!--                                    </div>-->

  <!--                              </div>-->
  <!--                          </div>-->

  <!--                                    </div>-->
  <!--      </div>-->
    </div>
</div> --}}
@endsection
