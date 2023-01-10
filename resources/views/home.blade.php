@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>آخرین مطالب
                        <small>جلسات</small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @foreach($posts as $p)
                    <article class=" event">
                        <a class="pull-left date">
                            <img src="{{asset('thumbnails/'.$p->thumbnail)}}" width="56" height="56"/>
{{--                            <p class="month">آپریل</p>--}}
{{--                            <p class="day">23</p>--}}
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">{{$p->title}}</a>
                            <p>{!!implode(' ', array_slice(explode(' ', $p->content), 0, 10))!!}</p>
                        </div>
                    </article>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
@endsection
