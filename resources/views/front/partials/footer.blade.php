<footer class="footer pt-5">
    <div class="container-lg pt-5">
      <div class="row">
        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
          <div class="footer-about">
            <h5 class="fw-bold text-white">{{ $footer->title }}</h5>
            <p class="mt-5 text-white">{{ $footer->description }}</p>
            <ul class="d-flex mt-4">
              <li><a href="{{ $footer->instagram_link }}"><i class="fab fa-instagram"></i></a></li>
              <li><a href="{{ $footer->facebook_link }}"><i class="fab fa-facebook"></i></a></li>
              <li><a href="{{ $footer->twitter_link }}"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
          <div class="footer-service">
            <h5 class="fs-5 text-white mb-5">خدمات</h5>
            @foreach($footerServices as $footerservice)
                  <div class="footer-service-item d-flex mt-3">
                      <div class="footer-service-img">
                          <img src="{{ asset('back/images/footer-service/' . $footerservice->image) }}"  alt="{{ $footerservice->alt }}">
                      </div>
                      <div class="footer-service-text pe-3">
                          <h5><a href="{{ $footerservice->link }}" class="text-white fs-6">{{ $footerservice->title }}</a></h5>
                          <div class="footer-service-author text-primary mt-4">
                              <span><i class="fas fa-user"></i>{{ $footerservice->author }}</span>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>

        </div>
        <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
          <div class="footer-quick-link">
            <h5 class="fs-5 text-white mb-5">دسترسی سریع</h5>
            <ul>
              <li><a href="{{ $footerQuick->first_link }}"><i class="fas fa-chevron-left"></i>{{ $footerQuick->first_text }}</a></li>
              <li><a href="{{ $footerQuick->second_link }}"> <i class="fas fa-chevron-left"></i>{{ $footerQuick->second_text }}</a></li>
              <li><a href="{{ $footerQuick->third_link }}"> <i class="fas fa-chevron-left"></i>{{ $footerQuick->third_text }}</a></li>
              <li><a href="{{ $footerQuick->forth_link }}"> <i class="fas fa-chevron-left"></i>{{ $footerQuick->forth_text }}</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
          <div class="footer-question">
            <h5 class="fs-5 text-white mb-5">سوالی دارید؟</h5>
            <ul>
              <li class="d-flex mt-3"><i class="fas fa-map text-primary"></i> <h5 class="text-white fs-6 pe-2">{{ $footerAnyQuestion->address }}</h5></li>
              <li class="d-flex mt-3"><i class="fas fa-phone text-primary"></i><h5 class="text-white fs-6 pe-2">{{ $footerAnyQuestion->phone }}</h5></li>
              <li class="d-flex mt-3"><i class="fas fa-envelope text-primary"></i><h5 class="text-white fs-6 pe-2">{{ $footerAnyQuestion->email }}</h5></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copy-right">
      <p>&copy; تمامی حقوق مادی و معنوی این وب سایت متعلق به رکسودیجی میباشد.</p>
    </div>
  </footer>
