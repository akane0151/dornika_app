@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-16">
            <div class="x_panel">
                <div class="x_title">
                    <h2>مدیریت نقش</h2>
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
                    <form action="{{ route('editRole') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input id="id" name="id" hidden value="{{$role->id}}" />
                        <div>
                            <input type="text" id="name" name="name" class="form-control" placeholder="نام" required="" oninvalid="this.setCustomValidity('لطفاً نام نقش را وارد کنید')" oninput="this.setCustomValidity('')" value="{{$role->name}}"/>
                            @if ($errors->has('name'))
                                <h5><span class="text-danger">{{$errors->first('name')}}</span></h5>
                            @endif
                        </div>

                            @foreach($perms as $p)
                            <div>
                                <label>
                                    <input type="checkbox" name="{{$p->name}}" class="js-switch" {{$role->hasPermissionTo($p->name)?'checked':''}}/> {{$p->name}}
                                </label>
                            </div>

                        @endforeach
                        <div>
                            <button class="btn btn-default submit" type="submit">ذخیره</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /page content -->
<script>

</script>
</div>
</div>
@stop


