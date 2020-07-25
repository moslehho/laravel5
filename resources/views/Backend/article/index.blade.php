@extends('Backend.main')

@section('title')
    مقالات
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

                        مقالات
                        <small></small>
                    </h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جست و جو برای...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">برو!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>لیست مقالات
                                <small>کل مقالات سامانه</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @include('Backend.message')
                            <a href="{{route('admin.article.create')}}" class="btn btn-success btn-xs"><i
                                    class="fa fa-user"></i> ایجاد مقاله جدید </a>

                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>

                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title">تاریخ</th>
                                        <th class="column-title">عنوان</th>
                                        <th class="column-title"><i class="fa fa-eye"></i></th>
                                        <th class="column-title"><i class="fa fa-comment-o"></i></th>
                                        <th class="column-title">وضعیت</th>
                                        <th class="column-title">دسته بندی</th>
                                        <th class="column-title">نویسنده</th>
                                        <th class="column-title no-link last"><span class="nobr">عملیات</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">عمل همگانی ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($article as $articles)

                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td class=" ">{!! jdate($articles->created_at)->format('%Y-%m-%d') !!}</td>
                                            <td class=" ">{{$articles->name}}</td>
                                            <td class=" ">{{$articles->hit}}</td>
                                            <td class=" ">-</td>
                                            <td class=" ">{{$articles->status}}</td>
                                            <td class=" ">{{$articles->category}}</td>
                                            <td class=" ">{{$articles->username}}</td>
                                            <td class=" last">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger">عمل</button>
                                                    <button type="button" class="btn btn-danger dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="">ویرایش</a>
                                                        </li>
                                                        <li><a href="{{route('admin.article.destroy',$articles->id)}}"
                                                               onclick="return confirm('آیا آیتم مورد نظر حذف شود');">حذف</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>


                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>

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


