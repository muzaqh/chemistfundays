@extends('layouts.simple')

@section('js_after')
    {{-- jquery-valiadation --}}
    <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    {{-- signup js file --}}
    <script src="{{ asset('js/pages/signin.js') }}"></script>
@endsection

@section('css_after')
    {{-- theme Dashmix --}}
    <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xeco.css') }}">
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
                                    <a class="link-fx font-w700 font-size-h1" href="index.html">
                                        <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                                    </a>
                                    <p class="text-uppercase font-w700 font-size-sm text-muted">Sign In</p>
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <form class="js-validation-signin" method="POST" novalidate="novalidate">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alt {{ $errors->has('email') ? 'is-invalid' : '' }}" id="login-email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-alt" id="login-password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left">
                                        <div class="custom-control custom-checkbox custom-control-primary">
                                            <input type="checkbox" class="custom-control-input" id="login-remember-me" name="remember-me" checked="">
                                            <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                                        </div>
                                        <div class="font-w600 font-size-sm py-1">
                                            <a href="javascript:void(0)">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-hero-primary">
                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                        </button>
                                    </div>
                                    <div class="form-group text-center">
                                        <a class="font-w600 font-size-sm" href="{{ route('register') }}" >Create New Account</a>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                        <div class="col-md-6 order-md-0 bg-primary-dark-op d-flex align-items-center">
                            <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                <div class="media">
                                    <a class="img-link mr-3" href="javascript:void(0)">
                                        <img class="img-avatar img-avatar-thumb" src="{{ asset('media/avatars/avatar7.jpg') }}" alt="">
                                    </a>
                                    <div class="media-body">
                                        <p class="text-white font-w600 mb-1">
                                            My Fucking Fisrt Web Development!
                                        </p>
                                        <a class="text-white-75 font-w600" href="https://instagram.com/manusiainstan_">muzaqh</a>
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
