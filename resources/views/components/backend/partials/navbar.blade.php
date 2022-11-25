<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <!-- offcanvas Trigger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
        </button>

        <!-- offcanTriggervas  -->
        <a class="navbar-brand fw-bold text-uppercase" href="{{ url('/dashboard') }}">E-Pharmacy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <form class="d-flex">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="search"
                        aria-label=" username with two button addons" />
                    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/home') }}"><i class="bi bi-browser-edge"></i> Website</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <a class="dropdown-item" href="">
                                    <button class="btn"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                </a>
							</form>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-center" href="#"></a>Notification</li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="bi bi-envelope-dash"></i>messege1</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="bi bi-envelope-dash"></i>messege2</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="bi bi-envelope-dash"></i>messege3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
