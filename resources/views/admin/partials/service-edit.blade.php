<div class="main-content">
    <div class="main-content-item">
       <h2>ویرایش خدمات</h2>
        {!! Form::model($service ,['route' => ['service.update', $service -> id], 'method' => 'PUT', 'files' => true]) !!}

<div class="form-group my-3">
    {!! Form::label('image', 'عکس را آپلود کنید') !!}
    {!! Form::file('image', null, ['placeholder' => 'متن قبل از توضیحات را وارد کنید']) !!}
    @error('image')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('pre_title', 'متن قبل از توضیحات') !!}
    {!! Form::text('pre_title', null) !!}
    @error('pre_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('title', 'تیتر') !!}
    {!! Form::text('title', null, ['placeholder' => 'تیتر را وارد کنید']) !!}
    @error('title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<!-- Box One -->

<div class="form-group my-3">
    {!! Form::label('box_one_title', 'تیتر باکس اول') !!}
    {!! Form::text('box_one_title', null, ['placeholder' => 'تیتر باکس اول را وارد کنید']) !!}
    @error('box_one_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_one_description', 'توضیحات باکس اول') !!}
    {!! Form::text('box_one_description', null, ['placeholder' => 'توضیحات باکس اول را وارد کنید']) !!}
    @error('box_one_description')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_one_button_text', 'متن دکمه باکس اول') !!}
    {!! Form::text('box_one_button_text', null, ['placeholder' => 'متن دکمه باکس اول را وارد کنید']) !!}
    @error('box_one_button_text')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_one_button_link', 'لینک دکمه باکس اول') !!}
    {!! Form::text('box_one_button_link', null, ['placeholder' => 'لینک دکمه باکس اول را وارد کنید']) !!}
    @error('box_one_button_link')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<!-- Box Two -->

<div class="form-group my-3">
    {!! Form::label('box_two_title', 'تیتر باکس دوم') !!}
    {!! Form::text('box_two_title', null, ['placeholder' => 'تیتر باکس دوم را وارد کنید']) !!}
    @error('box_two_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_two_description', 'توضیحات باکس دوم') !!}
    {!! Form::text('box_two_description', null, ['placeholder' => 'توضیحات باکس دوم را وارد کنید']) !!}
    @error('box_two_description')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_two_button_text', 'متن دکمه باکس دوم') !!}
    {!! Form::text('box_two_button_text', null, ['placeholder' => 'متن دکمه باکس دوم را وارد کنید']) !!}
    @error('box_two_button_text')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_two_button_link', 'لینک دکمه باکس دوم') !!}
    {!! Form::text('box_two_button_link', null, ['placeholder' => 'لینک دکمه باکس دوم را وارد کنید']) !!}
    @error('box_two_button_link')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<!-- Box Three -->

<div class="form-group my-3">
    {!! Form::label('box_three_title', 'تیتر باکس سوم') !!}
    {!! Form::text('box_three_title', null, ['placeholder' => 'تیتر باکس سوم را وارد کنید']) !!}
    @error('box_three_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_three_description', 'توضیحات باکس سوم') !!}
    {!! Form::text('box_three_description', null, ['placeholder' => 'توضیحات باکس سوم را وارد کنید']) !!}
    @error('box_three_description')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_three_button_text', 'متن دکمه باکس سوم') !!}
    {!! Form::text('box_three_button_text', null, ['placeholder' => 'متن دکمه باکس سوم را وارد کنید']) !!}
    @error('box_three_button_text')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_three_button_link', 'لینک دکمه باکس سوم') !!}
    {!! Form::text('box_three_button_link', null, ['placeholder' => 'لینک دکمه باکس سوم را وارد کنید']) !!}
    @error('box_three_button_link')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group">
    {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
</div>
    </div>
</div>
