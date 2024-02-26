<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Shakho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Shakho" name="description"/>
    <meta content="Shakho" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}public/admin/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('/') }}public/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ asset('/') }}public/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{ asset('/') }}public/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css"/>

</head>

<body>

<div class="home-btn d-none d-sm-block">
    <a href="{{route('admin.login')}}" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>

<section class="my-5">
    <div class="container-alt container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="home-wrapper mt-5">
                    <div class="mb-4">
                        <img src="{{ asset('/') }}public/admin/assets/images/logo-dark.png" alt="logo" height="22"/>
                    </div>

                    <div class="maintenance-img">
                        <img src="{{ asset('/') }}public/admin/assets/images/tired-exhausted-woman-working-laptop-feeling-burnout-vector-illustration-overload-overwork-fatigue-concept_74855-10178.jpg" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <h3 class="mt-4">Your Connection Is Lost</h3>
                    <p>please pay your monthly subscription bill and use system without any inconvenience</p>

                    <div class="row">
                        <div class="text-center col-md-4">
                            <div class="card mt-4 maintenance-box">
                                <div class="card-body">
                                    <i class="mdi mdi-airplane-takeoff h2"></i>
                                    <h6 class="text-uppercase mt-3">Why is the Site Down?</h6>
                                    <p class="text-muted mt-3">There are many variations of passages of
                                        Lorem Ipsum available, but the majority have suffered alteration.</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center col-md-4">
                            <div class="card mt-4 maintenance-box">
                                <div class="card-body">
                                    <i class="mdi mdi-clock-alert h2"></i>
                                    <h6 class="text-uppercase mt-3">
                                        What is the Downtime?</h6>
                                    <p class="text-muted mt-3">Contrary to popular belief, Lorem Ipsum is not
                                        simply random text. It has roots in a piece of classical.</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center col-md-4">
                            <div class="card mt-4 maintenance-box">
                                <div class="card-body">
                                    <i class="mdi mdi-email h2"></i>
                                    <h6 class="text-uppercase mt-3">
                                        Do you need Support?</h6>
                                    <p class="text-muted mt-3">If you are going to use a passage of Lorem
                                        Ipsum, you need to be sure there isn't anything embar.. <a
                                                href="mailto:sakho@gmail.com"
                                                class="text-decoration-underline">sakho@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- JAVASCRIPT -->
<script src="{{ asset('/') }}public/admin/assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}public/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}public/admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/') }}public/admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}public/admin/assets/libs/node-waves/waves.min.js"></script>

<script src="{{ asset('/') }}public/admin/assets/js/app.js"></script>

</body>

<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/pages-maintenance.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 07:21:37 GMT -->
</html>
