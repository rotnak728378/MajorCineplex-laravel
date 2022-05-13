@extends('layouts.default')

@section('content-items')
<div class="cinema">
    <div class="image-slider">
        <div class="container">
            <h1>Major Aeon Mall Phnom Penh</h1>
            <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
            <div class="btb">
                <button class="btn-slider">MORE INFO</button>&nbsp;&nbsp;&nbsp;
                <button class="btn-slider">BUY NOW</button>

            </div>
        </div>
    </div>
    <div class="search">
        <form>
            <input type="text" placeholder="Search cinema" class="search-input">
            <button type="submit" class="btn-search">
                <span class="iconify" data-icon="bx:search-alt-2"></span>
            </button>

        </form>
        <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
    </div>
    <div class="container-cinema">
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="../images/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR AEON MALL PHNOM PENH</h3>
                <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
                <p>098 888 126</p>
                <div class="slider-cinema">
                    <button class="btn-slider">MORE INFO</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn-slider">SHOW TIME</button>
                </div>
                
            </div>
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="../images/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR PHNOM PENH AEON 2</h3>
                <p>Street 1003, Phnom Penh (Aeon Mall Sen Sok) Aeon Sen Sok</p>
                <p>087 901 000</p>
                <div class="btb">
                    <button class="btn-slider">MORE INFO</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn-slider">SHOW TIME</button>
                </div>
                
            </div>
            
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="../images/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR PHNOM PENH SORYA</h3>
                <p>#13-61, Street 63, Sangkat Phsar Thmei 1,Khan Daun Penh Phnom Penh (Sorya Center Point)</p>
                <p>087 666 210</p>
                <div class="btb">
                    <button class="btn-slider">MORE INFO</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn-slider">SHOW TIME</button>
                </div>
            </div>
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="../images/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR PLATINUM SIEM REAP</h3>
                <p>Stung Thmey Village Svay Dongkom District Siem Reap City Siem Reap Province</p>
                <p>081 666 210</p>
                <div class="btb">
                    <button class="btn-slider">MORE INFO</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn-slider">SHOW TIME</button>
                </div>
            </div>
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="../images/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR BIG C POIPET</h3>
                <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
                <p>097 687 1049</p>
                <div class="btb">
                    <button class="btn-slider">MORE INFO</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn-slider">SHOW TIME</button>
                </div>
            </div>
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="../images/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR AEON MALL KAMPOT</h3>
                <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
                <p>098 889 345</p>
                <div class="btb">
                    <button class="btn-slider">MORE INFO</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn-slider">SHOW TIME</button>
                </div>
            </div>
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="../images/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR AEON MALL KANDAL</h3>
                <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
                <p>098 888 123</p>
                <div class="btb">
                    <button class="btn-slider">MORE INFO</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn-slider">SHOW TIME</button>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
@endsection