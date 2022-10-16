<header id="header" role="banner">
    <div class="header__top-bar">
        <div class="header__top-bar-container header__flex">
            <div class="header__top-bar-row header__flex">
                <div class="header__top-bar-elements header__flex">
                    <div class="header__top-bar-oval header__flex">
                        <x-svg.icons.homepage.header_top.phone class="top-bar-icon" />
                        <div class="top-bar-contact header__flex">+60 11-6086 6135</div>
                    </div>
                    <div class="header__top-bar-oval header__flex">
                        <x-svg.icons.homepage.header_top.envelope class="top-bar-icon" />
                        <a href="mailto:tridentcatch@gmail.com">tridentcatch@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav id="header__nav-wrapper" class="header__flex" role="navigation">
        <div class="header__nav-container header__flex">
            <div class="header__nav-left header__flex">
                <div class="header__nav-logo header__flex">
                    <a href="{{ url('/') }}">
                        <x-svg.icons.homepage.navbar.nav-site-logo class="site-logo" />
                    </a>
                </div>
                <div class="header__nav-menu header__flex">
                    <ul class="header__nav-menu-links header__flex">
                        <li>
                            <x-nav-link route="home">Home</x-nav-link>
                        </li>
                        <li>
                            <x-nav-link route="shop.index">Shop</x-nav-link>
                        </li>
                        <li>
                            <x-nav-link route="about-us">About Us</x-nav-link>
                        </li>
                        <li>
                            <x-nav-link route="contact-us">Contact Us</x-nav-link>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- Authentication links --}}
            <div class="header__nav-right header__flex">
                <div class="header__nav-menu header__flex">
                    <ul class="header__nav-menu-links header__flex">
                        @guest
                            <li class="header__flex">
                                <a class="right-link header__flex" href="{{ route('register') }}" title="register">
                                    <span aria-hidden="true" class="nav-account-text">
                                        {{ __('Register') }}
                                    </span>
                                </a>
                            </li>
                            <li class="header__flex">
                                <a class="right-link header__flex" href="{{ route('login') }}" title="login">
                                    <span aria-hidden="true" class="nav-account-text">
                                        {{ __('Login') }}
                                    </span>
                                </a>
                            </li>
                        @else
                            <li class="header__flex">
                                <a class="right-link header__flex" href="#">
                                    <span aria-hidden="true" class="nav-account-text">
                                        {{ __('My Account') }}
                                    </span>
                                </a>
                            </li>
                            <li class="header__flex">
                                <a class="right-link header__flex" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span aria-hidden="true" class="nav-account-text">
                                        {{ __('Logout') }}
                                    </span>
                                </a>

                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        @endguest
                        {{-- Cart --}}
                        <li>
                            <a class="right-link header__flex" href="{{ route('cart.index') }}">
                                <div class="nav-cart-count-container header__flex">
                                    <span class="nav-cart-icon header__flex">
                                        <x-svg.icons.homepage.navbar.cart class="cart-icon" />
                                    </span>
                                    @if (Cart::instance('default')->count() > 0)
                                    <span class="nav-cart-count header__flex">
                                        {{ Cart::instance('default')->count() }}
                                    </span>
                                    @else <span class="nav-cart-count header__flex">0</span>
                                    @endif
                                </div>
                                <div class="nav-cart-text-container header__flex">
                                    <span aria-hidden="true" class="nav-cart-text header__flex">
                                        Cart
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        document.getElementByID('logoutForm').addEventListener('onsubmit', function(event) {
            event.preventDefault()
        });
    </script>
</header>