@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>گزارشات کاربر
                            <small>گزارش فعالیت‌ها</small>
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view"
                                         src="{{asset("/avatars/".Auth::user()->avatar)}}"
                                         alt="Avatar"
                                         title="Change the avatar">
                                </div>
                            </div>
                            <h3>{{Auth::user()->first_name.' '.Auth::user()->last_name}}</h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i>{{Auth::user()->state.' '.Auth::user()->city}}
                                </li>

                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> {{Auth::user()->mobileNumber}}
                                </li>
                            </ul>

                            <a class="btn btn-success" href="editProfile"><i class="fa fa-edit m-right-xs"></i>&nbsp;ویرایش پروفایل</a>
                            <br/>


                    </div>
                </div>
            </div>
        </div>
            <script type="text/javascript" src="{{asset('vendors/jdatepicker/jalalidatepicker.js')}}"></script>
            <script>
                jalaliDatepicker.startWatch({
                    maxDate: "attr",
                });
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
                        $("#nState").show();
                    }
                    else
                    {
                        $("#nState").hide();
                    }
                }
            </script>
@endsection
