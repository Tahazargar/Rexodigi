@extends('front.layouts.master')

@section('content')

@include('front.partials.top-header')

@include('front.partials.header')

<div class="auth">
  <div class="container py-5 my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h3 class="text-center mb-5 fw-bold">وارد شوید</h3>
        <form action="{{ Route('route.login') }}" method='POST'>

          @csrf

          <input type="text" name="email" placeholder="ایمیل یا موبایل" class="form-control mt-3">
          @error('email')
              <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
          <input type="password" name="password" placeholder="رمز عبور" class="form-control mt-3">
          @error('password')
              <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
          <label class="mt-3">
            <input type="checkbox" name="remember">
            مرا به خاطر بسپار
          </label>
          <button type="submit" class="btn btn-primary w-100 mt-3 text-dark border-0">ورود</button>
          <a href="{{ route('register') }}" class="w-100 btn btn-success mt-3 border-0">صفحه ثبت نام</a>
        </form>
      </div>
    </div>
  </div>
</div>

@include('front.partials.footer')

@endsection('content')
