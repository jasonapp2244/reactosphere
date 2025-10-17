<header class="py-3">
    <nav>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <a href="{{ route('guest.homePage') }}"><img
                            src="{{ asset('user/assets/images/navbar-logo-img.png') }}" alt="" height=""
                            width=""></a>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <ul class="nav_list d-flex align-items-center  text-center">
                        <li><a href="{{ route('guest.homePage') }}">Home</a></li>
                        <li><a href="{{ route('guest.tokenPage') }}">Tokens</a></li>
                        <li>About</li>
                        <li><a href="{{ route('guest.gamePage') }}">Games</a></li>
                        <li><a href="#">Feature</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-9 d-flex justify-content-end align-items-center gap_cls">
                    <div class="nav_btnWrapper text-end d-none">
                        <a href="login.php" class="login_bnt">Log In</a>
                        <a href="signup.php" class="register_btn">Register</a>
                    </div>
                    @if (Auth::check())
                        <div class="tokens_box d-flex">
                            <img style="max-width: 70px;" src="{{ asset('user/assets/images/coin_reacto.jpeg') }}" alt="">
                            <h3>450</h3>
                        </div>
                        <div class="user-clm">
                            <ul>
                                <!-- <li><a href="notification.php"><i class="fa fa-bell" aria-hidden="true"></i></a></li> -->
                                <li>
                                    <div class="user-wrap">
                                        <div class="usr-img">
                                            <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->profile_picture) : asset('user/assets/images/default.jpg') }}"
                                                alt="{{ Auth::user()->name }}"
                                                style="width:40px; height:40px; border-radius:50%; object-fit:cover;">
                                        </div>
                                        <div class="usr-name">

                                            <h3 class="user_name d-none d-md-block">{{ Auth::user()->name }}</h3>
                                            <!-- <span class="d-none d-lg-block">jamieedunn@gmail.com</span> -->
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <ul class="myDrop">
                                        {{-- <li><a href="user_profile.php ">Profile</a></li> --}}
                                        <li><a href="{{ route('user.logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="nav_btnWrapper text-end">
                            <a href="{{ route('user.signin') }}" class="login_bnt">Log In</a>
                            <a href="{{ route('user.signup') }}" class="register_btn">Register</a>
                        </div>
                    @endif



















                    <div class="hamBurger d-block d-lg-none">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="responsive_menu">
    <img src="{{ asset('user/assets/images/navbar-logo-img.png') }}" alt="Logo" class="logo img-fluid"
        width="180" height="42">
    <ul class="responsive_ul">
        <li>
            <a href="{{ route('guest.homePage') }}">
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('guest.tokenPage') }}">
                Tokens
            </a>
        </li>
        <li>
            <a href="#">
                About
            </a>
        </li>
        <li>
            <a href="{{ route('guest.gamePage') }}">
                Games
            </a>
        </li>
        <li><a href="#">Feature</a></li>
    </ul>
    <div class="social_links d-flex gap-2">
        <a href="#" class="social_icon fb_icon"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="social_icon insta_icon"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="social_icon linked_icon"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#" class="social_icon x_twitter_icon"><i class="fa-brands fa-x-twitter"></i></a>
    </div>
    <a href="javascript:;" class="menu_close">&#x2715;</a>
</div>
