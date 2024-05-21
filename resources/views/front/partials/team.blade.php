<section class="team py-5">
    <div class="container py-5">
      <div class="team-title">
        <h6 class="fs-6 fw-bold text-center text-primary">{{ $team->pre_title }}</h6>
        <h1 class="text-center fw-bold mt-4">{{ $team->title }}</h1>
      </div>

      <div class="row mt-5">
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('back/images/team/{{ $team->image_two }}');">
              <ul>
                <li><a href="{{ $team->instagram_one }}"><i class="fab fa-instagram"></i></a></li>
                <li><a href="{{ $team->facebook_one }}"><i class="fab fa-facebook"></i></a></li>
                <li><a href="{{ $team->twitter_one }}"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{ $team->linkedin_one }}"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold">{{ $team->name_one }}</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">{{ $team->position_one }}</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('back/images/team/{{ $team->image_three }}');">
            <ul>
                <li><a href="{{ $team->instagram_two }}"><i class="fab fa-instagram"></i></a></li>
                <li><a href="{{ $team->facebook_two }}"><i class="fab fa-facebook"></i></a></li>
                <li><a href="{{ $team->twitter_two }}"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{ $team->linkedin_two }}"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold">{{ $team->name_two }}</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">{{ $team->position_two }}</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('back/images/team/{{ $team->image_one }}');">
            <ul>
                <li><a href="{{ $team->instagram_three }}"><i class="fab fa-instagram"></i></a></li>
                <li><a href="{{ $team->facebook_three }}"><i class="fab fa-facebook"></i></a></li>
                <li><a href="{{ $team->twitter_three }}"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{ $team->linkedin_three }}"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold">{{ $team->name_three }}</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">{{ $team->position_three }}</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('back/images/team/{{ $team->image_four }}');">
            <ul>
                <li><a href="{{ $team->instagram_four }}"><i class="fab fa-instagram"></i></a></li>
                <li><a href="{{ $team->facebook_four }}"><i class="fab fa-facebook"></i></a></li>
                <li><a href="{{ $team->twitter_four }}"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{ $team->linkedin_four }}"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold">{{ $team->name_four }}</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">{{ $team->position_four }}</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
