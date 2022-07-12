@extends('layouts.default')

@section('content-items')
<div class="movie-info">
    @foreach($movies as $movie)
    <!-- iframe movie trailer -->
    <div class="iframe-container">
        <iframe id="trailer" class="embed-responsive-item" src="{{$movie->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        {{-- <iframe width="710" height="399" src="https://www.youtube.com/embed/3Smtyr0oCP4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
    </div>

    <hr class="line">

    <!-- Movie description and details -->
    <div class="movieDescription">
        
            <div>
                <img class="moviePoster" src="{{asset($movie->poster)}}" alt="">
                <h3 style="color: orange; font-weight: 600;" class="movieTitle">{{$movie->movie_title}}</h3>
                <button class="bookNowBtn" {{$movie->showing == 'Coming Soon' ? 'hidden':''}}>
                    <a href="/movie-booking-info/{{$movie->movie_id}}/book-ticket">Book Now</a>
                </button>
            </div>

            <br>
            <br>
        

        <!-- descriptions -->
            <div class="categories">
                <div class="movieDetails">
                    <span class="iconify" data-icon="bi:calendar2-date" data-width="16" data-height="16"></span>
                    <span>{{ \Carbon\Carbon::parse($movie->release_date)->format('d/M/Y')}}</span>
                </div>
                <div class="movieDetails">
                    <span class="iconify" data-icon="emojione-monotone:alarm-clock" data-width="16" data-height="16"></span>
                    <span>{{$movie->duration}} mins</span>
                </div>
                <div class="movieDetails">
                    <span class="iconify" data-icon="bi:tag" data-width="16" data-height="16"></span>
                    <span>{{$movie->genre}}</span>
                </div>

                <br>

                <div class="more-info">
                    <h5 style="font-weight: 700" class="textDecor">Overview</h5>
                    {{-- <br> --}}
                    <p style="font-weight: 300">{{$movie->description}}</p>

                </div>
            </div>
        
    </div>

    <hr class="line">

    <!-- you may also like container -->

    <div class="mayAlsoLike">

        <h4 class="textDecor">You may also like:</h4>

        <div class="recommend-movie">
            <a href="/movie-booking-info/24">
                <img class="otherPoster" src="{{asset('/storage/images/1657275736Fast & feel love.jpg')}}" alt="">
            </a>
            <a href="/movie-booking-info/37">
                <img class="otherPoster" src="{{asset('/storage/images/1656868372file_20222809122800 (1).jpg')}}" alt="">
            </a>
            <a href="/movie-booking-info/43">
                <img class="otherPoster" src="{{asset('/storage/images/1657124119file_20220810010811.jpg')}}" alt="">
            </a>
            <a href="/movie-booking-info/44">
                <img class="otherPoster" src="{{asset('/storage/images/1657277761file_20224721034726.jpg')}}" alt="">
            </a>
            <a href="/movie-booking-info/23">
                <img class="otherPoster" src="{{asset('/storage/images/1656405768Spiral.jpg')}}" alt="">
            </a>
        </div>
    </div>
    @endforeach
</div>

@endsection