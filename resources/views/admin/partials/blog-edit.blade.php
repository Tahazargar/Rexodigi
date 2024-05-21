<div class="main-content">
    <div class="main-content-item">
        <h2>ویرایش بلاگ</h2>
        {!! Form::model($blog ,['route' => ['blog.update', $blog -> id], 'method' => 'PUT', 'files' => true]) !!}
        <div class="form-group my-3">
            {!! Form::label('image', 'تصویر بلاگ') !!}
            {!! Form::file('image', null, ['placeholder' => 'تصویر بلاگ را آپلود کنید']) !!}
            @error('image')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('alt', 'متن جایگزین تصویر') !!}
            {!! Form::textarea('alt', null, ['placeholder' => 'متن جایگزین تصویر وارد کنید']) !!}
            @error('alt')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('subject', 'موضوع بلاگ') !!}
            {!! Form::text('subject', null, ['placeholder' => 'موضوع بلاگ را وارد کنید']) !!}
            @error('subject')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('body', 'توضیحات بلاگ') !!}
            {!! Form::textarea('body', null, ['placeholder' => 'توضیحات بلاگ را وارد کنید']) !!}
            @error('body')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <h3 class="py-3 text-warning">بخش سئو</h3>

        <div class="form-group my-3">
            {!! Form::label('title', 'عنوان صفحه') !!}
            {!! Form::text('title', null, ['placeholder' => 'عنوان صفحه را وارد کنید']) !!}
            @error('title')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('description', 'درباره صفحه') !!}
            {!! Form::textarea('description', null, ['placeholder' => 'درباره صفحه را وارد کنید']) !!}
            @error('description')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('keywords', 'کلمات کلیدی') !!}
            {!! Form::textarea('keywords', null, ['placeholder' => 'کلمات کلیدی صفحه را وارد کنید']) !!}
            @error('keywords')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
