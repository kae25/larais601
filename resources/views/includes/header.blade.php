<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">IS 601 - Laravel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item ">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/about">About Me</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    @yield('content')
</header>