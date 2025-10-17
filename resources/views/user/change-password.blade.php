@extends('front_end_layout.front_end')
@section('content')
    <section class="authentication">
        <div class="container">
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="auth-clm">
                    <h2 class="heading26px fw_700">Change Password</h2>
                    <p>For your account security, please update your password.</p>

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

                    <form action="{{ route('user.change-password.post') }}" method="POST">
                        @csrf
                        <div class="input_warp d-flex position-relative">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" name="current_password" id="current_password"
                                placeholder="Current Password" required autocomplete="current-password">
                            <i class="fa fa-eye toggle-password" data-target="current_password" aria-hidden="true"
                                style="cursor: pointer;"></i>
                        </div>

                        <div class="input_warp d-flex position-relative">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" name="password" id="new_password" placeholder="New Password" required
                                autocomplete="new-password">
                            <i class="fa fa-eye toggle-password" data-target="new_password" aria-hidden="true"
                                style="cursor: pointer;"></i>
                        </div>

                        <div class="input_warp d-flex position-relative">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" name="password_confirmation" id="confirm_password"
                                placeholder="Confirm New Password" required autocomplete="new-password">
                            <i class="fa fa-eye toggle-password" data-target="confirm_password" aria-hidden="true"
                                style="cursor: pointer;"></i>
                        </div>


                        <button type="submit" class="auth-btn">Update Password</button>
                    </form>

                    {{-- <p class="small mb-0 text-center mt-3">
                        <a href="{{ route('user.logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="login-btn fw_700 text-center text-danger">Logout</a>
                    </p> --}}
                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
