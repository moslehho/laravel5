@extends('Backend.main')

@section('title')
   مدیریت فایل ها
@endsection


@section('content')



    <!-- iCheck -->
    <link href="{{url('/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{url('/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('/build/css/custom.min.css')}}" rel="stylesheet">


    </head>


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">


                    <h3><a href="{{route('admin.index')}}">مدیریت</a>/
مدیریت فایل ها
                        <small></small>
                    </h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>مدیریت فایل ها
                                <small>لطفا اطلاعات صحیح را وارد کنید</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <iframe src="/filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Datatables -->
    <script src="{{url('/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{url('/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{url('/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{url('/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{url('/vendors/pdfmake/build/vfs_fonts.js')}}"></script>


    <!-- Custom Theme Scripts -->
    <script src="{{url('/build/js/custom.min.js')}}"></script>
@endsection


