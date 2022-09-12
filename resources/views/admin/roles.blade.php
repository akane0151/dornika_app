@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>کاربران</h2>
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
                    <p class="text-muted font-13 m-b-30">
                        <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'اوه نه!',
                                  text: 'چیزی وحشتناک اتفاق افتاد.',
                                  type: 'info',
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });">تیره
                        </button>
                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان نقش</th>
                            <th>نقش سیستمی</th>
                            <th>جزئیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $r)
                            <tr>
                                <td>
                                {{$r->id}}
                                </td>
                                <td>{{$r->name}}</td>
                                <td>{{$r->guard_name}}</td>
                                <td>
                                    <button class="btn btn-info btn-xs">جزئیات</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /page content -->
@stop

@section('footerScripts')
    <!-- PNotify -->
    <script src="{{asset('vendors/pnotify/dist/pnotify.js')}}"></script>
    <script src="{{asset('vendors/pnotify/dist/pnotify.buttons.js')}}"></script>
    <script src="{{asset('vendors/pnotify/dist/pnotify.nonblock.js')}}"></script>

    <script>
        new PNotify({
            title: 'چیز جدید',
            text: 'فقط برای این که بدانید، چیزی اتفاق افتاده است.',
            type: 'info',
            styling: 'bootstrap3'
        });
    </script>
@stop
