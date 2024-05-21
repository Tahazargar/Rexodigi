<div class="main-content">
    <div class="main-content-item">
        <h2>تنظیمات فوتر | بخش دسترسی سریع</h2>
        {!! Form::open(['route' => 'footer.quick.store', 'method' => 'post']) !!}

        <h3 class="text-warning">آیتم اول</h3>

        <div class="form-group my-3">
            {!! Form::label('first_title', 'عنوان') !!}
            {!! Form::text('first_title', null, ['placeholder' => 'عنوان را وارد کنید']) !!}
            @error('first_title')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('first_link', 'لینک') !!}
            {!! Form::text('first_link', null, ['placeholder' => 'لینک را وارد کنید']) !!}
            @error('first_link')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <h3 class="text-warning">آیتم دوم</h3>

        <div class="form-group my-3">
            {!! Form::label('second_title', 'عنوان') !!}
            {!! Form::text('second_title', null, ['placeholder' => 'عنوان را وارد کنید']) !!}
            @error('second_title')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('second_link', 'لینک') !!}
            {!! Form::text('second_link', null, ['placeholder' => 'لینک را وارد کنید']) !!}
            @error('second_link')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <h3 class="text-warning">آیتم سوم</h3>

        <div class="form-group my-3">
            {!! Form::label('third_title', 'عنوان') !!}
            {!! Form::text('third_title', null, ['placeholder' => 'عنوان را وارد کنید']) !!}
            @error('third_title')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('third_link', 'لینک') !!}
            {!! Form::text('third_link', null, ['placeholder' => 'لینک را وارد کنید']) !!}
            @error('third_link')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <h3 class="text-warning">آیتم چهارم</h3>

        <div class="form-group my-3">
            {!! Form::label('forth_title', 'عنوان') !!}
            {!! Form::text('forth_title', null, ['placeholder' => 'عنوان را وارد کنید']) !!}
            @error('forth_title')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('forth_link', 'لینک') !!}
            {!! Form::text('forth_link', null, ['placeholder' => 'لینک را وارد کنید']) !!}
            @error('forth_link')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
