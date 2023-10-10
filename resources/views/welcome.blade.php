<x-guest.layout>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://library.livecanvas.com/sections/">
                    <img class="img-fluid" src="/assets/img/favicon/favicon.ico" alt="" width="48px"
                        height="48px">
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
                            <a class="btn btn-outline-primary me-2" href="#">Home</a>
                        @else
                            <a class="btn btn-outline-primary me-2" href="/login">Login</a>
                            <a class="btn btn-primary" href="/register">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <section class="py-2">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="https://cdn.livecanvas.com/media/svg/pixeltrue/blogging.svg"
                        class="d-block mx-lg-auto img-fluid wp-image-1461" alt="" loading="lazy" width="640"
                        height="">
                </div>
                <div class="col-lg-6">
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <h1 class="fw-bold display-3">Responsive left-aligned hero with image</h1>
                        </div>
                    </div>
                    <div class="lc-block mb-5">
                        <div editable="rich">
                            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et
                                metus id ligula malesuada placerat sit amet quis enim.</p>
                            <a class="text-decoration-none" href="#discover">
                                <div class="d-inline-flex align-items-baseline">
                                    <p>Discover More.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-4" id="discover">
        <div class="container py-lg-7">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="lc-block mb-4 pb-3 text-center text-md-start">
                    </div>
                    <div class="lc-block mb-6 mb-md-0">
                        <div editable="rich">
                            <h2 class="h4"> Lorem ipsum dolor sit</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a
                                lacus est, rtiam diam metus.&nbsp;<br></p>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-md-4">
                    <div class="lc-block mb-4 pb-3 text-center text-md-start"> </div>
                    <div class="lc-block mb-6 mb-md-0">
                        <div editable="rich">
                            <h2 class="h4">Consectetur adipiscing elit&nbsp;</h2>
                            <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a
                                lacus est, rtiam diam metus
                            </p>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-md-4">
                    <div class="lc-block mb-4 pb-3 text-center text-md-start">
                    </div>
                    <div class="lc-block mb-6 mb-md-0">
                        <div editable="rich">
                            <h2 class="h4">Suspendisse a lacus est</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a
                                lacus est, rtiam diam metus.&nbsp;<br></p>
                        </div>
                    </div>
                </div><!-- /col -->
            </div>
        </div>
    </section>
    <section class="pt-2 pt-md-5">
        <div class="container py-5 py-md-3">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-4 g-md-1 align-items-center">
                <div class="col">
                    <div class="lc-block mb-2 mb-md-0 text-center">
                        <img class="img-fluid w-75" src="https://cdn.livecanvas.com/media/svg/brand/apple-11.svg"
                            alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="lc-block mb-2 mb-md-0 text-center">
                        <img class="img-fluid w-75" src="https://cdn.livecanvas.com/media/svg/brand/netflix.svg"
                            alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="lc-block mb-2 mb-md-0 text-center">
                        <img class="img-fluid w-75" src="https://cdn.livecanvas.com/media/svg/brand/dribbble-4.svg"
                            alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="lc-block mb-2 mb-md-0 text-center">
                        <img class="img-fluid w-75" src="https://cdn.livecanvas.com/media/svg/brand/behance-4.svg"
                            alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="lc-block mb-2 mb-md-0 text-center">
                        <img class="img-fluid w-75" src="https://cdn.livecanvas.com/media/svg/brand/instagram-1.svg"
                            alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="lc-block mb-2 mb-md-0 text-center">
                        <img class="img-fluid w-75" src="https://cdn.livecanvas.com/media/svg/brand/stripe-3.svg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container py-lg-5">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="card bg-light shadow-sm lc-block p-4">
                        <div class="lc-block"><img class="img-fluid"
                                src="https://cdn.livecanvas.com/media/svg/pixeltrue/space-discovery.svg"
                                width="512" alt="Image desc"></div>
                        <div class="lc-block mb-4">
                            <div editable="rich">
                                <h2>The quick brown fox jumps over the lazy dog</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est.
                                    Etiam diam metus, lobortis non augue at, placerat viverra risus.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="lc-block mb-5">
                        <div editable="rich">
                            <h2>Etiam diam metus, lobortis non augue at, condimentum purus.</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a
                                lacus est.<br>Etiam diam metus, lobortis non augue at, condimentum purus.</p>
                        </div>
                    </div>
                    <div class="row row-cols-2 w-100">
                        <div class="lc-block">
                            <div class="d-inline-flex">
                                <div editable="rich" class="ms-2 align-self-center">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div><!-- /lc-block -->
                        <div class="lc-block">
                            <div class="d-inline-flex">
                                <div editable="rich" class="ms-2 align-self-center">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div><!-- /lc-block -->
                    </div>
                    <div class="row row-cols-2 w-100">
                        <div class="lc-block">
                            <div class="d-inline-flex">
                                <div editable="rich" class="ms-2 align-self-center">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div><!-- /lc-block -->
                        <div class="lc-block">
                            <div class="d-inline-flex">
                                <div editable="rich" class="ms-2 align-self-center">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div><!-- /lc-block -->
                    </div>
                </div><!-- /col -->
            </div>
        </div>
    </section>
    <section class="bg-light py-6">
        <div class="container py-md-6">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="lc-block mb-5">
                        <div editable="rich">
                            <h3 class="text-primary">Etiam diam metus, lobortis non augue at, condimentum purus.</h3>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a
                                lacus est.<br>Etiam diam metus, lobortis non augue at, condimentum purus.</p>
                        </div>
                    </div>
                    <div class="lc-block mb-4">
                        <div class="d-inline-flex">
                            <div editable="rich" class="ms-2 align-self-center">
                                <h5>Lorem ipsum dolor sit amet </h5>
                                <p class="text-muted">Etiam diam metus, lobortis non augue at, condimentum purus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lc-block">
                        <div class="d-inline-flex">
                            <div editable="rich" class="ms-2 align-self-center">
                                <h5>Suspendisse a lacus est</h5>
                                <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse a lacus est. </p>
                            </div>
                        </div>
                    </div><!-- /lc-block -->
                </div><!-- /col -->
                <div class="col-lg-7">
                    <div class="lc-block">
                        <img class="img-fluid mx-auto"
                            src="https://cdn.livecanvas.com/media/svg/pixeltrue/chatbot.svg" width="640">
                    </div>
                </div><!-- /col -->
            </div>
        </div>
    </section>
    <section class="bg-body py-6 py-md-0">
        <div class="container py-md-6">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class="lc-block mb-4">
                        <div editable="rich">
                            <h3 class="text-primary">The quick brown fox
                                jumps over the lazy dog</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est. Etiam
                                diam metus, lobortis non augue at, condimentum purus.</p>
                        </div>
                    </div>
                    <div class="lc-block row row-cols-3 align-items-center">
                        <div class="col">
                            <h3 editable="inline" class="h2 mb-0 text-peimary">100%</h3>
                            <span editable="inline" class="mb-0 text-muted"> Satisfaction </span>
                        </div>
                        <div class="col">
                            <h3 editable="inline" class="h2 mb-0 text-peimary">24/7</h3>
                            <span editable="inline" class="mb-0 text-muted"> Support </span>
                        </div>
                        <div class="col">
                            <h3 editable="inline" class="h2 mb-0 text-peimary">+400k</h3>
                            <span editable="inline" class="mb-0 text-muted">Products </span>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-lg-7">
                    <div class="lc-block">
                        <img class="img-fluid mx-auto" src="https://cdn.livecanvas.com/media/svg/pixeltrue/growth.svg"
                            width="640">
                    </div>
                </div><!-- /col -->
            </div>
        </div>
    </section>
    <section class="bg-light"> </section>
    <section class="bg-light pt-2 pt-md-5">
        <div class="py-5 container-fluid">
            <div class="row text-center">
                <div class="col-12">
                    <div class="lc-block mb-4">
                        <div editable="rich">
                            <h2 class="display-4 fw-bold"> Etiam diam metus, lobortis</h2>
                        </div>
                    </div>
                    <div class="lc-block mb-4">
                        <dive editable="rich">
                            <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a
                                lacus est.<br>Etiam diam metus, lobortis non augue at, condimentum purus.</p>
                        </dive>
                    </div>
                </div>
                <div class="lc-block text-secondary">
                    <div editable="rich">
                        <p>Vestibulum erat wisi</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
        </div>
    </section>
    <section class="bg-light" style="margin-bottom:-30vh">
        <div class="container py-5">
            <div class="row justify-content-center py-4">
                <!-- Single Price Plan Area -->
                <div class="col-12 col-lg-5">
                    <div class="lc-block text-center py-5 rounded bg-white text-dark h-100">
                        <div class="lc-block mb-4">
                            <img src="https://cdn.livecanvas.com/media/svg/pixeltrue/security.svg" alt=""
                                loading="lazy" class="" width="256" height="256">
                        </div>
                        <div class="lc-block">
                            <dive editable="rich">
                                <h2 class="fw-bold">Business</h2>
                            </dive>
                        </div>
                        <div class="lc-block small">
                            <div editable="rich">
                                <p>Perfect for
                                    <strong>agency</strong>
                                </p>
                            </div>
                        </div>
                        <div class="lc-block text-info display-4 font-weight-bold">
                            <span editable="inline" class="text-primary">$199</span>
                            <span editable="inline" class="text-muted rfs-6">/ per year</span>
                        </div>
                        <div class="lc-block">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 lc-block"> <span editable="inline">Build Unlimited Websites</span>
                                </li>
                                <li class="py-2 lc-block"> <span editable="inline">Updates for 1 Year</span>
                                </li>
                                <li class="py-2 lc-block"> <span editable="inline">Support for 1 Year</span>
                                </li>
                            </ul>
                            inline
                            <div class="lc-block">
                                <a class="btn btn-outline-primary" href="#" role="button">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="lc-block text-center py-5 bg-light rounded h-100">
                        <div class="lc-block mb-4">
                            <img src="https://cdn.livecanvas.com/media/svg/pixeltrue/discovery.svg" alt=""
                                loading="lazy" class="" width="256" height="256">
                        </div>
                        <div class="lc-block ">
                            <div editable="rich">
                                <h2 class="fw-bold">Personal</h2>
                            </div>
                        </div>
                        <div class="lc-block small">
                            <div editable="rich">
                                <p>Perfect for
                                    <strong>designers</strong>
                                </p>
                            </div>
                        </div>
                        <div class="lc-block text-info display-4">
                            <span editable="inline" class="text-primary">$79</span>
                            <span editable="inline" class="text-muted rfs-6">/ per year</span>
                        </div>
                        <div class="lc-block">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 lc-block"> <span editable="inline">Build Unlimited Websites</span>
                                </li>
                                <li class="py-2 lc-block"> <span editable="inline">Updates for 1 Year</span>
                                </li>
                                <li class="py-2 lc-block"> <span editable="inline">Support for 1 Year</span>
                                </li>
                            </ul>
                        </div>
                        <div class="lc-block">
                            <a class="btn btn-outline-primary" href="#" role="button">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-secondary bg-dark ">
        <div class="container" style="padding-top:30vh">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col py-4">
                    <div class="lc-block d-flex">
                        <div class="px-4">
                            <div editable="rich">
                                <h5 class="text-white">Etiam diam metus, lobortis?&nbsp;</h5>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est.
                                    Etiam diam metus, lobortis non augue at, condimentum purus. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col py-4">
                    <div class="lc-block d-flex">
                        <div class="px-4">
                            <div editable="rich">
                                <h5 class="text-white">Lorem ipsum dolor sit amet?</h5>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est.
                                    Etiam diam metus, lobortis non augue at, condimentum purus. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mb-5">
                <div class="col py-4">
                    <div class="lc-block d-flex">
                        <div class="px-4">
                            <div editable="rich">
                                <h5 class="text-white">Consectetur adipiscing elit? </h5>
                                <p class=""> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                    a lacus est. Etiam diam metus, lobortis non augue at, condimentum purus. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col py-4">
                    <div class="lc-block d-flex">
                        <div class="px-4">
                            <div editable="rich">
                                <h5 class="text-white"> Etiam diam metus? </h5>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est.
                                    Etiam diam metus, lobortis non augue at, condimentum purus. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="lc-block text-center"><span class="badge bg-secondary"> Get started </span></div>
                </div><!-- /col -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="lc-block text-center pb-5">
                        <div>
                            <h2 class="display-4">Lorem ipsum dolor sit amet, consectetur<br></h2>
                            <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus
                                est.&nbsp;<br>Etiam diam metus, lobortis non augue at, condimentum purus.</p>
                        </div>
                    </div>
                    <div class="lc-block text-center mb-5">
                        <a class="btn btn-success btn-lg" href="#" role="button">Buy Now -&gt;</a>
                    </div>
                </div><!-- /col -->
            </div>
        </div>
    </section>
    <p class="py-5 small text-center text-muted"> Powered by <a href="https://library.livecanvas.com/">LiveCanvas
            Bootstrap code snippets</a>
    </p>
</x-guest.layout>