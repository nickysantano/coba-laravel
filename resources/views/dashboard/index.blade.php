@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Borrowed Books</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        {{-- <a href="/dashboard/posts/create" class="btn btn-primary m-3">Insert New Book</a> --}}
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Book</th>
                    <th scope="col">Borrower</th>
                    <th scope="col">Date Borrowed</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->borrower()->get('name') }} </td>
                        <td>{{ $post->borrow_date }} </td>
                        <td>{{ $post->due_date }} </td>

                        <td>
                            <a href="/list-book/{{ $post->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>

                            <a href="/list-book/{{ $post->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></span></a>

                            <form action="/list-book/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure deleting this data?')"><span
                                        data-feather="delete"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
