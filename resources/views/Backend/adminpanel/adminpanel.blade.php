@extends('Backend.main')

@section('title')
    تنظیمات کلی سایت
@endsection


@section('content')

    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3><a href="{{route('admin.index')}}">مدیریت</a>/
                        تنظیمات کلی سایت
                        <small></small>
                    </h3>
                </div>

            </div>

            <div class="clearfix"></div>
            <div class="row">


                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">

                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab1" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb"
                                                                              role="tab" data-toggle="tab"
                                                                              aria-controls="home"
                                                                              aria-expanded="true"><i
                                                class="fa fa-gears"></i> تنظیمات اصلی </a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content22" role="tab"
                                                                        id="profile-tabb"
                                                                        data-toggle="tab" aria-controls="profile"
                                                                        aria-expanded="false"><i
                                                class="fa fa-newspaper-o"></i> اخبار </a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content33" role="tab"
                                                                        id="profile-tabb3"
                                                                        data-toggle="tab" aria-controls="profile"
                                                                        aria-expanded="false"><i
                                                class="fa fa-comment-o"></i> نظرات </a>
                                    </li>
                                </ul>
                                <div id="myTabContent2" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content11"
                                         aria-labelledby="home-tab">


                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">

                                                <ul class="list-unstyled top_profiles scroll-view">


                                                    <li class="media event">
                                                        <div class="pull-left col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" required="required" class="form-control"
                                                                   name="title">
                                                        </div>
                                                        <div class="media-body">
                                                            <a class="title"> عنوان سایت: </a>
                                                            <p>
                                                                <small> به طور مثال : وب سایت خرید و فروش محصولات
                                                                </small>
                                                            </p>
                                                        </div>
                                                    </li>


                                                    <li class="media event">
                                                        <div class="pull-left col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" required="required" class="form-control"
                                                                   name="title">
                                                        </div>
                                                        <div class="media-body">
                                                            <a class="title"> توضیح مختصر: </a>
                                                            <p>
                                                                <small> به طور مثال : وب سایت خرید و فروش محصولات
                                                                </small>
                                                            </p>
                                                        </div>
                                                    </li>

                                                    <li class="media event">
                                                        <div class="pull-left col-md-6 col-sm-6 col-xs-12 border-green">
                                                             <textarea name="description" class="form-control"></textarea>
                                                        </div>
                                                        <div class="media-body">
                                                            <a class="title"> کلید واژه: </a>
                                                            <p><small> به طور مثال : کلمات کلیدی برای جداسازی از ، استفاده شود </small>
                                                            </p>
                                                        </div>
                                                    </li>


                                                    <li class="media event">
                                                        <div class="pull-left col-md-6 col-sm-6 col-xs-12 border-green">
                                                            <select class="form-control" name="role">
                                                                <option>انتخاب گزینه</option>
                                                                <option value="1">مدیر کل</option>
                                                                <option value="2">مدیر ارشد</option>
                                                                <option value="3">کاربر</option>
                                                            </select>                                                        </div>
                                                        <div class="media-body">
                                                            <a class="title"> نوع ویرایشگر برای ارسال خبر: </a>
                                                            <p><small> انتخاب ویرایشگر مورد نظر جهت ویرایش یا اضافه کردن اخبار </small>
                                                            </p>
                                                        </div>
                                                    </li>



                                                    <li class="media event">
                                                        <div class="pull-left col-md-6 col-sm-6 col-xs-12">
                                                            <input type="checkbox" class="js-switch"/>

                                                        </div>
                                                        <div class="media-body">
                                                            <a class="title"> غیر فعال بودن سایت: </a>
                                                            <p>
                                                                <small>بستن سایت از دسترسی دیگران (فقط مدیریت امکان مشاهده سایت را دارد).
                                                                </small>
                                                            </p>
                                                        </div>
                                                    </li>


                                                    <li class="media event">
                                                        <div class="pull-left col-md-6 col-sm-6 col-xs-12">
                                                            <textarea name="description" class="form-control"></textarea>
                                                        </div>
                                                        <div class="media-body">
                                                            <a class="title"> علت غیرفعال كردن سایت:</a>
                                                            <p><small> توضیحی که به هنگام غیرفعال بودن سایت، قابل مشاهده برای کاربران باشد.	 </small>
                                                            </p>
                                                        </div>
                                                    </li>



                                                </ul>
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> ذخیره </button>


                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content22"
                                         aria-labelledby="profile-tab">
                                        <p>شما به این بخش دسترسی نداریداست.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content33"
                                         aria-labelledby="profile-tab">
                                        <p>شما به این بخش دسترسی ندارید</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
<!-- Switchery -->
<script src="../vendors/switchery/dist/switchery.min.js"></script>
