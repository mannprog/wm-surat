<div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-1 {{ Route::is('dashboard') ? 'active' : '' }}"
                    aria-current="page" href="{{ route('dashboard') }}">
                    <i data-feather="home" style="height: 15px"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-1 {{ Route::is('surat-masuk*') ? 'active' : '' }}"
                    href="{{ route('surat-masuk.index') }}">
                    <i data-feather="inbox" style="height: 15px"></i>
                    Surat Masuk
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-1 {{ Route::is('surat-keluar*') ? 'active' : '' }}"
                    href="{{ route('surat-keluar.index') }}">
                    <i data-feather="send" style="height: 15px"></i>
                    Surat Keluar
                </a>
            </li>
        </ul>

        <hr class="my-3">

        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
            <span>Settings</span>
        </h6>

        <ul class="nav flex-column pb-lg-3">
            @role('admin|headman')
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-1 {{ Route::is('users.index') ? 'active' : '' }}"
                        href="{{ route('users.index') }}">
                        <i data-feather="users" style="height: 15px"></i>
                        Users
                    </a>
                </li>
            @endrole
            <li class="nav-item">
                <form action="{{ route('authLogout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link d-flex align-items-center gap-1"><i data-feather="log-out"
                            style="height: 15px"></i>
                        Logout</button>
                </form>
            </li>
        </ul>
    </div>
</div>
