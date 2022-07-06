<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Edit Movie</title>

    <link rel="canonical" href="{{asset('https://getbootstrap.com/docs/5.0/examples/dashboard/')}}">

    <!-- Bootstrap core CSS -->
    
<link href="{{asset('./assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('./css/style.css')}}">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('./css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body style="background: rgba(255, 255, 255, 0.815)">
    
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <a class="navbar col-md-3 col-lg-2 me-0 px-3" href="#">
    <img src="{{asset('./images/majorcineplex.png')}}" alt="majorcineplex" width="70">
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-50 p-1 ps-3" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 me-4" href="/logout">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="position-sticky pt-3 mt-4">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="/add-staff">
              <span data-feather="user-plus"></span>
              Add staffs
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="/add-movie">
              <span data-feather="film"></span>
              New movie
            </a>
          </li>
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="/feedback">
              <span data-feather="mail"></span>
              Email from users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ticket-library">
              <span data-feather="book-open"></span>
              Tickets Library
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">New Movie</h1>
      </div>

      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
      @endif
      @if(session('fail'))
        <div class="alert alert-danger">
            {{ session('fail') }}
        </div>
      @endif

      <div class="add-movie">
        <div class="container-fluid">
          <h3>Edit Poster</h3>
          @foreach($data as $d)
            <form autocomplete="off" method="POST" action="{{ route('edit') }}" enctype="multipart/form-data">
                @csrf
                <input type="text" name="mId" value="{{$d->movie_id}}" hidden>
                <input type="text" name="posterhidden" value="{{$d->poster}}" hidden>
                <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' name="image" id="imageUpload" accept="image/*" />
                    <label for="imageUpload">
                        <svg viewBox="0 0 512 512" width="15" style="margin-left: -10px; margin-top: -10px;" title="pencil-alt">
                        <path d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z" />
                        </svg>
                    </label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url({{asset($d->poster)}});">
                    </div>
                </div>
                </div>
                <br><br>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Title</label>
                <input type="text" name="movie_title" class="form-control" value="{{$d->movie_title}}">
                <br>
                <label for="exampleInputEmail1" class="form-label">Release Date</label>
                <input type="date" name="release_date" class="form-control" value="{{$d->release_date}}">
                <br>
                <label for="exampleInputEmail1" class="form-label">Expired Date</label>
                <input type="date" name="due_date" class="form-control" value="{{$d->due_date}}">
                <br>
                <label for="exampleInputEmail1" class="form-label">Duration</label>
                <input type="text" name="duration" class="form-control" value="{{$d->duration}}">
                <br>
                <label for="exampleInputEmail1" class="form-label">Genre</label>
                <input type="text" name="genre" class="form-control" value="{{$d->genre}}">
                <br>
                <label for="exampleInputEmail1" class="form-label">Trailer Link</label>
                <input type="text" name="trailer" class="form-control" value="{{$d->trailer}}">
                <br>
                <label for="exampleFormControlTextarea1" class="form-label">More Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$d->description}}</textarea>
                <br>
                <label for="exampleFormControlTextarea1" class="form-label">Choose showing</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="showing" value="Now Showing" id="flexRadioDefault1" {{$d->showing == 'Now Showing' ? 'checked':''}}>
                    <label class="form-check-label" for="flexRadioDefault1">
                    Now showing
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="showing" value="Coming Soon" id="flexRadioDefault2"  {{$d->showing == 'Coming Soon' ? 'checked':''}}>
                    <label class="form-check-label" for="flexRadioDefault2">
                    Coming soon
                    </label>
                </div>
                <br>

                <label>Select all available cinemas</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="cinema_id1" id="flexCheckDefault" {{$d->cinema_id1 == 1 ? 'checked':''}}>
                    <label class="form-check-label" for="flexCheckDefault">
                    Major Aeon Mall Phnom Penh
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" name="cinema_id2" id="flexCheckChecked" {{$d->cinema_id2 == 2 ? 'checked':''}}>
                    <label class="form-check-label" for="flexCheckChecked">
                    Major Aeon Mall Phnom Penh Sen Sok
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" name="cinema_id3" id="flexCheckDefault" {{$d->cinema_id3 == 3 ? 'checked':''}}>
                    <label class="form-check-label" for="flexCheckDefault">
                    MAJOR PHNOM PENH SORYA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" name="cinema_id4" id="flexCheckChecked" {{$d->cinema_id4 == 4 ? 'checked':''}}>
                    <label class="form-check-label" for="flexCheckChecked">
                    MAJOR PLATINUM SIEM REAP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" name="cinema_id5" id="flexCheckDefault" {{$d->cinema_id5 == 5 ? 'checked':''}}>
                    <label class="form-check-label" for="flexCheckDefault">
                    MAJOR BIG C POIPET
                    </label>
                </div>
                <br>

                <label>Show time ( Separate by | )</label><br><br>
                <input type="text" name="show_time" class="form-control" value="{{$d->show_time}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          @endforeach
      </div>
      </div>
    </main>
  </div>
</div>

<script>
  function add(event){
      event.preventDefault();
      var new_chq_no = parseInt($('#total_chq').val())+1;
      var new_input="<input type='text' name='show_time' id='new_"+new_chq_no+"' style='margin-right: 10px; margin-bottom: 10px'>";
      $('#new_chq').append(new_input);
      $('#total_chq').val(new_chq_no)
    }
    function remove(event){
      event.preventDefault();
      var last_chq_no = $('#total_chq').val();
      if(last_chq_no>1){
        $('#new_'+last_chq_no).remove();
        $('#total_chq').val(last_chq_no-1);
      }
    }
</script>
    <script src="{{asset('../assets/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js')}}" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js')}}" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="{{asset('./js/dashboard.js')}}"></script>
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}"></script>
    <script>
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                  $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                  $('#imagePreview').hide();
                  $('#imagePreview').fadeIn(650);
              }
              reader.readAsDataURL(input.files[0]);
          }
      }
      $("#imageUpload").change(function() {
          readURL(this);
      });
    </script>
  </body>
</html>
