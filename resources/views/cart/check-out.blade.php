@extends('layouts.master')

@section('content')

<main id="content" role="main" class="checkout-page">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-5">
            <h1 class="text-center">Checkout</h1>
        </div>
        <!-- Accordion -->
        <div id="shopCartAccordion" class="accordion rounded mb-5">
            <!-- Card -->
            <div class="card border-0">
                {{-- <div id="shopCartHeadingOne" class="alert alert-primary mb-0" role="alert">
                    Returning customer? <a href="#" class="alert-link" data-toggle="collapse" data-target="#shopCartOne" aria-expanded="false" aria-controls="shopCartOne">Click here to login</a>
                </div> --}}
                <div id="shopCartOne" class="collapse border border-top-0" aria-labelledby="shopCartHeadingOne" data-parent="#shopCartAccordion" style="">
                    <!-- Form -->
                    {{-- <form class="js-validate p-5" action="{{ route('order.store') }}" novalidate="novalidate"> --}}
                        <!-- Title -->
                        <div class="mb-5">
                            <p class="text-gray-90 mb-2">Welcome back! Sign in to your account.</p>
                            <p class="text-gray-90">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                        </div>
                        <!-- End Title -->

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrEmailExample3">Email address</label>
                                    <input type="email" class="form-control" name="email" id="signinSrEmailExample3" placeholder="Email address" aria-label="Email address" value="{{ auth()->user()->email }}" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success" disabled>
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrPasswordExample2">Password</label>
                                    <input type="password" class="form-control" name="password" id="signinSrPasswordExample2" placeholder="********" aria-label="********" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Form Group -->
                            </div>
                        </div>

                        <!-- Checkbox -->
                        <div class="js-form-message mb-3">
                            <div class="custom-control custom-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rememberCheckbox" name="rememberCheckbox" required="" data-error-class="u-has-error" data-success-class="u-has-success">
                                <label class="custom-control-label form-label" for="rememberCheckbox">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <!-- End Checkbox -->

                        <!-- Button -->
                        <div class="mb-1">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary-dark-w px-5">Login</button>
                            </div>
                            <div class="mb-2">
                                <a class="text-blue" href="#">Lost your password?</a>
                            </div>
                        </div>
                        <!-- End Button -->
                    </form>
                    <!-- End Form -->
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Accordion -->

        <!-- Accordion -->
        <div id="shopCartAccordion1" class="accordion rounded mb-6">
            <!-- Card -->
            <div class="card border-0">
                <div id="shopCartHeadingTwo" class="alert alert-primary mb-0" role="alert">
                    Have a coupon? <a href="#" class="alert-link" data-toggle="collapse" data-target="#shopCartTwo" aria-expanded="false" aria-controls="shopCartTwo">Click here to enter your code</a>
                </div>
                <div id="shopCartTwo" class="collapse border border-top-0" aria-labelledby="shopCartHeadingTwo" data-parent="#shopCartAccordion1" style="">
                    {{-- <form class="js-validate p-5" novalidate="novalidate"> --}}
                        <p class="w-100 text-gray-90">If you have a coupon code, please apply it below.</p>
                        <div class="input-group input-group-pill max-width-660-xl">
                            <input type="text" class="form-control" name="name" placeholder="Coupon code" aria-label="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-block btn-dark font-weight-normal btn-pill px-4">
                                    <i class="fas fa-tags d-md-none"></i>
                                    <span class="d-none d-md-inline">Apply coupon</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Accordion -->
        <form class="js-validate" method="POST" novalidate="novalidate"  action="{{ route('orders.store') }}">
                @csrf
            <div class="row">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                    <div class="pl-lg-3 ">
                        <div class="bg-gray-1 rounded-lg">
                            <!-- Order Summary -->
                            <div class="p-4 mb-4 checkout-table">
                                <!-- Title -->
                                <div class="border-bottom border-color-1 mb-5">
                                    <h3 class="section-title mb-0 pb-2 font-size-25">Your order</h3>
                                </div>
                                <!-- End Title -->

                                <!-- Product Content -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <script>
                                    let shiping=0;
                                    let shiping2=0;
                                    let vendor_state='';
                                    let shipping_fee=0;
                                     let shipping_fee2=0
                                     var buyer_state;
                                    </script>
                                    <script>
                                       function anotherAddres(){
                                           if(document.getElementById('shippingdiffrentAddress').checked){
                                            var buyer_state=document.getElementById('state').value;
                                            
                                           }else{
                                            
                                           buyer_state='{{ auth()->user()->state }}';
                                       }}
                                       
                                       
                                       </script>
                                            <?php $total = 0 ?>
                                            @foreach((array) session('cart') as $id => $details)
                                                <?php $total += $details['amount'] * $details['quantity'] ?>
                                            @endforeach
                                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                        <tr class="cart_item">
                                        <script>
                                        
                                         vendor_state='{{ $details['state'] }}';
                                         if(vendor_state==buyer_state){
                                            shiping=1;
                                            shipping_fee=500;
                                             console.log(shiping)
                                         }
                                         if(vendor_state!=buyer_state){
                                            shiping2=shiping2+1;
                                            console.log(shiping2)
                                            shipping_fee1=1500*shiping2;
                                         }
                                         total_fee=shipping_fee1+shipping_fee;
                                         console.log(total_fee);
                                         
                                        </script>
                                            <td>{{ $details['goods'] }}&nbsp;<strong class="product-quantity">× {{ $details['quantity'] }}</strong></td>
                                            <td>₦{{  number_format($details['amount'] * $details['quantity']) }}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                      
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>₦{{  number_format($details['amount'] * $details['quantity']) }}</td>
                                        </tr>
                                        <tr>
                                            <th onclick="anotherAddres()">Shipping</th>
                                            <script>
                                                    let t="<?php echo $total;?>"
                                                    let tt=parseFloat(t);
                                                         let total=parseFloat(tt+total_fee).toLocaleString();
                                                    document.getElementById("y").innerHTML="₦"+
                                                    parseFloat(total_fee).toLocaleString();
                                                                                                  </script>
                                            <td id="y">₦ <script>document.write(parseFloat(total_fee).toLocaleString())</script></td>
                                            
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td><strong>₦<script>
                                            document.write( total)
                                            </script></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- End Product Content -->
                                <div class="border-top border-width-3 border-color-1 pt-3 mb-3">
                                    <!-- Basics Accordion -->
                                    <div id="basicsAccordion1">
                                        <!-- Card -->
                                        <div class="border-bottom border-color-1 border-dotted-bottom">
                                            <div class="p-3" id="basicsHeadingOne">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="stylishRadio1" name="stylishRadio" checked="">
                                                    <label class="custom-control-label form-label" for="stylishRadio1" data-toggle="collapse" data-target="#basicsCollapseOnee" aria-expanded="true" aria-controls="basicsCollapseOnee">
                                                        Direct bank transfer
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="basicsCollapseOnee" class="collapse show border-top border-color-1 border-dotted-top bg-dark-lighter" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion1">
                                                <div class="p-4">
                                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card -->

                                        <!-- Card -->
                                        <div class="border-bottom border-color-1 border-dotted-bottom">
                                            <div class="p-3" id="basicsHeadingTwo">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="secondStylishRadio1" name="stylishRadio">
                                                    <label class="custom-control-label form-label" for="secondStylishRadio1" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                                        Check payments
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="basicsCollapseTwo" class="collapse border-top border-color-1 border-dotted-top bg-dark-lighter" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion1">
                                                <div class="p-4">
                                                    Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card -->

                                        <!-- Card -->
                                        <div class="border-bottom border-color-1 border-dotted-bottom">
                                            <div class="p-3" id="basicsHeadingThree">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="thirdstylishRadio1" name="stylishRadio">
                                                    <label class="custom-control-label form-label" for="thirdstylishRadio1" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                                        Cash on delivery
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="basicsCollapseThree" class="collapse border-top border-color-1 border-dotted-top bg-dark-lighter" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion1">
                                                <div class="p-4">
                                                    Pay with cash upon delivery.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card -->

                                        <!-- Card -->
                                        <div class="border-bottom border-color-1 border-dotted-bottom">
                                            <div class="p-3" id="basicsHeadingFour">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="FourstylishRadio1" name="stylishRadio">
                                                    <label class="custom-control-label form-label" for="FourstylishRadio1" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                                        PayPal <a href="#" class="text-blue">What is PayPal?</a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="basicsCollapseFour" class="collapse border-top border-color-1 border-dotted-top bg-dark-lighter" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion1">
                                                <div class="p-4">
                                                    Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                    <!-- End Basics Accordion -->
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between px-3 mb-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck10" required="" data-msg="Please agree terms and conditions." data-error-class="u-has-error" data-success-class="u-has-success">
                                        <label class="form-check-label form-label" for="defaultCheck10">
                                            I have read and agree to the website <a href="#" class="text-blue">terms and conditions </a>
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary-dark-w btn-block btn-pill font-size-20 mb-3 py-3">Place order</button>
                            </div>
                            <!-- End Order Summary -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 order-lg-1">
                    <div class="pb-7 mb-7">
                        <!-- Title -->
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title mb-0 pb-2 font-size-25">Billing details</h3>
                        </div>
                        <!-- End Title -->

                        <!-- Billing Form -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="firstName" placeholder="Jack" aria-label="Jack" required="" value="{{ auth()->user()->name }}" data-msg="Please enter your frist name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off" disabled>
                                </div>
                                <!-- End Input -->
                            </div>

                            {{-- <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Last name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="lastName" placeholder="Wayley" aria-label="Wayley" required="" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div> --}}

                            <div class="w-100"></div>

                            {{-- <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Company name (optional)
                                    </label>
                                    <input type="text" class="form-control" name="companyName" placeholder="Company Name" aria-label="Company Name" data-msg="Please enter a company name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div> --}}

                           
                            <div class="col-md-8">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Street address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="streetAddress" disabled>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-4">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Apt, suite, etc.
                                    </label>
                                    <input type="text" class="form-control" disabled >
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        City
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="cityAddress" value="{{ auth()->user()->state }}" disabled>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Postcode/Zip
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="postcode" disabled>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="w-100"></div>

                            {{-- <div class="col-md-12">
                                    <!-- Input -->
                                    <div class="js-form-message mb-6">
                                        <label class="form-label">
                                            State
                                            <span class="text-danger">*</span>
                                        </label>
                                       
                                   <select name="" id="" class="form-control">
                                       <option value="">select</option>
                                   </select>
                                    </div></div> --}}
                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Email address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" disabled>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Phone
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->phone }}" disabled>
                                </div>
                                <!-- End Input -->
                            </div>
                            <div class="col-md-6">
                                    <!-- Input -->
                                    <div class="js-form-message mb-6">
                                        <label class="form-label">
                                            State
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="cityAddress" value="{{ auth()->user()->state }}" disabled>
                                    </div>
                                    <!-- End Input -->
                                </div>
                                <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-6">
                                            <label class="form-label">
                                                    LGA
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="cityAddress" value="{{ auth()->user()->lga }}" disabled>
                                        </div>
                                        <!-- End Input -->
                                    </div>
        
                            <div class="w-100"></div>
                        </div>
                        <!-- End Billing Form -->

                        <!-- Accordion -->
                        <div id="shopCartAccordion2" class="accordion rounded mb-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div id="shopCartHeadingThree" class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="createAnaccount" name="createAnaccount">
                                    <label class="custom-control-label form-label" for="createAnaccount" data-toggle="collapse" data-target="#shopCartThree" aria-expanded="false" aria-controls="shopCartThree">
                                        Create an account?
                                    </label>
                                </div>
                                <div id="shopCartThree" class="collapse" aria-labelledby="shopCartHeadingThree" data-parent="#shopCartAccordion2" style="">
                                    <!-- Form Group -->
                                    <div class="js-form-message form-group py-5">
                                        <label class="form-label" for="signinSrPasswordExample1">
                                            Create account password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="password" class="form-control" name="password" id="signinSrPasswordExample1" placeholder="********" aria-label="********" required="" data-msg="Enter password." data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Accordion -->
                        <!-- Title -->
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title mb-0 pb-2 font-size-25">Shipping Details details</h3>
                        </div>
                        <!-- End Title -->
                        <!-- Accordion -->
                        <div id="shopCartAccordion3" class="accordion rounded mb-5">
                            <!-- Card -->
                            <div class="card border-0">
                                <div id="shopCartHeadingFour" class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" name="diffaddress" value="yes" class="custom-control-input" id="shippingdiffrentAddress" name="shippingdiffrentAddress" onclick="anotherAddres()">
                                    <label class="custom-control-label form-label" for="shippingdiffrentAddress" data-toggle="collapse" data-target="#shopCartfour" aria-expanded="false" aria-controls="shopCartfour">
                                        Ship to a different address?
                                    </label>
                                </div>
                                <div id="shopCartfour" class="collapse mt-5" aria-labelledby="shopCartHeadingFour" data-parent="#shopCartAccordion3" style="">
                                    <!-- Shipping Form -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    First name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="firstName" placeholder="Jack" aria-label="Jack" required="" data-msg="Please enter your frist name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Last name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="lastName" placeholder="Wayley" aria-label="Wayley" required="" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-md-12">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Company name (optional)
                                                </label>
                                                <input type="text" class="form-control" name="companyName" placeholder="Company Name" aria-label="Company Name" data-msg="Please enter a company name." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        
                                        <div class="col-md-8">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Street address
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="streetAddress" placeholder="470 Lucy Forks" aria-label="470 Lucy Forks" required="" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-4">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Apt, suite, etc.
                                                </label>
                                                <input type="text" class="form-control" placeholder="YC7B 3UT" aria-label="YC7B 3UT" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success" name="apt">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    City
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="cityAddress" placeholder="London" aria-label="London" required="" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Postcode/Zip
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="postcode" placeholder="567890" aria-label="99999" required="" data-msg="Please enter a postcode or zip code." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-md-12">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                    <label class="control-label">State of Delivery</label>
                                                    <select
                                                      onchange="toggleLGA(this);anotherAddres();"
                                                      name="state"
                                                      id="state"
                                                      class="form-control"
                                                    >
                                                      <option value="" selected="selected">- Select -</option>
                                                      <option value="Abia">Abia</option>
                                                      <option value="Adamawa">Adamawa</option>
                                                      <option value="AkwaIbom">AkwaIbom</option>
                                                      <option value="Anambra">Anambra</option>
                                                      <option value="Bauchi">Bauchi</option>
                                                      <option value="Bayelsa">Bayelsa</option>
                                                      <option value="Benue">Benue</option>
                                                      <option value="Borno">Borno</option>
                                                      <option value="Cross River">Cross River</option>
                                                      <option value="Delta">Delta</option>
                                                      <option value="Ebonyi">Ebonyi</option>
                                                      <option value="Edo">Edo</option>
                                                      <option value="Ekiti">Ekiti</option>
                                                      <option value="Enugu">Enugu</option>
                                                      <option value="FCT">FCT</option>
                                                      <option value="Gombe">Gombe</option>
                                                      <option value="Imo">Imo</option>
                                                      <option value="Jigawa">Jigawa</option>
                                                      <option value="Kaduna">Kaduna</option>
                                                      <option value="Kano">Kano</option>
                                                      <option value="Katsina">Katsina</option>
                                                      <option value="Kebbi">Kebbi</option>
                                                      <option value="Kogi">Kogi</option>
                                                      <option value="Kwara">Kwara</option>
                                                      <option value="Lagos">Lagos</option>
                                                      <option value="Nasarawa">Nasarawa</option>
                                                      <option value="Niger">Niger</option>
                                                      <option value="Ogun">Ogun</option>
                                                      <option value="Ondo">Ondo</option>
                                                      <option value="Osun">Osun</option>
                                                      <option value="Oyo">Oyo</option>
                                                      <option value="Plateau">Plateau</option>
                                                      <option value="Rivers">Rivers</option>
                                                      <option value="Sokoto">Sokoto</option>
                                                      <option value="Taraba">Taraba</option>
                                                      <option value="Yobe">Yobe</option>
                                                      <option value="Zamfara">Zamafara</option>
                                                    </select>
                                                  </div>
                                                  <div class="form-group">
                                                        <label class="control-label">LGA of Delivery</label>
                                                        <select
                                                          name="lga"
                                                          id="lga"
                                                          class="form-control select-lga"
                                                          required
                                                        >
                                                        </select>
                                                      </div>
                                                    </form>
                                            </div>
                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Email address
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" name="emailAddress" placeholder="jackwayley@gmail.com" aria-label="jackwayley@gmail.com" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Input -->
                                            <div class="js-form-message mb-6">
                                                <label class="form-label">
                                                    Phone
                                                </label>
                                                <input type="text" class="form-control" placeholder="+1 (062) 109-9222" aria-label="+1 (062) 109-9222" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success" name="phone">
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="w-100"></div>
                                    </div>
                                    <!-- End Shipping Form -->
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Accordion -->
                        <!-- Input -->
                        <div class="js-form-message mb-6">
                            <label class="form-label">
                                Order notes (optional)
                            </label>

                            <div class="input-group">
                                <textarea class="form-control p-5" rows="4" name="text" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>


<script src="{{asset('/assets/js/lga.min.js') }}"></script>
@endsection
