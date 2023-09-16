<div class="main-content">
    <div class="main-content-item">
       <h2>تنظیمات بخش تیم ما</h2>
        {!! Form::open(['team' => 'team.store', 'method' => 'post', 'files' => true]) !!}

<div class="form-group my-3">
    {!! Form::label('pre_title', 'متن قبل از توضیحات') !!}
    {!! Form::text('pre_title', null, ['placeholder' => 'متن قبل از توضیحات را وارد کنید']) !!}
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

<h3 class="text-warning my-4">باکس اول</h3>

<div class="form-group my-3">
    {!! Form::label('image_one', 'عکس') !!}
    {!! Form::file('image_one', null, ['placeholder' => 'عکس را آپلود کنید']) !!}
    @error('image_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('name_one', 'نام') !!}
    {!! Form::text('name_one', null, ['placeholder' => 'نام را وارد کنید']) !!}
    @error('name_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('position_one', 'جایگاه شغلی') !!}
    {!! Form::text('position_one', null, ['placeholder' => 'جایگاه شغلی را وارد کنید']) !!}
    @error('position_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('instagram_one', 'لینک اینستاگرام') !!}
    {!! Form::text('instagram_one', null, ['placeholder' => 'لینک اینستاگرام را وارد کنید']) !!}
    @error('instagram_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('facebook_one', 'لینک فیس بوک') !!}
    {!! Form::text('facebook_one', null, ['placeholder' => 'لینک فیس بوک را وارد کنید']) !!}
    @error('facebook_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('twitter_one', 'لینک توییتر') !!}
    {!! Form::text('twitter_one', null, ['placeholder' => 'لینک تویتتر را وارد کنید']) !!}
    @error('twitter_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('linkedin_one', 'لینک لینکدین') !!}
    {!! Form::text('linkedin_one', null, ['placeholder' => 'لینک لینکدین را وارد کنید']) !!}
    @error('linkedin_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<h3 class="text-warning my-4">باکس دوم</h3>

<div class="form-group my-3">
    {!! Form::label('image_two', 'عکس') !!}
    {!! Form::file('image_two', null, ['placeholder' => 'عکس را آپلود کنید']) !!}
    @error('image_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('name_two', 'نام') !!}
    {!! Form::text('name_two', null, ['placeholder' => 'نام را وارد کنید']) !!}
    @error('name_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('position_two', 'جایگاه شغلی') !!}
    {!! Form::text('position_two', null, ['placeholder' => 'جایگاه شغلی را وارد کنید']) !!}
    @error('position_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('instagram_two', 'لینک اینستاگرام') !!}
    {!! Form::text('instagram_two', null, ['placeholder' => 'لینک اینستاگرام را وارد کنید']) !!}
    @error('instagram_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('facebook_two', 'لینک فیس بوک') !!}
    {!! Form::text('facebook_two', null, ['placeholder' => 'لینک فیس بوک را وارد کنید']) !!}
    @error('facebook_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('twitter_two', 'لینک توییتر') !!}
    {!! Form::text('twitter_two', null, ['placeholder' => 'لینک تویتتر را وارد کنید']) !!}
    @error('twitter_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('linkedin_two', 'لینک لینکدین') !!}
    {!! Form::text('linkedin_two', null, ['placeholder' => 'لینک لینکدین را وارد کنید']) !!}
    @error('linkedin_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<h3 class="text-warning my-4">باکس سوم</h3>

<div class="form-group my-3">
    {!! Form::label('image_three', 'عکس') !!}
    {!! Form::file('image_three', null, ['placeholder' => 'عکس را آپلود کنید']) !!}
    @error('image_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('name_three', 'نام') !!}
    {!! Form::text('name_three', null, ['placeholder' => 'نام را وارد کنید']) !!}
    @error('name_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('position_three', 'جایگاه شغلی') !!}
    {!! Form::text('position_three', null, ['placeholder' => 'جایگاه شغلی را وارد کنید']) !!}
    @error('position_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('instagram_three', 'لینک اینستاگرام') !!}
    {!! Form::text('instagram_three', null, ['placeholder' => 'لینک اینستاگرام را وارد کنید']) !!}
    @error('instagram_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('facebook_three', 'لینک فیس بوک') !!}
    {!! Form::text('facebook_three', null, ['placeholder' => 'لینک فیس بوک را وارد کنید']) !!}
    @error('facebook_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('twitter_three', 'لینک توییتر') !!}
    {!! Form::text('twitter_three', null, ['placeholder' => 'لینک تویتتر را وارد کنید']) !!}
    @error('twitter_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('linkedin_three', 'لینک لینکدین') !!}
    {!! Form::text('linkedin_three', null, ['placeholder' => 'لینک لینکدین را وارد کنید']) !!}
    @error('linkedin_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<h3 class="text-warning my-4">باکس چهارم</h3>

<div class="form-group my-3">
    {!! Form::label('image_four', 'عکس') !!}
    {!! Form::file('image_four', null, ['placeholder' => 'عکس را آپلود کنید']) !!}
    @error('image_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('name_four', 'نام') !!}
    {!! Form::text('name_four', null, ['placeholder' => 'نام را وارد کنید']) !!}
    @error('name_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('position_four', 'جایگاه شغلی') !!}
    {!! Form::text('position_four', null, ['placeholder' => 'جایگاه شغلی را وارد کنید']) !!}
    @error('position_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('instagram_four', 'لینک اینستاگرام') !!}
    {!! Form::text('instagram_four', null, ['placeholder' => 'لینک اینستاگرام را وارد کنید']) !!}
    @error('instagram_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('facebook_four', 'لینک فیس بوک') !!}
    {!! Form::text('facebook_four', null, ['placeholder' => 'لینک فیس بوک را وارد کنید']) !!}
    @error('facebook_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('twitter_four', 'لینک توییتر') !!}
    {!! Form::text('twitter_four', null, ['placeholder' => 'لینک تویتتر را وارد کنید']) !!}
    @error('twitter_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('linkedin_four', 'لینک لینکدین') !!}
    {!! Form::text('linkedin_four', null, ['placeholder' => 'لینک لینکدین را وارد کنید']) !!}
    @error('linkedin_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>


<div class="form-group">
    {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
</div>
    </div>
</div>
