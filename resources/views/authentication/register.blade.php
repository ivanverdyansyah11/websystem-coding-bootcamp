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
                        <h1 class="title">Register</h1>
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 mb-2 pe-lg-1">
                                    <div class="input-group">
                                        <input type="text" id="firstname" placeholder=" " autocomplete="off" required>
                                        <label for="firstname" class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/icons/username.svg') }}" alt="User Icon">
                                            <div class="line"></div>
                                            <span>Enter your first name</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 ps-lg-1">
                                    <div class="input-group">
                                        <input type="text" id="lastname" placeholder=" " autocomplete="off" required>
                                        <label for="lastname" class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/icons/username.svg') }}" alt="User Icon">
                                            <div class="line"></div>
                                            <span>Enter your last name</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 pe-lg-1">
                                    <div class="input-group">
                                        <input type="date" id="birthdate" placeholder=" " autocomplete="off" required>
                                        <label for="birthdate" class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/icons/birthdate.svg') }}" alt="Birthdate Icon">
                                            <div class="line"></div>
                                            <span>Enter your birthdate</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 ps-lg-1">
                                    <div class="input-group">
                                        <input type="text" id="address" placeholder=" " autocomplete="off" required>
                                        <label for="address" class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/icons/address.svg') }}" alt="Address Icon">
                                            <div class="line"></div>
                                            <span>Enter your address</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="input-group">
                                        <input type="email" id="email" placeholder=" " autocomplete="off" required>
                                        <label for="email" class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/icons/email.svg') }}" alt="Email Icon">
                                            <div class="line"></div>
                                            <span>Enter your email</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
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
                                        <span>Create an account</span>
                                        <img src="{{ asset('assets/images/icons/arrow-light.svg') }}" alt="Arrow Button Light">
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="link-redirect">Already have an account? <a href="{{ route('login.index') }}">Login account</a></p>
                    </div>
                </div>
                <div class="col-6 p-0 d-none d-lg-inline-block banner banner-register"></div>
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