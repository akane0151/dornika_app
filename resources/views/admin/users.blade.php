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

                    </p>
                    <table id="dt" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>شماره</th>
                            <th>نام</th>
                            <th>استان</th>
                            <th>شهر</th>
                            <th>شماره همراه</th>
                            <th>جزئیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $u)
                            <tr>
                                <td>{{$u->id}}</td>
                                <td>{{$u->first_name.' '.$u->last_name}}</td>
                                <td>{{$u->state}}</td>
                                <td>{{$u->city}}</td>
                                <td>{{$u->mobileNumber}}</td>
                                <td>
                                    <a href="/admin/user/{{$u->id}}" class="btn btn-info btn-xs">جزئیات</a>
                                    <a href="/admin/passwordUser/{{$u->id}}" class="btn btn-danger btn-xs">تغییر رمزعبور</a>
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
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            var tb = $('#dt').DataTable({
                "language": dtFarsi,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
            tb.buttons().container()
                .appendTo( $('.col-sm-6:eq(0)', tb.table().container() ) );
        });
    </script>
@stop


