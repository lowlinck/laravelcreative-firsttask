<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Blog</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
{{--    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/brands.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/solid.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->

    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Ion Slider -->
    <link rel="stylesheet" href="../../plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
    <!-- bootstrap slider -->
    <link rel="stylesheet" href="../../plugins/bootstrap5/css/bootstrap.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
@yield('content')
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>

<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Ion Slider -->
<script src="../../plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="../../plugins/bootstrap5/js/bootstrap.bundle.js"></script>
<!-- Bootstrap slider -->

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
</script>
<script>
        $(function () {
        bsCustomFileInput.init();
    });
        $('.select2').select2()

        ('#range_1').ionRangeSlider({
            min     : 0,
            max     : 5000,
            from    : 1000,
            to      : 4000,
            type    : 'double',
            step    : 1,
            prefix  : '$',
            prettify: false,
            hasGrid : true
        })
        $('#range_2').ionRangeSlider()
</script>
{{--<script>--}}
{{--    const myModal = document.getElementById('Modal')--}}
{{--    const myInput = document.getElementById('myInput')--}}

{{--    myModal.addEventListener('shown.bs.modal', () => {--}}
{{--        myInput.focus()--}}
{{--    })--}}
{{--</script>--}}

<style>
    .custom-file-input:lang(en)~.custom-file-label::after {
        content: "...";
    }
</style>
</body>
</html>
