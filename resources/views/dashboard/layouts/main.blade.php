<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>{{ $title }} | atBlog</title>


    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{asset('src/css/dashboard.css')}}">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- Fontawesome CSS --}}
    <link rel="stylesheet" href="{{asset('src/fontawesome/css/all.css')}}">


    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="{{asset('src/css/trix.css')}}">

    <style>
      trix-toolbar [data-trix-button-group=file-tools] {
        display: none;
      }
    </style>
    <script type="text/javascript" src="{{asset('src/js/trix.js')}}"></script>
    

  </head>
  <body>
    
        @include('dashboard/partials/header')

        <div class="container-fluid">
        <div class="row">
            @include('dashboard/partials/sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
