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
                        <div style="display: none;" class="alert alert-warning alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span>
                            </button>
                            کد فعال سازی دوباره برای ایمیل شما ارسال گردید!
                        </div>
                    <div style="display: none;" class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span>
                        </button>
                        کد فعال سازی جدید با موفقیت برای شما ارسال شد، لطفاً ایمیل خود را چک کنید!
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">تایید</button>
                    </div>


                </form>
                <div class="clearfix"></div>
                <div class="separator">
                    <p class="change_link">ایمیل را دریافت نکردید؟

                    </p>
                    <a href="#" id="resend-btn" class="btn btn-warning"> ارسال مجدد کد فعال سازی </a>
                    <div class="clearfix"></div>
                    <br />
                </div>
            </section>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('vendors/jquery/dist/jquery.js')}}"></script>

<script>
    $(document).ready(function () {

        $(".login_wrapper #resend-btn").click(function (event) {
            alert("sda");
            event.preventDefault();
            $(".alert-warning").hide();
            $(".alert-success").hide();
            var email = '{{Auth::user()->email}}';
            $.ajax({
                type: "POST",
                url: "/user/resendToken",
                data: {
                    _token: "{{csrf_token()}}",
                    email: email,
                },
                success: function (data) {
                    if (data.success == false) {
                        $(".alert-success").hide();
                        $(".alert-warning").show();
                    } else if (data.success == true) {
                        $(".alert-warning").hide();
                        $(".alert-success").show();
                    }
                }, error: function (reject) {

                }
            });
            return false;
        });
    });
</script>
@endsection
