<div class="main-content">
    <div class="main-content-item">
        <h2>تنظیمات بخش سربرگ</h2>
        {!! Form::open(['route' => 'header.store', 'method' => 'post']) !!}

        <div class="form-group my-3">
            {!! Form::label('title', 'عنوان') !!}
            {!! Form::text('title', null, ['placeholder' => 'عنوان را وارد کنید']) !!}
            @error('title')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('link', 'لینک') !!}
            {!! Form::text('link', null, ['placeholder' => 'لینک را وارد کنید']) !!}
            @error('link')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
