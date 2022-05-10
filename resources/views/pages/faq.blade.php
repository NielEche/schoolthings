@extends('layouts.app')

@section('title')
FAQS
@endsection


@section('content')

<div class="site-content" id="content" style="margin-top: 60px;">
    <div class="content-area" id="primary">
      <main class="site-main" id="main">
        <section class="section section--singular py-5 border-0 border-dark" style="border-width: 7px !important;">
            <div class="container">
                <header class="page-header mb-5">
                    <h1 class="page-title">FAQ </h1>
                    <!--<h5 class="page-subtitle"><span>A conference for who blog &amp; strategize.</span></h5>-->
                </header>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            How can I contact you?
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>1. Track your order
                                All you need to do is log intoMy Account and select the order you want to track.
                                
                                Click the ‘Track Order’ button to follow your parcel.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Where is my order?
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> <p>1. Track your order
                            All you need to do is log intoMy Account and select the order you want to track.
                            
                            Click the ‘Track Order’ button to follow your parcel.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            How can I find your international delivery information?
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Find all international delivery information here. Simply select the relevant country in the drop down list and you'll be presented with the different delivery methods available and costs.</p>
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