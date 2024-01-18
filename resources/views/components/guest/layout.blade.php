<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $title ?? 'Sistem Informasi Perpustakaan' }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
    <link rel="stylesheet" href="/assets/vendor/fonts/materialdesignicons.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&family=Gabarito:wght@500;600;700;800&display=swap');

        * {
            font-family: 'Belanosima', sans-serif;
            font-family: 'Gabarito', cursive;
        }
    </style>

    @livewireStyles

</head>

<body class="bg-white">
    @include('layouts.payment_date')

    <x-guest.navbar></x-guest.navbar>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-primary alert-dismissible mb-3" role="alert">
                <h4 class="alert-heading d-flex align-items-center"><i
                        class="mdi mdi-check-circle-outline mdi-24px me-2"></i>Well done :)</h4>
                <hr>
                <p class="mb-0">{{ session('success') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger alert-dismissible mb-3" role="alert">
                <h4 class="alert-heading d-flex align-items-center"><i
                        class="mdi mdi-close-circle mdi-24px me-2"></i>Opps :(</h4>

                <hr>
                @foreach ($errors->all() as $error)
                    <p class="mb-0">{{ $error }}</p>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @elseif (session('warning'))
            <div class="alert alert-danger alert-dismissible mb-3" role="alert">
                <h4 class="alert-heading d-flex align-items-center"><i
                        class="mdi mdi-close-circle mdi-24px me-2"></i>Opps :(</h4>
                <hr>
                <p class="mb-0">{{ session('warning') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
    </div>
    {{ $slot }}

    <footer class="landing-footer bg-body footer-text">
        <div class="footer-top">
            <div class="container">
                <div class="row gx-0 gy-4 g-md-5 justify-content-between">
                    <div class="col-lg-5">
                        <a href="landing-page.html" class="app-brand-link mb-4">
                            <span class="app-brand-logo demo">
                                <img src="/image/logo.png" width="48px" height="48px" alt="">
                            </span>
                            <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">SMK - PP Negeri Jambi</span>
                        </a>
                        <p class="footer-text footer-logo-description mb-4">
                            SMK - PP Negeri Jambi adalah sebuah Sekolah Menengah Kejuruan yang berlokasi di Jambi, Indonesia. Dikenal sebagai lembaga pendidikan yang berkomitmen tinggi terhadap pengembangan keterampilan siswa, SMK - PP Negeri Jambi menawarkan program pendidikan yang berfokus pada kejuruan dan persiapan karir.
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 text-end">
                        <h6 class="footer-title mb-4">HALAMAN</h6>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a href="/login" class="footer-link">Login</a>
                            </li>
                            <li class="mb-3">
                                <a href="/register" class="footer-link">Register</a>
                            </li>
                            <li class="mb-3">
                                <a href="/" class="footer-link">Home</a>
                            </li>
                            <li class="mb-3">
                                <a href="/catalog-books" class="footer-link">Catalog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div
                class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
                <div class="mb-2 mb-md-0">
                    <span class="footer-text"> Made with ❤️ for SMK - PP NNegeri Jambi</span>
                </div>

            </div>
        </div>
    </footer>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @livewireScripts
</body>

</html>
