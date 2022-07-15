<header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                Vai alla pagina pubblica

            </a>

            @auth
            {{-- Link Area Riservata --}}
            <a class="navbar-brand" href="{{ route('admin.posts.index') }}">
                Area Riservata
            </a>

            <a class="navbar-brand" href="{{ route('admin.posts.create') }}">
                New Post
            </a>
            @endauth



            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a id="navbarDropdown" class="nav-link" href="#"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Esci
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>





</header>
