<x-app-layout>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header justify-between">
                    <h4 class="d-flex-items gap-10">@lang('locale.testimonial', ['suffix'=>'s'])</h4>
                    <div class="d-flex flex-wrap gap-15">
                        <button type="button" class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#add-testimonial">
                            <i class="ri-chat-quote-line fs-18"></i>
                            @lang('locale.add', ['param'=>__('locale.testimonial', ['suffix'=>''])])
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        @foreach ($testimonials as $item)
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="card text-center">
                <div class="card-header border-0">
                    <div class="avatar avatar-big m-auto">
                        <img src="https://ui-avatars.com/api/?name={{ str_replace(' ', '+', $item->user->full_name) }}" class="radius-100" alt="PHOTO">
                    </div>
                </div>
                <div class="card-body mb-15">
                    <h5 class="mb-5">{{ $item->user->full_name . " : " . $item->user->role }}</h5>
                    <p class="mb-5">@lang('locale.rating') : {{ $item->rating }}</p>
                    <p>{{ $item->content }}.</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex-center gap-15">
                        <a 
                            data-id="{{ $item->id }}"
                            data-user_id="{{ $item->user_id }}"
                            data-content="{{ $item->content }}"
                            data-rating="{{ $item->rating }}"
                            data-bs-toggle="modal" 
                            data-bs-target="#edit-testimonial"
                            onclick="openEdittestimonialModal(this)"
                            class="btn-icon btn-warning-light fs-16">
                            <i class="ri-edit-line"></i>
                        </a>
                        <form action="{{ route('testimonials.destroy', $item->id) }}" method="post" onsubmit="return confirm('Confirmez-vous cette suppression ?')">
                            @csrf
                            <button class="btn btn-xs btn-danger">
                                <i class="ri-close-line me-1"></i> @lang('locale.delete', ['param'=>''])
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- pagination style -->
        @if ($testimonials->hasPages())
        <div class="d-flex-center mb-25">
            <div class="basic-pagination">
                <nav>
                    <ul>
                        {{-- Bouton précédent --}}
                        @if ($testimonials->onFirstPage())
                            <li class="disabled"><span class="prev"><i class="ri-arrow-left-s-line"></i></span></li>
                        @else
                            <li>
                                <a href="{{ $testimonials->previousPageUrl() }}" class="prev">
                                    <i class="ri-arrow-left-s-line"></i>
                                </a>
                            </li>
                        @endif

                        {{-- Liens des pages --}}
                        @foreach ($testimonials->links()->elements[0] ?? [] as $page => $url)
                            @if ($page == $testimonials->currentPage())
                                <li><a class="current">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Bouton suivant --}}
                        @if ($testimonials->hasMorePages())
                            <li>
                                <a href="{{ $testimonials->nextPageUrl() }}" class="next">
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
    
    <div class="modal fade" id="add-testimonial" tabindex="-1" aria-labelledby="add-testimonial-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-24 text-white" id="add-testimonial-modal">@lang('locale.add', ['param'=>__('locale.testimonial', ['suffix'=>''])])</h1>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
                        @csrf
                        <select name="user_id" id="user_id" class="form-control" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->full_name." : ".$user->role }}</option>
                            @endforeach
                        </select>
                        <div class="mb-10">
                            <x-input-label for="content" class="form-label">@lang('locale.content')</x-input-label>
                            <textarea type="text" id="content" class="form-control" name="content" placeholder="{{ __('locale.content') }}" required></textarea>
                        </div>
                        <div class="mb-10">
                            <x-input-label for="rating" class="form-label">@lang('locale.rating')</x-input-label>
                            <x-text-input type="number" id="rating" name="rating" placeholder="{{ __('locale.rating') }}" required />
                        </div>

                        <div class="mb-10">
                            <button class="btn btn-primary w-100">@lang('locale.submit')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-testimonial" tabindex="-1" aria-labelledby="add-testimonial-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-24 text-white" id="add-testimonial-modal">@lang('locale.edit', ['param'=>__('locale.testimonial', ['suffix'=>''])])</h1>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="edit-testimonial-form" enctype="multipart/form-data">
                        @method('PUT')  
                        @csrf
                        <div class="mb-10">
                            <x-input-label for="edit-testimonial-user_id" class="form-label">@lang('locale.user')</x-input-label>
                            <select name="user_id" id="edit-testimonial-user_id" class="form-control" required>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->full_name." : ".$user->role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-10">
                            <x-input-label for="edit-testimonial-content" class="form-label">@lang('locale.content')</x-input-label>
                            <textarea type="text" id="edit-testimonial-content" class="form-control" name="content" placeholder="{{ __('locale.content') }}" required></textarea>
                        </div>
                        <div class="mb-10">
                            <x-input-label for="edit-testimonial-rating" class="form-label">@lang('locale.rating')</x-input-label>
                            <x-text-input type="number" id="edit-testimonial-rating" name="rating" placeholder="{{ __('locale.rating') }}" required />
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
        let openEdittestimonialModal = (button) => {
            const testimonialId = button.getAttribute('data-id');
            const testimonialUserId = button.getAttribute('data-user_id');
            const testimonialContent = button.getAttribute('data-content');
            const testimonialRating = button.getAttribute('data-rating');

            document.getElementById('edit-testimonial-content').value = testimonialContent;
            document.getElementById('edit-testimonial-rating').value = testimonialRating;

            // Sélectionner le bon utilisateur
            const userSelect = document.getElementById('edit-testimonial-user_id');
            if (userSelect) {
                userSelect.value = testimonialUserId;
            }

            const form = document.getElementById('edit-testimonial-form');
            const baseUrl = document.querySelector('meta[name="app-url"]').getAttribute('content');
            form.action = `${baseUrl}/testimonials/${testimonialId}`;

            const modal = document.getElementById('edit-testimonial');
            modal.classList.remove('hidden');
        }
    </script>
</x-app-layout>
