@extends('layouts.app')

@section('title')
Market
@endsection

@section('content')
<style>
    .wrapper {
    margin: 0 auto;
    text-align: center;
    }

    .image-gallery {
    margin: 0 auto;
    display: table;
    }

    .primary,
    .thumbnails {
    display: table-cell;
    }


    .primary {
    width: 600px;
    height: 400px;
    background-color: #cccccc;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    }

    .thumbnail:hover .thumbnail-image, .selected .thumbnail-image {
    border: 4px solid red;
    }

    .thumbnail-image {
    width: 60px;
    height: 60px;
    margin: 20px auto;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    border: 4px solid #fff;
    }
</style>
<div class="site-content" id="content" style="margin-top: 40px;">
    <div class="content-area" id="primary">
      <main class="site-main" id="main">

          <section class="section border-0 border-bottom border-dark"  style="border-width: 7px !important" id="productdetails">
            <div class="container">
              <div class="row">
                <div class="col-12 col-xl-12">
                  <div class="row in-view">
              
                    <div class="col-12 col-md-6 hidden-lg-up">
                      <main class="primary" style="background-image: url('https://res.cloudinary.com/iamvocal/image/upload/v1650130074/Airdrop_jd1xsf.png');"></main>
                    </div>

                    <div class="col-12 col-md-2 hidden-lg-up">
                      <aside class="thumbnails d-flex py-3">
                      <a href="#" class="selected thumbnail" data-big="http://placekitten.com/420/600">
                        <div class="thumbnail-image mx-2 mt-0 mb-2" style="background-image: url(http://placekitten.com/420/600)"></div>
                      </a>
                      <a href="#" class="thumbnail" data-big="http://placekitten.com/450/600">
                        <div class="thumbnail-image mx-2 mt-0 mb-2" style="background-image: url(http://placekitten.com/450/600)"></div>
                      </a>
                      <a href="#" class="thumbnail" data-big="http://placekitten.com/460/700">
                        <div class="thumbnail-image mx-2 mt-0 mb-2" style="background-image: url(http://placekitten.com/460/700)"></div>
                      </a>
                      </aside>
                    </div>

                    <div class="col-12 col-md-5">
                        <div class="">
                          <h2 class="f30  in-view__child in-view__child--fadein">SCHOOL CHAIRS</h2>
                          <p class="in-view__child in-view__child--fadein">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas sodales malesuada. Nullam faucibus porta feugiat. Integer maximus luctus nisl nec congue. Curabitur a ante dictum, cursus felis ut, pulvinar ex. Fusce volutpat sem et accumsan facilisis. Sed mollis auctor eleifend. Sed venenatis imperdiet nisl ut porta. </p>
                          <h2 class="f30  in-view__child in-view__child--fadein">N50 000</h2>

                            <div class="section--first_cta  text-left py-3">
                                <a  style="font-family:'Poppins' !important; letter-spacing: 0em !important; border-width: 4px" class="video-popup btn btn--primary btn--round btn-warning rounded-0 border-dark pb-2" href="https://www.youtube.com/watch?v=kHJQ9gG26HQ">ADD TO BAG</a>&nbsp;
                                <button type="button" class="button px-5">
                                  <i class="fa-regular fa-heart f30"></i>
                                  </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 hidden-md-down">
                      <main class="primary" style="background-image: url('https://res.cloudinary.com/iamvocal/image/upload/v1650130074/Airdrop_jd1xsf.png');"></main>
                    </div>

                    <div class="col-12 col-md-1 text-right hidden-md-down">
                      <aside class="thumbnails">
                      <a href="#" class="selected thumbnail" data-big="http://placekitten.com/420/600">
                        <div class="thumbnail-image mx-3 mt-0 mb-2" style="background-image: url(http://placekitten.com/420/600)"></div>
                      </a>
                      <a href="#" class="thumbnail" data-big="http://placekitten.com/450/600">
                        <div class="thumbnail-image mx-3 mt-0 mb-2" style="background-image: url(http://placekitten.com/450/600)"></div>
                      </a>
                      <a href="#" class="thumbnail" data-big="http://placekitten.com/460/700">
                        <div class="thumbnail-image mx-3 mt-0 mb-2" style="background-image: url(http://placekitten.com/460/700)"></div>
                      </a>
                      </aside>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>


          <section class="section section--singular py-5">
            <div class="container">
              <div class="row">
                <div class="col-12 col-xl-12">
                  <header class="page-header mb-4 pt-4">
                    <h1 class="page-title f30">YOU MIGHT ALSO LIKE</h1>
                  </header>
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
                  </div>
                </div>
              </div>
            </div>
          </section>
   
      </main>
    </div>
</div>


<script>
    $('.thumbnail').on('click', function() {
    var clicked = $(this);
    var newSelection = clicked.data('big');
    var $img = $('.primary').css("background-image","url(" + newSelection + ")");
    clicked.parent().find('.thumbnail').removeClass('selected');
    clicked.addClass('selected');
    $('.primary').empty().append($img.hide().fadeIn('slow'));
    });
</script>

@endsection