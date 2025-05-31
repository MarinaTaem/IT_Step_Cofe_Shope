<header id="header" style="background-color: rgba(63, 57, 57, 0.522); backdrop-filter: blur(20px);">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" title="" />
                    </a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu"
                        style="font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #ffffff">
                        <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('coffee')}}">Coffee</a></li>
                        <li><a href="{{ route('about_us')}}">About Us</li>
                        <li><a href="{{ route('login')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <ul>
                            <li><a href="{{ route('generic') }}">Generic</a></li>
                            <li><a href="{{ route('elements') }}">Elements</a></li>
                        </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>