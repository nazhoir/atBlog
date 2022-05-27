@extends('layouts/main')

@section('content')
    <h1 class="mb-5">{{ $title }}</h1>

    <div class="row">
        <div class="col text-center">
            <img src="{{asset('src/img/'.$img)  }}" alt="" style="width: 150px;" class=" rounded-circle">
            <h2>Name : {{ $name }}</h2>
        </div>
    </div>
@endsection