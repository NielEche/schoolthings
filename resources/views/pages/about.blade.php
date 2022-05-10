@extends('layouts.app')

@section('title')
About Us
@endsection


@section('content')
<div class="site-content" id="content" style="margin-top: 60px;">
    <div class="content-area" id="primary">
      <main class="site-main" id="main">
        <section class="section section--singular py-5 border-0  border-bottom border-dark" style="border-width: 7px !important;">
            <div class="container">
              <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                  <header class="page-header mb-0">
                    <h1 class="page-title">About SchoolThings</h1>
                    <!--<h5 class="page-subtitle"><span>A conference for who blog &amp; strategize.</span></h5>-->
                  </header>
                  <div class="paragraph in-view">
                    <div class="row in-view__child in-view__child--fadein">
                      <div class="col-12 col-lg-12">
                        <div class="dashed in-view__child">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit nisi vitae nisl vehicula, eget laoreet erat ultricies. Nunc laoreet porta enim at congue. Morbi aliquam iaculis elit. Ut ex mauris, scelerisque non ante sit amet, sagittis pellentesque justo. Quisque dignissim in enim ac tempus. Sed mollis turpis non velit pretium, vitae vehicula dolor mollis. Morbi aliquet elit at accumsan tempus.

                            Sed ac facilisis justo. Morbi non elit arcu. Donec at convallis nibh. Maecenas gravida ex eu blandit venenatis. Nunc non justo at sem elementum lacinia aliquet eu odio. Quisque eget vehicula nibh. Morbi rhoncus tellus massa, nec sollicitudin ante mattis a.
                            
                            Aenean rhoncus blandit nisl. Sed at ligula et enim lobortis tincidunt a eu massa. Cras efficitur ac arcu et ultricies. Sed auctor leo sed tincidunt aliquam. Curabitur consequat aliquam risus non laoreet. Cras mattis felis ac egestas maximus. Nulla porta, tellus ut viverra eleifend, urna mauris suscipit lacus, id molestie neque urna in magna.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <section class="section section--singular py-5">
            <div class="container">
              <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                  <header class="page-header mb-0">
                    <h5 class="page-subtitle"><span>How do we make our profit? </span></h5>
                  </header>
                  <div class="paragraph in-view">
                    <div class="row in-view__child in-view__child--fadein">
                      <div class="col-12 col-lg-12 pt-2">
                        <div class="dashed in-view__child">
                            <p></p>
                        </div>
                      </div>
                      <div class="col-12 col-lg-4">
                        <div class="service-icon__item">
                          <div class="row align-items-center">
                            <div class="col-auto"><i class="fa fa-fw fa-2x fa-grav"></i></div>
                            <div class="col">
                              <h6>1. Via subscriptions</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-4">
                        <div class="service-icon__item">
                          <div class="row align-items-center">
                            <div class="col-auto"><i class="fa fa-fw fa-2x fa-grav"></i></div>
                            <div class="col">
                              <h6>2. Percentage on items sold, bought, auctioned, etc</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-4">
                        <div class="service-icon__item">
                          <div class="row align-items-center">
                            <div class="col-auto"><i class="fa fa-fw fa-2x fa-grav"></i></div>
                            <div class="col">
                              <h6>3. Both point 1 and 2</h6>
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

        <!-- you like what you see -->
        <section class="section py-3" id="widecard">
            <div class="container-fluid border-0 border-bottom border-top border-dark" style="border-width: 7px !important">
                <div class="row in-view">
                <div class="col-12 col-xl-12 px-0">
                    <div class="reveal reveal--darken">
                    <figure class="reveal__background lazyload--el lazyload" data-bg="https://res.cloudinary.com/iamvocal/image/upload/v1652178040/unsplash_geT9OOFt9PQ_hpg86d.png"></figure>
                    <h3 class="in-view__child in-view__child--fadein text-center py-5 f40 uppercase">SchoolThings</h3>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="section py-2 border-0 ">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-12 col-xl-12">
                    <div class="d-flex justify-content-around py-0">
                        <a class="text-dark" href=""><i style="font-size: 25px" class="fa-brands fa-instagram"></i></a>
                        <a class="text-dark" href=""><i style="font-size: 25px" class="fa-brands fa-twitter"></i></a>
                        <a class="text-dark" href=""><i style="font-size: 25px" class="fa-brands fa-facebook-f"></i></a>
                        </div>
           
                  </div>
              </div>
            </div>
          </section>
      </main>
    </div>
</div>

@endsection