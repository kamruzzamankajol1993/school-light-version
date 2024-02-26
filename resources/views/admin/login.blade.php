<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Sep 2021 11:12:11 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Login | School Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="School Management" name="description" />
        <meta content="Resnova" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/') }}public/adminlogin/images/main_logo.png">

        <!-- Bootstrap Css -->
        <link href="{{ asset('/') }}public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('/') }}public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('/') }}public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">

        {{-- <select class="form-control changeLang mt-1">
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>{{ trans('message.language_one')}}</option>

            <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>{{ trans('message.language_two')}}</option>
        </select> --}}
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="index.html" class="mb-5 d-block auth-logo">
                                <img src="{{ asset('/') }}{{ $logo }}" alt="" height="22" class="logo logo-dark">
                                <img src="{{ asset('/') }}{{ $logo }}" alt="" height="22" class="logo logo-light">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to School Management Software.</p>
                                    @include('flash_message')
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="POST" action="{{route('admin.login.submit')}}">
@csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="email" name="email" class="form-control" id="username" placeholder="Enter Email">
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="#" class="text-muted">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>

                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                        </div>



                                        <div class="mt-4 text-center">
                                            {{-- <div class="signin-other-title">
                                                <h5 class="font-size-14 mb-3 title">Sign in with</h5>
                                            </div> --}}



                                            {{-- <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul> --}}
                                        </div>

                                        <div class="mt-4 text-center">
                                            {{-- <p class="mb-0">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Signup now </a> </p> --}}
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <p>© <script>document.write(new Date().getFullYear())</script> School Management. Developed with  by Resnova</p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('/') }}public/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('/') }}public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/') }}public/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('/') }}public/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('/') }}public/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{ asset('/') }}public/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="{{ asset('/') }}public/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="{{ asset('/') }}public/assets/js/app.js"></script>


        <script type="text/javascript">

            var url = "{{ route('changeLang') }}";

            $(".changeLang").change(function(){
                window.location.href = url + "?lang="+ $(this).val();
            });

        </script>

    </body>

<!-- Mirrored from themesbrand.com/minible/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Sep 2021 11:12:11 GMT -->
</html>










