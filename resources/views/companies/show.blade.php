<x-app-layout>
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box d-flex-between flex-wrap gap-15">
                <h1 class="page-title fs-18 lh-1">
                    @lang('locale.show', ['param'=>__('locale.company', ['suffix'=>app()->getLocale() == 'en' ? 'y' : ''])])
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-example1 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('companies.index') }}">
                                @lang('locale.company', ['suffix'=>app()->getLocale() == 'en' ? 'ies' : 's'])
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            @lang('locale.show', ['param'=>''])
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        {{-- Sidebar avec infos company --}}
        <div class="col-xxl-3 col-xl-5 col-lg-5">
            <div class="sidebar-sticky">
                <div class="card">
                    <div class="company-info text-center p-3">
                        <div class="company-logo mb-3">
                            <img src="{{ $company->logo ? asset($company->logo) : asset('assets/images/company/company-thumb-001.png') }}" 
                                 alt="{{ $company->name }}" class="img-fluid rounded" style="max-height:120px;">
                        </div>
                        <h2 class="company-name mb-15">{{ $company->name }}</h2>

                        <div class="company-info-list mb-25 text-start">
                            <ul class="list-unstyled">
                                <li><span><i class="ri-map-pin-line"></i></span> {{ $company->address }}</li>
                                <li><span><i class="ri-phone-line"></i></span> <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a></li>
                                <li><span><i class="ri-mail-line"></i></span> <a href="mailto:{{ $company->email }}">{{ $company->email }}</a></li>
                                @if($company->website)
                                    <li><span><i class="ri-global-line"></i></span> <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></li>
                                @endif
                                <li><span><i class="ri-calendar-line"></i></span> @lang('locale.created_at'): {{ $company->created_at->format('d M Y, H:i') }}</li>
                            </ul>
                        </div>

                        @if($company->description)
                            <div class="company-info-list mb-25">
                                <h5 class="mb-15">@lang('locale.description')</h5>
                                <p style="text-align: justify">{{ $company->description }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Main content (tabs) --}}
        <div class="col-xxl-9 col-xl-7 col-lg-7">
            <div class="card">
                <div class="tab-style-three mb-25">
                    <ul class="nav nav-pills gap-10 b-bottom2px b-color-primary mobile-nav" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-candidates-tab" data-bs-toggle="pill" data-bs-target="#pills-candidates" type="button" role="tab" aria-controls="pills-candidates" aria-selected="true">@lang('locale.candidate', ['suffix'=>'s'])</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-joboffers-tab" data-bs-toggle="pill" data-bs-target="#pills-joboffers" type="button" role="tab" aria-controls="pills-joboffers" aria-selected="false">@lang('locale.job_offer', ['suffix'=>'s'])</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-candidates" role="tabpanel" aria-labelledby="pills-candidates-tab" tabindex="0">
                        <div class="card-body">
                            {{-- Ici tu peux lister les candidats associés à cette company si tu as la relation --}}
                            @forelse($company->users as $user)
                                <div class="lead-card mb-25">
                                    <div class="lead-header d-flex align-items-center gap-15 mb-15">
                                        <div class="avatar avatar-md border radius-100">
                                            <img src="{{ asset('assets/images/avatar/avatar-thumb-001.webp') }}" alt="{{ $user->full_name }}">
                                        </div>
                                        <div class="lead-meta">
                                            <h3 class="lead-title">{{ $user->full_name }}</h3>
                                            <p class="lead-description">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-muted">@lang('locale.no_candidates_found')</p>
                            @endforelse
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-joboffers" role="tabpanel" aria-labelledby="pills-joboffers-tab" tabindex="0">
                        <div class="card-body">
                            {{-- Ici tu peux lister les offres d'emploi associées à cette company --}}
                            @if(isset($company->jobOffers) && $company->jobOffers->count())
                                @foreach($company->jobOffers as $job)
                                    <div class="lead-card mb-25">
                                        <div class="lead-header">
                                            <h3 class="lead-title">{{ $job->title }}</h3>
                                            <p>{{ Str::limit($job->description, 100) }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-muted">@lang('locale.no_job_offers_found')</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
