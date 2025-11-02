<aside class="app-sidebar sticky" id="sidebar">
    <!-- start app-sidebar-header -->
    <div class="app-sidebar-header">
        <a href="{{ route('dashboard') }}" class="desktop-logo">
            <x-app-logo with="60" height="40"></x-app-logo>
        </a>
        <a href="{{ route('dashboard') }}" class="desktop-dark">
            <x-app-logo with="60" height="40"></x-app-logo>
        </a>
    </div>
    <!-- end app-sidebar-header -->

    <!-- start app-sidebar-wrapper -->
    <div class="app-sidebar-wrapper" id="sidebar-scroll">
        <nav class="app-sidebar-menu-wrapper nav flex-column sub-open">
            <div class="sidebar-left" id="sidebar-left"></div>
            <ul class="app-sidebar-main-menu">

                <li class="sidebar-menu-category"><span class="category-name">MENU</span></li>
                <li class="slide {{ Route::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="sidebar-menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
                        <div class="side-menu-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M14 21C13.4477 21 13 20.5523 13 20V12C13 11.4477 13.4477 11 14 11H20C20.5523 11 21 11.4477 21 12V20C21 20.5523 20.5523 21 20 21H14ZM4 13C3.44772 13 3 12.5523 3 12V4C3 3.44772 3.44772 3 4 3H10C10.5523 3 11 3.44772 11 4V12C11 12.5523 10.5523 13 10 13H4ZM9 11V5H5V11H9ZM4 21C3.44772 21 3 20.5523 3 20V16C3 15.4477 3.44772 15 4 15H10C10.5523 15 11 15.4477 11 16V20C11 20.5523 10.5523 21 10 21H4ZM5 19H9V17H5V19ZM15 19H19V13H15V19ZM13 4C13 3.44772 13.4477 3 14 3H20C20.5523 3 21 3.44772 21 4V8C21 8.55228 20.5523 9 20 9H14C13.4477 9 13 8.55228 13 8V4ZM15 5V7H19V5H15Z">
                                    </path>
                                </svg>
                            </i>
                        </div>
                        <span class="sidebar-menu-label">@lang('locale.dashboard')</span>
                    </a>
                </li>
                
                
                <li class="slide {{ Route::is('companies.*') ? 'active' : '' }}">
                    <a href="{{ route('companies.index') }}" class="sidebar-menu-item {{ Route::is('companies.*') ? 'active' : '' }}">
                        <div class="side-menu-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H19V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5ZM7 11H11V13H7V11ZM7 7H11V9H7V7Z">
                                    </path>
                                </svg>
                            </i>
                        </div>
                        <span class="sidebar-menu-label">@lang('locale.company', ['suffix'=>app()->getLocale() == 'en' ? 'ies' : 's'])</span>
                    </a>
                </li>
                <li class="slide {{ Route::is('joboffers.*') ? 'active' : '' }}">
                    <a href="{{ route('joboffers.index') }}" class="sidebar-menu-item {{ Route::is('joboffers.*') ? 'active' : '' }}">
                        <div class="side-menu-icon">
                            <i class="">
                                <!-- Icône "briefcase" (emplois / offres) -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20 6h-3V4a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2v2H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2ZM9 4h6v2H9V4Zm11 16H4V8h16v12Z">
                                    </path>
                                </svg>
                            </i>
                        </div>
                        <span class="sidebar-menu-label">@lang('locale.job_offer', ['suffix' => 's'])</span>
                    </a>
                </li>
                <li class="slide {{ Route::is('candidates.*') ? 'active' : '' }}">
                    <a href="{{ route('candidates.index') }}" class="sidebar-menu-item {{ Route::is('candidates.*') ? 'active' : '' }}">
                        <div class="side-menu-icon">
                            <i class="">
                                <!-- Icône "user search" (candidats / profils) -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M10 4a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm0 10c3.866 0 7 2.239 7 5v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1c0-2.761 3.134-5 7-5Zm7.707-4.707 2 2a1 1 0 0 1-1.414 1.414l-2-2a1 1 0 0 1 1.414-1.414Z"/>
                                </svg>
                            </i>
                        </div>
                        <span class="sidebar-menu-label">@lang('locale.candidate', ['suffix' => 's'])</span>
                    </a>
                </li>
                <li class="slide {{ Route::is('recruiters.*') ? 'active' : '' }}">
                    <a href="{{ route('recruiters.index') }}" class="sidebar-menu-item {{ Route::is('recruiters.*') ? 'active' : '' }}">
                        <div class="side-menu-icon">
                            <i class="">
                                <!-- Icône "briefcase user" (recruteurs / employeurs) -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M10 4a2 2 0 0 0-2 2v2H4a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8v-1c0-1.657 1.343-3 3-3h7V8a2 2 0 0 0-2-2h-4V6a2 2 0 0 0-2-2h-2Zm0 2h4v2h-4V6ZM2 16v-2h8v2H2Zm19.5 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-5 3h5a2.5 2.5 0 0 1 2.5 2.5V22h-10v-.5A2.5 2.5 0 0 1 16.5 19Z"/>
                                </svg>
                            </i>
                        </div>
                        <span class="sidebar-menu-label">@lang('locale.recruiter', ['suffix' => 's'])</span>
                    </a>
                </li>
                                
                <li class="slide {{ Route::is('services.*') ? 'active' : '' }}">
                    <a href="{{ route('services.index') }}" class="sidebar-menu-item {{ Route::is('services.*') ? 'active' : '' }}">
                        <div class="side-menu-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M20.0833 15.1999L21.2854 15.9212C21.5221 16.0633 21.5989 16.3704 21.4569 16.6072C21.4146 16.6776 21.3557 16.7365 21.2854 16.7787L12.5144 22.0412C12.1977 22.2313 11.8021 22.2313 11.4854 22.0412L2.71451 16.7787C2.47772 16.6366 2.40093 16.3295 2.54301 16.0927C2.58523 16.0223 2.64413 15.9634 2.71451 15.9212L3.9166 15.1999L11.9999 20.0499L20.0833 15.1999ZM20.0833 10.4999L21.2854 11.2212C21.5221 11.3633 21.5989 11.6704 21.4569 11.9072C21.4146 11.9776 21.3557 12.0365 21.2854 12.0787L11.9999 17.6499L2.71451 12.0787C2.47772 11.9366 2.40093 11.6295 2.54301 11.3927C2.58523 11.3223 2.64413 11.2634 2.71451 11.2212L3.9166 10.4999L11.9999 15.3499L20.0833 10.4999ZM12.5144 1.30864L21.2854 6.5712C21.5221 6.71327 21.5989 7.0204 21.4569 7.25719C21.4146 7.32757 21.3557 7.38647 21.2854 7.42869L11.9999 12.9999L2.71451 7.42869C2.47772 7.28662 2.40093 6.97949 2.54301 6.7427C2.58523 6.67232 2.64413 6.61343 2.71451 6.5712L11.4854 1.30864C11.8021 1.11864 12.1977 1.11864 12.5144 1.30864ZM11.9999 3.33233L5.88723 6.99995L11.9999 10.6676L18.1126 6.99995L11.9999 3.33233Z">
                                    </path>
                                </svg>
                            </i>
                        </div>
                        <span class="sidebar-menu-label">@lang('locale.service', ['suffix'=>'s'])</span>
                    </a>
                </li>
                <li class="slide {{ Route::is('testimonials.*') ? 'active' : '' }}">
                    <a href="{{ route('testimonials.index') }}" class="sidebar-menu-item {{ Route::is('testimonials.*') ? 'active' : '' }}">
                        <div class="side-menu-icon">
                            <i class="">
                                <!-- Icône "message quote" (témoignages / avis) -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M21 6H3a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h5v3a1 1 0 0 0 1.707.707l3.414-3.414A1 1 0 0 1 14 18h7a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Zm-1 10h-6.586l-2.707 2.707V16H4V8h16v8Z"/>
                                </svg>
                            </i>
                        </div>
                        <span class="sidebar-menu-label">@lang('locale.testimonial', ['suffix' => 's'])</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-right" id="sidebar-right"></div>
        </nav>
    </div>
    <!-- end app-sidebar-wrapper -->
</aside>
<div class="app-offcanvas-overlay"></div>