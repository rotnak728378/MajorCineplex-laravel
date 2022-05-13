@extends('layouts.default')

@section('content-items')
<div class="movie-info">
    <!-- iframe movie trailer -->
    <div class="iframe-container">
        <iframe id="trailer" class="embed-responsive-item" src="https://www.youtube.com/embed/mqqft2x_Aa4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <hr class="line">

    <!-- Movie description and details -->
    <div class="movieDescription">
        <div>
            <img class="moviePoster" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRBkxgl2A2PhE_6tklFLT0bxn5NLhvhsnpXGhmXBt_zotrlVHmo" alt="">
            <h3 class="movieTitle">The Batman</h3>
            <button class="bookNowBtn">Book Now</button>
        </div>

        <br>
        <br>
        

        <!-- descriptions -->
        <div class="categories">
            <div class="movieDetails">
                <span class="iconify" data-icon="bi:calendar2-date" data-width="16" data-height="16"></span>
                <span>3 Mar 2022</span>
            </div>
            <div class="movieDetails">
                <span class="iconify" data-icon="emojione-monotone:alarm-clock" data-width="16" data-height="16"></span>
                <span>2h 56mn</span>
            </div>
            <div class="movieDetails">
                <span class="iconify" data-icon="bi:tag" data-width="16" data-height="16"></span>
                <span>Fantasy / Advanture / Action</span>
            </div>

            <br>

            <div class="more-info">
                <h5 class="textDecor">More Decriptions</h5>
                <br>
                <p>: A point-of-view driven noir tale with heavy focus on Batman's detective work. A stand-alone story with no connection to the DCEU.</p>
                <div class="row">
                    <div class="col col-sm-2">
                        <b>Country</b>
                    </div>
                    <div class="col col-sm-10">
                        : United States of America
                    </div>    
                </div>

                <div class="row">
                    <div class="col col-sm-2">
                        <b>Production</b>
                    </div>
                    <div class="col col-sm-10">
                        : DC Entertainment, Branded Entertainment/Batfilm Productions, Atlas Entertainment, Cruel & Unusual Films, Warner Bros. Pictures, 6th & Idaho Productions, Mad Ghost Productions, DC Comics, DC Films, Dylan Clark Productions
                    </div>    
                </div>

                <div class="row">
                    <div class="col col-sm-2">
                        <b>Casts</b>
                    </div>
                    <div class="col col-sm-10">
                        : Robert Pattinson, Vanessa Kirby, Jeffrey Wright, Jonah Hill, Peter Sarsgaard
                    </div>    
                </div>

                <div class="row">
                    <div class="col col-sm-2">
                        <b>Tags</b>
                    </div>
                    <div class="col col-sm-10">
                        : Watch The Batman Online Free, The Batman Online Free, Where to watch The Batman, The Batman movie free online, The Batman free online
                    </div>    
                </div>

            </div>
        </div>
        
    </div>

    <hr class="line">

    <!-- you may also like container -->

    <div class="mayAlsoLike">

        <h4 class="textDecor">You may also like:</h4>

        <div class="recommend-movie">
            <img class="otherPoster" src="https://cdn.pastemagazine.com/www/system/images/photo_albums/best-movie-posters-2016/large/moonlight-ver2-xlg.jpg?1384968217" alt="">
            <img class="otherPoster" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/d1pklzbuyaab0la-1552597012.jpg" alt="">
            <img class="otherPoster" src="https://www.digitalartsonline.co.uk/cmsdata/slideshow/3662115/baby-driver-rory-hi-res.jpg" alt="">
            <img class="otherPoster" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRBkxgl2A2PhE_6tklFLT0bxn5NLhvhsnpXGhmXBt_zotrlVHmo" alt="">
            <img class="otherPoster" src="https://m.media-amazon.com/images/I/71kvH7JJFlL._AC_SY679_.jpg" alt="">
        </div>
    </div>
</div>

@endsection