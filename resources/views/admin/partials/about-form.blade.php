<div class="main-content">
    <div class="main-content-item">
       <h2 class="text-white">تنظیمات بخش درباره ما</h2>
        {!! Form::open(['route' => 'about.store', 'method' => 'post', 'files' => true]) !!}

<div class="form-group my-3">
    {!! Form::label('pre_title', 'متن پیش از عنوان') !!}
    {!! Form::text('pre_title', null, ['placeholder' => 'متن خود را وارد کنید']) !!}
    @error('pre_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('title', 'متن عنوان') !!}
    {!! Form::text('title', null, ['placeholder' => 'متن خود را وارد کنید']) !!}
    @error('title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('description', 'درباره شرکت') !!}
    {!! Form::textarea('description', null, ['placeholder' => 'توضیحات خود را وارد کنید']) !!}
    @error('description')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<h3 class="text-white tz-service-title my-5">تنظیمات بخش خدمات</h3>

<div class="form-group my-3">
    {!! Form::label('service_title', 'عنوان بخش خدمات') !!}
    {!! Form::text('service_title', null, ['placeholder' => 'عنوان بخش خدمات را وارد کنید']) !!}
    @error('service_title')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('service_title_item_one', 'عنوان بخش خدمات باکس اول') !!}
    {!! Form::text('service_title_item_one', null, ['placeholder' => 'عنوان بخش خدمات باکس اول را وارد کنید']) !!}
    @error('service_title_item_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('service_description_item_one', 'توضیحات بخش خدمات باکس اول') !!}
    {!! Form::text('service_description_item_one', null, ['placeholder' => 'توضیحات بخش خدمات باکس اول را وارد کنید']) !!}
    @error('service_description_item_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('service_title_item_two', 'عنوان بخش خدمات باکس دوم') !!}
    {!! Form::text('service_title_item_two', null, ['placeholder' => 'عنوان بخش خدمات باکس دوم را وارد کنید']) !!}
    @error('service_title_item_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('service_description_item_two', 'توضیحات بخش خدمات باکس دوم') !!}
    {!! Form::text('service_description_item_two', null, ['placeholder' => 'توضیحات بخش خدمات باکس سوم را وارد کنید']) !!}
    @error('service_description_item_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('service_title_item_three', 'عنوان بخش خدمات باکس سوم') !!}
    {!! Form::text('service_title_item_three', null, ['placeholder' => 'عنوان بخش خدمات باکس سوم را وارد کنید']) !!}
    @error('service_description_item_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('service_description_item_three', 'توضیحات بخش خدمات باکس سوم') !!}
    {!! Form::text('service_description_item_three', null, ['placeholder' => 'توضیحات بخش خدمات باکس سوم را وارد کنید']) !!}
    @error('service_description_item_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('service_title_item_four', 'عنوان بخش خدمات باکس چهارم') !!}
    {!! Form::text('service_title_item_four', null, ['placeholder' => 'عنوان بخش خدمات باکس چهارم را وارد کنید']) !!}
    @error('service_title_item_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('service_description_item_four', 'توضیحات بخش خدمات باکس چهارم') !!}
    {!! Form::text('service_description_item_four', null, ['placeholder' => 'توضیحات بخش خدمات باکس چهارم را وارد کنید']) !!}
    @error('service_description_item_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('experience_number', 'تعداد سال های تجربه') !!}
    {!! Form::text('experience_number', null, ['placeholder' => 'تعداد سال های تجربه را وارد کنید']) !!}
    @error('experience_number')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('experience_text', 'متن تعداد سال های تجربه') !!}
    {!! Form::text('experience_text', null, ['placeholder' => ' متن تعداد سال های تجربه را وارد کنید']) !!}
    @error('experience_text')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('image', 'عکس بخش درباره ما را وارد کنید') !!}
    {!! Form::file('image', null, ['placeholder' => 'عکس بخش درباره ما را وارد کنید']) !!}
    @error('image')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('alt', 'توضیحات متای عکس بخش درباره ما') !!}
    {!! Form::text('alt', null, ['placeholder' => 'توضیحات بخش درباره ما را وارد کنید']) !!}
    @error('alt')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group">
    {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
</div>
    </div>
</div>
