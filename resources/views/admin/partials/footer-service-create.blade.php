<div class="main-content">
    <div class="main-content-item">
        <h2>تنظیمات فوتر | بخش خدمات</h2>
        {!! Form::open(['route' => 'footer.service.store', 'method' => 'post', 'files' => true]) !!}

        <div class="form-group my-3">
            {!! Form::label('title', 'عنوان') !!}
            {!! Form::text('title', null, ['placeholder' => 'عنوان را وارد کنید']) !!}
            @error('title')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('image', 'تصویر') !!}
            {!! Form::file('image', null, ['placeholder' => 'تصویر را وارد کنید']) !!}
            @error('image')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('alt', 'متن جایگزین تصویر') !!}
            {!! Form::text('alt', null, ['placeholder' => 'متن جایگزین را وارد کنید']) !!}
            @error('alt')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('link', 'پیوند عکس') !!}
            {!! Form::text('link', null, ['placeholder' => 'پیوند عکس را وارد کنید']) !!}
            @error('link')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('author', 'نویسنده') !!}
            {!! Form::text('author', null, ['placeholder' => 'نویسنده را وارد کنید']) !!}
            @error('author')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
