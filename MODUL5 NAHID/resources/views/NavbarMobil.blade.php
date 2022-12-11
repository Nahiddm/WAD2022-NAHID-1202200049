@Auth
<section>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('ListCarmobil') }}">MyCar</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav position-absolute top-0 end-0 mt-2">
                        <li class="nav-item me-5">
                            <a type="button" class="btn btn-light" href=".\Add-Dani.php">Add Car</a>
                        </li>
                        <li class="nav-item dropdown me-5">
                            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
@endAuth

@guest
<section>
        <nav class="navbar navbar-lg bg-primary">
            <div class="container">
                <div class="justify-content-start">
                    <a class="navbar-brand text-white" href=".\index.php">Home</a>
                </div>

                <div class="justify-content-end">
                    <a class="navbar-brand text-white" href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </nav>
    </section>
@endguest