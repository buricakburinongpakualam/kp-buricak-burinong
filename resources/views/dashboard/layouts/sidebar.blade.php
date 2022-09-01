<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column text-light">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard">
                    <span data-feather="home"></span>
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ' ' }}" href="/dashboard/posts">
                    <span data-feather="file-text"></span>
                    Wisata
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/photos*') ? 'active' : ' ' }}" href="/dashboard/photos">
                    <span data-feather="file-text"></span>
                    Foto Wisata
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-dark text-light border-0">Logout
                        <span data-feather="log-out"></span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
