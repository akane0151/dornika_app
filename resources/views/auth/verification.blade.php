@extends('auth.layout')

@section('content')
<div>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="/user/verify" method="post">
                    @csrf
                    <h3>کاربر عزیز خوش آمدید!</h3>
                    <h4>یک ایمیل حاوی کد فعالسازی برای شما ارسال شده لطفاً کدفعالسازی را وارد کنید.</h4>
                    <div>
                        <input type="text" name="token" class="form-control" placeholder="کد فعالسازی" required="" value="{{ old('token') }}"/>
                        @if ($errors->any())
                            <h5><span class="text-danger">{{$errors->first()}}</span></h5>
                        @endif
                    </div>

                    <div>
                        <button class="btn btn-default submit" type="submit">تایید</button>
                    </div>

                    <div class="clearfix"></div>

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
