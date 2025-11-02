<x-app-layout>
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box d-flex-between flex-wrap gap-15">
                <h1 class="page-title fs-18 lh-1">
                    @lang('locale.edit', ['param'=>__('locale.job_offer', ['suffix'=>''])])
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-example1 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('joboffers.index') }}">
                                @lang('locale.job_offer', ['suffix'=>'s'])
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            @lang('locale.edit', ['param'=>''])
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('locale.form')</h4>
                </div>

                <div class="card-body pt-15">
                    <form action="{{ route('joboffers.update', $jobOffer->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row gy-15">

                            <!-- Company -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="company_id">@lang('locale.company', ['suffix'=>app()->getLocale() == 'en' ? 'y' : ''])</label>
                                <select name="company_id" id="company_id" class="form-select" required>
                                    <option value="">@lang('locale.choose_option')</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}" {{ old('company_id', $jobOffer->company_id) == $company->id ? 'selected' : '' }}>
                                            {{ $company->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Title -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="title">@lang('locale.title')</label>
                                <input class="form-control" name="title" id="title" type="text"
                                    placeholder="@lang('locale.job_title_placeholder')"
                                    value="{{ old('title', $jobOffer->title) }}" required>
                            </div>

                            <!-- Contract Type -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="contract_type">@lang('locale.contract_type')</label>
                                <select class="form-select" name="contract_type" id="contract_type" required>
                                    @foreach(['Permanent','Temporary','Internship','Freelance'] as $type)
                                        <option value="{{ $type }}" {{ old('contract_type', $jobOffer->contract_type) == $type ? 'selected' : '' }}>
                                            {{ $type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Location -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="location">@lang('locale.location')</label>
                                <input class="form-control" name="location" id="location" type="text"
                                    placeholder="Abidjan, Côte d’Ivoire"
                                    value="{{ old('location', $jobOffer->location) }}">
                            </div>

                            <!-- Salary -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="salary">@lang('locale.salary')</label>
                                <input class="form-control" name="salary" id="salary" type="number" step="0.01"
                                    placeholder="Ex: 500000"
                                    value="{{ old('salary', $jobOffer->salary) }}">
                            </div>

                            <!-- Education Level -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="education_level">@lang('locale.education_level')</label>
                                <input class="form-control" name="education_level" id="education_level" type="text"
                                    placeholder="Ex: Licence, Master..."
                                    value="{{ old('education_level', $jobOffer->education_level) }}">
                            </div>

                            <!-- Experience Required -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="experience_required">@lang('locale.experience_required')</label>
                                <input class="form-control" name="experience_required" id="experience_required" type="text"
                                    placeholder="Ex: 2 ans d’expérience"
                                    value="{{ old('experience_required', $jobOffer->experience_required) }}">
                            </div>

                            <!-- Posted At -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="posted_at">@lang('locale.posted_at')</label>
                                <input class="form-control" name="posted_at" id="posted_at" type="datetime-local"
                                    value="{{ old('posted_at', $jobOffer->posted_at ? \Carbon\Carbon::parse($jobOffer->posted_at)->format('Y-m-d\TH:i') : '') }}">
                            </div>

                            <!-- Expires At -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="expires_at">@lang('locale.expires_at')</label>
                                <input class="form-control" name="expires_at" id="expires_at" type="datetime-local"
                                    value="{{ old('expires_at', $jobOffer->expires_at ? \Carbon\Carbon::parse($jobOffer->expires_at)->format('Y-m-d\TH:i') : '') }}">
                            </div>

                            <!-- Status -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="status">@lang('locale.status')</label>
                                <select class="form-select" name="status" id="status" required>
                                    @foreach(['active' => __('locale.active'), 'expired' => __('locale.expired'), 'deleted' => __('locale.deleted')] as $value => $label)
                                        <option value="{{ $value }}" {{ old('status', $jobOffer->status) == $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Description -->
                            <div class="col-xl-12">
                                <label class="form-label" for="description">@lang('locale.description')</label>
                                <textarea class="form-control" name="description" id="description" rows="4" style="resize: none"
                                    placeholder="@lang('locale.job_description_placeholder')">{{ old('description', $jobOffer->description) }}</textarea>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100">@lang('locale.update')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
