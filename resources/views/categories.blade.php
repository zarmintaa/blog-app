
@extends('layouts.main')

@section('container')

    <h1 class="mb-3">Categories</h1>

    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex p-0 align-items-center">
                        <a href="/posts?category/{{ $category->slug }}" style="background-color: rgba(0,0,0,.7);" class="text-decoration-none p-4 flex-fill text-white"><h5 class="card-title text-center">{{ $category->name }}</h5></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
