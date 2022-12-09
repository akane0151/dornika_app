@extends('auth.layout')

@section('content')
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <a class="hiddenanchor" id="reset"></a>

        <div class="login_wrapper">
            <div id="register" class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('register') }}" method="POST">
                        <h1>ایجاد حساب</h1>
                        @csrf

                        <div>
                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="نام" required="" value="{{old('first_name')}}"/>
                            @if ($errors->has('first_name'))
                                <h5><span class="text-danger">{{$errors->first('first_name')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="نام خانوادگی" required="" value="{{old('last_name')}}"/>
                            @if ($errors->has('last_name'))
                                <h5><span class="text-danger">{{$errors->first('last_name')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="nationalId" name="nationalId" class="form-control" placeholder="کدملی 10 رقمی" required="" value="{{old('nationalId')}}"/>
                            @if ($errors->has('nationalId'))
                                <h5><span class="text-danger">{{$errors->first('nationalId')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="mobileNumber" name="mobileNumber" class="form-control" placeholder="شماره همراه" required="" value="{{old('mobileNumber')}}"/>
                            @if ($errors->has('mobileNumber'))
                                <h5><span class="text-danger">{{$errors->first('mobileNumber')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" data-jdp id="birthDate" name="birthDate" class="form-control" placeholder="تاریخ تولد" required="" value="{{old('birthDate')}}"/>
                            @if ($errors->has('birthDate'))
                                <h5><span class="text-danger">{{$errors->first('birthDate')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <select type="text" id="state" name="state" class="form-control" required="">
                                <option value="mazandaran">مازندران</option>
                            </select>
                            @if ($errors->has('state'))
                                <h5><span class="text-danger">{{$errors->first('state')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <select type="text" id="state" name="state" class="form-control" required="">
                                <option value="mazandaran">مازندران</option>
                            </select>
                            @if ($errors->has('state'))
                                <h5><span class="text-danger">{{$errors->first('state')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <select type="text" id="city" name="city" class="form-control" required="">
                                <option value="sari">ساری</option>
                            </select>
                            @if ($errors->has('city'))
                                <h5><span class="text-danger">{{$errors->first('city')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="file" id="avatar" name="avatar" class="form-control" value="{{old('avatar')}}"/>
                            @if ($errors->has('avatar'))
                                <h5><span class="text-danger">{{$errors->first('avatar')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="username" name="username" class="form-control" placeholder="نام کاربری" required="" value="{{old('username')}}"/>
                            @if ($errors->has('username'))
                                <h5><span class="text-danger">{{$errors->first('username')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="email" id="email" name="email" class="form-control" placeholder="ایمیل" required="" value="{{old('email')}}"/>
                            @if ($errors->has('email'))
                                <h5><span class="text-danger">{{$errors->first('email')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="password" id="password" name="password" class="form-control" placeholder="رمز ورود" required="" />
                            @if ($errors->has('password'))
                                <h5><span class="text-danger">{{$errors->first('password')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="تایید رمز" required="" />
                            @if ($errors->has('password_confirmation'))
                                <h5><span class="text-danger">{{$errors->first('password_confirmation')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <button class="btn btn-default submit" type="submit">ارسال</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">در حال حاضر عضو هستید؟
                                <a href="#signin" class="to_register"> ورود </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1>Eragon web application</h1>
                                <p>نسخه 0.5.5</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('vendors/jdatepicker/jalalidatepicker.js')}}"></script>
    <script>
        jalaliDatepicker.startWatch();
    </script>
@endsection
