<x-app-layout>
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box d-flex-between flex-wrap gap-15">
                <h1 class="page-title fs-18 lh-1">
                    @lang('locale.edit', ['param'=>__('locale.company', ['suffix'=>app()->getLocale() == 'en' ? 'y' : ''])])
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-example1 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('companies.index') }}">
                                @lang('locale.company', ['suffix'=>app()->getLocale() == 'en' ? 'ies' : 's'])
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
                    <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row gy-15">
                            <!-- Name -->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <label class="form-label" for="name">@lang('locale.company_name')</label>
                                <input class="form-control" name="name" id="name" type="text" placeholder="Enter company name" value="{{ old('name', $company->name) }}" required>
                            </div>

                            <!-- Phone -->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <label class="form-label" for="phone">@lang('locale.phone')</label>
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="+225 0707070707" value="{{ old('phone', $company->phone) }}">
                            </div>

                            <!-- Email -->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <label class="form-label" for="email">@lang('locale.email')</label>
                                <input class="form-control" name="email" id="email" type="email" placeholder="company@example.com" value="{{ old('email', $company->email) }}">
                            </div>

                            <!-- Industry -->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <label class="form-label" for="industry">@lang('locale.industry')</label>
                                <input class="form-control" name="industry" id="industry" type="text" placeholder="e.g. Technology, Finance..." value="{{ old('industry', $company->industry) }}">
                            </div>

                            <!-- Website -->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <label class="form-label" for="website">@lang('locale.website')</label>
                                <input class="form-control" name="website" id="website" type="url" placeholder="https://example.com" value="{{ old('website', $company->website) }}">
                            </div>

                            <!-- Address -->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <label class="form-label" for="address">@lang('locale.address')</label>
                                <input class="form-control" name="address" id="address" type="text" placeholder="Enter company address" value="{{ old('address', $company->address) }}">
                            </div>

                            <!-- Logo -->
                            <div class="col-12">
                                <label class="form-label" for="logo">@lang('locale.logo')</label>
                                <input type="file" class="form-control" name="logo" accept="image/*">
                                @if($company->logo)
                                    <div class="mt-2">
                                        <img src="{{ asset($company->logo) }}" alt="Company Logo" class="img-thumbnail" width="120">
                                    </div>
                                @endif
                            </div>

                            <!-- Description -->
                            <div class="col-xl-12">
                                <label class="form-label" for="description">@lang('locale.description')</label>
                                <textarea class="form-control" name="description" style="resize: none" id="description" rows="4" placeholder="Brief description of the company...">{{ old('description', $company->description) }}</textarea>
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
