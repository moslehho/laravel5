@extends('Backend.main')

@section('title')
    ویرایش مقاله

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


                    <h3><a href="{{route('admin.index')}}">مدیریت</a>/<a href="{{route('admin.article')}}">مقالات</a>/
                        ویرایش مقاله

                        <small></small>
                    </h3>
                </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>ویرایش مقاله
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

                        @include('Backend.message')

                        <br>

                        <form action="{{route('admin.article.update'), $article->id}}" method="POST" id="demo-form2"
                              data-parsley-validate="" class="form-horizontal form-label-left"
                              novalidate="">
                            @csrf

                            @foreach($article as $articles)
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">عنوان مقاله
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                           class="form-control col-md-7 col-xs-12" value="{{$articles->name}}"  name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">آدرس سئو
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" placeholder="*انگلیسی وارد شود" id="slug" required="required"
                                           class="form-control col-md-7 col-xs-12" name="slug" value="{{$articles->slug}}"   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)" />


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">نویسنده
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" readonly="readonly" class="form-control col-md-7 col-xs-12"
                                           type="text" value="{{$articles->username}}"
                                           name="username" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">توضیحات کوتاه
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="description"
                                              class="form-control my-editor" value="{{$articles->description}}" >{{old('description')}}</textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fulldescription">توضیحات تکمیلی
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="fulldescription" rows="10"
                                              class="form-control my-editor" value="{{$articles->fulldescription}}" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">انتخاب دسته بندی</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div id="output"></div>
                                    <select class="chosen-select" name="categories" multiple style="width:400px">
                                        @foreach ($categories as $cat_id => $cat_name)
                                            <option value="{{$cat_id}}">{{$cat_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="control-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی برچسب</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="tags" name="tags" type="text" value="{{$articles->tags}}"  class="tags form-control"
                                               />
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="control-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">عکس</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{$articles->images}}" />

                                        <div id="holder" style="margin-bottom:15px;margin-top:15px;max-height:300px;"></div>

                                        <span class="input-group-btn">
                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                                <i class="fa fa-picture-o"></i> انتخاب
                                            </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text" name="images">

                                    </div>

                                </div>

                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">ارسال</button>

                                    <a href="{{route('admin.index')}}" class="btn btn-primary"> انصراف </a>

                                </div>
                            </div>

                        </form>
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


