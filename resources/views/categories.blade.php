

@extends('layouts/main')

@section('content')

<h1 class="mb-3">Categories</h1>

<div class="row">
    @foreach ($categories as $category)
    <div class="col-md-4">
        <a href="/posts?category={{ $category->slug }}">
            <div class="card text-white">
                <img src="http://source.unsplash.com/500x500/?{{ $category->name}}" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(214, 8, 8, 0.507)">
                  <h5 class="card-title text-center flex-fill">{{ $category->name}}</h5>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

   

    
    
@endsection