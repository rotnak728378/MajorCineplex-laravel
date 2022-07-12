@extends('layouts.default')

@section('content-items')
  @foreach($movies as $movie)
    
    <div class="book">
      <form method="post" autocomplete="off" action="{{ url('/booking-process') }}" enctype="multipart/form-data">
        @csrf
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" style="z-index: 99999999" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verifying Payment</h5>
                <button type="button" style="border: none; box-shadow: none;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Tickets Price: <b style="color: #FF3D00;">$<span id="price">0</span></b>
                <br>
                <h6>Payment Method: <b style="color: rgb(0, 38, 255)">ABA</b></h6>
                <br>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"><b>Account ID:</b></label>
                  <input type="text" class="form-control" placeholder="### ### ###" accept="Number" minlength="9" maxlength="9">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"><b>Verifying code ( 4 digits)</b></label>
                  <input type="password" placeholder="####" class="form-control" minlength="4" maxlength="4">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" name="submit" value="payment" class="payment btn" style="color: white; background: #FF3D00;">Verify</button>
              </div>
            </div>
          </div>
        </div>

        {{-- Information form  --}}
        <div class="booking-form">
          <div class="card">
            <div class="head">
              <div class="poster">
                <img src="{{asset($movie->poster)}}" alt="poster">
              </div>
              <div class="title">
                <h4 style="color: orange; font-weight: 600;">{{$movie->movie_title}}</h4>
                <div class="movieDetails">
                  <span class="iconify" data-icon="bi:calendar2-date" data-width="16" data-height="16"></span>
                  <span>{{ \Carbon\Carbon::parse($movie->release_date)->format('d M Y')}}</span>
                </div>
                <div class="movieDetails">
                    <span class="iconify" data-icon="emojione-monotone:alarm-clock" data-width="16" data-height="16"></span>
                    <span>{{$movie->duration}}</span>
                </div>
                <div class="movieDetails">
                    <span class="iconify" data-icon="bi:tag" data-width="16" data-height="16"></span>
                    <span>{{$movie->genre}}</span>
                </div>
              </div>
            </div>
            
            <div class="body">
              @if(session('fail'))
                  <div class="alert alert-danger">
                      {{ session('fail') }}
                  </div>
              @endif
                <!--First name-->
                <div class="box">
                  <input type="text" name="movieid" value="{{$movie->movie_id}}" hidden>
                  <input type="text" name="moviePoster" value="{{$movie->poster}}" hidden>
                  <input type="text" name="movieTotal" value="{{$movie->movie_title}}" hidden>
                  <label for="Name" class="fl fontLabel"> Name: </label>
                  <div class="new iconBox">
                    <span class="iconify" data-icon="icon-park-solid:edit-name"></span>
                  </div>
                  <div class="fr">
                      <input type="text" name="Name" placeholder="Full Name"
                      class="textBox" autofocus="on" required>
                  </div>
                  <div class="clr"></div>
                </div>
                <!--First name-->

                <!---Phone No.------>
                <div class="box">
                  <label for="phone" class="fl fontLabel"> Phone Number: </label>
                  <div class="fl iconBox"><span class="iconify" data-icon="ci:phone"></span></div>
                  <div class="fr">
                      <input type="text" required name="phoneNo" maxlength="10" placeholder="Phone Number" class="textBox">
                  </div>
                  <div class="clr"></div>
                </div>
                <!---Phone No.---->
        
        
                <!---Email---->
                <div class="box">
                  <label for="email" class="fl fontLabel"> Email: </label>
                  <div class="fl iconBox"><span class="iconify" data-icon="charm:mail"></span></div>
                  <div class="fr">
                      <input type="email" required name="email" placeholder="Email" class="textBox">
                  </div>
                  <div class="clr"></div>
                </div>
                <!--Email ----->
        
                <!---Gender----->
                <div class="box radio">
                  <label for="gender" class="fl fontLabel"> Gender: </label>
                    <input type="radio" name="Gender" value="Male" required checked> Male &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="radio" name="Gender" value="Female" required> Female
                </div>
                <!---Gender--->



                <!---Submit Button------>
                <div class="box">
                    <!-- Button trigger modal -->
                    <button type="button" class="payment" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      PAYMENT
                    </button>
                    {{-- <button type="submit" name="submit" value="payment" class="payment">PAYMENT</button> --}}
                    <button type="submit" name="submit" value="reserve" class="reserve">RESERVE</button>
                </div>
                <!---Submit Button----->
            </div>
          </div>
        </div>
        <div class="booking-page" id="payment">
          <div class="select-cinema">
            <h3 style="font-weight: 600">Select the cinema</h3>
            <hr>
            @foreach($cinemas as $cinema)
              
              <div class="wrapper">
                <input type="text" name="cinemaName" value="{{$cinema->cinema_name}}" hidden>
                <input type="radio" value="{{$cinema->cinema_id}}" class="cinema-option" name="cinema" id="{{$cinema->cinema_id}}" required>
                  <label for="{{$cinema->cinema_id}}" class="option">
                    <span>{{$cinema->cinema_name}}</span> 
                    <span class="iconify" data-icon="typcn:tick"></span>
                  </label> 
              </div>
            @endforeach
          </div>
          <br><br>
          <div class="select-time">
            <div class="select-cinema">
              <h3 style="font-weight: 600">Select Day</h3>
              <hr>
                <div class="wrapper">
                  <input type="radio" class="cinema-option" name="date" id="today" value="{{\Carbon\Carbon::today()->format('Y-m-d')}}" required>
                    <label for="today" class="option">
                      <span>Today</span> 
                      <span class="iconify" data-icon="typcn:tick"></span>
                    </label> 
                </div>
                <div class="wrapper">
                  <input type="radio" class="cinema-option" name="date" id="tomorrow" value="{{\Carbon\Carbon::tomorrow()->format('Y-m-d')}}" required>
                  <label for="tomorrow" class="option">
                    <span>{{\Carbon\Carbon::tomorrow()->format('d M')}}</span> 
                    <span class="iconify" data-icon="typcn:tick"></span>
                  </label> 
                </div>
                <div class="wrapper">
                  <input type="radio" class="cinema-option" name="date" id="dayAfterTmr" value="{{\Carbon\Carbon::today()->addDay(2)->format('Y-m-d')}}" required>
                  <label for="dayAfterTmr" class="option">
                    <span>{{\Carbon\Carbon::today()->addDay(2)->format('d M')}}</span>
                    <span class="iconify" data-icon="typcn:tick"></span>
                  </label> 
                </div>
            </div>
          </div>
          <br><br>
          <div class="select-time">
            <div class="select-cinema">
              <h3>Select Available Time</h3>
              <hr>
              @foreach($times as $time)
                <div class="wrapper">
                  <input type="radio" required class="cinema-option" name="time" id="{{$time}}" value="{{$time}}">
                    <label for="{{$time}}" class="option">
                      <span>{{$time}}</span> 
                      <span class="iconify" data-icon="typcn:tick"></span>
                    </label> 
                </div>
              @endforeach
            </div>
          </div>


          <br><br>
          <div>
            <h3>Select Available Seats</h3>
            <hr>
          </div>
          <ul class="showcase">
            <li>
              <div class="seat"></div>
              <small> Available for &ThinSpace;</small> <span style="color: orange"> $ 4.5</span>
            </li>
            <li>
              <div class="seat selected"></div>
              <small> Selected</small>
            </li>
            <li>
              <div class="seat occupied"></div>
              <span class="iconify" data-icon="bi:person-check-fill" style="color: white;" data-width="25" data-height="25"></span>
              <small> Occupied</small>
            </li>
          </ul>
      
          <div class="container">
            <div class="screen">Screen</div>

              @foreach(range(1, 10) as $y)
                <div class="row" name="{{$y}}">
                  {{chr(75-$y)}}
                  @foreach(range(1, 16) as $x)
                    <label for="select-seat{{chr(75-$y).$x}}" class="seat {{$occupied[chr(75-$y).$x]}}">
                      <span class="iconify {{$occupied[chr(75-$y).$x]}}" data-icon="bi:person-check-fill"></span>
                      <input type="checkbox" name="seats[]" id="select-seat{{chr(75-$y).$x}}" value="{{chr(75-$y).$x}}" {{ $occupied[chr(75-$y).$x] ? 'disabled' : '' }}>
                    </label>
                  @endforeach
                </div>
                @endforeach
          </div>
      
          <p class="text">
            You have selected <span id="count" style="font-size: 20px; font-weight: 600;">0</span> seats for the price of <span style="font-size: 20px; font-weight: 600;">$</span><span id="total" style="font-size: 20px; font-weight: 600;">0</span>
          </p>
          <br><br>
          <a href="#payment" class="to-payment">
            <button class="btn">
              GO TO PAYMENT
            </button>
          </a>

          <br><br><br>
        </div>
      </form>
      
    </div>
    
  @endforeach
@stop