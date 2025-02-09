<div class="nav-item dropdown d-none d-md-flex me-3">
    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
        aria-label="Show notifications">
        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
                d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
            <path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
        <span class="badge bg-red"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
        <div class="card">
            <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet
                consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod
                repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
            </div>
        </div>
    </div>
</div>

<div class="nav-item dropdown">
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
        aria-label="Open user menu">
        <span class="avatar avatar-sm"
            style="background-image: url(@if (Auth::user()->avatar) {{ asset('storage/avatars/'.Auth::user()->avatar) }} @else https://api.proxeuse.com/avatars/api/?name={{ urlencode(Auth::user()->name) }}&color=fff&background={{ substr(md5(Auth::user()->name), 0, 6) }} @endif)">
        </span>
        <div class="d-none d-xl-block ps-2">
            <div>{{ Auth::user()->name }}</div>
            <div class="mt-1 small text-muted">{{ Auth::user()->email }}</div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        {{-- <a href="{{ route('profile') }}" class="dropdown-item">Profile Settings</a>
        @if ($logged_in_user->isAdmin())
        <a href="{{ route('admin.dashboard') }}" class="dropdown-item">Admin</a>
        @endif --}}
        @role('Admin')
            <div class="hr-text hr-text-left my-1 px-1">Admin Menu</div>
            <a href="{{route('users.index')}}" class="dropdown-item">Users</a>
            <a href="{{route('roles.index')}}" class="dropdown-item">Roles</a>
            <hr class="my-1">
        @endrole
        @impersonating($guard = null)
        <a class="dropdown-item" href="{{ route('impersonate.leave') }}">Leave impersonation</a>
        @endImpersonating

        <a href="#" class="dropdown-item">Feedback</a>
        <hr class="my-1">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">
                Logout
            </button>
        </form>
    </div>
</div>
