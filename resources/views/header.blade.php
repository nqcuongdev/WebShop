<header class="site-navbar" role="banner">
  <div class="site-navbar-top">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
          <form action="{{route('search')}}" method="POST" class="site-block-top-search" id="searchForm">
            {{csrf_field()}}
            <span class="icon icon-search2"></span>
            <input type="text" name="key" class="form-control border-0" placeholder="Search">
          </form>
        </div>

        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
          <div class="site-logo">
            <a href="{{ route('index') }}" class="js-logo-clone">DoubleC Shop</a>
          </div>
        </div>
        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
          <div class="site-top-icons">
            <ul class="site-menu js-clone-nav d-none d-md-block">
              @if(Auth::check())
                @if(Auth::user()->group_id == 0)
                <li><a href="{{route('member-infomation',Auth::user()->id)}}"><span class="icon icon-person"></span></a></li>
                <li>
                    <a href="{{route('cart')}}" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">@if(Session::has('cart')){{Session('cart')->totalQty}} @else 0 @endif</span>
                    </a>
                  </li>
                <li><a href="{{route('logout')}}"><span class="icon icon-exit_to_app"></span></a></li>
                <li class="d-inline-block d-md-none ml-md-0"><a href="" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                @elseif(Auth::user()->group_id == 1 || Auth::user()->group_id == 2)
                  <li><a href="{{route('dashboard')}}"><span class="icon-dashboard"></span></a></li>
                  <li><a href="{{route('logout')}}"><span class="icon icon-exit_to_app"></span></a></li>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                @else
                <li><a href="{{route('login')}}"><span class="icon icon-person"></span></a></li>
                <li>
                  <a href="{{route('cart')}}" class="site-cart">
                    <span class="icon icon-shopping_cart"></span>
                    <span class="count">@if(Session::has('cart')){{Session('cart')->totalQty}} @else 0 @endif</span>
                  </a>
                </li>
                <li class="d-inline-block d-md-none ml-md-0"><a href="" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
              @endif
              @else
              <li><a href="{{route('login')}}"><span class="icon icon-person"></span></a></li>
              <li>
                <a href="{{route('cart')}}" class="site-cart">
                  <span class="icon icon-shopping_cart"></span>
                  <span class="count">@if(Session::has('cart')){{Session('cart')->totalQty}} @else 0 @endif</span>
                </a>
              </li>
              <li class="d-inline-block d-md-none ml-md-0"><a href="" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
              @endif
            </ul>
          </div> 
        </div>
      </div>
    </div>
  </div> 
  <nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
      <ul class="site-menu js-clone-nav d-none d-md-block">
        <li class="active">
          <a href="{{ route('index') }}">Home</a>
        </li>
        @if(Session::has('cart'))
          <li class="has-children"><a href="{{ route('products') }}">Shop</a>
            <ul class="dropdown">
              <li><a href="{{ route('checkout') }}">Check Out</a></li>
              <li><a href="{{ route('cart') }}">Cart</a></li>
            </ul>
          </li>
        @else
          <li>
            <a href="{{ route('products') }}">Shop</a>
          </li>
        @endif
        <li>
          <a href="{{ route('about') }}">About</a>
        </li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>
