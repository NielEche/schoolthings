@extends('layouts.app')

@section('title')
Market
@endsection


@section('content')

<div class="site-content" id="content" style="margin-top: 10px;">
    <div class="content-area" id="primary">
      <main class="site-main" id="main">
        <section class="section pb-3">
            <div class="container  px-5 hidden-md-down">
                <div class="row in-view text-center">
                        <div class="col-md-4 col-xl-4 mt-2">
                            <div class="section--first_cta py-2">
                                <div class="accordion-block">
                                    <div class="accordion">
                                      <div class="accordion__card accordion__card--collapse">
                                        <div class="accordion__header">
                                          <h5>
                                            <label>Sort
                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                                <path d="M24,0A24,24,0,1,0,48,24,24,24,0,0,0,24,0Zm8,25H16V23H32Z"></path>
                                                <path d="M24,0A24,24,0,1,0,48,24,24,24,0,0,0,24,0Zm0,46A22,22,0,1,1,46,24,22,22,0,0,1,24,46Zm1-23h7v2H25v7H23V25H16V23h7V16h2Z"></path>
                                              </svg>
                                            </label>
                                          </h5>
                                        </div>
                                        <div class="accordion__body pt-3 text-left bg-light border p-3" style="position: absolute; z-index:100;">
                                          <div class="accordion__content ">
                                            <div class="">
                                                <a class="f20 text-dark py-2" href="">Recommended</a>
                                            </div>
                                            <hr>
                                            <div>
                                                <a class="f20 text-dark py-2" href="">Whats New</a>
                                            </div>
                                            <hr>
                                           <div>
                                                <a class="f20 text-dark py-2" href="">Prices high to low</a>
                                           </div>
                                           <hr>
                                           <div>
                                                <a class="f20 text-dark py-2" href="">Prices low to high</a>
                                           </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-xl-2 col-sm-2 px-0">
                            <div class="section--first_cta py-2">
                                <a  style="font-family:'Poppins' !important; letter-spacing: 0em !important; border-width: 4px" class="video-popup btn btn--primary btn--round btn-light rounded-0 border-dark f12" href="">CHAIRS</a>&nbsp;
                              </div>
                        </div>
                        <div class="col-md-2 col-xl-2 col-sm-2 px-0">
                            <div class="section--first_cta py-2">
                                <a  style="font-family:'Poppins' !important; letter-spacing: 0em !important; border-width: 4px" class="video-popup btn btn--primary btn--round btn-light rounded-0 border-dark f12" href="">BOOKS</a>&nbsp;
                              </div>
                        </div>
                        <div class="col-md-2 col-xl-2 col-sm-2">
                            <div class="section--first_cta py-2">
                                <a  style="font-family:'Poppins' !important; letter-spacing: 0em !important; border-width: 4px" class="video-popup btn btn--primary btn--round btn-light rounded-0 border-dark f12" href="">LAB</a>&nbsp;
                              </div>
                        </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="section--first_cta py-2 hidden-lg-up">
                            <div class="accordion-block">
                                <div class="accordion">
                                  <div class="accordion__card accordion__card--collapse">
                                    <div class="accordion__header">
                                      <h5>
                                        <label>Sort
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                            <path d="M24,0A24,24,0,1,0,48,24,24,24,0,0,0,24,0Zm8,25H16V23H32Z"></path>
                                            <path d="M24,0A24,24,0,1,0,48,24,24,24,0,0,0,24,0Zm0,46A22,22,0,1,1,46,24,22,22,0,0,1,24,46Zm1-23h7v2H25v7H23V25H16V23h7V16h2Z"></path>
                                          </svg>
                                        </label>
                                      </h5>
                                    </div>
                                    <div class="accordion__body"  style="position: absolute">
                                      <div class="accordion__content ">
                                        <div>
                                            <a class="f20 text-dark py-2" href="">Recommended</a>
                                        </div>
                                        <div>
                                            <a class="f20 text-dark py-2" href="">Whats New</a>
                                        </div>
                                       <div>
                                            <a class="f20 text-dark py-2" href="">Prices high to low</a>
                                       </div>
                                       <div>
                                            <a class="f20 text-dark py-2" href="">Prices low to high</a>
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

        <section class="section section--singular py-4">
            <div class="container">
              <div class="row">
                <div class="col-12 col-xl-12">
                  <div class="row">
                    <div class="col-12 col-lg-3">
                      <div class="speaker-neat">
                        <div class="speaker-neat__image poster in-view">
                          <figure><img class="lazyload--el lazyload in-view__child" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="assets/media/stock/placeholder-445x600.jpg" alt="" width="445" height="600">
                            <div class="poster--cover in-view in-view__child text-right">
                              <button type="button" class="button px-3">
                              <i class="fa-regular fa-heart py-3 f20"></i>
                              </button>
                            </div>
                          </figure>
                        </div>
                        <div class="speaker-neat__copy in-view">
                          <p class="in-view__child in-view__child--fadein f18 mb-1">School chairs</p>
                          <h5 class="in-view__child in-view__child--fadein f18">N50 000</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-3">
                      <div class="speaker-neat">
                        <div class="speaker-neat__image poster in-view">
                          <figure><img class="lazyload--el lazyload in-view__child" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="assets/media/stock/placeholder-445x600.jpg" alt="" width="445" height="600">
                            <div class="poster--cover in-view in-view__child text-right">
                              <button type="button" class="button px-3">
                              <i class="fa-regular fa-heart py-3 f20"></i>
                              </button>
                            </div>
                          </figure>
                        </div>
                        <div class="speaker-neat__copy in-view">
                          <p class="in-view__child in-view__child--fadein f18 mb-1">School chairs</p>
                          <h5 class="in-view__child in-view__child--fadein f18">N50 000</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-3">
                      <div class="speaker-neat">
                        <div class="speaker-neat__image poster in-view">
                          <figure><img class="lazyload--el lazyload in-view__child" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="assets/media/stock/placeholder-445x600.jpg" alt="" width="445" height="600">
                            <div class="poster--cover in-view in-view__child text-right">
                              <button type="button" class="button px-3">
                              <i class="fa-regular fa-heart py-3 f20"></i>
                              </button>
                            </div>
                          </figure>
                        </div>
                        <div class="speaker-neat__copy in-view">
                          <p class="in-view__child in-view__child--fadein f18 mb-1">School chairs</p>
                          <h5 class="in-view__child in-view__child--fadein f18">N50 000</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-3">
                      <div class="speaker-neat">
                        <div class="speaker-neat__image poster in-view">
                          <figure><img class="lazyload--el lazyload in-view__child" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="assets/media/stock/placeholder-445x600.jpg" alt="" width="445" height="600">
                            <div class="poster--cover in-view in-view__child text-right">
                              <button type="button" class="button px-3">
                              <i class="fa-regular fa-heart py-3 f20"></i>
                              </button>
                            </div>
                          </figure>
                        </div>
                        <div class="speaker-neat__copy in-view">
                          <p class="in-view__child in-view__child--fadein f18 mb-1">School chairs</p>
                          <h5 class="in-view__child in-view__child--fadein f18">N50 000</h5>
                        </div>
                      </div>
                    </div>
                    <div class="section--first_cta  text-center py-3">
                      <a  style="font-family:'Poppins' !important; letter-spacing: 0em !important; border-width: 4px" class="video-popup btn btn--primary btn--round btn-light rounded-0 border-dark" href="https://www.youtube.com/watch?v=kHJQ9gG26HQ">Load more</a>&nbsp;
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