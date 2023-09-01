<div class="main-content">
    <div class="main-content-item">
        <div class="old-project">
            <h2>ویرایش کاربر</h2>
            <form action="{{ route('users.update', $users -> id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group mb-3">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text" name="name" placeholder="نام و نام خانوادگی" value="{{ $users -> name }}">
                    @error('name')
                    <p class="text-danger my-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="mobile">موبایل</label>
                    <input type="mobile" name="mobile" placeholder="موبایل" value="{{ $users -> mobile }}">
                    @error('mobile')
                    <p class="text-danger my-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">ایمیل</label>
                    <input type="email" name="email" placeholder="ایمیل" value="{{ $users -> email }}">
                    @error('email')
                    <p class="text-danger my-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="role">سطح دسترسی</label>
                    <select name="role" id="role">
                        <option value="admin" @if($users -> role === 'admin') selected @endif>مدیر</option>
                        <option value="user" @if($users -> role === 'user') selected @endif>کاربر</option>
                        <option value="author" @if($users -> role === 'author') selected @endif>نویسنده</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="edit-user-submit" value="submit">تایید</button>
                </div>
            </form>
        </div>
    </div>
</div>
