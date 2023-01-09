@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-16">
            <div class="x_panel">
                <div class="x_title">
                    <h2>ویرایش کاربر ادمین</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span>
                            </button>
                            {{Session::get('success')}}
                        </div>
                    @elseif(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span>
                            </button>
                            {{Session::get('error')}}
                        </div>
                    @endif
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <form action="{{ route('editAdmin') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input id="id" name="id" hidden value="{{$admin->id}}" />
                        <div>
                            <input type="text" id="full_name" name="full_name" class="form-control" placeholder="نام" required="" value="{{$admin->full_name}}" oninvalid="this.setCustomValidity('لطفاً نام را وارد کنید')" oninput="this.setCustomValidity('')"/>
                            @if ($errors->has('full_name'))
                                <h5><span class="text-danger">{{$errors->first('full_name')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="username" name="username" class="form-control" placeholder="نام کاربری" required="" value="{{$admin->username}}" oninvalid="this.setCustomValidity('لطفاً نام کاربری را وارد کنید')" oninput="this.setCustomValidity('')"/>
                            @if ($errors->has('username'))
                                <h5><span class="text-danger">{{$errors->first('username')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="email" name="email" class="form-control" placeholder="ایمیل" required="" value="{{$admin->email}}" oninvalid="this.setCustomValidity('لطفاً ایمیل را وارد کنید')" oninput="this.setCustomValidity('')"/>
                            @if ($errors->has('email'))
                                <h5><span class="text-danger">{{$errors->first('email')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <label>نقش کاربر مدیر</label>
                            <select id="roles" name="role">
                                @foreach($roles as $r)

                                    <option value="{{$r->name}}" {{$admin->hasRole($r->name)?'selected':''}}>{{$r->name}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-default submit" type="submit">ثبت</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /page content -->
<script>
    setRole();
    function setRole(){
        $("#roles > option").each(function (){
            if(this.value=='{{$admin->getRoleNames()[0]}}'){
                $("#roles").val(this.value).change();
            }
        });
    }
</script>
</div>
</div>
@stop


