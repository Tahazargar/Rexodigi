<div class="main-content">
    <div class="main-content-item">
       <h2>تنظیمات بخش بالایی هدر</h2>
        {!! Form::open(['route' => 'topHeader.store', 'method' => 'post']) !!}

<div class="form-group my-3">
    {!! Form::label('email', 'ایمیل شما') !!}
    {!! Form::text('email', null, ['placeholder' => 'ایمیل خود را وارد کنید']) !!}
</div>

<div class="form-group my-3">
    {!! Form::label('phone', 'شماره تماس') !!}
    {!! Form::text('phone', null, ['placeholder' => 'شماره تماس خود را وارد کنید']) !!}
</div>

<div class="form-group my-3">
    {!! Form::label('instagram', 'اینستاگرام') !!}
    {!! Form::text('instagram', null, ['placeholder' => 'لینک اینستاگرام']) !!}
</div>

<div class="form-group my-3">
    {!! Form::label('facebook', 'فیسبوک') !!}
    {!! Form::text('facebook', null, ['placeholder' => 'لینک فیسبوک']) !!}
</div>

<div class="form-group my-3">
    {!! Form::label('twitter', 'توییتر') !!}
    {!! Form::text('twitter', null, ['placeholder' => 'لینک توییتر']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
</div>
    </div>
</div>
