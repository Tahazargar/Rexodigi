<div class="main-content">
    <div class="main-content-item">
       <h2 class="text-white">تنظیمات بخش درباره ما</h2>
        {!! Form::open(['route' => 'counter.store', 'method' => 'post', 'files' => true]) !!}

<!-- Box One -->

<div class="form-group my-3">
    {!! Form::label('text_one', 'متن اول') !!}
    {!! Form::text('text_one', null, ['placeholder' => 'متن خود را وارد کنید']) !!}
    @error('text_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('number_one', 'عدد اول') !!}
    {!! Form::text('number_one', null, ['placeholder' => 'متن خود را وارد کنید']) !!}
    @error('number_one')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<!-- Box Two -->

<div class="form-group my-3">
    {!! Form::label('text_two', 'متن دوم') !!}
    {!! Form::text('text_two', null, ['placeholder' => 'متن خود را وارد کنید']) !!}
    @error('text_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('number_two', 'عدد دوم') !!}
    {!! Form::text('number_two', null, ['placeholder' => 'متن خود را وارد کنید']) !!}
    @error('number_two')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<!-- Box Three -->

<div class="form-group my-3">
    {!! Form::label('text_three', 'متن سوم') !!}
    {!! Form::text('text_three', null, ['placeholder' => 'متن خود را وارد کنید']) !!}
    @error('text_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('number_three', 'عدد سوم') !!}
    {!! Form::text('number_three', null, ['placeholder' => 'متن خود را وارد کنید']) !!}
    @error('number_three')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<!-- Box Four -->

<div class="form-group my-3">
    {!! Form::label('text_four', 'متن چهارم') !!}
    {!! Form::text('text_four', null, ['placeholder' => 'متن خود را وارد کنید']) !!}
    @error('text_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group my-3">
    {!! Form::label('number_four', 'عدد چهارم') !!}
    {!! Form::text('number_four', null, ['placeholder' => 'متن خود را وارد کنید']) !!}
    @error('number_four')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
</div>

<div class="form-group">
    {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
</div>
    </div>
</div>
