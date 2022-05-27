@extends('layouts/main')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="post">
                @csrf
              
              <h1 class="h3 fw-bold text-p text-center mb-3 fw-normal">Registration Form</h1>
          
              <div class="form-floating mb-2">
                <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
                <label for="name">Name</label>
                @error ('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating mb-2">
                <input type="text" name="username" class="form-control @error ('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
                <label for="username">Username</label>
                @error ('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
          
              <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error ('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control @error ('password') is-invalid @enderror" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error ('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <button class="w-100 btn btn-lg btn-danger" type="submit">Register</button>
            </form>
            <small class="mt-2 d-block text-center">Already Registered? <a href="/login">Login Now!</a></small>
        </main>
    </div>
</div>

    
@endsection