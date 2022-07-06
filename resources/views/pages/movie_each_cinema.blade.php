@extends('layouts.default')

@section('content-items')
  <div class="movie-each-cinema">
    <div class="date-selecting">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
          @foreach($movies as $movie)
            <div class="movie-date">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="poster col-md-5">
                    <img src="{{$movie->poster}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">{{$movie->movie_title}}</h5>
                      <p class="card-text">
                        <span class="iconify" data-icon="ic:round-date-range"></span>
                        {{ \Carbon\Carbon::parse($movie->release_date)->format('d/M/Y')}}
                      </p>
                      <p class="card-text">
                        <span class="iconify" data-icon="bxs:time-five"></span>
                        {{$movie->duration}} mins
                      </p>
                      <p class="card-text">
                        <span class="iconify" data-icon="ci:tag"></span>
                        {{$movie->genre}}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="time">
                <button class="available-time">
                  <a href="/movie-booking-info/{{$movie->movie_id}}">More Info</a>
                </button>
                <button class="available-time active">
                  <a href="/movie-booking-info/{{$movie->movie_id}}/book-ticket">Book Now</a>
                </button>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@stop