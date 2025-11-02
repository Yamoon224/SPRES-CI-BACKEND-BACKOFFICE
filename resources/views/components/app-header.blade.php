<div class="app-header-area">
    <header class="app-header" id="header">
        <div class="app-header-inner">
            <div class="app-header-left">
                <div class="d-flex align-center gap-15">
                    <div class="app-header-element">
                        <a class="sidebar-toggle-bar" id="sidebarToggle" href="javascript:void(0);">
                            <div class="sidebar-menu-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <div class="app-header-ls-logo">
                        <!-- large screen logo -->
                        <a class="app-header-ls-dark-logo" href="index.html">
                            <x-app-logo with="60" height="40"></x-app-logo>
                        </a>
                        <a class="app-header-ls-light-logo" href="index.html">
                            <x-app-logo with="60" height="40"></x-app-logo>
                        </a>
                    </div>
                    <div class="app-header-mobile-logo">
                        <a class="app-header-dark-logo" href="index.html">
                            <x-app-logo with="60" height="40"></x-app-logo>
                        </a>
                        <a class="app-header-light-logo" href="index.html">
                            <x-app-logo with="60" height="40"></x-app-logo>
                        </a>
                    </div>
                </div>
            </div>
            <div class="app-header-right">
                <div class="app-header-link">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="app-header-circle"><i class="ri-global-line"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-lang" href="{{ route('locale', app()->getLocale() == 'en' ? 'en' : 'fr') }}">
                                    <img src="{{ asset('images/flags/'. (app()->getLocale() == 'en' ? 'us' : 'fr') .'.png') }}" alt="LANG"> @lang('locale.' . (app()->getLocale() == 'en' ? 'english' : 'french'))
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-lang" href="{{ route('locale', app()->getLocale() == 'en' ? 'fr' : 'en') }}">
                                    <img src="{{ asset('images/flags/'. (app()->getLocale() == 'en' ? 'fr' : 'us') .'.png') }}" alt="Lang"> @lang('locale.' . (app()->getLocale() == 'en' ? 'french' : 'english'))
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="app-header-switcher app-header-circle">
                    <div class="theme-switcher">
                        <i class="ri-sun-line change-theme theme-button"></i>
                    </div>
                </div>

                <div class="app-header-fullscreen app-header-circle cursor-pointer">
                    <div onclick="javascript:toggleFullScreen()">
                        <i class="ri-fullscreen-line"></i>
                    </div>
                </div>

                {{-- <div class="app-header-notification">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="app-header-circle"><i class="ri-notification-line"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-header">
                                <h5>Notification</h5>
                                <span class="badge bg-label-primary">8 New</span>
                            </li>
                            <li class="dropdown-notifications-list card-scrollbar">
                                <ul>
                                    <li class="dropdown-notifications-list-item">
                                        <div class="avatar">
                                            <img class="radius-100"
                                                src="{{ asset('images/avatar/avatar-thumb-001.webp') }}"
                                                alt="image not found">
                                        </div>
                                        <div class="content">
                                            <h6 class="mb-5">New Order Received 🛒</h6>
                                            <p class="mb-5">Order #14523 has been placed by John Doe</p>
                                            <span class="text-body-secondary">Just now</span>
                                        </div>
                                        <div class="notifications-actions d-flex direction-column align-center">
                                            <a href="javascript:void(0);"
                                                class="dropdown-notifications-read d-block pt-5">
                                                <span class="bullet bg-primary"></span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-notifications-archive">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list-item">
                                        <div class="avatar">
                                            <img class="radius-100"
                                                src="{{ asset('images/avatar/avatar-thumb-002.webp') }}"
                                                alt="image not found">
                                        </div>
                                        <div class="content">
                                            <h6 class="mb-5">Low Stock Alert ⚠️</h6>
                                            <p class="mb-5">Only 3 items left in stock for "Smartwatch Pro X"</p>
                                            <span class="text-body-secondary">10 mins ago</span>
                                        </div>
                                        <div class="notifications-actions d-flex direction-column align-center">
                                            <a href="javascript:void(0);"
                                                class="dropdown-notifications-read d-block pt-5"><span
                                                    class="bullet bg-primary"></span></a>
                                            <a href="javascript:void(0);" class="dropdown-notifications-archive"><i
                                                    class="ri-close-line"></i></a>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list-item">
                                        <div class="avatar">
                                            <img class="radius-100"
                                                src="{{ asset('images/avatar/avatar-thumb-003.webp') }}"
                                                alt="image not found">
                                        </div>
                                        <div class="content">
                                            <h6 class="mb-5">New Customer Registered 👤</h6>
                                            <p class="mb-5">Sarah Williams has joined your store</p>
                                            <span class="text-body-secondary">30 mins ago</span>
                                        </div>
                                        <div class="notifications-actions d-flex direction-column align-center">
                                            <a href="javascript:void(0);" class="dropdown-notifications-archive">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list-item">
                                        <div class="avatar">
                                            <img class="radius-100"
                                                src="{{ asset('images/avatar/avatar-thumb-004.webp') }}"
                                                alt="image not found">
                                        </div>
                                        <div class="content">
                                            <h6 class="mb-5">Product Review ⭐</h6>
                                            <p class="mb-5">"Wireless Earbuds" got a new 5-star review</p>
                                            <span class="text-body-secondary">1 hour ago</span>
                                        </div>
                                        <div class="notifications-actions d-flex direction-column align-center">
                                            <a href="javascript:void(0);" class="dropdown-notifications-archive"><i
                                                    class="ri-close-line"></i></a>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list-item">
                                        <div class="avatar">
                                            <img class="radius-100"
                                                src="{{ asset('images/avatar/avatar-thumb-005.webp') }}"
                                                alt="image not found">
                                        </div>
                                        <div class="content">
                                            <h6 class="mb-5">Weekly Sales Report 📈</h6>
                                            <p class="mb-5">Your store sales increased by 18% this week</p>
                                            <span class="text-body-secondary">3 hours ago</span>
                                        </div>
                                        <div class="notifications-actions d-flex direction-column align-center">
                                            <a href="javascript:void(0);" class="dropdown-notifications-archive"><i
                                                    class="ri-close-line"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-notifications-btn">
                                <a class="btn btn-primary w-100" href="javascript:void(0);">View all
                                    notifications</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}

                <div class="app-header-user">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="https://ui-avatars.com/api/?name={{ str_replace(' ', '+', auth()->user()->full_name) }}" alt="PHOTO">
                                </div>
                                <h6 class="author-name lh-1">{{ auth()->user()->full_name }}</h6>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="bd-user-info-list">
                                <a href="{{ route('profile.index') }}">
                                    <i class="ri-user-line"></i>@lang('locale.profile')
                                </a>
                            </li>
                            <li class="bd-user-info-list">
                                <a href="{{ route('logout') }}">
                                    <i class="ri-logout-circle-line"></i> @lang('locale.logout')
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="body__overlay"></div>
</div>
