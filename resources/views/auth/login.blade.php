<x-rms-layout>
    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row" style="margin-top: 7rem;">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center px-5">

                        <h3 class="text-4xl mb-5">Returning Customer</h3>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <!-- Login Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control rounded" name="email" id="email"
                                           aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control rounded" name="password" id="password" placeholder="Password" required autocomplete="current-password">
                            </div>

                            <div class="form-check float-right">
                                <input type="checkbox" value="" id="remember_me" name="remember">
                                <label class="form-check-label" for="check">Check me out</label>
                            </div>

                            <div class="">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration:none" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-lg btn-circle btn-outline-new-white w-100">{{ __('Log in') }}</button>

                            <x-rms-social-login></x-rms-social-login>

                        </form>
                </div>

                <div class="border-left border-warning col-lg-6 col-md-6 col-sm-12 px-5">

                    <h3 class=" text-4xl">New Customer</h3>

                    <!-- New Customer Site Bar -->
                    <x-rms-new-customer></x-rms-new-customer>

                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

</x-rms-layout>
