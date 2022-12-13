@extends('mail.mail')

@section('content')

                    <div id="invoicereview">
                        <h3><b>پیش فاکتور سفارش</b> <span>#{{$order_id}}</span></h3>
                        <hr>
                        <div class="row">
                            @php
                                $i=1;
                            @endphp
                            <div>
                                <table>
                                    <td>تاریخ ثبت: {{ Jdate(strtotime($order->expire_date.' - 24 hours'))->format('%d\%m\%Y') }}</td>
                                    <td>تاریخ اعتبار: {{ Jdate(strtotime($order->expire_date))->format('%d\%m\%Y') }}</td>
                                </table>

                                <table>
                                    <thead>
                                    <tr>
                                        @if($official)
                                            <td><h5><b>فروشنده: الگوریتم هوشمند زیتون</b></h5></td>
                                            <td>
                                                کدملی: 14006114034
                                            </td>
                                            <td>شماره ثبت: 13893</td>
                                        @else
                                            <td><h5><b>فروشنده: الگوریتم هوشمند زیتون</b></h5></td>
                                            <td></td>
                                            <td></td>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>آدرس: {{$official?'ساری، خیابان جمهوری، ساختمان پارک علم و فناوری، طبقه سوم، واحد 304' :'مازندران، ساری'}}</td>

                                        @if($official)
                                            <td>کدپستی: 4817718595</td>
                                        @else
                                            <td></td>
                                        @endif
                                        <td>تلفن: 01144430313</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table color-bordered-table inverse-bordered-table">
                                    <thead>
                                    <tr>
                                        @if($official && $l!=null && $user->verified==3)
                                            <td scope="col-md-4"><h5><b> خریدار: {{$l->legal_name }}</b></h5></td>
                                            <td scope="col-md-4">
                                                کدملی: {{$l->legal_nid}}
                                            </td>
                                            <td scope="col-md-4">شماره ثبت: {{$l->publish_id}}</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td scope="col-md-4">آدرس: {{$l->legal_address}}</td>
                                        <td scope="col-md-4">کدپستی: {{$l->legal_zipcode}}</td>
                                        <td scope="col-md-4">تلفن: {{$l->legal_phone}}</td>
                                        @elseif($official && $l==null && $user->verified==3)
                                            <td scope="col-md-4"><h5><b>خریدار: {{$user->first_name }} {{$user->last_name }}</b></h5></td>
                                            <td scope="col-md-4">
                                                کد ملی: {{$user->national_id}}
                                            </td>
                                            <td scope="col-md-4"></td>
                                    </tr>
                                    <tr>
                                        <td>آدرس: {{$user->home_address}}</td>
                                        <td>کدپستی: {{$user->home_zipcode}}</td>
                                        <td>تلفن: {{$user->landline_phone}}</td>
                                        @elseif(!$official)
                                            <td><h5><b>خریدار: {{$user->first_name }} {{$user->last_name }}</b></h5></td>
                                            <td></td>
                                            <td></td>
                                    </tr>
                                    <tr>
                                        <td>آدرس: {{$user->home_address}}</td>
                                        <td></td>
                                        <td>تلفن: {{$user->landline_phone}}</td>
                                        @endif
                                    </tr>

                                    </tbody>
                                </table>

                            </table>
                        </div>
                        <div>
                            <div>

                                <table class="table color-bordered-table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>نام/مدل محصول</th>
                                        <th>تعداد</th>
                                        <th>قیمت واحد</th>
                                        <th>جمع</th>
                                        <th>توضیحات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td class="text-center">{{$i++}} </td>
                                            <td>
                                                {{$item->name}}
                                                <br/>
                                                {{$item->model}}
                                            </td>
                                            <td>{{$item->quantity}} </td>
                                            <td>
                                                ${{strtotime("2020-01-10") > strtotime($order->expire_date)?round($item->price*$item->ratio,1):round($item->price*$item->ratio,2)}}
                                            </td>
                                            <td>
                                                ${{strtotime("2020-01-10") > strtotime($order->expire_date)?round($item->quantity*$item->price*$item->ratio,1):round($item->quantity*$item->price*$item->ratio,2)}}
                                            </td>
                                            <td>
                                                @if($item->type==2)
                                                    @if($item->quantity<100)
                                                        <span class="">پیش سفارش - تحویل سه ماهه</span>
                                                    @elseif($item->quantity<200)
                                                        <span class="">پیش سفارش - تحویل چهار ماهه</span>
                                                    @elseif($item->quantity<300)
                                                        <span class="">پیش سفارش - تحویل پنج ماهه</span>
                                                    @elseif($item->quantity>300)
                                                        <span class="">پیش سفارش - تحویل شش ماهه</span>
                                                    @endif
                                                @elseif($item->type==1)

                                                @endif
                                            </td>
                                        </tr>
                                        @php
                                            //if($item->type==1){
                                                       //$nsum += round($item->quantity*$item->price*$item->ratio,2);
                                                   //}else{
                                                       //$psum += round($item->quantity*$item->price*$item->ratio,2);
                                                   //}
                                               //$sum += ($item->quantity*$item->price*$item->ratio);
                                        @endphp
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        @if($nsum!=0)
                                            <td>جمع سفارشات عادی: {{strtotime("2020-01-10") > strtotime($order->expire_date)?round($nsum,1):$nsum}}$ </td>
                                        @endif
                                        @if($psum!=0)
                                            <td>جمع پیش سفارشات : {{strtotime("2020-01-10") > strtotime($order->expire_date)?round($psum,1):$psum}}$ </td>
                                        @endif
                                        <td>جمع کل: {{strtotime("2020-01-10") > strtotime($order->expire_date)?round($nsum+$psum,1):$nsum+$psum}}$</td>
                                        @php
                                            //$payable = round($nsum+($nsum*0.09)+(($psum+($psum*0.09))*0.5),1);
                                            //$total = ($nsum+$nsum*0.09)+($psum+$psum*0.09);
                                        @endphp
                                    </tr>

                                    </tbody>
                                </table>
                                @if($psum!=0)
{{--                                    <span class="text-info">نکته: 50 درصد مبلغ محصولات پیش سفارش شده در زمان صدور پیشفاکتور و الباقی هنگام ارسال محصول پرداخت خواهد گردید.</span>--}}
                                @endif
                            </div>
                        </div>
                        <div>
                            <div class="pull-left m-t-30 text-right">
                                @if($dis!=null)
                                    <span class="text-info">کوپن تخفیف: "{{$discount}}" بر روی فاکتور اعمال گردید. </span>
                                @endif
                            </div>
                            <div class="pull-right m-t-30 text-right">
                                @if($official && $user->verified==3)
                                    {{--<p>جمع کل: {{round($total,1)}}$</p>--}}
                                    <p>مالیات بر ارزش افزوده: {{strtotime("2020-01-10") > strtotime($order->expire_date)?round($tax,1):round($tax,2)}}$</p>
                                    <hr>
                                    <h3><b>مبلغ نهایی: {{round($totalwt,2)}}$</b></h3>
                                @elseif(!$official)
                                    {{--<p>جمع کل: {{round($usd,1)}}$</p>--}}
                                    <p></p>
                                    <hr>
                                    <h3><b>مبلغ نهایی: {{round($total,2)}}$</b></h3>

                                @endif
                                @if($dis!=null&&$spayment!=null)
                                    <p>کوپن تخفیف: {{round($dis*($official?$totalwt:$total),2)}}$</p>
                                    <p>قابل پرداخت: {{round($fpayment,2)}}$</p>

                                    <p>مانده فاکتور: {{round($spayment,2)}}$</p>
                                @elseif($dis==null&&$spayment!=null)

                                    <p>قابل پرداخت: {{round($fpayment,2)}}$</p>

                                    <p>مانده فاکتور: {{round($spayment,2)}}$</p>
                                @elseif($dis!=null&&$spayment==null)
                                    <p>کوپن تخفیف: {{round($dis*($official?$totalwt:$total),2)}}$</p>
                                    <p>قابل پرداخت: {{round($fpayment,2)}}$</p>
                                @elseif($dis==null&&$spayment==null)
                                    <p>قابل پرداخت: {{round($fpayment,2)}}$</p>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                            <div class="pull-right m-t-30 text-right">
                                <div class="form-group">
                                    <span class="text-right">نرخ دلار: {{number_format($UsdToIrr)}} ریال</span>
                                    <br/>
                                    <span class="text-rightv text-info"> پرداخت پیش فاکتور: {{number_format($fpayment*$UsdToIrr)}} ریال</span>
                                    <br/>
                                    <span class="text-rightv text-info"> پرداخت زمان ارسال: {{number_format($spayment!=null?$spayment*$UsdToIrr:0)}} ریال</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
    </div>


@endsection
