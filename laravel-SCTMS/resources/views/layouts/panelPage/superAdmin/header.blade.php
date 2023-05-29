<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" onclick="changeBodyClass()" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>


    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <div class="d-sm-none d-lg-inline-block">Hello, {{ Auth::user()->name }}</div>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Account</div>

                <a href="{{ route('superAdminPanel.profile.show', ['id' => Auth::id()]) }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>

                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i>
                    {{ __('Logout') }} 
                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
            </div>
            @endguest
        </li>
    </ul>
</nav>


<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">
                coop Train Platform
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">

                CO-OP

            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>


    </aside>
</div>