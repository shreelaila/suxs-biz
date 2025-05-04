<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="slim" data-bs-theme="light">
@include('includes.loginhead')
<style>
    .was-validated .form-control:invalid,
    .form-control.is-invalid {
        background-image: none;
    }

    .alert-subtle-danger {
        padding: 5px 10px;
        font-size: 14px;
    }

    .alert-dismissible .btn-close {
        position: absolute;
        top: -5px;
        right: 0;
        z-index: 2;
        padding: 0.875rem 1.5rem;
    }

    .form-check-input:checked+.form-check-label {
        background-color: #e9f5ff;
        border-color: #007bff;
    }
</style>

<body>
    <main class="main" id="top">
        @yield('content')
    </main>
    @include('includes.scripts')
    @yield('inline')
</body>

</html>
