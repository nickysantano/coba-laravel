@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}!</h1>
    </div>
@endsection

{{-- @extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}!</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        {{-- <a href="/dashboard/posts/create" class="btn btn-primary m-3">Insert New Book</a> --}}
        {{-- <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role_id }}
                            @switch($user->role_id)
                                @case(0)
                                    <br>Student
                                @break

                                @case(1)
                                    <br>Admin
                                @break

                                @default
                                    <br>Error, Try Again
                            @endswitch
                        </td>

                        <td> --}}
                            {{-- <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>

                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></span></a> --}}

                            {{-- <form action="/dashboard/posts/{{ $user->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure deleting this data?')"><span
                                        data-feather="delete"></button>
                            </form> --}}
                        {{-- </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div> --}}
{{-- @endsection --}}
