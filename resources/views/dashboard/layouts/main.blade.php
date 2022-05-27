<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Dashboard | atBlog</title>


    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{asset('src/css/dashboard.css')}}">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- Fontawesome CSS --}}
    <link rel="stylesheet" href="{{asset('src/fontawesome/css/all.css')}}">

  </head>
  <body>
    
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 fw-bold text-white" href="#">atBlog</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="/logout" method="post" >
                    @csrf
                    <button type="submit" class="nav-link bg-dark border-0 text-white px-3">
                      <i class="fa-solid fa-arrow-right-to-bracket"></i> Log Out</a>
                    </button>
                  </form>
            </div>
        </div>
        </header>

        <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fa-solid fa-bars-progress"></i>
                         Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-file-pen"></i>
                         Posts
                    </a>
                </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">Settings</h6>
                <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-sliders"></i> All Settings
                    </a>
                </li>
                </ul>
            </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    This week
                </button>
                </div>
            </div>
                @yield('dashboard')
            
            </main>
        </div>
        </div>


    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    {{-- Fontawesome JS --}}
    <script src="{{asset('src/fontawesome/js/all.js')}}"></script>


    <script src="{{asset('src/js/dashboard.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>


    {{-- <script src="dashboard.js"></script> --}}
  </body>
</html>
