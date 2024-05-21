<section class="counter-section py-5" style="background-image: url('{{ asset('front/images/counter.jpg') }}');">
    <div class="overlay"></div>
    <div class="container-lg py-5">
      <div class="row">
        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="counter-item d-flex align-items-center justify-content-sm-center">
            <div class="counter-text text-center">
              <span class="counter text-primary fs-1 fw-bold">{{ $counter->number_one }}</span>
              <div class="counter-text-name fs-6 text-white">{{ $counter->text_one }}</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="counter-item d-flex align-items-center  justify-content-sm-center">
            <div class="counter-text text-center">
              <span class="counter text-primary fs-1 fw-bold">{{ $counter->number_two }}</span>
              <div class="counter-text-name fs-6 text-white">{{ $counter->text_two }}</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="counter-item d-flex align-items-center  justify-content-sm-center">
            <div class="counter-text text-center">
              <span class="counter text-primary fs-1 fw-bold">{{ $counter->number_three }}</span>
              <div class="counter-text-name fs-6 text-white">{{ $counter->text_three }}</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="counter-item d-flex align-items-center  justify-content-sm-center">
            <div class="counter-text text-center">
              <span class="counter text-primary fs-1 fw-bold">{{ $counter->number_four }}</span>
              <div class="counter-text-name fs-6 text-white">{{ $counter->text_four }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
