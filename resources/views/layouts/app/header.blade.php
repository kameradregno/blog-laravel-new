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
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            @guest
                <li><a href="{{ route('login') }}" class="me-2 dropdown-item">Login</a></li>
                <li><a href="{{ route('register') }}" class="dropdown-item">Sign-up</a></li>
            @else
                <li><a href="{{ route('create') }}" class="dropdown-item"><svg version="1.1" id="Uploaded to svgrepo.com"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18"
                            height="18" class="mb-1 me-2" viewBox="0 0 32 32" xml:space="preserve">
                            <style type="text/css">
                                .blueprint_een {
                                    fill: #111918;
                                }
                            </style>
                            <path class="blueprint_een"
                                d="M12,0L4,8v24h24V0H12z M12,8H6.828l5.176-5.176L12,8z M26,30H6V9h7V2h13V30z M10,16v4h4v4h4v-4
                   h4v-4h-4v-4h-4v4H10z M15,17v-4h2v4h4v2h-4v4h-2v-4h-4v-2H15z" />
                        </svg>Buat Blog</a></li>
                <li><a href="{{ route('posts') }}" class="dropdown-item"><svg width="18" height="18"
                            class="mb-1 me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2 5C2 3.34315 3.34315 2 5 2H19C20.6569 2 22 3.34315 22 5V19C22 20.6569 20.6569 22 19 22H5C3.34315 22 2 20.6569 2 19V5ZM5 4C4.44772 4 4 4.44772 4 5V10H20V5C20 4.44772 19.5523 4 19 4H5ZM4 12V19C4 19.5523 4.44772 20 5 20H19C19.5523 20 20 19.5523 20 19V12H4ZM14 13C14.2652 13 14.5196 13.1054 14.7071 13.2929L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L14 15.4142L11.7071 17.7071L10.7071 18.7071C10.3166 19.0976 9.68342 19.0976 9.29289 18.7071C8.90237 18.3166 8.90237 17.6834 9.29289 17.2929L9.58579 17L9 16.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L8.29289 14.2929C8.48043 14.1054 8.73478 14 9 14C9.26522 14 9.51957 14.1054 9.70711 14.2929L11 15.5858L13.2929 13.2929C13.4804 13.1054 13.7348 13 14 13ZM11 7C11 6.44772 11.4477 6 12 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H12C11.4477 8 11 7.55228 11 7ZM7 8.75C7.9665 8.75 8.75 7.9665 8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75Z"
                                fill="#000000" />
                        </svg>Your Own Post</a></li>
                <li><a href="{{ route('logout') }}" class="dropdown-item"><svg fill="#000000" width="18" height="18"
                            class="mb-1 me-2" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.651 16.989h17.326c0.553 0 1-0.448 1-1s-0.447-1-1-1h-17.264l3.617-3.617c0.391-0.39 0.391-1.024 0-1.414s-1.024-0.39-1.414 0l-5.907 6.062 5.907 6.063c0.196 0.195 0.451 0.293 0.707 0.293s0.511-0.098 0.707-0.293c0.391-0.39 0.391-1.023 0-1.414zM29.989 0h-17c-1.105 0-2 0.895-2 2v9h2.013v-7.78c0-0.668 0.542-1.21 1.21-1.21h14.523c0.669 0 1.21 0.542 1.21 1.21l0.032 25.572c0 0.668-0.541 1.21-1.21 1.21h-14.553c-0.668 0-1.21-0.542-1.21-1.21v-7.824l-2.013 0.003v9.030c0 1.105 0.895 2 2 2h16.999c1.105 0 2.001-0.895 2.001-2v-28c-0-1.105-0.896-2-2-2z">
                            </path>
                        </svg>Logout</a></li>
            @endguest

        </ul>
    </div>

</header>
