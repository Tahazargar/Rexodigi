<div class="main-content">
    <div class="main-content-item">
        <h2>ویرایش بخش سوالات متداول</h2>
        {!! Form::model($faq ,['route' => ['faq.update', $faq -> id], 'method' => 'PUT']) !!}

        <div class="form-group my-3">
            {!! Form::label('title', 'عنوان') !!}
            {!! Form::text('title', null, ['placeholder' => 'عنوان را وارد کنید']) !!}
            @error('title')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('description', 'توضیحات') !!}
            {!! Form::textarea('description', null, ['placeholder' => 'توضیحات را وارد کنید']) !!}
            @error('description')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <h2 class="text-warning mt-5">سوال اول</h2>

        <div class="form-group my-3">
            {!! Form::label('faq_one', 'سوال') !!}
            {!! Form::text('faq_one', null, ['placeholder' => 'سوال را وارد کنید']) !!}
            @error('faq_one')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('faq_one_description', 'جواب') !!}
            {!! Form::textarea('faq_one_description', null, ['placeholder' => 'جواب وارد کنید']) !!}
            @error('faq_one_description')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <h2 class="text-warning mt-5">سوال دوم</h2>

        <div class="form-group my-3">
            {!! Form::label('faq_two', 'سوال') !!}
            {!! Form::text('faq_two', null, ['placeholder' => 'سوال را وارد کنید']) !!}
            @error('faq_two')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('faq_two_description', 'جواب') !!}
            {!! Form::textarea('faq_two_description', null, ['placeholder' => 'جواب وارد کنید']) !!}
            @error('faq_two_description')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <h2 class="text-warning mt-5">سوال سوم</h2>

        <div class="form-group my-3">
            {!! Form::label('faq_three', 'سوال') !!}
            {!! Form::text('faq_three', null, ['placeholder' => 'سوال را وارد کنید']) !!}
            @error('faq_three')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('faq_three_description', 'جواب') !!}
            {!! Form::textarea('faq_three_description', null, ['placeholder' => 'جواب وارد کنید']) !!}
            @error('faq_three_description')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
