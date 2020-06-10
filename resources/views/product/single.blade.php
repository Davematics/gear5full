@extends('layouts.master')

@section('content')

<div class="container">
<main id="content" role="main">
<div class="my-md-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/{{ $ads->category }}">Category</a></li>
<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/{{ $ads->category }}">{{ $ads->category }}</a></li>
<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{ $ads->title }}</li>
</ol>
</nav>
</div>

<div class="row">
<div class="col-md-3">

<div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2 slick-initialized slick-slider" data-infinite="true" data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle" data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4" data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4" data-nav-for="#sliderSyncingThumb"><div class="js-prev d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4 slick-arrow" style=""></div>
<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2970px; transform: translate3d(-270px, 0px, 0px);"><div class="js-slide slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 270px;" tabindex="-1">
<img class="img-fluid" src="{{ $url.$ads->adsimages->display_photo_1 }}" alt="Image Description">
</div><div class="js-slide slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 270px; height: auto;" tabindex="0">
<img class="img-fluid" src="{{ $url.$ads->adsimages->display_photo_2 }}" alt="Image Description">
<div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off slick-initialized slick-slider slick-transform-off" data-infinite="true" data-slides-show="5" data-is-thumbs="true" data-nav-for="#sliderSyncingNav">
        <div class="slick-list draggable"><div class="js-slide slick-slide slick-active" style="cursor: pointer; width: 48px; height: auto;" data-slick-index="1" aria-hidden="false" tabindex="0">
            <img class="img-fluid" src="{{ $url.$ads->adsimages->display_photo_2 }}" alt="Image Description">
        </div><div class="js-slide slick-slide slick-active" style="cursor: pointer; width: 48px; height: auto;" data-slick-index="2" aria-hidden="false" tabindex="0">
            <img class="img-fluid" src="{{ $url.$ads->adsimages->display_photo_3 }}" alt="Image Description">
        </div><div class="js-slide slick-slide slick-active" style="cursor: pointer; width: 48px; height: auto;" data-slick-index="3" aria-hidden="false" tabindex="0">
            <img class="img-fluid" src="{{ $url.$ads->adsimages->display_photo_4 }}" alt="Image Description">
        </div></div></div>
        
</div></div></div></div>
<div class="card">
        <div class="card-header">
                Specifications
        </div>
        <div class="card-body">
    <p>
{{ $ads->specification }}
    </p>
</div>
</div>
</div>
<div class="col-md-6">
        <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{ $ads->category }}</a>
        <h2 class="font-size-25 text-lh-1dot2">{{ $ads->title }}</h2>
        <p>Brand : {{ $ads->brand }} | Similar products from {{ $ads->brand }}  </p>
        <div class="mb-2">
            <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                <div class="text-warning mr-2">
                    <small class="far fa-star "></small>
                    <small class="far fa-star text-muted"></small>
                    <small class="far fa-star text-muted"></small>
                    <small class="far fa-star text-muted"></small>
                    <small class="far fa-star text-muted"></small>
                </div> 
                <span class="text-secondary font-size-13">(0 customer review)</span>
            </a>
            <hr>
            <div class="d-flex align-items-baseline">
                    <ins class="font-size-22 text-decoration-none">₦{{ number_format($ads->amount) }}</ins>
                   
                </div>
              <br>
                <a href="/cart/{{ $ads->slug }}" class="btn px-5 btn-primary-dark transition-3d-hover btn-block"><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Add to Cart</a>
                <hr>
                <div class="card">
                        <div class="card-header">
                               Products Details
                        </div>
                        <div class="card-body">
                    <p>
{{ $ads->description }}
                    </p>
                </div>
            </div>
</div>
</div>

<div class="col-md-3">
        <div class="card">
                <div class="card-header">
                        DELIVERY & RETURNS
                </div>
                <div class="card-body">
                 
                   <ul>
                       <li>Pay online using your Naira bank card.</li>
                       <br>
                      <b>
                            <li>Delivery Information
                                    Shipped from Abroad and normally delivered between Tuesday 14 Jul and Wednesday 29 Jul. Please check exact dates in the Checkout page.</li>
                      </b>
                      <br>
                      <li>Return Policy
                            Free return within 15 days for Jumia Mall items and 7 days for other eligible items.</li>
                   </ul>
                    
                </div>
              </div>
<br>
              <div class="card">
                    <div class="card-header">
                    SELLER INFORMATION 
                    <span class="align-right fas fa-next"></span>

                    </div>
                    <div class="card-body">
                      
                        <p>Allwinshop88

                                80%Positive Seller Score
                                
                                284 Followers</p>
                        
                    </div>
                    <br>
                  </div>
</div>
</div>
<br><br>
</div>

@endsection