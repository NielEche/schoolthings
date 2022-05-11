@extends('layouts.app')

@section('title')
Sell
@endsection


@section('content')

<div class="site-content" id="content" style="margin-top: 60px;">
    <div class="content-area" id="primary">
      <main class="site-main" id="main">
        <section class="section py-3 border-0 border-bottom border-dark" style="border-width: 7px !important">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-12 col-xl-12">
                    <marquee  behavior="scroll" direction="left">
                      <h3 class="uppercase f50 mb-0"><span class="px-2"> Put your products up for sale today</span> <span class="px-3"><img style="width: 25px;" class="m-0" src="https://res.cloudinary.com/nieleche/image/upload/v1651583693/Frame_zjrb4y.png" alt=""></span> <span class="px-2">AND START EARNING BIG</span></h3>
                    </marquee>
                  </div>
              </div>
            </div>
          </section>
        <section class="section">
            <div class="container  border-dark py-4 px-5" style=" border-width: 4px;">
                <x-jet-validation-errors class="mb-4" />
        
                <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
        
                    <div>
                        <x-jet-label for="name" value="{{ __('Product Title') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full bg-transparent border-bottom border-dark shadow-none" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="description" value="{{ __('Product Description') }}" />
                        <textarea name="description" class="block mt-1 w-full bg-transparent border-bottom border-dark shadow-none" cols="40" rows="7" aria-invalid="false" placeholder="..." required autofocus autocomplete="details"></textarea>
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="category" value="{{ __('Category') }}" />
                        <x-jet-input id="category" class="block mt-1 w-full bg-transparent border-bottom border-dark shadow-none" type="text" name="category" :value="old('category')" required autofocus autocomplete="category" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="quantity" value="{{ __('Quantity') }}" />
                        <x-jet-input id="quantity" class="block mt-1 w-full bg-transparent border-bottom border-dark shadow-none" type="text" name="quantity" :value="old('quantity')" required autofocus autocomplete="available" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="price" value="{{ __('Price per item') }}" />
                        <x-jet-input id="price" class="block mt-1 w-full bg-transparent border-bottom border-dark shadow-none" type="number" name="price" :value="old('price')" required autofocus autocomplete="price" />
                    </div>
                    <style>
                        ::-webkit-file-upload-button {
                            background: none;
                            border: none;
                            font-weight: bolder !important;
                        }

                        #blah{
                        max-width:180px;
                        max-height:180px;
                        object-fit: cover;
                        }
                      
                        input[type=file]{
                            padding:10px;
                            background:#2d2d2d;
                        }
                    </style>

                    <script>
                             function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#blah')
                                        .attr('src', e.target.result);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>

                    <div class="mt-4 row">
                        <div class="col-12 col-lg-4 mt-4">
                            <x-jet-label for="cover_image" value="{{ __('Cover Image ') }}*" />
                            <x-jet-input id="cover_image" type="file" onchange="readURL(this);" class="block mt-3 mb-2 w-full bg-transparent border-bottom border-dark shadow-none" id="exampleFormControlFile1" name="cover_image" required autofocus />
                            <img id="blah" src="https://res.cloudinary.com/iamvocal/image/upload/v1652264009/wh_kgublf.jpg" alt="your image" />
                        </div>

                        <div class="col-12 col-lg-4 mt-4">
                            <x-jet-label for="image1" value="{{ __('Product Image') }}" />
                            <x-jet-input id="image1" type="file" onchange="readURL(this);" class="block mt-3 mb-2 w-full bg-transparent border-bottom border-dark shadow-none" id="exampleFormControlFile1" name="image1"   autofocus />
                            <img id="blah" src="https://res.cloudinary.com/iamvocal/image/upload/v1652264009/wh_kgublf.jpg" alt="your image" />
                        </div>

                        <div class="col-12 col-lg-4 mt-4">
                            <x-jet-label for="image2" value="{{ __('Product Image ') }}" />
                            <x-jet-input id="image2" type="file" onchange="readURL(this);" class="block mt-3 mb-2 w-full bg-transparent border-bottom border-dark shadow-none" id="exampleFormControlFile1" name="image2" autofocus  />
                            <img id="blah" src="https://res.cloudinary.com/iamvocal/image/upload/v1652264009/wh_kgublf.jpg" alt="your image" />
                        </div>
                    
                    </div>
                    
        
        
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
        
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif
        
                    <div class="flex items-center justify-end mt-4">
                        <button class="ml-4 btn btn-light rounded-0 border-dark"  style="font-family:'Poppins' !important; letter-spacing: 0em !important; border-width: 4px">
                            {{ __('Sell Now') }}
                        </button>
                    </div>
                </form>
            </div>
        </section>
        
      </main>
    </div>
</div>

@endsection