@extends('front_end_layout.front_end')
@section('content')
    <!--start page wrapper -->
    <section class="authentication">
        <div class="container">
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="auth-clm">
                    <h2 class="heading26px fw_700">Create Your Account</h2>
                    <p>Create your account to explore about our app</p>

                    {{-- Show Validation Errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success mt-3 text-center" id="alertMessage">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger mt-3 text-center" id="alertMessage">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('user.signup.post') }}" method="POST">
                        @csrf
                        <div class="input_warp d-flex">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name"
                                required>
                        </div>
                        <div class="input_warp d-flex">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address"
                                required>
                        </div>
{{-- 
                        <div class="input_warp d-flex position-relative">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                            <i class="fa fa-eye" id="togglePassword" aria-hidden="true" style="cursor: pointer;"></i>
                        </div> --}}


                          <div class="input_warp d-flex position-relative">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" id="login_password" name="password" placeholder="Password" required
                                autocomplete="current-password">
                            <i class="fa fa-eye toggle-password" data-target="login_password" aria-hidden="true"
                                style="cursor: pointer;"></i>
                        </div>



                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="form-check">
                                <input class="form-check-input me-2" type="checkbox" id="rememberMe" required>
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                        </div>

                        <button type="submit" class="auth-btn">Sign Up</button>
                    </form>

                    <p class="small mb-0 text-center">
                        Have an account?
                        <a href="{{ route('user.signin') }}" class="login-btn fw_700 text-center">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
