<x-app-layout>
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body pt-4">
                    <div class="profile-info text-center mb-15">
                        <h3 class="mb-5">{{ $user->full_name }}</h3>
                        <h6 class="text-body mb-5">{{ $user->role }}</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>@lang('locale.email')</td>
                                    <td><div class="text-heading">{{ $user->email }}</div></td>
                                </tr>
                                <tr>
                                    <td>@lang('locale.phone')</td>
                                    <td><div class="text-heading">{{ $user->phone }}</div></td>
                                </tr>
                                <tr>
                                    <td>@lang('locale.status')</td>
                                    <td>
                                        <div class="badge bg-label-{{ $user->status == 'ENABLE' ? 'success' : 'danger' }}"> 
                                            {{ $user->status }}
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('profile.password.update') }}">
                        @csrf
                        @method('put')

                        @if (!$errors->isEmpty())
                        <div class="alert alert-danger mt-3">
                            <p class="text-danger">{{  implode(', ', $errors->all()) }}</p>
                        </div>
                        @endif

                        @if (session('status') === 'password-updated')
                            <div class="alert alert-success mt-3">
                                @lang('locale.password_updated_successfully')
                            </div>
                        @endif

                
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <x-input-label for="update_password_current_password">@lang('locale.current_password')</x-input-label>
                                    <x-text-input id="update_password_current_password" name="current_password" type="password" placeholder="{{ __('locale.current_password') }}" autocomplete="current-password" required/>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <x-input-label for="update_password_password">@lang('locale.new_password')</x-input-label>
                                    <x-text-input id="update_password_password" name="password" type="password" placeholder="{{ __('locale.new_password') }}" autocomplete="new-password" required/>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <x-input-label for="update_password_password_confirmation">@lang('locale.confirm_password')</x-input-label>
                                    <x-text-input id="update_password_password_confirmation" name="password_confirmation" placeholder="{{ __('locale.confirm_password') }}" type="password" autocomplete="new-password" required/>
                                </div>
                            </div>
                        </div>
                
                        <div class="flex items-center gap-4">
                            <button class="btn btn-primary w-100">@lang('locale.submit')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
