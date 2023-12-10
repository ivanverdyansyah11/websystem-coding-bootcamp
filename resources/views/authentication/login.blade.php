@extends('layouts.main-homepage')

@section('main.authentication')
    <main class="authentication">
        <div class="container-fluid position-relative" style="height: 100%;">
            <div class="row" style="height: 100%;">
                <div class="col p-0 d-flex align-items-center position-relative wrapper-style">
                    {{-- <a class="logo-brand">
                        <img src="{{ asset('assets/images/brand/logo-brand.svg') }}" alt="Logo Brand" class="img-fluid">
                    </a> --}}
                    <div class="content-authentication">
                        <h1 class="title">Login</h1>
                        <form class="form">
                            <div class="row flex-column">
                                <div class="col-lg-9 col-xl-8 col-xxl-7 mb-2">
                                    <div class="input-group">
                                        <input type="email" id="email" placeholder=" " autocomplete="off" required>
                                        <label for="email" class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/icons/email.svg') }}" alt="Email Icon">
                                            <div class="line"></div>
                                            <span>Enter your email</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-xl-8 col-xxl-7 mb-4">
                                    <div class="input-group">
                                        <input type="password" id="password" placeholder=" " autocomplete="off" required>
                                        <label for="password" class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/icons/password.svg') }}" alt="Password Icon">
                                            <div class="line"></div>
                                            <span>Enter your password</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="button-primary d-flex align-items-center">
                                        <span>Login account</span>
                                        <img src="{{ asset('assets/images/icons/arrow-light.svg') }}" alt="Arrow Button Light">
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="link-redirect">Don't have an account? <a href="{{ route('register.index') }}">Register for Free</a></p>
                    </div>
                </div>
                <div class="col-6 p-0 d-none d-lg-inline-block banner banner-login"></div>
            </div>
        </div>
    </main>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $(".title").addClass('active-transition');
            $(".form").addClass('active-transition');
            $(".button-primary").addClass('active-transition');
            $(".link-redirect").addClass('active-transition');
            $(".banner").addClass('active-transition');
        });
    </script>
@endpush