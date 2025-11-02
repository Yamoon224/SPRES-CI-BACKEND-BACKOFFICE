<x-app-layout>
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box d-flex-between flex-wrap gap-15">
                <h1 class="page-title fs-18 lh-1">
                    @lang('locale.add', ['param'=>__('locale.job_offer', ['suffix'=>app()->getLocale() == 'en' ? '' : ''])])
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-example1 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('joboffers.index') }}">
                                @lang('locale.job_offer', ['suffix'=>'s'])
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            @lang('locale.add', ['param'=>''])
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="">@lang('locale.form')</h4>
                </div>
                <div class="card-body pt-15">
                    <form action="{{ route('joboffers.store') }}" method="POST">
                        @csrf
                        <div class="row gy-15">

                            <!-- Company -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="company_id">@lang('locale.company', ['suffix'=>app()->getLocale() == 'en' ? 'y' : ''])</label>
                                <select name="company_id" id="company_id" class="form-select" required>
                                    <option value="">@lang('locale.choose_option')</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>
                                            {{ $company->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Title -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="title">@lang('locale.title')</label>
                                <input class="form-control" name="title" id="title" type="text" placeholder="@lang('locale.job_title_placeholder')" value="{{ old('title', $jobOffer->title ?? '') }}" required>
                            </div>

                            <!-- Contract Type -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="contract_type">@lang('locale.contract_type')</label>
                                <select class="form-select" name="contract_type" id="contract_type" required>
                                    <option value="Permanent" {{ old('contract_type') == 'Permanent' ? 'selected' : '' }}>Permanent</option>
                                    <option value="Temporary" {{ old('contract_type') == 'Temporary' ? 'selected' : '' }}>Temporary</option>
                                    <option value="Internship" {{ old('contract_type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                                    <option value="Freelance" {{ old('contract_type') == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                                </select>
                            </div>

                            <!-- Location -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="location">@lang('locale.location')</label>
                                <input class="form-control" name="location" id="location" type="text" placeholder="Abidjan, Côte d’Ivoire" value="{{ old('location', $jobOffer->location ?? '') }}">
                            </div>

                            <!-- Salary -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="salary">@lang('locale.salary')</label>
                                <input class="form-control" name="salary" id="salary" type="number" step="0.01" placeholder="Ex: 500000" value="{{ old('salary', $jobOffer->salary ?? '') }}">
                            </div>

                            <!-- Education Level -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="education_level">@lang('locale.education_level')</label>
                                <input class="form-control" name="education_level" id="education_level" type="text" placeholder="Ex: Licence, Master..." value="{{ old('education_level', $jobOffer->education_level ?? '') }}">
                            </div>

                            <!-- Experience Required -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="experience_required">@lang('locale.experience_required')</label>
                                <input class="form-control" name="experience_required" id="experience_required" type="text" placeholder="Ex: 2 ans d’expérience" value="{{ old('experience_required', $jobOffer->experience_required ?? '') }}">
                            </div>

                            <!-- Posted At -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="posted_at">@lang('locale.posted_at')</label>
                                <input class="form-control" name="posted_at" id="posted_at" type="datetime-local" value="{{ old('posted_at', isset($jobOffer) && $jobOffer->posted_at ? $jobOffer->posted_at->format('Y-m-d\TH:i') : '') }}">
                            </div>

                            <!-- Expires At -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="expires_at">@lang('locale.expires_at')</label>
                                <input class="form-control" name="expires_at" id="expires_at" type="datetime-local" value="{{ old('expires_at', isset($jobOffer) && $jobOffer->expires_at ? $jobOffer->expires_at->format('Y-m-d\TH:i') : '') }}">
                            </div>

                            <!-- Status -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label class="form-label" for="status">@lang('locale.status')</label>
                                <select class="form-select" name="status" id="status" required>
                                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>@lang('locale.active')</option>
                                    <option value="expired" {{ old('status') == 'expired' ? 'selected' : '' }}>@lang('locale.expired')</option>
                                    <option value="deleted" {{ old('status') == 'deleted' ? 'selected' : '' }}>@lang('locale.deleted')</option>
                                </select>
                            </div>

                            <!-- Description -->
                            <div class="col-xl-12">
                                <label class="form-label" for="description">@lang('locale.description')</label>
                                <textarea class="form-control" name="description" id="description" rows="5" placeholder="@lang('locale.job_description_placeholder')" style="resize: none;">{{ old('description', $jobOffer->description ?? '') }}</textarea>
                            </div>

                            <!-- Submit -->
                            <div class="col-12">
                                <button class="btn btn-primary w-100">@lang('locale.submit')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
