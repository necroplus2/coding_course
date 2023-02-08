    <!-- Begin Menu Navigation
================================================== -->
    <header class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsWow"
            aria-controls="navbarsWow" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <!-- Begin Logo -->
            <a class="navbar-brand" href="/">
                {{-- <img src="{{ asset('images/course/logo.png') }}" alt="Affiliates - Free Bootstrap Template"> --}}
                ini logo
            </a>
            <!-- End Logo -->
            <!-- Begin Menu -->
            <div class="collapse navbar-collapse" id="navbarsWow">
                <!-- Begin Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kelas">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    @if (auth()->user() !== null)
                        <li class="nav-item dropdown">
                            <a class="nav-link highlight dropdown-toggle" href="#" id="dropdown01"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{{ auth()->user()->username }}</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                @if (auth()->user()->status == 'user')
                                    <a class="dropdown-item" href="/dasbor">Dasbor</a>
                                @elseif(auth()->user()->status == 'administrator' || auth()->user()->status == 'menthor')
                                    <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                @endif
                                <a class="dropdown-item" href="#">Akun</a>
                                <div class="dropdown-divider"></div>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="cursor: pointer">Logout</button>
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/masuk" class="nav-link">Login</a>
                        </li>
                    @endif
                </ul>
                <!-- End Menu -->
            </div>
        </div>
    </header>
    <!-- End Menu Navigation
================================================== -->

