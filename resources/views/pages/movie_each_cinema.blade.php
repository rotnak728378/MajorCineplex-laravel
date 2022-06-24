@extends('layouts.default')

@section('content-items')
  <div class="movie-each-cinema">
    <div class="date-selecting">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            Today
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
            18 Jun
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            30 Jun
          </button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
          <div class="movie-date">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="poster col-md-5">
                  <img src="./images/lightyear.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="theatre">THEATRE 1</p>
                    <h4 class="card-title">LIGHTYEAR</h5>
                    <p class="card-text">
                      <span class="iconify" data-icon="ic:round-date-range"></span>
                      25/Mar/2022
                    </p>
                    <p class="card-text">
                      <span class="iconify" data-icon="bxs:time-five"></span>
                      1h 33mins
                    </p>
                    <p class="card-text">
                      <span class="iconify" data-icon="fluent:speaker-0-24-filled"></span>
                      KH/EN
                    </p>
                    <p class="card-text">
                      <span class="iconify" data-icon="ci:tag"></span>
                      Animation / Sci-Fi / Advanture
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="time">
              <button class="available-time">11:00</button>
              <button class="available-time active">17:10</button>
            </div>
          </div>

          <div class="movie-date">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="poster col-md-5">
                  <img src="./images/lightyear.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="theatre">THEATRE 2</p>
                    <h4 class="card-title">LIGHTYEAR</h5>
                    <p class="card-text">
                      <span class="iconify" data-icon="ic:round-date-range"></span>
                      25/Mar/2022
                    </p>
                    <p class="card-text">
                      <span class="iconify" data-icon="bxs:time-five"></span>
                      1h 33mins
                    </p>
                    <p class="card-text">
                      <span class="iconify" data-icon="fluent:speaker-0-24-filled"></span>
                      KH/EN
                    </p>
                    <p class="card-text">
                      <span class="iconify" data-icon="ci:tag"></span>
                      Animation / Sci-Fi / Advanture
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="time">
              <button class="available-time">11:00</button>
              <button class="available-time active">17:10</button>
              <button class="available-time recommend">22:10</button>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
      </div>
    </div>
  </div>
@stop