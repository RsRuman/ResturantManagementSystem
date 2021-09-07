<x-rms-layout>
    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row" style="margin-top: 7rem;">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center px-5">

                    <h3 class="text-4xl mb-5">Create Account</h3>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <!-- Registration Form -->
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                        <div class="form-group">
                            <input type="text" class="form-control rounded" name="name" id="name"
                                   placeholder="Name" value="{{ old('name') }}" required autofocus>
                        </div>
                        <!-- Nick Name -->
                        <div class="form-group">
                            <input type="text" class="form-control rounded" name="nick_name" id="nick_name"
                                   placeholder="Nick Name" value="{{ old('nick_name') }}" required autofocus>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <input type="email" class="form-control rounded" name="email" id="email"
                                   aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <input type="password" class="form-control rounded" name="password" id="password" placeholder="Password"
                                   required autocomplete="current-password">
                        </div>

                        <!--Confirm Password -->
                        <div class="form-group">
                            <input type="password" class="form-control rounded" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required autocomplete="current-password">
                        </div>

                        <button type="submit" class="btn btn-lg btn-circle btn-outline-new-white w-100">{{ __('Create Account') }}</button>
                        <p class="text-decoration:none float-right"><a class="p-1 text-info" href="{{ route('login') }}">Return To Login</a></p>

                    </form>

                </div>

                <div class="border-left border-warning col-lg-6 col-md-6 col-sm-12 px-5">

                    <h3 class=" text-4xl">New Customer</h3>

                    <!-- New Registration Customer Site Bar -->
                    <x-rms-new-register-customer/>

                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

</x-rms-layout>

