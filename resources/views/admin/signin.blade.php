@include('layouts.partials.header_script')
<!--start page wrapper -->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="p-4">
                                <div class="mb-3 text-center">
                                    <img src="{{ asset('admin/images/logo-icon.png') }}" h="60" alt="" />
                                </div>
                                <div class="text-center mb-4">
                                    <h5 class="">IMS Admin</h5>
                                    <p class="mb-0">Please log in to your account</p>
                                </div>
                                {{-- Error Message --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                        id="loginError">
                                        {{ $errors->first() }}
                                    </div>
                                @endif
                                <div class="form-body">
                                    <form class="row g-3" method="POST" action="{{ route('admin.signin.post') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                id="inputEmailAddress" placeholder="john@example.com"
                                                autocomplete="username" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="password" class="form-control"
                                                    id="inputChoosePassword" placeholder="Enter Password"
                                                    autocomplete="current-password" required>
                                                <a href="javascript:void(0);" class="input-group-text bg-transparent">
                                                    <i class='bx bx-hide'></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn"
                                                    style="color: #fff; background-color: #1492dd;">Sign in</button>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-3">
                                            <p>Or sign in with:</p>
                                            <a href="{{ route('social.redirect', ['provider' => 'google']) }}"
                                                class="btn btn-outline-danger btn-sm">
                                                <i class="bx bxl-google"></i> Google
                                            </a>
                                            <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}"
                                                class="btn btn-outline-primary btn-sm">
                                                <i class="bx bxl-facebook"></i> Facebook
                                            </a>
                                            <a href="{{ route('social.redirect', ['provider' => 'apple']) }}"
                                                class="btn btn-outline-dark btn-sm">
                                                <i class="bx bxl-apple"></i> Apple
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end page wrapper -->
@include('layouts.partials.header_script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let errorAlert = document.getElementById("loginError");
        if (errorAlert) {
            setTimeout(() => {
                errorAlert.style.transition = "opacity 0.5s";
                errorAlert.style.opacity = "0";
                setTimeout(() => errorAlert.remove(), 500);
            }, 5000);
        }
    });
</script>
