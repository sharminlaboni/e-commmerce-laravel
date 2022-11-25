<x-frontend.master>
    <x-slot name="title">
        login Home
    </x-slot>

    <main>
        <div class="card bg-light" style="margin: 5% 35%; border-radius: 1rem;">
            <div class="text-center my-4">
                <h5 style="font-size: 30px;">LOGIN</h5>
            </div>
            <form class="mx-4 mb-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <div class="text-center">
                    <a class="btn btn-info btn-outline-light border-info" href="profile.html" style="padding: 6px 150px;" ;>Sign in</a>
                </div>
            </form>

            <div class="mb-3">
                <a class="btn mb-2 mx-2 text-primary" href="">Forgot your password?</a>
                <p class="mx-3">Don't have an account yet?<a class="btn text-primary" href="registration.html">Register now</a></p>
            </div>


        </div>
    </main>

</x-frontend.master>