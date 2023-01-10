@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>پست ها</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        <a href="/admin/newPost" class="btn btn-app">
                            <i class="fa fa-plus"></i> ایجاد
                        </a>
                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان</th>
                            <th>تصویر</th>
                            <th>نویسنده</th>
                            <th>وضعیت</th>
                            <th>جزئیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $p)
                            <tr>
                                <td>
                                {{$p->id}}
                                </td>
                                <td><img src="{{asset('thumbnails/'.$p->thumbnail)}}" width="100" height="100" /> </td>
                                <td>{{$p->title}}</td>
                                <td>{{$p->owner->full_name}}</td>
                                <td>{{$p->enable=="on"?'منتشر شده':'غیرفعال'}}</td>
                                <td>
                                    <a href="/admin/editPost/{{$p->id}}" class="btn btn-info btn-xs">ویرایش</a>
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

    </script>
@stop
