<ul class="menu-inner py-1">
    <li class="menu-item {{ request()->is('home') ? 'active' : '' }}">
        <a href="/home" target="_blank" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
            <div data-i18n="Home">Home</div>
            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
        </a>
    </li>

    <li class="menu-item {{ request()->is('users') ? 'active' : '' }}">
        <a href="/users" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons mdi mdi-human"></i>
            <div data-i18n="Users">Users</div>
            <div class="badge bg-danger rounded-pill ms-auto">5</div>
        </a>
        <ul class="menu-sub">

            <li class="menu-item">
                <a href="{{ route('users.index') }}" class="menu-link">
                    <div data-i18n="Analytics">Data User</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('users.index') }}" class="menu-link">
                    <div data-i18n="Analytics">Data User</div>
                </a>
            </li>

        </ul>
    </li>
</ul>
