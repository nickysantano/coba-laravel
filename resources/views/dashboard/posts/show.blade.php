@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/list-book" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All My
                    Posts</a>
                <a href="/list-book/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>

                <form action="/list-book/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure deleting this data?')"><span
                            data-feather="delete"></span> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" alt="{{ $post->category->name }}"
                        class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
