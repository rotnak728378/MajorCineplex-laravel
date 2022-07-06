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
                <h3 class="movieTitle">{{$movie->movie_title}}</h3>
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
                    <h5 class="textDecor">Overview</h5>
                    <br>
                    <p>{{$movie->description}}</p>

                </div>
            </div>
        
    </div>

    <hr class="line">

    <!-- you may also like container -->

    {{-- <div class="mayAlsoLike">

        <h4 class="textDecor">You may also like:</h4>

        <div class="recommend-movie">
            <img class="otherPoster" src="https://cdn.pastemagazine.com/www/system/images/photo_albums/best-movie-posters-2016/large/moonlight-ver2-xlg.jpg?1384968217" alt="">
            <img class="otherPoster" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/d1pklzbuyaab0la-1552597012.jpg" alt="">
            <img class="otherPoster" src="https://www.digitalartsonline.co.uk/cmsdata/slideshow/3662115/baby-driver-rory-hi-res.jpg" alt="">
            <img class="otherPoster" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRBkxgl2A2PhE_6tklFLT0bxn5NLhvhsnpXGhmXBt_zotrlVHmo" alt="">
            <img class="otherPoster" src="https://m.media-amazon.com/images/I/71kvH7JJFlL._AC_SY679_.jpg" alt="">
        </div>
    </div> --}}
    @endforeach
</div>

@endsection