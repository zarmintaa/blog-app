@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name ?? 'Admin' }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug ?? ''}}">{{ $post->category->name ?? '' }}</a></p>
                <img src="https://source.unsplash.com/1920x1080?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
                <article class="my-3 fs-5">
                    <p>{!! $post->body !!}</p>
                </article>
                <a class="btn btn-danger" href="/posts">Back</a>
            </div>
        </div>
    </div>
@endsection


