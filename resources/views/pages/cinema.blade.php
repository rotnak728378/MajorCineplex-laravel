@extends('layouts.default')

@section('content-items')
<div class="cinema">
    <div class="image-slider">
        <div class="container">
            <h1>Major Aeon Mall Phnom Penh</h1>
            <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
            <div class="btb">
                <button class="btn">
                    <a href="/cinema/{{1}}">Explore Movie</a>
                </button>
            </div>
        </div>
    </div>
    <div class="container-cinema">
        @foreach($cinemas as $cinema)
            <div class="cinema-card">
                <div class="cinema-img">
                    <img src="../images/major-cinema.png">
                </div>
                <div class="content">
                    <h3>{{ $cinema->cinema_name }}</h3>
                    <p>{{ $cinema->cinema_location }}</p>
                    <p>{{ $cinema->cinema_contact }}</p>
                    <div class="slider-cinema">
                        <button type="button" class="btn">
                            <a href="/cinema/{{$cinema->cinema_id}}">Explore Movies</a>
                        </button>
    
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection