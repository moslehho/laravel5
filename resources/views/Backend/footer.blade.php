<!-- footer content -->
<footer class="hidden-print">
    <div class="pull-left">

    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>
<div id="lock_screen">
    <table>
        <tr>
            <td>
                <div class="clock"></div>
                <span class="unlock">
                    <span class="fa-stack fa-5x">
                      <i class="fa fa-square-o fa-stack-2x fa-inverse"></i>
                      <i id="icon_lock" class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                </span>
            </td>
        </tr>
    </table>
</div>
<!-- jQuery -->


<script src="{{url('/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{url('/vendors/nprogress/nprogress.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{url('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('/vendors/iCheck/icheck.min.js')}}"></script>

<!-- bootstrap-daterangepicker -->
<script src="{{url('/vendors/moment/min/moment.min.js')}}"></script>

<script src="{{url('/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Chart.js -->
<script src="{{url('../vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- jQuery Sparklines -->
<script src="{{url('/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{url('/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- Skycons -->
<script src="{{url('/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{url('/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{url('/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{url('/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{url('/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{url('/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{url('/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{url('/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{url('/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{url('/vendors/DateJS/build/production/date.min.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{url('../vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{url('../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{url('/build/js/custom.min.js')}}"></script>

<!-- /bootstrap-daterangepicker -->
<!-- End custom js for this page-->

<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script> -->
<script src='http://harvesthq.github.io/chosen/chosen.jquery.js'></script>
<script src="{{url('/build/js/multiselect.js')}}"></script>


<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>


<script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!};
    var route_prefix = "http://127.0.0.1:8000/laravel-filemanager";
    $('#lfm').filemanager('image', {prefix: route_prefix});
</script>
