@extends('front.layouts.master')

@section('content')

<div class="top-header">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-9">
          <div class="row h-100">
            <div class="col-lg-6 col-xl-6">
              <div class="email-address h-100 d-flex align-items-center">
                آدرس ایمیل :
                <span>{{$topHeader->email}}</span>
              </div>
            </div>
            <div class="col-lg-6 col-xl-6 mt-3 mt-md-0">
              <div class="call h-100 d-flex align-items-center">
                شماره تماس :
                <span>{{$topHeader->phone}}</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="top-header-social">
            <div class="row py-1">
              <div class="col-lg-12">
                <ul class="d-flex align-items-center justify-content-end">
                  <li><a href="{{$topHeader->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="{{$topHeader->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="{{$topHeader->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@include('front.partials.header')





  <div class="auth">
      <div class="container py-5 my-5">
          <div class="row justify-content-center">
              <div class="col-md-6">
                  <h3 class="text-center mb-5 fw-bold">ثبت نام کنید</h3>
                  <form action="{{ Route('route.register') }}" method='POST'>

                        @csrf

                      <input type="text" name="name" placeholder="نام ونام خانوادگی" class="form-control mt-3">
                      @error('name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                      <input type="text" name="mobile" placeholder="شماره موبایل" class="form-control mt-3">
                      @error('mobile')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                      <input type="email" name="email" placeholder="ایمیل" class="form-control mt-3">
                      @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                      <input type="password" name="password" placeholder="رمز عبور" class="form-control mt-3">
                      @error('password')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                      <input type="password" name="password_confirmation" placeholder="تکرار رمز عبور" class="form-control mt-3">
                      <button type="submit" class="btn btn-primary w-100 mt-3 text-dark border-0">ثبت نام</button>
                      <a href="#" class="w-100 btn btn-success mt-3 border-0">صفحه ورود</a>
                  </form>
              </div>
          </div>
      </div>
  </div>




@include('front.partials.footer')

@endsection('content')


