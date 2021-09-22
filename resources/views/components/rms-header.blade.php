<style>
    @media screen and (min-width: 1650px) {

        .custom-notification-box {
            margin-right: 120px !important;
        }
    }
</style>

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

                        <li class="">
                            <a class="nav-link" href="#" id="alertsDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell">Notification</i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">{{ count(auth()->user()->unreadNotifications) }}</span>
                            </a>

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in mr-4 custom-notification-box"
                                 aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Your recent notifications
                                </h6>

                                <!-- unread Notifications-->
                                @foreach(auth()->user()->unreadNotifications as $notification)
                                    <a class="d-flex align-items-center" href="/notification/{{ $notification->id }}">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-user-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">{{ $notification->created_at->diffForHumans() }}</div>
                                            @if($notification->type == 'App\Notifications\NewUserNotification')
                                                <span class="font-weight-bold">Your account created successfully!</span>
                                            @elseif($notification->type == 'App\Notifications\ReservationNotification')
                                                <span class="font-weight-bold">Recently you created a reservation!</span>
                                            @elseif($notification->type == 'App\Notifications\ActiveReservationNotification')
                                                <span class="font-weight-bold">Your recent reservation id - {{ $notification->data['reservation_id'] }} is Activate!</span>
                                            @endif
                                        </div>
                                    </a>
                                @endforeach

                                <!-- Read Notifications-->
                                @foreach(auth()->user()->notifications->whereNotNull('read_at') as $notification)
                                    <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">{{ $notification->created_at->diffForHumans() }}</div>
                                            @if($notification->type == 'App\Notifications\NewUserNotification')
                                                <p class="text-black-50">{{ $notification->data['name'] }}, recently register on your site!</p>
                                            @elseif($notification->type == 'App\Notifications\ReservationNotification')
                                                <p class="text-black-50">{{ $notification->data['customer_name'] }}, has a new reservation. Please check!</p>
                                            @endif
                                        </div>
                                    </a>
                                @endforeach

                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>

                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>
</header>
