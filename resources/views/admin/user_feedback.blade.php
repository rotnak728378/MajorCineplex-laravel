<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Users' feedback</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <link rel="icon" href="{{asset('images/majorcineplex-icon.png')}}">
    <link rel="stylesheet" href="{{asset('./css/dashboard.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('./css/style.css')}}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body {
        /* background: rgba(228, 228, 228, 0.918); */
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @import url(//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css);

      .detailBox {
          margin: 20px;
      }
      .titleBox {
          background-color:#fdfdfd;
          padding:10px;
          border-radius: 7px;
      }
      .titleBox label{
        color:#444;
        margin:0;
        display:inline-block;
      }

      .commentBox {
          padding:10px;
          border-top:1px dotted #bbb;
      }
      .commentBox .form-group:first-child, .actionBox .form-group:first-child {
          width:80%;
      }
      .commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
          width:18%;
      }
      .actionBox .form-group * {
          width:100%;
      }
      .taskDescription {
          margin-top:10px 0;
      }
      .commentList {
          padding:0;
          list-style:none;
          /* max-height:200px;
          overflow:auto; */
      }
      .commentList li {
          margin:0;
          margin-top: 15px;
          background: white;
          box-shadow: 0 2px 10px rgba(0,0,0,0.1);
          transition: all 0.3s cubic-bezier(.25,.8,.25,1);
          padding: 20px;
          border-radius: 10px;
      }
      .commentList li:hover {
        box-shadow: 0 5px 10px rgba(0,0,0,0.25), 0 5px 5px rgba(0,0,0,0.22);
      }
      .commentList li .commentText{
          margin-left: 10px;
      }
      .commentList li .commentText h6 {
          font-weight: 600;
          margin-top: -1px;
      }
      .commentList li .commentText h6 .email-cmt {
          font-weight: 500;
          color: gray;
      }
      .commentList li > div {
          display:table-cell;
      }
      .commenterImage {
          width:30px;
          margin-right:15px;
          height:100%;
          float:left;
      }
      .commenterImage img {
          width:100%;
          border-radius:50%;
      }
      .commentText p {
          margin:0;
      }
      .sub-text {
          color:#aaa;
          font-family:verdana;
          font-size:11px;
      }
      .actionBox {
          /* border-top:1px dotted #bbb; */
          padding:10px;
      }
      .no-data {
        text-align: center;
        margin-top: 150px;
        color: #aaa;
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
            <a class="nav-link active" href="/feedback">
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
      <div id="feedback-cmt">
        <div class="detailBox">
          <div class="titleBox">
            <label><h3>Feedback and Messages</h3></label>
          </div>
          <div class="actionBox">
              <ul class="commentList">
                @if(count($msg))
                  @foreach($msg as $cmt)
                    <li>
                        <div class="commenterImage">
                          <img src="{{asset('/images/user.png')}}" />
                        </div>
                        <div class="commentText">
                            <h6>{{$cmt->first_name}} {{$cmt->last_name}} | <span class="email-cmt">{{$cmt->email}}</span></h6>
                            <p class="">{{$cmt->message}}</p> 
                            <span class="date sub-text">{{\Carbon\Carbon::parse($cmt->created_at)->format('d M Y')}}</span> 
                        </div>
                    </li>
                  @endforeach
                @else 
                    <h3 class='no-data'>No comments found!</h3>
                @endif
              </ul>
          </div>
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
  </body>
</html>
