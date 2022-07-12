<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Add New Staff</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="icon" href="{{asset('images/majorcineplex-icon.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('./css/dashboard.css')}}">
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="./css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('./css/admin_style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <a class="navbar col-md-3 col-lg-2 me-0 px-3" href="#">
    <img src="./images/majorcineplex.png" alt="majorcineplex" width="70">
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <form autocomplete="off" action="{{url('/search-in-admin')}}" type="get" class="search-form">
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
            <a class="nav-link" aria-current="page" href="/dashboard">
              <span class="iconify" data-icon="lucide:layout-dashboard" data-width="20" data-height="20"></span>
              Dashboard
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link active" href="/add-staff">
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
      <div class="form_wrapper">
        <div class="form_container">
          <div class="title_container">
            <h2>Add New Staff</h2>
          </div>
          <div class="row clearfix">
            <div class="add-staff">
              <form>
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                  <input type="email" name="email" placeholder="Email" required />
                </div>

                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                  <input type="password" name="password" placeholder="Password" required />
                </div>

                <div class="row clearfix">
                  <div class="col_half">
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                      <input type="text" name="name" placeholder="First Name" />
                    </div>
                  </div>
                  
                  <div class="col_half">
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                      <input type="text" name="name" placeholder="Last Name" required />
                    </div>
                  </div>
                </div>
                <div class="input_field radio_option">
                  <input type="radio" name="radiogroup1" id="rd1">
                  <label for="rd1">Male</label>
                  <input type="radio" name="radiogroup1" id="rd2">
                  <label for="rd2">Female</label>
                </div>
                <br>
                <input class="button" type="submit" value="Register" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="./js/dashboard.js"></script>
  </body>
</html>
