<x-app-layout>
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box d-flex-between flex-wrap gap-15">
                <h1 class="page-title fs-18 lh-1">
                    @lang('locale.show', ['param' =>__('locale.job_offer', ['suffix' => ''])])
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-example1 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('joboffers.index') }}">
                                @lang('locale.job_offer', ['suffix' => 's'])
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $jobOffer->title }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        {{-- MAIN JOB DETAILS --}}
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h2 class="mb-15">{{ $jobOffer->title }}</h2>
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-big">
                                <img src="{{ asset($jobOffer->company->logo ?? 'assets/images/default-company.png') }}" alt="Company Logo" class="radius-50">
                            </div>
                            <div>
                                <h4 class="mb-5">{{ $jobOffer->company->name ?? 'N/A' }}</h4>
                                <div class="text-muted">
                                    <span class="me-3">
                                        <i class="ri-map-pin-line"></i>
                                        {{ $jobOffer->location ?? __('locale.not_specified') }}
                                    </span>
                                    <span>
                                        <i class="ri-briefcase-4-line"></i>
                                        {{ $jobOffer->contract_type }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-15">
                    {{-- Salary and Basic Info --}}
                    <div class="p-15 mb-15 gray-bg-2">
                        <h5 class="mb-5">
                            {{ $jobOffer->salary ? number_format($jobOffer->salary, 2) . ' XOF' : __('locale.salary_not_disclosed') }}
                        </h5>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-5">
                                    <strong>@lang('locale.education_level'):</strong>
                                    {{ $jobOffer->education_level ?? __('locale.not_specified') }}
                                </p>
                                <p class="mb-0">
                                    <strong>@lang('locale.experience_required'):</strong>
                                    {{ $jobOffer->experience_required ?? __('locale.not_specified') }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-5">
                                    <strong>@lang('locale.posted_at'):</strong>
                                    {{ $jobOffer->posted_at ? $jobOffer->posted_at->format('d/m/Y') : '-' }}
                                </p>
                                <p class="mb-0">
                                    <strong>@lang('locale.expires_at'):</strong>
                                    {{ $jobOffer->expires_at ? $jobOffer->expires_at->format('d/m/Y') : __('locale.no_expiration') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Job Description --}}
                    <div class="mb-15">
                        <h4 class="mb-5">@lang('locale.job_description')</h4>
                        <p>{!! nl2br(e($jobOffer->description)) !!}</p>
                    </div>

                    {{-- Job Status --}}
                    <div class="d-flex flex-wrap align-items-center gap-10 bg-info-transparent p-2 radius-4">
                        <h5><i class="ri-information-fill me-2"></i>@lang('locale.job_status')</h5>
                        <p class="mb-0 text-black">
                            <strong>@lang('locale.status'):</strong>
                            <span class="badge 
                                @if($jobOffer->status === 'active') bg-success 
                                @elseif($jobOffer->status === 'expired') bg-warning 
                                @else bg-danger @endif">
                                {{ ucfirst($jobOffer->status) }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            {{-- Company Info --}}
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="mb-10">@lang('locale.about_company')</h4>
                    <p class="mb-5">{{ $jobOffer->company->description ?? __('locale.no_description_available') }}</p>
                    <p class="mb-5"><strong>@lang('locale.website'):</strong> 
                        <a href="{{ $jobOffer->company->website ?? '#' }}" target="_blank">
                            {{ $jobOffer->company->website ?? __('locale.not_specified') }}
                        </a>
                    </p>
                    <p><strong>@lang('locale.industry'):</strong> {{ $jobOffer->company->industry ?? __('locale.not_specified') }}</p>
                </div>
            </div>
        </div>

        {{-- SIDEBAR --}}
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-outline-primary w-100 mb-10">
                        <i class="ri-send-plane-fill"></i> @lang('locale.apply_now')
                    </button>
                    <button class="btn btn-outline-info w-100 mb-10">
                        <i class="ri-mail-line"></i> @lang('locale.email_job')
                    </button>
                    <button class="btn btn-outline-warning w-100">
                        <i class="ri-printer-line"></i> @lang('locale.print_job')
                    </button>
                </div>
            </div>

            {{-- Job Summary --}}
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="mb-10">@lang('locale.job_summary')</h4>
                    <p class="mb-5"><strong>@lang('locale.posted_at'):</strong> {{ $jobOffer->posted_at?->diffForHumans() ?? '-' }}</p>
                    <p class="mb-5"><strong>@lang('locale.contract_type'):</strong> {{ $jobOffer->contract_type }}</p>
                    <p class="mb-5"><strong>@lang('locale.experience_required'):</strong> {{ $jobOffer->experience_required ?? '-' }}</p>
                    <p class="mb-0"><strong>@lang('locale.education_level'):</strong> {{ $jobOffer->education_level ?? '-' }}</p>
                </div>
            </div>

            {{-- Location --}}
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="mb-10">@lang('locale.location')</h4>
                    <p class="mb-0">{{ $jobOffer->location ?? __('locale.not_specified') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
