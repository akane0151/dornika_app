<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="{{asset('build/images/favicon.ico')}}" type="image/ico"/>
    <title>{{config('app.name')}}</title>
    @include('layouts.head')
</head>
<!-- /header content -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- top navigation -->
        <div class="top_nav_home hidden-print">
            <div class="nav_menu">
                <nav>
                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::guard('admin')->check())
                            <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">

                                    <img src="{{asset('avatars/nonavatar.png')}}" alt="">

                                {{Auth::guard('admin')->user()->full_name}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="#"> پروفایل</a></li>
                                <li><a href="/admin/logout"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                            </ul>
                        </li>
                            <li class="">
                                <a href="/admin/dashboard">پنل مدیریت
                                </a>
                            </li>
                        @elseif(Auth::guard('web')->check())
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false">
                                    @if(Auth::guard('web')->user()->avatar!=null)
                                        <img src="{{asset('avatars400x400/'.Auth::user()->avatar)}}" alt="">
                                    @else
                                        <img src="{{asset('avatars/nonavatar.png')}}" alt="">
                                    @endif

                                    {{Auth::guard('web')->user()->first_name.' '.Auth::guard('web')->user()->last_name}}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="/user/profile"> پروفایل</a></li>
                                    <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                                </ul>
                            </li>
                        @else
                        <li>
                           <button class="btn btn-default" data-toggle="modal"
                                   data-target=".login-modal-sm" style="margin: 10px;">ورود/ثبت نام</button>
                            <div class="modal fade login-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel2">ورود</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form id="demo-form">
                                                <label for="username">نام کاربری <span class="required">*</span> :</label>
                                                <input type="text" id="username" class="form-control" name="username" required/>

                                                <label for="password">رمزعبور <span class="required">*</span> :</label>
                                                <input type="password" id="password" class="form-control" name="password" required/>
                                            <hr/>
                                                <p id="login-loading" class="text-center text-warning" style="display: none;">در حال احراز هویت...</p>
                                                <p id="login-error" class="text-center red" style="display: none;"></p>
                                                <p id="login-success" class="text-center green" style="display: none;">ورود به سامانه انجام شد!</p>
                                                <p>کاربر جدید هستید؟ <a href="register">عضویت در سامانه</a></p>

                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                            <button type="button" class="btn btn-primary login-btn">ورورد</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /modals -->
                        </li>
                            @endif
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="/">صفحه اصلی</a>
                            </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- /header content -->

        <!-- page content -->
        <div class="right_col main_col" role="main">
            <div class="">
                @yield('content')
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->
        <footer class="hidden-print">
            <div class="pull-left">
                توسعه یافته توسط علی کاملی - وب اپلیکیشن Eragon
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

@include('layouts.footer')
<script>
    $(document).ready(function () {

        $(".login-modal-sm").on("click",".login-btn", function(event) {
            event.preventDefault();
            //alert(sdate.toString("yyyy-MM-dd HH:mm:ss"));
            var username = $(".login-modal-sm #username").val();
            var password = $(".login-modal-sm #password").val();
            $("#login-error").hide();
            $("#login-success").hide();
            $("#login-loading").show();
            $.ajax({
                type: "POST",
                url: "/login",
                data: {
                    _token: "{{csrf_token()}}",
                    username: username,
                    password: password,
                },
                success: function(data){
                    if(data.success==false){
                        $("#login-loading").hide();
                        $("#login-error").html(data.error);
                        $("#login-error").show();
                    } else if(data.success==true){
                        $("#login-loading").hide();
                        $("#login-error").hide();
                        $("#login-success").show();
                        sleep(1000);
                        window.location.replace("/");
                    }
                },error: function (reject) {

                }
            });
            return false;
        });
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
    });

</script>
</body>
</html>
