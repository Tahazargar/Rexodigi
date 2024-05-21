<section class="service py-5">
    <div class="container-lg py-5">
      <div class="service-title">
        <h6 class="fs-6 fw-bold text-center text-primary">{{ $service->pre_title }}</h6>
        <h1 class="text-center fw-bold mt-4">{{ $service->title }}</h1>
      </div>
      <div class="row py-5">
        <div class="col-md-6">
          <div class="service-item bg-dark d-flex px-4 py-5 shadow-sm">
            <div class="service-item-img">
              <img src="{{ asset('front/images/service/reverse-engineering.png') }}" height="80" width="80" alt="">
            </div>
            <div class="service-item-text pe-4">
              <h2 class="text-white fs-3 mb-3">{{ $service->box_one_title }}</h2>
              <p class="text-white fs-6 mb-3">{{ $service->box_one_description }}</p>
              <a href="{{ $service->box_one_button_link }}" class="btn btn-light text-primary fs-6 fw-bold">{{ $service->box_one_button_text }}</a>
            </div>
          </div>
          <div class="service-item bg-primary d-flex px-4 py-5 shadow-sm mt-4">
            <div class="service-item-img">
              <img src="{{ asset('front/images/service/modern-house (1).png') }}" height="80" width="80" alt="">
            </div>
            <div class="service-item-text pe-4">
              <h2 class="text-white fs-3 mb-3">{{ $service->box_two_title }}</h2>
              <p class="text-white fs-6 mb-3">{{ $service->box_two_description }}</p>
              <a href="{{ $service->box_two_button_link }}" class="btn btn-light text-primary fs-6 fw-bold">{{ $service->box_two_button_text }}</a>
            </div>
          </div>
          <div class="service-item tz-custom-color d-flex px-4 py-5 shadow-sm mt-4">
            <div class="service-item-img">
              <img src="{{ asset('front/images/service/reverse-engineering.png') }}" height="80" width="80" alt="">
            </div>
            <div class="service-item-text pe-4">
              <h2 class="text-white fs-3 mb-3">{{ $service->box_three_title }}</h2>
              <p class="text-white fs-6 mb-3">{{ $service->box_three_description }}</p>
              <a href="{{ $service->box_three_button_link }}" class="btn bg-light text-primary fs-6 fw-bold">{{ $service->box_three_button_text }}</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex mt-4 mt-md-0">
          <div class="service-img w-100" style="background-image: url('back/images/service/{{ $service->image }}');"></div>
        </div>
      </div>
    </div>
  </section>
