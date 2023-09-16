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




<footer class="footer pt-5">
  <div class="container-lg pt-5">
    <div class="row">
      <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
        <div class="footer-about">
          <h5 class="fw-bold text-white">شرکت ساختمانی تاپ لرن</h5>
          <p class="mt-5 text-white">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک استلورم ایپسوم متن ساختگی با تولید</p>
          <ul class="d-flex">
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
            <li><a href=""><i class="fab fa-facebook"></i></a></li>
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
        <div class="footer-service">
          <h5 class="fs-5 text-white mb-5">خدمات</h5>
          <div class="footer-service-item d-flex mt-3">
            <div class="footer-service-img">
              <img src="images/service/service-item/1.webp" alt="">
            </div>
            <div class="footer-service-text pe-3">
              <h5><a href="" class="text-white fs-6">این خیلی فوق العاده است و زیباست</a></h5>
              <div class="footer-service-author text-primary mt-4">
                <span><i class="fas fa-user"></i>مدیر</span>
                <span><i class="fas fa-comment"></i>5 نظر</span>
              </div>
            </div>
          </div>
          <div class="footer-service-item d-flex mt-3">
            <div class="footer-service-img">
              <img src="images/service/service-item/2.webp" alt="">
            </div>
            <div class="footer-service-text pe-3">
              <h5><a href="" class="text-white fs-6">این خیلی فوق العاده است و زیباست</a></h5>
              <div class="footer-service-author text-primary mt-4">
                <span><i class="fas fa-user"></i>مدیر</span>
                <span><i class="fas fa-comment"></i>5 نظر</span>
              </div>
            </div>
          </div>
          <div class="footer-service-item d-flex mt-3">
            <div class="footer-service-img">
              <img src="images/service/service-item/3.webp" alt="">
            </div>
            <div class="footer-service-text pe-3">
              <h5><a href="" class="text-white fs-6">این خیلی فوق العاده است و زیباست</a></h5>
              <div class="footer-service-author text-primary mt-4">
                <span><i class="fas fa-user"></i>مدیر</span>
                <span><i class="fas fa-comment"></i>5 نظر</span>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
        <div class="footer-quick-link">
          <h5 class="fs-5 text-white mb-5">دسترسی سریع</h5>
          <ul>
            <li><a href=""><i class="fas fa-chevron-left"></i>صفحه نخست </a></li>
            <li><a href=""> <i class="fas fa-chevron-left"></i>درباره ما</a></li>
            <li><a href=""> <i class="fas fa-chevron-left"></i>تماس با ما</a></li>
            <li><a href=""> <i class="fas fa-chevron-left"></i>خدمات</a></li>
            <li><a href=""> <i class="fas fa-chevron-left"></i>پروژه ها</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
        <div class="footer-question">
          <h5 class="fs-5 text-white mb-5">سوالی دارید؟</h5>
          <ul>
            <li class="d-flex mt-3"><i class="fas fa-map text-primary"></i>
              <h5 class="text-white fs-6 pe-2">واشنگتن سمت راست طبقه چهارم</h5>
            </li>
            <li class="d-flex mt-3"><i class="fas fa-phone text-primary"></i>
              <h5 class="text-white fs-6 pe-2">12323123123</h5>
            </li>
            <li class="d-flex mt-3"><i class="fas fa-envelope text-primary"></i>
              <h5 class="text-white fs-6 pe-2">Example@gmail.com</h5>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="copy-right">
    <p>&copy; تمامی حقوق مادی و معنوی این وب سایت متعلق به تیم تاپ لرن میباشد.</p>
  </div>
</footer>

@endsection('content')
