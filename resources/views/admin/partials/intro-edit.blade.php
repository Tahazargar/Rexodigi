<div class="main-content">
    <div class="main-content-item">
       <h2>ویرایش intro</h2>
        {!! Form::model($intro ,['route' => ['intro.update', $intro -> id], 'method' => 'PUT', 'files' => true]) !!}

        <div class="form-group my-3">
    {!! Form::label('pre_title', 'متن قبل از توضیحات') !!}
    {!! Form::text('pre_title', null, ['placeholder' => 'متن قبل از توضیحات را وارد کنید']) !!}
    @error('pre_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('title', 'تیتر') !!}
    {!! Form::text('title', null, ['placeholder' => 'متن تیتر را وارد کنید']) !!}
    @error('title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('button_text', 'متن دکمه') !!}
    {!! Form::text('button_text', null, ['placeholder' => 'متن دکمه را وارد کنید']) !!}
    @error('button_text')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('button_link', 'لینک دکمه') !!}
    {!! Form::text('button_link', null, ['placeholder' => 'لینک دکمه را وارد کنید']) !!}
    @error('button_link')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('alt', 'متن جایگزین تصویر') !!}
    {!! Form::text('alt', null, ['placeholder' => 'متن جایگزین تصویر را وارد کنید']) !!}
    @error('alt')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('image', 'عکس پس زمینه') !!}
    {!! Form::file('image', null, ['placeholder' => 'عکس مورد نظر را وارد کنید']) !!}
    @error('button_text')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group">
    {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
</div>
    </div>
</div>
