<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">


    <a href="/studentPanel" class="navbar-brand sidebar-gone-hide">
        Student Panel
    </a>
    
    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>

    
    <form class="form-inline ml-auto">
        
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

                <a href="{{ route('studentPanel.profile.show', ['id' => Auth::id()]) }}" class="dropdown-item has-icon">
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



<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a href="/studentPanel" class="nav-link"><i class="fas fa-fire"></i><span>Student Panel</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i><span>Coop Programs</span></a>
                <ul class="dropdown-menu dropdown-border">
                    <li class="nav-item"><a href="{{ route('student.enrolled-coops') }}"  class="nav-link">Enrolled Coop Program</a></li>
                    <li class="nav-item"><a href="{{ route('student.coopRegistration.index') }}" class="nav-link">Available Coop Program</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-download"></i><span>Resources</span></a>
                <ul class="dropdown-menu dropdown-border">
                    <li class="nav-item"><a  class="nav-link">Certificates</a></li>
                    <li class="nav-item"><a  class="nav-link">Downloads</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a  data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-edit"></i><span>Research</span></a>
                <ul class="dropdown-menu dropdown-border">

                    <li class="nav-item"><a  class="nav-link">View All</a></li>

                    <li class="nav-item"><a class="nav-link">My Submissions</a></li>

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-comments"></i><span>Discuss</span></a>
                <ul class="dropdown-menu dropdown-border">
                    <li class="nav-item"><a class="nav-link">Supervisor Chat</a></li>
                    <li class="nav-item"><a  class="nav-link">Mentor Chat</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a data-toggle="dropdown" class="nav-link"><i class="fas fa-check-circle"></i><span>Tasks</span></a>
                
            </li>
        </ul>
    </div>
</nav>
