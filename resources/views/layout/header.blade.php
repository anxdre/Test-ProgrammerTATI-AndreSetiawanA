<header class="top-header">
    <nav class="navbar navbar-expand align-items-center justify-content-between gap-3">
        <div class="btn-toggle">
            <a href="#offcanvasPrimaryMenu" data-bs-toggle="offcanvas"><i class="material-icons-outlined">menu</i></a>
        </div>
        <ul class="navbar-nav gap-1 nav-right-links align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                   data-bs-auto-close="outside"
                   data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">more_vert</i>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow">
                    <div class="px-3 py-1 d-flex align-items-center justify-content-between">
                        <div class="dropdown">
                                <div><a id="btn-logout" class="dropdown-item d-flex align-items-center gap-2 py-2"
                                        href="{{route('auth.logout')}}"><i
                                            class="material-icons-outlined fs-6">logout</i>Logout</a></div>

                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>
