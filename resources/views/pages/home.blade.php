@extends('layouts.default')

@section('content-items')
    <div class="slider-page carousel slide carousel-fade" id="carouselExampleFade" data-bs-ride="carousel">
        @include('includes.slider')
    </div>
    <div class="main-contents">
        @include('includes.card-content')
    </div>
@stop
