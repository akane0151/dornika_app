@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-16">
            <div class="x_panel">
                <div class="x_title">
                    <h2>مشحصات کاربر</h2>
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
                    <form action="{{ route('editUser') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input id="id" name="id" hidden value="{{$user->id}}" />
                        <div>
                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="نام" required="" oninvalid="this.setCustomValidity('لطفاً نام خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{$user->first_name}}"/>
                            @if ($errors->has('first_name'))
                                <h5><span class="text-danger">{{$errors->first('first_name')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="نام خانوادگی" required="" oninvalid="this.setCustomValidity('لطفاً نام خانوادگی خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{$user->last_name}}"/>
                            @if ($errors->has('last_name'))
                                <h5><span class="text-danger">{{$errors->first('last_name')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="nationalId" name="nationalId" class="form-control" placeholder="کدملی 10 رقمی" required="" oninvalid="this.setCustomValidity('لطفاً کدملی خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{$user->nationalId}}"/>
                            @if ($errors->has('nationalId'))
                                <h5><span class="text-danger">{{$errors->first('nationalId')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="text" id="mobileNumber" name="mobileNumber" class="form-control" placeholder="شماره همراه" oninvalid="this.setCustomValidity('لطفاً شماره همراه خود را وارد کنید')" oninput="this.setCustomValidity('')"
                                   value="{{$user->mobileNumber}}"/>
                            @if ($errors->has('mobileNumber'))
                                <h5><span class="text-danger">{{$errors->first('mobileNumber')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <label>تاریخ تولد:</label>
                            <input type="text" data-jdp data-jdp-max-date="{{jdate('today - 10 year')->format('Y/m/d')}}" value="{{jdate(strtotime($user->birthDate))->format('Y/m/d')}}" id="birthDate" name="birthDate" class="form-control" placeholder="تاریخ تولد" oninvalid="this.setCustomValidity('لطفاً تاریخ تولد خود را وارد کنید')" oninput="this.setCustomValidity('')"/>
                            @if ($errors->has('birthDate'))
                                <h5><span class="text-danger">{{$errors->first('birthDate')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <label>جنسیت <span class="required">*</span>:</label>
                            مذکر:
                            <input type="radio" class="flat" name="gender" onchange="genderChange(this.value)" id="genderM" value="M" {{$user->gender=="M"?'checked=""':''}}>
                            مونث:
                            <input type="radio" class="flat" name="gender" onchange="genderChange(this.value)" id="genderF" value="F" {{$user->gender=="F"?'checked=""':''}}/>
                        </div>
                        <div id="nState" style="display: block;">
                            <label>وضعیت نظام وظیفه :</label>
                            مشمول:
                            <input type="radio" class="flat" name="vState" value="no" {{$user->vState=="no"?'checked=""':''}}/>
                            پایان خدمت:
                            <input type="radio" class="flat" name="vState" value="yes" {{$user->vState=="yes"?'checked=""':''}}/>
                        </div>
                        <hr>
                        <div>
                            <label class="control-label">استان</label>
                            <select type="text" id="state" name="state" class="form-control" onchange="Func(this.options[this.selectedIndex].getAttribute('data-cities'))">
                                <option data-cities="" value="---"  {{$user->state=="---"?"selected":""}}>---</option>
                                <option data-cities="  ,آذرشهر ,اسکو ,اهر ,بستان‌آباد ,بناب ,تبریز ,جلفا ,چاراویماق ,سراب ,شبستر ,عجب‌شیر ,کلیبر ,مراغه ,مرند ,ملکان ,میانه ,ورزقان ,هریس ,هشترود" value="آذربایجان شرقی" {{$user->state=="آذربایجان شرقی"?"selected":""}}>آذربایجان شرقی</option>
                                <option data-cities="  ,ارومیه ,اشنویه ,بوکان ,پیرانشهر ,تکاب ,چالدران ,خوی ,سردشت ,سلماس ,شاهین‌دژ ,ماکو ,مهاباد ,میاندوآب ,نقده" value="آذربایجان غربی" {{$user->state=="آذربایجان غربی"?"selected":""}}>آذربایجان غربی</option>
                                <option data-cities="  ,اردبیل ,بیله‌سوار ,پارس‌آباد ,خلخال ,کوثر ,گِرمی ,مِشگین‌شهر ,نَمین ,نیر" value="اردبیل" {{$user->state=="اردبیل"?"selected":""}}>اردبیل</option>
                                <option data-cities="  ,آران و بیدگل ,اردستان ,اصفهان ,برخوار و میمه ,تیران و کرون ,چادگان ,خمینی‌شهر ,خوانسار ,سمیرم ,شهرضا ,سمیرم سفلی ,فریدن ,فریدون‌شهر ,فلاورجان ,کاشان ,گلپایگان ,لنجان ,مبارکه ,نائین ,نجف‌آباد ,نطنز" value="اصفهان" {{$user->state=="اصفهان"?"selected":""}}>اصفهان</option>
                                <option data-cities="  ,آبدانان ,ایلام ,ایوان ,دره‌شهر ,دهلران ,شیروان و چرداول ,مهران" value="ایلام" {{$user->state=="ایلام"?"selected":""}}>ایلام</option>
                                <option data-cities="  ,بوشهر ,تنگستان ,جم ,دشتستان ,دشتی,دیر ,دیلم ,کنگان ,گناوه" value="بوشهر" {{$user->state=="بوشهر"?"selected":""}}>بوشهر</option>
                                <option data-cities="  ,اسلام‌شهر ,پاکدشت ,تهران ,دماوند ,رباط‌کریم ,ری ,ساوجبلاغ ,شمیرانات ,شهریار ,فیروزکوه ,کرج ,نظرآباد ,ورامین" value="تهران" {{$user->state=="تهران"?"selected":""}}>تهران</option>
                                <option data-cities="  ,اردل ,بروجن ,شهرکرد ,فارسان ,کوهرنگ ,لردگان" value="چهارمحال و بختیاری" {{$user->state=="چهارمحال و بختیاری"?"selected":""}}>چهارمحال و بختیاری</option>
                                <option data-cities="  ,بیرجند ,درمیان ,سرایان ,سربیشه ,فردوس ,قائنات,نهبندان" value="خراسان جنوبی" {{$user->state=="خراسان جنوبی"?"selected":""}}>خراسان جنوبی</option>
                                <option data-cities="  ,بردسکن ,تایباد ,تربت جام ,تربت حیدریه ,چناران ,خلیل‌آباد ,خواف ,درگز ,رشتخوار ,سبزوار ,سرخس ,فریمان ,قوچان ,کاشمر ,کلات ,گناباد ,مشهد ,مه ولات ,نیشابور" value="خراسان رضوی" {{$user->state=="خراسان رضوی"?"selected":""}}>خراسان رضوی</option>
                                <option data-cities="  ,اسفراین ,بجنورد ,جاجرم ,شیروان ,فاروج ,مانه و سملقان" value="خراسان شمالی" {{$user->state=="خراسان شمالی"?"selected":""}}>خراسان شمالی</option>
                                <option data-cities="  ,آبادان ,امیدیه ,اندیمشک ,اهواز ,ایذه ,باغ‌ملک ,بندر ماهشهر ,بهبهان ,خرمشهر ,دزفول ,دشت آزادگان ,رامشیر ,رامهرمز ,شادگان ,شوش ,شوشتر ,گتوند ,لالی ,مسجد سلیمان,هندیجان " value="خوزستان" {{$user->state=="خوزستان"?"selected":""}}>خوزستان</option>
                                <option data-cities="  ,ابهر ,ایجرود ,خدابنده ,خرمدره ,زنجان ,طارم ,ماه‌نشان" value="زنجان" {{$user->state=="زنجان"?"selected":""}}>زنجان</option>
                                <option data-cities="  ,دامغان ,سمنان ,شاهرود ,گرمسار ,مهدی‌شهر" value="سمنان" {{$user->state=="سمنان"?"selected":""}}>سمنان</option>
                                <option data-cities="  ,ایرانشهر ,چابهار ,خاش ,دلگان ,زابل ,زاهدان ,زهک ,سراوان ,سرباز ,کنارک ,نیک‌شهر" value="سیستان و بلوچستان" {{$user->state=="سیستان و بلوچستان"?"selected":""}}>سیستان و بلوچستان</option>
                                <option data-cities="  ,آباده ,ارسنجان ,استهبان ,اقلید ,بوانات ,پاسارگاد ,جهرم ,خرم‌بید ,خنج ,داراب ,زرین‌دشت ,سپیدان ,شیراز ,فراشبند ,فسا ,فیروزآباد ,قیر و کارزین ,کازرون ,لارستان ,لامِرد ,مرودشت ,ممسنی ,مهر ,نی‌ریز" value="فارس" {{$user->state=="فارس"?"selected":""}}>فارس</option>
                                <option data-cities="  ,آبیک ,البرز ,بوئین‌زهرا ,تاکستان ,قزوین" value="قزوین" {{$user->state=="قزوین"?"selected":""}}>قزوین</option>
                                <option data-cities="  ,قم" value="قم" {{$user->state=="قم"?"selected":""}}>قم</option>
                                <option data-cities="  ,بانه ,بیجار ,دیواندره ,سروآباد ,سقز ,سنندج ,قروه ,کامیاران ,مریوان" value="کردستان" {{$user->state=="کردستان"?"selected":""}}>کردستان</option>
                                <option data-cities="  ,بافت ,بردسیر ,بم ,جیرفت ,راور ,رفسنجان ,رودبار جنوب ,زرند ,سیرجان ,شهر بابک ,عنبرآباد ,قلعه گنج ,کرمان ,کوهبنان ,کهنوج ,منوجان" value="کرمان" {{$user->state=="کرمان"?"selected":""}}>کرمان</option>
                                <option data-cities="  ,اسلام‌آباد غرب ,پاوه ,ثلاث باباجانی ,جوانرود ,دالاهو ,روانسر ,سرپل ذهاب ,سنقر ,صحنه ,قصر شیرین ,کرمانشاه ,کنگاور ,گیلان غرب ,هرسین" value="کرمانشاه" {{$user->state=="کرمانشاه"?"selected":""}}>کرمانشاه</option>
                                <option data-cities="  ,بویراحمد ,بهمئی ,دنا ,کهگیلویه ,گچساران" value="کهگیلویه و بویراحمد" {{$user->state=="کهگیلویه و بویراحمد"?"selected":""}}>کهگیلویه و بویراحمد</option>
                                <option data-cities="  ,آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت" value="گلستان" {{$user->state=="گلستان"?"selected":""}}>گلستان</option>
                                <option data-cities="  ,آستارا ,آستانه اشرفیه ,اَملَش ,بندر انزلی ,رشت ,رضوانشهر ,رودبار ,رودسر ,سیاهکل ,شَفت ,صومعه‌سرا ,طوالش ,فومَن ,لاهیجان ,لنگرود ,ماسال" value="گیلان" {{$user->state=="گیلان"?"selected":""}}>گیلان</option>
                                <option data-cities="  ,ازنا ,الیگودرز ,بروجرد ,پل‌دختر ,خرم‌آباد ,دورود ,دلفان ,سلسله ,کوهدشت" value="لرستان" {{$user->state=="لرستان"?"selected":""}}>لرستان</option>
                                <option data-cities="  ,آمل ,بابل ,بابلسر ,بهشهر ,تنکابن ,جویبار ,چالوس ,رامسر ,ساری ,سوادکوه ,قائم‌شهر ,گلوگاه ,محمودآباد ,نکا ,نور ,نوشهر" value="مازندران" {{$user->state=="مازندران"?"selected":""}}>مازندران</option>
                                <option data-cities="  ,آشتیان ,اراک ,تفرش ,خمین ,دلیجان ,زرندیه ,ساوه ,شازند ,کمیجان ,محلات" value="مرکزی" {{$user->state=="مرکزی"?"selected":""}}>مرکزی</option>
                                <option data-cities="  ,ابوموسی ,بستک ,بندر عباس ,بندر لنگه ,جاسک ,حاجی‌آباد ,شهرستان خمیر ,رودان  ,قشم ,گاوبندی ,میناب" value="هرمزگان" {{$user->state=="هرمزگان"?"selected":""}}>هرمزگان</option>
                                <option data-cities="  ,اسدآباد ,بهار ,تویسرکان ,رزن ,کبودرآهنگ ,ملایر ,نهاوند ,همدان" value="همدان" {{$user->state=="همدان"?"selected":""}}>همدان</option>
                                <option data-cities="  ,ابرکوه ,اردکان ,بافق ,تفت ,خاتم ,صدوق ,طبس ,مهریز ,مِیبُد ,یزد" value="یزد" {{$user->state=="یزد"?"selected":""}}>یزد</option>
                            </select>
                            @if ($errors->has('state'))
                                <h5><span class="text-danger">{{$errors->first('state')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <label class="control-label">شهر</label>
                            <select type="text" id="city" name="city" class="form-control">
                                <option value="">---</option>
                            </select>
                            @if ($errors->has('city'))
                                <h5><span class="text-danger">{{$errors->first('city')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <label class="control-label">نام کاربری</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="نام کاربری" required="" oninvalid="this.setCustomValidity('لطفاً نام کاربری با حروف لاتین وارد کنید')" oninput="this.setCustomValidity('')" value="{{$user->username}}"/>
                            @if ($errors->has('username'))
                                <h5><span class="text-danger">{{$errors->first('username')}}</span></h5>
                            @endif
                        </div>
                        <div>
                            <input type="email" id="email" name="email" class="form-control" placeholder="ایمیل" required="" oninvalid="this.setCustomValidity('لطفاً ایمیل خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{$user->email}}"/>
                            @if ($errors->has('email'))
                                <h5><span class="text-danger">{{$errors->first('email')}}</span></h5>
                            @endif
                        </div>
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
<script type="text/javascript" src="{{asset('vendors/jdatepicker/jalalidatepicker.js')}}"></script>
<script>
    jalaliDatepicker.startWatch({
        maxDate: "attr",
    });
    var cities = $("#state").find(':selected').data('cities');
    Func(cities);
    setCity();
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
    function setCity(){
        $("#city > option").each(function (){
            if(this.value=='{{$user->city}} '){
                $("#city").val(this.value).change();
            }
        });
    }
    function genderChange(g){
        if(g=="M")
        {
            $("#nState").show();
        }
        else
        {
            $("#nState").hide();
        }
    }
</script>
</div>
</div>
@stop


