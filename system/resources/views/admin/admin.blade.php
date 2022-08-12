<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Topico - Clean, Minimal E-commerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('public/asset')}}/img/favicon.png">

		<!-- CSS here -->
        <link rel="stylesheet" href="{{url('public/asset')}}/css/preloader.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/slick.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/backToTop.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/meanmenu.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/nice-select.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/fontAwesome5Pro.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/ui-range-slider.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/default.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/style.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- preloader area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                </div>
            </div>
        </div>
        <!-- preloader area end -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->
        
        <!-- header area start -->
        <header>
            <div class="header__area">
                <div class="header__info">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-3">
                                <div class="header__info-left d-flex justify-content-center justify-content-sm-between align-items-center">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{url('public/asset')}}/img/logo/logo-black.png" alt="logo"></a>
                                    </div>
                                    <div class="header__hotline align-items-center d-none d-sm-flex  d-lg-none d-xl-flex">
                                        <div class="header__hotline-icon">
                                            <i class="fal fa-headset"></i>
                                        </div>
                                        <div class="header__hotline-info">
                                            <span>Hotline Free:</span>
                                            <h6>06-900-6789-00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-9">
                                <div class="header__info-right">
                                    <div class="header__search f-left d-none d-sm-block">
                                        <form action="#">
                                            <div class="header__search-box">
                                                <input type="text" placeholder="Search For Products...">
                                                <button type="submit">Search</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="cart__mini-wrapper d-none d-md-flex f-right p-relative">
                                        <a href="javascript:void(0);" class="cart__toggle">
                                            <span class="cart__total-item">01</span>
                                        </a>
                                        <span class="cart__content">
                                            <span class="cart__my">My Cart:</span>
                                            <span class="cart__total-price">$ 255.00</span>
                                        </span>
                                        <div class="cart__mini">
                                          <div class="cart__close"><button type="button" class="cart__close-btn"><i class="fal fa-times"></i></button></div>
                                          <ul>
                                              <li>
                                                <div class="cart__title">
                                                  <h4>My Cart</h4>
                                                  <span>(1 Item in Cart)</span>
                                                </div>
                                              </li>
                                              <li>
                                                <div class="cart__item d-flex justify-content-between align-items-center">
                                                  <div class="cart__inner d-flex">
                                                    <div class="cart__thumb">
                                                      <a href="product-details.html">
                                                        <img src="{{url('public/asset')}}/img/shop/product/cart/cart-mini-1.jpg" alt="">
                                                      </a>
                                                    </div>
                                                    <div class="cart__details">
                                                      <h6><a href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a></h6>
                                                      <div class="cart__price">
                                                        <span>$255.00</span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="cart__del">
                                                      <a href="#"><i class="fal fa-trash-alt"></i></a>
                                                  </div>
                                                </div>
                                              </li>
                                              <li>
                                                <div class="cart__sub d-flex justify-content-between align-items-center">
                                                  <h6>Car Subtotal</h6>
                                                  <span class="cart__sub-total">$255.00</span>
                                                </div>
                                              </li>
                                              <li>
                                                <a href="checkout.html" class="t-y-btn w-100 mb-10">Proceed to checkout</a>
                                                <a href="cart.html" class="t-y-btn t-y-btn-border w-100 mb-10">view add edit cart</a>
                                              </li>
                                          </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-6 col-6">
                              <div class="header__bottom-left d-flex d-xl-block align-items-center">
                                <div class="side-menu d-xl-none mr-20">
                                  <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                                </div>
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="index.html">Home <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="index.html">Home Style 1</a></li>
                                                    <li><a href="index-2.html">Home Style 2</a></li>
                                                    <li><a href="index-3.html">Home Style 3</a></li>
                                                    <li><a href="index-4.html">Home Style 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="product.html">Features <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="product.html">Product Type</a></li>
                                                    <li><a href="product.html">Product Features <i class="far fa-angle-down"></i></a>
                                                        <ul class="submenu">
                                                            <li><a href="product-details.html">Simple Product</a></li>
                                                            <li><a href="product-details-config.html">Configurable Product</a></li>
                                                            <li><a href="product-details-group.html">Group Product</a></li>
                                                            <li><a href="product-details-download.html">Downloadable Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Shop By Brand</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog.html">Blog <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-detaills.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li>
                                                <a href="about.html">pages <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="error.html">404 Error</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3  col-sm-6  col-6 d-md-none d-lg-block">
                                <div class="header__bottom-right d-flex justify-content-end">
                                    <div class="header__currency">
                                        <select>
                                            <option>USD</option>
                                            <option>USD</option>
                                            <option>USD</option>
                                            <option>USD</option>
                                            <option>USD</option>
                                        </select>
                                    </div>
                                    <div class="header__lang d-md-none d-lg-block">
                                        <select>
                                            <option>English</option>
                                            <option>Bangla</option>
                                            <option>Arabic</option>
                                            <option>Hindi</option>
                                            <option>Urdu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->

        <!-- offcanvas area start -->
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.html">
                    <img src="{{url('public/asset')}}/img/logo/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit" ><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
            </div>
        </div>
        <!-- offcanvas area end -->      
        <div class="body-overlay"></div>
        <!-- offcanvas area end -->

        <main>
            <!-- slider area satrt -->
            <section class="slider__area pt-30 grey-bg">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xl-10 custom-col-10 col-lg-12">
                            <div class="slider__inner slider-active">
                                <div class="single-slider w-img">
                                    <img src="{{url('public/asset')}}/img/slider/03/slider-01.jpg" alt="slider">
                                </div>
                                <div class="single-slider w-img">
                                    <img src="{{url('public/asset')}}/img/slider/03/slider-02.jpg" alt="slider">
                                </div>
                                <div class="single-slider w-img">
                                    <img src="{{url('public/asset')}}/img/slider/03/slider-03.jpg" alt="slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider area end -->

            <!-- features area start -->
            <section class="features__area grey-bg-2 pt-30 pb-20 pl-10 pr-10">
                <div class="container">
                    <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-rocket-launch"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Free Shipping</h6>
                                    <p>Free Shipping On All Order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-sync"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Money Guarantee</h6>
                                    <p>30 Day Money Back Guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-user-headset"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Online Support 24/7</h6>
                                    <p>Technical Support Stand By</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-thumbs-up"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Secure Payment</h6>
                                    <p>All Payment Method are accepted</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item features__item-last d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-badge-dollar"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Member Discount</h6>
                                    <p>Upto 40% Discount All Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features area end -->

            <!-- desktop computer area start -->
            <section class="product__desktop grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__head d-lg-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>Computer & Desktop<span>Products</span></h3>
                                </div>
                                <div class="product__nav-tab product__nav-tab-3 mr-75">
                                    <ul class="nav nav-tabs" id="desktipTO" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="deskto-tab" data-bs-toggle="tab" data-bs-target="#deskto" type="button" role="tab" aria-controls="deskto" aria-selected="true">Desktop & Computer</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="tv-tab" data-bs-toggle="tab" data-bs-target="#tv" type="button" role="tab" aria-controls="tv" aria-selected="false">TV & Audios</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="laptop-tab" data-bs-toggle="tab" data-bs-target="#laptop" type="button" role="tab" aria-controls="laptop" aria-selected="false">Laptop Accessories</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="lenovo-tab" data-bs-toggle="tab" data-bs-target="#lenovo" type="button" role="tab" aria-controls="lenovo" aria-selected="false">Lenovo</button>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-2 custom-col-2-2 ">
                            <div class="banner__area">
                                <div class="banner__item mb-20 w-img">
                                    <a href="product-details.html"><img src="{{url('public/asset')}}/img/banner/banner-sm-1.jpg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 custom-col-10-2">
                            <div class="tab-content" id="desktop-content">
                                <div class="tab-pane fade show active" id="deskto" role="tabpanel" aria-labelledby="deskto-tab">
                                    <div class="product__desktop-slider-3 t-nav owl-carousel">
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-12.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Portable Watch Phone with Blood Pressure Monitor OLED</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-11.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-17.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">High Quality Glass Ultra-Thin Kitchen Scale</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-16.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-13.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-16.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-17.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Portable Watch Phone with Blood Pressure Monitor OLED</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tv" role="tabpanel" aria-labelledby="tv-tab">
                                    <div class="product__desktop-slider-3 t-nav owl-carousel">
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-12.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Portable Watch Phone with Blood Pressure Monitor OLED</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-11.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-17.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">High Quality Glass Ultra-Thin Kitchen Scale</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-16.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-13.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-16.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-17.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Portable Watch Phone with Blood Pressure Monitor OLED</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">
                                    <div class="product__desktop-slider-3 t-nav owl-carousel">
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-12.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Portable Watch Phone with Blood Pressure Monitor OLED</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-11.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-17.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">High Quality Glass Ultra-Thin Kitchen Scale</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-16.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-13.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-16.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-17.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Portable Watch Phone with Blood Pressure Monitor OLED</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="lenovo" role="tabpanel" aria-labelledby="lenovo-tab">
                                    <div class="product__desktop-slider-3 t-nav owl-carousel">
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-12.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Portable Watch Phone with Blood Pressure Monitor OLED</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-11.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-17.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">High Quality Glass Ultra-Thin Kitchen Scale</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-16.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-13.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-16.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-17.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Portable Watch Phone with Blood Pressure Monitor OLED</a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
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
            <!-- destop computer area end -->

            <!-- desktop computer area start -->
            <section class="product__phone pt-30 grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__head d-lg-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>Phones & Tablets<span>Products</span></h3>
                                </div>
                                <div class="product__nav-tab product__nav-tab-3 mr-75">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home Appliances</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="storage-tab" data-bs-toggle="tab" data-bs-target="#storage" type="button" role="tab" aria-controls="storage" aria-selected="false">Storage Devices</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="electrical-tab" data-bs-toggle="tab" data-bs-target="#electrical" type="button" role="tab" aria-controls="electrical" aria-selected="false">Electrical Kettle</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile" type="button" role="tab" aria-controls="mobile" aria-selected="false">Mobile Phones</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-10 custom-col-10-2">
                            <div class="tab-content" id="phone-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="product__phone-slider-3 t-nav owl-carousel">
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-2.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Verizon LG K8V 8GB 4G LTE 5" Prepaid Smartphone </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-4.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Apple iPhone XS (64GB) - Space Gray - [Locked key] </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-6.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-7.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-9.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-10.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, Ebuyer.com </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-11.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-12.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Dell U2717D: £434.99, Scan.co.uk </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-6.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-7.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="storage" role="tabpanel" aria-labelledby="storage-tab">
                                    <div class="product__phone-slider-3 t-nav owl-carousel">
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-2.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Verizon LG K8V 8GB 4G LTE 5" Prepaid Smartphone </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-4.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Apple iPhone XS (64GB) - Space Gray - [Locked key] </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-6.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-7.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-9.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-10.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, Ebuyer.com </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-11.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-12.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Dell U2717D: £434.99, Scan.co.uk </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-6.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-7.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="electrical" role="tabpanel" aria-labelledby="electrical-tab">
                                    <div class="product__phone-slider-3 t-nav owl-carousel">
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-2.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Verizon LG K8V 8GB 4G LTE 5" Prepaid Smartphone </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-4.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Apple iPhone XS (64GB) - Space Gray - [Locked key] </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-6.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-7.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-9.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-10.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, Ebuyer.com </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-11.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-12.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Dell U2717D: £434.99, Scan.co.uk </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-6.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-7.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">
                                    <div class="product__phone-slider-3 t-nav owl-carousel">
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-2.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Verizon LG K8V 8GB 4G LTE 5" Prepaid Smartphone </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-4.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Apple iPhone XS (64GB) - Space Gray - [Locked key] </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-6.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-7.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-9.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-10.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, Ebuyer.com </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-11.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-12.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Dell U2717D: £434.99, Scan.co.uk </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper">
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-6.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                            </div>
                                            <div class="product__item white-bg d-flex mb-20">
                                                <div class="product__thumb product__thumb-sale p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{url('public/asset')}}/img/shop/product/product-7.jpg" alt="product">
                                                        <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
                                                    </h6>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="new new-2">$90.00</span>
                                                    <span class="price-old"> <del>$100.00</del> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 custom-col-2-2">
                            <div class="banner__area">
                                <div class="banner__item mb-20 w-img">
                                    <a href="product-details.html"><img src="{{url('public/asset')}}/img/banner/banner-sm-2.jpg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- destop computer area end -->

            

            

           
            <!-- subscribe area start -->
            <section class="subscribe__area pt-35 pb-30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="subscribe__content d-sm-flex align-items-center">
                                <div class="subscribe__icon mr-25">
                                    <img src="{{url('public/asset')}}/img/icon/icon_email.png" alt="">
                                </div>
                                <div class="subscribe__text">
                                    <h4>Sign up to Newsletter</h4>
                                    <p>Get email updates about our latest shop...and receive <span>$30 Coupon For First Shopping</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="subscribe__form f-right">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email here...">
                                    <button class="t-y-btn t-y-btn-sub">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subscribe area end -->

            <!-- back to top btn area start -->
            <section class="back-btn-top">
                <div class="container-fluid p-0">
                    <div class="row gx-0">
                        <div class="col-xl-12">
                            <div id="scroll" class="back-to-top-btn text-center">
                                <a href="javascript:void(0);">back to top</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- back to top btn area end -->

            <!-- shop modal start -->
            <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                    <div class="modal-content">
                        <div class="product__modal-wrapper p-relative">
                            <div class="product__modal-close p-absolute">
                                <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                            </div>
                            <div class="product__modal-inner">
                                <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{url('public/asset')}}/img/shop/product/quick-view/quick-view-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{url('public/asset')}}/img/shop/product/quick-view/quick-view-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{url('public/asset')}}/img/shop/product/quick-view/quick-view-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{url('public/asset')}}/img/shop/product/quick-view/quick-view-4.jpg" alt="">
                                                </div>
                                            </div>
                                          </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                    <img src="{{url('public/asset')}}/img/shop/product/quick-view/nav/quick-nav-1.jpg" alt="">
                                              </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                                <img src="{{url('public/asset')}}/img/shop/product/quick-view/nav/quick-nav-2.jpg" alt="">
                                              </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                                <img src="{{url('public/asset')}}/img/shop/product/quick-view/nav/quick-nav-3.jpg" alt="">
                                              </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                                <img src="{{url('public/asset')}}/img/shop/product/quick-view/nav/quick-nav-4.jpg" alt="">
                                              </button>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                        <div class="product__modal-des mb-40">
                                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
                                        </div>
                                        <div class="product__stock">
                                            <span>Availability :</span>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="product__stock sku mb-30">
                                            <span>SKU:</span>
                                            <span>Samsung C49J89: £875, Debenhams Plus</span>
                                        </div>
                                        <div class="product__review d-sm-flex">
                                            <div class="rating rating__shop mb-15 mr-35">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            </div>
                                            <div class="product__add-review mb-15">
                                            <span><a href="#">1 Review</a></span>
                                            <span><a href="#">Add Review</a></span>
                                            </div>
                                        </div>
                                        <div class="product__price">
                                            <span>$560.00</span>
                                        </div>
                                        <div class="product__modal-form mb-30">
                                            <form action="#">
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    <button class="t-y-btn" type="submit">Add to cart</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="product__modal-links">
                                            <ul>
                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop modal end -->

        </main>

        <!-- footer area start -->
        <footer>
            <div class="footer__area footer-bg">
                <div class="footer__top pt-80 pb-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-12">
                                <div class="footer__top-left">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                                            <div class="footer__widget">
                                                <div class="footer__widget-title mb-45">
                                                    <div class="footer__logo">
                                                        <a href="index.html"><img src="{{url('public/asset')}}/img/logo/logo-white.png" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="footer__widget-content">
                                                    <div class="footer__hotline d-flex align-items-center mb-30">
                                                        <div class="icon mr-15">
                                                            <i class="fal fa-headset"></i>
                                                        </div>
                                                        <div class="text">
                                                            <h4>Hotline Free 24/24:</h4>
                                                            <span>(+100) 123 456 7890</span>
                                                        </div>
                                                    </div>
                                                    <div class="footer__info">
                                                        <ul>
                                                            <li>
                                                                <span>Add:  <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Walls Street 68, Mahattan, New York, USA</a>
                                                                </span>
                                                            </li>
                                                            <li><span>Email: <a href="mailto:info@thebuesky.com">info@thebuesky.com</a>  </span></li>
                                                            <li><span>Fax: <a href="tel:123-456-7890">(+100) 123 456 7890</a> - <a href="tel:-100-123-456-7891">(+100) 123 456 7891</a> </span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="footer__widget">
                                                        <div class="footer__widget-title">
                                                            <h4>Information</h4>
                                                        </div>
                                                        <div class="footer__widget-content">
                                                            <div class="footer__link">
                                                                <ul>
                                                                    <li><a href="#"> Custom Service </a></li>
                                                                    <li><a href="#">F.A.Q.’s</a></li>
                                                                    <li><a href="#">Ordering Tracking</a></li>
                                                                    <li><a href="#"> Contacts</a></li>
                                                                    <li><a href="#">Events</a></li>
                                                                    <li><a href="#">Popular</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="footer__widget">
                                                        <div class="footer__widget-title">
                                                            <h4>Our Services</h4>
                                                        </div>
                                                        <div class="footer__widget-content">
                                                            <div class="footer__link">
                                                                <ul>
                                                                    <li><a href="#">Sitemap</a></li>
                                                                    <li><a href="#">Privacy Policy</a></li>
                                                                    <li><a href="#">Your Account</a></li>
                                                                    <li><a href="#">Advanced Search</a></li>
                                                                    <li><a href="#">Terms & Condition</a></li>
                                                                    <li><a href="#"> Contact Us</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-12">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title">
                                                <h4>My Account</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link">
                                                    <ul>
                                                        <li><a href="#"> About us </a></li>
                                                        <li><a href="#">Delivery Information</a></li>
                                                        <li><a href="#">Privacy Policy</a></li>
                                                        <li><a href="#">Discount</a></li>
                                                        <li><a href="#">Custom Service</a></li>
                                                        <li><a href="#">Terms & Condition</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title">
                                                <h4>Payment & Shipping</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link">
                                                    <ul>
                                                        <li><a href="#">Terms Of Use</a></li>
                                                        <li><a href="#">Payment Methods</a></li>
                                                        <li><a href="#">Shipping Guide</a></li>
                                                        <li><a href="#">Locations We Ship To</a></li>
                                                        <li><a href="#">Estimated Delivery Time</a></li>
                                                        <li><a href="#">Express</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom pt-60 pb-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer__links text-center">
                                    <p>
                                        <a href="#">Air Conditioners</a>
                                        <a href="#">Audios & Theaters</a>
                                        <a href="#">Car Electronics</a>
                                        <a href="#">Office Electronics</a>
                                        <a href="#">TV Televisions</a>
                                        <a href="#">Washing Machines</a>
                                    </p>
                                    <p>
                                        <a href="#">Cookware</a>
                                        <a href="#">Decoration</a>
                                        <a href="#">Furniture </a>
                                        <a href="#">Garden Tools</a>
                                        <a href="#">Garden Equipments</a>
                                        <a href="#">Powers And Hand Tools </a>
                                        <a href="#">Utensil & Gadget </a>
                                        <a href="#">Printers</a>
                                        <a href="#">Projectors</a>
                                        <a href="#">Scanners</a>
                                        <a href="#">Store</a>
                                        <a href="#">Business</a>
                                    </p>
                                    <p>
                                        <a href="#">4K Ultra</a>
                                        <a href="#"> HD TVs </a>
                                        <a href="#">LED TVs</a>
                                        <a href="#">OLED TVs</a>
                                        <a href="#">Desktop</a>
                                        <a href="#">PC</a>
                                        <a href="#">Laptop</a>
                                        <a href="#">Smartphones</a>
                                        <a href="#">Tablet</a>
                                        <a href="#">Game Controller</a>
                                        <a href="#">Audio & Video</a>
                                        <a href="#"> Wireless Speaker</a>
                                        <a href="#">Drone</a>
                                    </p>
                                </div>
                                <div class="footer__download text-center">
                                    <h4>Download The App - Get 30% Sale Coupon</h4>
                                    <a href="#" class="m-img"><img src="{{url('public/asset')}}/img/icon/app-store.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright pt-30 pb-35 footer-bottom-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="footer__copyright-text">
                                    <p>Copyright © <a href="index.html">Topico.</a> All Rights Reserved. <a href="#">ThemePure.</a></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="footer__payment f-right">
                                    <a href="#" class="m-img"><img src="{{url('public/asset')}}/img/icon/payment.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

		<!-- JS here -->
        <script src="{{url('public/asset')}}/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="{{url('public/asset')}}/js/vendor/waypoints.min.js"></script>
        <script src="{{url('public/asset')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public/asset')}}/js/meanmenu.js"></script>
        <script src="{{url('public/asset')}}/js/slick.min.js"></script>
        <script src="{{url('public/asset')}}/js/backToTop.js"></script>
        <script src="{{url('public/asset')}}/js/jquery.fancybox.min.js"></script>
        <script src="{{url('public/asset')}}/js/countdown.js"></script>
        <script src="{{url('public/asset')}}/js/nice-select.min.js"></script>
        <script src="{{url('public/asset')}}/js/isotope.pkgd.min.js"></script>
        <script src="{{url('public/asset')}}/js/owl.carousel.min.js"></script>
        <script src="{{url('public/asset')}}/js/jquery-ui-slider-range.js"></script>
        <script src="{{url('public/asset')}}/js/ajax-form.js"></script>
        <script src="{{url('public/asset')}}/js/wow.min.js"></script>
        <script src="{{url('public/asset')}}/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{url('public/asset')}}/js/main.js"></script>
    </body>
</html>
