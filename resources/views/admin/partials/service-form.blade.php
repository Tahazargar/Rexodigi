<div class="main-content">
    <div class="main-content-item">
       <h2>تنظیمات بخش Service</h2>
        {!! Form::open(['route' => 'service.store', 'method' => 'post', 'files' => true]) !!}

 <div class="form-group my-3">
    {!! Form::label('image', 'عکس خدمات') !!}
    {!! Form::file('image', null, ['placeholder' => 'عکس خدمات']) !!}
    @error('image')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('pre_title', 'قبل تیتر') !!}
    {!! Form::text('pre_title', null, ['placeholder' => 'متن قبل از تیتر را وارد کنید']) !!}
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
    {!! Form::label('box_one_title', 'تیتر باکس اول') !!}
    {!! Form::text('box_one_title', null, ['placeholder' => 'متن تیتر باکس اول را وارد کنید']) !!}
    @error('box_one_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_one_description', 'متن باکس اول') !!}
    {!! Form::text('box_one_description', null, ['placeholder' => 'متن باکس اول را وارد کنید']) !!}
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

<div class="form-group my-3">
    {!! Form::label('box_two_title', 'تیتر باکس دوم') !!}
    {!! Form::text('box_two_title', null, ['placeholder' => 'متن تیتر باکس دوم را وارد کنید']) !!}
    @error('box_two_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_two_description', 'متن باکس دوم') !!}
    {!! Form::text('box_two_description', null, ['placeholder' => 'متن باکس دوم را وارد کنید']) !!}
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
    {!! Form::text('box_one_button_link', null, ['placeholder' => 'لینک دکمه باکس دوم را وارد کنید']) !!}
    @error('box_two_button_link')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_three_title', 'تیتر باکس سوم') !!}
    {!! Form::text('box_three_title', null, ['placeholder' => 'متن تیتر باکس سوم را وارد کنید']) !!}
    @error('box_three_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_three_description', 'متن باکس سوم') !!}
    {!! Form::text('box_three_description', null, ['placeholder' => 'متن باکس سوم را وارد کنید']) !!}
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


<div class="form-group my-3">
    {!! Form::label('box_four_title', 'تیتر باکس چهارم') !!}
    {!! Form::text('box_four_title', null, ['placeholder' => 'متن تیتر باکس چهارم را وارد کنید']) !!}
    @error('box_four_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_four_description', 'متن باکس چهارم') !!}
    {!! Form::text('box_four_description', null, ['placeholder' => 'متن باکس چهارم را وارد کنید']) !!}
    @error('box_four_description')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_four_button_text', 'متن دکمه باکس چهارم') !!}
    {!! Form::text('box_four_button_text', null, ['placeholder' => 'متن دکمه باکس چهارم را وارد کنید']) !!}
    @error('box_four_button_text')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('box_four_button_link', 'لینک دکمه باکس چهارم') !!}
    {!! Form::text('box_four_button_link', null, ['placeholder' => 'لینک دکمه باکس چهارم را وارد کنید']) !!}
    @error('box_four_button_link')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group">
    {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
</div>
    </div>
</div>
