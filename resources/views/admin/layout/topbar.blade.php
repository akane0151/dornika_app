<!-- top navigation -->
<div class="top_nav hidden-print">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="false">
                        <img src="{{asset('avatars/nonavatar.png')}}" alt="">{{Auth::guard("admin")->user()->full_name}}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
{{--                        <li>--}}
{{--                            <a href="/admin/settings">--}}
{{--                                <span>تنظیمات</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li><a href="/admin/changePassword">تغییر رمزعبور</a></li>
                        <li><a href="/admin/logout"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                       aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">0</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
{{--                        <li>--}}
{{--                            <a>--}}
{{--                                <span class="image"><img src="{{asset('build/images/img.jpg')}}" alt="Profile Image"/></span>--}}
{{--                                <span>--}}
{{--                          <span>مرتضی کریمی</span>--}}
{{--                          <span class="time">3 دقیقه پیش</span>--}}
{{--                        </span>--}}
{{--                                <span class="message">--}}
{{--                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....--}}
{{--                        </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
