{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

             <!-- Present Address -->
             <div class="mt-4">
                <x-input-label for="present_address" :value="__('Present Address')" />

                <x-text-input id="present_address" class="block mt-1 w-full" type="text" name="present_address" :value="old('present_address')" required />

                <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


<x-frontend.master>
    <x-slot name="title">
        registration Home
    </x-slot>

    <main>
        <div class="card bg-light" style="margin: 5% 32%; border-radius: 1rem;">
            <div class="text-center my-4">
                <h5 style="font-size: 30px;">REGISTRATION</h5>
            </div>
            <form class="mx-4 mb-3" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="firstName" class="form-label">Full Name</label>
                    <input name="name" type="text" class="form-control" id="firstName" required>
                    <x-input-error :messages="$errors->get('name')" class="text-danger" />
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                        <x-input-error :messages="$errors->get('email')" class="text-danger" />
                </div>

                <div class="mb-3">
                    <label for="present_address" class="form-label">Present Address</label>
                    <input name="present_address" type="text" class="form-control" id="present_address" required>
                    <x-input-error :messages="$errors->get('present_address')" class="text-danger" />
                </div>

                <div class="mb-3">
                    <label for="permanent_address" class="form-label">Permanent Address</label>
                    <input name="permanent_address" type="text" class="form-control" id="permanent_address" required>
                    <x-input-error :messages="$errors->get('permanent_address')" class="text-danger" />
                </div>


                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone number</label>
                    <input name="phone_number" type="number" class="form-control" id="phoneNumber" required>
                    <x-input-error :messages="$errors->get('phone_number')" class="text-danger" />
                </div>


                <div class="d-md-flex justify-content-start align-items-center mb-3 py-2">

                    <h6 class="me-4">Gender: </h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input ml-2" type="radio" name="gender" id="maleGender"
                            value="male" />
                        <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="female" />
                        <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
                    <x-input-error :messages="$errors->get('gender')" class="text-danger" />
                </div>

                <div class="mb-3">
                    <label for="birth_date" class="form-label">Brith Date</label>
                    <input name="dob" type="date" class="form-control" id="birth_date" required>
                    <x-input-error :messages="$errors->get('dob')" class="text-danger" />
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                            <x-input-error :messages="$errors->get('password')" class="text-danger" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" required>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger" />
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-outline-light border-info" style="width: 100%">Sign Up</button>
                </div>
            </form>

            <div class="mb-1">
                <p style="margin-left: 25px;">Already have an account?<a class="text-primary"
                        href="{{ route('login') }}">Sign in</a></p>
            </div>
        </div>
    </main>

</x-frontend.master>
