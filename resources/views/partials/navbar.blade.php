<nav class="navbar navbar-dark navbar-expand-lg bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('posts') ? 'active' : '' }}" href="/posts">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('categories') ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>

            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}!
                        </a>
                        <ul class="dropdown-menu">

                            {{-- @if ($user->role_id == '1') --}}

                            @switch(auth()->user()->role_id)
                                @case(0)
                                @break

                                @case(1)
                                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar"></i> My
                                            Dashboard</a></li>
                                @break

                                @default
                                    <br>Error, Try Again
                            @endswitch


                            {{-- @else
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar"></i> My
                                Dashboard Student</a></li>
                            @endif --}}




                            <li><a class="dropdown-item" href="#"></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i> Logout</button>
                                </form>
                            </li>


                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link" {{ request()->is('login') ? 'active' : '' }}><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                </ul>
            @endauth



        </div>
    </div>
</nav>
