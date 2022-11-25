<header class="sticky-top">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <a href="/" class="navbar-brand"><img src="{{ url('/frontend/image/logo.jpg') }}"
                    style="height: 80px; width:150px; border-radius: 15px;"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ url('/') }}" class="nav-item nav-link">HOME</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          CATEGORIES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          @foreach ($categories as $category)
                          <li><a class="dropdown-item" href="{{ route('frontend.categories.products', $category->id)}}">{{ $category->title }}</a></li>
                          @endforeach
                        </ul>
                      </li>
                    <a href="{{ route('frontend.products') }}" class="nav-item nav-link">PRODUCT</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link">ABOUT</a>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link">CONTACT</a>
                </div>

                <form class="d-flex mx-5">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit"><i class="fas fa-search"></i></button>
                </form>

                <div class="navbar-nav">
                    @auth
                    <a href="{{ route('frontend.cart') }}" class="nav-item nav-link">Cart ({{ count(Auth::user()->cartItems) }})</a>
                    <a href="{{ url('/profile_details') }}" class="nav-item nav-link"><i class="fa-solid fa-user-tie"></i> {{ Auth::user()->name }}</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('post')
                        <button type="submit" class="btn btn-info">Log Out</button>
                    </form>
                    @else
                    <a href="{{ url('/login') }}" class="nav-item nav-link">Login</a>
                    <a href="{{ url('/register') }}" class="nav-item nav-link">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</header>
