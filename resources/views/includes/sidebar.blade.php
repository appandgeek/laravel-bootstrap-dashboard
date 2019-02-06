<!-- Sidebar -->
<aside id="sidebar" class="u-sidebar">
        <div class="u-sidebar-inner">
            <header class="u-sidebar-header">
                <a class="u-sidebar-logo" href="/">
                    <img class="img-fluid" src="{{ asset('img/logo.png') }}" width="124" alt="Stream Dashboard">
                </a>
            </header>

            <nav class="u-sidebar-nav">
                <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                    <!-- Dashboard -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link active" href="{{ url('/dashboard') }}">
                            <i class="fa fa-cubes u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                        </a>
                    </li>
                    <!-- End Dashboard -->

                    <!-- Base UI -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!"
                           data-target="#baseUI">
                            <i class="far fa-gem u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Base UI</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="baseUI" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/typography') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">T</span>
                                    <span class="u-sidebar-nav-menu__item-title">Typography</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/colors') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">C</span>
                                    <span class="u-sidebar-nav-menu__item-title">Colors</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Base UI -->

                    <!-- UI Components -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!"
                           data-target="#subMenu1">
                            <i class="far fa-paper-plane u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">UI Components</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="subMenu1" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <!-- Components -->
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/alerts') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">A</span>
                                    <span class="u-sidebar-nav-menu__item-title">Alerts</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/buttons') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">B</span>
                                    <span class="u-sidebar-nav-menu__item-title">Buttons</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/cards') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">C</span>
                                    <span class="u-sidebar-nav-menu__item-title">Cards</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/modals') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">M</span>
                                    <span class="u-sidebar-nav-menu__item-title">Modals</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/tooltips-and-popovers') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">T</span>
                                    <span class="u-sidebar-nav-menu__item-title">Tooltips & Popovers</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/others') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">O</span>
                                    <span class="u-sidebar-nav-menu__item-title">Other Components</span>
                                </a>
                            </li>
                            <!-- End Components -->
                        </ul>
                    </li>
                    <!-- End UI Components -->

                    <!-- Forms -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="{{ url('/forms') }}">
                            <i class="far fa-edit u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Forms</span>
                        </a>
                    </li>
                    <!-- End Forms -->

                    <!-- Tables -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="{{ url('/tables') }}">
                            <i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Tables</span>
                        </a>
                    </li>
                    <!-- End Tables -->

                    

                    <hr>

                    <!-- Documentation -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="{{ url('/docs') }}">
                            <i class="far fa-newspaper u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Documentation</span>
                        </a>
                    </li>
                    <!-- End Documentation -->

                    <!-- Free Download -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="https://getstartlaravel.com/template/laravel-bootstrap-dashboard">
                            <i class="fab fa-html5 u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Free Download</span>
                        </a>
                    </li>
                    <!-- End Free Download -->
                </ul>
            </nav>
        </div>
    </aside>
    <!-- End Sidebar -->