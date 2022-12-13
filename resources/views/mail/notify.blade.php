
<div style="direction: rtl;text-align: right;font-size: medium;line-height: 2;">
    <h3 style="text-align:center;background-color:#00897b;color:white;padding: 10px;">سامانه همکاران Berxy</h3>
    <h3>سفارش شماره #{{$order_id}} پرداخت شد</h3>
    <p style="font-size:medium">
        سفارش شماره #{{$order_id}} توسط نماینده {{$user}} پرداخت شد. برای بررسی اطلاعات پرداخت به پنل مدیریت مراجعه کنید.
        <br/>
        @if($type==1)
            پرداخت اولیه
        @else
            پرداخت زمان ارسال
        @endif
        <br/>
        <hl/>
    </p>
    <p style="text-align: center;background-color:#cccccc;">
        <strong>پشتیبانی:</strong>
        <br/>
        011-44430313
    </p>
</div>



