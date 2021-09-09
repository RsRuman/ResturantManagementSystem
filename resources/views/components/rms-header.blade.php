<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="{{ route('reservation') }}">Reservation</a>
                            <a class="dropdown-item" href="{{ route('stuff') }}">Stuff</a>
                            <a class="dropdown-item" href="{{ route('gallery') }}">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="#">blog</a>
                            <a class="dropdown-item" href="#">blog Single</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    @guest
                    <li class="nav-item"><a class="nav-link" href="/login" >Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/register" >Register</a></li>
                    @endguest

                    @auth
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" id="dropdown-a" data-toggle="dropdown"><i class="fa fa-user"></i> {{ auth()->user()->name }}</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                            </div>

                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>
</header>
