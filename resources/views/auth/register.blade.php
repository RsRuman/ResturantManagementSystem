<x-rms-layout>
    <div class="pt-40 row">
        <div class="col col px-20">

            <h3 class="text-4xl mb-10">Create Account</h3>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <!-- Login Form -->
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
                <div class="form-group mb-3">
                    <input type="text" class="form-control h-12 fs-label rounded" name="name" id="name"
                           placeholder="Name" value="{{ old('name') }}" required autofocus>
                </div>
                <!-- Nick Name -->
                <div class="form-group mb-3">
                    <input type="text" class="form-control h-12 fs-label rounded" name="nick_name" id="nick_name"
                           placeholder="Nick Name" value="{{ old('nick_name') }}" required autofocus>
                </div>

                <!-- Email -->
                <div class="form-group mb-3">
                    <input type="email" class="form-control h-12 fs-label rounded" name="email" id="email"
                           aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}" required autofocus>
                </div>

                <!-- Password -->
                <div class="form-group mb-3">
                    <input type="password" class="form-control h-12 fs-label rounded" name="password" id="password" placeholder="Password"
                           required autocomplete="current-password">
                </div>

                <!--Confirm Password -->
                <div class="form-group mb-3">
                    <input type="password" class="form-control h-12 fs-label rounded" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required autocomplete="current-password">
                </div>

                <button type="submit" class="btn mb-5 text-white submit-button">{{ __('Create Account') }}</button>
                <p class="fs-label text-decoration:none float-right"><a href="{{ route('login') }}">Return To Login</a></p>

            </form>

        </div>

        <div class="col border-l-2 col px-20">

            <h3 class=" text-4xl mb-10">New Customer</h3>
            <!-- New Customer Site Bar -->
            <x-rms-new-register-customer/>

        </div>

    </div>
</x-rms-layout>
