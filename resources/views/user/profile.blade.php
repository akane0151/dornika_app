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
                                    <img class="img-responsive avatar-view" width="250"
                                    @if(Auth::user()->avatar!=null)
                                        src="{{asset('avatars400x400/'.Auth::user()->avatar)}}"
                                    @else
                                        src="{{asset('avatars/nonavatar.png')}}"
                                    @endif
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

@endsection
