<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body">
    </div>
</div> <!-- .site-mobile-menu -->

<!-- NAVBAR -->
<header class="site-navbar mt-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="site-logo col-6"><a href="/">JobBoard</a></div>

            <nav class="mx-auto site-navigation">
                <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                    <li><a href="/" class="nav-link active">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="{{ route('listings') }}">Job Listings</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{ route('create') }}"> Post a Job</a></li>
                </ul>
            </nav>
            
            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                <div class="ml-auto">
                    @auth
                    <span class="lead text-white">
                        Welcome {{ auth()->user()->name }}
                    </span>
                    <li>
                        <a href="{{ route('manage') }}" class="btn btn-primary border-width-2 d-none d-lg-inline-block">
                            Manage Jobs
                        </a>
                    </li>
                    <li>
                        <form class="inline" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-info border-width-2 d-none d-lg-inline-block">Logout</button>
                        </form>
                    </li>
                    @else
                    <a href="{{ route('register') }}" class="btn btn-primary border-width-2 d-none d-lg-inline-block">
                        <span class="mr-2 icon-add"></span>Register
                    </a>
                    <a href="{{ route('login') }}" class="btn btn-primary border-width-2 d-none d-lg-inline-block">
                        <span class="mr-2 icon-lock_outline"></span>Log In
                    </a>
                    @endauth
                </div>
                <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
            </div>
        </div>
    </div>
</header>

<x-flash-message />