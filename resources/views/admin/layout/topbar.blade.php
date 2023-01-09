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
                        <li><a href="/admin/changePassword">تغییر رمزعبور</a></li>
                        <li><a href="/admin/logout"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/">صفحه اصلی</a>
                </li>

            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
