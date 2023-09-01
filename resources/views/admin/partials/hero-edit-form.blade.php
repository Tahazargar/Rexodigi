<div class="main-content">
    <div class="main-content-item">
       <h2>ویرایش Hero</h2>
        {!! Form::model($hero ,['route' => ['hero.update', $hero -> id], 'method' => 'PUT', 'files' => true]) !!}

<div class="form-group my-3">
    {!! Form::label('image', 'عکس شما') !!}
    <img width="100" src="{{asset('back/images/hero/' . $hero->image)}}">
    {!! Form::file('image', null, ['placeholder' => 'عکس خود را وارد کنید']) !!}
    @error('image')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('foundation', 'سال تاسیس') !!}
    {!! Form::text('foundation', null, ['placeholder' => 'سال تاسیس را وارد کنید']) !!}
    @error('foundation-year')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('description', 'توضیحات شما') !!}
    {!! Form::text('description', null, ['placeholder' => 'توضیحات بخش Hero  را وارد کنید']) !!}
    @error('description')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('contact', 'لینک تماس با ما') !!}
    {!! Form::text('contact', null, ['placeholder' => 'لینک دکمه تماس با ما را وارد کنید']) !!}
    @error('contact-us')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('faq', 'لینک سوالات متداول') !!}
    {!! Form::text('faq', null, ['placeholder' => 'لینک دکمه تماس با ما را وارد کنید']) !!}
    @error('faq')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group">
    {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
</div>
    </div>
</div>
