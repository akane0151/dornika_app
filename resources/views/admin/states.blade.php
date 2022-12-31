@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>استان ها</h2>
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
                        <button class="btn btn-warning" data-toggle="modal" data-target=".add-modal-sm">ایجاد</button>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام استان</th>
                            <th>جزئیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($states as $s)
                            <tr>
                                <td>
                                {{$s->id}}
                                </td>
                                <td>{{$s->name}}</td>
                                <td>
                                    <button id="editItem" data-button="{{$s->id}}" class="btn btn-warning btn-xs">ویرایش</button>
                                    <button id="removeItem" data-button="{{$s->id}}" data-name="{{$s->name}}" class="btn btn-danger btn-xs">حذف</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade add-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel2">اضافه کردن استان</h4>
                </div>
                <div class="modal-body">
                    <form id="demo-form">
                        <label for="state">نام استان<span class="required">*</span> :</label>
                        <input type="text" id="name" class="form-control" name="name" required/>
                        <hr/>
                        <p id="modal-loading" class="text-center text-warning" style="display: none;">در حال بررسی</p>
                        <p id="modal-error" class="text-center red" style="display: none;"></p>
                        <p id="modal-success" class="text-center green" style="display: none;">با موفقیت اضافه شد!</p>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                    <button type="button" class="btn btn-primary add-btn">ثبت</button>
                </div>

            </div>
        </div>
    </div>
    <!-- /modals -->
    <div class="modal fade edit-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel2">ویرایش استان</h4>
                </div>
                <div class="modal-body">
                    <form id="demo-form">
                        <label for="state">نام استان<span class="required">*</span> :</label>
                        <input type="text" id="name" class="form-control" name="name" required/>
                        <hr/>
                        <p id="modal-loading" class="text-center text-warning" style="display: none;">در حال بررسی</p>
                        <p id="modal-error" class="text-center red" style="display: none;"></p>
                        <p id="modal-success" class="text-center green" style="display: none;">با موفقیت بروز شد!</p>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                    <button type="button" class="btn btn-primary edit-btn">ثبت</button>
                </div>

            </div>
        </div>
    </div>
    <!-- /modals -->
    <!-- /modals -->
    <div class="modal fade remove-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel2">حذف آیتم</h4>
                </div>
                <div class="modal-body">
                    <form id="demo-form">
                        <p>
                            آیا می خواهید آیتم <span id="remove-item-name"></span> را جذف کنید؟
                        </p>
                        <hr/>
                        <p id="modal-loading" class="text-center text-warning" style="display: none;">در حال بررسی</p>
                        <p id="modal-error" class="text-center red" style="display: none;"></p>
                        <p id="modal-success" class="text-center green" style="display: none;">با موفقیت بروز شد!</p>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">لغو</button>
                    <button type="button" class="btn btn-primary remove-btn">تایید</button>
                </div>

            </div>
        </div>
    </div>
    <!-- /modals -->
</div>
<!-- /page content -->
<script>
    $(document).ready(function () {
        var sid = 0;
        $(".add-modal-sm").on("click",".add-btn", function(event) {
            event.preventDefault();
            var name = $(".add-modal-sm #name").val();
            $("#modal-error").hide();
            $("#modal-success").hide();
            $("#modal-loading").show();
            $.ajax({
                type: "POST",
                url: "addState",
                data: {
                    _token: "{{csrf_token()}}",
                    name: name,
                },
                success: function(data){
                    if(data.success==false){
                        $("#modal-loading").hide();
                        $("#modal-error").html(data.error);
                        $("#modal-error").show();
                    } else if(data.success==true){
                        $("#modal-loading").hide();
                        $("#modal-error").hide();
                        $("#modal-success").show();
                        sleep(1000);
                        window.location.replace("states");
                    }
                },error: function (reject) {

                }
            });
            return false;
        });
        $(".edit-modal-sm").on("click",".edit-btn", function(event) {
            event.preventDefault();
            var name = $(".edit-modal-sm #name").val();
            $(".edit-modal-sm #modal-error").hide();
            $(".edit-modal-sm #modal-success").hide();
            $(".edit-modal-sm #modal-loading").show();
            $.ajax({
                type: "POST",
                url: "editState",
                data: {
                    _token: "{{csrf_token()}}",
                    id: sid,
                    name: name,
                },
                success: function(data){
                    if(data.success==false){
                        $(".edit-modal-sm #modal-loading").hide();
                        $(".edit-modal-sm #modal-error").html(data.error);
                        $(".edit-modal-sm #modal-error").show();
                    } else if(data.success==true){
                        $(".edit-modal-sm #modal-loading").hide();
                        $(".edit-modal-sm #modal-error").hide();
                        $(".edit-modal-sm #modal-success").show();
                        sleep(1000);
                        window.location.replace("states");
                    }
                },error: function (reject) {

                }
            });
            return false;
        });
        $(".remove-modal-sm").on("click",".remove-btn", function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "removeState",
                data: {
                    _token: "{{csrf_token()}}",
                    id: sid,
                },
                success: function(data){
                    if(data.success==false){
                        $(".remove-modal-sm #modal-loading").hide();
                        $(".remove-modal-sm #modal-error").html(data.error);
                        $(".remove-modal-sm #modal-error").show();
                    } else if(data.success==true){
                        $(".remove-modal-sm #modal-loading").hide();
                        $(".remove-modal-sm #modal-error").hide();
                        $(".remove-modal-sm #modal-success").show();
                        sleep(1000);
                        window.location.replace("states");
                    }
                },error: function (reject) {

                }
            });
            return false;
        });
        $(".table").on("click",'#editItem', function() {
            sid = $(this).attr('data-button');
            $.ajax({
                type: "POST",
                url: "state",
                data: {
                    _token: "{{csrf_token()}}",
                    id: sid
                },
                success: function (data) {
                    if(data.success){
                        $(".edit-modal-sm #name").val(data.state.name);
                        $(".edit-modal-sm").modal('show');
                    } else {
                        alert("خطا!")
                    }

                }
            });
        });
        $(".table").on("click",'#removeItem', function() {
            sid = $(this).attr('data-button');
            $(".remove-modal-sm #remove-item-name").html($(this).attr('data-name'));
            $(".remove-modal-sm").modal('show');

        });

        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
    });

</script>
@stop


