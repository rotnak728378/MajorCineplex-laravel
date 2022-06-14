@extends('layouts.default')

@section('content-items')
    <div class="book">
      <div class="booking-form">
        <div class="card">
          <div class="head">
            <div class="poster">
              <img src="./images/sonic2.jpg" src="sonic2">
            </div>
            <div class="title">
              <h4>Sonic 2</h4>
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
            </div>
          </div>
          
          <div class="body">
            <form method="post" autocomplete="on">
              <!--First name-->
              <div class="box">
                <label for="Name" class="fl fontLabel"> Name: </label>
                <div class="new iconBox">
                  <span class="iconify" data-icon="icon-park-solid:edit-name"></span>
                </div>
                <div class="fr">
                    <input type="text" name="Name" placeholder="First Name"
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
                  <input type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
                  <input type="radio" name="Gender" value="Female" required> Female
              </div>
              <!---Gender--->
      
              <!---Submit Button------>
              <div class="box">
                  <button name="Submit" class="payment"><a href="">PAYMENT</a></button>
                  <button name="Submit" class="reserve"><a href="">RESERVE</a></button>
                  
              </div>
              <!---Submit Button----->
            </form>
          </div>
        </div>

      </div>
      <div class="booking-page">
        <div class="move-container">
            {{-- <label>Pick a movie:</label>
            <select id="movie">
                <option value="16">Avengers: End Game ($16)</option>
                <option value="20">Dark Knight ($20)</option>
                <option value="10">Harry Potter and the Goblet of Fire ($10)</option>
                <option value="12">Transformers ($12)</option>
            </select> --}}
        </div>
      
          <ul class="showcase">
            <li>
              <div class="seat"></div>
              <small>Available for &ThinSpace;</small> <span style="color: orange"> $ 4.5</span>
            </li>
            <li>
              <div class="seat selected"></div>
              <small>Selected</small>
            </li>
            <li>
              <div class="seat occupied"></div>
              <small>Occupied</small>
            </li>
          </ul>
      
          <div class="container">
            <div class="screen">Screen</div>
            <div class="row">
              F
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
            </div>
            <div class="row">
              E
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
            </div>
            <div class="row">
              D
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
            </div>
            <div class="row">
              C
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
            </div>
            <div class="row">
              B
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
            </div>
            <div class="row">
              A
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat"></div>
              <div class="seat occupied"></div>
              <div class="seat occupied"></div>
              <div class="seat"></div>
            </div>
          </div>
      
          <p class="text">
            You have selected <span id="count">0</span> seats for the price of $<span id="total">0</span>!
          </p>
      </div>
    </div>
@stop