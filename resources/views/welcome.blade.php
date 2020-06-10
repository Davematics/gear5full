<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<!-- Title -->
<title>Gear 5 | Online Store </title>

<!-- Required Meta Tags Always Come First -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->
<link rel="shortcut icon" href="../../favicon.png">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="{{asset('/user/assets/vendor/font-awesome/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('/user/assets/css/font-electro.css')}}">

<link rel="stylesheet" href="{{asset('/user/assets/vendor/animate.css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('/user/assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
<link rel="stylesheet" href="{{asset('/user/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
<link rel="stylesheet" href="{{asset('/user/assets/vendor/fancybox/jquery.fancybox.css')}}">
<link rel="stylesheet" href="{{asset('/user/assets/vendor/slick-carousel/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('/user/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">

<!-- CSS Electro Template -->
<link rel="stylesheet" href="{{asset('/user/assets/css/theme.css')}}">
</head>

<body>

<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header-left-aligned-nav">
<div class="u-header__section">
<!-- Topbar -->
<div class="u-header-topbar py-2 d-none d-xl-block">
<div class="container">
<div class="d-flex align-items-center">
<div class="topbar-left">
<a href="#" class="text-gray-110 font-size-13 hover-on-dark">Welcome to Nigeria Number One Online Multi Vendor Store</a>
</div>
<div class="topbar-right ml-auto">
<ul class="list-inline mb-0">
<li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
<a href="/register/vendor" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i>vendor signup</a>
</li>
<li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
<a href="/my-order" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
</li>
<li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
<div class="d-flex align-items-center">
<!-- Language -->
<div class="position-relative">
<a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal" href="javascript:;" role="button"
aria-controls="languageDropdown"
aria-haspopup="true"
aria-expanded="false"
data-unfold-event="hover"
data-unfold-target="#languageDropdown"
data-unfold-type="css-animation"
data-unfold-duration="300"
data-unfold-delay="300"
data-unfold-hide-on-scroll="true"
data-unfold-animation-in="slideInUp"
data-unfold-animation-out="fadeOut">
<span class="d-inline-block d-sm-none">US</span>
<span class="d-none d-sm-inline-flex align-items-center"><i class="ec ec-naria mr-1"></i> NARIA (₦)</span>
</a>

<div id="languageDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">
{{-- <a class="dropdown-item active" href="#">English</a> --}}
{{-- <a class="dropdown-item" href="#">Deutsch</a>
<a class="dropdown-item" href="#">Español‎</a> --}}
</div>
</div>
<!-- End Language -->
</div>
</li>
<li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
<!-- Account Sidebar Toggle Button -->
@guest
{{-- <a id="" href="/register" role="button" class="u-header-topbar__nav-link"
aria-controls="sidebarContent"
aria-haspopup="true"
aria-expanded="false"
data-unfold-event="click"
data-unfold-hide-on-scroll="false"
data-unfold-target="#sidebarContent"
data-unfold-type="css-animation"
data-unfold-animation-in="fadeInRight"
data-unfold-animation-out="fadeOutRight"
data-unfold-duration="500">



<i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in
</a> --}}
<a href="/register" class="text-dark">Register</a> |
<a href="/login" class="text-dark">Login</a>
@endguest

@auth
<a href="/profile" class="text-dark"> <span class="fa fa-user"></span> Profile</a>

@endauth
<!-- End Account Sidebar Toggle Button -->
</li>
</ul>
</div>
</div>
</div>
</div>
<!-- End Topbar -->

<!-- Logo-Search-header-icons -->
<div class="py-2 py-xl-5 bg-primary-down-lg">
<div class="container my-0dot5 my-xl-0">
<div class="row align-items-center">
<!-- Logo-offcanvas-menu -->
<div class="col-auto">
<!-- Nav -->
<nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
<!-- Logo -->
<a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="/" aria-label="Gear 5">
<img src="logo3.png" height="45.52px" alt="" srcset="">

</a>
<!-- End Logo -->

<!-- Fullscreen Toggle Button -->
<button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
aria-controls="sidebarHeader"
aria-haspopup="true"
aria-expanded="false"
data-unfold-event="click"
data-unfold-hide-on-scroll="false"
data-unfold-target="#sidebarHeader1"
data-unfold-type="css-animation"
data-unfold-animation-in="fadeInLeft"
data-unfold-animation-out="fadeOutLeft"
data-unfold-duration="500">
<span id="hamburgerTriggerMenu" class="u-hamburger__box">
<span class="u-hamburger__inner"></span>
</span>
</button>
<!-- End Fullscreen Toggle Button -->
</nav>
<!-- End Nav -->

<!-- ========== HEADER SIDEBAR ========== -->
<aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvoker">
<div class="u-sidebar__scroller">
<div class="u-sidebar__container">
<div class="u-header-sidebar__footer-offset">
<!-- Toggle Button -->
<div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-4 bg-white">
<button type="button" class="close ml-auto"
aria-controls="sidebarHeader"
aria-haspopup="true"
aria-expanded="false"
data-unfold-event="click"
data-unfold-hide-on-scroll="false"
data-unfold-target="#sidebarHeader1"
data-unfold-type="css-animation"
data-unfold-animation-in="fadeInLeft"
data-unfold-animation-out="fadeOutLeft"
data-unfold-duration="500">
<span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
</button>
</div>
<!-- End Toggle Button -->

<!-- Content -->
<div class="js-scrollbar u-sidebar__body">
<div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
<!-- Logo -->
<a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center mb-3" href="/" aria-label="Gear 5">
<img src="logo3.png" height="45.52px" alt="" srcset="">
</a>
<!-- End Logo -->

<!-- List -->
<ul id="headerSidebarList" class="u-header-collapse__nav">
<!-- Value of the Day -->
{{-- @foreach ($categories as $category) --}}

<hr>
<li class="list-inline-item pr-3">
        <span class="font-size-20 fas fa-tshirt"></span>
<a class="u-header-sidebar__footer-link text-gray-90" href="/fashion">FASHION</a>
</li>
<hr>
<br>
<li class="list-inline-item pr-3">
<span class="font-size-20 fas fa-tv"></span>
<a class="u-header-sidebar__footer-link text-gray-90" href="/electronics">ELECTRONICS</a>
</li>
<hr>
<br>
<li class="list-inline-item pr-3">
        <span class="font-size-20 fas fa-baby"></span>
<a class="u-header-sidebar__footer-link text-gray-90" href="/baby-products">BABY PRODUCTS</a>
</li>
<hr>
<br>

<li class="list-inline-item pr-3">
        <span class="font-size-20 fas fa-keyboard"></span>
    <a class="u-header-sidebar__footer-link text-gray-90" href="/computer-accessories">COMPUTER & ACCESSORIES</a>
    </li>
    <hr>
    <br><li class="list-inline-item pr-3">
            <span class="font-size-20 fas fa-shopping-bag"></span>
            <a class="u-header-sidebar__footer-link text-gray-90" href="/larg-mart">LARG MART</a>
            </li>
            <hr>
            <br><li class="list-inline-item pr-3">
                    <span class="font-size-20 fas fa-warehouse"></span>
                    <a class="u-header-sidebar__footer-link text-gray-90" href="/home-office">HOME & OFFICE</a>
                    </li>
                    <hr>
<br><li class="list-inline-item pr-3">
        <span class="font-size-20 fas fa-mobile"></span>
<a class="u-header-sidebar__footer-link text-gray-90" href="/phone-tablet">PHONES & TABLET</a>
</li>
<hr>
<br>

<li class="list-inline-item pr-3">
        <span class="font-size-20 fas fa-futbol"></span>
<a class="u-header-sidebar__footer-link text-gray-90" href="/sporting-products">SPORTING PRODUCTS</a>
</li>
<hr>
<br><li class="list-inline-item pr-3">
        <span class="font-size-20 fas fa-user"></span>
<a class="u-header-sidebar__footer-link text-gray-90" href="/profile">ACCOUNT</a>
</li>
<hr>
<br><li class="list-inline-item pr-3">
        <span class="font-size-20 fas fa-key"></span>
        <a class="u-header-sidebar__footer-link text-gray-90" href="/login">LOGOUT</a>
        </li>
{{-- @endforeach --}}
<!-- End Accessories -->
</ul>
<!-- End List -->
</div>
</div>
<!-- End Content -->
</div>
<!-- Footer -->
<footer id="SVGwaveWithDots" class="svg-preloader u-header-sidebar__footer">
<ul class="list-inline mb-0">
<li class="list-inline-item pr-3">
<a class="u-header-sidebar__footer-link text-gray-90" href="/privacy-policy">Privacy</a>
</li>
<li class="list-inline-item pr-3">
<a class="u-header-sidebar__footer-link text-gray-90" href="/terms-&-conditions">Terms</a>
</li>
<li class="list-inline-item">
<a class="u-header-sidebar__footer-link text-gray-90" href="#">
<i class="fas fa-info-circle"></i>
</a>
</li>
</ul>

<!-- SVG Background Shape -->
<div class="position-absolute right-0 bottom-0 left-0 z-index-n1">
<img src="logo3.png" height="45.52px" alt="" srcset="">
</div>
<!-- End SVG Background Shape -->
</footer>
<!-- End Footer -->
</div>
</div>
</aside>
<!-- ========== END HEADER SIDEBAR ========== -->
</div>
<!-- End Logo-offcanvas-menu -->
<!-- Search Bar -->
<div class="col d-none d-xl-block">
<form class="js-focus-state">
<label class="sr-only" for="searchproduct">Search</label>
<div class="input-group">
<input type="email" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="email" id="searchproduct-item" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
<div class="input-group-append">
<!-- Select -->
<select class="js-select selectpicker dropdown-select custom-search-categories-select"
data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
<option value="" selected>All Categories</option>
@foreach ($categories as $category)


<option value="{{ $category->category_name }}">{{ $category->category_name }}</option>

@endforeach
</select>
<!-- End Select -->
<button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
<span class="ec ec-search font-size-24"></span>
</button>
</div>
</div>
</form>
</div>
<!-- End Search Bar -->
<!-- Header Icons -->
<div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
<div class="d-inline-flex">
<ul class="d-flex list-unstyled mb-0 align-items-center">
<!-- Search -->
<li class="col d-xl-none px-2 px-sm-3 position-static">
<a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
data-toggle="tooltip"
data-placement="top"
title="Search"
aria-controls="searchClassic"
aria-haspopup="true"
aria-expanded="false"
data-unfold-target="#searchClassic"
data-unfold-type="css-animation"
data-unfold-duration="300"
data-unfold-delay="300"
data-unfold-hide-on-scroll="true"
data-unfold-animation-in="slideInUp"
data-unfold-animation-out="fadeOut">
<span class="ec ec-search"></span>
</a>

<!-- Input -->
<div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
<form class="js-focus-state input-group px-3">
<input class="form-control" type="search" placeholder="Search Product">
<div class="input-group-append">
<button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
</div>
</form>
</div>
<!-- End Input -->
</li>
<!-- End Search -->
<li class="col d-none d-xl-block"><a href="/" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
<li class="col d-none d-xl-block"><a href="/" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
<li class="col d-xl-none px-2 px-sm-3"><a href="/" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
<li class="col pr-xl-0 px-2 px-sm-3 d-xl-none">
<a href="/" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
{{-- <i class="font-size-22 ec ec-shopping-bag"></i> --}}
<i class="font-size-22 fas fa-shopping-cart "></i>

<span class="bg-lg-down-white width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">@if(session('cart')) {{ count(session('cart')) }} @else 0    @endif</span>
<span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
</a>
</li>
<li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
<div id="basicDropdownHoverInvoker" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart"
aria-controls="basicDropdownHover"
aria-haspopup="true"
aria-expanded="false"
data-unfold-event="click"
data-unfold-target="#basicDropdownHover"
data-unfold-type="css-animation"
data-unfold-duration="300"
data-unfold-delay="300"
data-unfold-hide-on-scroll="true"
data-unfold-animation-in="slideInUp"
data-unfold-animation-out="fadeOut">
<a href="/cart">
<i class="font-size-22 text-dark fas fa-shopping-cart "></i>
<span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 text-dark">@if(session('cart')) {{ count(session('cart')) }} @else 0    @endif</span>

</a>
</div>
<div id="" class="cart-dropdown dropdown-menu dropdown-unfold border-top border-top-primary mt-3 border-width-2 border-left-0 border-right-0 border-bottom-0 left-auto right-0" aria-labelledby="basicDropdownHoverInvoker">
{{-- <ul class="list-unstyled px-3 pt-3">
<li class="border-bottom pb-3 mb-3">
<div class="">
<ul class="list-unstyled row mx-n2">
<li class="px-2 col-auto">
<img class="img-fluid" src="../../assets/img/75X75/img1.jpg" alt="Image Description">
</li>
<li class="px-2 col">
<h5 class="text-blue font-size-14 font-weight-bold">Ultra Wireless S50 Headphones S50 with Bluetooth</h5>
<span class="font-size-14">1 × $1,100.00</span>
</li>
<li class="px-2 col-auto">
<a href="#" class="text-gray-90"><i class="ec ec-close-remove"></i></a>
</li>
</ul>
</div>
</li>
<li class="border-bottom pb-3 mb-3">
<div class="">
<ul class="list-unstyled row mx-n2">
<li class="px-2 col-auto">
<img class="img-fluid" src="../../assets/img/75X75/img2.jpg" alt="Image Description">
</li>
<li class="px-2 col">
<h5 class="text-blue font-size-14 font-weight-bold">Widescreen NX Mini F1 SMART NX</h5>
<span class="font-size-14">1 × $685.00</span>
</li>
<li class="px-2 col-auto">
<a href="#" class="text-gray-90"><i class="ec ec-close-remove"></i></a>
</li>
</ul>
</div>
</li>
</ul> --}}
{{-- <div class="flex-center-between px-4 pt-2">
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/cart.html" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">View cart</a>
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/checkout.html" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5">Checkout</a>
</div> --}}
</div>
</li>
</ul>
</div>
</div>
<!-- End Header Icons -->
</div>
</div>
</div>
<!-- End Logo-Search-header-icons -->

<!-- Vertical-and-secondary-menu -->
<div class="d-none d-xl-block container">
<div class="row">
<!-- Vertical Menu -->
<div class="col-md-auto d-none d-xl-block">
<div class="max-width-270 min-width-270">
<!-- Basics Accordion -->
<div id="basicsAccordion">
<!-- Card -->
<div class="card border-0">
<div class="card-header card-collapse border-0" id="basicsHeadingOne">
<button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
data-toggle="collapse"
data-target="#basicsCollapseOne"
aria-expanded="true"
aria-controls="basicsCollapseOne">
<span class="ml-0 text-gray-90 mr-2">
<span class="fa fa-list-ul"></span>
</span>
<span class="pl-1 text-gray-90">Categories</span>
</button>
</div>
<div id="basicsCollapseOne" class="collapse show vertical-menu"
aria-labelledby="basicsHeadingOne"
data-parent="#basicsAccordion">
<div class="card-body p-0">
<nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
<div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
<ul class="navbar-nav u-header__navbar-nav">
{{-- @foreach($categories as $category)
<li class="nav-item u-header__nav-item"
data-event="hover"
data-position="left">
<a href="/{{ $category->slug }}" class="nav-link u-header__nav-link font-weight-bold">{{ ucfirst($category->category_name) }}</a>
</li>
@endforeach --}}

{{-- <li class="nav-item u-header__nav-item"
data-event="hover"
data-position="left">
<a href="#" class="nav-link u-header__nav-link font-weight-bold">Top 100 Offers</a>
</li>
<li class="nav-item u-header__nav-item"
data-event="hover"
data-position="left">
<a href="#" class="nav-link u-header__nav-link font-weight-bold">New Arrivals</a>
</li> --}}
<!-- Nav Item MegaMenu -->
<li class="nav-item hs-has-mega-menu u-header__nav-item"
data-event="hover"
data-animation-in="slideInUp"
data-animation-out="fadeOut"
data-position="left">

<a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">
    <span class="fas fa-tshirt"> Fashion</span></a>

<!-- Nav Item - Mega Menu -->
<div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
{{-- <div class="vmm-bg">
<img class="img-fluid" src="../../assets/img/500X400/img1.png" alt="Image Description">
</div> --}}
<div class="row u-header__mega-menu-wrapper">
<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">
        Women’s Fashion</span>
    <ul class="u-header__sub-menu-nav-group mb-3">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/fashion-clothing">Clothing</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/women-fashion-accessories">Accessories</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/women-fashion-shoes">Shoes</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/women-fashion-jewelry">Jewelry</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/women-fashion-handbags-wallets">Handbags & Wallets</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/women-fashion-dresses">Underwear & Sleepwear</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/women-fashion-traditional">Traditional </a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/women-fashion-beach-swimwear">Beach & Swimwear</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/women-fashion-flats">Flats
r</a></li>
<li>
            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                <div class="">Maternity</div>
                {{-- <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div> --}}
            </a>
        </li>
    </ul>
</div>

<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Men’s Fashion</span>
    <ul class="u-header__sub-menu-nav-group">
<li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-clothing">Clothing</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-shoes">Shoes</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-accessories">Accessories</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-underwear-sleepwear">Underwear & Sleepwear </a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-traditional-cultural-wear">Traditional & Cultural Wear </a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-t-shirts">T-Shirts </a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-polo-shirts">Polo Shirts </a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-trousers-chinos">Trousers & Chinos </a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-sneakers">Sneakers</a></li><li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-jewelry">Jewelry </a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-fashion-jerseys">Jerseys</a></li>
    </ul>
</div>
<div class="col mb-3 mb-sm-0">
        <span class="u-header__sub-menu-title">Boys</span>
        <ul class="u-header__sub-menu-nav-group">
<li><a class="nav-link u-header__sub-menu-nav-link" href="/boys-fashion-clothing">Clothing</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/boys-fashion-shoes">Shoes</a></li>

<li><a class="nav-link u-header__sub-menu-nav-link" href="/boys-fashion-accessories">Accessories</a></li>
<br>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/fashion-girls"><b>Girls</b></a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/girl-fashion-clothing">Clothing</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="girl-fashion-shoes">Shoes</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/girl-fashion-accessories">Accessories</a></li>
<br>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/fashion-sunglasses"><b>Sunglasses</b></a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/girl-fashion-mens-sunglasses">Men’s Sunglasses </a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/fashion-womens-sunglasses">Women’s Sunglasses</a></li>

        </ul>
    </div>
    <div class="col mb-3 mb-sm-0">
            <span class="u-header__sub-menu-title">Watches</span>
            <ul class="u-header__sub-menu-nav-group">
<li><a class="nav-link u-header__sub-menu-nav-link" href="/fashion-watches">Men’s Watches</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/fashion-womens-watches">Women’s Watches</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/fashion-kids-watches">Kids Watches</a></li>
<br>

<li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Top Brands</b></a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/Zara">Zara</a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/Gucci">Gucci </a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/Fendi">Fendi</a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/David Wei">David Wei</a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="/band/Nike">Nike </a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/Addidas">Addidas</a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/Casio">Casio </a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/Citizen">Citizen </a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/Puma">Puma 
        </a></li>
            </ul>
        </div>
        {{-- <div class="col mb-3 mb-sm-0 ">
                <span class="u-header__sub-menu-title">Boys</span>
                <ul class="u-header__sub-menu-nav-group">
<li><a class="nav-link u-header__sub-menu-nav-link" href="#">Clothing</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="#">Shoes</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="#">Accessories</a></li>

                </ul>
            </div>
            <div class="col mb-3 mb-sm-0">
                    <span class="u-header__sub-menu-title">Girls</span>
                    <ul class="u-header__sub-menu-nav-group">
<li><a class="nav-link u-header__sub-menu-nav-link" href="#">Clothing</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="#">Shoes</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="#">Accessories</a></li>

                    </ul>
                </div> --}}
                {{-- <div class="col mb-3 mb-sm-0">
                        <span class="u-header__sub-menu-title">Top Brands</span>
                        <ul class="u-header__sub-menu-nav-group">
    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Zara</a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Gucci </a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Fendi</a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">David Wei</a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Nike </a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Addidas</a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Casio </a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Citizen </a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Puma 
        </a></li>
                        </ul>
                    </div> --}}
</div>
</div>
<!-- End Nav Item - Mega Menu -->
</li>
<!-- End Nav Item MegaMenu-->
<!-- Nav Item MegaMenu -->
<li class="nav-item hs-has-mega-menu u-header__nav-item"
data-event="hover"
data-position="left">
<a id="basicMegaMenu1" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">
        <span class=" fas fa-tv"> Electronics</span>
    </a>

<!-- Nav Item - Mega Menu -->
<div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu1">
{{-- <div class="vmm-bg">
<img class="img-fluid" src="../../assets/img/500X400/img4.png" alt="Image Description">
</div> --}}
<div class="row u-header__mega-menu-wrapper">
<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Television & Video</span>
    <ul class="u-header__sub-menu-nav-group mb-3">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/electronics-televisions">Televisions</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/smart-tvs">Smart TVs</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/led-tvs">LED TVs</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/curved-tvs">Curved TVs</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/oled-tvs">OLED TVs</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/dvd-players">DVD Players</a></li>
<br>
<li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Audio</b></a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/home-theatre-system">Home Theatre System</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/sound-bar">Sound Bar</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/amplifiers">Amplifiers</a></li>
        <li>
            {{-- <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                <div class="">All Electronics</div>
                <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
            </a> --}}
        </li>
    </ul>
</div>

<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Generators & Portable Power</span>
    <ul class="u-header__sub-menu-nav-group">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/generator">Generator </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/inverters">Inverters</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/stabilizers-solar">Stabilizers Solar</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/wind-power">Wind Power</a></li>
        <br>
<li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Musical Instrument</b></a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/guitars">Guitars</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/midi-drums-percussion">Midi drums & Percussion</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/keyboards">Keyboards </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/studio-recordings-equipments">Studio Recordings Equipments </a></li>
        <li>
    </ul>
</div>
<div class="col mb-3 mb-sm-0">
        <span class="u-header__sub-menu-title">Cameras</span>
        <ul class="u-header__sub-menu-nav-group">
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/projectors">Projectors </a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/digital-camera">Digital Camera</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/video-surveillance"> Video Surveillance</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/cam-coders">Cam coders 
                </a></li>
                <br>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/top-electronics-brand"><b>Top Electronics Brand</b></a></li>
                                
                
                
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/lg">LG</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/samsung">Samsung</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/tcl">TCL </a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/royal">Royal </a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/hisense">Hisense </a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/canon">Canon </a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/dstv">DStv </a></li>
                        <li>
        </ul>
    </div>
</div>
</div>
<!-- End Nav Item - Mega Menu -->
</li>
<!-- End Nav Item MegaMenu-->
<!-- Nav Item MegaMenu -->
<li class="nav-item hs-has-mega-menu u-header__nav-item"
data-event="hover"
data-position="left">
<a id="basicMegaMenu2" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">
        <span class=" fas fa-baby">  Baby Products</span>
   </a>

<!-- Nav Item - Mega Menu -->
<div class="hs-mega-menu vmm-tfw u-header__sub-menu vmm-bg-extended" aria-labelledby="basicMegaMenu2">
{{-- <div class="vmm-bg">
<img class="img-fluid" src="../../assets/img/500X400/img3.png" alt="Image Description">
</div> --}}
<div class="row u-header__mega-menu-wrapper">
<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Baby Boys</span>
    <ul class="u-header__sub-menu-nav-group mb-3">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-boys-clothing">Clothing</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-boys-shoes">Shoes </a></li>
        <br>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Baby Girls</b></a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-girls-clothing">Clothing</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-girls-shoes">Shoes </a></li>
        <br>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Baby Nursery</b></a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link border-top pt-2" href="/baby-nursery-nursery-decor">Nursery Décor</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-nursery-furniture">Furniture</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-nursery-toys">Toys </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-nursery-music-sound">Music & Sound</a></li>
        {{-- <li>
            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                <div class="">All Electronics</div>
                <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
            </a>
        </li> --}}
    </ul>
</div>

<div class="col mb-3 mb-sm-0">
        <span class="u-header__sub-menu-title">Bathing & Skin Care</span>
    <ul class="u-header__sub-menu-nav-group">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/washcloths-& -towels">Washcloths & Towels</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/grooming-healthcare">Grooming & healthcare</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/skin-care">Skin Care</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/bathing-tub-seats">Bathing Tub & Seats</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/shampoo">Shampoo</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/bathroom-safety">Bathroom Safety </a></li>
        <br>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Baby Gear</b></a></li>
         <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-stationery">Baby Stationery</a></li>
         <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-safety">Baby Safety</a></li>
         <li><a class="nav-link u-header__sub-menu-nav-link" href="/pregnancy-maternity">Pregnancy & Maternity</a></li>
         <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-car-seats-accessories">Car Seats & Accessories</a></li>
         
    </ul>
</div>

<div class="col mb-3 mb-sm-0">
        <span class="u-header__sub-menu-title">Feeding</span>
    <ul class="u-header__sub-menu-nav-group">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-food">Baby Food</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/bottle-feeding">Bottle- Feeding</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/breast-feeding">Breast feeding</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/food-storage">Food Storage</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/pacifiers-accessories">Pacifiers & Accessories</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-bibs-burp-cloths">Bibs & Burp Cloths </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-higher-chairs-boosters-seat">Higher Chairs & Boosters Seat </a></li>
       <br>
       <li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Diapering</b></a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-wipes-holders">Wipes & Holders</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-diaper-bags">Diaper bags</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-cloth-diapers">Cloth Diapers</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-portable-changing-pads">Portable Changing Pads</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-changing-table">Changing Table </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-diaper-pails-refills">Diaper Pails & Refills </a></li>
    </ul>
</div>
</div>
</div>
<!-- End Nav Item - Mega Menu -->
</li>
<!-- End Nav Item MegaMenu-->
<!-- Nav Item MegaMenu -->

<li
 class="nav-item hs-has-mega-menu u-header__nav-item"
data-event="hover"
data-position="left">

<a id="basicMegaMenu3" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="tr u-header__nav-link u-header__nav-link-ue" aria-expanded="false">
        <span class=" fas fa-keyboard"> Computer & Accessories</span>
    </a>

<!-- Nav Item - Mega Menu -->
<div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu3">
{{-- <div class="vmm-bg">
<img class="img-fluid" src="../../assets/img/500X400/img2.png" alt="Image Description">
</div> --}}
<div class="row u-header__mega-menu-wrapper">
<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Computer Accessories</span>
    <ul class="u-header__sub-menu-nav-group mb-3">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/external-hard-drive">External Hard Drive</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/flash-drive">Flash Drive</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="/laptops-accessories">Laptops Accessories</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/keyboards-mice-printer">Keyboards & Mice Printer</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/ink-toner">Ink & Toner</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="/ups">UPS</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/scanners">Scanners</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/monitors">Monitors</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="/cpu">CPU</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/operating-system">Operating System</a></li>
       
        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="/component-printer">Component Printer</a></li>
    </ul>
    {{-- <span class="u-header__sub-menu-title">Video Games</span>
    <ul class="u-header__sub-menu-nav-group">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="#">PC Games</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Consoles</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Accessories</a></li>
    </ul> --}}
</div>

<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Laptops</span>
    <ul class="u-header__sub-menu-nav-group">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/macbooks">Macbooks</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/hp-laptops">HP Laptops</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/Dell Laptops">Dell Laptops</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/lenovo">Lenovo</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/asus-laptops">ASUS</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/acer-laptops">Acer Laptops</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/microsoft-laptops">Microsoft laptops</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/huawei-laptops">Huawei Laptops</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/other-laptops">Other Laptops</a></li>
    </ul>
</div>
<div class="col mb-3 mb-sm-0">
        <span class="u-header__sub-menu-title">Top Brands</span>
        <ul class="u-header__sub-menu-nav-group">
               
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/apple">Apple</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/hp">HP </a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/braand/dell">Dell </a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/lenovo">Lenovo</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/samsung">  Samsung</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/asus">ASUS</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/acer">Acer </a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/microsoft">Microsoft</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/huawei">Huawei</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/sandisk">Sandisk</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/Kingston">  Kingston</a></li>
        </ul>
    </div>
</div>
</div>
<!-- End Nav Item - Mega Menu -->
</li>
<!-- End Nav Item MegaMenu-->
<!-- Nav Item MegaMenu -->
<li class="nav-item hs-has-mega-menu u-header__nav-item"
data-event="hover"
data-position="left">
<a id="basicMegaMenu4" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">
        <span class=" fas fa-shopping-bag"> Large Mart</span>
    </a>

<!-- Nav Item - Mega Menu -->
<div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu4">
{{-- <div class="vmm-bg">
<img class="img-fluid" src="../../assets/img/500X400/img5.png" alt="Image Description">
</div> --}}
<div class="row u-header__mega-menu-wrapper">
<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Food Shop</span>
    <ul class="u-header__sub-menu-nav-group mb-3">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/large-mart">Grains & Rice</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/cooking-ingredients">Cooking Ingredients</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/breakfast">Breakfast</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/canned-food">Canned Food</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/pasta-noodles">Pasta & Noodles</a></li>
<br>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Baby Kits Shop</b></a></li>

        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-diapers">Diapers</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-feeding">Feeding</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/baby-wipes">Wipes</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/pasta-noodles">pasta & Noodles</a></li>
        {{-- <li>
            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                <div class="">Electro Home Appliances</div>
                <div class="u-nav-subtext font-size-11 text-gray-30">Available in select cities</div>
            </a>
        </li> --}}
    </ul>
</div>

<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Drinks Shops</span>
    <ul class="u-header__sub-menu-nav-group">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/drink-non-alcoholic">Non Alcoholic</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/drink-water">Water</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/drink-coffee-coco">Coffee & Cocoa </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/drink-tea">Tea</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/drink-juice-bitters">Juice & Bitters</a></li>
<br>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Household Shop</b></a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/household-shop">Laundry</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/toilet-paper-wipes">Toilet Paper & wipes </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/bathroom-cleaners">Bathroom Cleaners</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/cleaning-tools">Cleaning Tools</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/dish-washing">Dish Washing</a></li>
        
    </ul>
</div>
<div class="col mb-3 mb-sm-0">
        <span class="u-header__sub-menu-title">Hygiene Arena</span>
        <ul class="u-header__sub-menu-nav-group">
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/sanitizers">Sanitizers</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/moisturizer">Moisturizer Lotion</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/oral-care">Oral Care </a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/soaps-shampo-shower-gels">Soaps, Shampo & Shower Gels</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/hair-care">Hair Care</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/womens-shaving">Women’s Shaving</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/mens-shaving">Men’s Shaving </a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/deodorant-body-spray">Deodorant & Body Spray</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/hair-oil">Hair Oil
                </a></li>

                <br>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Wine Bar Shop</b></a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/beer">Beer</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/wine">Wine </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/vodka">Vodka</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/liquor">Liquor</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/red-wine">Red Wine</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/white-wine">White wine</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/whiskey">Whiskey</a></li>
        </ul>
    </div>
</div>
</div>
<!-- End Nav Item - Mega Menu -->
</li>
<!-- End Nav Item MegaMenu-->
<!-- Nav Item MegaMenu -->
<li class="nav-item hs-has-mega-menu u-header__nav-item"
data-event="hover"
data-position="left">
<a id="basicMegaMenu5" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false"> 
     
        <span class=" fas fa-warehouse"> Home & Office</span>
</a>

<!-- Nav Item - Mega Menu -->
<div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu5">
{{-- <div class="vmm-bg">
<img class="img-fluid" src="../../assets/img/500X400/img6.png" alt="Image Description">
</div> --}}
<div class="row u-header__mega-menu-wrapper">
<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Large Appliances</span>
    <ul class="u-header__sub-menu-nav-group mb-3">Cookers
      
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/air-conditioners">Air Conditioners</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/freezers">  Freezers </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/fans"> Fans</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/washer-dryers">  Washer & Dryers</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/refrigerators"> Refrigerators</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/water-dispenser">  Water Dispenser</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/dish-washers"> Dish Washers</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/ceiling-fans-accessories"> Ceiling Fans & Accessories</a></li>
    </ul>
</div>

<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Home & Kitchen</span>
    <ul class="u-header__sub-menu-nav-group">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/bathroom-products">Bathroom Products</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/heating-cooling-air-quality">Heating, Cooling & Air Quality</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/kitchen-utensils">Kitchen utensils 
            </a></li>
<br>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Small Appliance</b></a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/ironing-laundary">Ironing & Laundary</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/microwave-ovens">Microwave Ovens 
                </a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/oven-toaster">Oven & Toaster</a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/mixing-blendingy">Mixing & Blendingy</a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/food-processors">Food Processors 
                    </a></li>
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="/juicer">Juicer
                        </a></li>
    </ul>
</div>
<div class="col mb-3 mb-sm-0">
        <span class="u-header__sub-menu-title">Furniture</span>
        <ul class="u-header__sub-menu-nav-group">
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/living-room-furniture">Living Room Furniture</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/kitchen-dining-room-furniture">Kitchen & Dining Room Furniture</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/bed-room-furniture">Bed Room Furniture
</a>
</li> <li><a class="nav-link u-header__sub-menu-nav-link" href="/home-decor">Home Décor
</a>
</li> 
<li><a class="nav-link u-header__sub-menu-nav-link" href="/office-furniture">Office Furniture
</a>
</li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/storage-organisation">Storage & Organisation
    </a>
    </li>
    <br>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="#"><b>Building  Materia</b></a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/plumbing-material">Plumbing material</a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/building-supplies">Building Supplies
                    </a></li>
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Electrical</a></li>
                    <br>
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="/office-products"><b>Office products</b></a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/office-electronics">Office Electronics</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/school-furniture">School Furniture</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/office-furniture-light">Office furniture & Light</a></li>
        </ul>
    </div>
    <div class="col mb-3 mb-sm-0">
            <span class="u-header__sub-menu-title">PlayStation 3</span>
            <ul class="u-header__sub-menu-nav-group mb-3">
              
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/playstation-3-accessories">accessories</a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/playstation-3-console"> Console </a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/playstation-3-game"> Games </a></li>
                <br>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="#"> <b>PlayStation 4</b></a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/playstation-4-accessories">accessories</a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/playstation-4-console"> Console </a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/playstation-4-games"> Games </a></li>
                <br>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="#"> <b>Xbox One</b></a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/xbox-one-accessories">accessories</a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/xbox-one-console"> Console </a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/xbox-one-games"> Games </a></li>
                <br>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="#"> <b>Nintendo Switch</b></a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/nintendo-switch-accessories">accessories</a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/nintendo-switch-console"> Console </a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/nintendo-switch-games"> Games </a></li>
                <br>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="#"> <b>Xbox 360</b></a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/xbox-360-accessories">accessories</a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/xbox-360-console"> Console </a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/xbox-360-games"> Games </a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="#"> <b>PlayStation Vita</b></a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/playstation-vita-accessories">accessories</a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/playstation-vita-console"> Console </a></li>
                <li><a class="nav-link u-header__sub-menu-nav-link" href="/playstation-vita-games"> Games </a></li>
           
            </ul>
        </div>
</div>
</div>
<!-- End Nav Item - Mega Menu -->
</li>
<!-- End Nav Item MegaMenu-->
<!-- Nav Item MegaMenu -->
<li class="nav-item hs-has-mega-menu u-header__nav-item"
data-event="hover"
data-position="left">
<a id="basicMegaMenu3" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">
        <span class=" fas fa-mobile">  Tablet & phone</span>
    </a>

<!-- Nav Item - Mega Menu -->
<div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu3">
{{-- <div class="vmm-bg">
<img class="img-fluid" src="../../assets/img/500X400/img7.png" alt="Image Description">
</div> --}}
<div class="row u-header__mega-menu-wrapper">
<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Mobile Phone</span>
    <ul class="u-header__sub-menu-nav-group mb-3">
            
           
            
           
           
        <li><a class="nav-link u-header__sub-menu-nav-link" href="smart-phone">Smart Phone</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/smart-phone-android"> Android</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="/smart-ios-phones">iOS Phones</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="/land-line-phone"> Land line Phone</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="/basic-phone"> Basic Phone</a></li>
    </ul>
    <span class="u-header__sub-menu-title">Shop for Bike</span>
    <ul class="u-header__sub-menu-nav-group">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/helmets-gloves">Helmets & Gloves</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/bike-parts">Bike Parts</a></li>
    </ul>
</div>

 





<div class="col mb-3 mb-sm-0">
    <span class="u-header__sub-menu-title">Phone Accessories</span>
    <ul class="u-header__sub-menu-nav-group">
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/airpods">Airpods</a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/achargers">AChargers </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/earphones">Earphones</a></li>
        
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/bluetooth-headsets">Bluetooth Headsets
            </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/phone-cases">Phone Cases
            </a></li>
        <li><a class="nav-link u-header__sub-menu-nav-link" href="/memory-cards">Memory Cards</a></li>
  
    <li><a class="nav-link u-header__sub-menu-nav-link" href="/smart-watches">Smart Watches</a></li>
    <li><a class="nav-link u-header__sub-menu-nav-link" href="/power-banks">Power Banks</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/selfie-sticks">Selfie Sticks</a></li>
<li><a class="nav-link u-header__sub-menu-nav-link" href="/tripods">Tripods</a></li>
</ul>
    
</div>
<div class="col mb-3 mb-sm-0">
        <span class="u-header__sub-menu-title">Tablets</span>
        <ul class="u-header__sub-menu-nav-group mb-3">
     
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/samsung-tablets"> Samsung Tablets
                </a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/tablet-ipad"> Ipad</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="/kids-tablets">Kids Tablets</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="/tablet-pc"> Tablet PC</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="/tablets-accessories"> Tablets Accessories</a></li>
        </ul>
        <span class="u-header__sub-menu-title">Top Phone Brand</span>
        <ul class="u-header__sub-menu-nav-group">
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/samsung">Samsung</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/iphone">Apple</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/tecno">Tecno </a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/infinix">Infinix </a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/nokia">Nokia</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/gionee">Gionee</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/oppo">OPPO</a></li>
            <li><a class="nav-link u-header__sub-menu-nav-link" href="/brand/itel">Itel</a></li>
        </ul>
    </div>
</div>
</div>
<!-- End Nav Item - Mega Menu -->
</li>
<!-- End Nav Item MegaMenu-->
<!-- Nav Item -->
<li class="nav-item hs-has-sub-menu u-header__nav-item"
data-event="click"
data-animation-in="slideInUp"
data-animation-out="fadeOut"
data-position="left">
<a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="homeSubMenu">

        <span class=" fas fa-futbol"> Sporting Products</span>
</a>

<!-- Home - Submenu -->
<ul id="homeSubMenu" class="hs-sub-menu u-header__sub-menu animated hs-position-left fadeOut" aria-labelledby="homeMegaMenu" style="min-width: 230px; display: none;">
<!-- Home-v1 -->
<li class="hs-has-sub-menu">
<a class="nav-link u-header__sub-menu-nav-link " href="/sporting-products"><b>Sporting Product</b></a>
</li>
<li class="hs-has-sub-menu">
        <a class="nav-link u-header__sub-menu-nav-link " href="/gym-bags">Gym Bags</a>
        </li>
<!-- End Home-v1 -->

<!-- Home-v2 -->
<li class="hs-has-sub-menu">
<a class="nav-link u-header__sub-menu-nav-link " href="/gym-mats">Gym Mats</a>
</li>
<!-- End Home-v2 -->

<!-- Home-v3 -->
<li class="hs-has-sub-menu">
<a class="nav-link u-header__sub-menu-nav-link " href="/gym-clothing">Clothing</a>
</li>
<!-- End Home-v3 -->

<!-- Home-v4 -->
<li class="hs-has-sub-menu">
<a class="nav-link u-header__sub-menu-nav-link " href="/gym-sports-fitness">Sports & Fitness</a>
</li>
<li class="hs-has-sub-menu">
        <a class="nav-link u-header__sub-menu-nav-link " href="/gym-outdoor-recreations">Outdoor Recreations</a>
        </li>
<!-- End Home-v4 -->
</ul>
<!-- End Home - Submenu -->
</li>
<!-- End Nav Item -->
</ul>
</div>
</nav>
</div>
</div>
</div>
<!-- End Card -->
</div>
<!-- End Basics Accordion -->
</div>
</div>
<!-- End Vertical Menu -->
<!-- Secondary Menu -->
<div class="col">
<!-- Nav -->
<nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
<!-- Navigation -->
<div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
<ul class="navbar-nav u-header__navbar-nav">
<!-- Home -->
<li class="nav-item hs-has-mega-menu u-header__nav-item"
data-event="click"
data-animation-in="slideInUp"
data-animation-out="fadeOut"
data-position="left">
<a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="javascript:;" aria-haspopup="true" aria-expanded="false">Super Deals</a>

<!-- Home - Mega Menu -->
<div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
<div class="row u-header__mega-menu-wrapper">
<div class="col-md-3">
<span class="u-header__sub-menu-title">Home & Static Pages</span>
<ul class="u-header__sub-menu-nav-group">
<li><a href="index.html" class="nav-link u-header__sub-menu-nav-link">Home v1</a></li>
<li><a href="home-v2.html" class="nav-link u-header__sub-menu-nav-link">Home v2</a></li>
<li><a href="home-v3.html" class="nav-link u-header__sub-menu-nav-link">Home v3</a></li>
<li><a href="home-v3-full-color-bg.html" class="nav-link u-header__sub-menu-nav-link">Home v3.1</a></li>
<li><a href="home-v4.html" class="nav-link u-header__sub-menu-nav-link">Home v4</a></li>
<li><a href="home-v5.html" class="nav-link u-header__sub-menu-nav-link">Home v5</a></li>
<li><a href="home-v6.html" class="nav-link u-header__sub-menu-nav-link">Home v6</a></li>
<li><a href="home-v7.html" class="nav-link u-header__sub-menu-nav-link">Home v7</a></li>
<li><a href="about.html" class="nav-link u-header__sub-menu-nav-link">About</a></li>
<li><a href="contact-v1.html" class="nav-link u-header__sub-menu-nav-link">Contact v1</a></li>
<li><a href="contact-v2.html" class="nav-link u-header__sub-menu-nav-link">Contact v2</a></li>
<li><a href="faq.html" class="nav-link u-header__sub-menu-nav-link">FAQ</a></li>
<li><a href="store-directory.html" class="nav-link u-header__sub-menu-nav-link">Store Directory</a></li>
<li><a href="terms-and-conditions.html" class="nav-link u-header__sub-menu-nav-link">Terms and Conditions</a></li>
<li><a href="404.html" class="nav-link u-header__sub-menu-nav-link">404</a></li>
</ul>
</div>
<div class="col-md-3">
<span class="u-header__sub-menu-title">Shop Pages</span>
<ul class="u-header__sub-menu-nav-group mb-3">
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-grid.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-grid-extended.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid Extended</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-list-view.html" class="nav-link u-header__sub-menu-nav-link">Shop List View</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-list-view-small.html" class="nav-link u-header__sub-menu-nav-link">Shop List View Small</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-left-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Shop Left Sidebar</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-full-width.html" class="nav-link u-header__sub-menu-nav-link">Shop Full width</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-right-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Shop Right Sidebar</a></li>
</ul>
<span class="u-header__sub-menu-title">Product Categories</span>
<ul class="u-header__sub-menu-nav-group">
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/product-categories-4-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/product-categories-5-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/product-categories-6-column-full-width.html" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
</ul>
</div>
<div class="col-md-3">
<span class="u-header__sub-menu-title">Single Product Pages</span>
<ul class="u-header__sub-menu-nav-group mb-3">
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-extended.html" class="nav-link u-header__sub-menu-nav-link">Single Product Extended</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="nav-link u-header__sub-menu-nav-link">Single Product Fullwidth</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Single Product Sidebar</a></li>
</ul>
<span class="u-header__sub-menu-title">Ecommerce Pages</span>
<ul class="u-header__sub-menu-nav-group">

<li><a href="/my-order" class="nav-link u-header__sub-menu-nav-link">Track your Order</a></li>

</ul>
</div>
<div class="col-md-3">
<span class="u-header__sub-menu-title">Blog Pages</span>
<ul class="u-header__sub-menu-nav-group mb-3">
<li><a href="http://transvelo.github.io/electro-html/2.0/html/blog/blog-v1.html" class="nav-link u-header__sub-menu-nav-link">Blog v1</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/blog/blog-v2.html" class="nav-link u-header__sub-menu-nav-link">Blog v2</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/blog/blog-v3.html" class="nav-link u-header__sub-menu-nav-link">Blog v3</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/blog/blog-full-width.html" class="nav-link u-header__sub-menu-nav-link">Blog Full Width</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/blog/single-blog-post.html" class="nav-link u-header__sub-menu-nav-link">Single Blog Post</a></li>
</ul>
<span class="u-header__sub-menu-title">Shop Columns</span>
<ul class="u-header__sub-menu-nav-group">
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-7-columns-full-width.html" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-6-columns-full-width.html" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-5-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-4-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
<li><a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop-3-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">3 Column Sidebar</a></li>
</ul>
</div>
</div>
</div>
<!-- End Home - Mega Menu -->
</li>
<!-- End Home -->

<!-- Featured Brands -->
<li class="nav-item u-header__nav-item">
<a class="nav-link u-header__nav-link" href="#" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Featured Brands</a>
</li>
<!-- End Featured Brands -->

<!-- Trending Styles -->
<li class="nav-item u-header__nav-item">
<a class="nav-link u-header__nav-link" href="#" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Trending Styles</a>
</li>
<!-- End Trending Styles -->

<!-- Gift Cards -->
<li class="nav-item u-header__nav-item">
<a class="nav-link u-header__nav-link" href="#" aria-haspopup="true" aria-expanded="false">Gift Cards</a>
</li>
<!-- End Gift Cards -->

<!-- Button -->
<li class="nav-item u-header__nav-last-item">
<a class="text-gray-90" href="#" target="_blank">
{{-- Free Shipping on Orders $50+ --}}
</a>
</li>
<!-- End Button -->
</ul>
</div>
<!-- End Navigation -->
</nav>
<!-- End Nav -->
</div>
<!-- End Secondary Menu -->
</div>
</div>
<!-- End Vertical-and-secondary-menu -->
</div>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
<!-- Slider Section -->
<div class="mb-5">
<div class="bg-img-hero" style="background-image: url(../../assets/img/1920X422/img1.jpg);">
<div class="container min-height-420 overflow-hidden">
<div class="js-slick-carousel u-slick"
data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">
@foreach($adss416x420 as $ads)
<div class="js-slide bg-img-hero-center">
<div class="row min-height-420 py-7 py-md-0">
<div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
<h1 class="font-size-64 text-lh-57 font-weight-light"
data-scs-animation-in="fadeInUp">
THE NEW <span class="d-block font-size-55">STANDARD</span>
</h1>
<h6 class="font-size-15 font-weight-bold mb-3"
data-scs-animation-in="fadeInUp"
data-scs-animation-delay="200">{{ strtoupper($ads->title) }}
</h6>
<div class="mb-4"
data-scs-animation-in="fadeInUp"
data-scs-animation-delay="300">
<span class="font-size-13">FROM</span>
<div class="font-size-50 font-weight-bold text-lh-45">
<sup class="">₦</sup>{{ number_format($ads->amount) }}<sup class="">00</sup>
</div>
</div>
<a href="/{{ $ads->slug }}" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
data-scs-animation-in="fadeInUp"
data-scs-animation-delay="400">
Start Buying
</a>
</div>
<div class="col-xl-5 col-6  d-flex align-items-center"
data-scs-animation-in="zoomIn"
data-scs-animation-delay="500">
<img class="img-fluid" src="{{ asset($ads->adsimages->display_photo_1)  }}" alt="Image Description">
</div>
</div>
</div>
@endforeach


</div>
</div>
</div>
</div>
<!-- End Slider Section -->
<div class="container">
<!-- Banner -->
<div class="mb-5">
<div class="row">
<div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
<a href="/camera" class="d-black text-gray-90">
<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
<div class="col-6 col-xl-5 col-wd-6 pr-0">
<img class="img-fluid" src="../../assets/img/190X150/img1.png" alt="Image Description">
</div>
<div class="col-6 col-xl-7 col-wd-6">
<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
CATCH BIG <strong>DEALS</strong> ON  CAMERAS
</div>
<div class="link text-gray-90 font-weight-bold font-size-15" href="/cameras">
Shop now
<span class="link__icon ml-1">
<span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
</span>
</div>
</div>
</div>
</a>
</div>
<div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
<a href="/phones" class="d-black text-gray-90">
<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
<div class="col-6 col-xl-5 col-wd-6 pr-0">
<img class="img-fluid" src="../../assets/img/190X150/img2.jpg" alt="Image Description">
</div>
<div class="col-6 col-xl-7 col-wd-6">
<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
CATCH BIG <strong>DEALS</strong> ON  PHONES
</div>
<div class="link text-gray-90 font-weight-bold font-size-15" href="/phones">
Shop now
<span class="link__icon ml-1">
<span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
</span>
</div>
</div>
</div>
</a>
</div>
<div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
<a href="/laptops" class="d-black text-gray-90">
<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
<div class="col-6 col-xl-5 col-wd-6 pr-0">
<img class="img-fluid" src="../../assets/img/190X150/img3.jpg" alt="Image Description">
</div>
<div class="col-6 col-xl-7 col-wd-6">
<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
CATCH BIG <strong>DEALS</strong> ON LAPTOPS
</div>
<div class="link text-gray-90 font-weight-bold font-size-15" href="/laptops">
Shop now
<span class="link__icon ml-1">
<span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
</span>
</div>
</div>
</div>
</a>
</div>
<div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
<a href="/fashion" class="d-black text-gray-90">
<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
<div class="col-6 col-xl-5 col-wd-6 pr-0">
<img class="img-fluid" src="../../assets/img/190X150/img4.png" alt="Image Description">
</div>
<div class="col-6 col-xl-7 col-wd-6">
<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
CATCH BIG <strong>DEALS</strong> ON FASHIONS
</div>
<div class="link text-gray-90 font-weight-bold font-size-15" href="/fashions">
Shop now
<span class="link__icon ml-1">
<span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
</span>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
<!-- End Banner -->
<!-- Deals-and-tabs -->
<div class="mb-5">
<div class="row">
<!-- Deal -->
<div class="col-md-auto mb-6 mb-md-0">
<div class="p-3 border border-width-2 border-primary borders-radius-20 bg-white min-width-370">
<div class="d-flex justify-content-between align-items-center m-1 ml-2">
<h3 class="font-size-22 mb-0 font-weight-normal text-lh-28 max-width-120">Special Offer</h3>
<div class="d-flex align-items-center flex-column justify-content-center bg-primary rounded-pill height-75 width-75 text-lh-1">
<span class="font-size-12">Save</span>
<div class="font-size-20 font-weight-bold">₦{{ number_format($adss320x300->amount/100) }}</div>
</div>
</div>
<div class="mb-4">
<a href="/{{ $adss320x300->slug }}" class="d-block text-center"><img class="img-fluid" src="{{asset($adss320x300->adsimages->display_photo_1 )}}" alt="Image Description"></a>
</div>
<h5 class="mb-2 font-size-14 text-center mx-auto max-width-180 text-lh-18"><a href="/{{ $adss320x300->slug }}" class="text-blue font-weight-bold">
{{ $adss320x300->title }}</a></h5>
<div class="d-flex align-items-center justify-content-center mb-3">
<del class="font-size-18 mr-2 text-gray-2">₦
{{number_format($adss320x300->amount+ ($adss320x300->amount/100)) }}</del>
<ins class="font-size-30 text-red text-decoration-none">₦{{ number_format($adss320x300->amount) }}</ins>
</div>
<div class="mb-3 mx-2">
<div class="d-flex justify-content-between align-items-center mb-2">
<span class="">Availavle: <strong>6</strong></span>
<span class="">Already Sold: <strong>28</strong></span>
</div>
<div class="rounded-pill bg-gray-3 height-20 position-relative">
<span class="position-absolute left-0 top-0 bottom-0 rounded-pill w-30 bg-primary"></span>
</div>
</div>
<div class="mb-2">
<h6 class="font-size-15 text-gray-2 text-center mb-3">Hurry Up! Offer ends in:</h6>
<div class="js-countdown d-flex justify-content-center"
data-end-date="2020/11/30"
data-hours-format="%H"
data-minutes-format="%M"
data-seconds-format="%S">
<div class="text-lh-1">
<div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
<span class="js-cd-hours"></span>
</div>
<div class="text-gray-2 font-size-12 text-center">HOURS</div>
</div>
<div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
<div class="text-lh-1">
<div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
<span class="js-cd-minutes"></span>
</div>
<div class="text-gray-2 font-size-12 text-center">MINS</div>
</div>
<div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
<div class="text-lh-1">
<div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
<span class="js-cd-seconds"></span>
</div>
<div class="text-gray-2 font-size-12 text-center">SECS</div>
</div>
</div>
</div>
</div>
</div>
<!-- End Deal -->
<!-- Tab Prodcut -->
<div class="col">
<!-- Features Section -->
<div class="">
<!-- Nav Classic -->
<div class="position-relative bg-white text-center z-index-2">
<ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active " id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
<div class="d-md-flex justify-content-md-center align-items-md-center">
Featured
</div>
</a>
</li>
<li class="nav-item">
<a class="nav-link " id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
<div class="d-md-flex justify-content-md-center align-items-md-center">
On Sale
</div>
</a>
</li>
<li class="nav-item">
<a class="nav-link " id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false">
<div class="d-md-flex justify-content-md-center align-items-md-center">
Top Rated
</div>
</a>
</li>
</ul>
</div>
<!-- End Nav Classic -->

<!-- Tab Content -->
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
<ul class="row list-unstyled products-group no-gutters">
@foreach($adss212x200 as $ads)
<li class="col-6 col-wd-3 col-md-4 product-item">
<div class="product-item__outer h-100">
<div class="product-item__inner px-xl-4 p-3">
<div class="product-item__body pb-xl-2">
<div class="mb-2"><a href="/{{ $ads->slug }}" class="font-size-12 text-gray-5">{{ $ads->category }}</a></div>
<h5 class="mb-1 product-item__title"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
<div class="mb-2">
<a href="/{{ $ads->slug }}" class="d-block text-center"><img class="img-fluid" 
src="{{ asset($ads->adsimages->display_photo_1) }}" alt="Image Description"></a>
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
<a href="/{{ $ads->slug }}}}" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
<a href="/{{ $ads->slug }}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
</div>
</div>
</div>
</div>
</li>
@endforeach

<li class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-xl">
<div class="product-item__outer h-100">
<div class="product-item__inner px-xl-4 p-3">
<div class="product-item__body pb-xl-2">
<div class="mb-2"><a href="/{{ $ads->slug }}" class="font-size-12 text-gray-5">Speakers</a></div>
<h5 class="mb-1 product-item__title"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
<div class="mb-2">
<a href="/{{ $ads->slug }}" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
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
<a href="/{{ $ads->slug }}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
</div>
</div>
</div>
</div>
</li>

</ul>
</div>
<div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
<ul class="row list-unstyled products-group no-gutters">
@foreach($adss212x2002 as $ads)
<li class="col-6 col-wd-3 col-md-4 product-item">
<div class="product-item__outer h-100">
<div class="product-item__inner px-xl-4 p-3">
<div class="product-item__body pb-xl-2">
<div class="mb-2"><a href="{{ $ads->slug }}" class="font-size-12 text-gray-5">Speakers</a></div>
<h5 class="mb-1 product-item__title"><a href="{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
<div class="mb-2">
<a href="{{ $ads->slug }}" class="d-block text-center"><img class="img-fluid" src="{{ asset($ads->adsimages->display_photo_1) }}" alt="Image Description"></a>
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
<a href="/cart/{{ $ads->slug }}ds}}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
</div>
</div>
</div>
</div>
</li>
@endforeach

{{-- <li class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-wd">
<div class="product-item__outer h-100">
<div class="product-item__inner px-xl-4 p-3">
<div class="product-item__body pb-xl-2">
<div class="mb-2"><a href="http://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
<h5 class="mb-1 product-item__title"><a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Full Color LaserJet Pro M452dn</a></h5>
<div class="mb-2">
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img6.jpg" alt="Image Description"></a>
</div>
<div class="flex-center-between mb-1">
<div class="prodcut-price">
<div class="text-gray-100">$685,00</div>
</div>
<div class="d-none d-xl-block prodcut-add-cart">
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
</div>
</div>
</div>
<div class="product-item__footer">
<div class="border-top pt-2 flex-center-between flex-wrap">
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
</div>
</div>
</div>
</div>
</li> --}}
</ul>
</div>
<div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab">
<ul class="row list-unstyled products-group no-gutters">
@foreach($adss212x2003 as $ads)
<li class="col-6 col-wd-3 col-md-4 product-item">
<div class="product-item__outer h-100">
<div class="product-item__inner px-xl-4 p-3">
<div class="product-item__body pb-xl-2">
<div class="mb-2"><a href="/{{ $ads->slug }}" class="font-size-12 text-gray-5">Speakers</a></div>
<h5 class="mb-1 product-item__title"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
<div class="mb-2">
<a href="/{{ $ads->slug }}" class="d-block text-center"><img class="img-fluid" src="{{ asset($ads->adsimages->display_photo_1) }}" alt="Image Description"></a>
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
<a href="/{{ $ads->slug }}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
</div>
</div>
</div>
</div>
</li>
@endforeach
{{-- <li class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-wd">
<div class="product-item__outer h-100">
<div class="product-item__inner px-xl-4 p-3">
<div class="product-item__body pb-xl-2">
<div class="mb-2"><a href="http://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
<h5 class="mb-1 product-item__title"><a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Camera C430W 4k Waterproof</a></h5>
<div class="mb-2">
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img8.jpg" alt="Image Description"></a>
</div>
<div class="flex-center-between mb-1">
<div class="prodcut-price">
<div class="text-gray-100">$685,00</div>
</div>
<div class="d-none d-xl-block prodcut-add-cart">
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
</div>
</div>
</div>
<div class="product-item__footer">
<div class="border-top pt-2 flex-center-between flex-wrap">
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
</div>
</div>
</div>
</div>
</li> --}}
</ul>
</div>
</div>
<!-- End Tab Content -->
</div>
<!-- End Features Section -->
</div>
<!-- End Tab Prodcut -->
</div>
</div>
<!-- End Deals-and-tabs -->
</div>
<!-- Products-4-1-4 -->

<!-- End Tab Content -->
</div>


<!-- End Tab Content -->
</div>
<!-- End Features Section -->
</div>
<!-- End Products-4-1-4 -->
<div class="container">
<!-- Prodcut-cards-carousel -->
<div class="space-top-2">
<div class=" d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
<h3 class="section-title mb-0 pb-2 font-size-22">Bestsellers</h3>
<ul class="nav nav-pills mb-2 pt-3 pt-md-0 mb-0 border-top border-color-1 border-md-top-0 align-items-center font-size-15 font-size-15-md flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
<li class="nav-item flex-shrink-0 flex-md-shrink-1">
<a class="text-gray-90 btn btn-outline-primary border-width-2 rounded-pill py-1 px-4 font-size-15 text-lh-19 font-size-15-md" href="#">Top 20</a>
</li>
<li class="nav-item flex-shrink-0 flex-md-shrink-1">
<a class="nav-link text-gray-8" href="#">Phones & Tablets</a>
</li>
<li class="nav-item flex-shrink-0 flex-md-shrink-1">
<a class="nav-link text-gray-8" href="#">Laptops & Computers</a>
</li>
<li class="nav-item flex-shrink-0 flex-md-shrink-1">
<a class="nav-link text-gray-8" href="#"> Video Cameras</a>
</li>
</ul>
</div>
<div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 pb-6"
data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
<div class="js-slide">
<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
@foreach($adss212x2002 as $ads)
<li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
<div class="product-item__outer h-100">
<div class="product-item__inner p-md-3 row no-gutters">
<div class="col col-lg-auto product-media-left">
<a href="/{{ $ads->slug }}" class="max-width-150 d-block"><img class="img-fluid" src="{{ asset($ads->adsimages->display_photo_1 )}}" alt="Image Description"></a>
</div>
<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
<div class="mb-4">
<div class="mb-2"><a href="/{{ $ads->slug }}" class="font-size-12 text-gray-5">{{ $ads->category }}
</a></div>
<h5 class="product-item__title"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}
</a></h5>
</div>
<div class="flex-center-between mb-3">
<div class="prodcut-price">
<div class="text-gray-100">₦{{ number_format($ads->amount) }}</div>
</div>
<div class="d-none d-xl-block prodcut-add-cart">
<a href="/cart/{{ $ads->slug }}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
</div>
</div>
{{-- <div class="product-item__footer">
<div class="border-top pt-2 flex-center-between flex-wrap">
<a href="/{{ $ads->slug }}" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
<a href="/{{ $ads->slug }}" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
</div>
</div> --}}
</div>
</div>
</div>
</li>
@endforeach
</ul>
</div>
<div class="js-slide">
<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
@foreach($adss212x200 as $ads)
<li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">

<div class="product-item__outer h-100">
<div class="product-item__inner p-md-3 row no-gutters">
<div class="col col-lg-auto product-media-left">
<a href="/{{ $ads->slug }}" class="max-width-150 d-block"><img class="img-fluid" src="{{ asset($ads->adsimages->display_photo_1 )}}" alt="Image Description"></a>
</div>
<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
<div class="mb-4">
<div class="mb-2"><a href="/{{ $ads->slug }}l" class="font-size-12 text-gray-5">{{ $ads->category }}</a></div>
<h5 class="product-item__title"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
</div>
<div class="flex-center-between mb-3">
<div class="prodcut-price">
<div class="text-gray-100">₦{{ number_format($ads->amount) }}</div>
</div>
<div class="d-none d-xl-block prodcut-add-cart">
<a href="/cart/{{ $ads->slug }}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
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
</li>
@endforeach

</ul>
</div>
<div class="js-slide">
<ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
@foreach($adss212x2003 as $ads)
<li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">

<div class="product-item__outer h-100">
<div class="product-item__inner p-md-3 row no-gutters">
<div class="col col-lg-auto product-media-left">
<a href="/{{ $ads->slug }}" class="max-width-150 d-block"><img class="img-fluid" src="{{ asset($ads->adsimages->display_photo_1 )}}" alt="Image Description"></a>
</div>
<div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
<div class="mb-4">
<div class="mb-2"><a href="/{{ $ads->slug }}" class="font-size-12 text-gray-5">{{ $ads->category }}</a></div>
<h5 class="product-item__title"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
</div>
<div class="flex-center-between mb-3">
<div class="prodcut-price">
<div class="text-gray-100">₦{{ number_format($ads->amount) }}</div>
</div>
<div class="d-none d-xl-block prodcut-add-cart">
<a href="/cart/{{ $ads->slug }}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
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
</li>
@endforeach

</ul>
</div>
</div>
</div>
<!-- End Prodcut-cards-carousel -->
<!-- Full banner -->
<div class="mb-6">
<a href="http://transvelo.github.io/electro-html/2.0/html/shop/shop.html" class="d-block text-gray-90">
<div class="" style="background-image: url(../../assets/img/1400X206/img1.jpg);">
<div class="space-top-2-md p-4 pt-6 pt-md-8 pt-lg-6 pt-xl-8 pb-lg-4 px-xl-8 px-lg-6">
<div class="flex-horizontal-center mt-lg-3 mt-xl-0 overflow-auto overflow-md-visble">
<h1 class="text-lh-38 font-size-32 font-weight-light mb-0 flex-shrink-0 flex-md-shrink-1">SHOP AND <strong>SAVE BIG</strong> ON HOTTEST TABLETS</h1>
<div class="ml-5 flex-content-center flex-shrink-0">
<div class="bg-primary rounded-lg px-6 py-2">
<em class="font-size-14 font-weight-light">STARTING AT</em>
<div class="font-size-30 font-weight-bold text-lh-1">
<sup class="">$</sup>79<sup class="">99</sup>
</div>
</div>
</div>
</div>
</div>
</div>
</a>
</div>
<!-- End Full banner -->
<!-- Recently viewed -->
<div class="mb-6">
<div class="position-relative">
<div class="border-bottom border-color-1 mb-2">
<h3 class="section-title mb-0 pb-2 font-size-22">Recently Viewed</h3>
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

@foreach($recentAds as $ads)

<div class="js-slide products-group">
<div class="product-item">
<div class="product-item__outer h-100">
<div class="product-item__inner px-wd-4 p-2 p-md-3">
<div class="product-item__body pb-xl-2">
<div class="mb-2"><a href="/{{ $ads->slug }}" class="font-size-12 text-gray-5">{{ $ads->category }}</a></div>
<h5 class="mb-1 product-item__title"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
<div class="mb-2">
<a href="/{{ $ads->slug }}" class="d-block text-center"><img class="img-fluid" src="{{ asset($ads->adsimages->display_photo_1) }}" alt="Image Description"></a>
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

</div>
</div>
</div>
<!-- End Recently viewed -->
<!-- Brand Carousel -->
{{-- <div class="mb-8">
<div class="py-2 border-top border-bottom">
<div class="js-slick-carousel u-slick my-1"
data-slides-show="5"
data-slides-scroll="1"
data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
data-responsive='[{
"breakpoint": 992,
"settings": {
"slidesToShow": 2
}
}, {
"breakpoint": 768,
"settings": {
"slidesToShow": 1
}
}, {
"breakpoint": 554,
"settings": {
"slidesToShow": 1
}
}]'>
<div class="js-slide">
<a href="#" class="link-hover__brand">
<img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img1.png" alt="Image Description">
</a>
</div>
<div class="js-slide">
<a href="#" class="link-hover__brand">
<img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img2.png" alt="Image Description">
</a>
</div>
<div class="js-slide">
<a href="#" class="link-hover__brand">
<img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img3.png" alt="Image Description">
</a>
</div>
<div class="js-slide">
<a href="#" class="link-hover__brand">
<img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img4.png" alt="Image Description">
</a>
</div>
<div class="js-slide">
<a href="#" class="link-hover__brand">
<img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img5.png" alt="Image Description">
</a>
</div>
<div class="js-slide">
<a href="#" class="link-hover__brand">
<img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img6.png" alt="Image Description">
</a>
</div>
</div>
</div>
</div> --}}
<!-- End Brand Carousel -->
</div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== FOOTER ========== -->
<footer>
<!-- Footer-top-widget -->
<div class="container d-none d-lg-block mb-3">
<div class="row">
<div class="col-wd-3 col-lg-4">
<div class="widget-column">
<div class="border-bottom border-color-1 mb-5">
<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
</div>
<ul class="list-unstyled products-group">
<?php $count=0;?>
@foreach($adss212x2002 as $ads)
<?php  if($count==3) break;?>
<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
<div class="col-auto">
<a href="/{{ $ads->slug }}" class="d-block width-75 text-center"><img class="img-fluid" src="{{ asset($ads->adsimages->display_photo_1) }}" alt="Image Description"></a>
</div>
<div class="col pl-4 d-flex flex-column">
<h5 class="product-item__title mb-0"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
<div class="prodcut-price mt-auto">
<div class="font-size-15">₦{{ number_format($ads->amount) }}</div>
</div>
</div>
</li>
<?php $count++;?>
@endforeach

</ul>
</div>
</div>
<div class="col-wd-3 col-lg-4">
<div class="border-bottom border-color-1 mb-5">
<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
</div>
<ul class="list-unstyled products-group">
<?php $count=0;?>
@foreach($adss212x200 as $ads)
<?php  if($count==3) break;?>
<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
<div class="col-auto">
<a href="/{{ $ads->slug }}" class="d-block width-75 text-center"><img class="img-fluid" src="{{ asset($ads->adsimages->display_photo_1) }}" alt="Image Description"></a>
</div>
<div class="col pl-4 d-flex flex-column">
<h5 class="product-item__title mb-0"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
<div class="prodcut-price mt-auto flex-horizontal-center">
<ins class="font-size-15 text-decoration-none">₦{{ number_format($ads->amount) }}</ins>
<del class="font-size-12 text-gray-9 ml-2">
₦{{ number_format( ($ads->amount/100)) }}</del>
</div>
</div>
</li>
<?php $count++;?>
@endforeach
</ul>
</div>
<div class="col-wd-3 col-lg-4">
<div class="border-bottom border-color-1 mb-5">
<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
</div>
<ul class="list-unstyled products-group">
<?php $count=0;?>
@foreach($adss212x2003 as $ads)
<?php  if($count==3) break;?>
<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
<div class="col-auto">
<a href="/{{ $ads->slug }}" class="d-block width-75 text-center"><img class="img-fluid" src="{{ asset($ads->adsimages->display_photo_1) }}" alt="Image Description"></a>
</div>
<div class="col pl-4 d-flex flex-column">
<h5 class="product-item__title mb-0"><a href="/{{ $ads->slug }}" class="text-blue font-weight-bold">{{ $ads->title }}</a></h5>
<div class="text-warning mb-2">
<small class="fas fa-star"></small>
<small class="fas fa-star"></small>
<small class="fas fa-star"></small>
<small class="fas fa-star"></small>
<small class="fas fa-star"></small>
</div>
<div class="prodcut-price mt-auto">
<div class="font-size-15">₦{{ number_format($ads->amount) }}</div>
</div>
</div>
</li>
<?php $count++;?>
@endforeach
</ul>
</div>
<div class="col-wd-3 d-none d-wd-block">
<a href="/{{ $ads->slug }}l" class="d-block"><img class="img-fluid" src="../../assets/img/330X360/img1.jpg" alt="Image Description"></a>
</div>
</div>
</div>
<!-- End Footer-top-widget -->
<!-- Footer-newsletter -->
<div class="bg-primary py-3">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-7 mb-md-3 mb-lg-0">
<div class="row align-items-center">
<div class="col-auto flex-horizontal-center">
<i class="ec ec-newsletter font-size-40"></i>
<h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
</div>
{{-- <div class="col my-4 my-md-0">
<h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$20 coupon for first shopping.</strong></h5>
</div> --}}
</div>
</div>
<div class="col-lg-5">
<!-- Subscribe Form -->
<form class="js-validate js-form-message">
<label class="sr-only" for="subscribeSrEmail">Email address</label>
<div class="input-group input-group-pill">
<input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required
data-msg="Please enter a valid email address.">
<div class="input-group-append">
<button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign Up</button>
</div>
</div>
</form>
<!-- End Subscribe Form -->
</div>
</div>
</div>
</div>
<!-- End Footer-newsletter -->
<!-- Footer-bottom-widgets -->
<div class="pt-8 pb-4 bg-gray-13">
<div class="container mt-1">
<div class="row">
<div class="col-lg-5">
<div class="mb-6">
<a href="#" class="d-inline-block">
<img src="/logo3.png" alt="" srcset="">
</a>
</div>
<div class="mb-4">
<div class="row no-gutters">
<div class="col-auto">
<i class="ec ec-support text-primary font-size-56"></i>
</div>
<div class="col pl-3">
<div class="font-size-13 font-weight-light">Got questions? Contact us 24/7!</div>
<a href="tel:+2347066930177" class="font-size-20 text-gray-90">+234706693017 ,
<a href="mailto:contact@gear5.com.ng" class="font-size-20 text-gray-90">contact@gear5.com.ng
{{-- , </a><a href="tel:+0600874548" class="font-size-20 text-gray-90">(0600) 874 548</a> --}}
</div>
</div>
</div>
<div class="mb-4">
<h6 class="mb-1 font-weight-bold">Contact info</h6>
<address class="">
17 Princess Road, Kubuwa, FCT Abuja, Nigeria
</address>
</div>
<div class="my-4 my-md-4">
<ul class="list-inline mb-0 opacity-7">
<li class="list-inline-item mr-0">
<a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
<span class="fab fa-facebook-f btn-icon__inner"></span>
</a>
</li>
<li class="list-inline-item mr-0">
<a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
<span class="fab fa-instagram btn-icon__inner"></span>
</a>
</li>
<li class="list-inline-item mr-0">
<a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
<span class="fab fa-twitter btn-icon__inner"></span>
</a>
</li>
<li class="list-inline-item mr-0">
<a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
<span class="fab fa-youtube btn-icon__inner"></span>
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-7">
<div class="row">
<div class="col-12 col-md mb-4 mb-md-0">
<h6 class="mb-3 font-weight-bold">Find it Fast</h6>
<!-- List Group -->
<ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
@php
$i=0;
@endphp
@foreach ($categories as $category)

@php
if($i>6){
break;
}
@endphp
<li><a class="list-group-item list-group-item-action" href="{{ $category->slug }}">{{ $category->category_name }}</a></li>
@php
$i++;
@endphp
@endforeach
</ul>
<!-- End List Group -->
</div>

<div class="col-12 col-md mb-4 mb-md-0">
<!-- List Group -->
<ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
@php
$i=0;
@endphp
@foreach ($categories as $category)

@if ($i>4)


<li><a class="list-group-item list-group-item-action" href="{{ $category->slug }}">{{ $category->category_name }}</a></li>
<li>
@endif

@php
$i++;
@endphp
@endforeach
</ul>
<!-- End List Group -->
</div>

<div class="col-12 col-md mb-4 mb-md-0">
<h6 class="mb-3 font-weight-bold">Customer Care</h6>
<!-- List Group -->
<ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
<li><a class="list-group-item list-group-item-action" href="/profile">My Account</a></li>
<li><a class="list-group-item list-group-item-action" href="/register/vendor">Sell Now</a></li>
<li><a class="list-group-item list-group-item-action" href="/my-order">My Order</a></li>
<li><a class="list-group-item list-group-item-action" href="terms-and-conditions.html">Terms & Condition</a></li>
<li><a class="list-group-item list-group-item-action" href="/cart">Cart</a></li>
<li><a class="list-group-item list-group-item-action" href="/faq">FAQs</a></li>
<li><a class="list-group-item list-group-item-action" href="/contact-us">Contact us</a></li>
</ul>
<!-- End List Group -->
</div>
</div>
</div>
</div>
</div>
</div>
<!-- End Footer-bottom-widgets -->
<!-- Footer-copy-right -->
<div class="bg-gray-14 py-2">
<div class="container">
<div class="flex-center-between d-block d-md-flex">
<div class="mb-3 mb-md-0">© {{ date('Y') }} <a href="#" class="font-weight-bold text-gray-90">Gear 5</a> - All rights Reserved</div>
<div class="text-md-right">
<span class="d-inline-block bg-white border rounded p-1">
<img class="max-width-5" src="../../assets/img/100X60/img1.jpg" alt="Image Description">
</span>
<span class="d-inline-block bg-white border rounded p-1">
<img class="max-width-5" src="../../assets/img/100X60/img2.jpg" alt="Image Description">
</span>
<span class="d-inline-block bg-white border rounded p-1">
<img class="max-width-5" src="../../assets/img/100X60/img3.jpg" alt="Image Description">
</span>
<span class="d-inline-block bg-white border rounded p-1">
<img class="max-width-5" src="../../assets/img/100X60/img4.jpg" alt="Image Description">
</span>
<span class="d-inline-block bg-white border rounded p-1">
<img class="max-width-5" src="../../assets/img/100X60/img5.jpg" alt="Image Description">
</span>
</div>
</div>
</div>
</div>
<!-- End Footer-copy-right -->
</footer>
<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Account Sidebar Navigation -->
<aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
<div class="u-sidebar__scroller">
<div class="u-sidebar__container">
<div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
<!-- Toggle Button -->
<div class="d-flex align-items-center pt-4 px-7">
<button type="button" class="close ml-auto"
aria-controls="sidebarContent"
aria-haspopup="true"
aria-expanded="false"
data-unfold-event="click"
data-unfold-hide-on-scroll="false"
data-unfold-target="#sidebarContent"
data-unfold-type="css-animation"
data-unfold-animation-in="fadeInRight"
data-unfold-animation-out="fadeOutRight"
data-unfold-duration="500">
<i class="ec ec-close-remove"></i>
</button>
</div>
<!-- End Toggle Button -->

<!-- Content -->
<div class="js-scrollbar u-sidebar__body">
<div class="u-sidebar__content u-header-sidebar__content">
<form class="js-validate">
<!-- Login -->
<div id="login" data-target-group="idForm">
<!-- Title -->
<header class="text-center mb-7">
<h2 class="h4 mb-0">Welcome Back!</h2>
<p>Login to manage your account.</p>
</header>
<!-- End Title -->

<!-- Form Group -->
<div class="form-group">
<div class="js-form-message js-focus-state">
<label class="sr-only" for="signinEmail">Email</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="signinEmailLabel">
<span class="fas fa-user"></span>
</span>
</div>
<input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
data-msg="Please enter a valid email address."
data-error-class="u-has-error"
data-success-class="u-has-success">
</div>
</div>
</div>
<!-- End Form Group -->

<!-- Form Group -->
<div class="form-group">
<div class="js-form-message js-focus-state">
<label class="sr-only" for="signinPassword">Password</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="signinPasswordLabel">
<span class="fas fa-lock"></span>
</span>
</div>
<input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
data-msg="Your password is invalid. Please try again."
data-error-class="u-has-error"
data-success-class="u-has-success">
</div>
</div>
</div>
<!-- End Form Group -->

<div class="d-flex justify-content-end mb-4">
<a class="js-animation-link small link-muted" href="javascript:;"
data-target="#forgotPassword"
data-link-group="idForm"
data-animation-in="slideInUp">Forgot Password?</a>
</div>

<div class="mb-2">
<button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
</div>

<div class="text-center mb-4">
<span class="small text-muted">Do not have an account?</span>
<a class="js-animation-link small text-dark" href="javascript:;"
data-target="#signup"
data-link-group="idForm"
data-animation-in="slideInUp">Signup
</a>
</div>

<div class="text-center">
<span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
</div>

<!-- Login Buttons -->
<div class="d-flex">
<a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
<span class="fab fa-facebook-square mr-1"></span>
Facebook
</a>
<a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
<span class="fab fa-google mr-1"></span>
Google
</a>
</div>
<!-- End Login Buttons -->
</div>

<!-- Signup -->
<div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
<!-- Title -->
<header class="text-center mb-7">
<h2 class="h4 mb-0">Welcome to Electro.</h2>
<p>Fill out the form to get started.</p>
</header>
<!-- End Title -->

<!-- Form Group -->
<div class="form-group">
<div class="js-form-message js-focus-state">
<label class="sr-only" for="signupEmail">Email</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="signupEmailLabel">
<span class="fas fa-user"></span>
</span>
</div>
<input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
data-msg="Please enter a valid email address."
data-error-class="u-has-error"
data-success-class="u-has-success">
</div>
</div>
</div>
<!-- End Input -->

<!-- Form Group -->
<div class="form-group">
<div class="js-form-message js-focus-state">
<label class="sr-only" for="signupPassword">Password</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="signupPasswordLabel">
<span class="fas fa-lock"></span>
</span>
</div>
<input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
data-msg="Your password is invalid. Please try again."
data-error-class="u-has-error"
data-success-class="u-has-success">
</div>
</div>
</div>
<!-- End Input -->

<!-- Form Group -->
<div class="form-group">
<div class="js-form-message js-focus-state">
<label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="signupConfirmPasswordLabel">
<span class="fas fa-key"></span>
</span>
</div>
<input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
data-msg="Password does not match the confirm password."
data-error-class="u-has-error"
data-success-class="u-has-success">
</div>
</div>
</div>
<!-- End Input -->

<div class="mb-2">
<button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
</div>

<div class="text-center mb-4">
<span class="small text-muted">Already have an account?</span>
<a class="js-animation-link small text-dark" href="javascript:;"
data-target="#login"
data-link-group="idForm"
data-animation-in="slideInUp">Login
</a>
</div>

<div class="text-center">
<span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
</div>

<!-- Login Buttons -->
<div class="d-flex">
<a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
<span class="fab fa-facebook-square mr-1"></span>
Facebook
</a>
<a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
<span class="fab fa-google mr-1"></span>
Google
</a>
</div>
<!-- End Login Buttons -->
</div>
<!-- End Signup -->

<!-- Forgot Password -->
<div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
<!-- Title -->
<header class="text-center mb-7">
<h2 class="h4 mb-0">Recover Password.</h2>
<p>Enter your email address and an email with instructions will be sent to you.</p>
</header>
<!-- End Title -->

<!-- Form Group -->
<div class="form-group">
<div class="js-form-message js-focus-state">
<label class="sr-only" for="recoverEmail">Your email</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="recoverEmailLabel">
<span class="fas fa-user"></span>
</span>
</div>
<input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
data-msg="Please enter a valid email address."
data-error-class="u-has-error"
data-success-class="u-has-success">
</div>
</div>
</div>
<!-- End Form Group -->

<div class="mb-2">
<button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
</div>

<div class="text-center mb-4">
<span class="small text-muted">Remember your password?</span>
<a class="js-animation-link small" href="javascript:;"
data-target="#login"
data-link-group="idForm"
data-animation-in="slideInUp">Login
</a>
</div>
</div>
<!-- End Forgot Password -->
</form>
</div>
</div>
<!-- End Content -->
</div>
</div>
</div>
</aside>
<!-- End Account Sidebar Navigation -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- Go to Top -->
<a class="js-go-to u-go-to" href="#"
data-position='{"bottom": 15, "right": 15 }'
data-type="fixed"
data-offset-top="400"
data-compensation="#header"
data-show-effect="slideInUp"
data-hide-effect="slideOutDown">
<span class="fas fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->

<!-- JS Global Compulsory -->
<script src="{{asset('/user/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('/user/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{asset('/user/assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('/user/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{asset('/user/assets/vendor/appear.js')}}"></script>
<script src="{{asset('/user/assets/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('/user/assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
<script src="{{asset('/user/assets/vendor/svg-injector/dist/svg-injector.min.js')}}"></script>
<script src="{{asset('/user/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('/user/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('/user/assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('/user/assets/vendor/typed.js/lib/typed.min.js')}}"></script>
<script src="{{asset('/user/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
<script src="{{asset('/user/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

<!-- JS Electro -->
<script src="{{asset('/user/assets/js/hs.core.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.countdown.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.header.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.hamburgers.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.unfold.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.focus-state.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.malihu-scrollbar.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.validation.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.fancybox.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.onscroll-animation.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.slick-carousel.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.show-animation.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.svg-injector.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.go-to.js')}}"></script>
<script src="{{asset('/user/assets/js/components/hs.selectpicker.js')}}"></script>

<!-- JS Plugins Init. -->
<script>
$(window).on('load', function () {
// initialization of HSMegaMenu component
$('.js-mega-menu').HSMegaMenu({
event: 'hover',
direction: 'horizontal',
pageContainer: $('.container'),
breakpoint: 767.98,
hideTimeOut: 0
});

// initialization of svg injector module
$.HSCore.components.HSSVGIngector.init('.js-svg-injector');
});

$(document).on('ready', function () {
// initialization of header
$.HSCore.components.HSHeader.init($('#header'));

// initialization of animation
$.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

// initialization of unfold component
$.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
afterOpen: function () {
$(this).find('input[type="search"]').focus();
}
});

// initialization of popups
$.HSCore.components.HSFancyBox.init('.js-fancybox');

// initialization of countdowns
var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
yearsElSelector: '.js-cd-years',
monthsElSelector: '.js-cd-months',
daysElSelector: '.js-cd-days',
hoursElSelector: '.js-cd-hours',
minutesElSelector: '.js-cd-minutes',
secondsElSelector: '.js-cd-seconds'
});

// initialization of malihu scrollbar
$.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

// initialization of forms
$.HSCore.components.HSFocusState.init();

// initialization of form validation
$.HSCore.components.HSValidation.init('.js-validate', {
rules: {
confirmPassword: {
equalTo: '#signupPassword'
}
}
});

// initialization of show animations
$.HSCore.components.HSShowAnimation.init('.js-animation-link');

// initialization of fancybox
$.HSCore.components.HSFancyBox.init('.js-fancybox');

// initialization of slick carousel
$.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

// initialization of go to
$.HSCore.components.HSGoTo.init('.js-go-to');

// initialization of hamburgers
$.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

// initialization of unfold component
$.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
beforeClose: function () {
$('#hamburgerTrigger').removeClass('is-active');
},
afterClose: function() {
$('#headerSidebarList .collapse.show').collapse('hide');
}
});

$('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
e.preventDefault();

var target = $(this).data('target');

if($(this).attr('aria-expanded') === "true") {
$(target).collapse('hide');
} else {
$(target).collapse('show');
}
});

// initialization of unfold component
$.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

// initialization of select picker
$.HSCore.components.HSSelectPicker.init('.js-select');
});
</script>
</body>


</html>
