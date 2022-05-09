<header class="site-header border-dark bg-light" id="masthead"  style="border-width: 7px">
    <div class="site-header__wrap py-0">
      <div class="container-fluid">
        <div class="row in-view">
          <div class="col-12 col-xl-12 ">
            <div class="site-header__elements">
              <div class="site-header__mobile hidden-lg-up border-dark border-top-0 border-bottom-0" style="padding-right:0px !important; border-width: 7px; border-left:0;">
                <button class="site-header__mobile--trigger side-menu-trigger" style="line-height: 55px !important; padding-right:15px;">
                  <i class="fa fa-bars text-dark" aria-hidden="true"></i>
                </button>
              </div>
              <div class="site-header__branding hidden-md-down">
                <div class="site-branding pt-3">
                  <a href="/">
                    <h4 class="text-dark">SchoolThings</h4>
                  </a>
                </div>
              </div>
              <!--small screen-->
              <div class="site-header__branding hidden-lg-up p-0">
                <div class="site-branding pt-4 px-2">
                  <a href="/">
                    <h5 style="font-size: 13px !important;" class="text-dark">SchoolThings</h5>
                  </a>
                </div>
              </div>

              <div class="site-header__nav hidden-md-down border-dark border-top-0 border-bottom-0"  style="border-width: 7px; border-right:0;">
                <div class="site-header__menu text-center py-3">
                  <nav class="main-navigation" aria-label="Site Menu" role="navigation">
                    <div class="menu-top-menu-container">
                      <ul class="menu" id="top-menu">
                        <li class="mx-3">
                          <a class="py-0" href="about">ABOUT</a>
                        </li>
                        <li class="mx-3">
                          <a class="py-0" href="market">NEW IN</a>
                        </li>
                        <li class="mx-3">
                          <a class="py-0" href="market">TRENDING NOW</a>
                        </li>
                        <li class="mx-3">
                          <a href="market" class="py-0" href="">MARKET</a>
                        </li>
                        <li class="mx-3">
                          <a class="py-0" href="sell">SELL NOW</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
              <div class="site-header__nav hidden-md-down border-dark border-top-0 border-bottom-0"  style="border-width: 7px;">
                <div class="site-header__menu text-center py-3">
                  <nav class="main-navigation" aria-label="Site Menu" role="navigation">
                    <div class="menu-top-menu-container">
                      <ul class="menu" id="top-menu">
                        <li class="mx-3">
                          <a class="py-0" href="search"><i style="font-size: 20px" class="fa-solid fa-magnifying-glass"></i></a>
                        </li>
                        <li class="mx-3">
                          <a class="py-0" href="saved"><i style="font-size: 20px" class="fa-regular fa-heart"></i></a>
                        </li>
                        <li class="menu-item-has-children mx-3">
                          <a class="py-0" href="#"><i style="font-size: 20px" class="fa-solid fa-user"></i></a>
                          <ul class="sub-menu pt-0">
                            <li class="d-flex bg-warning pt-0 pb-0">
                              @if (Auth::check())
                            
                                <h3 class="px-2 py-2 pb-0 m-0 f16">Hi {{ auth()->user()->name}}</h3>
                                <form method="POST" action="{{ route('logout') }}" >
                                  @csrf
                                  <a class="px-3 py-1 f16 pb-0 m-0" style="font-weight: 600;" href="{{ route('logout') }}"
                                                @click.prevent="$root.submit();">
                                      {{ __('Log Out') }}
                                  </a>
                                </form>
                              @else
                                <a href="login">
                                  <span>Login/Register</span>
                                </a>
                              @endif
                            </li>
                            <li>
                              <a href="dashboard">
                                <span>My Account</span>
                              </a>
                            </li>
                            <li>
                              <a href="orders">
                                <span>My Orders</span>
                              </a>
                            </li>
                            <li>
                              <a href="delivery">
                                <span>DELIVERY & RETURNS</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>

              <div class="site-header__nav hidden-md-down">
                <div class="site-header__menu text-center py-3">
                  <nav class="main-navigation" aria-label="Site Menu" role="navigation">
                    <div class="menu-top-menu-container">
                      <ul class="menu" id="top-menu">
                        <li class="m-0">
                          <a class="py-0" href=""><i style="font-size: 20px" class="fa-solid fa-bag-shopping"></i></a>
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>

              <!--small screen-->
              <div class="site-header__nav hidden-lg-up border-dark border-top-0 border-bottom-0"  style="border-width: 7px; border-right:0;">
                <div class="site-header__menu text-center py-3">
                  <nav class="main-navigation" aria-label="Site Menu" role="navigation">
                    <div class="menu-top-menu-container">
                      <ul class="menu" id="top-menu">
                        <li class="mx-2">
                          <a class="py-0" href="search"><i style="font-size: 18px" class="fa-solid fa-magnifying-glass"></i></a>
                        </li>
                        <li class="mx-3">
                          <a class="py-0" href="saved"><i style="font-size: 18px" class="fa-regular fa-heart"></i></a>
                        </li>
                        <li class="menu-item-has-children mx-3">
                          <a class="py-0" href="#"><i style="font-size: 18px" class="fa-solid fa-user"></i></a>
                          <ul class="sub-menu pt-0">
                            <li class="d-flex bg-warning pt-0 pb-0">
                              @if (Auth::check())
                            
                                <h3 class="px-2 py-2 pb-0 m-0 f16">Hi {{ auth()->user()->name}}</h3>
                                <form method="POST" action="{{ route('logout') }}" >
                                  @csrf
                                  <a class="px-3 py-1 f16 pb-0 m-0" style="font-weight: 600;" href="{{ route('logout') }}"
                                                @click.prevent="$root.submit();">
                                      {{ __('Log Out') }}
                                  </a>
                                </form>
                              @else
                                <a href="login">
                                  <span>Login/Register</span>
                                </a>
                              @endif
                            </li>
                            <li>
                              <a href="dashboard">
                                <span>My Account</span>
                              </a>
                            </li>
                            <li>
                              <a href="orders">
                                <span>My Orders</span>
                              </a>
                            </li>
                            <li>
                              <a href="delivery">
                                <span>DELIVERY & RETURNS</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="m-0 mx-2">
                          <a class="py-0" href=""><i style="font-size: 18px" class="fa-solid fa-bag-shopping"></i></a>
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  