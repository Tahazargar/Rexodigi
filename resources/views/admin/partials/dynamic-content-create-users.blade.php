<div class="main-content">
    <div class="main-content-item">
        <h2>ساخت کاربر جدید</h2>
        {!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}

        <div class="form-group my-3">
            {!! Form::label('name', 'نام کاربر') !!}
            {!! Form::text('name', null,['placeholder' => 'نام کاربر را وارد کنید']) !!}
            @error('name')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('mobile', 'موبایل') !!}
            {!! Form::number('mobile', null,['placeholder' => 'موبایل کاربر را وارد کنید']) !!}
            @error('mobile')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('email', 'پست الکترونیکی کاربر') !!}
            {!! Form::email('email', null,['placeholder' => 'پست الکترونیکی کاربر را وارد کنید']) !!}
            @error('email')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group my-3">
            {!! Form::label('password', 'رمز عبور کاربر') !!}
            {!! Form::password('password', null,['placeholder' => 'رمز عبور کاربر را وارد کنید']) !!}
            @error('password')
            <p class="text-danger my-2">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="role">سطح دسترسی</label>
            <select name="role" id="role">
                <option value="admin">مدیر</option>
                <option value="user" selected>کاربر</option>
                <option value="author">نویسنده</option>
            </select>
        </div>

        <div class="form-group">
            {!! Form::submit('ایجاد کاربر', ['class' => 'btn btn-primary mt-3 w-25']) !!}
        </div>
    </div>
</div>
