@php
     $usr = Auth::guard('admin')->user();
 @endphp

<style>
    .uil-window-section {
    }
</style>
<div class="vertical-menu">

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

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                @if ($usr->can('dashboard.view'))
                <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
@endif


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-book-reader"></i>
                        <span>Student Information</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if ($usr->can('student_create'))
                        <li class="{{ Route::is('admin.student.create') ? 'active' : '' }}">



                            <a href="{{ route('admin.student.create') }}">Student Admission</a>


                        </li>
                        @endif
                        @if ($usr->can('student_create') || $usr->can('student_view') || $usr->can('student_store') ||  $usr->can('student_update') ||  $usr->can('student_delete'))
                        <li class="{{ Route::is('admin.student') ? 'active' : '' }}">
                            <a href="{{ route('admin.student') }}">Student Details</a>

                        </li>
                        @endif

                        @if ($usr->can('student_category_add') || $usr->can('student_category_view') || $usr->can('student_category_update') ||  $usr->can('student_category_delete'))
                        <li class="{{ Route::is('admin.student_category') ? 'active' : '' }}">
                            <a href="{{ route('admin.student_category') }}">Student Categories</a>

                        </li>
                        @endif


                        @if ($usr->can('student_house_add') || $usr->can('student_view') ||   $usr->can('student_update') ||  $usr->can('student_delete'))
                        <li class="{{ Route::is('admin.student_house') ? 'active' : '' }}">
                            <a href="{{ route('admin.student_house') }}">Branch</a>

                        </li>
                        @endif


                        @if ($usr->can('disable_reason_add') || $usr->can('disable_reason_view') || $usr->can('disable_reason_update') ||  $usr->can('disable_reason_delete'))
                        <li class="{{ Route::is('admin.student_disable_reason') ? 'active' : '' }}">
                            <a href="{{ route('admin.student_disable_reason') }}">Disable Reason</a>

                        </li>
                        @endif

                        @if ($usr->can('student_disable.view') || $usr->can('student_disable.update'))
                        <li class="{{ Route::is('student_disable_list') ? 'active' : '' }}">
                            <a href="{{ route('student_disable_list') }}">Disable Student</a>

                        </li>
                        @endif

                        @if ($usr->can('student_bulk_delete.view') || $usr->can('student_bulk_delete.update'))
                        <li class="{{ Route::is('student_bulk_delete_list') ? 'active' : '' }}">
                            <a href="{{ route('student_bulk_delete_list') }}">Bulk Delete</a>

                        </li>
                        @endif
                    </ul>
                </li>
                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-money-bill"></i>
                        <span>Fee Collection</span>
                    </a>

                <ul class="sub-menu" aria-expanded="false">
                    @if ($usr->can('fee_type_add') || $usr->can('fee_type_view') ||  $usr->can('fee_type_update') ||  $usr->can('fee_type_delete'))

                        <li class="{{ Route::is('admin.fee_type') ? 'active' : '' }}"">
                            <a href="{{ route('admin.fee_type') }}">Fee Type</a>

                        </li>
                    @endif


                    @if ($usr->can('fee_group_add') || $usr->can('fee_group_view') ||  $usr->can('fee_group_update') ||  $usr->can('fee_group_delete'))

                    <li class="{{ Route::is('admin.fee_group') ? 'active' : '' }}"">
                        <a href="{{ route('admin.fee_group') }}">Fee Group</a>

                    </li>
                @endif


                @if ($usr->can('fee_discount_add') || $usr->can('fee_discount_view') ||  $usr->can('fee_discount_update') ||  $usr->can('fee_discount_delete'))

                <li class="{{ Route::is('admin.fee_discount') ? 'active' : '' }}"">
                    <a href="{{ route('admin.fee_discount') }}">Fee Discount</a>

                </li>
            @endif


            @if ($usr->can('fee_amount_add') || $usr->can('fee_amount_view') ||  $usr->can('fee_amount_update') ||  $usr->can('fee_amount_delete'))

            <li class="{{ Route::is('admin.fee_amount') ? 'active' : '' }}"">
                <a href="{{ route('admin.fee_amount') }}">Fee Amount</a>

            </li>
        @endif

        @if ($usr->can('collect_fee_add') || $usr->can('collect_fee_view') ||  $usr->can('collect_fee_update') ||  $usr->can('collect_fee_delete'))

        <li class="{{ Route::is('admin.collect_fee') ? 'active' : '' }}"">
            <a href="{{ route('admin.collect_fee') }}">Fee Collection</a>

        </li>
    @endif






                </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-calender"></i>
                        <span>Attendance </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if ($usr->can('sta_add') || $usr->can('sta_view') || $usr->can('sta_update') ||  $usr->can('sta_delete'))
        <li class="{{ Route::is('admin.attendance_student') ? 'active' : '' }}">
            <a href="{{ route('admin.attendance_student') }}">Student Attendance</a>
        </li>
    @endif
                    </ul>
                </li>



                @if ($usr->can('academic_view'))


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-graduation-cap"></i>
                        <span>Academic </span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        @if ($usr->can('class_create') || $usr->can('class_store') ||  $usr->can('class_update') ||  $usr->can('class_delete'))
                        <li class="{{ Route::is('admin.institute_class') ? 'active' : '' }}">
                            <a href="{{ route('admin.institute_class') }}"><span>Class</span> </a>
                        </li>

                   @endif

                   @if ($usr->can('dp_create') || $usr->can('dp_store') ||  $usr->can('dp_update') ||  $usr->can('dp_delete'))
                   <li class="{{ Route::is('admin.department') ? 'active' : '' }}">
                       <a href="{{ route('admin.department') }}"><span>Department</span> </a>
                   </li>

                @endif


                @if ($usr->can('section_create') || $usr->can('section_store') ||  $usr->can('section_update') ||  $usr->can('section_delete'))
                   <li class="{{ Route::is('admin.section') ? 'active' : '' }}">
                       <a href="{{ route('admin.section') }}"><span>Section</span> </a>
                   </li>

                @endif

                @if ($usr->can('subject_create') || $usr->can('subject_store') ||  $usr->can('subject_update') ||  $usr->can('subject_delete'))
                   <li class="{{ Route::is('admin.subject') ? 'active' : '' }}">
                       <a href="{{ route('admin.subject') }}"><span>Subject</span> </a>
                   </li>

                @endif

                @if ($usr->can('ct_view') || $usr->can('ct_add') ||  $usr->can('ct_update') ||  $usr->can('ct_delete'))
                   <li class="{{ Route::is('admin.class_teacher') ? 'active' : '' }}">
                       <a href="{{ route('admin.class_teacher') }}"><span>Class Teacher</span> </a>
                   </li>

                @endif



                @if ($usr->can('clr_view') || $usr->can('clr_add') ||  $usr->can('clr_update') ||  $usr->can('clr_delete'))
                   <li class="{{ Route::is('admin.class_routine') ? 'active' : '' }}">
                       <a href="{{ route('admin.class_routine') }}"><span>Class Routine</span> </a>
                   </li>

                @endif



                    </ul>
                </li>
@endif





       <li>

        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-sitemap"></i>
            <span>Human Resource</span>
        </a>

    <ul class="sub-menu" aria-expanded="false">

        @if ($usr->can('Staff_directory_add') || $usr->can('Staff_directory_view') ||  $usr->can('Staff_directory_update') ||  $usr->can('Staff_directory_delete'))
        <li class="{{ Route::is('admin.staff') ? 'active' : '' }}">
            <a href="{{ route('admin.staff') }}"><span>Staff Directory</span> </a>
        </li>

     @endif


     @if ($usr->can('Staff_attendence_add') || $usr->can('Staff_attendence_view') ||  $usr->can('Staff_attendence_update') ||  $usr->can('Staff_attendence_delete'))
     <li class="{{ Route::is('admin.staff_attandance') ? 'active' : '' }}">
         <a href="{{ route('admin.staff_attandance') }}"><span>Staff Attendence</span> </a>
     </li>

  @endif




@if ($usr->can('Approve_leave_request_add') || $usr->can('Approve_leave_request_view') ||  $usr->can('Approve_leave_request_update') ||  $usr->can('Approve_leave_request_delete'))
<li class="{{ Route::is('admin.apporoved_leave_request') ? 'active' : '' }}">
    <a href="{{ route('admin.apporoved_leave_request') }}"><span>Approve Leave Request</span> </a>
</li>

@endif


@if ($usr->can('apply_leave_add') || $usr->can('apply_leave_view') ||  $usr->can('apply_leave_update') ||  $usr->can('apply_leave_delete'))
<li class="{{ Route::is('admin.apply_leave') ? 'active' : '' }}">
    <a href="{{ route('admin.apply_leave') }}"><span>Apply Leave </span> </a>
</li>

@endif


@if ($usr->can('Leave_type_add') || $usr->can('Leave_type_view') ||  $usr->can('Leave_type_update') ||  $usr->can('Leave_type_delete'))
  <li class="{{ Route::is('admin.leave_type') ? 'active' : '' }}">
      <a href="{{ route('admin.leave_type') }}"><span>Leave type</span> </a>
  </li>

@endif



@if ($usr->can('hr_department_add') || $usr->can('hr_department_view') ||  $usr->can('hr_department_update') ||  $usr->can('hr_department_delete'))
<li class="{{ Route::is('admin.staff_department') ? 'active' : '' }}">
    <a href="{{ route('admin.staff_department') }}"><span>Department</span> </a>
</li>

@endif
@if ($usr->can('designation_add') || $usr->can('designation_view') ||  $usr->can('designation_update') ||  $usr->can('designation_delete'))
  <li class="{{ Route::is('admin.staff_designation') ? 'active' : '' }}">
      <a href="{{ route('admin.staff_designation') }}"><span>Designation</span> </a>
  </li>

@endif


@if ($usr->can('disable_staff_add') || $usr->can('disable_staff_view') ||  $usr->can('disable_staff_update') ||  $usr->can('disable_staff_delete'))
  <li class="{{ Route::is('dis_able_staff') ? 'active' : '' }}">
      <a href="{{ route('dis_able_staff') }}"><span>Disabled Staff </span> </a>
  </li>

@endif





    </ul>
    </li>


    <li>

        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-flask"></i>
            <span>HW/CW</span>
        </a>

    <ul class="sub-menu" aria-expanded="false">
        @if ($usr->can('home_work_add') || $usr->can('home_work_view') ||  $usr->can('home_work_update') ||  $usr->can('home_work_delete'))

            <li class="{{ Route::is('admin.home_work') ? 'active' : '' }}"">
                <a href="{{ route('admin.home_work') }}">Add HW/CW</a>

            </li>
        @endif



    </ul>
    </li>







    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-chart-line"></i>
            <span>Report</span>
        </a>
    </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-setting"></i>
                        <span>System Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if ($usr->can('ins_create') || $usr->can('ins_store') ||  $usr->can('ins_update') ||  $usr->can('ins_delete'))
                        <li class="{{ Route::is('admin.institute_information') ? 'active' : '' }}">
                            <a href="{{ route('admin.institute_information') }}">Institute information</a>

                        </li>
                        @endif

                        @if ($usr->can('session_add') || $usr->can('session_view') ||  $usr->can('session_update') ||  $usr->can('session_delete'))
                        <li class="{{ Route::is('admin.year_session') ? 'active' : '' }}">
                            <a href="{{ route('admin.year_session') }}">Session</a>

                        </li>
                        @endif






                        @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                        <li class="{{ Route::is('admin.users') || Route::is('admin.users.create') || Route::is('admin.users.edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.users') }}"><span>User</span> </a>
                        </li>

                   @endif


                   @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                        <li class="{{ Route::is('admin.roles') || Route::is('admin.roles.create') || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles') }}"> <span>Role List</span> </a></li>

            @endif
                   @if ($usr->can('permission.create') || $usr->can('permission.view') ||  $usr->can('permission.edit') ||  $usr->can('permission.delete'))
                     <li class="{{ Route::is('admin.permission') || Route::is('admin.permission.create') || Route::is('admin.permission.edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.permission') }}"><span>Permission</span> </a>
                        </li>

                    @endif



                    </ul>
                </li>







            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>




