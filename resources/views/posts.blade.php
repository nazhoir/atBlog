@extends('layouts/main')

@section('content')

    <h2 class="mb-3 fw-bold text-center">{{ $title }}</h2>

    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/posts" method="get">
          @if (request('category'))
              <input type="hidden" name="category" value="{{request('category') }}">
          @endif
          @if (request('author'))
              <input type="hidden" name="author" value="{{request('author') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search...." name="search" value="{{ request('search')}}">
            <button class="btn btn-outline-danger" type="button" id="button-addon2">Search</button>
          </div>
        </form>
      </div>
    </div>

    @if ($posts->count())       
    <div class="card mb-3 shadow-custom ">
        <img src="http://source.unsplash.com/1200x400/?{{ $posts[0]->category->name}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h3 class="card-title">
            <a class="fw-bold text-decoration-none stretched-link" href="/{{ $posts[0]->slug}}">{{ $posts[0]->title}}</a>
          </h3>
          <p>
            <small class="text-muted">
                by : <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username}}">{{ $posts[0]->author->name}}</a> in <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans()}}
            </small>
          </p>
          

          <p class="card-text">{{ $posts[0]->excerpt }}</p>
        </div>
    </div>
    

    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card shadow-custom">
                <div class="position-absolute bg-white text-white rounded px-3 py-2 mt-2 ms-2">
                    <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </div>
                <img src="http://source.unsplash.com/500x400/?{{ $post->category->name}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">
                    <a class="text-decoration-none" href="/{{ $post->slug}}">{{ $post->title}}</a>
                  </h5>
                  <p>
                      <small>
                        by : <a class="text-decoration-none" href="/posts?author={{ $post->author->username}}">{{ $post->author->name}}</a> 
                      </small>
                  </p>
                  <p class="card-text">{{ $post->excerpt}}</p>
                  <a href="/{{ $post->slug}}" class="btn bg-p">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @else
      <p class="text-center fs-4">No Post Found.</p>
    @endif


    
    {{ $posts->links()}}
@endsection