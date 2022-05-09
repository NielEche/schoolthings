<div class="site-sidenav" id="sidenav">
    <div class="site-sidenav__overlay side-menu-swipeable"></div>
    <div class="site-sidenav__elements side-menu-swipeable  border-dark" style="border-width: 7px">
      <div class="site-sidenav__branding py-3 border-0 border-bottom border-dark"  style="border-width: 7px !important;">
        <div class="site-branding">
          <a href="/">
            <h1 class="text-dark">SchoolThings</h1>
          </a>
        </div>
      </div>
      <div class="site-sidenav__nav py-3">
        <div class="site-sidenav__menu">
          <nav class="sidenav-navigation" aria-label="Site Mobile Menu" role="navigation">
            <div class="menu-sidenav-menu-container">
              <ul class="menu" id="sidenav-menu">
             
                <li>
                  <a href="/">HOME</a>
                </li>
                <li>
                  <a href="about">ABOUT</a>
                </li>
                <li class="menu-item-has-children">
                  <a href="#">HELP & INFORMATION</a>
                  <ul class="sub-menu">
                    <li>
                      <a href="help">HELP</a>
                    </li>
                    <li>
                      <a href="deliveryl">DELIVERY & RETURNS</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="market">NEW IN</a>
                </li>
                <li>
                  <a href="market">TRENDING NOW</a>
                </li>
                <li>
                  <a href="market">MARKET</a>
                </li>
                <li>
                  <a href="sell">SELL NOW</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="site-sidenav__cat hidden-md-up">
        <div class="d-flex justify-content-between">
          @if (Auth::check())
                            
          <h3 class="px-2 py-2 pb-0 m-0 f16">Hi {{ auth()->user()->name}}</h3>
          <form method="POST" action="{{ route('logout') }}" >
            @csrf
            <a class="px-3 f16 m-0 btn btn--secondary" style="font-weight: 600;" href="{{ route('logout') }}"
                          @click.prevent="$root.submit();">
                {{ __('Log Out') }}
            </a>
          </form>
          @else

          @endif
        </div>
        <div>
          <ul class="px-0">
            <li class="py-2">
             <a class="text-dark" href="dashboard"><i style="font-size: 18px" class="fa-solid fa-user px-2"></i> My Account</a>
            </li>
            <li class="py-2">
              <a class="text-dark" href="orders"><i style="font-size: 18px" class="fa-solid fa-box px-2"></i> My Orders</a>
            </li>
            <li class="py-2">
              <a class="text-dark" href="delivery"><i style="font-size: 18px" class="fa-solid fa-circle-question px-2"></i> Returns Information</a>
            </li>
          </ul>
        </div>
        <hr>
        <div class="container">
          <div class="d-flex justify-content-around py-2">
          <a class="text-dark" href=""><i style="font-size: 25px" class="fa-brands fa-instagram"></i></a>
          <a class="text-dark" href=""><i style="font-size: 25px" class="fa-brands fa-twitter"></i></a>
          <a class="text-dark" href=""><i style="font-size: 25px" class="fa-brands fa-facebook-f"></i></a>
          </div>
        </div>
      
      </div>
    </div>
  </div>