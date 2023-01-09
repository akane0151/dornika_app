@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>ویرایش رمزعبور
                        <small></small>
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span>
                            </button>
                            تغییرات با موفقیت ذخیره شد!
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
                    <form action="{{ route('editMyUserPassword') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input type="password" id="password" name="password" class="form-control" placeholder="رمزعبور جدید" required="" oninvalid="this.setCustomValidity('لطفاً رمزعبور جدید را وارد کنید')" oninput="this.setCustomValidity('')" value=""/>
                            @if ($errors->has('password'))
                                <h5><span class="text-danger">{{$errors->first('password')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="password" id="password_confirm" name="password_confirm" class="form-control" placeholder="تایید رمزعبور" required="" oninvalid="this.setCustomValidity('لطفاً تایید رمزعبور را وارد کنید')" oninput="this.setCustomValidity('')" value=""/>
                            @if ($errors->has('password_confirm'))
                                <h5><span class="text-danger">{{$errors->first('password_confirm')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <button class="btn btn-default submit" type="submit">ثبت</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@stop


