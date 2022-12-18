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
        <a href="/dashboard/create" class="btn btn-primary m-3">Insert New Borrower</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Book</th>
                    <th scope="col">Borrower</th>
                    {{-- <th scope="col">Status</th> --}}
                    <th scope="col">Date Borrowed</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->borrower()->first()->name }} </td>

                        {{-- <td>{{ $post->status }}
                            @switch($post->status)
                                @case(0)
                                    Available
                                @break

                                @case(1)
                                    Borrowed
                                @break

                                @case(2)
                                    Due
                                @break

                                @default
                                    Error, Try Again
                            @endswitch
                        </td> --}}

                        <td>{{ $post->borrow_date }} </td>
                        <td>{{ $post->due_date }} </td>

                        <td>

                            <form action="{{ route('dashboard.destroy', $post->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure removing this data?')"><span
                                        data-feather="delete"></button>
                            </form>

                            {{-- <form action="{{ route('librarian.resolve', $post->id) }}" method="POST"
                                enctype='multipart/form-data'>
                                @method('PUT')
                                @csrf
                                <input name="id" type="hidden" value={{ $post->id }}>
                                <button type="submit" class="btn bg-maincolor text-white"><i class="bi bi-x-square"></i>
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
