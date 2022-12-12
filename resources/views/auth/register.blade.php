@extends('auth.layout')

@section('content')
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <a class="hiddenanchor" id="reset"></a>

        <div class="login_wrapper">
            <div id="register" class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                        <h1>ایجاد حساب</h1>
                        @csrf

                        <div>
                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="نام" required="" oninvalid="this.setCustomValidity('لطفاً نام خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{old('first_name')}}"/>
                            @if ($errors->has('first_name'))
                                <h5><span class="text-danger">{{$errors->first('first_name')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="نام خانوادگی" required="" oninvalid="this.setCustomValidity('لطفاً نام خانوادگی خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{old('last_name')}}"/>
                            @if ($errors->has('last_name'))
                                <h5><span class="text-danger">{{$errors->first('last_name')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="nationalId" name="nationalId" class="form-control" placeholder="کدملی 10 رقمی" required="" oninvalid="this.setCustomValidity('لطفاً کدملی خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{old('nationalId')}}"/>
                            @if ($errors->has('nationalId'))
                                <h5><span class="text-danger">{{$errors->first('nationalId')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="mobileNumber" name="mobileNumber" class="form-control" placeholder="شماره همراه" oninvalid="this.setCustomValidity('لطفاً شماره همراه خود را وارد کنید')" oninput="this.setCustomValidity('')"
                                   value="{{old('mobileNumber')}}"/>
                            @if ($errors->has('mobileNumber'))
                                <h5><span class="text-danger">{{$errors->first('mobileNumber')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" data-jdp id="birthDate" name="birthDate" class="form-control" placeholder="تاریخ تولد" oninvalid="this.setCustomValidity('لطفاً تاریخ تولد خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{old('birthDate')}}"/>
                            @if ($errors->has('birthDate'))
                                <h5><span class="text-danger">{{$errors->first('birthDate')}}</span></h5>
                            @endif
                        </div>

                        <div>
                            <label>جنسیت <span class="required">*</span>:</label>
                            مذکر:
                            <input type="radio" class="flat" name="gender" onchange="genderChange(this.value)" id="genderM" value="M" checked="">
                            مونث:
                            <input type="radio" class="flat" name="gender" onchange="genderChange(this.value)" id="genderF" value="F"/>
                        </div>

                        <div id="nState" style="display: block;">
                            <label>وضعیت نظام وظیفه :</label>
                            مشمول:
                            <input type="radio" class="flat" name="vState" value="no" checked="" required/>
                            پایان خدمت:
                            <input type="radio" class="flat" name="vState" value="yes"/>
                        </div>
                        <div>
                            <select type="text" id="state" name="state" class="form-control" onchange="Func(this.value)">
                                <option value="">---</option>
                                <option value="  ,آذرشهر ,اسکو ,اهر ,بستان‌آباد ,بناب ,تبریز ,جلفا ,چاراویماق ,سراب ,شبستر ,عجب‌شیر ,کلیبر ,مراغه ,مرند ,ملکان ,میانه ,ورزقان ,هریس ,هشترود">آذربایجان شرقی</option>
                                <option value="  ,ارومیه ,اشنویه ,بوکان ,پیرانشهر ,تکاب ,چالدران ,خوی ,سردشت ,سلماس ,شاهین‌دژ ,ماکو ,مهاباد ,میاندوآب ,نقده">آذربایجان غربی</option>
                                <option value="  ,اردبیل ,بیله‌سوار ,پارس‌آباد ,خلخال ,کوثر ,گِرمی ,مِشگین‌شهر ,نَمین ,نیر">اردبیل</option>
                                <option value="  ,آران و بیدگل ,اردستان ,اصفهان ,برخوار و میمه ,تیران و کرون ,چادگان ,خمینی‌شهر ,خوانسار ,سمیرم ,شهرضا ,سمیرم سفلی ,فریدن ,فریدون‌شهر ,فلاورجان ,کاشان ,گلپایگان ,لنجان ,مبارکه ,نائین ,نجف‌آباد ,نطنز">اصفهان</option>
                                <option value="  ,آبدانان ,ایلام ,ایوان ,دره‌شهر ,دهلران ,شیروان و چرداول ,مهران">ایلام</option>
                                <option value="  ,بوشهر ,تنگستان ,جم ,دشتستان ,دشتی,دیر ,دیلم ,کنگان ,گناوه">بوشهر</option>
                                <option value="  ,اسلام‌شهر ,پاکدشت ,تهران ,دماوند ,رباط‌کریم ,ری ,ساوجبلاغ ,شمیرانات ,شهریار ,فیروزکوه ,کرج ,نظرآباد ,ورامین">تهران</option>
                                <option value="  ,اردل ,بروجن ,شهرکرد ,فارسان ,کوهرنگ ,لردگان">چهارمحال و بختیاری</option>
                                <option value="  ,بیرجند ,درمیان ,سرایان ,سربیشه ,فردوس ,قائنات,نهبندان">خراسان جنوبی</option>
                                <option value="  ,بردسکن ,تایباد ,تربت جام ,تربت حیدریه ,چناران ,خلیل‌آباد ,خواف ,درگز ,رشتخوار ,سبزوار ,سرخس ,فریمان ,قوچان ,کاشمر ,کلات ,گناباد ,مشهد ,مه ولات ,نیشابور">خراسان رضوی</option>
                                <option value="  ,اسفراین ,بجنورد ,جاجرم ,شیروان ,فاروج ,مانه و سملقان">خراسان شمالی</option>
                                <option value="  ,آبادان ,امیدیه ,اندیمشک ,اهواز ,ایذه ,باغ‌ملک ,بندر ماهشهر ,بهبهان ,خرمشهر ,دزفول ,دشت آزادگان ,رامشیر ,رامهرمز ,شادگان ,شوش ,شوشتر ,گتوند ,لالی ,مسجد سلیمان,هندیجان ">خوزستان</option>
                                <option value="  ,ابهر ,ایجرود ,خدابنده ,خرمدره ,زنجان ,طارم ,ماه‌نشان">زنجان</option>
                                <option value="  ,دامغان ,سمنان ,شاهرود ,گرمسار ,مهدی‌شهر">سمنان</option>
                                <option value="  ,ایرانشهر ,چابهار ,خاش ,دلگان ,زابل ,زاهدان ,زهک ,سراوان ,سرباز ,کنارک ,نیک‌شهر">سیستان و بلوچستان</option>
                                <option value="  ,آباده ,ارسنجان ,استهبان ,اقلید ,بوانات ,پاسارگاد ,جهرم ,خرم‌بید ,خنج ,داراب ,زرین‌دشت ,سپیدان ,شیراز ,فراشبند ,فسا ,فیروزآباد ,قیر و کارزین ,کازرون ,لارستان ,لامِرد ,مرودشت ,ممسنی ,مهر ,نی‌ریز">فارس</option>
                                <option value="  ,آبیک ,البرز ,بوئین‌زهرا ,تاکستان ,قزوین">قزوین</option>
                                <option value="  ,قم">قم</option>
                                <option value="  ,بانه ,بیجار ,دیواندره ,سروآباد ,سقز ,سنندج ,قروه ,کامیاران ,مریوان">کردستان</option>
                                <option value="  ,بافت ,بردسیر ,بم ,جیرفت ,راور ,رفسنجان ,رودبار جنوب ,زرند ,سیرجان ,شهر بابک ,عنبرآباد ,قلعه گنج ,کرمان ,کوهبنان ,کهنوج ,منوجان">کرمان</option>
                                <option value="  ,اسلام‌آباد غرب ,پاوه ,ثلاث باباجانی ,جوانرود ,دالاهو ,روانسر ,سرپل ذهاب ,سنقر ,صحنه ,قصر شیرین ,کرمانشاه ,کنگاور ,گیلان غرب ,هرسین">کرمانشاه</option>
                                <option value="  ,بویراحمد ,بهمئی ,دنا ,کهگیلویه ,گچساران">کهگیلویه و بویراحمد</option>
                                <option value="  ,آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت">گلستان</option>
                                <option value="  ,آستارا ,آستانه اشرفیه ,اَملَش ,بندر انزلی ,رشت ,رضوانشهر ,رودبار ,رودسر ,سیاهکل ,شَفت ,صومعه‌سرا ,طوالش ,فومَن ,لاهیجان ,لنگرود ,ماسال">گیلان</option>
                                <option value="  ,ازنا ,الیگودرز ,بروجرد ,پل‌دختر ,خرم‌آباد ,دورود ,دلفان ,سلسله ,کوهدشت">لرستان</option>
                                <option value="  ,آمل ,بابل ,بابلسر ,بهشهر ,تنکابن ,جویبار ,چالوس ,رامسر ,ساری ,سوادکوه ,قائم‌شهر ,گلوگاه ,محمودآباد ,نکا ,نور ,نوشهر">مازندران</option>
                                <option value="  ,آشتیان ,اراک ,تفرش ,خمین ,دلیجان ,زرندیه ,ساوه ,شازند ,کمیجان ,محلات">مرکزی</option>
                                <option value="  ,ابوموسی ,بستک ,بندر عباس ,بندر لنگه ,جاسک ,حاجی‌آباد ,شهرستان خمیر ,رودان  ,قشم ,گاوبندی ,میناب">هرمزگان</option>
                                <option value="  ,اسدآباد ,بهار ,تویسرکان ,رزن ,کبودرآهنگ ,ملایر ,نهاوند ,همدان">همدان</option>
                                <option value="  ,ابرکوه ,اردکان ,بافق ,تفت ,خاتم ,صدوق ,طبس ,مهریز ,مِیبُد ,یزد">یزد</option>
                            </select>
                            @if ($errors->has('state'))
                                <h5><span class="text-danger">{{$errors->first('state')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <select type="text" id="city" name="city" class="form-control">
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
                            <input type="text" id="username" name="username" class="form-control" placeholder="نام کاربری" required="" oninvalid="this.setCustomValidity('لطفاً نام کاربری با حروف لاتین وارد کنید')" oninput="this.setCustomValidity('')" value="{{old('username')}}"/>
                            @if ($errors->has('username'))
                                <h5><span class="text-danger">{{$errors->first('username')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="email" id="email" name="email" class="form-control" placeholder="ایمیل" required="" oninvalid="this.setCustomValidity('لطفاً ایمیل خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{old('email')}}"/>
                            @if ($errors->has('email'))
                                <h5><span class="text-danger">{{$errors->first('email')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="password" id="password" name="password" class="form-control" placeholder="رمز ورود" required="" oninvalid="this.setCustomValidity('لطفاً رمزعبور را وارد کنید')" oninput="this.setCustomValidity('')"/>
                            @if ($errors->has('password'))
                                <h5><span class="text-danger">{{$errors->first('password')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="تایید رمز" required="" oninvalid="this.setCustomValidity('لطفاً تایید رمزعبور را وارد کنید')" oninput="this.setCustomValidity('')"/>
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
    <script type="text/javascript" src="{{asset('vendors/jquery/dist/jquery.js')}}"></script>
    <script>
        jalaliDatepicker.startWatch();

        function Func(city) {
            var _city = document.getElementById("city");
            _city.options.length = 0;
            if(city != "") {
                var arr = city.split(",");
                for(i = 0; i < arr.length; i++) {
                    if(arr[i] != "") {
                        _city.options[_city.options.length]=new Option(arr[i],arr[i]);
                    }
                }
            }
        }
        function genderChange(g){
            if(g=="M")
            {
                //alert("male checked");
                $("#nState").show();
            }
            else
            {
                //alert("female checked");
                $("#nState").hide();
            }
        }
    </script>
@endsection
