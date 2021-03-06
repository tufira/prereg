@include('admin.head.head')

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>

<div id="wrapper">
        @include('admin.header.header')
        @include('admin.sidebar.sidebar')

        <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">

                    @yield('content')

                </div>
                <footer class="footer text-center"> 2017 &copy; INFATEC by stringsystem.com </footer>
            </div>
            <!-- /#page-wrapper -->

</div>


{!!Html::script('plugins/bower_components/jquery/dist/jquery.min.js')!!}
{!!Html::script('bootstrap/dist/js/bootstrap.min.js')!!}
{!!Html::script('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')!!}
{!!Html::script('js/jquery.slimscroll.js')!!}
{!!Html::script('js/waves.js')!!}
{!!Html::script('plugins/bower_components/waypoints/lib/jquery.waypoints.js')!!}
{!!Html::script('plugins/bower_components/counterup/jquery.counterup.min.js')!!}
{!!Html::script('plugins/bower_components/raphael/raphael-min.js')!!}
{!!Html::script('plugins/bower_components/morrisjs/morris.js')!!}
{!!Html::script('js/custom.min.js')!!}
{!!Html::script('js/dashboard1.js')!!}
{!!Html::script('plugins/bower_components/toast-master/js/jquery.toast.js')!!}
<script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
</script>
</body>
</html>