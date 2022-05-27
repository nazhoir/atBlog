@extends('layouts/main')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-4">

      @if (session()->has('success')) 
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif


      @if (session()->has('loginError')) 
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif





        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
              @csrf
              
              <h1 class="h3 fw-bold text-p text-center mb-3 fw-normal">Login in</h1>
          
              <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror " id="email" placeholder="name@example.com" required value="{{ old('email')}}">
                <label for="email">Email address</label>
                @error ('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control @error ('password') is-invalid @enderror " id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error ('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <button class="w-100 btn btn-lg btn-danger" type="submit">Log in</button>
            </form>
            <small class="mt-2 d-block text-center">Not Registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>

    
@endsection