<div class="main-content">
    <div class="main-content-item">
        <h2>تنظیمات فوتر | بخش سوالی دارید</h2>
        {!! Form::open(['route' => 'footer.anyQuestion.store', 'method' => 'post']) !!}

        <div class="form-group my-3">
            {!! Form::label('address', 'آدرس') !!}
            {!! Form::text('address', null, ['placeholder' => 'آدرس را وارد کنید']) !!}
            @error('address')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('phone', 'شماره تماس') !!}
            {!! Form::text('phone', null, ['placeholder' => 'شماره تماس را وارد کنید']) !!}
            @error('phone')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('email', 'پست الکترونیکی') !!}
            {!! Form::text('email', null, ['placeholder' => 'پست الکترونیکی را وارد کنید']) !!}
            @error('email')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
