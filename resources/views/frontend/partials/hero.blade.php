@php
    $hero = App\Models\Hero::find(1);
@endphp


<section class="hero-section d-flex align-items-center" id="intro">
    <div class="intro_text">
      <svg viewBox="0 0 1320 300">
          <text x="50%" Y="50%" text-anchor="middle">HI</text>
      </svg>
    </div>
    <div class="container">
      <div class="row align-items-center">
          <div class="col-md-6">
            <div class="hero-content-box">
                <span class="hero-sub-title">{{ $hero->name }}</span>
                <h1 class="hero-title">{{ $hero->profession }}</h1>

                <p class="lead">
                  {{ $hero->short_desc }}
                </p>
                <div class="button-box d-flex flex-wrap align-items-center">
                  <a href="#" class="btn tj-btn-secondary">Download CV <i class="flaticon-download"></i></a>
                  <ul class="ul-reset social-icons">
                      <li>
                        <a href="{{ $hero->twitter_url }}"><i class="fa-brands fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="{{ $hero->youtube_url }}"><i class="fa-light fa-basketball"></i></a>
                      </li>
                      <li>
                        <a href="{{ $hero->linkdin_url }}"><i class="fa-brands fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="{{ $hero->github_url }}"><i class="fa-brands fa-github"></i></a>
                      </li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-md-6 d-none d-md-block">
            <div class="hero-image-box text-center">
                <img src="{{ ($hero->photo) ? asset($hero->photo) : asset('uploads/no-img-avatar.png') }}" alt="" />
            </div>
          </div>
      </div>
      <div class="funfact-area">
          <div class="row">
            <div class="col-6 col-lg-3">
                <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="{{ $hero->YOE }}">{{ $hero->YOE }}</span></div>
                  <div class="text">Years of <br />Experience</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="{{ $hero->PC }}">{{ $hero->PC }}</span>+</div>
                  <div class="text">Project <br />Completed</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="{{ $hero->HC }}">{{ $hero->HC }}</span>K</div>
                  <div class="text">Happy <br />Clients</div>
                </div>
            </div>
          </div>
      </div>
    </div>
</section>