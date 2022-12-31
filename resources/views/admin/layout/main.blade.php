<!DOCTYPE html>
<html lang="fa" dir="rtl">
@include('admin.layout.header')
<!-- /header content -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- left menu -->
        @include('admin.layout.leftmenu')
        <!-- left menu -->

        <!-- top navigation -->
        @include('admin.layout.topbar')
        <!-- /top navigation -->
        <!-- /header content -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer class="hidden-print">
            <div class="pull-left">
                <p>سامانه پنل مدیریت dornika نسخه 0.6</p>
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
@include('admin.layout.footerscript')
@yield('footerScripts')

</body>
</html>
