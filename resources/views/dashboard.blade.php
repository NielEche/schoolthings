@extends('layouts.app')

@section('title')
DASHBOARD
@endsection

@section('content')
<div class="site-content" id="content" style="margin-top: 60px;">
    <div class="content-area" id="primary">
      <main class="site-main" id="main">
        <section class="section pt-0 pb-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-xl-12 px-0 text-center">
                        <img style="width: 100%; height:250px; object-fit:cover; border-width: 7px !important" 
                            class="lazyload--el lazyload in-view__child border-0 border-bottom border-dark" 
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                            data-src="https://res.cloudinary.com/iamvocal/image/upload/v1652092475/Pin_on_mobile_covers_nboor2.jpg" 
                            alt="">
                        <div class="poster--cover in-view in-view__child text-right" style="width: 0">
                            <h1 class="w-100 pt-5 text-center px-4 text-warning" style="position: absolute">WELCOME HOME </h1>
                        </div>
                        <div style="bottom: 70px; position: relative;">
                            <img style="width: 130px; height:130px; object-fit:cover;
                                    border-radius:50%;margin-left: auto; 
                                    margin-right: auto;
                                   
                                    border-width: 4px !important" 
                            class="lazyload--el lazyload in-view__child border border-light"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                            data-src="https://res.cloudinary.com/iamvocal/image/upload/v1646663705/zruf9w8367znpuhfkggv.jpg" 
                            alt="">
                            <h3 class="f30 mt-2">{{ auth()->user()->name}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section pt-0">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row justify-content-center ">
                          <div class="col-auto d-flex">
                            <ul class="nav px-2" style="flex-direction: column">
                              <li class="nav-item">
                                <a class="nav-link text-dark active f16" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" href="#"> <i class="fa fa-user px-2"></i> Account overview</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-dark f16" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" href="#"> <i class="fa fa-box px-2"></i> My orders</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-dark f16" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" href="#"> <i class="fa-solid fa-address-card px-2"></i> My details</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-dark f16" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" href="#"> <i class="fa-solid fa-lock px-2"></i> Change password</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-dark f16" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" href="#"><i class="fa-solid fa-house px-2"></i> Address book</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-dark f16" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" href="#"> <i class="fa-solid fa-credit-card px-2"></i> Payment methods</a>
                              </li>
                              
                            </ul>
                            <style>
                                .active.nav-link{
                                font-weight: bold;
                                background-color: #ffc107!important;
                                color:#fff;
                                }
                            </style>
                            <div class="tab-content px-2" id="tabContent">
                              <div class="tab-pane fade show active bg-light border border-dark" style="border-width: 7px !important; width: 800px;" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="container py-5">
                                    <h3 class="text-dark py-2 px-2">Account Overview</h3>
                                    <div class="px-2">
                                        <p class="bold">Name: {{ auth()->user()->name}}</p>
                                        <p>Email: {{ auth()->user()->email}}</p>
                                        <p>Location: </p>
                                    </div>
                                  
                                </div>
                              </div>
                              <div class="tab-pane fade bg-light border border-dark" style="border-width: 7px !important; width: 800px;" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="container py-5">
                                    <h3 class="text-dark py-2 px-2">My Orders</h3>
                                    <div class="px-2">
                                        <p>You currently have no orders</p>
                                        <div class="section--first_cta py-3">
                                            <a  style="font-family:'Poppins' !important; letter-spacing: 0em !important; border-width: 4px" class=" btn btn--primary btn--round btn-light rounded-0 border-dark" href="market">Shop Now</a>&nbsp;
                                        </div>
                                    </div>
                                  
                                </div>
                              </div>
                              <div class="tab-pane fade bg-light border border-dark" style="border-width: 7px !important; width: 800px;" id="details" role="tabpanel" aria-labelledby="details-tab">
                                <div class="container py-5">
                                    <h3 class="text-dark py-2 px-2">My Details</h3>
                                    <div class="px-2">
                                        <p>Feel free to edit any of your details below so your SchoolThings account is totally up to date.</p>
                                        <div class="section--first_cta py-3">
                                            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                            @livewire('profile.update-profile-information-form')
                            
                                            <x-jet-section-border />
                                        @endif
                                        </div>
                                    </div>
                                  
                                </div>
                              </div>
                              <div class="tab-pane fade bg-light border border-dark" style="border-width: 7px !important; width: 800px;" id="password" role="tabpanel" aria-labelledby="password-tab">
                                <div class="container py-5">
                                    <h3 class="text-dark py-2 px-2">Edit Password</h3>
                                    <div class="px-2">
                                        <p></p>
                                        <div class="section--first_cta py-3">
                                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.update-password-form')
                                            </div>
                                                <x-jet-section-border />
                                            @endif
                                        </div>
                                    </div>
                                  
                                </div>
                              </div>
                              <div class="tab-pane fade bg-light border border-dark" style="border-width: 7px !important; width: 800px;" id="address" role="tabpanel" aria-labelledby="address-tab">
                                <div class="container py-5">
                                    <h3 class="text-dark py-2 px-2">My Address</h3>
                                    <div class="px-2">
                                        <p></p>
                                        <div class="section--first_cta py-3">
                                            <a  style="font-family:'Poppins' !important; letter-spacing: 0em !important; border-width: 4px" class=" btn btn--primary btn--round btn-light rounded-0 border-dark" href="market">Shop Now</a>&nbsp;
                                        </div>
                                    </div>
                                  
                                </div>
                              </div>
                              <div class="tab-pane fade bg-light border border-dark" style="border-width: 7px !important; width: 800px;" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                                <div class="container py-5">
                                    <h3 class="text-dark py-2 px-2">Payment Methods</h3>
                                    <div class="px-2">
                                        <p></p>
                                        <div class="section--first_cta py-3">
                                            <a  style="font-family:'Poppins' !important; letter-spacing: 0em !important; border-width: 4px" class=" btn btn--primary btn--round btn-light rounded-0 border-dark" href="market">Shop Now</a>&nbsp;
                                        </div>
                                    </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                </div>
            </div>
        </section>
      </main>
    </div>
</div>

@endsection

