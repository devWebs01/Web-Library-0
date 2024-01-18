<x-guest.layout>
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
                            <h1 class="fw-bold display-3">Temukan Buku Terbaik di Perpustakaan Kami</h1>
                        </div>
                    </div>
                    <div class="lc-block mb-5">
                        <div editable="rich">
                            <p class="lead text-muted">Selamat datang di sistem informasi perpustakaan sekolah. Kami
                                memahami betapa pentingnya akses mudah dan cepat yang dibutuhkan. Oleh karena itu, kami
                                menyediakan sistem informasi perpustakaan yang intuitif dan mudah digunakan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4" id="discover">
        <div class="container py-lg-7">
            <h1 class="fw-bold text-center text-primary">Sistem Informasi Perpustakaan <br> Dirancang
                Dengan Fitur
                Yang Menarik
            </h1>
            <div class="row mt-4 text-center">
                <div class="col-md-4">
                    <div class="lc-block mb-6 mb-md-0">
                        <div editable="rich">
                            <i class="mdi mdi-book-clock-outline mdi-48px"></i>
                            <h2 class="h4">Pesan Peminjaman Buku</h2>
                            <p class="lead">
                                Pesan buku secara online dan ambil di Perpustakaan tanpa antrian panjang.
                                <br>
                            </p>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-md-4">
                    <div class="lc-block mb-6 mb-md-0">
                        <div editable="rich">
                            <i class="mdi mdi-book-sync mdi-48px"></i>
                            <h2 class="h4">Peminjaman dan Pengembalian Buku</h2>
                            <p class="lead">
                                Temukan kemudahan dalam peminjaman dan pengembalian buku dengan akses cepat ke koleksi.
                            </p>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-md-4">
                    <div class="lc-block mb-6 mb-md-0">
                        <div editable="rich">
                            <i class="mdi mdi-abacus mdi-48px"></i>
                            <h2 class="h4">Denda Otomatis</h2>
                            <p class="lead">Nikmati layanan tanpa denda tambahan dan kenyamanan dalam pengelolaan
                                pinjaman Anda.</p>
                        </div>
                    </div>
                </div><!-- /col -->
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container py-lg-5">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="card bg-light shadow-sm lc-block p-4">
                        <div class="lc-block"><img class="img-fluid"
                                src="https://cdn.livecanvas.com/media/svg/pixeltrue/space-discovery.svg" width="512"
                                alt="Image desc"></div>
                        <div class="lc-block mb-4">
                            <div editable="rich">
                                <h2>Jelajahi kumpulan buku perpustakaan sekolah
                                </h2>
                                <p>Sekolah menyediakan berbagai judul yang bisa memenuhi minat dan kebutuhanmu. Jelajahi
                                    katalog kami sekarang dan temukan petualangan baru dalam halaman-halaman buku yang
                                    menarik</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="lc-block mb-5">
                        <div editable="rich">
                            <h2 class="text-primary">Memudahkan kamu dalam mendapatkan buku yang dicari</h2>
                            <p class="lead">Perpustakaan telah memiliki koleksi buku yang beragam dan lengkap,
                                mencakup berbagai genre dan topik yang akan memenuhi berbagai minat pembaca. Dari fiksi
                                hingga nonfiksi, buku-buku kami menawarkan pengetahuan, hiburan, dan inspirasi bagi
                                semua pengunjung. Temukan dan jelajahi koleksi buku kami yang kaya, dan dapatkan
                                pengalaman membaca yang memuaskan di perpustakaan kami..</p>
                        </div>
                    </div>
                </div><!-- /col -->
            </div>
        </div>
    </section>

    <section class="py-6 py-md-0">
        <div class="container py-md-6">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class="lc-block my-4">
                        <div editable="rich">
                            <h3 class="text-primary">Sistem Informasi Perpustakaan</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est. Etiam
                                diam metus, lobortis non augue at, condimentum purus.</p>
                        </div>
                    </div>
                    <div class="lc-block row row-cols-3 align-items-center">
                        <div class="col">
                            <h3 editable="inline" class="h2 mb-0 text-peimary">{{ $user }}</h3>
                            <span editable="inline" class="mb-0 text-muted"> Anggota </span>
                        </div>
                        <div class="col">
                            <h3 editable="inline" class="h2 mb-0 text-peimary">{{ $transaction }}</h3>
                            <span editable="inline" class="mb-0 text-muted"> Transaksi </span>
                        </div>
                        <div class="col">
                            <h3 editable="inline" class="h2 mb-0 text-peimary">{{ $book }}</h3>
                            <span editable="inline" class="mb-0 text-muted">Buku </span>
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

    <div class="container-fluid py-5 text-dark text-center">
        <div class="row justify-content-center">
            <div class="lc-block col-xl-8">
                <h3 editable="inline" class="fw-bold fst-italic">"Jadilah anak muda yang Produktif, sehingga nanti bisa
                    menjadi pribadi yang Profesional, yaitu dengan tidak melupakan dua hal IMAN dan TAKWA."</h3>
                <p class="fst-italic text-primary">BJ. Habibie</p>
            </div><!-- /lc-block -->
        </div>
    </div>
</x-guest.layout>
