@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>مدیران</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <a href="/admin/newAdminForm" class="btn btn-app">
                        <i class="fa fa-plus"></i> ایجاد
                    </a>
                    <p class="text-muted font-13 m-b-30">

                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>نام کاربری</th>
                            <th>ایمیل</th>
                            <th>نقش</th>
                            <th>جزئیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $a)
                            <tr>
                                <td>
                                {{$a->id}}
                                </td>
                                <td>{{$a->full_name}}</td>
                                <td>{{$a->username}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->role}}</td>
                                <td>
                                    @if(Auth::guard('admin')->user()->can('edit-admin'))
                                    <a href="/admin/edit/{{$a->id}}" class="btn btn-info btn-xs">ویرایش</a>
                                        <a href="/admin/changePassword/{{$a->id}}" class="btn btn-info btn-xs">تغییر رمزعبور</a>
                                    @endif

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


