<x-app-layout>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header justify-between">
                    <h4 class="d-flex-items gap-10">@lang('locale.service', ['suffix'=>'s'])</h4>
                    <div class="d-flex flex-wrap gap-15">
                        <button type="button" class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#add-service">
                            <i class="ri-customer-service-2-line fs-18"></i>
                            @lang('locale.add', ['param'=>__('locale.service', ['suffix'=>''])])
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        @foreach ($services as $item)
        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="card p-0 overflow-hidden">
                <img src="{{ asset($item->icon) }}" height="200px" alt="PHOTO">
                <div class="card-body p-15">
                    <h6 class="card-title mb-5">{{ $item->title }}</h4>
                    <p class="card-text">{{ $item->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            <form action="{{ route('services.destroy', $item->id) }}" method="post" onsubmit="return confirm('Confirmez-vous cette suppression ?')">
                                @csrf
                                <button class="btn btn-xs btn-danger">
                                    <i class="ri-close-line me-1"></i> @lang('locale.delete', ['param'=>''])
                                </button>
                            </form>
                        </small>
                        <small class="text-muted">
                            <button type="button" 
                                data-id="{{ $item->id }}"
                                data-title="{{ $item->title }}"
                                data-icon="{{ $item->icon }}"
                                data-description="{{ $item->description }}"
                                class="btn btn-xs btn-primary" 
                                data-bs-toggle="modal" 
                                data-bs-target="#edit-service"
                                onclick="openEditServiceModal(this)">
                                <i class="ri-edit-line me-1"></i> @lang('locale.edit', ['param'=>''])
                            </button>   
                        </small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- pagination style -->
        @if ($services->hasPages())
        <div class="d-flex-center mb-25">
            <div class="basic-pagination">
                <nav>
                    <ul>
                        {{-- Bouton précédent --}}
                        @if ($services->onFirstPage())
                            <li class="disabled"><span class="prev"><i class="ri-arrow-left-s-line"></i></span></li>
                        @else
                            <li>
                                <a href="{{ $services->previousPageUrl() }}" class="prev">
                                    <i class="ri-arrow-left-s-line"></i>
                                </a>
                            </li>
                        @endif

                        {{-- Liens des pages --}}
                        @foreach ($services->links()->elements[0] ?? [] as $page => $url)
                            @if ($page == $services->currentPage())
                                <li><a class="current">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Bouton suivant --}}
                        @if ($services->hasMorePages())
                            <li>
                                <a href="{{ $services->nextPageUrl() }}" class="next">
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                        @else
                            <li class="disabled"><span class="next"><i class="ri-arrow-right-s-line"></i></span></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        @endif
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
                            <x-text-input type="file" id="icon" name="icon" placeholder="{{ __('locale.icon') }}" />
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
</x-app-layout>
