@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>ویرایش پروفایل
                            <small></small>
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span>
                                </button>
                                تغییرات با موفقیت ذخیره شد!
                            </div>
                            @endif
                            <form action="{{ route('editProfile') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input id="id" name="id" hidden value="{{Auth::user()->id}}" />
                                <div>
                                    <label>نام:</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" placeholder="نام" required="" oninvalid="this.setCustomValidity('لطفاً نام خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{Auth::user()->first_name}}"/>
                                    @if ($errors->has('first_name'))
                                        <h5><span class="text-danger">{{$errors->first('first_name')}}</span></h5>
                                    @endif
                                </div>
                                <div>
                                    <label>نام خانوادگی:</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" placeholder="نام خانوادگی" required="" oninvalid="this.setCustomValidity('لطفاً نام خانوادگی خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{Auth::user()->last_name}}"/>
                                    @if ($errors->has('last_name'))
                                        <h5><span class="text-danger">{{$errors->first('last_name')}}</span></h5>
                                    @endif
                                </div>
                                <div>
                                    <label>کدملی:</label>
                                    <input type="text" id="nationalId" name="nationalId" class="form-control" placeholder="کدملی 10 رقمی" required="" oninvalid="this.setCustomValidity('لطفاً کدملی خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{Auth::user()->nationalId}}"/>
                                    @if ($errors->has('nationalId'))
                                        <h5><span class="text-danger">{{$errors->first('nationalId')}}</span></h5>
                                    @endif
                                </div>
                                <div>
                                    <label>شماره همراه:</label>
                                    <input type="text" id="mobileNumber" name="mobileNumber" class="form-control" placeholder="شماره همراه" oninvalid="this.setCustomValidity('لطفاً شماره همراه خود را وارد کنید')" oninput="this.setCustomValidity('')"
                                           value="{{Auth::user()->mobileNumber}}"/>
                                    @if ($errors->has('mobileNumber'))
                                        <h5><span class="text-danger">{{$errors->first('mobileNumber')}}</span></h5>
                                    @endif
                                </div>
                                <div>
                                    <label>تاریخ تولد (حداقل سن عضویت 10 سال) :</label>
                                    <input type="text" data-jdp data-jdp-max-date="{{jdate('today - 10 year')->format('Y/m/d')}}" value="{{jdate(Auth::user()->birthDate)->format('Y/m/d')}}" id="birthDate" name="birthDate" class="form-control" placeholder="تاریخ تولد" oninvalid="this.setCustomValidity('لطفاً تاریخ تولد خود را وارد کنید')" oninput="this.setCustomValidity('')"/>
                                    @if ($errors->has('birthDate'))
                                        <h5><span class="text-danger">{{$errors->first('birthDate')}}</span></h5>
                                    @endif
                                </div>

                                <div>
                                    <label>جنسیت <span class="required">*</span>:</label>
                                    مذکر:
                                    <input type="radio" class="flat" name="gender" onchange="genderChange(this.value)" id="genderM" value="M" {{Auth::user()->gender=="M"?'checked=""':''}} >
                                    مونث:
                                    <input type="radio" class="flat" name="gender" onchange="genderChange(this.value)" id="genderF" value="F" {{Auth::user()->gender=="F"?'checked=""':''}}/>
                                </div>

                                <div id="nState" style="display:{{Auth::user()->gender=="F"?'none':'block'}};">
                                    <label>وضعیت نظام وظیفه :</label>
                                    مشمول:
                                    <input type="radio" class="flat" name="vState" value="no" {{Auth::user()->vState=="no"?'checked=""':''}} required/>
                                    پایان خدمت:
                                    <input type="radio" class="flat" name="vState" value="yes" {{Auth::user()->vState=="yes"?'checked=""':''}}/>
                                </div>
                                <hr>
                                <div>
                                    <label class="control-label">استان</label>
                                    <select type="text" id="state" name="state" class="form-control" onchange="Func(this.options[this.selectedIndex].getAttribute('data-cities'))">
                                        <option data-cities="" value="---"  {{Auth::user()->state=="---"?"selected":""}}>---</option>
                                        <option data-cities="  ,آذرشهر ,اسکو ,اهر ,بستان‌آباد ,بناب ,تبریز ,جلفا ,چاراویماق ,سراب ,شبستر ,عجب‌شیر ,کلیبر ,مراغه ,مرند ,ملکان ,میانه ,ورزقان ,هریس ,هشترود" value="آذربایجان شرقی" {{Auth::user()->state=="آذربایجان شرقی"?"selected":""}}>آذربایجان شرقی</option>
                                        <option data-cities="  ,ارومیه ,اشنویه ,بوکان ,پیرانشهر ,تکاب ,چالدران ,خوی ,سردشت ,سلماس ,شاهین‌دژ ,ماکو ,مهاباد ,میاندوآب ,نقده" value="آذربایجان غربی" {{Auth::user()->state=="آذربایجان غربی"?"selected":""}}>آذربایجان غربی</option>
                                        <option data-cities="  ,اردبیل ,بیله‌سوار ,پارس‌آباد ,خلخال ,کوثر ,گِرمی ,مِشگین‌شهر ,نَمین ,نیر" value="اردبیل" {{Auth::user()->state=="اردبیل"?"selected":""}}>اردبیل</option>
                                        <option data-cities="  ,آران و بیدگل ,اردستان ,اصفهان ,برخوار و میمه ,تیران و کرون ,چادگان ,خمینی‌شهر ,خوانسار ,سمیرم ,شهرضا ,سمیرم سفلی ,فریدن ,فریدون‌شهر ,فلاورجان ,کاشان ,گلپایگان ,لنجان ,مبارکه ,نائین ,نجف‌آباد ,نطنز" value="اصفهان" {{Auth::user()->state=="اصفهان"?"selected":""}}>اصفهان</option>
                                        <option data-cities="  ,آبدانان ,ایلام ,ایوان ,دره‌شهر ,دهلران ,شیروان و چرداول ,مهران" value="ایلام" {{Auth::user()->state=="ایلام"?"selected":""}}>ایلام</option>
                                        <option data-cities="  ,بوشهر ,تنگستان ,جم ,دشتستان ,دشتی,دیر ,دیلم ,کنگان ,گناوه" value="بوشهر" {{Auth::user()->state=="بوشهر"?"selected":""}}>بوشهر</option>
                                        <option data-cities="  ,اسلام‌شهر ,پاکدشت ,تهران ,دماوند ,رباط‌کریم ,ری ,ساوجبلاغ ,شمیرانات ,شهریار ,فیروزکوه ,کرج ,نظرآباد ,ورامین" value="تهران" {{Auth::user()->state=="تهران"?"selected":""}}>تهران</option>
                                        <option data-cities="  ,اردل ,بروجن ,شهرکرد ,فارسان ,کوهرنگ ,لردگان" value="چهارمحال و بختیاری" {{Auth::user()->state=="چهارمحال و بختیاری"?"selected":""}}>چهارمحال و بختیاری</option>
                                        <option data-cities="  ,بیرجند ,درمیان ,سرایان ,سربیشه ,فردوس ,قائنات,نهبندان" value="خراسان جنوبی" {{Auth::user()->state=="خراسان جنوبی"?"selected":""}}>خراسان جنوبی</option>
                                        <option data-cities="  ,بردسکن ,تایباد ,تربت جام ,تربت حیدریه ,چناران ,خلیل‌آباد ,خواف ,درگز ,رشتخوار ,سبزوار ,سرخس ,فریمان ,قوچان ,کاشمر ,کلات ,گناباد ,مشهد ,مه ولات ,نیشابور" value="خراسان رضوی" {{Auth::user()->state=="خراسان رضوی"?"selected":""}}>خراسان رضوی</option>
                                        <option data-cities="  ,اسفراین ,بجنورد ,جاجرم ,شیروان ,فاروج ,مانه و سملقان" value="خراسان شمالی" {{Auth::user()->state=="خراسان شمالی"?"selected":""}}>خراسان شمالی</option>
                                        <option data-cities="  ,آبادان ,امیدیه ,اندیمشک ,اهواز ,ایذه ,باغ‌ملک ,بندر ماهشهر ,بهبهان ,خرمشهر ,دزفول ,دشت آزادگان ,رامشیر ,رامهرمز ,شادگان ,شوش ,شوشتر ,گتوند ,لالی ,مسجد سلیمان,هندیجان " value="خوزستان" {{Auth::user()->state=="خوزستان"?"selected":""}}>خوزستان</option>
                                        <option data-cities="  ,ابهر ,ایجرود ,خدابنده ,خرمدره ,زنجان ,طارم ,ماه‌نشان" value="زنجان" {{Auth::user()->state=="زنجان"?"selected":""}}>زنجان</option>
                                        <option data-cities="  ,دامغان ,سمنان ,شاهرود ,گرمسار ,مهدی‌شهر" value="سمنان" {{Auth::user()->state=="سمنان"?"selected":""}}>سمنان</option>
                                        <option data-cities="  ,ایرانشهر ,چابهار ,خاش ,دلگان ,زابل ,زاهدان ,زهک ,سراوان ,سرباز ,کنارک ,نیک‌شهر" value="سیستان و بلوچستان" {{Auth::user()->state=="سیستان و بلوچستان"?"selected":""}}>سیستان و بلوچستان</option>
                                        <option data-cities="  ,آباده ,ارسنجان ,استهبان ,اقلید ,بوانات ,پاسارگاد ,جهرم ,خرم‌بید ,خنج ,داراب ,زرین‌دشت ,سپیدان ,شیراز ,فراشبند ,فسا ,فیروزآباد ,قیر و کارزین ,کازرون ,لارستان ,لامِرد ,مرودشت ,ممسنی ,مهر ,نی‌ریز" value="فارس" {{Auth::user()->state=="فارس"?"selected":""}}>فارس</option>
                                        <option data-cities="  ,آبیک ,البرز ,بوئین‌زهرا ,تاکستان ,قزوین" value="قزوین" {{Auth::user()->state=="قزوین"?"selected":""}}>قزوین</option>
                                        <option data-cities="  ,قم" value="قم" {{Auth::user()->state=="قم"?"selected":""}}>قم</option>
                                        <option data-cities="  ,بانه ,بیجار ,دیواندره ,سروآباد ,سقز ,سنندج ,قروه ,کامیاران ,مریوان" value="کردستان" {{Auth::user()->state=="کردستان"?"selected":""}}>کردستان</option>
                                        <option data-cities="  ,بافت ,بردسیر ,بم ,جیرفت ,راور ,رفسنجان ,رودبار جنوب ,زرند ,سیرجان ,شهر بابک ,عنبرآباد ,قلعه گنج ,کرمان ,کوهبنان ,کهنوج ,منوجان" value="کرمان" {{Auth::user()->state=="کرمان"?"selected":""}}>کرمان</option>
                                        <option data-cities="  ,اسلام‌آباد غرب ,پاوه ,ثلاث باباجانی ,جوانرود ,دالاهو ,روانسر ,سرپل ذهاب ,سنقر ,صحنه ,قصر شیرین ,کرمانشاه ,کنگاور ,گیلان غرب ,هرسین" value="کرمانشاه" {{Auth::user()->state=="کرمانشاه"?"selected":""}}>کرمانشاه</option>
                                        <option data-cities="  ,بویراحمد ,بهمئی ,دنا ,کهگیلویه ,گچساران" value="کهگیلویه و بویراحمد" {{Auth::user()->state=="کهگیلویه و بویراحمد"?"selected":""}}>کهگیلویه و بویراحمد</option>
                                        <option data-cities="  ,آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت" value="گلستان" {{Auth::user()->state=="گلستان"?"selected":""}}>گلستان</option>
                                        <option data-cities="  ,آستارا ,آستانه اشرفیه ,اَملَش ,بندر انزلی ,رشت ,رضوانشهر ,رودبار ,رودسر ,سیاهکل ,شَفت ,صومعه‌سرا ,طوالش ,فومَن ,لاهیجان ,لنگرود ,ماسال" value="گیلان" {{Auth::user()->state=="گیلان"?"selected":""}}>گیلان</option>
                                        <option data-cities="  ,ازنا ,الیگودرز ,بروجرد ,پل‌دختر ,خرم‌آباد ,دورود ,دلفان ,سلسله ,کوهدشت" value="لرستان" {{Auth::user()->state=="لرستان"?"selected":""}}>لرستان</option>
                                        <option data-cities="  ,آمل ,بابل ,بابلسر ,بهشهر ,تنکابن ,جویبار ,چالوس ,رامسر ,ساری ,سوادکوه ,قائم‌شهر ,گلوگاه ,محمودآباد ,نکا ,نور ,نوشهر" value="مازندران" {{Auth::user()->state=="مازندران"?"selected":""}}>مازندران</option>
                                        <option data-cities="  ,آشتیان ,اراک ,تفرش ,خمین ,دلیجان ,زرندیه ,ساوه ,شازند ,کمیجان ,محلات" value="مرکزی" {{Auth::user()->state=="مرکزی"?"selected":""}}>مرکزی</option>
                                        <option data-cities="  ,ابوموسی ,بستک ,بندر عباس ,بندر لنگه ,جاسک ,حاجی‌آباد ,شهرستان خمیر ,رودان  ,قشم ,گاوبندی ,میناب" value="هرمزگان" {{Auth::user()->state=="هرمزگان"?"selected":""}}>هرمزگان</option>
                                        <option data-cities="  ,اسدآباد ,بهار ,تویسرکان ,رزن ,کبودرآهنگ ,ملایر ,نهاوند ,همدان" value="همدان" {{Auth::user()->state=="همدان"?"selected":""}}>همدان</option>
                                        <option data-cities="  ,ابرکوه ,اردکان ,بافق ,تفت ,خاتم ,صدوق ,طبس ,مهریز ,مِیبُد ,یزد" value="یزد" {{Auth::user()->state=="یزد"?"selected":""}}>یزد</option>
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
                                    <label class="control-label">عکس پروفایل (حداکثر 200 کیلوبایت)</label>
                                    <input type="file" id="avatar" name="avatar" class="form-control" value="{{Auth::user()->avatar}}"/>
                                    @if ($errors->has('avatar'))
                                        <h5><span class="text-danger">{{$errors->first('avatar')}}</span></h5>
                                    @endif
                                </div>
                                <hr>
                                <div>
                                    <label>نام کاربری (فقط حروف لاتین):</label>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="نام کاربری" required="" oninvalid="this.setCustomValidity('لطفاً نام کاربری با حروف لاتین وارد کنید')" oninput="this.setCustomValidity('')" value="{{Auth::user()->username}}"/>
                                    @if ($errors->has('username'))
                                        <h5><span class="text-danger">{{$errors->first('username')}}</span></h5>
                                    @endif
                                </div>
                                <div>
                                    <label>ایمیل:</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="ایمیل" required="" oninvalid="this.setCustomValidity('لطفاً ایمیل خود را وارد کنید')" oninput="this.setCustomValidity('')" value="{{Auth::user()->email}}"/>
                                    @if ($errors->has('email'))
                                        <h5><span class="text-danger">{{$errors->first('email')}}</span></h5>
                                    @endif
                                </div>
                                <div>
                                    <button class="btn btn-default submit" type="submit">ذخیره</button>
                                </div>

                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
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
                               if(this.value=='{{Auth::user()->city}} '){
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
@endsection
