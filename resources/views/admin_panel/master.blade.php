<!doctype html>
<html lang="en">

<head>

    <title>{{ config('app.name') ? config('app.name') : '' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('logo/pup_logo.png') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    <!-- DataTables -->
    <link href="{{ asset('admin_panel/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin_panel/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_panel/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('admin_panel/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin_panel/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />

    <!-- Icons Css -->
    <link href="{{ asset('admin_panel/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{ asset('admin_panel/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_panel/libs/twitter-bootstrap-wizard/prettify.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    {{-- Toster Css --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css">
</head>

<body data-topbar="light">

    <div id="layout-wrapper">

        @include('admin_panel.layouts.header')

        @include('admin_panel.layouts.navbar')

        {{-- Main Content --}}

        <div class="main-content">

            @yield('admin')

            @include('admin_panel.layouts.footer')

        </div>

        {{-- End Main Content --}}

    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin_panel/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/node-waves/waves.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('admin_panel/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Buttons examples -->

    <script src="{{ asset('admin_panel/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <script src="{{ asset('admin_panel/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('admin_panel/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>

    <!-- Datatable init js -->
    <script src="{{ asset('admin_panel/js/pages/datatables.init.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('admin_panel/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script src="{{ asset('admin_panel/libs/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <script src="{{ asset('admin_panel/js/pages/dashboard.init.js') }}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('admin_panel/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('admin_panel/js/pages/sweet-alerts.init.js') }}"></script>

    <!-- wizard js -->
    <script src="{{ asset('admin_panel/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/twitter-bootstrap-wizard/prettify.js') }}"></script>
    <script src="{{ asset('admin_panel/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin_panel/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ asset('admin_panel/js/pages/form-editor.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin_panel/js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('admin_panel/libs/dropzone/min/dropzone.min.js')}}"></script>
    <input type="file" multiple="multiple" class="dz-hidden-input"
        style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"> </script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
        }
        @endif
    </script>

</body>

</html>
