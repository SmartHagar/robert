@extends('layouts.simple')

@section('content')
    <div class="bg-image" style="background-image: url('{{ asset('images/bukit-teletubbies.jpeg') }}');">
        <div class="row mx-0 bg-black-50">
            <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                <div class="p-4">
                    <p class="fs-3 fw-semibold text-white">
                        Absensi Guru kementrian Agama Kabupaten Jayapura
                    </p>
                    <p class="text-white-75 fw-medium">
                        Copyright &copy; <span data-toggle="year-copy"></span>
                    </p>
                </div>
            </div>
            <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center"
                style="background-color: rgba(255, 255, 255, 0.533);">
                <div class="content content-full">
                    <!-- Header -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/logo.png') }}" width="100" alt="" srcset="">
                    </div>
                    <div class="px-4 py-2 mb-4">
                        <h1 class="h3 fw-bold mt-4 mb-2">Selamat datang...</h1>
                        <h2 class="h5 fw-medium text-muted mb-0">Silahkan login</h2>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-signin px-4" action="{{ route('authenticate') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="login-email" name="email"
                                placeholder="Enter your email">
                            <label class="form-label" for="login-email">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="login-password" name="password"
                                placeholder="Enter your password">
                            <label class="form-label" for="login-password">Password</label>
                        </div>
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="login-remember-me"
                                    name="remember-me" checked>
                                <label class="form-check-label" for="login-remember-me">Remember Me</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
                                Login
                            </button>
                        </div>
                    </form>
                    <!-- END Sign In Form -->
                </div>
            </div>
        </div>
    </div>
@endsection
