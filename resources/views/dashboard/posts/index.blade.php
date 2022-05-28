@extends('dashboard/layouts/main')

@section('dashboard')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
    <div>
      <a href="/dashboard/posts/create" type="button" class="text-decoration-none btn btn-info">
        <i class="fa-solid fa-file-circle-plus"></i> Add New
      </a>
      <a href="/" type="button" class="text-decoration-none btn btn-warning">
        <i class="fa-solid fa-arrow-down-short-wide"></i> Short by
      </a>
      <a type="button" class="text-decoration-none btn btn-danger">
        <i class="fa-solid fa-check-double"></i> Select
      </a>
  </div>
</div>


@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success')}}
</div>
@endif



<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          </th>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)   
          <tr>
            <td class="py-2 align-middle">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </td>
            <td class="py-2 align-middle">{{ $loop->iteration}}</td>
            <td class="py-2 align-middle">{{ $post->title}}</td>
            <td class="py-2 align-middle">{{ $post->category->name}}</td>
            <td class="py-2 align-middle">
                <a href="/dashboard/posts/{{ $post->slug}}" type="button" class="badge bg-info" data-bs-toggle="tooltip" title="Show post detail">
                    <i class="fa-regular fa-eye"></i>
                </a>
                <a href="/" type="button" class="badge bg-warning"data-bs-toggle="tooltip" title="Edit post">
                    <i class="fa-solid fa-pen"></i>
                </a>
                <a type="button" class="badge bg-danger" data-bs-toggle="tooltip" title="Delete post">
                    <i class="fa-solid fa-trash-can"></i>
                </a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
</div>
@endsection