<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-white">تنظیمات بخش شمارنده</h2>
        {!! Form::model($counter,['route' => ['counter.update', $counter], 'method' => 'put', 'files' => true]) !!}

        <!-- Box One -->

        <div class="form-group my-3">
            {!! Form::label('text_one', 'متن اول را وارد کنید') !!}
            {!! Form::text('text_one', null, ['placeholder' => 'متن اول را وارد کنید']) !!}
            <p>
            @error('text_one')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group my-3">
            {!! Form::label('number_one', 'عدد اول را وارد کنید') !!}
            {!! Form::text('number_one', null, ['placeholder' => 'عدد اول را وارد کنید']) !!}
            <p>
            @error('number_one')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <!-- Box Two -->

        <div class="form-group my-3">
            {!! Form::label('text_two', 'متن دوم را وارد کنید') !!}
            {!! Form::text('text_two', null, ['placeholder' => 'متن دوم را وارد کنید']) !!}
            <p>
            @error('text_two')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group my-3">
            {!! Form::label('number_two', 'عدد دوم را وارد کنید') !!}
            {!! Form::text('number_two', null, ['placeholder' => 'عدد دوم را وارد کنید']) !!}
            <p>
            @error('number_two')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <!-- Box Three -->

        <div class="form-group my-3">
            {!! Form::label('text_three', 'متن سوم را وارد کنید') !!}
            {!! Form::text('text_three', null, ['placeholder' => 'متن سوم را وارد کنید']) !!}
            <p>
            @error('text_three')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group my-3">
            {!! Form::label('number_three', 'عدد سوم را وارد کنید') !!}
            {!! Form::text('number_three', null, ['placeholder' => 'عدد سوم را وارد کنید']) !!}
            <p>
            @error('number_three')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <!-- Box Four -->

        <div class="form-group my-3">
            {!! Form::label('text_four', 'متن چهارم را وارد کنید') !!}
            {!! Form::text('text_four', null, ['placeholder' => 'متن چهارم را وارد کنید']) !!}
            <p>
            @error('text_four')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group my-3">
            {!! Form::label('number_four', 'عدد چهارم را وارد کنید') !!}
            {!! Form::text('number_four', null, ['placeholder' => 'عدد چهارم را وارد کنید']) !!}
            <p>
            @error('number_four')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
