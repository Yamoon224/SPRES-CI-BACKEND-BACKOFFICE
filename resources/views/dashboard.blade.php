<x-app-layout>
    @push('links')
    <link rel="stylesheet" href="{{ asset('css/plugins/jsvectormap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/buttons.bootstrap5.min.css') }}">
    @endpush

    <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-primary-transparent text-primary">
                        <i class="ri-user-3-fill fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Total Employees</span>
                        <h2 class="mb-5">1,250</h2>
                        <span class="text-success">+5%<i class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                        <span class="fs-12 text-muted ml-5">vs. last month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-warning-transparent text-warning">
                        <i class="ri-briefcase-4-fill fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Job Openings</span>
                        <h2 class="mb-5">35</h2>
                        <span class="text-success">+12%<i class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                        <span class="fs-12 text-muted ml-5">vs. last week</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-success-transparent text-success">
                        <i class="ri-mail-fill fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">New Applicants</span>
                        <h2 class="mb-5">1,200</h2>
                        <span class="text-success">+8%<i class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                        <span class="fs-12 text-muted ml-5">vs. last week</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-info-transparent text-info">
                        <i class="ri-user-add-fill fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Hired Candidates</span>
                        <h2 class="mb-5">150</h2>
                        <span class="text-success">+10%<i class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                        <span class="fs-12 text-muted ml-5">vs. last month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-purple-transparent text-purple">
                        <i class="ri-calendar-2-fill fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Interviews Scheduled</span>
                        <h2 class="mb-5">75</h2>
                        <span class="text-success">+15%<i class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                        <span class="fs-12 text-muted ml-5">vs. last month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-pink-transparent text-pink">
                        <i class="ri-user-search-fill fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Active Job Seekers</span>
                        <h2 class="mb-5">450</h2>
                        <span class="text-danger">-4%<i class="ri-arrow-down-line ml-5 d-inline-block"></i></span>
                        <span class="fs-12 text-muted ml-5">vs. last month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-slateblue-transparent text-slateblue">
                        <i class="ri-hand-coin-fill fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Offer Acceptance</span>
                        <h2 class="mb-5">78%</h2>
                        <span class="text-success">+5%<i class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                        <span class="fs-12 text-muted ml-5">vs. last month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-teal-transparent text-teal">
                        <i class="ri-timer-fill fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Avg. Time to Hire</span>
                        <h2 class="mb-5">24 days</h2>
                        <span class="text-success">-10%<i class="ri-arrow-down-line ml-5 d-inline-block"></i></span>
                        <span class="fs-12 text-muted ml-5">vs. last month</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-8 col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 class="">Recruitment Analytics</h4>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-light dropdown-toggle" type="button"
                            data-bs-toggle="dropdown">
                            Last 6 Months
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:void(0);">Last Month</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Last 3 Months</a></li>
                            <li><a class="dropdown-item active" href="javascript:void(0);">Last 6 Months</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">This Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-15">
                    <div id="recruitment-analytics-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header justify-between">
                    <h4 class="">Jobs Views Location</h4>
                    <div class="card-dropdown">
                        <div class="dropdown">
                            <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-15">
                    <div id="seles-countries"></div>
                    <div class="bd-progress-wrapper">
                        <div class="single-progress mb-10">
                            <div class="d-flex-between mb-5">
                                <h6 class="fs-14">USA</h6>
                                <span class="progress-number">70%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                        <div class="single-progress mb-10">
                            <div class="d-flex-between mb-5">
                                <h6 class="fs-14">Palestine</h6>
                                <span class="progress-number">85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%"
                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                        <div class="single-progress mb-10">
                            <div class="d-flex-between mb-5">
                                <h6 class="fs-14">Brazil</h6>
                                <span class="progress-number">60%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 60%"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                        <div class="single-progress">
                            <div class="d-flex-between mb-5">
                                <h6 class="fs-14">Ireland</h6>
                                <span class="progress-number">50%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header justify-between">
                    <h4 class="">Latest Job Applications</h4>
                    <div class="card-dropdown">
                        <div class="dropdown">
                            <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-15">
                    <div class="table-responsive">
                        <table class="table mb-0 text-nowrap w-100" id="dataTableDefault">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Candidate</th>
                                    <th>Company</th>
                                    <th>Applied For</th>
                                    <th>Applied Date</th>
                                    <th>Status</th>
                                    <th>Source</th>
                                    <th>Experience</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#JOB-1001</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-001.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Sarah Johnson</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="6e1d0f1c0f0640042e0b160f031e020b400d0103">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-001.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">Acme Inc.</span>
                                                <small class="text-muted">Tech</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">Senior Frontend Developer</h6>
                                            <small class="text-muted">Product Team</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">15 May 2024</span>
                                            <small class="text-muted">10:45 AM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-warning">
                                            <i class="ri-time-line align-middle me-1"></i> Interview Stage
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-linkedin-box-fill fs-5"></i>
                                            <span>LinkedIn</span>
                                        </div>
                                    </td>
                                    <td>5.5 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#JOB-1002</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-002.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Michael Chen</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="e38e8a808b82868fcd80a3869b828e938f86cd808c8e">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-002.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">Globex Corp</span>
                                                <small class="text-muted">Finance</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">Financial Analyst</h6>
                                            <small class="text-muted">Accounting</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">16 May 2024</span>
                                            <small class="text-muted">2:30 PM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-primary">
                                            <i class="ri-file-list-line align-middle me-1"></i> Resume Review
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-global-line fs-5"></i>
                                            <span>Career Page</span>
                                        </div>
                                    </td>
                                    <td>3.2 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#JOB-1003</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-003.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">David Rodriguez</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="b7d3d6c1ded399c5f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-003.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">Initech</span>
                                                <small class="text-muted">Software</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">DevOps Engineer</h6>
                                            <small class="text-muted">Infrastructure</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">14 May 2024</span>
                                            <small class="text-muted">9:15 AM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-success">
                                            <i class="ri-checkbox-circle-line align-middle me-1"></i> Offer Sent
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-user-shared-line fs-5"></i>
                                            <span>Employee Referral</span>
                                        </div>
                                    </td>
                                    <td>6.8 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#JOB-1004</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-004.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Emily Wilson</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="f1949c989d88df86b19489909c819d94df929e9c">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-001.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">Acme Inc.</span>
                                                <small class="text-muted">Tech</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">UX Designer</h6>
                                            <small class="text-muted">Design Team</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">17 May 2024</span>
                                            <small class="text-muted">11:20 AM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-secondary">
                                            <i class="ri-question-line align-middle me-1"></i> New Application
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-github-fill fs-5"></i>
                                            <span>GitHub Jobs</span>
                                        </div>
                                    </td>
                                    <td>2.5 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#JOB-1005</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-005.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Michael Lee</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="8de0e4eee5ece8e1a3e1e8e8cde8f5ece0fde1e8a3eee2e0">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-002.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">BetaCorp</span>
                                                <small class="text-muted">Finance</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">Financial Analyst</h6>
                                            <small class="text-muted">Finance Dept.</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">18 May 2024</span>
                                            <small class="text-muted">10:15 AM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-warning">
                                            <i class="ri-time-line align-middle me-1"></i> In Review
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-linkedin-box-fill fs-5"></i>
                                            <span>LinkedIn</span>
                                        </div>
                                    </td>
                                    <td>3 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#JOB-1006</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-006.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Sophia Carter</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="d5a6baa5bdbcb4fbb695b0adb4b8a5b9b0fbb6bab8">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-003.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">Designify</span>
                                                <small class="text-muted">Creative</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">Graphic Designer</h6>
                                            <small class="text-muted">Creative Studio</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">19 May 2024</span>
                                            <small class="text-muted">09:45 AM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-success">
                                            <i class="ri-checkbox-circle-line align-middle me-1"></i> Shortlisted
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-dribbble-line fs-5"></i>
                                            <span>Dribbble</span>
                                        </div>
                                    </td>
                                    <td>4 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#JOB-1007</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-007.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Daniel Green</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="e68287888f838ac881a6839e878b968a83c885898b">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-004.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">Finexa</span>
                                                <small class="text-muted">Banking</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">Data Analyst</h6>
                                            <small class="text-muted">Analytics</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">20 May 2024</span>
                                            <small class="text-muted">02:30 PM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-info">
                                            <i class="ri-information-line align-middle me-1"></i> Interview Scheduled
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-google-fill fs-5"></i>
                                            <span>Google Jobs</span>
                                        </div>
                                    </td>
                                    <td>5 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#JOB-1008</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-008.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Ava Martinez</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="b1d0c7d09fdcf1d4c9d0dcc1ddd49fd2dedc">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-005.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">HealthPrime</span>
                                                <small class="text-muted">Healthcare</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">Medical Writer</h6>
                                            <small class="text-muted">Content</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">21 May 2024</span>
                                            <small class="text-muted">12:00 PM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-secondary">
                                            <i class="ri-question-line align-middle me-1"></i> New Application
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-facebook-circle-fill fs-5"></i>
                                            <span>Facebook Jobs</span>
                                        </div>
                                    </td>
                                    <td>1.5 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#JOB-1009</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-009.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">William Chen</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="e2958b8e8e8b838fcc81a2879a838f928e87cc818d8f">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-006.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">EduSpark</span>
                                                <small class="text-muted">EdTech</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">Frontend Developer</h6>
                                            <small class="text-muted">Engineering</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">22 May 2024</span>
                                            <small class="text-muted">03:40 PM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-success">
                                            <i class="ri-checkbox-circle-line align-middle me-1"></i> Shortlisted
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-indeed-fill fs-5"></i>
                                            <span>Indeed</span>
                                        </div>
                                    </td>
                                    <td>2 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#JOB-1010</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-010.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Grace Johnson</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="2e495c4f4d4b00446e4b564f435e424b004d4143">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-007.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">CloudSync</span>
                                                <small class="text-muted">Cloud Solutions</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">DevOps Engineer</h6>
                                            <small class="text-muted">Infrastructure</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">23 May 2024</span>
                                            <small class="text-muted">10:00 AM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-warning">
                                            <i class="ri-time-line align-middle me-1"></i> In Review
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-twitter-x-fill fs-5"></i>
                                            <span>X Jobs</span>
                                        </div>
                                    </td>
                                    <td>3.8 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#JOB-1011</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/avatar/avatar-thumb-011.webp') }}"
                                                    alt="Candidate" class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Liam Scott</h6>
                                                <small class="text-muted"><a
                                                        href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="107c79717d3e63507568717d607c753e737f7d">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('images/company/company-thumb-008.png') }}"
                                                    alt="Company" class="rounded">
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">NeoTech</span>
                                                <small class="text-muted">Software</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">Backend Developer</h6>
                                            <small class="text-muted">Engineering</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block">24 May 2024</span>
                                            <small class="text-muted">01:25 PM</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-danger">
                                            <i class="ri-close-circle-line align-middle me-1"></i> Rejected
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <i class="ri-stack-overflow-fill fs-5"></i>
                                            <span>Stack Overflow</span>
                                        </div>
                                    </td>
                                    <td>6 years</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-icon primary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-eye-line me-2"></i>View Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-calendar-line me-2"></i>Schedule Interview</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-mail-line me-2"></i>Send Email</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-building-2-line me-2"></i>View Company</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="ri-close-circle-line me-2"></i>Reject</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header justify-between">
                    <h4 class="">Scheduled Interviews</h4>
                    <div class="card-dropdown">
                        <div class="dropdown">
                            <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-15">
                    <div class="table-responsive">
                        <table class="table tbody-b-none text-nowrap">
                            <thead>
                                <tr>
                                    <th>Candidate</th>
                                    <th>Position</th>
                                    <th>Time</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <div class="avatar avatar-xs radius-100">
                                                <img class="radius-100"
                                                    src="{{ asset('images/avatar/avatar-thumb-001.webp') }}"
                                                    alt="image not found">
                                            </div>
                                            <h6>Sarah Lim</h6>
                                        </div>
                                    </td>
                                    <td>Senior UX Designer</td>
                                    <td>
                                        <div class="d-flex-column">
                                            <span class="fw-500">Today, 09:30 AM</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-primary"><i class="ri-vidicon-line"></i>
                                            Zoom</span></td>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <a class="btn-icon btn-success-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Join">
                                                <i class="ri-video-line"></i>
                                            </a>
                                            <a class="btn-icon btn-info-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Reschedule">
                                                <i class="ri-time-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <div class="avatar avatar-xs radius-100">
                                                <img class="radius-100"
                                                    src="{{ asset('images/avatar/avatar-thumb-002.webp') }}"
                                                    alt="image not found">
                                            </div>
                                            <h6>Michael Chen</h6>
                                        </div>
                                    </td>
                                    <td>DevOps Engineer</td>
                                    <td>
                                        <div class="d-flex-column">
                                            <span class="fw-500">Today, 11:15 AM</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-slateblue"><i class="ri-building-line"></i>
                                            On-site</span></td>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <a class="btn-icon btn-secondary-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Directions">
                                                <i class="ri-map-pin-line"></i>
                                            </a>
                                            <a class="btn-icon btn-warning-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Cancel">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <div class="avatar avatar-xs radius-100">
                                                <img class="radius-100"
                                                    src="{{ asset('images/avatar/avatar-thumb-003.webp') }}"
                                                    alt="image not found">
                                            </div>
                                            <h6>Emma Johnson</h6>
                                        </div>
                                    </td>
                                    <td>Marketing Manager</td>
                                    <td>
                                        <div class="d-flex-column">
                                            <span class="fw-500">Today, 02:00 PM</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-purple"><i class="ri-phone-line"></i>
                                            Phone</span></td>

                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <a class="btn-icon btn-primary-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Start Call">
                                                <i class="ri-phone-line"></i>
                                            </a>
                                            <a class="btn-icon btn-info-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Notes">
                                                <i class="ri-file-list-2-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <div class="avatar avatar-xs radius-100">
                                                <img class="radius-100"
                                                    src="{{ asset('images/avatar/avatar-thumb-004.webp') }}"
                                                    alt="image not found">
                                            </div>
                                            <h6>James Wilson</h6>
                                        </div>
                                    </td>
                                    <td>Data Scientist</td>
                                    <td>
                                        <div class="d-flex-column">
                                            <span class="fw-500">Tomorrow, 10:00 AM</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-primary"><i class="ri-vidicon-line"></i>
                                            Zoom</span></td>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <a class="btn-icon btn-success-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Join">
                                                <i class="ri-video-line"></i>
                                            </a>
                                            <a class="btn-icon btn-info-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Reschedule">
                                                <i class="ri-time-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <div class="avatar avatar-xs radius-100">
                                                <img class="radius-100"
                                                    src="{{ asset('images/avatar/avatar-thumb-005.webp') }}"
                                                    alt="image not found">
                                            </div>
                                            <h6>Sophia Martinez</h6>
                                        </div>
                                    </td>
                                    <td>Product Manager</td>
                                    <td>
                                        <div class="d-flex-column">
                                            <span class="fw-500">Tomorrow, 01:30 PM</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-slateblue"><i class="ri-building-line"></i>
                                            On-site</span></td>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <a class="btn-icon btn-secondary-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Directions">
                                                <i class="ri-map-pin-line"></i>
                                            </a>
                                            <a class="btn-icon btn-warning-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Cancel">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <div class="avatar avatar-xs radius-100">
                                                <img class="radius-100"
                                                    src="{{ asset('images/avatar/avatar-thumb-006.webp') }}"
                                                    alt="image not found">
                                            </div>
                                            <h6>David Kim</h6>
                                        </div>
                                    </td>
                                    <td>Frontend Developer</td>
                                    <td>
                                        <div class="d-flex-column">
                                            <span class="fw-500">Jun 25, 03:00 PM</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-purple"><i class="ri-phone-line"></i>
                                            Phone</span></td>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <a class="btn-icon btn-primary-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Start Call">
                                                <i class="ri-phone-line"></i>
                                            </a>
                                            <a class="btn-icon btn-info-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Notes">
                                                <i class="ri-file-list-2-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="urgent-interview">
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <div class="avatar avatar-xs radius-100">
                                                <img class="radius-100"
                                                    src="{{ asset('images/avatar/avatar-thumb-007.webp') }}"
                                                    alt="image not found">
                                            </div>
                                            <h6>Priya Patel</h6>
                                        </div>
                                    </td>
                                    <td>UX Researcher</td>
                                    <td>
                                        <div class="d-flex-column">
                                            <span class="fw-500">Today, 04:30 PM</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-label-danger"><i class="ri-vidicon-line"></i>
                                            Zoom</span></td>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <a class="btn-icon btn-success-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Join">
                                                <i class="ri-video-line"></i>
                                            </a>
                                            <a class="btn-icon btn-danger-light" href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Urgent">
                                                <i class="ri-alarm-warning-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 class="">Featured Companies</h4>
                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body pt-15">
                    <div class="table-responsive">
                        <table class="table text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <th>Location</th>
                                    <th>Openings</th>
                                    <th>Status</th>
                                    <th>Avg. Salary</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-sm">
                                                <img src="{{ asset('images/company/company-thumb-001.png') }}"
                                                    alt="BYD" class="rounded">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">BYD</h6>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="ri-star-fill text-warning fs-12"></i>
                                                    <small class="text-muted">4.5 (3.8k)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ri-map-pin-line text-muted"></i>
                                            <span>Shenzhen, China</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-primary">32</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-success">
                                            <i class="ri-flashlight-line"></i> Rapid Hiring
                                        </span>
                                    </td>
                                    <td>
                                        <span class="fw-medium">¥480k</span>
                                    </td>
                                    <td>
                                        <div class="d-flex-items gap-5">
                                            <a class="btn-icon btn-success-light" href="javascript:void(0);">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <button class="btn-icon btn-danger-light removeRow" type="button">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-sm">
                                                <img src="{{ asset('images/company/company-thumb-002.png') }}"
                                                    alt="Alibaba" class="rounded">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Alibaba Group</h6>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="ri-star-fill text-warning fs-12"></i>
                                                    <small class="text-muted">4.6 (5.2k)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ri-map-pin-line text-muted"></i>
                                            <span>Hangzhou, China</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-primary">28</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-info">
                                            <i class="ri-global-line"></i> Global Tech
                                        </span>
                                    </td>
                                    <td>
                                        <span class="fw-medium">¥650k</span>
                                    </td>
                                    <td>
                                        <div class="d-flex-items gap-5">
                                            <a class="btn-icon btn-success-light" href="javascript:void(0);">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <button class="btn-icon btn-danger-light removeRow" type="button">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-sm">
                                                <img src="{{ asset('images/company/company-thumb-003.png') }}"
                                                    alt="Huawei" class="rounded">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Huawei</h6>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="ri-star-fill text-warning fs-12"></i>
                                                    <small class="text-muted">4.4 (4.6k)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ri-map-pin-line text-muted"></i>
                                            <span>Shenzhen, China</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-primary">41</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-warning">
                                            <i class="ri-rocket-line"></i> R&D Focus
                                        </span>
                                    </td>
                                    <td>
                                        <span class="fw-medium">¥580k</span>
                                    </td>
                                    <td>
                                        <div class="d-flex-items gap-5">
                                            <a class="btn-icon btn-success-light" href="javascript:void(0);">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <button class="btn-icon btn-danger-light removeRow" type="button">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-sm">
                                                <img src="{{ asset('images/company/company-thumb-002.png') }}"
                                                    alt="Netflix" class="rounded">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Netflix</h6>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="ri-star-fill text-warning fs-12"></i>
                                                    <small class="text-muted">4.6 (1.8k)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ri-map-pin-line text-muted"></i>
                                            <span>Los Gatos, CA</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-primary">8</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-info">
                                            <i class="ri-home-4-line"></i> Remote
                                        </span>
                                    </td>
                                    <td>
                                        <span class="fw-medium">$145k</span>
                                    </td>
                                    <td>
                                        <div class="d-flex-items gap-5">
                                            <a class="btn-icon btn-success-light" href="javascript:void(0);">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <button class="btn-icon btn-danger-light removeRow" type="button">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar avatar-sm">
                                                <img src="{{ asset('images/company/company-thumb-003.png') }}"
                                                    alt="Airbnb" class="rounded">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Airbnb</h6>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="ri-star-fill text-warning fs-12"></i>
                                                    <small class="text-muted">4.5 (1.2k)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ri-map-pin-line text-muted"></i>
                                            <span>San Francisco, CA</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-primary">12</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-purple">
                                            <i class="ri-global-line"></i> Global
                                        </span>
                                    </td>
                                    <td>
                                        <span class="fw-medium">$110k</span>
                                    </td>
                                    <td>
                                        <div class="d-flex-items gap-5">
                                            <a class="btn-icon btn-success-light" href="javascript:void(0);">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <button class="btn-icon btn-danger-light removeRow" type="button">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-5">
                                            <div class="avatar avatar-sm">
                                                <img src="{{ asset('images/company/company-thumb-004.png') }}"
                                                    alt="Spotify" class="rounded">
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Spotify</h6>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="ri-star-fill text-warning fs-12"></i>
                                                    <small class="text-muted">4.3 (980)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ri-map-pin-line text-muted"></i>
                                            <span>New York, NY</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-primary">6</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-danger">
                                            <i class="ri-alarm-warning-line"></i> Urgent
                                        </span>
                                    </td>
                                    <td>
                                        <span class="fw-medium">$135k</span>
                                    </td>
                                    <td>
                                        <div class="d-flex-items gap-5">
                                            <a class="btn-icon btn-success-light" href="javascript:void(0);">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <button class="btn-icon btn-danger-light removeRow" type="button">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="{{ asset('js/plugins/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jszip.min.js') }}"></script>
    <script src="{{ asset('js/vendor/dataTable-active.js') }}"></script>
    <script src="{{ asset('js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/world-merc.js') }}"></script>
    <script src="{{ asset('js/vendor/job-dashboard.js') }}"></script>
    @endpush
</x-app-layout>
