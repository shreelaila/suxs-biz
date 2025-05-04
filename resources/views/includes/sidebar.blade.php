<nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">

                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Configuration
                    </p>
                    <hr class="navbar-vertical-line" />
                    <!--Configuration-->
                    <div class="nav-item-wrapper"> <a class="nav-link dropdown-indicator label-1 "
                            href="#nv-configuration" role="button" data-bs-toggle="collapse"
                            aria-expanded="{{ isset($menu) && $menu['level1'] == 'configuration' ? 'true' : 'false' }}"
                            aria-controls="nv-configuration">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon-wrapper"><span
                                        class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                    class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span
                                    class="nav-link-text">Configuration</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent {{ isset($menu) && $menu['level1'] == 'configuration' ? 'show' : ' ' }}"
                                data-bs-parent="#navbarVerticalCollapse" id="nv-configuration">
                                <li class="collapsed-nav-item-title d-none">Configutation
                                </li>
                                {{-- branch --}}
                                <li class="nav-item"><a
                                        class="nav-link {{ isset($menu) && $menu['level3'] == 'user' ? 'active' : '' }}"
                                        href="{{ route('user.manage_user_lists') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">User</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item"><a
                                    class="nav-link {{ isset($menu) && $menu['level3'] == 'user' ? 'active' : '' }}"
                                    href="{{ route('user.manage_user_lists') }}">
                                    <div class="d-flex align-items-center"><span class="nav-link-text">Move User</span>
                                    </div>
                                </a>
                            </li>

                            </ul>
                        </div>
                    </div>

            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer">
        <button
            class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span
                class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span
                class="navbar-vertical-footer-text ms-2">Collapsed
                View</span></button>
    </div>
</nav>
