<nav class="navbar navbar-top navbar-slim fixed-top navbar-expand" id="topNavSlim" data-navbar-appearance="darker">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand navbar-brand" href="../index.html">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">


        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
             data-bs-auto-close="outside" aria-expanded="false">  <span class="d-inline-block" style="height:10.2px;width:10.2px;"><span class="fa-solid fa-chevron-down fs-10"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
                <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                    <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />

                    </div>
                    {{-- <h6 class="mt-2 text-body-emphasis">{{  request()->session()->get('user')->email }}</h6> --}}
                </div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 3rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                    {{-- <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li> --}}
                    {{-- <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li> --}}
                    {{-- <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li> --}}
                    {{-- <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li> --}}
                    {{-- <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li> --}}
                </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                {{-- <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
                </ul>
                <hr /> --}}
                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href=""> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
            </div>
            </div>
        </li>
        </ul>
    </div>
</nav>
