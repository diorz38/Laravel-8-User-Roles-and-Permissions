<li class="nav-item @if(Route::is('home') ) active @endif">
    <a class="nav-link" href="{{ route('home') }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <!-- Download SVG icon from http://tabler-icons.io/i/home -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
        </span>
        <span class="nav-link-title">
            Home
        </span>
    </a>
</li>
{{-- <li class="nav-item {{ request()->is('*metadata*') ? 'active' : ''}} dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button"
        aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <i class="ti ti-indent-increase"></i>
        </span>
        <span class="nav-link-title">
            Metadata
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <a class="dropdown-item {{ request()->is('*basis-kegiatan') ? 'active' : ''}}" href="{{ route('frontend.metadata.basis_kegiatan') }}">
                    Basis Kegiatan
                </a>
                <a class="dropdown-item {{ request()->is('*kode') ? 'active' : ''}}" href="{{ route('frontend.metadata.kode') }}">
                    Kode
                </a>
                <a class="dropdown-item {{ request()->is('*seksi') ? 'active' : ''}}" href="{{ route('frontend.metadata.seksi') }}">
                    KF/SKF
                </a>
            </div>
        </div>
    </div>
</li>
<li class="nav-item {{ request()->is('*interface*') ? 'active' : ''}} dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button"
        aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <!-- Download SVG icon from http://tabler-icons.io/i/package -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                <line x1="12" y1="12" x2="20" y2="7.5" />
                <line x1="12" y1="12" x2="12" y2="21" />
                <line x1="12" y1="12" x2="4" y2="7.5" />
                <line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
        </span>
        <span class="nav-link-title">
            Interface
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <a class="dropdown-item {{ request()->is('*empty') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.empty') }}">
                    Empty page
                </a>
                <a class="dropdown-item {{ request()->is('*accordion') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.accordion') }}">
                    Accordion
                </a>
                <a class="dropdown-item {{ request()->is('*blank') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.blank') }}">
                    Blank page
                </a>
                <a class="dropdown-item {{ request()->is('*buttons') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.buttons') }}">
                    Buttons
                </a>
                <a class="dropdown-item {{ request()->is('*cards') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.cards') }}">
                    Cards
                </a>
                <a class="dropdown-item {{ request()->is('*cards-masonry') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.cards-masonry') }}">
                    Cards Masonry
                </a>
                <a class="dropdown-item {{ request()->is('*colors') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.colors') }}">
                    Colors
                </a>
                <a class="dropdown-item {{ request()->is('*dropdowns') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.dropdowns') }}">
                    Dropdowns
                </a>
                <a class="dropdown-item {{ request()->is('*icons') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.icons') }}">
                    Icons
                </a>
                <a class="dropdown-item {{ request()->is('*modals') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.modals') }}">
                    Modals
                </a>
                <a class="dropdown-item {{ request()->is('*maps') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.maps') }}">
                    Maps
                </a>
                <a class="dropdown-item {{ request()->is('*map-fullsize') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.map-fullsize') }}">
                    Map fullsize
                </a>
                <a class="dropdown-item {{ request()->is('*maps-vector') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.maps-vector') }}">
                    Vector maps
                </a>
            </div>
            <div class="dropdown-menu-column">
                <a class="dropdown-item {{ request()->is('*navigation') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.navigation') }}">
                    Navigation
                </a>
                <a class="dropdown-item {{ request()->is('*charts') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.charts') }}">
                    Charts
                </a>
                <a class="dropdown-item {{ request()->is('*pagination') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.pagination') }}">
                    Pagination
                </a>
                <a class="dropdown-item {{ request()->is('*skeleton') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.skeleton') }}">
                    Skeleton
                </a>
                <a class="dropdown-item {{ request()->is('*tabs') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.tabs') }}">
                    Tabs
                </a>
                <a class="dropdown-item {{ request()->is('*tables') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.tables') }}">
                    Tables
                </a>
                <a class="dropdown-item {{ request()->is('*carousel') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.carousel') }}">
                    Carousel
                </a>
                <a class="dropdown-item {{ request()->is('*lists') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.lists') }}">
                    Lists
                </a>
                <a class="dropdown-item {{ request()->is('*typography') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.typography') }}">
                    Typography
                </a>
                <a class="dropdown-item {{ request()->is('*markdown') ? 'active' : ''}}" href="{{ route('frontend.interface.tabler.markdown') }}">
                    Markdown
                </a>
                <div class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication"
                        data-bs-toggle="dropdown" role="button" aria-expanded="false">
                        Authentication
                    </a>
                    <div class="dropdown-menu">
                        <a href="./sign-in.html" class="dropdown-item">Sign in</a>
                        <a href="./sign-up.html" class="dropdown-item">Sign up</a>
                        <a href="./forgot-password.html" class="dropdown-item">Forgot
                            password</a>
                        <a href="./terms-of-service.html" class="dropdown-item">Terms of
                            service</a>
                        <a href="./auth-lock.html" class="dropdown-item">Lock screen</a>
                    </div>
                </div>
                <div class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#sidebar-error"
                        data-bs-toggle="dropdown" role="button" aria-expanded="false">
                        Error pages
                    </a>
                    <div class="dropdown-menu">
                        <a href="./error-404.html" class="dropdown-item">404 page</a>
                        <a href="./error-500.html" class="dropdown-item">500 page</a>
                        <a href="./error-maintenance.html" class="dropdown-item">Maintenance
                            page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<li class="nav-item {{ request()->is('*forms') ? 'active' : ''}}">
    <a class="nav-link" href="{{ route('frontend.tabler.forms') }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <polyline points="9 11 12 14 20 6" />
                <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
            </svg>
        </span>
        <span class="nav-link-title">
            Forms
        </span>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" role="button"
        aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
            </svg>
        </span>
        <span class="nav-link-title">
            Extra
        </span>
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="./activity.html">
            Activity
        </a>
        <a class="dropdown-item" href="./gallery.html">
            Gallery
        </a>
        <a class="dropdown-item" href="./invoice.html">
            Invoice
        </a>
        <a class="dropdown-item" href="./search-results.html">
            Search results
        </a>
        <a class="dropdown-item" href="./pricing.html">
            Pricing cards
        </a>
        <a class="dropdown-item" href="./users.html">
            Users
        </a>
        <a class="dropdown-item" href="./license.html">
            License
        </a>
        <a class="dropdown-item" href="./music.html">
            Music
        </a>
        <a class="dropdown-item" href="./widgets.html">
            Widgets
        </a>
        <a class="dropdown-item" href="./wizard.html">
            Wizard
        </a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
        role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <rect x="4" y="4" width="6" height="5" rx="2" />
                <rect x="4" y="13" width="6" height="7" rx="2" />
                <rect x="14" y="4" width="6" height="7" rx="2" />
                <rect x="14" y="15" width="6" height="5" rx="2" /></svg>
        </span>
        <span class="nav-link-title">
            Layout
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <a class="dropdown-item" href="./layout-horizontal.html">
                    Horizontal
                </a>
                <a class="dropdown-item" href="./layout-vertical.html">
                    Vertical
                </a>
                <a class="dropdown-item" href="./layout-vertical-transparent.html">
                    Vertical transparent
                </a>
                <a class="dropdown-item" href="./layout-vertical-right.html">
                    Right vertical
                </a>
                <a class="dropdown-item" href="./layout-condensed.html">
                    Condensed
                </a>
                <a class="dropdown-item" href="./layout-condensed-dark.html">
                    Condensed dark
                </a>
                <a class="dropdown-item" href="./layout-combo.html">
                    Combined
                </a>
            </div>
            <div class="dropdown-menu-column">
                <a class="dropdown-item" href="./layout-navbar-dark.html">
                    Navbar dark
                </a>
                <a class="dropdown-item" href="./layout-navbar-sticky.html">
                    Navbar sticky
                </a>
                <a class="dropdown-item" href="./layout-navbar-overlap.html">
                    Navbar overlap
                </a>
                <a class="dropdown-item" href="./layout-dark.html">
                    Dark mode
                </a>
                <a class="dropdown-item" href="./layout-rtl.html">
                    RTL mode
                </a>
                <a class="dropdown-item" href="./layout-fluid.html">
                    Fluid
                </a>
                <a class="dropdown-item" href="./layout-fluid-vertical.html">
                    Fluid vertical
                </a>
            </div>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="./docs/index.html">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                <line x1="9" y1="9" x2="10" y2="9" />
                <line x1="9" y1="13" x2="15" y2="13" />
                <line x1="9" y1="17" x2="15" y2="17" /></svg>
        </span>
        <span class="nav-link-title">
            Documentation
        </span>
    </a>
</li> --}}
