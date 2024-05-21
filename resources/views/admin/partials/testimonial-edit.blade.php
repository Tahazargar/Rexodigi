<div class="main-content">
    <div class="main-content-item">
        <h2>ویرایش نظر مشتری</h2>
        {!! Form::model($testimonial ,['route' => ['testimonial.update', $testimonial -> id], 'method' => 'PUT', 'files' => true]) !!}

        <div class="form-group my-3">
            {!! Form::label('image', 'تصویر پروژه') !!}
            {!! Form::file('image', null, ['placeholder' => 'عکس پروژه را آپلود کنید']) !!}
            @error('image')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('customer_name', 'نام مشتری') !!}
            {!! Form::text('customer_name', null, ['placeholder' => 'نام مشتری را وارد کنید']) !!}
            @error('customer_name')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('customer_position', 'سمت مشتری') !!}
            {!! Form::text('customer_position', null, ['placeholder' => 'سمت مشتری را وارد کنید']) !!}
            @error('customer_position')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('description', 'متن توضیحات') !!}
            {!! Form::text('description', null, ['placeholder' => 'متن توضیحات خود را وارد کنید']) !!}
            @error('description')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
