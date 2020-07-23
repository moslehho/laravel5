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
                                        <th class="column-title">صورتحساب</th>
                                        <th class="column-title">تاریخ صورتحساب</th>
                                        <th class="column-title">سفارش</th>
                                        <th class="column-title">پرداخت به نام</th>
                                        <th class="column-title">وضعیت</th>
                                        <th class="column-title">مقدار</th>
                                        <th class="column-title no-link last"><span class="nobr">عمل</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">عمل همگانی ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">121000040</td>
                                        <td class=" ">May 23, 2014 11:47:56 PM</td>
                                        <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                        <td class=" ">John Blank L</td>
                                        <td class=" ">Paid</td>
                                        <td class="a-right a-right ">$7.45</td>
                                        <td class=" last"><a href="#">مشاهده</a>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">121000039</td>
                                        <td class=" ">May 23, 2014 11:30:12 PM</td>
                                        <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                                        </td>
                                        <td class=" ">John Blank L</td>
                                        <td class=" ">Paid</td>
                                        <td class="a-right a-right ">$741.20</td>
                                        <td class=" last"><a href="#">مشاهده</a>
                                        </td>
                                    </tr>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">121000038</td>
                                        <td class=" ">May 24, 2014 10:55:33 PM</td>
                                        <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                                        </td>
                                        <td class=" ">Mike Smith</td>
                                        <td class=" ">Paid</td>
                                        <td class="a-right a-right ">$432.26</td>
                                        <td class=" last"><a href="#">مشاهده</a>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">121000037</td>
                                        <td class=" ">May 24, 2014 10:52:44 PM</td>
                                        <td class=" ">121000204</td>
                                        <td class=" ">Mike Smith</td>
                                        <td class=" ">Paid</td>
                                        <td class="a-right a-right ">$333.21</td>
                                        <td class=" last"><a href="#">مشاهده</a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>







                            <table id="datatable-responsive"
                                   class="table table-striped table-bordered dt-responsive nowrap"
                                   cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>ایجاد</th>
                                    <th>عنوان</th>
                                    <th><i class="fa fa-eye"></i></th>
                                    <th><i class="fa fa-comment-o"></i></th>
                                    <th>وضعیت</th>
                                    <th>دسته بندی</th>
                                    <th>توسط</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
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
                                                    <li><a href="#">حذف</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>


                                </tbody>
                            </table>

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


