<div class="main-content">
    <div class="main-content-item">
        <h2>تنظیمات فوتر | بخش درباره ما</h2>
        {!! Form::open(['route' => 'footer.about.store', 'method' => 'post']) !!}

        <div class="form-group my-3">
            {!! Form::label('title', 'عنوان') !!}
            {!! Form::text('title', null, ['placeholder' => 'عنوان را وارد کنید']) !!}
            @error('title')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('description', 'توضیحات') !!}
            {!! Form::text('description', null, ['placeholder' => 'توضیحات را وارد کنید']) !!}
            @error('description')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('instagram_link', 'لینک اینستاگرام') !!}
            {!! Form::text('instagram_link', null, ['placeholder' => 'لینک را وارد کنید']) !!}
            @error('instagram_link')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('facebook_link', 'لینک فیس بوک') !!}
            {!! Form::text('facebook_link', null, ['placeholder' => 'لینک را وارد کنید']) !!}
            @error('facebook_link')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('twitter_link', 'لینک توییتر') !!}
            {!! Form::text('twitter_link', null, ['placeholder' => 'لینک را وارد کنید']) !!}
            @error('twitter_link')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
