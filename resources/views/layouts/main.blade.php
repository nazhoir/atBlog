<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | atBlog</title>

    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{asset('src/css/style.css')}}">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- Fontawesome CSS --}}
    <link rel="stylesheet" href="{{asset('src/fontawesome/css/all.css')}}">
  </head>
  
  <body>
    @include('partials/navbar')

    <div class="container pt-3">
        @yield('content')
    </div>


    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    {{-- Fontawesome JS --}}
    <script src="{{asset('src/fontawesome/js/all.js')}}"></script>
  </body>
</html>