<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom bg-white">

    <div class="col-md-3 mb-2 mb-md-0">
        <div class="container">
            <a href="{{ route('landing') }}" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="newspaper">
                    <path
                        d="M0 26.016q0 2.496 1.76 4.224t4.256 1.76h20q2.464 0 4.224-1.76t1.76-4.224v-22.016h-4v-1.984h-4v-2.016h-24v26.016zM4 26.016v-22.016h16v24h-13.984q-0.832 0-1.44-0.576t-0.576-1.408zM6.016 26.016h5.984v-2.016h-5.984v2.016zM6.016 22.016h8v-2.016h-8v2.016zM6.016 18.016h5.984v-2.016h-5.984v2.016zM6.016 14.016h12v-8h-12v8zM14.016 18.016h4v-2.016h-4v2.016zM16 22.016h2.016v-2.016h-2.016v2.016zM24 25.024v-21.024h2.016v21.024q0 0.384 0.288 0.704t0.704 0.288 0.704-0.288 0.288-0.704v-19.008h2.016v19.008q0 1.248-0.896 2.112t-2.112 0.864-2.144-0.864-0.864-2.112z">
                    </path>
                </svg>
                <h3 class="ms-2">News-ku</h3>
            </a>
        </div>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        @guest
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2">Features</a></li>
        <li><a href="#" class="nav-link px-2">Pricing</a></li>
        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li> 
        @else
        <li><span class="text-dark px-2"><b>Selamat datang,</b> <i>{{ Auth::user()->username }}</i></span></li>      
        @endguest
        
    </ul>

    <div class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            @guest
                <li><a href="{{ route('login') }}" class="me-2 dropdown-item">Login</a></li>
                <li><a href="{{ route('register') }}" class="dropdown-item">Sign-up</a></li>
            @else
                <li><a href="{{ route('create') }}" class="dropdown-item">Buat Blog</a></li>
                <li><form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                    @csrf
                    Logout
                </form></li>
            
            
                @endguest

        </ul>
    </div>

</header>
