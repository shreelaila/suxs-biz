@extends('layouts.loginlayout')
@section('content')
    <style>

    </style>

    <body>
        <main class="main" id="top">
            <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
                <div class="bg-holder bg-auth-card-overlay" style="background-image:url('{{ asset('assets/bg/37.png') }}');">
                </div>
                <div class="row flex-center position-relative min-vh-100 g-0 ">
                    <div class="col-11 col-sm-10 col-xl-8">
                        <div class="card border border-translucent auth-card">
                            <div class="card-body pe-md-0">
                                <div class="row align-items-center gx-0 gy-7">
                                    <div
                                        class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                                        <div class="bg-holder"
                                            style="background-image:url('{{ asset('assets/bg/38.png') }}'); ">
                                        </div>
                                        <!--/.bg-holder-->

                                        <div
                                            class="position-relative px-4 px-lg-7 pt-7  pb-sm-5 text-center text-md-start ">
                                            <h3 class=" text-body-emphasis fs-7">SAARCCRM Authentication</h3>
                                            <p class="text-body-tertiary">Give yourself some hassle-free development process
                                                with the uniqueness of SAARCCRM!</p>
                                            <ul class="list-unstyled mb-0 w-max-content w-md-auto">
                                                <li class="d-flex align-items-center"><span
                                                        class="uil uil-check-circle text-success me-2"></span><span
                                                        class="text-body-tertiary fw-semibold">Fast</span></li>
                                                <li class="d-flex align-items-center"><span
                                                        class="uil uil-check-circle text-success me-2"></span><span
                                                        class="text-body-tertiary fw-semibold">Simple</span></li>
                                                <li class="d-flex align-items-center"><span
                                                        class="uil uil-check-circle text-success me-2"></span><span
                                                        class="text-body-tertiary fw-semibold">Responsive</span></li>
                                            </ul>
                                        </div>
                                        <div class="position-relative z-n1 d-none d-md-block text-center ">
                                            <img class="auth-title-box-img d-dark-none"
                                                src="{{ asset('assets/images/svg-1.svg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col mx-auto">
                                        <form action="" method="post" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="auth-form-box">

                                                @if (session()->has('success'))
                                                    <div class="alert alert-subtle-success d-flex align-items-center"
                                                        role="alert" style="height: 40px;">
                                                        <span class="far fa-check-circle text-success me-3"></span>
                                                        <p class="mb-0 flex-1" style="font-size: 13px;"> {{ session('success') }}</p>

                                                        <button class="btn-close btn-sm" type="button"
                                                            data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif
                                                @if (session()->has('error'))
                                                    <div class="alert alert-subtle-danger alert-dismissible fade show"
                                                        role="alert">
                                                        {{ session('error') }}
                                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                                            aria-label="Close"></button>
                                                    </div>
                                                @endif
                                                <div class="mb-3 text-start">
                                                    <label class="form-label" for="email">Email address</label>
                                                    <div class="form-icon-container">
                                                        <input class="form-control form-icon-input" id="email"
                                                            name="email" type="email" placeholder="name@example.com"
                                                            required /><span
                                                            class="fas fa-user text-body fs-9 form-icon"></span>
                                                    </div>
                                                </div>
                                                <div class="mb-3 text-start">
                                                    <label class="form-label" for="password">Password</label>
                                                    <div class="form-icon-container" data-password="data-password">
                                                        <input class="form-control form-icon-input pe-6" id="password"
                                                            name="password" type="password" placeholder="Password"
                                                            data-password-input="data-password-input" required /><span
                                                            class="fas fa-key text-body fs-9 form-icon"></span>
                                                        <button
                                                            class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                                                            data-password-toggle="data-password-toggle" type="button"><span
                                                                class="uil uil-eye show"></span><span
                                                                class="uil uil-eye-slash hide"></span></button>
                                                    </div>
                                                </div>
                                                <div class="row flex-between-center mb-7">
                                                    <div class="col-auto">
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input" id="basic-checkbox"
                                                                type="checkbox" />
                                                            <label class="form-check-label mb-0"
                                                                for="basic-checkbox">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto"><a class="fs-9 fw-semibold"
                                                            href="{{ route('forgot_password') }}">Forgot Password?</a>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary w-100 mb-3">Sign In</button>
                                        </form>

                                        <div class="text-center"><a class="fs-9 fw-bold" href="#">Create an
                                                account</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </main>

    </body>
@endsection
@section('inline')
@endsection
