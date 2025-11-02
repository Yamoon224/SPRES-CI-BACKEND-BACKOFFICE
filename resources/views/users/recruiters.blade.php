<x-app-layout>
    @push('links')
    <link rel="stylesheet" href="{{ asset('css/plugins/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/buttons.bootstrap5.min.css') }}">
    @endpush

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header justify-between">
                    <h4 class="d-flex-items gap-10">@lang('locale.recruiter', ['suffix'=>'s'])</h4>
                </div>
                <div class="card-body pt-15">
                    <div class="table-responsive custom--scrollbar">
                        <table class="table text-nowrap w-100 table-hover table-sm table-responsive" id="commonTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>@lang('locale.company_name')</th>
                                    <th>@lang('locale.full_name')</th>
                                    <th>@lang('locale.email')</th>
                                    <th>@lang('locale.phone')</th>
                                    <th>@lang('locale.status')</th>
                                    <th>@lang('locale.actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recruiters as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->company->name }}</td>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td><span class="badge bg-label-{{ $item->status == 'ENABLE' ? 'success' : 'danger' }}">{{ $item->status }}</span></td>
                                    <td>
                                        <div class="d-flex-items gap-5">
                                            <form action="{{ route('users.destroy', $item->id) }}" method="post" onsubmit="return confirm('Confirmez-vous cette suppression ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn-icon btn-danger-light removeRow">
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
