<nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
    @include('partials.navlist')
</nav>
<nav class="navbar-default navbar-static-top">
    @if(!isset($checkout))
    <a href="/checkout" class="btn-embossed {{ ($totalCartItems > 0)? '' : 'hidden'}}" data-type="checkout">Proceed to checkout</a>
    @endif
    <button type="button" class="navbar-toggle visible-xs visible-sm pull-left" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body" style="margin-left: 7px;border-radius: 0;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="visible-xs visible-sm pull-right" style="margin-top: 5px; color: white;" href="/checkout">
        <i class="fa fa-2x fa-shopping-cart" aria-hidden="true"></i>
        (<span data-type="cart_items_count">{{ $totalCartItems }}</span>)
    </a>
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @endif
            <li>
                <a href="{{ url('/contact-us') }}">Contact us</a>
            </li>
            <li>
                <a href="{{ url('/') }}">Track order</a>
            </li>
            @if (!Auth::guest())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            @if(\Auth::user()->is_admin)
                                <a href="{{ url('/admin') }}">
                                    Admin
                                </a>
                            @endif
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif

            <li>
                <a href="/checkout">
                    Basket (<span data-type="cart_items_count">{{ $totalCartItems }}</span>)
                </a>
            </li>
        </ul>
</nav>