<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="location de véhicules">
    <meta name="author" content="AutomobileHouse">
    <title>XANOUMI | @yield('title', 'Dashboard')</title>
    <!-- Favicon -->
    <!-- <link rel="icon" href="{{ asset('dashboard/img/brand/favicon.png" type="image/png')}}"> -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/argon.css?v=1.2.0')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dashboard/css/dashboard.css') }}">

    <style>
            .x-iframe{
             width: 100% !important;
            height: 400px !important;
            }

            .xanoumi-circle{
  position: absolute;
    bottom: 5px;
    left: 13px;
    width: 134px;
    height: 50px;
    background-color: #fff;
}
    </style>
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light  bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="{{ route('accueil') }}">
                    <img src="{{ asset('img/xanoumi_logo.png') }}" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin-panel') }}">
                                <i class="ni ni-tv-2 "></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-th-large" aria-hidden="true"></i> Categories <i class="fa fa-chevron-right ml-i11" ></i>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">

                                <a href="{{ route('categorie.create') }}" class="dropdown-item">
                                    <i class="fa fa-th-large" aria-hidden="true"></i>
                                    <span>nouvelle categorie</span>
                                  </a>
                              <div class="dropdown-divider"></div>
                              <a href="{{ route('categorie.index') }}" class="dropdown-item">
                                <i class="fa fa-th-large" aria-hidden="true"></i>
                                <span>Toutes les categories</span>
                              </a>
                            </div>
                          </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-archive" aria-hidden="true"></i> Produits <i class="fa fa-chevron-right ml-i" ></i>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">

                                <a href="{{ route('products.create') }}" class="dropdown-item">
                                    <i class="fa fa-archive" aria-hidden="true"></i>
                                    <span>nouveau produit </i></span>
                                  </a>
                              <div class="dropdown-divider"></div>
                              <a href="{{ route('products.index') }}" class="dropdown-item">
                                <i class="fa fa-archive" aria-hidden="true"></i>
                                <span>Tous les produits</span>
                              </a>
                            </div>
                          </li>
    
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="nav-link-text">Ventes</span>
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                                <span class="nav-link-text">Stocks</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users')}}">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="nav-link-text">utilisateurs</span>
                            </a>
                        </li>

                        

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="nav-link-text">Deconnexion</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                {{ csrf_field() }}
                            </form>
                        </li>
                        
                        

                    </ul>
                    <!-- Divider -->

                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-dark border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ni ni-bell-55"></i>
                            </a>

                        </li>

                        

                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Salut !
                            </a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                  </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                    </div>
                                        <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>

                                <div class="dropdown-divider"></div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-warning pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">@yield('subtitle','Default')</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item "><a href="{{ route('admin-panel') }}" class="text-dark"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item "><a href="#" class="text-dark">@yield('title','Dashboard')</a></li>
                                    <li class="breadcrumb-item active " aria-current="page">@yield('subtitle','Default')</li>
                                </ol>
                            </nav>
                        </div>

                    </div>

                   
                    <!-- Card stats -->
                   @yield('cards')
                </div>
            </div>
        </div>
  
        <!-- Page content -->
        <div class="container-fluid mt--6">
            @yield('content')
            <!-- Footer -->
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            &copy; 2022 <a href="" class="font-weight-bold ml-1 text-dark" target="_blank"> <span class="text-warning">XANOUMI</span> .com </a>
                        </div>
                    </div>

                </div>
            </footer>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('dashboard/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('dashboard/vendor/js-cookie/js.cookie.js')}}"></script>
    <script src="{{ asset('dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{ asset('dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('dashboard/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src=" {{ asset('dashboard/vendor/chart.js/dist/Chart.extension.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('dashboard/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>