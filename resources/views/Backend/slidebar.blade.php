<div class="col-md-3 left_col hidden-print">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('admin.index')}}" class="site_title"><i class="fa fa-paw"></i> <span>دمو مدیریت</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{url('build/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>خوش آمدید,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>عمومی</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> خانه <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                        </ul>
                    </li>


                    <li><a><i class="fa fa-shopping-cart"></i> کاربران <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.users.create')}}">ایجاد کاربر</a></li>
                            <li><a href="{{route('admin.users')}}">مشاهده کاربران</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-shopping-cart"></i> محصولات <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.article.create')}}">ایجاد محصول</a></li>
                            <li><a href="{{route('admin.article')}}">مشاهده محصولات</a></li>
                        </ul>
                    </li>



                    <li><a><i class="fa fa-sitemap"></i>تنظیمات <span
                                class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">


                            <li><a>دسته بندی ها<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="{{route('admin.category.create')}}">ایجاد دسته بندی</a>
                                    </li>
                                    <li class="sub_menu"><a href="{{route('admin.category')}}">مشاهده دسته بندی ها</a>
                                    </li>
                                </ul>
                            </li>



                        </ul>
                    </li>
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="تنظیمات">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="تمام صفحه" onclick="toggleFullScreen();">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="قفل" class="lock_btn">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="خروج" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
