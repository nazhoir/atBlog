@extends('dashboard/layouts/main')

@section('dashboard')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
    <div>
        <a href="/dashboard/posts" type="button" class="text-decoration-none btn btn-info">
            <i class="fa-regular fa-circle-left"></i> Back
        </a>
        
        <a type="button" class="text-decoration-none btn btn-danger">
            <i class="fa-solid fa-check-double"></i> Select
        </a>
  </div>
</div>


<div class="row">
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" name="title" placeholder=" Title" onkeyup="createTextSlug()" required autofocus value="{{ old('title')}}">
                @error ('title') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label"> Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder=" Slug"  value="{{ old('slug')}}">
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <textarea class="form-control @error ('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" rows="3" placeholder="Excerpt" required></textarea>
                @error ('excerpt') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label"> Category</label>
                <select class="form-select " id="category_id" name="category_id" required>
                    {{-- <option selected>Post Category</option> --}}
                    @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                        <option value="{{ $category->id}}" selected>{{ $category->name}}</option>
                    @else
                        <option value="{{ $category->id}}">{{ $category->name}}</option>
                    @endif   
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                @error ('body') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <input id="body" type="hidden" name="body" class="@error ('body') is-invalid @enderror" required value="{{ old('body')}}">
                <trix-editor input="body" ></trix-editor>
            </div>

            <button type="submit" class="text-decoration-none btn btn-warning">
                <i class="fa-solid fa-paper-plane"></i> Publish
            </button>



            
        </form>
    </div>
</div>





















<script>
    function createTextSlug()
    {
        var title = document.getElementById("title").value;
                    document.getElementById("slug").value = generateSlug(title);
    }
    function generateSlug(text)
    {
        return text.toString().toLowerCase()
            .replace(/^-+/, '')
            .replace(/-+$/, '')
            .replace(/\s+/g, '-')
            .replace(/\-\-+/g, '-')
            .replace(/[^\w\-]+/g, '');
    }

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection