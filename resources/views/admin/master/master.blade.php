<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ $ins_name }}  " name="description" />
    <meta content="{{ $ins_name }} " name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}{{ $icon }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- DataTables -->
  <link href="{{ asset('/') }}public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/') }}public/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />


   <!-- plugin css -->
   <link href="{{ asset('/') }}public/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />


  <!-- Responsive datatable examples -->
  {{-- <link href="{{ asset('/') }}public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> --}}
    <!-- Bootstrap Css -->
    <link href="{{ asset('/') }}public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/') }}public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/') }}public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>

    <script src="{{ asset('/') }}public/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    @yield('css')
</head>


<body>

<!-- <body data-layout="horizontal" data-topbar="colored"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <!-- Top Header ======= -->
    @include('admin.include.header');
    <!-- TOP END HEADER -->


    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.include.sidebar');
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                @yield('body')

                @include('admin.include.footer')
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- JAVASCRIPT -->

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script src="{{ asset('/') }}public/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/') }}public/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}public/assets/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('/') }}public/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}public/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
<script src="{{ asset('/') }}public/assets/libs/select2/js/select2.min.js"></script>

<!-- apexcharts -->
<script src="{{ asset('/') }}public/assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{ asset('/') }}public/assets/js/pages/dashboard.init.js"></script>
   <!-- Required datatable js -->
   <script src="{{ asset('/') }}public/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="{{ asset('/') }}public/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   <!-- Buttons examples -->
   <script src="{{ asset('/') }}public/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
   <script src="{{ asset('/') }}public/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
   <script src="{{ asset('/') }}public/assets/libs/jszip/jszip.min.js"></script>
   <script src="{{ asset('/') }}public/assets/libs/pdfmake/build/pdfmake.min.js"></script>
   <script src="{{ asset('/') }}public/assets/libs/pdfmake/build/vfs_fonts.js"></script>
   <script src="{{ asset('/') }}public/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
   <script src="{{ asset('/') }}public/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
   <script src="{{ asset('/') }}public/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- ckeditor -->
    <script src="{{ asset('/') }}public/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!--tinymce js-->
    <script src="{{ asset('/') }}public/assets/libs/tinymce/tinymce.min.js"></script>

   <!-- Responsive examples -->
   {{-- <script src="{{ asset('/') }}public/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
   <script src="{{ asset('/') }}public/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script> --}}

   <!-- Datatable init js -->
   <script src="{{ asset('/') }}public/assets/js/pages/datatables.init.js"></script>

    <!-- plugins -->
    <script src="{{ asset('/') }}public/assets/libs/select2/js/select2.min.js"></script>

    <!-- init js -->
    <script src="{{ asset('/') }}public/assets/js/pages/form-advanced.init.js"></script>
<!-- App js -->
<script src="{{ asset('/') }}public/assets/js/app.js"></script>
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>




@yield('script')


<script>
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>

<script>
    ClassicEditor
    .create( document.querySelector( '#classic-editor' ) )
    .catch( error => {
        console.error( error );
    } );
    </script>
</body>

</html>





