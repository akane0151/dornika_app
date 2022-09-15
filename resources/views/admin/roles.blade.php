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
                        <a class="btn btn-app">
                            <i class="fa fa-plus"></i> ایجاد
                        </a>
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

    <div id="addrole_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">نقش جدید</h4>
                </div>
                <div class="modal-body">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">عنوان
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" required="required"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">نقش سیستمی</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select id="sysrole" class="form-control">
                                    <option value="admin">ادمین</option>
                                    <option value="user">کاربر سطح دو</option>
                                </select>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                    <button type="button" id="addrole-btn" class="btn btn-primary">ذخیره تغییرات</button>
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
        // new PNotify({
        //         title: 'چیز جدید',
        //         text: 'فقط برای این که بدانید، چیزی اتفاق افتاده است.',
        //         type: 'info',
        //         styling: 'bootstrap3'
        // });
        const delay = millis => new Promise((resolve, reject) => {
            setTimeout(_ => resolve(), millis)
        });

        $(document).ready(function() {
            var gid = 0;
            $("#addrole_modal").on("click", "#addrole-btn", function (event) {
                event.preventDefault();
                console.log("confirm clicked!");
                var name = $("#addrole_modal #name").val();
                var group = $("#addrole_modal #sysrole").val();
                var ig = false;
                if ($("#newtype_modal #ignore").is(":checked")) {
                    ig = true;
                } else {
                    ig = false;
                }
                $.ajax({
                    type: "POST",
                    url: "/admin/add",
                    data: {
                        _token: "{{csrf_token()}}",
                        name: name,
                        group: group,
                        ignoreOnGUI: ig,
                        params: JSON.stringify(attrs),
                    },
                    success: function (data) {
                        if (data.success == false) {
                            Swal.fire(
                                'Warning!',
                                data.msg,
                                'warning'
                            )
                        } else if (data.success == true) {
                            //Success Message
                            $('#newtype_modal').modal('hide');
                            Swal.fire(
                                'Successful!',
                                'New type added!',
                                'success'
                            )
                            delayRedirect("/devices/types");

                        }
                    }, error: function (reject) {

                    }
                });
                return false;
            });

            async function delayRedirect(url) {
                await delay(500);
                window.location.replace(url);
            }

            $(".table tr").on("click", '#remove-item', function () {
                gid = $(this).attr('data-button');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((e) => {
                    if (e.value) {
                        $.ajax({
                            type: "POST",
                            url: "/devicetype/remove",
                            data: {
                                _token: "{{csrf_token()}}",
                                id: gid
                            },
                            success: function (data) {
                                if (data.success) {
                                    Swal.fire(
                                        'Successful!',
                                        'removed!',
                                        'success'
                                    )
                                    delayRedirect("/devices/types");
                                } else if (e.dismiss = "cancel") {

                                } else {
                                    Swal.fire(
                                        'warning!',
                                        "error occured!",
                                        'warning'
                                    )
                                }

                            }
                        });
                    } else {
                        Swal.fire(
                            'warning!',
                            data.msg,
                            'warning'
                        )
                    }
                });
            });
            $(".table").on("click", '#edit-item', function () {
                gid = $(this).attr('data-button');
                $.ajax({
                    type: "POST",
                    url: "/devicetype/get",
                    data: {
                        _token: "{{csrf_token()}}",
                        id: gid
                    },
                    success: function (data) {
                        if (data.success) {
                            $("#edittype_modal #name").val(data.type.name);
                            $("#edittype_modal #group").val(data.type.group);
                            if (data.type.ignore) {
                                $("#edittype_modal #ignore").prop('checked', true);
                            } else {
                                $("#edittype_modal #ignore").prop('checked', false);
                            }
                            attrs2 = [];
                            attrs2 = data.type.params;

                            $("#edittype_modal #attr-action #list-attrs ul").empty();

                            $.each(attrs2, function (i, v) {
                                var code = "<li><div><label class='attr-name'>" + v.name + "</label></div><div>";

                                code += "<label> : " + v.max + "</label></div><a href='#' id='remove'>X</button></a></li>";

                                $("#edittype_modal #attr-action #list-attrs ul").append(code);
                            });
                            $("#edittype_modal").modal('show');
                        } else {

                        }

                    }
                });
            });
            $("#edittype_modal").on("click", "#edittype-btn", function (event) {
                event.preventDefault();
                var name = $("#edittype_modal #name").val();
                var group = $("#edittype_modal #group").val();
                var ig = false;
                if ($("#edittype_modal #ignore").is(":checked")) {
                    ig = true;
                } else {
                    ig = false;
                }
                $.ajax({
                    type: "POST",
                    url: "/devicetype/edit",
                    data: {
                        _token: "{{csrf_token()}}",
                        id: gid,
                        name: name,
                        group: group,
                        ignoreOnGUI: ig,
                        params: JSON.stringify(attrs2),
                    },
                    success: function (data) {
                        if (data.success == false) {
                            Swal.fire(
                                'Warning!',
                                data.msg,
                                'warning'
                            )
                        } else if (data.success == true) {
                            //Success Message
                            $('#newtype_modal').modal('hide');
                            Swal.fire(
                                'Successful!',
                                'The type updated!',
                                'success'
                            )
                            delayRedirect("/devices/types");
                        }
                    }
                });
                return false;
            });

        });

    </script>
@stop
