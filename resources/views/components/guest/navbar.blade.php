<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light py-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://library.livecanvas.com/sections/">
                <img class="img-fluid" src="/assets/img/favicon/favicon.ico" alt="" width="48px" height="48px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc"
                aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav_lc">
                <ul
                    class="d-none d-lg-flex navbar-nav mx-auto my-3 my-lg-0 position-absolute top-50 start-50 translate-middle">
                    <li class="nav-item me-4"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item me-4"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                </ul>
                <ul class="navbar-nav my-3 my-lg-0 d-lg-none">
                    <li class="nav-item me-4"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item me-4"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                </ul>
                <div class="ms-lg-auto">
                    @auth
                        <a class="btn btn-outline-primary me-2" href="/home">Home</a>
                    @else
                        <a class="btn btn-outline-primary me-2" href="/login">Login</a>
                        <a class="btn btn-primary" href="/register">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</div>
