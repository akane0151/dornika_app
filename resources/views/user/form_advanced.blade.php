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
    <title>Gentelella Alela! | قالب مدیریت رایگان </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    
<link href="{{asset('vendors/normalize-css/normalize.css')}}" rel="stylesheet">
<link href="{{asset('vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{asset('vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
<!-- Bootstrap Colorpicker -->
<link href="{{asset('vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">

<link href="{{asset('vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>
<!-- /header content -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col hidden-print">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('build/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>خوش آمدید,</span>
                        <h2>مرتضی کریمی</h2>
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
                                    <li><a href="index.html">داشبورد</a></li>
                                    <li><a href="index2.html">داشبورد ۲</a></li>
                                    <li><a href="index3.html">داشبورد ۳</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> فرم <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="form.html">فرم عمومی</a></li>
                                    <li><a href="form_advanced.html">قطعات پیشرفته</a></li>
                                    <li><a href="form_validation.html">فرم اعتبار سنجی</a></li>
                                    <li><a href="form_wizards.html">فرم جادوگر</a></li>
                                    <li><a href="form_upload.html">فرم بارگذاری</a></li>
                                    <li><a href="form_buttons.html">فرم کلید ها</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> عناصر ظاهری <span
                                    class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="general_elements.html">عناصر عمومی</a></li>
                                    <li><a href="media_gallery.html">گالری چندرسانه ای</a></li>
                                    <li><a href="typography.html">تایپو گرافی</a></li>
                                    <li><a href="icons.html">آیکون ها</a></li>
                                    <li><a href="glyphicons.html">Glyphicons</a></li>
                                    <li><a href="widgets.html">ابزارک</a></li>
                                    <li><a href="invoice.html">صورت حساب</a></li>
                                    <li><a href="inbox.html">صندوق</a></li>
                                    <li><a href="calendar.html">تقویم</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-table"></i> جداول <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="tables.html">جداول</a></li>
                                    <li><a href="tables_dynamic.html">جدول پویا</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> ارائه داده <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="chartjs.html">Chart JS</a></li>
                                    <li><a href="chartjs2.html">Chart JS2</a></li>
                                    <li><a href="morisjs.html">Moris JS</a></li>
                                    <li><a href="echarts.html">ECharts</a></li>
                                    <li><a href="other_charts.html">چارت های دیگر</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-clone"></i>طرح بندی <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="fixed_sidebar.html">نوار کناری ثابت</a></li>
                                    <li><a href="fixed_footer.html">پاورقی ثابت</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>به صورت زنده</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-bug"></i> صفحات اضافی <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="e_commerce.html">تجارت الکترونیک</a></li>
                                    <li><a href="projects.html">پروژه ها</a></li>
                                    <li><a href="project_detail.html">جزئیات پروژه</a></li>
                                    <li><a href="contacts.html">اطلاعات تماس</a></li>
                                    <li><a href="profile.html">نمایه</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-windows"></i> افزودنیهای پیشنهاد شده <span
                                    class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="page_403.html">403 ارور</a></li>
                                    <li><a href="page_404.html">404 ارور</a></li>
                                    <li><a href="page_500.html">500 ارور</a></li>
                                    <li><a href="plain_page.html">صفحه ساده</a></li>
                                    <li><a href="login.html">صفحه ورود</a></li>
                                    <li><a href="pricing_tables.html">جداول قیمت</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-sitemap"></i> منو چند سطحی <span
                                    class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#level1_1">سطح یک</a>
                                    <li><a>سطح یک<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li class="sub_menu"><a href="level2.html">سطح دو</a>
                                            </li>
                                            <li><a href="#level2_1">سطح دو</a>
                                            </li>
                                            <li><a href="#level2_2">سطح دو</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#level1_2">سطح یک</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> صفحه مقصد <span
                                    class="label label-success pull-left">به زودی</span></a></li>
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
                                <img src="{{asset('build/images/img.jpg')}}" alt="">مرتضی کریمی
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> نمایه</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>تنظیمات</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">کمک</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('build/images/img.jpg')}}"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('build/images/img.jpg')}}"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('build/images/img.jpg')}}"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('build/images/img.jpg')}}"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>مشاهده تمام اعلان ها</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- /header content -->
        
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>فرم پیشرفته</h3>
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
            <!-- form input mask -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>ورودی ماسک</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">تاریخ ماسک</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">تلفن ماسک</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">ماسک شخصی شده</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" data-inputmask="'mask': '99-999999'">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">شماره سریال</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control"
                                           data-inputmask="'mask' : '****-****-****-****-****-***'">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">شماره مالیاتی</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" data-inputmask="'mask' : '99-99999999'">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">ماسک کارت اعتباری</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control"
                                           data-inputmask="'mask' : '9999-9999-9999-9999'">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="ln_solid"></div>

                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">انصراف</button>
                                    <button type="submit" class="btn btn-success">ارسال</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /form input mask -->

            <!-- form color picker -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>انتخاب کننده رنگ</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی پیش فرض</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="demo1 form-control" value="#5367ce"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">طرح بندی شده</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2">
                                        <span class="input-group-addon"><i></i></span>
                                        <input type="text" value="#e01ab5" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">خط افقی</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control demo colorpicker-element"
                                           data-horizontal="true" id="demo_forceformat" value="#8fff00">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">خط عمودی</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control demo colorpicker-element"
                                           id="demo_forceformat3" value="#8fff00">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی درونی</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="well">
                                        <div id="demo_cont" class="demo demo-auto inl-bl colorpicker-element"
                                             data-container="#demo_cont" data-color="rgba(150,216,62,0.55)"
                                             data-inline="true"></div>
                                        <div class="demo demo-auto inl-bl colorpicker-element" data-container="true"
                                             data-color="rgb(50,216,62)" data-inline="true"
                                             style="margin-left:20px;"></div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /form color picker -->

            <!-- form input knob -->
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>دستگیره ورودی</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-2">
                            <p>نمایش مقدار</p>
                            <input class="knob" data-width="100" data-height="120" data-min="-100"
                                   data-displayPrevious=true data-fgColor="#26B99A" value="44">
                        </div>
                        <div class="col-md-2">
                            <p>&#215; حالت 'cursor'</p>
                            <input class="knob" style="display:inline;" data-width="100" data-height="120"
                                   data-cursor=true
                                   data-fgColor="#34495E" value="29">
                        </div>
                        <div class="col-md-2">
                            <p>قدم های 0.1</p>
                            <input class="knob" data-width="100" data-height="120" data-min="-10000"
                                   data-displayPrevious=true data-fgColor="#26B99A" data-max="10000" data-step=".1"
                                   value="0">
                        </div>
                        <div class="col-md-2">
                            <p>قوس زاویه</p>
                            <input class="knob" data-width="100" data-height="120" data-angleOffset=-125
                                   data-angleArc=250 data-fgColor="#34495E" data-rotation="anticlockwise" value="35">
                        </div>
                        <div class="col-md-2">
                            <p>طراحی جایگزین</p>
                            <input class="knob" data-width="110" data-height="120" data-displayPrevious=true
                                   data-fgColor="#26B99A" data-skin="tron" data-thickness=".2" value="75">
                        </div>
                        <div class="col-md-2">
                            <p>زاویه با فاصله</p>
                            <input class="knob" data-width="100" data-height="120" data-angleOffset=90
                                   data-linecap=round data-fgColor="#26B99A" value="35">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /form input knob -->

        </div>


        <div class="row">
            <div class="col-md-12">

                <!-- form date pickers -->
                <div class="x_panel" style="">
                    <div class="x_title">
                        <h2>انتخاب کننده تاریخ
                            <small> در دسترس با طرح های متعدد</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <div class="well" style="overflow: auto">
                            <div class="col-md-4">
                                <div id="reportrange_right" class="pull-right"
                                     style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p>برگزاری محدوده تاریخ با باز کردن به سمت راست و چپ</p>
                            </div>
                            <div class="col-md-4">
                                <div id="reportrange" class="pull-left"
                                     style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>
                            </div>
                        </div>


                        <div class="well" style="overflow: auto">
                            <div class="col-md-4">
                                انتخاب طول تاریخ
                                <form class="form-horizontal">
                                    <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <span class="add-on input-group-addon"><i
                                                            class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                    <input type="text" style="width: 200px" name="reservation"
                                                           id="reservation" class="form-control"
                                                           value="01/01/2016 - 01/25/2016"/>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>

                            <div class="col-md-5">
                                تاریخ و زمان
                                <form class="form-horizontal">
                                    <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <span class="add-on input-group-addon"><i
                                                            class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                    <input type="text" name="reservation-time" id="reservation-time"
                                                           class="form-control" value="01/01/2016 - 01/25/2016"/>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>

                        <div class="row calendar-exibit">
                            <div class="col-md-3 text-center">
                                <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_1 xdisplay">
                                    <div class="calendar left single" style="display: block;">
                                        <div class="daterangepicker_input"><input class="input-mini form-control active"
                                                                                  type="text"
                                                                                  name="daterangepicker_start" value=""
                                                                                  style="display: none;"><i
                                                class="fa fa-calendar glyphicon glyphicon-calendar"
                                                style="display: none;"></i>
                                            <div class="calendar-time" style="display: none;">
                                                <div></div>
                                                <i class="fa fa-clock-o glyphicon glyphicon-time"></i></div>
                                        </div>
                                        <div class="calendar-table">
                                            <table class="table-condensed">
                                                <thead>
                                                <tr>
                                                    <th class="prev available"><i
                                                            class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i>
                                                    </th>
                                                    <th colspan="5" class="month">Oct 2016</th>
                                                    <th class="next available"><i
                                                            class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="weekend off available" data-title="r0c0">25</td>
                                                    <td class="off available" data-title="r0c1">26</td>
                                                    <td class="off available" data-title="r0c2">27</td>
                                                    <td class="off available" data-title="r0c3">28</td>
                                                    <td class="off available" data-title="r0c4">29</td>
                                                    <td class="off available" data-title="r0c5">30</td>
                                                    <td class="weekend available" data-title="r0c6">1</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r1c0">2</td>
                                                    <td class="available" data-title="r1c1">3</td>
                                                    <td class="available" data-title="r1c2">4</td>
                                                    <td class="available" data-title="r1c3">5</td>
                                                    <td class="available" data-title="r1c4">6</td>
                                                    <td class="available" data-title="r1c5">7</td>
                                                    <td class="weekend available" data-title="r1c6">8</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r2c0">9</td>
                                                    <td class="available" data-title="r2c1">10</td>
                                                    <td class="available" data-title="r2c2">11</td>
                                                    <td class="available" data-title="r2c3">12</td>
                                                    <td class="available" data-title="r2c4">13</td>
                                                    <td class="available" data-title="r2c5">14</td>
                                                    <td class="weekend available" data-title="r2c6">15</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r3c0">16</td>
                                                    <td class="available" data-title="r3c1">17</td>
                                                    <td class="today active start-date active end-date available"
                                                        data-title="r3c2">18
                                                    </td>
                                                    <td class="available" data-title="r3c3">19</td>
                                                    <td class="available" data-title="r3c4">20</td>
                                                    <td class="available" data-title="r3c5">21</td>
                                                    <td class="weekend available" data-title="r3c6">22</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r4c0">23</td>
                                                    <td class="available" data-title="r4c1">24</td>
                                                    <td class="available" data-title="r4c2">25</td>
                                                    <td class="available" data-title="r4c3">26</td>
                                                    <td class="available" data-title="r4c4">27</td>
                                                    <td class="available" data-title="r4c5">28</td>
                                                    <td class="weekend available" data-title="r4c6">29</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r5c0">30</td>
                                                    <td class="available" data-title="r5c1">31</td>
                                                    <td class="off available" data-title="r5c2">1</td>
                                                    <td class="off available" data-title="r5c3">2</td>
                                                    <td class="off available" data-title="r5c4">3</td>
                                                    <td class="off available" data-title="r5c5">4</td>
                                                    <td class="weekend off available" data-title="r5c6">5</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="calendar right" style="display: none;">
                                        <div class="daterangepicker_input"><input class="input-mini form-control"
                                                                                  type="text" name="daterangepicker_end"
                                                                                  value="" style="display: none;"><i
                                                class="fa fa-calendar glyphicon glyphicon-calendar"
                                                style="display: none;"></i>
                                            <div class="calendar-time" style="display: none;">
                                                <div></div>
                                                <i class="fa fa-clock-o glyphicon glyphicon-time"></i></div>
                                        </div>
                                        <div class="calendar-table">
                                            <table class="table-condensed">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th colspan="5" class="month">Nov 2016</th>
                                                    <th class="next available"><i
                                                            class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="weekend off available" data-title="r0c0">30</td>
                                                    <td class="off available" data-title="r0c1">31</td>
                                                    <td class="available" data-title="r0c2">1</td>
                                                    <td class="available" data-title="r0c3">2</td>
                                                    <td class="available" data-title="r0c4">3</td>
                                                    <td class="available" data-title="r0c5">4</td>
                                                    <td class="weekend available" data-title="r0c6">5</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r1c0">6</td>
                                                    <td class="available" data-title="r1c1">7</td>
                                                    <td class="available" data-title="r1c2">8</td>
                                                    <td class="available" data-title="r1c3">9</td>
                                                    <td class="available" data-title="r1c4">10</td>
                                                    <td class="available" data-title="r1c5">11</td>
                                                    <td class="weekend available" data-title="r1c6">12</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r2c0">13</td>
                                                    <td class="available" data-title="r2c1">14</td>
                                                    <td class="available" data-title="r2c2">15</td>
                                                    <td class="available" data-title="r2c3">16</td>
                                                    <td class="available" data-title="r2c4">17</td>
                                                    <td class="available" data-title="r2c5">18</td>
                                                    <td class="weekend available" data-title="r2c6">19</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r3c0">20</td>
                                                    <td class="available" data-title="r3c1">21</td>
                                                    <td class="available" data-title="r3c2">22</td>
                                                    <td class="available" data-title="r3c3">23</td>
                                                    <td class="available" data-title="r3c4">24</td>
                                                    <td class="available" data-title="r3c5">25</td>
                                                    <td class="weekend available" data-title="r3c6">26</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r4c0">27</td>
                                                    <td class="available" data-title="r4c1">28</td>
                                                    <td class="available" data-title="r4c2">29</td>
                                                    <td class="available" data-title="r4c3">30</td>
                                                    <td class="off available" data-title="r4c4">1</td>
                                                    <td class="off available" data-title="r4c5">2</td>
                                                    <td class="weekend off available" data-title="r4c6">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend off available" data-title="r5c0">4</td>
                                                    <td class="off available" data-title="r5c1">5</td>
                                                    <td class="off available" data-title="r5c2">6</td>
                                                    <td class="off available" data-title="r5c3">7</td>
                                                    <td class="off available" data-title="r5c4">8</td>
                                                    <td class="off available" data-title="r5c5">9</td>
                                                    <td class="weekend off available" data-title="r5c6">10</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="ranges" style="display: none;">
                                        <div class="range_inputs">
                                            <button class="applyBtn btn btn-sm btn-success" type="button">Apply</button>
                                            <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <fieldset>
                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                       id="single_cal1" placeholder="First Name"
                                                       aria-describedby="inputSuccess2Status">
                                                <span class="fa fa-calendar-o form-control-feedback left"
                                                      aria-hidden="true"></span>
                                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>

                            <div class="col-md-3 text-center">
                                <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_2 xdisplay">
                                    <div class="calendar left single" style="display: block;">
                                        <div class="daterangepicker_input"><input class="input-mini form-control active"
                                                                                  type="text"
                                                                                  name="daterangepicker_start" value=""
                                                                                  style="display: none;"><i
                                                class="fa fa-calendar glyphicon glyphicon-calendar"
                                                style="display: none;"></i>
                                            <div class="calendar-time" style="display: none;">
                                                <div></div>
                                                <i class="fa fa-clock-o glyphicon glyphicon-time"></i></div>
                                        </div>
                                        <div class="calendar-table">
                                            <table class="table-condensed">
                                                <thead>
                                                <tr>
                                                    <th class="prev available"><i
                                                            class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i>
                                                    </th>
                                                    <th colspan="5" class="month">Oct 2016</th>
                                                    <th class="next available"><i
                                                            class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="weekend off available" data-title="r0c0">25</td>
                                                    <td class="off available" data-title="r0c1">26</td>
                                                    <td class="off available" data-title="r0c2">27</td>
                                                    <td class="off available" data-title="r0c3">28</td>
                                                    <td class="off available" data-title="r0c4">29</td>
                                                    <td class="off available" data-title="r0c5">30</td>
                                                    <td class="weekend available" data-title="r0c6">1</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r1c0">2</td>
                                                    <td class="available" data-title="r1c1">3</td>
                                                    <td class="available" data-title="r1c2">4</td>
                                                    <td class="available" data-title="r1c3">5</td>
                                                    <td class="available" data-title="r1c4">6</td>
                                                    <td class="available" data-title="r1c5">7</td>
                                                    <td class="weekend available" data-title="r1c6">8</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r2c0">9</td>
                                                    <td class="available" data-title="r2c1">10</td>
                                                    <td class="available" data-title="r2c2">11</td>
                                                    <td class="available" data-title="r2c3">12</td>
                                                    <td class="available" data-title="r2c4">13</td>
                                                    <td class="available" data-title="r2c5">14</td>
                                                    <td class="weekend available" data-title="r2c6">15</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r3c0">16</td>
                                                    <td class="available" data-title="r3c1">17</td>
                                                    <td class="today active start-date active end-date available"
                                                        data-title="r3c2">18
                                                    </td>
                                                    <td class="available" data-title="r3c3">19</td>
                                                    <td class="available" data-title="r3c4">20</td>
                                                    <td class="available" data-title="r3c5">21</td>
                                                    <td class="weekend available" data-title="r3c6">22</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r4c0">23</td>
                                                    <td class="available" data-title="r4c1">24</td>
                                                    <td class="available" data-title="r4c2">25</td>
                                                    <td class="available" data-title="r4c3">26</td>
                                                    <td class="available" data-title="r4c4">27</td>
                                                    <td class="available" data-title="r4c5">28</td>
                                                    <td class="weekend available" data-title="r4c6">29</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r5c0">30</td>
                                                    <td class="available" data-title="r5c1">31</td>
                                                    <td class="off available" data-title="r5c2">1</td>
                                                    <td class="off available" data-title="r5c3">2</td>
                                                    <td class="off available" data-title="r5c4">3</td>
                                                    <td class="off available" data-title="r5c5">4</td>
                                                    <td class="weekend off available" data-title="r5c6">5</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="calendar right" style="display: none;">
                                        <div class="daterangepicker_input"><input class="input-mini form-control"
                                                                                  type="text" name="daterangepicker_end"
                                                                                  value="" style="display: none;"><i
                                                class="fa fa-calendar glyphicon glyphicon-calendar"
                                                style="display: none;"></i>
                                            <div class="calendar-time" style="display: none;">
                                                <div></div>
                                                <i class="fa fa-clock-o glyphicon glyphicon-time"></i></div>
                                        </div>
                                        <div class="calendar-table">
                                            <table class="table-condensed">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th colspan="5" class="month">Nov 2016</th>
                                                    <th class="next available"><i
                                                            class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="weekend off available" data-title="r0c0">30</td>
                                                    <td class="off available" data-title="r0c1">31</td>
                                                    <td class="available" data-title="r0c2">1</td>
                                                    <td class="available" data-title="r0c3">2</td>
                                                    <td class="available" data-title="r0c4">3</td>
                                                    <td class="available" data-title="r0c5">4</td>
                                                    <td class="weekend available" data-title="r0c6">5</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r1c0">6</td>
                                                    <td class="available" data-title="r1c1">7</td>
                                                    <td class="available" data-title="r1c2">8</td>
                                                    <td class="available" data-title="r1c3">9</td>
                                                    <td class="available" data-title="r1c4">10</td>
                                                    <td class="available" data-title="r1c5">11</td>
                                                    <td class="weekend available" data-title="r1c6">12</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r2c0">13</td>
                                                    <td class="available" data-title="r2c1">14</td>
                                                    <td class="available" data-title="r2c2">15</td>
                                                    <td class="available" data-title="r2c3">16</td>
                                                    <td class="available" data-title="r2c4">17</td>
                                                    <td class="available" data-title="r2c5">18</td>
                                                    <td class="weekend available" data-title="r2c6">19</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r3c0">20</td>
                                                    <td class="available" data-title="r3c1">21</td>
                                                    <td class="available" data-title="r3c2">22</td>
                                                    <td class="available" data-title="r3c3">23</td>
                                                    <td class="available" data-title="r3c4">24</td>
                                                    <td class="available" data-title="r3c5">25</td>
                                                    <td class="weekend available" data-title="r3c6">26</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r4c0">27</td>
                                                    <td class="available" data-title="r4c1">28</td>
                                                    <td class="available" data-title="r4c2">29</td>
                                                    <td class="available" data-title="r4c3">30</td>
                                                    <td class="off available" data-title="r4c4">1</td>
                                                    <td class="off available" data-title="r4c5">2</td>
                                                    <td class="weekend off available" data-title="r4c6">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend off available" data-title="r5c0">4</td>
                                                    <td class="off available" data-title="r5c1">5</td>
                                                    <td class="off available" data-title="r5c2">6</td>
                                                    <td class="off available" data-title="r5c3">7</td>
                                                    <td class="off available" data-title="r5c4">8</td>
                                                    <td class="off available" data-title="r5c5">9</td>
                                                    <td class="weekend off available" data-title="r5c6">10</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="ranges" style="display: none;">
                                        <div class="range_inputs">
                                            <button class="applyBtn btn btn-sm btn-success" type="button">Apply</button>
                                            <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <fieldset>
                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                       id="single_cal2" placeholder="First Name"
                                                       aria-describedby="inputSuccess2Status2">
                                                <span class="fa fa-calendar-o form-control-feedback left"
                                                      aria-hidden="true"></span>
                                                <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-md-3 text-center">
                                <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_3 xdisplay">
                                    <div class="calendar left single" style="display: block;">
                                        <div class="daterangepicker_input"><input class="input-mini form-control active"
                                                                                  type="text"
                                                                                  name="daterangepicker_start" value=""
                                                                                  style="display: none;"><i
                                                class="fa fa-calendar glyphicon glyphicon-calendar"
                                                style="display: none;"></i>
                                            <div class="calendar-time" style="display: none;">
                                                <div></div>
                                                <i class="fa fa-clock-o glyphicon glyphicon-time"></i></div>
                                        </div>
                                        <div class="calendar-table">
                                            <table class="table-condensed">
                                                <thead>
                                                <tr>
                                                    <th class="prev available"><i
                                                            class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i>
                                                    </th>
                                                    <th colspan="5" class="month">Oct 2016</th>
                                                    <th class="next available"><i
                                                            class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="weekend off available" data-title="r0c0">25</td>
                                                    <td class="off available" data-title="r0c1">26</td>
                                                    <td class="off available" data-title="r0c2">27</td>
                                                    <td class="off available" data-title="r0c3">28</td>
                                                    <td class="off available" data-title="r0c4">29</td>
                                                    <td class="off available" data-title="r0c5">30</td>
                                                    <td class="weekend available" data-title="r0c6">1</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r1c0">2</td>
                                                    <td class="available" data-title="r1c1">3</td>
                                                    <td class="available" data-title="r1c2">4</td>
                                                    <td class="available" data-title="r1c3">5</td>
                                                    <td class="available" data-title="r1c4">6</td>
                                                    <td class="available" data-title="r1c5">7</td>
                                                    <td class="weekend available" data-title="r1c6">8</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r2c0">9</td>
                                                    <td class="available" data-title="r2c1">10</td>
                                                    <td class="available" data-title="r2c2">11</td>
                                                    <td class="available" data-title="r2c3">12</td>
                                                    <td class="available" data-title="r2c4">13</td>
                                                    <td class="available" data-title="r2c5">14</td>
                                                    <td class="weekend available" data-title="r2c6">15</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r3c0">16</td>
                                                    <td class="available" data-title="r3c1">17</td>
                                                    <td class="today active start-date active end-date available"
                                                        data-title="r3c2">18
                                                    </td>
                                                    <td class="available" data-title="r3c3">19</td>
                                                    <td class="available" data-title="r3c4">20</td>
                                                    <td class="available" data-title="r3c5">21</td>
                                                    <td class="weekend available" data-title="r3c6">22</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r4c0">23</td>
                                                    <td class="available" data-title="r4c1">24</td>
                                                    <td class="available" data-title="r4c2">25</td>
                                                    <td class="available" data-title="r4c3">26</td>
                                                    <td class="available" data-title="r4c4">27</td>
                                                    <td class="available" data-title="r4c5">28</td>
                                                    <td class="weekend available" data-title="r4c6">29</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r5c0">30</td>
                                                    <td class="available" data-title="r5c1">31</td>
                                                    <td class="off available" data-title="r5c2">1</td>
                                                    <td class="off available" data-title="r5c3">2</td>
                                                    <td class="off available" data-title="r5c4">3</td>
                                                    <td class="off available" data-title="r5c5">4</td>
                                                    <td class="weekend off available" data-title="r5c6">5</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="calendar right" style="display: none;">
                                        <div class="daterangepicker_input"><input class="input-mini form-control"
                                                                                  type="text" name="daterangepicker_end"
                                                                                  value="" style="display: none;"><i
                                                class="fa fa-calendar glyphicon glyphicon-calendar"
                                                style="display: none;"></i>
                                            <div class="calendar-time" style="display: none;">
                                                <div></div>
                                                <i class="fa fa-clock-o glyphicon glyphicon-time"></i></div>
                                        </div>
                                        <div class="calendar-table">
                                            <table class="table-condensed">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th colspan="5" class="month">Nov 2016</th>
                                                    <th class="next available"><i
                                                            class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="weekend off available" data-title="r0c0">30</td>
                                                    <td class="off available" data-title="r0c1">31</td>
                                                    <td class="available" data-title="r0c2">1</td>
                                                    <td class="available" data-title="r0c3">2</td>
                                                    <td class="available" data-title="r0c4">3</td>
                                                    <td class="available" data-title="r0c5">4</td>
                                                    <td class="weekend available" data-title="r0c6">5</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r1c0">6</td>
                                                    <td class="available" data-title="r1c1">7</td>
                                                    <td class="available" data-title="r1c2">8</td>
                                                    <td class="available" data-title="r1c3">9</td>
                                                    <td class="available" data-title="r1c4">10</td>
                                                    <td class="available" data-title="r1c5">11</td>
                                                    <td class="weekend available" data-title="r1c6">12</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r2c0">13</td>
                                                    <td class="available" data-title="r2c1">14</td>
                                                    <td class="available" data-title="r2c2">15</td>
                                                    <td class="available" data-title="r2c3">16</td>
                                                    <td class="available" data-title="r2c4">17</td>
                                                    <td class="available" data-title="r2c5">18</td>
                                                    <td class="weekend available" data-title="r2c6">19</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r3c0">20</td>
                                                    <td class="available" data-title="r3c1">21</td>
                                                    <td class="available" data-title="r3c2">22</td>
                                                    <td class="available" data-title="r3c3">23</td>
                                                    <td class="available" data-title="r3c4">24</td>
                                                    <td class="available" data-title="r3c5">25</td>
                                                    <td class="weekend available" data-title="r3c6">26</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r4c0">27</td>
                                                    <td class="available" data-title="r4c1">28</td>
                                                    <td class="available" data-title="r4c2">29</td>
                                                    <td class="available" data-title="r4c3">30</td>
                                                    <td class="off available" data-title="r4c4">1</td>
                                                    <td class="off available" data-title="r4c5">2</td>
                                                    <td class="weekend off available" data-title="r4c6">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend off available" data-title="r5c0">4</td>
                                                    <td class="off available" data-title="r5c1">5</td>
                                                    <td class="off available" data-title="r5c2">6</td>
                                                    <td class="off available" data-title="r5c3">7</td>
                                                    <td class="off available" data-title="r5c4">8</td>
                                                    <td class="off available" data-title="r5c5">9</td>
                                                    <td class="weekend off available" data-title="r5c6">10</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="ranges" style="display: none;">
                                        <div class="range_inputs">
                                            <button class="applyBtn btn btn-sm btn-success" type="button">Apply</button>
                                            <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <fieldset>
                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                       id="single_cal3" placeholder="First Name"
                                                       aria-describedby="inputSuccess2Status3">
                                                <span class="fa fa-calendar-o form-control-feedback left"
                                                      aria-hidden="true"></span>
                                                <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-md-3 text-center">
                                <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay">
                                    <div class="calendar left single" style="display: block;">
                                        <div class="daterangepicker_input"><input class="input-mini form-control active"
                                                                                  type="text"
                                                                                  name="daterangepicker_start" value=""
                                                                                  style="display: none;"><i
                                                class="fa fa-calendar glyphicon glyphicon-calendar"
                                                style="display: none;"></i>
                                            <div class="calendar-time" style="display: none;">
                                                <div></div>
                                                <i class="fa fa-clock-o glyphicon glyphicon-time"></i></div>
                                        </div>
                                        <div class="calendar-table">
                                            <table class="table-condensed">
                                                <thead>
                                                <tr>
                                                    <th class="prev available"><i
                                                            class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i>
                                                    </th>
                                                    <th colspan="5" class="month">Oct 2016</th>
                                                    <th class="next available"><i
                                                            class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="weekend off available" data-title="r0c0">25</td>
                                                    <td class="off available" data-title="r0c1">26</td>
                                                    <td class="off available" data-title="r0c2">27</td>
                                                    <td class="off available" data-title="r0c3">28</td>
                                                    <td class="off available" data-title="r0c4">29</td>
                                                    <td class="off available" data-title="r0c5">30</td>
                                                    <td class="weekend available" data-title="r0c6">1</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r1c0">2</td>
                                                    <td class="available" data-title="r1c1">3</td>
                                                    <td class="available" data-title="r1c2">4</td>
                                                    <td class="available" data-title="r1c3">5</td>
                                                    <td class="available" data-title="r1c4">6</td>
                                                    <td class="available" data-title="r1c5">7</td>
                                                    <td class="weekend available" data-title="r1c6">8</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r2c0">9</td>
                                                    <td class="available" data-title="r2c1">10</td>
                                                    <td class="available" data-title="r2c2">11</td>
                                                    <td class="available" data-title="r2c3">12</td>
                                                    <td class="available" data-title="r2c4">13</td>
                                                    <td class="available" data-title="r2c5">14</td>
                                                    <td class="weekend available" data-title="r2c6">15</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r3c0">16</td>
                                                    <td class="available" data-title="r3c1">17</td>
                                                    <td class="today active start-date active end-date available"
                                                        data-title="r3c2">18
                                                    </td>
                                                    <td class="available" data-title="r3c3">19</td>
                                                    <td class="available" data-title="r3c4">20</td>
                                                    <td class="available" data-title="r3c5">21</td>
                                                    <td class="weekend available" data-title="r3c6">22</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r4c0">23</td>
                                                    <td class="available" data-title="r4c1">24</td>
                                                    <td class="available" data-title="r4c2">25</td>
                                                    <td class="available" data-title="r4c3">26</td>
                                                    <td class="available" data-title="r4c4">27</td>
                                                    <td class="available" data-title="r4c5">28</td>
                                                    <td class="weekend available" data-title="r4c6">29</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r5c0">30</td>
                                                    <td class="available" data-title="r5c1">31</td>
                                                    <td class="off available" data-title="r5c2">1</td>
                                                    <td class="off available" data-title="r5c3">2</td>
                                                    <td class="off available" data-title="r5c4">3</td>
                                                    <td class="off available" data-title="r5c5">4</td>
                                                    <td class="weekend off available" data-title="r5c6">5</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="calendar right" style="display: none;">
                                        <div class="daterangepicker_input"><input class="input-mini form-control"
                                                                                  type="text" name="daterangepicker_end"
                                                                                  value="" style="display: none;"><i
                                                class="fa fa-calendar glyphicon glyphicon-calendar"
                                                style="display: none;"></i>
                                            <div class="calendar-time" style="display: none;">
                                                <div></div>
                                                <i class="fa fa-clock-o glyphicon glyphicon-time"></i></div>
                                        </div>
                                        <div class="calendar-table">
                                            <table class="table-condensed">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th colspan="5" class="month">Nov 2016</th>
                                                    <th class="next available"><i
                                                            class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="weekend off available" data-title="r0c0">30</td>
                                                    <td class="off available" data-title="r0c1">31</td>
                                                    <td class="available" data-title="r0c2">1</td>
                                                    <td class="available" data-title="r0c3">2</td>
                                                    <td class="available" data-title="r0c4">3</td>
                                                    <td class="available" data-title="r0c5">4</td>
                                                    <td class="weekend available" data-title="r0c6">5</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r1c0">6</td>
                                                    <td class="available" data-title="r1c1">7</td>
                                                    <td class="available" data-title="r1c2">8</td>
                                                    <td class="available" data-title="r1c3">9</td>
                                                    <td class="available" data-title="r1c4">10</td>
                                                    <td class="available" data-title="r1c5">11</td>
                                                    <td class="weekend available" data-title="r1c6">12</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r2c0">13</td>
                                                    <td class="available" data-title="r2c1">14</td>
                                                    <td class="available" data-title="r2c2">15</td>
                                                    <td class="available" data-title="r2c3">16</td>
                                                    <td class="available" data-title="r2c4">17</td>
                                                    <td class="available" data-title="r2c5">18</td>
                                                    <td class="weekend available" data-title="r2c6">19</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r3c0">20</td>
                                                    <td class="available" data-title="r3c1">21</td>
                                                    <td class="available" data-title="r3c2">22</td>
                                                    <td class="available" data-title="r3c3">23</td>
                                                    <td class="available" data-title="r3c4">24</td>
                                                    <td class="available" data-title="r3c5">25</td>
                                                    <td class="weekend available" data-title="r3c6">26</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend available" data-title="r4c0">27</td>
                                                    <td class="available" data-title="r4c1">28</td>
                                                    <td class="available" data-title="r4c2">29</td>
                                                    <td class="available" data-title="r4c3">30</td>
                                                    <td class="off available" data-title="r4c4">1</td>
                                                    <td class="off available" data-title="r4c5">2</td>
                                                    <td class="weekend off available" data-title="r4c6">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="weekend off available" data-title="r5c0">4</td>
                                                    <td class="off available" data-title="r5c1">5</td>
                                                    <td class="off available" data-title="r5c2">6</td>
                                                    <td class="off available" data-title="r5c3">7</td>
                                                    <td class="off available" data-title="r5c4">8</td>
                                                    <td class="off available" data-title="r5c5">9</td>
                                                    <td class="weekend off available" data-title="r5c6">10</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="ranges" style="display: none;">
                                        <div class="range_inputs">
                                            <button class="applyBtn btn btn-sm btn-success" type="button">Apply</button>
                                            <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <fieldset>
                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                       id="single_cal4" placeholder="First Name"
                                                       aria-describedby="inputSuccess2Status4">
                                                <span class="fa fa-calendar-o form-control-feedback left"
                                                      aria-hidden="true"></span>
                                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /form datepicker -->


                <!-- form grid slider -->
                <div class="x_panel" style="">
                    <div class="x_title">
                        <h2>Grid Slider</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row grid_slider">

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>نوار لغزنده شبکه پیش فرض با حداقل و حداکثر مقادیر</p>
                                <input type="text" id="range" value="" name="range"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>شبکه با برچسب های کشویی دور از ظرف خود است</p>
                                <input type="text" id="range_25" value="" name="range"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>شبکه با برچسب داخل ظرف با استفاده از force_edges صفت</p>
                                <input type="text" id="range_27" value="" name="range"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>ایجاد شبکه با مراحل پیش تعریف شده</p>
                                <input type="text" id="range_26" value="" name="range"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>از کشیدن برچسب ها جلوگیری کنید</p>
                                <input type="text" id="range_31" value="" name="range"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>شبکه با حداقل و حداکثر مقادیر</p>
                                <input type="text" class="range_min_max" value="" name="range"/>
                            </div>
                            <div>
                                <p>شبکه با زمان در قالب 24 ساعته</p>
                                <input type="text" class="range_time24" value="" name="range"/>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <br/>
                <!-- /form grid slider -->

                <!-- image cropping -->
                <div class="container cropper">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="img-container">
                                <img id="image" src="{{asset('build/images/cropper.jpg')}}" alt="Picture">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="docs-preview clearfix">
                                <div class="img-preview preview-lg"></div>
                                <div class="img-preview preview-md"></div>
                                <div class="img-preview preview-sm"></div>
                                <div class="img-preview preview-xs"></div>
                            </div>

                            <div class="docs-data">
                                <div class="input-group input-group-sm">
                                    <label class="input-group-addon" for="dataX">X</label>
                                    <input type="text" class="form-control" id="dataX" placeholder="x">
                                    <span class="input-group-addon">px</span>
                                </div>
                                <div class="input-group input-group-sm">
                                    <label class="input-group-addon" for="dataY">Y</label>
                                    <input type="text" class="form-control" id="dataY" placeholder="y">
                                    <span class="input-group-addon">px</span>
                                </div>
                                <div class="input-group input-group-sm">
                                    <label class="input-group-addon" for="dataWidth">عرض</label>
                                    <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                    <span class="input-group-addon">px</span>
                                </div>
                                <div class="input-group input-group-sm">
                                    <label class="input-group-addon" for="dataHeight">ارتفاع</label>
                                    <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                    <span class="input-group-addon">px</span>
                                </div>
                                <div class="input-group input-group-sm">
                                    <label class="input-group-addon" for="dataRotate">چرخش</label>
                                    <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                    <span class="input-group-addon">deg</span>
                                </div>
                                <div class="input-group input-group-sm">
                                    <label class="input-group-addon" for="dataScaleX">مقیاس X</label>
                                    <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                </div>
                                <div class="input-group input-group-sm">
                                    <label class="input-group-addon" for="dataScaleY">مقیاس Y</label>
                                    <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 docs-buttons">
                            <!-- <h3 class="page-header">Toolbar:</h3> -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-method="setDragMode"
                                        data-option="move" title="Move">
                          <span class="docs-tooltip" data-toggle="tooltip"
                                title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                            <span class="fa fa-arrows"></span>
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="setDragMode"
                                        data-option="crop" title="Crop">
                          <span class="docs-tooltip" data-toggle="tooltip"
                                title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                            <span class="fa fa-crop"></span>
                          </span>
                                </button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1"
                                        title="Zoom In">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
                            <span class="fa fa-search-plus"></span>
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1"
                                        title="Zoom Out">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
                            <span class="fa fa-search-minus"></span>
                          </span>
                                </button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-method="move" data-option="-10"
                                        data-second-option="0" title="Move Left">
                          <span class="docs-tooltip" data-toggle="tooltip"
                                title="$().cropper(&quot;move&quot;, -10, 0)">
                            <span class="fa fa-arrow-left"></span>
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="move" data-option="10"
                                        data-second-option="0" title="Move Right">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)">
                            <span class="fa fa-arrow-right"></span>
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="move" data-option="0"
                                        data-second-option="-10" title="Move Up">
                          <span class="docs-tooltip" data-toggle="tooltip"
                                title="$().cropper(&quot;move&quot;, 0, -10)">
                            <span class="fa fa-arrow-up"></span>
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="move" data-option="0"
                                        data-second-option="10" title="Move Down">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)">
                            <span class="fa fa-arrow-down"></span>
                          </span>
                                </button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45"
                                        title="Rotate Left">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
                            <span class="fa fa-rotate-left"></span>
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="rotate" data-option="45"
                                        title="Rotate Right">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
                            <span class="fa fa-rotate-right"></span>
                          </span>
                                </button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1"
                                        title="Flip Horizontal">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)">
                            <span class="fa fa-arrows-h"></span>
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1"
                                        title="Flip Vertical">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;, -1)">
                            <span class="fa fa-arrows-v"></span>
                          </span>
                                </button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)">
                            <span class="fa fa-check"></span>
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="clear" title="پاک کردن">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
                            <span class="fa fa-remove"></span>
                          </span>
                                </button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
                            <span class="fa fa-lock"></span>
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
                            <span class="fa fa-unlock"></span>
                          </span>
                                </button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
                            <span class="fa fa-refresh"></span>
                          </span>
                                </button>
                                <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                                    <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                    <span class="docs-tooltip" data-toggle="tooltip"
                                          title="وارد کردن تصویر با URL های لکه">
                            <span class="fa fa-upload"></span>
                          </span>
                                </label>
                                <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
                            <span class="fa fa-power-off"></span>
                          </span>
                                </button>
                            </div>

                            <div class="btn-group btn-group-crop">
                                <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
                          <span class="docs-tooltip" data-toggle="tooltip"
                                title="$().cropper(&quot;getCroppedCanvas&quot;)">
                            Get Cropped Canvas
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="getCroppedCanvas"
                                        data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                          <span class="docs-tooltip" data-toggle="tooltip"
                                title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                            160&times;90
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="getCroppedCanvas"
                                        data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                          <span class="docs-tooltip" data-toggle="tooltip"
                                title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                            320&times;180
                          </span>
                                </button>
                            </div>

                            <!-- Show the cropped image in modal -->
                            <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true"
                                 aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;
                                            </button>
                                            <h4 class="modal-title" id="getCroppedCanvasTitle">برش خورده</h4>
                                        </div>
                                        <div class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">بستن
                                            </button>
                                            <a class="btn btn-primary" id="download" href="javascript:void(0);"
                                               download="cropped.png')}}">دانلود</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal -->

                            <button type="button" class="btn btn-primary" data-method="getData" data-option
                                    data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
                          دریافت اطلاعات
                        </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="setData" data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)">
                          تنظیم داده
                        </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="getContainerData" data-option
                                    data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip"
                              title="$().cropper(&quot;getContainerData&quot;)">
                          دریافت اطلاعات کانتینر
                        </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="getImageData" data-option
                                    data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
                          دریافت داده های تصویری
                        </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="getCanvasData" data-option
                                    data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)">
                          دریافت داده Canvas
                        </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="setCanvasData"
                                    data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip"
                              title="$().cropper(&quot;setCanvasData&quot;, data)">
                          تنظیم داده بوم
                        </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="getCropBoxData" data-option
                                    data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip"
                              title="$().cropper(&quot;getCropBoxData&quot;)">
                          دریافت جعبه اطلاعات محصول
                        </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="setCropBoxData"
                                    data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip"
                              title="$().cropper(&quot;setCropBoxData&quot;, data)">
                          تنظیم اطلاعات جعبه محصول
                        </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="moveTo" data-option="0">
                        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
                          0,0
                        </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="zoomTo" data-option="1">
                        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
                          100%
                        </span>
                            </button>
                            <button type="button" class="btn btn-primary" data-method="rotateTo" data-option="180">
                        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
                          180°
                        </span>
                            </button>
                            <input type="text" class="form-control" id="putData"
                                   placeholder="Get data to here or set data with this value">
                        </div><!-- /.docs-buttons -->

                        <div class="col-md-3 docs-toggles">
                            <!-- <h3 class="page-header">Toggles:</h3> -->
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio"
                                           value="1.7777777777777777">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
                            16:9
                          </span>
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio"
                                           value="1.3333333333333333">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
                            4:3
                          </span>
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
                            1:1
                          </span>
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio"
                                           value="0.6666666666666666">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
                            2:3
                          </span>
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio"
                                           value="NaN">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
                            آزاد
                          </span>
                                </label>
                            </div>

                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0"
                                           checked>
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                            VM0
                          </span>
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                            VM1
                          </span>
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
                            VM2
                          </span>
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
                            VM3
                          </span>
                                </label>
                            </div>

                            <div class="dropdown dropup docs-options">
                                <button type="button" class="btn btn-primary btn-block dropdown-toggle"
                                        id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                                    تنظیمات را تغییر دهید
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="responsive" checked>
                                            responsive
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="restore" checked>
                                            restore
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="checkCrossOrigin" checked>
                                            checkCrossOrigin
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="checkOrientation" checked>
                                            checkOrientation
                                        </label>
                                    </li>

                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="modal" checked>
                                            modal
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="guides" checked>
                                            guides
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="center" checked>
                                            center
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="highlight" checked>
                                            highlight
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="background" checked>
                                            background
                                        </label>
                                    </li>

                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="autoCrop" checked>
                                            autoCrop
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="movable" checked>
                                            movable
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="rotatable" checked>
                                            rotatable
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="scalable" checked>
                                            scalable
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="zoomable" checked>
                                            zoomable
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="zoomOnTouch" checked>
                                            zoomOnTouch
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="zoomOnWheel" checked>
                                            zoomOnWheel
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="cropBoxMovable" checked>
                                            cropBoxMovable
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="cropBoxResizable" checked>
                                            cropBoxResizable
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toggleDragModeOnDblclick" checked>
                                            toggleDragModeOnDblclick
                                        </label>
                                    </li>
                                </ul>
                            </div><!-- /.dropdown -->

                            <a class="btn btn-default btn-block" data-toggle="tooltip"
                               href="https://fengyuanchen.github.io/cropperjs"
                               title="Cropper without jQuery">Cropper.js</a>

                        </div><!-- /.docs-toggles -->
                    </div>
                </div>
                <!-- /image cropping -->
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

        <!-- footer content -->
        <footer class="hidden-print">
            <div class="pull-left">
                Gentelella - قالب پنل مدیریت بوت استرپ <a href="https://colorlib.com">Colorlib</a> | پارسی شده توسط <a
                    href="https://morteza-karimi.ir">مرتضی کریمی</a>
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
<!-- jQuery -->
<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>

<!-- bootstrap-daterangepicker -->
<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>

<script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Ion.RangeSlider -->
<script src="{{asset('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
<!-- Bootstrap Colorpicker -->
<script src="{{asset('vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- jquery.inputmask -->
<script src="{{asset('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
<!-- jQuery Knob -->
<script src="{{asset('vendors/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- Cropper -->
<script src="{{asset('vendors/cropper/dist/cropper.min.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.min.js')}}"></script>



</body>
</html>