<div class="main-content">
    <div class="main-content-item">
        <h2>تنظیمات بخش بالایی هدر</h2>
        {!! Form::model($topHeader, ['route'=>['topHeader.update', $topHeader->id], 'method'=>'PUT']) !!}

        <div class="form-group">
            {!! Form::label('email', 'ایمیل شما') !!}
            {!! Form::text('email', null, ['placeholder' => 'ایمیل خود را وارد کنید']) !!}

            @error('email')
                <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('phone', 'شماره تماس') !!}
            {!! Form::text('phone', null, ['placeholder' => 'شماره تماس خود را وارد کنید']) !!}

            @error('phone')
                <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('instagram', 'اینستاگرام') !!}
            {!! Form::text('instagram', null, ['placeholder' => 'لینک اینستاگرام']) !!}

            @error('instagram')
                <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('facebook', 'فیسبوک') !!}
            {!! Form::text('facebook', null, ['placeholder' => 'لینک فیسبوک']) !!}

            @error('facebook')
                <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('twitter', 'توییتر') !!}
            {!! Form::text('twitter', null, ['placeholder' => 'لینک توییتر']) !!}

            @error('twitter')
                <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
