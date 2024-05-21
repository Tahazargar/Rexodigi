<div class="main-content">
    <div class="main-content-item">
        <h2>ویرایش پروژه</h2>
        {!! Form::model($project ,['route' => ['project.update', $project -> id], 'method' => 'PUT', 'files' => true]) !!}

        <div class="form-group my-3">
            {!! Form::label('image', 'عکس شما') !!}
            <img width="100" src="{{asset('back/images/project/' . $project->image)}}">
            {!! Form::file('image', null, ['placeholder' => 'عکس خود را وارد کنید']) !!}
            @error('image')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('title', 'عنوان') !!}
            {!! Form::text('title', null, ['placeholder' => $project->title]) !!}
            @error('title')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('description', 'توضیحات') !!}
            {!! Form::textarea('description', null, ['placeholder' => $project->description]) !!}
            @error('description')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
