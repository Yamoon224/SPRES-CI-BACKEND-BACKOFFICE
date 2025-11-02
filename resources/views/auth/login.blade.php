<x-auth-layout>
    <form method="POST" action="{{ route('auth') }}">
        @csrf
        <div class="mb-10">
            <x-input-label for="username" class="form-label">@lang('locale.username')</x-input-label>
            <x-text-input type="text" id="username" name="username" placeholder="{{ __('locale.username') }}" required />
        </div>
        <div class="mb-15">
            <div class="d-flex justify-content-between mb-5">
                <x-input-label for="password" class="form-label mb-0">@lang('locale.password')</x-input-label>
                @if (Route::has('password.request'))
                <a class="text-body" href="{{ route('password.request') }}">
                    @lang('locale.forgot')
                </a>
                @endif
            </div>

            <div class="form-group">
                <div class="input-group">
                    <x-text-input type="password" id="password" name="password" placeholder="{{ __('locale.password') }}" required />
                    <button class="input-group-text text-black toggle-password" type="button"> <i class="ri-eye-line fs-20"></i> </button>
                </div>
            </div>
        </div>

        <div class="mb-25">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" name="remember">
                <label class="form-check-label" for="remember-me">@lang('locale.remember_me')</label>
            </div>
        </div>
        <div class="mb-25">
            <button class="btn btn-primary w-100">@lang('locale.sign_in')</button>
        </div>
    </form>
</x-auth-layout>
