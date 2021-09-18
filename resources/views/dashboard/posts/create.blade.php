@extends('dashboard.layouts.main')


@section('container')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create New Post</h1>
        </div>

        <div class="col-lg-8">
            <form method="post" action="/dashboard/posts">
                @csrf
                @method('post')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') ?? ''  }}" disabled readonly>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Slug</label>
                    <select class="form-select" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <input id="body" type="hidden" name="body">
                    <trix-editor input="body"></trix-editor>
                </div>


                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>


    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', (e) => {
            fetch(`/dashboard/posts/checkSlug?title=${title.value}`)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-accept', e => {
            e.preventDefault();
        })
    </script>

@endsection
