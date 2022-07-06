<div class="menu-bar container-fluid">
    <a class="logo-link navbar-brand" href="/">
        <img src="{{asset('./images/majorcineplex.png')}}" alt="Major Cineplex" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="menu-contents collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav nav-pills me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{request()->path() == '/' ? 'active' : null}}" aria-current="page" href="/">
                    <span class="iconify" data-icon="fa-solid:home"></span>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->path() == 'cinema' ? 'active' : null}}" href="/cinema">
                    <span class="iconify" data-icon="maki:cinema"></span>
                    Cinemas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->path() == 'promotion' ? 'active' : null}}" href="/promotion">
                    <span class="iconify" data-icon="bxs:discount"></span>
                    Promotions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->path() == 'new-activity' ? 'active' : null}}" href="/new-activity">
                    <span class="iconify" data-icon="fluent:news-16-filled"></span>
                    News & Activity
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->path() == 'contact' ? 'active' : null}}" href="/contact">
                    <span class="iconify" data-icon="bxs:contact"></span>
                    Contact
                </a>
            </li>
        </ul>
        <form method="POST" action="{{ route('search') }}" autocomplete="off" class="search-bar d-flex" enctype="multipart/form-data">
            @csrf
            <input name="search" class="search-input form-control me-2" type="search-movie" placeholder="Search movies" aria-label="Search">
            <button class="search-btn btn btn-outline-success" type="submit">
                <span class="iconify" data-icon="bx:search-alt-2"></span>
            </button>
        </form>
        <div class="lang" style="color: white;">
            <div class="btn-group">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="iconify" data-icon="jam:world"></span> 
                    EN
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item active" role="link" aria-disabled="true" style="color: white; cursor: pointer;">English</a></li>
                    {{-- <li><a class="dropdown-item" href="#">Khmer (ខ្មែរ)</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    var path = "{{ route('autocomplete') }}";
    $('input.search-input').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
