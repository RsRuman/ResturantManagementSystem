<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RMS - Dashboard</title>

    <!-- Font Awesome Cdn-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/admin/sb-admin-2.min.css') }}" rel="stylesheet">

</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">RMS Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('adminDashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('foodMenus') }}" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Food Menus</span>
            </a>

        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('galleryImages') }}" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Photo Gallery</span>
            </a>

        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('customersReservation') }}" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Reservation</span>
            </a>

        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('stuffManagement') }}" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Stuff</span>
            </a>

        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

    </ul>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Top bar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">{{ count(auth()->user()->notifications->where('read_at', null)) }}</span>
                        </a>

                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>

                            <!-- Unread Notifications-->
                            @foreach(auth()->user()->unreadNotifications->where('read_at', null) as $notification)

                                <a class="dropdown-item d-flex align-items-center" href="/admin/notification/{{ $notification->id }}">
                                    @if($notification->type == 'App\Notifications\NewUserNotification')
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-user-alt text-white"></i>
                                            </div>
                                        </div>
                                    @elseif($notification->type == 'App\Notifications\ReservationNotification')
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-table text-white"></i>
                                            </div>
                                        </div>
                                    @elseif($notification->type == 'App\Notifications\ActiveReservationNotification')
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-table text-white"></i>
                                            </div>
                                        </div>
                                    @endif
                                    <div>
                                        <div class="small text-gray-500">{{ $notification->created_at->diffForHumans() }}</div>
                                        @if($notification->type == 'App\Notifications\NewUserNotification')
                                            <span class="font-weight-bold">{{ $notification->data['name'] }}, recently register on your site!</span>
                                        @elseif($notification->type == 'App\Notifications\ReservationNotification')
                                            <span class="font-weight-bold">{{ $notification->data['customer_name'] }}, has a new reservation. Please check!</span>
                                        @elseif($notification->type == 'App\Notifications\ActiveReservationNotification')
                                            <span class="font-weight-bold">Reservation id {{ $notification->data['reservation_id'] }}, has recently activated!</span>
                                        @endif
                                    </div>
                                </a>
                            @endforeach

                        <!-- Read Notifications-->
                            @foreach(auth()->user()->notifications->whereNotNull('read_at') as $notification)
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">{{ $notification->created_at->diffForHumans() }}</div>
                                        @if($notification->type == 'App\Notifications\NewUserNotification')
                                            {{ $notification->data['name'] }}, recently register on your site!
                                        @elseif($notification->type == 'App\Notifications\ReservationNotification')
                                            {{ $notification->data['customer_name'] }}, has a new reservation. Please check!
                                        @elseif($notification->type == 'App\Notifications\ActiveReservationNotification')
                                            Reservation id {{ $notification->data['reservation_id'] }}, has recently activated!
                                        @endif
                                    </div>
                                </a>
                            @endforeach
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>


                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>

                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>

                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="#"
                                         alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="#"
                                         alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="#"
                                         alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                         alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">RS Ruman</span>
                            <img class="img-profile rounded-circle"
                                 src="https://www.facebook.com/photo/?fbid=3765358340239369&set=a.103284516446788">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Reservation</h1>
                        @if(session('success'))
                        <div id="customSuccess" class="alert bg-success text-white" role="alert"> {{ session('success') }}</div>
                        @endif
                    </div>

                <!-- ################################################################################################################# -->
                <!-- ################################################################################################################# -->

                <div class="row">

                    <!-- Activate Reservation -->
                    <div class="col-6">
                        <div class="row">
                            <h1 class="text-center">All Activated Reservation</h1>
                            @foreach($activateReservations as $activateReservation)
                            <div class="col-lg-6">
                                <!-- Current Reservation -->
                                    <div class="bg-success rounded text-white p-2 mb-2">
                                        <h2 class="text-center text-white">Reservation No. {{ $activateReservation->id }}</h2>
                                        <div class="ml-0 mr-0 rounded row" style="background: #d65106">
                                            <p class="col-4 pt-3 text-center"><i class="fas fa-user"></i> {{ $activateReservation->customer_name }}</p>
                                            <p class="col-4 pt-3 text-center">Phone: {{ $activateReservation->customer_phone }}</p>
                                            <p class="col-4 pt-3 text-center">Date: {{ $activateReservation->date }}</p>
                                        </div>

                                        <div class="bg-white text-dark ml-0 mr-0 rounded row">
                                            <p class="col-4 pt-3 text-center">Time: From <span>{{ $activateReservation->from }}</span> To <span>{{ $activateReservation->to }}</span></p>
                                            <p class="col-4 pt-3 text-center">Number Of Person: {{ $activateReservation->number_of_person }}</p>
                                            <p class="col-4 pt-3 text-center">Status: {{ $activateReservation->status }}<span class="text-success"></span></p>
                                        </div>
                                    </div>

                                    <div class="text-center mb-2">
                                        <a href="#" class="btn btn-info">Update</a>
                                        <a href="/admin/customers-reservation/delete/{{ $activateReservation->id }}" class="btn btn-danger">Delete</a>
                                    </div>
                                <!-- End Current Reservation -->
                            </div>
                            @endforeach
                        </div>

                    </div>

                    <!-- Deactivate Reservation -->
                    <div class="col-6">
                        <h1 class="text-center">All Deactivated Reservation</h1>
                        <!-- Previous Reservation -->
                        <div class="row">

                            @foreach($deactivateReservations as $deactivateReservation)
                                <div class="col-lg-6">
                                    <div class="bg-info rounded text-white p-2 mb-2">
                                        <h2 class="text-center text-white">Reservation No. {{ $deactivateReservation->id }}</h2>
                                        <div class="ml-0 mr-0 rounded row" style="background: #d65106">
                                            <p class="col-4 pt-3 text-center"><i class="fas fa-user"></i> {{ $deactivateReservation->customer_name }}</p>
                                            <p class="col-4 pt-3 text-center">Phone: {{ $deactivateReservation->customer_phone }}</p>
                                            <p class="col-4 pt-3 text-center">Date: {{ $deactivateReservation->date }}</p>
                                        </div>
                                        <div class="bg-white text-dark ml-0 mr-0 rounded row">
                                            <p class="col-4 pt-3 text-center">Time: From <span>{{ $deactivateReservation->from }}</span> To <span>{{ $deactivateReservation->to }}</span></p>
                                            <p class="col-4 pt-3 text-center">Number Of Person: </p>
                                            <p class="col-4 pt-3 text-center">Status: <span class="text-success">{{ $deactivateReservation->status }}</span></p>
                                        </div>
                                    </div>

                                    <div class="text-center mb-2">
                                        <a href="/activate-reservation/user/{{ $deactivateReservation->user_id }}/reservation/{{ $deactivateReservation->id }}" class="btn btn-success">Activate</a>
                                        <a href="/admin/customers-reservation/delete/{{ $deactivateReservation->id }}" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            @endforeach
                            <!-- End Previous Reservation -->
                        </div>
                    </div>
                </div>

                <!-- ################################################################################################################# -->
                <!-- ################################################################################################################# -->

            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Live Dinner restaurant 2021</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/js/admin/jquery.min.js') }}"></script>
<script src="{{ asset('js/admin/bootstrap.bundle.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/admin/sb-admin-2.min.js') }}"></script>
<script>
    var hide = document.querySelector("#customSuccess");
    setTimeout(function (){
        hide.style.display = "none";
    },2000);
</script>

</body>

</html>
