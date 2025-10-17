<header class="py-3">
    <nav>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <a href="{{ route('guest.homePage') }}"><img
                            src="{{ asset('user/assets/images/navbar-logo-img.png') }}" alt="" height=""
                            width=""></a>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="nav_list d-flex align-items-center  text-center">
                        <li><a href="{{ route('guest.homePage') }}">Home</a></li>
                        <li><a href="#">Tokens</a></li>
                        <li>About</li>
                        <li><a href="{{ route('guest.gamePage') }}">Games</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-9 d-flex justify-content-end align-items-center">
                    <!-- auth check -->
                    @if (Auth::check())
                    <div class="nav_btnWrapper text-end d-flex align-items-center gap-3">
                        {{-- User Image --}}
                        <div class="user-avatar">
                            <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('user/assets/images/default-user.png') }}"
                                alt="{{ Auth::user()->name }}"
                                style="width:40px; height:40px; border-radius:50%; object-fit:cover;">
                        </div>

                        {{-- User Name --}}
                        <span class="fw-bold text-dark">{{ Auth::user()->name }}</span>

                        {{-- Logout Button --}}
                        <a href="{{ route('user.logout') }}" class="register_btn">Logout</a>
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
    <ul>
        <li>
            <a href="#">
                Home
            </a>
        </li>
        <li>
            <a href="about-us.php">
                About
            </a>
        </li>
        <li>
            <a href="javascript:;" class="services_drop_btn">
                Services
            </a>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            <ul class="servicesDropdown">
                <li>
                    <a href="javascript:;"><span>Website Development</span> <i class="fa fa-angle-down"
                            aria-hidden="true"></i></a>
                    <ul>
                        <li><a href="wordpress-development.php">Wordpress Development</a></li>
                        <li><a href="ecommerce-website.php">Ecommerce website</a></li>
                        <li><a href="website-application.php">Website Application</a></li>
                        <li><a href="php-development.php">php Development</a></li>
                        <li><a href="laravel-development.php">Laravel Development</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><span>Digital Marketing</span> <i class="fa fa-angle-down"
                            aria-hidden="true"></i></a>
                    <ul>
                        <li><a href="seo.php">SEO</a></li>
                        <li><a href="smm.php">SMM</a></li>
                        <li><a href="ppc.php">PPC</a></li>
                        <li><a href="orm.php">ORM</a></li>
                        <li><a href="content-marketing.php">Content Marketing</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><span>Corporate Branding</span> <i class="fa fa-angle-down"
                            aria-hidden="true"></i></a>
                    <ul>
                        <li><a href="logo-design.php">Logo Design</a></li>
                        <li><a href="brand-identity.php">Brand Identiry</a></li>
                        <li><a href="ui-ux-design.php">UI/UX Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><span>Mobile Application</span> <i class="fa fa-angle-down"
                            aria-hidden="true"></i></a>
                    <ul>
                        <li><a href="ios-development.php">IOS Development</a></li>
                        <li><a href="andriod-development.php">Android Development</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="our-work.php">
                Work
            </a>
        </li>
        <li>
            <a href="our-work.php">
                Packages
            </a>
        </li>
        <li>
            <a href="contact-us.php">
                Contact
            </a>
        </li>
    </ul>
    <div class="social_links d-flex gap-2">
        <a href="https://www.facebook.com/" class="social_icon fb_icon"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/" class="social_icon insta_icon"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/" class="social_icon linked_icon"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://x.com/" class="social_icon x_twitter_icon"><i class="fa-brands fa-x-twitter"></i></a>
    </div>
    <a href="javascript:;" class="menu_close">Close</a>
</div>
