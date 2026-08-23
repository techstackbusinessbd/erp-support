<nav class="app-header navbar navbar-expand bg-body">
    <!-- Container -->
    <div class="container-fluid">
        <!-- Start Navbar Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="/dashboard" class="nav-link">Home</a>
            </li>
        </ul>
        
        <!-- End Navbar Links -->
        <ul class="navbar-nav ms-auto">
            <!-- User Dropdown Menu -->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    @if(auth()->user()?->profile_photo_path)
                        <img src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}" class="user-image rounded-circle shadow" alt="User Image">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()?->name ?? 'User') }}" class="user-image rounded-circle shadow" alt="User Image">
                    @endif
                    <span class="d-none d-md-inline">{{ auth()->user()?->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!-- User image -->
                    <li class="user-header text-bg-primary">
                        @if(auth()->user()?->profile_photo_path)
                            <img src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}" class="rounded-circle shadow" alt="User Image">
                        @else
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()?->name ?? 'User') }}" class="rounded-circle shadow" alt="User Image">
                        @endif
                        <p>
                            {{ auth()->user()?->name }}
                            <small>Member since {{ auth()->user()?->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-default btn-flat float-end">Sign out</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
