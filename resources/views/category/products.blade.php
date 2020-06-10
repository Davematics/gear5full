@extends('layouts.master')

@section('content')

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main" class="cart-page">
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Category</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            
            <div class="mb-6">
                    <div class="position-relative">
                    <div class="border-bottom border-color-1 mb-2">
                        <h3 class="section-title mb-0 pb-2 font-size-22">{{ $category->category_name  }} Category</h3>
                    </div>
                    <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                        data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                        data-slides-show="7"
                        data-slides-scroll="1"
                        data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                        data-arrow-left-classes="fa fa-angle-left right-1"
                        data-arrow-right-classes="fa fa-angle-right right-0"
                        data-responsive='[{
                            "breakpoint": 1400,
                            "settings": {
                            "slidesToShow": 6
                            }
                        }, {
                            "breakpoint": 1200,
                            "settings": {
                                "slidesToShow": 4
                            }
                        }, {
                            "breakpoint": 992,
                            "settings": {
                            "slidesToShow": 3
                            }
                        }, {
                            "breakpoint": 768,
                            "settings": {
                            "slidesToShow": 2
                            }
                        }, {
                            "breakpoint": 554,
                            "settings": {
                            "slidesToShow": 2
                            }
                        }]'>
                       @if (count($products)>0)
                           
                     
                        @foreach($products as $ads)
                        
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="/{{ $ads->slug }}" class="font-size-12 text-gray-5">{{ $ads->category }}</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
                                            <div class="mb-2">
                                                <a href="/{{ $ads->slug }}" class="d-block text-center"><img class="img-fluid" src="{{ $url.$ads->adsimages->display_photo_1 }}" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">₦{{ number_format($ads->amount) }}</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="/cart/{{ $ads->slug }}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="/{{ $ads->slug }}" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="/{{ $ads->slug }}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                           <br>
                           <br>
                           <h3 class="text-center text-danger">Sorry!! no product found in this category</h3>
                           <br>
                           <br>
                        @endif
                    </div>
                    </div>
                    </div>
                       
            
        </main><!-- ========== END MAIN CONTENT ========== -->
        @endsection