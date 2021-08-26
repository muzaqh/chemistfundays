@extends('layouts.simple')

@section('js_after')
    {{-- jquery-valiadation --}}
    <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    {{-- signup js file --}}
    <script src="{{ asset('js/pages/signin.js') }}"></script>
@endsection

@section('css_after')
    {{-- theme Dashmix --}}
    <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xplay.css') }}">
@endsection

@section('content')
<div id="page-container" class="side-trans-enabled">

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="row no-gutters justify-content-center bg-body-dark">
            <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
                <!-- Sign In Block -->
                <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('{{ asset("media/photos/photo20@2x.jpg") }}');">
                    <div class="row no-gutters">
                        <div class="col-md-6 order-md-1 bg-white">
                            <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                <!-- Header -->
                                <div class="mb-2 text-center">
                                    <a class="link-fx font-w700 font-size-h3" href="/">
                                        <span class="text-dark">Chemist</span><span class="text-primary">Fun Days</span>
                                    </a>
                                    <p class="text-uppercase font-w700 font-size-sm text-muted">Masuk</p>
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <form class="js-validation-signin" method="POST" novalidate="novalidate">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alt {{ $errors->has('email') ? 'is-invalid' : '' }}" id="login-email" name="email" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-alt" id="login-password" name="password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left">
                                        <div class="custom-control custom-checkbox custom-control-primary">
                                            <input type="checkbox" class="custom-control-input" id="login-remember-me" name="remember" checked="">
                                            <label class="custom-control-label" for="login-remember-me">Ingat saya</label>
                                        </div>
                                        <div class="font-w600 font-size-sm py-1">
                                            <a href="javascript:void(0)">Lupa password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-hero-primary">
                                            <a href="/dashboard">
                                            </a>
                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Masuk
                                        </button>
                                    </div>
                                    <div class="form-group text-center">
                                        <a class="font-w600 font-size-sm" href="{{ route('register') }}" >Daftar</a>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                        <div class="col-md-6 order-md-0 bg-primary-dark-op d-flex align-items-center">
                            <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-white font-w600 mb-1">
                                            Silahkan masuk dengan akun yang telah dibuat!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Sign In Block -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
@endsection
