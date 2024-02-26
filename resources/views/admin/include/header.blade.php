


@php
     $usr = Auth::guard('admin')->user();
 @endphp


<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('/') }}{{ $icon}}" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{ asset('/') }}{{ $logo}}" alt="" height="20">
                                </span>
                </a>

                <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('/') }}{{ $icon}} alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{ asset('/') }}{{ $logo}}" alt="" height="20">
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

          
        </div>

        <div class="d-flex">


            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="uil-minus-path"></i>
                </button>
            </div>



            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(Auth::guard('admin')->user()->image == NUll)
                    <img class="rounded-circle header-profile-user" src="{{ asset('/') }}public/assets/images/users/ii.png"
                         alt="Header Avatar">
                         @else
                         <img class="rounded-circle header-profile-user" src="{{asset('/')}}{{ Auth::guard('admin')->user()->image }}"
                         alt="Header Avatar">

                         @endif
                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{ Auth::guard('admin')->user()->name }}</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    @if ( $usr->can('profile.view') ||  $usr->can('profile.edit'))
                    <a class="dropdown-item" href="{{ route('admin.profile_view') }}"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a>
                   @endif
                   @if ($usr->can('profile.edit'))
                    <a class="dropdown-item d-block" href="{{ route('admin.settings') }}"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Settings</span></a>
@endif
                    <a class="dropdown-item" href="{{ route('admin.logout.submit') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('admin-logout-form').submit();">
                                  <i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i>
                                  <span class="align-middle">Sign out</span></a>

                                  <form id="admin-logout-form" action="{{ route('admin.logout.submit') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                </div>
            </div>


        </div>
    </div>
</header>

