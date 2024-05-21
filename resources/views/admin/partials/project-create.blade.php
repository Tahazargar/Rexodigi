<div class="main-content">
    <div class="main-content-item">
        <h2>تنظیمات بخش پروژه ها</h2>
        {!! Form::open(['route' => 'project.store', 'method' => 'post', 'files' => true]) !!}

        <div class="form-group my-3">
            {!! Form::label('image', 'عکس پروژه') !!}
            {!! Form::file('image', null, ['placeholder' => 'عکس پروژه را آپلود کنید']) !!}
            @error('image')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('title', 'عنوان پروژه') !!}
            {!! Form::text('title', null, ['placeholder' => 'عنوان پروژه را وارد کنید']) !!}
            @error('title')
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
