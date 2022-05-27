

@extends('layouts/main')

@section('content')

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="fw-bolder">
                    <a class="text-decoration-none" href="/{{ $post->slug}}">{{ $post->title}}</a>
                </h2>
                <p>by : <a class="text-decoration-none" href="/posts?author={{ $post->author->username}}">{{ $post->author->name}}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans()}}
                </p>

                <figure class="figure my-3 position-relative">
                    <img src="http://source.unsplash.com/1200x600/?{{ $post->category->name}}" class="figure-img img-fluid rounded" alt="...">
                    <figcaption>
                        <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-decoration-none">
                            <i class="fa-solid fa-circle-info"></i> Info
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </figcaption>
                </figure>
                
                    

                <div class="mb-4">
                    <a href="#" class="btn btn-outline-dark">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="#" class="btn btn-outline-dark">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-outline-dark">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-outline-dark">
                        <i class="fa-brands fa-telegram"></i>
                    </a>
                    <a href="#" class="btn btn-outline-dark">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="btn btn-outline-dark">
                        <i class="fa-solid fa-print"></i>
                    </a>
                </div>
                <p class="lh-1">
                    <strong>
                        {!! $post->excerpt !!}
                    </strong>
                </p>
                
                <hr class="block-separator is-style-wide">
                

                <article class="my-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    
        
   
    
@endsection