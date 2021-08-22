@extends('layouts.simple')

@section('content')
<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-10">
            <!-- Logo -->
            <a class="font-w600 text-white tracking-wide" href="">
                <span class="smini-visible">
                    C<span class="opacity-75">d</span>
                </span>
                <span class="smini-hidden">
                    Chemist<span class="opacity-75">FunDays</span>
                </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Toggle Sidebar Style -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" data-toggle="layout" data-action="sidebar_style_toggle" href="javascript:void(0)">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </a>
                <!-- END Toggle Sidebar Style -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="gs_landing.html">
                        <i class="nav-main-link-icon fa fa-home"></i>
                        <span class="nav-main-link-name">Home</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="javascript:void(0)">
                        <i class="nav-main-link-icon fa fa-rocket"></i>
                        <span class="nav-main-link-name">Features</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="javascript:void(0)">
                        <i class="nav-main-link-icon fab fa-paypal"></i>
                        <span class="nav-main-link-name">Pricing</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="javascript:void(0)">
                        <i class="nav-main-link-icon fa fa-envelope"></i>
                        <span class="nav-main-link-name">Contact</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->

<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="link-fx font-size-lg font-w600 text-dark" href="/">
                Chemist<span class="text-primary">FunDays</span>
            </a>
            <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="d-flex align-items-center">
            <!-- Menu -->
            <div class="d-none d-lg-block">
                <ul class="nav-main nav-main-horizontal nav-main-hover">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="gs_landing.html">
                            <span class="nav-main-link-name">Informasi</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="javascript:void(0)">
                            <span class="nav-main-link-name">Daftar</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="/loginpage">
                            <span class="nav-main-link-name">Masuk</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Menu -->

            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-dual d-lg-none ml-1" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary-darker">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">
    <!-- Hero -->
        <div class="bg-white-90 overflow-hidden">
            <div class="hero-inner">
                <div class="content content-full">
                    <div class="row">
                        <div class="col-lg-5 text-center text-lg-left d-lg-flex align-items-lg-center justify-content-center">
                            <div>
                                <h1 class="h2 font-w700 mb-3">
                                    Chemist Fun Days XIII
                                </h1>
                                <p class="font-size-h4 font-w300 text-muted mb-5">
                                    kompetisi kimia yang akan membawa mu beradu ketangkasan mengasah otak dalam perlombaan kimia yang disediakan dengan cara yang menyenangkan.
                                </p>
                                <span class="d-inline-flex">
                                    <a class="btn btn-primary px-3 py-2" href="javascript:void(0)">
                                        Daftar
                                    </a>
                                </span>
                                <span class="ml-2 mr-2 mb-2 ml-lg-0 d-inline-flex">
                                    <a class="btn btn-alt-primary px-3 py-2" href="javascript:void(0)">
                                        Masuk
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 d-none d-flex justify-content-center">
                            <img class="img-fluid" src="{!! asset('media/favicons/logo.svg') !!}" srcset="{!! asset('media/favicons/logo.svg') !!}"  alt="Gambar gagal dimuat">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END Hero -->

    <!-- Section #1 -->
    <div class="bg-white">
        <div class="content content-full">
            <div class="py-5 push">
                <h2 class="mb-2 text-center">
                    Bagaimana cara mendaftar?
                </h2>
                <h3 class="font-w300 text-muted mb-0 text-center">
                    Geser kebawah
                </h3>
            </div>
        </div>
    </div>
    <!-- END Section #1 -->

    <!-- Section #2 -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="py-5 push">
                <h2 class="mb-2 text-center">
                    1. Pilih tombol daftar
                </h2>
                <h3 class="font-w300 text-muted mb-0 text-center">
                    Buat akun anda dengan mendaftarkan email & password
                </h3>
            </div>
        </div>
    </div>
    <!-- END Section #2 -->

    <!-- Section #3 -->
    <div class="bg-white">
        <div class="content content-full">
            <div class="py-5 push">
                <h2 class="mb-2 text-center">
                    2. Masuk
                </h2>
                <h3 class="font-w300 text-muted mb-0 text-center">
                    Silahkan masuk dengan akun yang telah anda buat
                </h3>
            </div>
        </div>
    </div>
    <!-- END Section #3 -->

    <!-- Section #4 -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="py-5 push">
                <h2 class="mb-2 text-center">
                    3. Registrasi
                </h2>
                <h3 class="font-w300 text-muted mb-0 text-center">
                    Isi dengan data lengkap sesuai dengan persyaratan yang ada
                </h3>
            </div>
        </div>
    </div>
    <!-- END Section #4 -->

    <!-- Section #5 -->
    <div class="bg-white">
        <div class="content content-full">
            <div class="py-5 push">
                <h2 class="mb-2 text-center">
                    4. Pengumuman atau Informasi
                </h2>
                <h3 class="font-w300 text-muted mb-0 text-center">
                    Anda dapat melihat update informasi mengenai Chemist Fun Days XIII pada menu informasi
                </h3>
            </div>
        </div>
    </div>
    <!-- END Section #5 -->
</main>
<!-- END Main Container -->

<!-- Dashmix JS -->
<script src="assets/js/dashmix.core.min.js"></script>
<script src="assets/js/dashmix.app.min.js"></script>
@endsection
