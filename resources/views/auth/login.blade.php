<x-rms-layout>

        <div class="pt-52 row">
            <div class="col col px-20">
                <h3 class="text-4xl mb-10">Returning Customer</h3>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control h-12 fs-label rounded" name="email" id="email"
                               aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control h-12 fs-label rounded" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-check float-right">
                        <input type="checkbox" class="form-check-input" value="" id="check">
                        <label class="form-check-label fs-label" for="check">Check me out</label>
                    </div>
                    <button type="submit" class="btn w-1/5 mb-5 text-white submit-button">Submit</button>
                </form>
            </div>
            <div class="col border-l-2 col px-20">
                <h3 class=" text-4xl mb-10">New Customer</h3>
                <div>
                    <p class="text-bold font-serif text-2xl">Save Time Now</p>
                    <p class="mb-3 font-serif">You don't need an account to checkout.</p>
                    <a href="#" class="bg-white border border-2 btn customBtn text-lg text-black w-1/2">Continue As Guest</a>
                </div>
                <div class="mt-16">
                    <p class="text-bold font-serif text-2xl">Save Time later</p>
                    <p class="mb-3 font-serif">Create an account for fast checkout and easy access to order history.</p>
                    <a href="#" class="bg-white border border-2 btn customBtn text-lg text-black w-1/2">Create Account</a>
                </div>
            </div>
        </div>

</x-rms-layout>
