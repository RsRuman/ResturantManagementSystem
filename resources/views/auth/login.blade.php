<x-rms-layout>
    <div class="pt-52 row">
        <div class="col col px-20">

            <h3 class="text-4xl mb-10">Returning Customer</h3>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control h-12 fs-label rounded" name="email" id="email"
                           aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control h-12 fs-label rounded" name="password" id="password" placeholder="Password" required autocomplete="current-password">
                </div>
                <div class="form-check float-right">
                    <input type="checkbox" class="form-check-input" value="" id="remember_me" name="remember">
                    <label class="form-check-label fs-label" for="check">Check me out</label>
                </div>
                <div class="mb-2">
                    @if (Route::has('password.request'))
                        <a class="fs-label text-decoration:none" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <button type="submit" class="btn w-1/5 mb-5 text-white submit-button">{{ __('Log in') }}</button>

                <x-rms-social-login/>

            </form>

        </div>

        <div class="col border-l-2 col px-20">

            <h3 class=" text-4xl mb-10">New Customer</h3>
            <!-- New Customer Site Bar -->
            <x-rms-new-customer/>

        </div>

    </div>
</x-rms-layout>
