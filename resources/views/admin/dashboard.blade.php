@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> تعداد کاربران</span>
            <div class="count">{{$userCount}}</div>
{{--            <span class="count_bottom"><i class="green">4% </i> از هفته گذشته</span>--}}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> تعداد کالاها</span>
            <div class="count">123.50</div>
{{--            <span class="count_bottom"><i class="green"><i--}}
{{--                    class="fa fa-sort-asc"></i>3% </i> از هفته گذشته</span>--}}
        </div>
{{--        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">--}}
{{--            <span class="count_top"><i class="fa fa-user"></i> مجموع مردان</span>--}}
{{--            <div class="count green">2,500</div>--}}
{{--            <span class="count_bottom"><i class="green"><i--}}
{{--                    class="fa fa-sort-asc"></i>34% </i> از هفته گذشته</span>--}}
{{--        </div>--}}
{{--        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">--}}
{{--            <span class="count_top"><i class="fa fa-user"></i> مجموع زنان</span>--}}
{{--            <div class="count">4,567</div>--}}
{{--            <span class="count_bottom"><i class="red"><i--}}
{{--                    class="fa fa-sort-desc"></i>12% </i> از هفته گذشته</span>--}}
{{--        </div>--}}
{{--        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">--}}
{{--            <span class="count_top"><i class="fa fa-user"></i> مجموعه کلی</span>--}}
{{--            <div class="count">2,315</div>--}}
{{--            <span class="count_bottom"><i class="green"><i--}}
{{--                    class="fa fa-sort-asc"></i>34% </i> از هفته گذشته</span>--}}
{{--        </div>--}}
{{--        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">--}}
{{--            <span class="count_top"><i class="fa fa-user"></i> مجموع اتصالات</span>--}}
{{--            <div class="count">7,325</div>--}}
{{--            <span class="count_bottom"><i class="green"><i--}}
{{--                    class="fa fa-sort-asc"></i>34% </i> از هفته گذشته</span>--}}
{{--        </div>--}}
    </div>
    <!-- /top tiles -->

    <div class="row">
{{--        <div class="col-md-12 col-sm-12 col-xs-12">--}}
{{--            <div class="dashboard_graph">--}}

{{--                <div class="row x_title">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <h3>فعالیت های شبکه--}}
{{--                            <small>عنوان نمودار زیر عنوان</small>--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div id="reportrange" class="pull-left"--}}
{{--                             style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">--}}
{{--                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>--}}
{{--                            <span>اسفند 29, 1394 - فروردین 28, 1395</span> <b class="caret"></b>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-9 col-sm-9 col-xs-12">--}}
{{--                    <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>--}}
{{--                    <div style="width: 100%;">--}}
{{--                        <div id="chart_plot_01" class="demo-placeholder" style="width: 100%; height:270px;"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">--}}
{{--                    <div class="x_title">--}}
{{--                        <h2>بالاترین عملکرد در کمپین</h2>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-12 col-sm-12 col-xs-6">--}}
{{--                        <div>--}}
{{--                            <p>کمپین فیسبوک</p>--}}
{{--                            <div class="">--}}
{{--                                <div class="progress progress_sm" style="width: 76%;">--}}
{{--                                    <div class="progress-bar bg-green" role="progressbar"--}}
{{--                                         data-transitiongoal="80"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <p>کمپین تویتتر</p>--}}
{{--                            <div class="">--}}
{{--                                <div class="progress progress_sm" style="width: 76%;">--}}
{{--                                    <div class="progress-bar bg-green" role="progressbar"--}}
{{--                                         data-transitiongoal="60"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12 col-sm-12 col-xs-6">--}}
{{--                        <div>--}}
{{--                            <p>رسانه های متعارف</p>--}}
{{--                            <div class="">--}}
{{--                                <div class="progress progress_sm" style="width: 76%;">--}}
{{--                                    <div class="progress-bar bg-green" role="progressbar"--}}
{{--                                         data-transitiongoal="40"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <p>بیلبوردهای تبلیغاتی</p>--}}
{{--                            <div class="">--}}
{{--                                <div class="progress progress_sm" style="width: 76%;">--}}
{{--                                    <div class="progress-bar bg-green" role="progressbar"--}}
{{--                                         data-transitiongoal="50"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="clearfix"></div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
    <br/>

    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>تنظیمات سریع</h2>
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
                    <div class="dashboard-widget-content">
                        <ul class="quick-list">
                            <li><i class="fa fa-calendar-o"></i><a href="#">تنظیمات</a>
                            </li>
                            <li><i class="fa fa-bars"></i><a href="#">اشتراک</a>
                            </li>
                            <li><i class="fa fa-bar-chart"></i><a href="#">تمدید خودکار</a></li>
                            <li><i class="fa fa-line-chart"></i><a href="#">دستاوردها</a>
                            </li>
                            <li><i class="fa fa-bar-chart"></i><a href="#">تمدید خودکار</a></li>
                            <li><i class="fa fa-line-chart"></i><a href="#">دستاوردها</a>
                            </li>
                            <li><i class="fa fa-area-chart"></i><a href="#">خروج</a>
                            </li>
                        </ul>

                        <div class="sidebar-widget">
                            <h4>مشخصات تکمیل</h4>
                            <canvas width="150" height="80" id="chart_gauge_01" class=""
                                    style="width: 160px; height: 100px;"></canvas>
                            <div class="goal-wrapper">
                                <span class="gauge-value pull-left">$</span>
                                <span id="gauge-text" class="gauge-value pull-left">3,200</span>
                                <span id="goal-text" class="goal-value pull-right">$5,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-sm-8 col-xs-12">


            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>مکان پخش ها
                                <small>ارائه جغرافیایی</small>
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
                            <div class="dashboard-widget-content">
                                <div class="col-md-4 hidden-small">
                                    <h2 class="line_30">125.7k بازدید از 60 کشور</h2>

                                    <table class="countries_list">
                                        <tbody>
                                        <tr>
                                            <td>ایالات متحده</td>
                                            <td class="fs15 fw700 text-right">33%</td>
                                        </tr>
                                        <tr>
                                            <td>فرانسه</td>
                                            <td class="fs15 fw700 text-right">27%</td>
                                        </tr>
                                        <tr>
                                            <td>آلمان</td>
                                            <td class="fs15 fw700 text-right">16%</td>
                                        </tr>
                                        <tr>
                                            <td>اسپانیا</td>
                                            <td class="fs15 fw700 text-right">11%</td>
                                        </tr>
                                        <tr>
                                            <td>بریتانیا</td>
                                            <td class="fs15 fw700 text-right">10%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12"
                                     style="height:230px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- /page content -->
@stop


