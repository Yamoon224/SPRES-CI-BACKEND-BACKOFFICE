<x-app-layout>
    @push('links')
    <link rel="stylesheet" href="{{ asset('css/plugins/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/buttons.bootstrap5.min.css') }}">
    @endpush

    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box d-flex-between flex-wrap gap-15">
                <h1 class="page-title fs-18 lh-1">@lang('locale.job_offer', ['suffix'=>app()->getLocale() == 'en' ? 's' : 's'])</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-example1 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">@lang('locale.dashboard')</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            @lang('locale.job_offer', ['suffix'=>app()->getLocale() == 'en' ? 's' : 's'])
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Statistiques par type de contrat -->
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-primary-transparent text-primary">
                        <i class="ri-briefcase-4-line fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Permanent</span>
                        <h2>{{ $stats['Permanent'] ?? 0 }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-info-transparent text-info">
                        <i class="ri-time-line fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Temporary</span>
                        <h2>{{ $stats['Temporary'] ?? 0 }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-success-transparent text-success">
                        <i class="ri-graduation-cap-line fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Internship</span>
                        <h2>{{ $stats['Internship'] ?? 0 }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body mini-card-body d-flex align-center gap-16">
                    <div class="avatar avatar-xl bg-warning-transparent text-warning">
                        <i class="ri-user-voice-line fs-42"></i>
                    </div>
                    <div class="card-content">
                        <span class="d-block fs-16 mb-5">Freelance</span>
                        <h2>{{ $stats['Freelance'] ?? 0 }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Liste des offres -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header justify-between">
                    <h4 class="d-flex-items gap-10">
                        <i class="ri-briefcase-line fs-18"></i> 
                        @lang('locale.list', ['param'=>''])
                    </h4>
                    <div class="d-flex flex-wrap gap-15">
                        <a role="button" class="btn btn-primary d-flex align-items-center gap-2" href="{{ route('joboffers.create') }}">
                            <i class="ri-briefcase-line fs-18"></i>
                            <i class="ri-add-line fs-18"></i>
                            <span>@lang('locale.add', ['param' => ''])</span>
                        </a>
                    </div>
                </div>

                <div class="card-body pt-15">
                    <div class="table-responsive">
                        <table class="table text-nowrap w-100" id="dataTableDefault">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('locale.title')</th>
                                    <th>@lang('locale.company_name')</th>
                                    <th>@lang('locale.contract_type')</th>
                                    <th>@lang('locale.location')</th>
                                    <th>@lang('locale.salary')</th>
                                    <th>@lang('locale.status')</th>
                                    <th>@lang('locale.actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobOffers as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->company->name ?? '-' }}</td>
                                    <td>{{ $item->contract_type }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->salary ? number_format($item->salary, 2) : '-' }}</td>
                                    <td>
                                        <span class="badge 
                                            @if($item->status == 'active') bg-success 
                                            @elseif($item->status == 'expired') bg-warning 
                                            @else bg-danger @endif">
                                            {{ ucfirst($item->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex-items gap-5">
                                            <!-- Show -->
                                            <a class="btn-icon btn-success-light" href="{{ route('joboffers.show', $item->id) }}" title="@lang('locale.view')">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <!-- Edit -->
                                            <a class="btn-icon btn-info-light" href="{{ route('joboffers.edit', $item->id) }}" title="@lang('locale.edit')">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <!-- Delete -->
                                            <form action="{{ route('joboffers.destroy', $item->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Confirmez-vous cette suppression ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn-icon btn-danger-light" type="submit">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
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
    @endpush
</x-app-layout>
