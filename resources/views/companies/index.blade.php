<x-app-layout>
    @push('links')
    <link rel="stylesheet" href="{{ asset('css/plugins/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/buttons.bootstrap5.min.css') }}">
    @endpush

    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box d-flex-between flex-wrap gap-15">
                <h1 class="page-title fs-18 lh-1">@lang('locale.company', ['suffix'=>app()->getLocale() == 'en' ? 'ies' : 's'])</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-example1 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@lang('locale.dashboard')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('locale.company', ['suffix'=>app()->getLocale() == 'en' ? 'ies' : 's'])</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header justify-between">
                    <h4 class="d-flex-items gap-10">
                        <i class="ri-building-line fs-18"></i> 
                        @lang('locale.list', ['param'=>''])
                    </h4>
                    <div class="d-flex flex-wrap gap-15">
                        <a role="button" class="btn btn-primary d-flex align-items-center gap-2" href="{{ route('companies.create') }}">
                            <i class="ri-building-line fs-18"></i>
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
                                    <th>@lang('locale.company_name')</th>
                                    <th>@lang('locale.email')</th>
                                    <th>@lang('locale.phone')</th>
                                    <th>@lang('locale.industry')</th>
                                    <th>@lang('locale.website')</th>
                                    <th>@lang('locale.address')</th>
                                    <th>@lang('locale.actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex-items gap-10">
                                            <div class="avatar avatar-xs radius-100">
                                                <img class="radius-100" src="{{ asset($item->logo) }}" alt="image not found">
                                            </div>
                                            <a href="company-details.html">{{ $item->name }}</a>
                                        </div>
                                    </td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->industry }}</td>
                                    <td>{{ $item->website }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        <div class="d-flex-items gap-5">
                                            <!-- Show / View -->
                                            <a class="btn-icon btn-success-light" href="{{ route('companies.show', $item->id) }}" title="@lang('locale.view')">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                    
                                            <!-- Edit -->
                                            <a class="btn-icon btn-info-light" href="{{ route('companies.edit', $item->id) }}" title="@lang('locale.edit')">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                    
                                            <!-- Delete -->
                                            <form action="{{ route('companies.destroy', $item->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('@lang('locale.confirm_delete')');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn-icon btn-danger-light" onclick="return confirm('Confirmez-vous cette suppression ?')">
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
    
    <div class="modal fade" id="add-service" tabindex="-1" aria-labelledby="add-service-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-24 text-white" id="add-service-modal">@lang('locale.add', ['param'=>__('locale.service', ['suffix'=>''])])</h1>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-10">
                            <x-input-label for="service_name" class="form-label">@lang('locale.service_name')</x-input-label>
                            <x-text-input type="text" id="service_name" name="title" placeholder="{{ __('locale.service_name') }}" required />
                        </div>
                        <div class="mb-10">
                            <x-input-label for="icon" class="form-label">@lang('locale.icon')</x-input-label>
                            <x-text-input type="file" id="icon" name="icon" placeholder="{{ __('locale.icon') }}" required />
                        </div>
                        <div class="mb-10">
                            <x-input-label for="description" class="form-label">@lang('locale.description')</x-input-label>
                            <textarea type="text" id="description" class="form-control" name="description" placeholder="{{ __('locale.description') }}" required></textarea>
                        </div>

                        <div class="mb-10">
                            <button class="btn btn-primary w-100">@lang('locale.submit')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-service" tabindex="-1" aria-labelledby="add-service-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-24 text-white" id="add-service-modal">@lang('locale.edit', ['param'=>__('locale.service', ['suffix'=>''])])</h1>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="edit-service-form" enctype="multipart/form-data">
                        @method('PUT')  
                        @csrf
                        <div class="mb-10">
                            <x-input-label for="edit-service-title" class="form-label">@lang('locale.service_name')</x-input-label>
                            <x-text-input type="text" id="edit-service-title" name="title" placeholder="{{ __('locale.service_name') }}" required />
                        </div>
                        <div class="mb-10">
                            <x-input-label for="icon" class="form-label">@lang('locale.icon')</x-input-label>
                            <x-text-input type="file" id="icon" name="icon" placeholder="{{ __('locale.icon') }}" required />
                        </div>
                        <div class="mb-10">
                            <x-input-label for="edit-service-description" class="form-label">@lang('locale.description')</x-input-label>
                            <textarea type="text" id="edit-service-description" class="form-control" name="description" placeholder="{{ __('locale.description') }}" required></textarea>
                        </div>

                        <div class="mb-10">
                            <button class="btn btn-primary w-100">@lang('locale.submit')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script>
        let openEditServiceModal = (button) => {
            const serviceId = button.getAttribute('data-id');
            const serviceTitle = button.getAttribute('data-title');
            const serviceDesc = button.getAttribute('data-description');

            document.getElementById('edit-service-title').value = serviceTitle;
            document.getElementById('edit-service-description').value = serviceDesc;

            const form = document.getElementById('edit-service-form');
            const baseUrl = document.querySelector('meta[name="app-url"]').getAttribute('content');
            form.action = `${baseUrl}/services/${serviceId}`;

            const modal = document.getElementById('edit-service');
            modal.classList.remove('hidden');
        }
    </script>
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
