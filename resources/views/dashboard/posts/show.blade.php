@extends('dashboard.layouts.main')


@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mu-3 mt-3">{{ $post->title }}</h1>
                <img src="https://source.unsplash.com/1920x1080?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
                <div class="my-4">
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back</a>
                    <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
                </div>
                <article class="my-3 fs-5">
                    <p>{!! $post->body !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection
