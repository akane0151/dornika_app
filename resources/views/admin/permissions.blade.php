@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>مجوزه ها</h2>
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
                        <a class="btn btn-app">
                            <i class="fa fa-plus"></i> ایجاد
                        </a>
                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام مجوز</th>
                            <th>جزئیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($perms as $p)
                            <tr>
                                <td>
                                {{$p->id}}
                                </td>
                                <td>{{$p->name}}</td>
                                <td>
                                    <button id="permItem" data-button="{{$p->id}}" class="btn btn-info btn-xs">دسترسی ها</button>
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

    <div id="perm_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">مدیریت دسترسی ها</h4>
                </div>
                <div class="modal-body">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">مجوزها
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="checkbox" id="name" required="required"
                                       class="form-control col-md-7 col-xs-12">
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
                            //$(".edit-modal-sm").modal('show');
                        } else {
                            alert("خطا!")
                        }

                    }
                });
            });
        });

    </script>
@stop
