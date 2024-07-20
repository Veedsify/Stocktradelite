<!-- Header -->
<header id="header_main" class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__body d-flex justify-content-between">
                    <div class="header__left">
                        <div class="logo">
                            <a class="light" href="{{route('index')}}">
                                <img src="{{asset('assets/images/logo/logo.png')}}" alt="" width="75" height="75"
                                    data-retina="assets/images/logo/logo@2x.png')}}" data-width="118" data-height="32">
                            </a>
                            <a class="dark" href="{{route('index')}}">
                                <img src="{{asset('assets/images/logo/logo-dark.png')}}" alt="" width="75" height="75"
                                    data-retina="assets/images/logo/logo-dark@2x.png')}}" data-width="75"
                                    data-height="75">
                            </a>
                        </div>
                        <div class="left__main">
                            <nav id="main-nav" class="main-nav">

                                <ul id="menu-primary-menu" class="menu">
                                    <li class="menu-item">
                                        <a href="{{route('index')}}" data-id="home">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('about')}}" data-id="about">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('markets')}}" data-id="markets">Markets</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('login')}}" data-id="live-updates">Live Updates</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="" data-id="blogs">Blog</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" data-id="more">More</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="{{route('terms-of-use')}}" data-id="terms-of-use">Terms of
                                                    Use</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('privacy.policy')}}" data-id="privacy-policy">Privacy
                                                    Policy</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('contact')}}" data-id="contact">Contact</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('faq')}}" data-id="faq">FAQ</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- /#main-nav -->
                        </div>
                    </div>

                    <div class="header__right">
                        <div class="mode-switcher">
                            <a class="sun" href="#" onclick="switchTheme()">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.99993 11.182C9.7572 11.182 11.1818 9.75745 11.1818 8.00018C11.1818 6.24291 9.7572 4.81836 7.99993 4.81836C6.24266 4.81836 4.81812 6.24291 4.81812 8.00018C4.81812 9.75745 6.24266 11.182 7.99993 11.182Z"
                                        stroke="#23262F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M8 1V2.27273" stroke="#23262F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M8 13.7271V14.9998" stroke="#23262F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M3.04956 3.04932L3.9532 3.95295" stroke="#23262F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.0469 12.0469L12.9505 12.9505" stroke="#23262F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M1 8H2.27273" stroke="#23262F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M13.7273 8H15" stroke="#23262F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M3.04956 12.9505L3.9532 12.0469" stroke="#23262F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.0469 3.95295L12.9505 3.04932" stroke="#23262F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <a href="#" class="moon" onclick="switchTheme()">
                                <svg width="14" height="14" viewbox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.0089 8.97241C12.7855 9.64616 12.4491 10.2807 12.0107 10.8477C11.277 11.7966 10.2883 12.5169 9.1602 12.9244C8.03209 13.3319 6.81126 13.4097 5.64056 13.1486C4.46987 12.8876 3.39772 12.2986 2.54959 11.4504C1.70145 10.6023 1.1124 9.53013 0.851363 8.35944C0.590325 7.18874 0.668097 5.96791 1.07558 4.8398C1.48306 3.71169 2.2034 2.72296 3.1523 1.9893C3.71928 1.55094 4.35384 1.21447 5.02759 0.991088C4.69163 1.84583 4.54862 2.77147 4.61793 3.7009C4.72758 5.17128 5.36134 6.55346 6.40394 7.59606C7.44654 8.63866 8.82873 9.27242 10.2991 9.38207C11.2285 9.45138 12.1542 9.30837 13.0089 8.97241Z"
                                        stroke="white" stroke-width="1.4" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="mobile-button"><span></span></div>
                        <div class="wallet">
                            @auth
                            <a href="{{route('user')}}"> Dashboard </a>
                            @endauth
                            @guest
                            <a href="{{route('login')}}"> Login </a>
                            @endguest
                        </div>
                        @auth()
                        <div class="dropdown user">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton4"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('assets/images/avt/avt-01.jpg')}}" alt="">
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <a class="dropdown-item" href="#"><i
                                        class="bx bx-user font-size-16 align-middle me-1"></i>
                                    <span>Profile</span></a>
                                <a class="dropdown-item" href="#"><i
                                        class="bx bx-wallet font-size-16 align-middle me-1"></i>
                                    <span>My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span
                                        class="badge bg-success float-end">11</span><i
                                        class="bx bx-wrench font-size-16 align-middle me-1"></i>
                                    <span>Settings</span></a>
                                <a class="dropdown-item" href="#"><i
                                        class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                                    <span>Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a href="{{route('logout')}}" class="dropdown-item text-danger"
                                    href="user-login.html"><i
                                        class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                    <span>Logout</span></a>
                            </div>
                        </div>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end Header -->