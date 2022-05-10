@extends('layouts.app')

@section('title')
Contact
@endsection


@section('content')
<div class="site-content" id="content" style="margin-top: 60px;">
    <div class="content-area" id="primary">
        <main class="site-main" id="main">
            <section class="section section--singular py-5 border-0 border-bottom border-dark" style="border-width: 7px !important;">
                <div class="container">
                    <header class="page-header mb-5">
                        <h1 class="page-title">REACH OUT TO US </h1>
                        <!--<h5 class="page-subtitle"><span>A conference for who blog &amp; strategize.</span></h5>-->
                    </header>
                    <div class="container">
                        <div class="d-flex justify-content-around py-2">
                            <a class="text-dark" href="mailto:INFO@SCHOOLTHINGS.COM"><i style="font-size: 30px" class="fa-regular fa-envelope"></i></a>
                            <a class=" text-dark" href="tel:07059373809"><i style="font-size: 30px" class="fa-solid fa-phone"></i></a>
                            <a class="text-dark" href=""><i style="font-size: 30px" class="fa-brands fa-instagram"></i></a>
                            <a class="text-dark" href=""><i style="font-size: 30px" class="fa-brands fa-twitter"></i></a>
                            <a class="text-dark" href=""><i style="font-size: 30px" class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--singular py-5">
                <div class="container">
                    <header class="page-header mb-5">
                        <h1 class="page-title">NEWSLETTER</h1>
                        <!--<h5 class="page-subtitle"><span>A conference for who blog &amp; strategize.</span></h5>-->
                    </header>
                    <div class="widget m-0">
                        <div class="widget_nav_menu">
                               <!-- Begin MailChimp Signup Form -->
                                      <!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->
                                      <div id="mc_embed_signup">
                                        <form style="border-width: 3px !important" class="border-dark border-bottom border-0" action="YOUR_FORM_ACTION_URL" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                                          target="_blank" novalidate>
                                          <!-- Action URL sample: //pixudio.us15.list-manage.com/subscribe/post?u=4f175e7a78cd5c1fce7ef555a&id=8f06b51a52 -->
          
                                          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                          <div class="sr-only" aria-hidden="true">
                                            <input type="text" name="YOUR_FORM_HASHED_KEY" tabindex="-1" value="">
                                            <!-- Hashed key sample: b_4f175e7a78cd5c1fce7ef555a_8f06b51a52 -->
                                          </div>
          
                                          <style>
                                            input::placeholder {
                                              color:#000 !important;
                                            }
                                          </style>
          
                                          <div id="mc_embed_signup_scroll">
                                            <div class="flex-md-wrap">
                                              <div class="mc-field-group flex-md-1">
                                                <input class="text-dark text-decoration-none bg-transparent" style="outline-offset: 0px !important; --tw-ring-color: transparent; border-color:transparent;" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address" autocomplete='email'>
                                              </div>
                                              <div class="mc-field-group flex-md-1">
                                                <input class="text-dark text-decoration-none bg-transparent" style="outline-offset: 0px !important; --tw-ring-color: transparent; border-color:transparent;" type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name" autocomplete='given-name'>
                                              </div>
                                              <div class="mc-field-group">
                                                <input type="submit" value="+" name="subscribe" id="mc-embedded-subscribe" class="bg-transparent mt-2">
                                              </div>
                                            </div>
                                            <!-- .flex-md-wrap -->
          
                                            <div id="mce-responses" class="clearfix">
                                              <div class="response margin-top" id="mce-error-response" style="display:none"></div>
                                              <div class="response margin-top" id="mce-success-response" style="display:none"></div>
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                      <!--End mc_embed_signup-->
                        </div>
                      </div>
                </div>
            </section>
        </main>
    </div>
</div>

@endsection
