@extends('front_end_layout.front_end')
@section('content')
    <section class="authentication">
        <div class="container">
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="auth-clm">
                    <h2 class="heading26px fw_700">Welcome Back</h2>
                    <p>We're glad to see you again. Let's get you back to work!</p>

                    {{-- Alert Messages --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alertMessage">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger mt-3 text-center" id="alertMessage">
                            {{ session('error') }}
                        </div>
                    @endif


                    @if (session('info'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert" id="alertMessage">
                            {{ session('info') }}
                        </div>
                    @endif

                    <form action="{{ route('user.login.post') }}" method="POST">
                        @csrf
                        <div class="input_warp d-flex">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            {{-- <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}"
                                required> --}}
                            <input style="color: black" type="email" name="email" value="{{ request('email') }}"
                                placeholder="Enter your email" class="" required>

                        </div>

                        <div class="input_warp d-flex position-relative">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" id="login_password" name="password" placeholder="Password" required
                                autocomplete="current-password">
                            <i class="fa fa-eye toggle-password" data-target="login_password" aria-hidden="true"
                                style="cursor: pointer;"></i>
                        </div>


                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="form-check">
                                <input class="form-check-input me-2" type="checkbox" name="remember" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>

                            {{-- <a href="" class="small forgot-link">Forgot Password?</a> --}}
                        </div>

                        <p class="mt-2">
                            Didn't get email? <a class="small forgot-link"
                                href="{{ route('user.resend-password.form') }}">Resend password</a>
                        </p>



                        <button type="submit" class="auth-btn">Login</button>
                    </form>

                    <div class="social-btns mb-3 d-flex align-items-center"></div>

                    <p class="small mb-0 text-center">
                        New Here?
                        <a href="{{ route('user.signup') }}" class="login-btn fw_700 text-center">Create an account</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
