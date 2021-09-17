
@extends('layouts.main')

@section('container')

    <h2 class="text-center mb-3">{{ $title ?? 'Blog app' }}</h2>

    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <form action='/posts'>
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit" id="search">Button</button>
                </div>
            </form>
        </div>
    </div>

    @if($posts->count())
        <div class="card mb-3 mt-3 text-center">
            <img src="https://source.unsplash.com/1920x1080?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body">
                <a class="text-decoration-none text-danger" href="/post/{{ $posts[0]->slug }}"><h2 class="card-title">{{ $posts[0]->title }}</h2></a>
                <p>By <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name ?? 'Admin' }}</a> in <a class="text-decoration-none" href="/posts?category=/{{ $posts[0]->category->slug ?? '' }}">{{ $posts[0]->category->name ?? '' }} </a>{{ $posts[0]->updated_at->diffForHumans() }}</p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <h6><a class="btn btn-primary text-decoration-none" href="/post/{{ $posts[0]->slug }}">Read More</a></h6>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="p-3 position-absolute badge bg-dark">
                                <a class="text-decoration-none text-white" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            <img src="https://source.unsplash.com/1920x1080?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name ?? 'Admin' }}</a> {{ $post->updated_at->diffForHumans() ?? '?' }}</p>
                                <p class="card-text">{!! $post->excerpt !!}</p>
                                <h6><a class="btn btn-danger text-decoration-none" href="/post/{{ $post->slug }}">Read More</a></h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    @else
        <div class="card text-center p-5 mb-5">
            <h2>No Post Found</h2>
        </div>
    @endif


@endsection
