<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <link rel="icon" href="{{asset('images/majorcineplex-icon.png')}}">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('./css/admin_style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
      }
      .booked .nav-item .nav-link.active {
        color: #FF3D00;
        font-weight: 600
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
  <form autocomplete="off" action="{{url('search-in-admin')}}" type="get" class="search-form">
    <div class="wrap">
      <div class="search">
         <input type="text" name="query" class="searchTerm" placeholder="Search...">
         <button type="submit" class="searchButton">
           <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
  </form>
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
            <a class="nav-link active" aria-current="page" href="/dashboard">
              <span class="iconify" data-icon="lucide:layout-dashboard" data-width="20" data-height="20"></span>
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
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="booked-library">
            <section class="main-content">
              <div class="container">
                <br>
                <h3>Dashboard</h3>
                <hr>
                <br>
                <div class="box-card">
                  <div class="row">
                    <div class="col col-4">
                      <div class="box-item">
                        <h6>Movies</h6>
                        <h3>{{count($movies)}}</h3>
                      </div>
                    </div>

                    <div class="col col-4">
                      <div class="box-item">
                        <h6>Staffs</h6>
                        <h3>{{count($staffs)+49}}</h3>
                      </div>
                    </div>

                    <div class="col col-4">
                      <div class="box-item">
                        <h6>Branches</h6>
                        <h3>{{count($cinemas)}}</h3>
                      </div>
                    </div>
                    <div class="col col-4">
                      <div class="box-item">
                        <h6>Income</h6>
                        <h3>${{$seats_amount*4.5}}</h3>
                      </div>
                    </div>
                    <div class="col col-4">
                      <div class="box-item">
                        <h6>Customers</h6>
                        <h3>{{count($customers)}}</h3>
                      </div>
                    </div>
                    <div class="col col-4">
                      <div class="box-item">
                        <h6>Feedback</h6>
                        <h3>{{count($msg)}}</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <br><br><br>
                @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
                @endif
                @if(count($movies))
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Movies</th>
                        <th>Released Date</th>
                        <th>Expired Date</th>
                        <th>Duration</th>
                        <th>Showing</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($movies as $m)
                        <tr>
                          <td>
                            <div class="user-info">
                              <div class="user-info__img">
                                <img src="{{asset($m->poster)}}" alt="User Img">
                              </div>
                              <div class="user-info__basic">
                                <h6 class="mb-0">{{$m->movie_title}}</h6>
                                <p class="text-muted mb-0">{{$m->genre}}</p>
                              </div>
                            </div>
                          </td>
                          <td>{{\Carbon\Carbon::parse($m->release_date)->format('d/M/Y')}}</td>
                          <td>{{\Carbon\Carbon::parse($m->due_date)->format('d/M/Y')}}</td>
                          <td>
                            {{$m->duration}} mins
                          </td>
                          <td style="{{$m->showing=='Now Showing' ? 'color: #1CDB42;':'color: blue;'}}">
                            <b>{{$m->showing}}</b>
                          </td>
                          <td>
                            <div class="dropdown open">
                              <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false">
                                    <i style="color: rgba(29, 29, 29, 0.815);" class="fa fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId1">
                                <a class="dropdown-item" href="/edit/{{$m->movie_id}}"><i class="fa fa-pencil mr-1"></i> Edit</a>
                                <a class="dropdown-item text-danger" onclick="return confirm('Are you really want to remove?')" href="/remove/{{$m->movie_id}}"><i class="fa fa-trash mr-1"></i> Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                @else
                  <h3 style="color: gray; text-align: center; margin-top: 150px;">No data found!</h3>
                @endif
              </div>
            </section>
          </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          ...
        </div>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="./js/dashboard.js"></script>
    <script src="{{asset('./js/ticket_library.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
