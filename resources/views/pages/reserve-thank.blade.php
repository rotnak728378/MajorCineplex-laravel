<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- style  -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Major Cineplex Cambodia</title>
    <!-- tab logo -->
    <link rel="icon" href="images/majorcineplex-icon.png">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>

</head>
<body class="body-paid">
    <div class="card-ticket">
        <header class="site-header" id="header">
            <h3 class="site-header__title" style="font-size:40px;">THANK YOU!</h3>
        </header>
    
        <div class="main-contentdf">
            <i style="font-size: 60px;" class="fa fa-check main-content__checkmark" id="checkmark"></i>
            <span class="iconify" data-icon="ant-design:line-outlined"></span>
        </div>
        
        <br><br>
        <div class="main-content">
            <div class="card mb-3" style="width: 540px;">
              {{-- @foreach($info as $d) --}}
                <div class="row g-0">
                  <div class="poster-paid col-md-4">
                    <img src="{{$info["poster"]}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="ticket col-md-8">
                    <div class="ticket-body card-body">
                      <h5 class="ticket-title card-title">{{$info["title"]}}</h5>
                      <p class="ticket-text card-text">
                        <span class="iconify" data-icon="bxs:user"></span>
                        <span class="seat">{{$info["user"]}}</span>
                      </p>
                      <p class="ticket-text card-text">
                        <span class="iconify" data-icon="emojione-monotone:cinema"></span>
                        <span class="seat">{{$info["cinema"]}}</span>
                      </p>
                      <p class="ticket-text card-text">
                        <span class="iconify" data-icon="ic:baseline-chair"></span>
                        <span class="seat">{{$info["seat"]}}</span>
                      </p>
                      <p class="ticket-text card-text">
                        <span class="iconify" data-icon="bxs:time-five"></span>
                        <span class="seat">{{$info["time"]}}</span>
                      </p>
                    
                    </div>
                    <img class="paid" src="./images/reserved.png" alt="">

                  </div>
                </div>
              {{-- @endforeach --}}
                <p style="margin-top: 30px; padding-bottom: 30px;">Please take a screenshot of this ticket</p>
              </div>
        </div>
    </div>
    <div class="gohome">
      <button class="btn home-to">
        <a href="/">
          home page
        </a>
     </button>
    </div>
	<footer class="site-footer" id="footer">
		<p style="color: white;" class="site-footer__fineprint" id="fineprint">Copyright ©2022 | All Rights Reserved</p>
	</footer>
    
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>