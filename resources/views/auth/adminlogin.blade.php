@extends('auth.layout')

@section('content')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <a class="hiddenanchor" id="reset"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{ route('adminLogin') }}" method="post">
                    @csrf
                    <h1>فرم ورود</h1>
                    <div>
                        <input type="text" name="username" class="form-control" placeholder="نام کاربری" required="" value="{{ old('username') }}"/>
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="رمز ورود" required="" {{ old('password') }}/>
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">ورود</button>
{{--                        <a class="reset_pass" href="#reset">رمز ورود را از دست دادید؟</a>--}}
                    </div>

                    <div class="clearfix"></div>
                </form>
            </section>
        </div>
    </div>
</div>
<script>
</script>
@endsection
