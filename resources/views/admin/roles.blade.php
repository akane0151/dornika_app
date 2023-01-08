@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>نقش ها</h2>
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
                        <a href="/admin/newRole" class="btn btn-app">
                            <i class="fa fa-plus"></i> ایجاد
                        </a>
                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان نقش</th>
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
                                <td>
                                    <a href="/admin/getRole/{{$r->id}}" class="btn btn-info btn-xs">ویرایش</a>
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
        const delay = millis => new Promise((resolve, reject) => {
            setTimeout(_ => resolve(), millis)
        });
        var rid = 0;
        $(document).ready(function() {
            $(".table").on("click",'#permItem', function() {
                rid = $(this).attr('data-button');
                $.ajax({
                    type: "POST",
                    url: "getRolePerm",
                    data: {
                        _token: "{{csrf_token()}}",
                        id: parseInt(rid)
                    },
                    success: function (data) {
                        if(data.success){
                            //$(".edit-modal-sm #name").val(data.state.name);
                            data.permissions.forEach((i,v)=>{

                            });
                            $("#perm_modal").modal('show');
                        } else {
                            alert("خطا!")
                        }

                    }
                });
            });
        });

    </script>
@stop
