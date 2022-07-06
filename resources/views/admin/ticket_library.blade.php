<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Edit Movie</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <link rel="icon" href="{{asset('images/majorcineplex-icon.png')}}">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('./css/admin_style.css')}}">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .booked .nav-item .nav-link {
        color: gray;
        border: none;
        border-bottom: 2px solid unset;
      }
      .booked .nav-item .nav-link.active {
        color: #FF3D00;
        font-weight: 600;
        border: none;
        background: unset;
        border-bottom: 2px solid #FF3D00;
      }
      .booked .nav-item .nav-link:hover {
        border: none;
        background: unset;
        border-bottom: 2px solid unset;
        color: black;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <a class="navbar col-md-3 col-lg-2 me-0 px-3" href="#">
    <img src="./images/majorcineplex.png" alt="majorcineplex" width="70">
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
            <a class="nav-link active" href="/ticket-library">
              <span data-feather="book-open"></span>
              Tickets Library
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <ul class="booked nav nav-tabs mt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
            <span data-feather="credit-card"></span> 
            Purchased Users
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
            <span data-feather="bookmark"></span> 
            Reserved Users
          </button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="booked-library">
            <section class="main-content">
              <div class="container">
                @if(count($data))
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Movie</th>
                        <th>Purchased by</th>
                        <th>Cinema</th>
                        <th>Seats</th>
                        <th>Booking Date</th>
                        <th>Watching Date</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      @foreach($data as $d)
                        <tr>
                          <td>
                            <div class="user-info">
                              <div class="user-info__img">
                                <img src="{{asset($d->poster)}}" alt="User Img">
                              </div>
                              <div class="user-info__basic">
                                <h6 class="mb-0">{{$d->movie_title}}</h5>
                                {{-- <p class="text-muted mb-0">@kiranacharyaa</p> --}}
                              </div>
                            </div>
                          </td>
                          <td>
                            {{$d->name}}
                          </td>
                          <td>{{$d->cinema_name}}</td>
                          <td>{{$d->seats}}</td>
                          <td>
                            {{\Carbon\Carbon::parse($d->created_at)->format('d M Y | H:i')}}
                          </td>
                          <td>
                            {{\Carbon\Carbon::parse($d->watch_time)->format('d M Y | H:i')}}
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                @else 
                <h3 style="color: gray; text-align: center; margin-top: 150px;">No users found!</h3>
                @endif
              </div>
            </section>
          </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="booked-library">
            <section class="main-content">
              <div class="container">
                @if(count($data_reserved))
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Movie</th>
                        <th>Purchased by</th>
                        <th>Cinema</th>
                        <th>Seats</th>
                        <th>Booking Date</th>
                        <th>Watching Date</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      @foreach($data_reserved as $d)
                        <tr>
                          <td>
                            <div class="user-info">
                              <div class="user-info__img">
                                <img src="{{asset($d->poster)}}" alt="User Img">
                              </div>
                              <div class="user-info__basic">
                                <h6 class="mb-0">{{$d->movie_title}}</h5>
                                {{-- <p class="text-muted mb-0">@kiranacharyaa</p> --}}
                              </div>
                            </div>
                          </td>
                          <td>
                            {{$d->name}}
                          </td>
                          <td>{{$d->cinema_name}}</td>
                          <td>{{$d->seats}}</td>
                          <td>
                            {{\Carbon\Carbon::parse($d->created_at)->format('d M Y | H:i')}}
                          </td>
                          <td>
                            {{\Carbon\Carbon::parse($d->watch_time)->format('d M Y | H:i')}}
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                @else 
                  <h3 style="color: gray; text-align: center; margin-top: 150px;">No users found!</h3>
                @endif
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="./js/dashboard.js"></script>
    <script src="{{asset('./js/ticket_library.js')}}"></script>
  </body>
</html>
