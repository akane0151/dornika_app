<div class="col-md-3 left_col hidden-print">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="site_title"><span>پنل مدیریت</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('build/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>خوش آمدید,</span>
                <h2>{{$user->full_name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>عمومی</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-dashboard"></i> مدیریت <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/admin/dashboard">داشبورد</a></li>
                            <li><a href="/admin/users">کاربران</a></li>
                            <li><a href="/admin/goods">کالا</a></li>
                            <li><a href="/admin/roles">نقش ها</a></li>
                            <li><a href="/admin/permissions">دسترسی ها</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-gear"></i> تنظیمات <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/admin/pofile">حساب</a></li>
                            <li><a href="/admin/settings">سیستم</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="تنظیمات" href="/admin/settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="تمام صفحه" onclick="toggleFullScreen();">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="قفل" class="lock_btn">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="خروج" href="/admin/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
