<!-- Sidebar  -->
<nav id="sidebar">
    @if (!Auth::guest())
        <div class="sidebar-header">
            <h3>{{ Auth::user()->name}}</h3>
        </div>
    @endif

    <ul class="list-unstyled components">
        <li class="{{ Request::is('home*') ? 'active' : '' }}">
            <a href="{{ url('home') }}">
                <i class="fas fa-home"></i>
                Home
            </a>
        </li>
        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{{ url('users') }}">
                <i class="fas fa-users"></i>
                Users
            </a>
        </li>
        <li class="{{ Request::is('companies*') ? 'active' : '' }}">
            <a href="{{ url('companies') }}">
                <i class="fas fa-handshake"></i>
                Companies
            </a>
        </li>
        <li class="{{ Request::is('employees*') ? 'active' : '' }}">
            <a href="{{ url('employees') }}">
                <i class="fas fa-user-tie"></i>
                Employees
            </a>
        </li>
    </ul>
</nav>