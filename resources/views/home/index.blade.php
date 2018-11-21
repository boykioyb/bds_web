@extends('layouts.base')
@section('content')

    <!-- start owl slider -->
    @include('layouts.slider')
    <!-- end owl slider -->

    <!-- STAR HEADER SEARCH -->
    @include('layouts.header_search')
    <!-- END HEADER SEARCH -->

    <!-- START SECTION RECENTLY PROPERTIES -->
    <section class="recently portfolio">
        <div class="container-fluid">
            <div class="section-title">
                <h3>Nổi bật</h3>
                <h2>Căn Hộ</h2>
            </div>
            <div class="row portfolio-items">
                <div class="item col-lg-3 col-md-6 col-xs-12 landscapes">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span
                                        class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i
                                        class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-1.jpg"
                                   data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-1.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3 col-md-6 col-xs-12 people">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span
                                        class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i
                                        class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-2.jpg"
                                   data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-2.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3 col-md-6 col-xs-12 people landscapes no-pb pbp-3">
                    <div class="project-single no-mb mbp-3">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span
                                        class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i
                                        class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-3.jpg"
                                   data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-3.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3 col-md-6 col-xs-12 people landscapes no-pb">
                    <div class="project-single no-mb">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span
                                        class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i
                                        class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-4.jpg"
                                   data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-4.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION RECENTLY PROPERTIES -->

    <!-- STAR SECTION WELCOME -->
    <section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="welcome-title">
                        <h2>WELCOME TO <span>FIND HOUSES</span></h2>
                        <h4>THE BEST PLACE TO FIND THE HOUSE YOU WANT.</h4>
                    </div>
                    <div class="welcome-content">
                        <p>The best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris
                            nisi ut aliquip ex ea.</p>
                    </div>
                    <div class="welcome-services">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services">
                                    <div class="services-img img-1">
                                        <img src="images/1.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Buy Property</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services">
                                    <div class="services-img img-2">
                                        <img src="images/2.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Rent Property</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services no-mb mbx">
                                    <div class="services-img img-3">
                                        <img src="images/3.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Real Estate Kit</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services no-mb">
                                    <div class="services-img img-4">
                                        <img src="images/4.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Sell Property</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="wprt-image-video w50">
                        <img alt="image" src="images/projects/welcome.jpg">
                        <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=2xHQqYRcrx4">
                            <i class="fa fa-play"></i>
                        </a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION WELCOME -->

    <!-- START SECTION SERVICES -->
    <section class="services-home bg-white">
        <div class="container">
            <div class="section-title">
                <h3>Property</h3>
                <h2>Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 m-top-0 m-bottom-40">
                    <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                        <div class="media">
                            <i class="fa fa-home bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                        </div>
                        <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                            <h4 class="m-bottom-15 text-bold-700">Houses</h4>
                            <p>Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut
                                imperdiet venenatis vitae justo.</p>
                            <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list.html">Read
                                More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 m-top-40 m-bottom-40">
                    <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                        <div class="media">
                            <i class="fas fa-building bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                        </div>
                        <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                            <h4 class="m-bottom-15 text-bold-700">Apartments</h4>
                            <p>Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut
                                imperdiet venenatis vitae justo.</p>
                            <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list.html">Read
                                More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 m-top-40 m-bottom-40 commercial">
                    <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                        <div class="media">
                            <i class="fas fa-warehouse bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                        </div>
                        <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                            <h4 class="m-bottom-15 text-bold-700">Commercial</h4>
                            <p>Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut
                                imperdiet venenatis vitae justo.</p>
                            <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list.html">Read
                                More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION SERVICES -->

    <!-- START SECTION FEATURED PROPERTIES -->
    <section class="featured portfolio">
        <div class="container">
            <div class="row">
                <div class="section-title col-md-5">
                    <h3>Featured</h3>
                    <h2>Properties</h2>
                </div>
            </div>
            <div class="row portfolio-items">
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span
                                        class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i
                                        class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-1.jpg"
                                   data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-1.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span
                                        class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i
                                        class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-2.jpg"
                                   data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-2.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span
                                        class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i
                                        class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-3.jpg"
                                   data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-3.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent no-pb">
                    <div class="project-single no-mb">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span
                                        class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i
                                        class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-4.jpg"
                                   data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-4.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people sale no-pb">
                    <div class="project-single no-mb">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span
                                        class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i
                                        class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-5.jpg"
                                   data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-5.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent no-pb">
                    <div class="project-single no-mb last">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span
                                        class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i
                                        class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-6.jpg"
                                   data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-6.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION FEATURED PROPERTIES -->

    <!-- START SECTION POPULAR PLACES -->
    <section class="popular-places">
        <div class="container">
            <div class="section-title">
                <h3>Most Popular</h3>
                <h2>Places</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Image Box -->
                    <a href="properties-right-sidebar.html" class="img-box">
                        <img src="images/popular-places/1.jpg" class="img-responsive" alt="">
                        <!-- Badge -->
                        <div class="listing-badges">
                            <span class="featured">Featured</span>
                        </div>
                        <div class="img-box-content visible">
                            <h4>New York City </h4>
                            <span>203 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6">
                    <!-- Image Box -->
                    <a href="properties-right-sidebar.html" class="img-box">
                        <img src="images/popular-places/2.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>Los Angeles</h4>
                            <span>307 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6">
                    <!-- Image Box -->
                    <a href="properties-right-sidebar.html" class="img-box no-mb">
                        <img src="images/popular-places/3.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>San Francisco </h4>
                            <span>409 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Image Box -->
                    <a href="properties-right-sidebar.html" class="img-box no-mb x3">
                        <img src="images/popular-places/4.jpg" class="img-responsive" alt="">
                        <!-- Badge -->
                        <div class="listing-badges">
                            <span class="featured">Featured</span>
                        </div>
                        <div class="img-box-content visible">
                            <h4>Miami</h4>
                            <span>507 Properties</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION POPULAR PLACES -->

    <!-- START SECTION AGENTS -->
    <section class="team">
        <div class="container">
            <div class="section-title col-md-5">
                <h3>Meet Our</h3>
                <h2>Agents</h2>
            </div>
            <div class="row team-all">
                <div class="col-lg-3 col-md-6 team-pro hover-effect">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="images/team/t-5.jpg" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Carls Jhons</h3>
                                <p>Real Estate Agent</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook"
                                                                            aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="agent-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-pro hover-effect">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="images/team/t-6.jpg" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Arling Tracy</h3>
                                <p>Real Estate Agent</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook"
                                                                            aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="agent-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-pro pb-none hover-effect">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="images/team/t-7.jpg" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Mark Web</h3>
                                <p>Real Estate Agent</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook"
                                                                            aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="agent-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-pro hover-effect">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="images/team/t-8.jpg" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Katy Grace</h3>
                                <p>Real Estate Agent</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook"
                                                                            aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="agent-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION AGENTS -->

    <!-- START SECTION TOP LOCATION -->
    <section class="top-location">
        <h4>SOLD HOUSES</h4>
        <div class="owl-carousel owl-theme" id="tp-carousel">
            <div class="item">
                <div class="tp-caption">
                    <h6>New York City</h6>
                    <strong>Property For Sale</strong>
                    <p>Price:&nbsp; $230,000</p>
                </div>
                <img src="images/blog/b-1.jpg" alt="">
            </div>
            <div class="item">
                <div class="tp-caption">
                    <h6>Los Angeles</h6>
                    <strong>Property For Sale</strong>
                    <p>Price:&nbsp; $230,000</p>
                </div>
                <img src="images/blog/b-2.jpg" alt="">
            </div>
            <div class="item">
                <div class="tp-caption">
                    <h6>San Francisco</h6>
                    <strong>Property For Sale</strong>
                    <p>Price:&nbsp; $230,000</p>
                </div>
                <img src="images/blog/b-3.jpg" alt="">
            </div>
            <div class="item">
                <div class="tp-caption">
                    <h6>Miami</h6>
                    <strong>Property For Sale</strong>
                    <p>Price:&nbsp; $230,000</p>
                </div>
                <img src="images/blog/b-4.jpg" alt="">
            </div>
            <div class="item">
                <div class="tp-caption">
                    <h6>Chicago</h6>
                    <strong>Property For Sale</strong>
                    <p>Price:&nbsp; $230,000</p>
                </div>
                <img src="images/blog/b-5.jpg" alt="">
            </div>
            <div class="item">
                <div class="tp-caption">
                    <h6>Los Angeles</h6>
                    <strong>Property For Sale</strong>
                    <p>Price:&nbsp; $230,000</p>
                </div>
                <img src="images/blog/b-6.jpg" alt="">
            </div>
            <div class="item">
                <div class="tp-caption">
                    <h6>San Francisco</h6>
                    <strong>Property For Sale</strong>
                    <p>Price:&nbsp; $230,000</p>
                </div>
                <img src="images/blog/b-7.jpg" alt="">
            </div>
            <div class="item">
                <div class="tp-caption">
                    <h6>Miami</h6>
                    <strong>Property For Sale</strong>
                    <p>Price:&nbsp; $230,000</p>
                </div>
                <img src="images/blog/b-8.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- END SECTION TOP LOCATION -->

    <!-- START SECTION BLOG -->
    <section class="blog-section">
        <div class="container">
            <div class="section-title">
                <h3>Latest</h3>
                <h2>News</h2>
            </div>
            <div class="news-wrap">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-xs-12">
                        <div class="news-item news-item-sm">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="resp-img" src="images/blog/b-1.jpg" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html"><h3>The Real Estate News</h3></a>
                                <span class="date">Jun 23, 2018 &nbsp;/&nbsp; By Admin</span>
                                <div class="news-item-descr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <ul class="action-list">
                                        <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                        <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                        <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="news-item news-item-sm mb">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="resp-img" src="images/blog/b-2.jpg" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html"><h3>The Real Estate News</h3></a>
                                <span class="date">Jun 23, 2018 &nbsp;/&nbsp; By Admin</span>
                                <div class="news-item-descr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <ul class="action-list">
                                        <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                        <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                        <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 col-xs-12">
                        <div class="news-item news-item-sm">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="resp-img" src="images/blog/b-3.jpg" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html"><h3>The Real Estate News</h3></a>
                                <span class="date">Jun 23, 2018 &nbsp;/&nbsp; By Admin</span>
                                <div class="news-item-descr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <ul class="action-list">
                                        <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                        <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                        <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="news-item news-item-sm">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="resp-img" src="images/blog/b-4.jpg" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html"><h3>The Real Estate News</h3></a>
                                <span class="date">Jun 23, 2018 &nbsp;/&nbsp; By Admin</span>
                                <div class="news-item-descr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <ul class="action-list">
                                        <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                        <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                        <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->

    <!-- START SECTION TESTIMONIALS -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h3>Happy</h3>
                <h2>Customers</h2>
            </div>
            <div class="owl-carousel style1">
                <div class="test-1">
                    <h3>Lisa Smith</h3>
                    <img src="images/testimonials/ts-1.jpg" alt="">
                    <h6 class="mt-2">New York</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit
                        tortor et sapien donec.</p>
                </div>
                <div class="test-1">
                    <h3>Jhon Morris</h3>
                    <img src="images/testimonials/ts-2.jpg" alt="">
                    <h6 class="mt-2">Los Angeles</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit
                        tortor et sapien donec.</p>
                </div>
                <div class="test-1">
                    <h3>Mary Deshaw</h3>
                    <img src="images/testimonials/ts-3.jpg" alt="">
                    <h6 class="mt-2">Chicago</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit
                        tortor et sapien donec.</p>
                </div>
                <div class="test-1">
                    <h3>Gary Steven</h3>
                    <img src="images/testimonials/ts-4.jpg" alt="">
                    <h6 class="mt-2">Philadelphia</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit
                        tortor et sapien donec.</p>
                </div>
                <div class="test-1">
                    <h3>Cristy Mayer</h3>
                    <img src="images/testimonials/ts-5.jpg" alt="">
                    <h6 class="mt-2">San Francisco</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit
                        tortor et sapien donec.</p>
                </div>
                <div class="test-1">
                    <h3>Ichiro Tasaka</h3>
                    <img src="images/testimonials/ts-6.jpg" alt="">
                    <h6 class="mt-2">Houston</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit
                        tortor et sapien donec.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIALS -->

    <!-- STAR SECTION PARTNERS -->
    <div class="partners">
        <div class="container">
            <div class="section-title">
                <h3>Our</h3>
                <h2>Partners</h2>
            </div>
            <div class="owl-carousel style2">
                <div class="owl-item"><img src="images/partners/1.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/2.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/3.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/4.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/5.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/6.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/7.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/8.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/9.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/10.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- END SECTION PARTNERS -->

    <!-- START SECTION COUNTER UP -->
    <section class="counterup">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">300</p>
                            <h3>Sold Houses</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">400</p>
                            <h3>Daily Listings</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr mb-0">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">250</p>
                            <h3>Expert Agents</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr mb-0 last">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">200</p>
                            <h3>Won Awars</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION COUNTER UP -->

    <!-- START SECTION NEWSLETTER -->
    <section class="subscribe">
        <div class="realhome_subscribe">
            <div class="realhome container">
                <h2>Subscribe for Our Newsletter</h2>
                <div class="row align-center">
                    <div class="col-lg-6 col-md-6">
                        <form class="realhome_form_subscribe mailchimp form-inline" method="post">
                            <input type="email" id="subscribeEmail" name="EMAIL" class="form_email"
                                   placeholder="Enter Your Email">
                            <button type="submit" value="Subscribe">Submit</button>
                            <label for="subscribeEmail" class="error"></label>
                            <p class="subscription-success"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION NEWSLETTER -->

@endsection
