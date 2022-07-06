<div class="filter-bar" {{request()->path() == '/' ? null : 'hidden'}}>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            <span class="iconify" data-icon="bxs:movie-play"></span>
            Now Showing
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
            <span class="iconify" data-icon="medical-icon:i-waiting-area"></span>
            Coming Soon
        </button>
      </li>
    </ul>
</div>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <div class="movie-contents">
            <div class="row-movie">     
                @if(count($movies))
                    @foreach($movies as $movie)
                        <div class="col">
                            <div class="movie-item">
                                <div class="thumbnail">
                                    <img src="{{asset($movie->poster)}}" alt="Poster" />
                                </div>
                                <div class="thumb-info">
                                    <article>
                                        <h6>{{$movie->movie_title}}</h6>
                                        <p>
                                            <span class="iconify" data-icon="ic:round-date-range"></span>
                                            {{ \Carbon\Carbon::parse($movie->release_date)->format('d/M/Y')}}
                                        </p>
                                        <p>
                                            <span class="iconify" data-icon="bxs:time-five"></span>
                                            {{$movie->duration}} mins
                                        </p>
                                        <p>
                                            <span class="iconify" data-icon="ci:tag"></span>
                                            {{$movie->genre}}
                                        </p>
                                    </article>
                                    <article>
                                        <p>
                                            <a href="/movie-booking-info/{{$movie->movie_id}}" class="booking-btn">
                                                More Info
                                            </a>
                                        </p>
                                        <p>
                                            <a href="/movie-booking-info/{{$movie->movie_id}}/book-ticket" class="booking-btn">
                                                Book Now
                                            </a>
                                        </p>
                                    </article>
                                </div>
                            </div>
                            <h6 style="font-size: 13px; margin-top: 5px;">{{$movie->movie_title}}</h6>
                            <p style="font-size: 12px; color: orange;">{{ \Carbon\Carbon::parse($movie->release_date)->format('d M Y')}}</p>
            
                        </div>
                   
                    @endforeach
                @else
                    <h1 style="margin-top: 200px; margin-bottom: 200px;">No data found</h1>
                @endif
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <div class="movie-contents">
            <div class="row-movie">
                @if(count($movies_soon))
                    @foreach($movies_soon as $movie)
                        <div class="col">
                            <div class="movie-item">
                                <div class="thumbnail">
                                    <img src="{{asset($movie->poster)}}" alt="Poster" />
                                </div>
                                <div class="thumb-info">
                                    <article>
                                        <h6>{{$movie->movie_title}}</h6>
                                        <p>
                                            <span class="iconify" data-icon="ic:round-date-range"></span>
                                            {{ \Carbon\Carbon::parse($movie->release_date)->format('d/M/Y')}}
                                        </p>
                                        <p>
                                            <span class="iconify" data-icon="bxs:time-five"></span>
                                            {{$movie->duration}} mins
                                        </p>
                                        <p>
                                            <span class="iconify" data-icon="ci:tag"></span>
                                            {{$movie->genre}}
                                        </p>
                                    </article>
                                    <article>
                                        <p>
                                            <a href="/movie-booking-info/{{$movie->movie_id}}" class="booking-btn">
                                                More Info
                                            </a>
                                        </p>
                                        <p {{$movie->showing == 'Coming Soon' ? 'hidden':''}}>
                                            <a href="/movie-booking-info/{{$movie->movie_id}}/book-ticket" class="booking-btn">
                                                Book Now
                                            </a>
                                        </p>
                                    </article>
                                </div>
                            </div>
                            <h6 style="font-size: 13px; margin-top: 5px;">{{$movie->movie_title}}</h6>
                            <p style="font-size: 12px; color: orange;">{{ \Carbon\Carbon::parse($movie->release_date)->format('d M Y')}}</p>
            
                        </div>
                    @endforeach
                @else
                <h1 style="margin-top: 150px; margin-bottom: 170px; color: rgba(255, 255, 255, 0.74);">No data found</h1>
                @endif
            </div>
        </div>
    </div>
</div>