@extends('front_end_layout.front_end')
@section('content')
<section class="authentication">
    <div class="container">
        <div class="col-lg-4 col-md-6 mx-auto">
            <div class="auth-clm">
                <h2 class="heading26px fw_700">Resend Password?</h2>
                <p>Enter your registered email address to get a new password.</p>

                {{-- Alerts --}}
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
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertMessage">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('info'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert" id="alertMessage">
                            {{ session('info') }}
                        </div>
                    @endif
                <form action="{{ route('user.resend-password.post') }}" method="POST">
                    @csrf
                    <div class="input_warp d-flex">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                    </div>

                    <button type="submit" class="auth-btn">Send New Password</button>
                </form>

                <p class="small mb-0 text-center mt-3">
                    Remember your password?
                    <a href="{{ route('user.signin') }}" class="login-btn fw_700 text-center">Login here</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
