<?php include 'templete/header.php'; ?>
<?php 
    $sql_agent_query = "SELECT * FROM agent";
    $sql_agent_result = $conn->query($sql_agent_query);
?>
<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-1.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner h-100"></div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner h-100"></div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-5.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner h-100"></div>
            </div>
            <div class="carousel-caption d-flex h-100 banner-slider-inner-2">
                <div class="carousel-content container">
                    <div class="text-center bi-3">
                        <div class="clearfix">
                            <h3 class="text-uppercase">Find Your Amazing Home</h3>
                            <p>We help you to bring a beautiful home and make your life more delightful.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>
<!-- Banner end -->

<!-- Search Section start -->
<div class="search-section search-area pb-hediin-12 bg-grea animated fadeInDown" id="search-style-1">
    <div class="container">
        <div class="search-section-area">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="any-status">
                                        <option>Any Status</option>
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="all-type">
                                        <option>All Type</option>
                                        <option>Apartments</option>
                                        <option>Shop</option>
                                        <option>Restaurant</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bathrooms">
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>location</option>
                                        <option>United States</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="search-button">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Section end -->

<!-- Featured Properties start -->
<div class="featured-properties content-area-12">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>We provide the best price with readymade properties so you can visit and chose</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Modern Family Home</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Unit Type</span>4
                            </li>
                            <li>
                                <span>Price (Sqr Ft)</span> 10,000
                            </li>
                            <li>
                                <span>Parking</span> Yes
                            </li>
                            <li>
                                <span>Lift</span> Yes
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-phone"></i>+88 000 0000 000
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <img class="d-block w-100" src="img/properties/properties-2.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Two storey modern flat</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Unit Type</span>4
                            </li>
                            <li>
                                <span>Price (Sqr Ft)</span> 10,000
                            </li>
                            <li>
                                <span>Parking</span> Yes
                            </li>
                            <li>
                                <span>Lift</span> Yes
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-phone"></i>+88 000 0000 000
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <img class="d-block w-100" src="img/properties/properties-3.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Luxury Villa</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Unit Type</span>4
                            </li>
                            <li>
                                <span>Price (Sqr Ft)</span> 10,000
                            </li>
                            <li>
                                <span>Parking</span> Yes
                            </li>
                            <li>
                                <span>Lift</span> Yes
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-phone"></i>+88 000 0000 000
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <img class="d-block w-100" src="img/properties/properties-4.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Modern Family Home</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Unit Type</span>4
                            </li>
                            <li>
                                <span>Price (Sqr Ft)</span> 10,000
                            </li>
                            <li>
                                <span>Parking</span> Yes
                            </li>
                            <li>
                                <span>Lift</span> Yes
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-phone"></i>+88 000 0000 000
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <img class="d-block w-100" src="img/properties/properties-5.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Relaxing Apartment</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Unit Type</span>4
                            </li>
                            <li>
                                <span>Price (Sqr Ft)</span> 10,000
                            </li>
                            <li>
                                <span>Parking</span> Yes
                            </li>
                            <li>
                                <span>Lift</span> Yes
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-phone"></i>+88 000 0000 000
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <img class="d-block w-100" src="img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Unit Type</span>4
                            </li>
                            <li>
                                <span>Price (Sqr Ft)</span> 10,000
                            </li>
                            <li>
                                <span>Parking</span> Yes
                            </li>
                            <li>
                                <span>Lift</span> Yes
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-phone"></i>+88 000 0000 000
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-btn">
                <div class="slick-prev slick-arrow-buton-2 sab-4">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="slick-next slick-arrow-buton-2 sab-3">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Properties end -->

<!-- Services start -->
<div class="services content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Working with the Neer</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">

                <div class="media service-info-3">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                        <h4>01</h4>
                    </div>
                    <div class="media-body align-self-center">
                        <h2>Personalized Service Possible</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a class="rm-btn" href="services.html">Read more...</a>
                        <h4>01</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="media service-info-3">
                    <div class="icon">
                        <i class="flaticon-empire-state-building"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2>Luxury Real Estate Experts</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a class="rm-btn" href="services.html">Read more...</a>
                        <h4>02</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="media service-info-3">
                    <div class="icon">
                        <i class="flaticon-discount"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2>Modern Building For Rent $ Sell</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a class="rm-btn" href="services.html">Read more...</a>
                        <h4>03</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->

<!-- Categories strat -->
<div class="categories content-area-7">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Most Popular Places</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-pad">
                <div class="category">
                    <div class="category_bg_box category_long_bg cat-4-bg">
                        <div class="category-overlay">
                            <div class="category-content">
                                <h3 class="category-title">
                                    <a href="#">Gulshan</a>
                                </h3>
                                <h4 class="category-subtitle">12 Properties</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="properties-list-rightside.html">Dhanmondi</a>
                                        </h3>
                                        <h4 class="category-subtitle">27 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-5-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Mohammadpur</a>
                                        </h3>
                                        <h4 class="category-subtitle">98 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Mirpur</a>
                                        </h3>
                                        <h4 class="category-subtitle">88 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Bonani</a>
                                        </h3>
                                        <h4 class="category-subtitle">98 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories end -->

<!-- Counters 2 strat -->
<div class="counters-2 overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="icon">
                        <i class="flaticon-sale"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2 class="counter Starting">8</h2>
                        <p>On-Going Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="icon">
                        <i class="flaticon-rent"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2 class="counter Starting">10</h2>
                        <p>Complete Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2 class="counter Starting">34</h2>
                        <p>Agents</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="icon">
                        <i class="flaticon-broker"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2 class="counter Starting">42</h2>
                        <p>Total Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters 2 end -->

<!-- Our team start -->
<div class="our-team content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Agent</h1>
            <p>Our Popular Agents Below</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <?php
                    if($sql_agent_result->num_rows > 0) {
                       while($rows_of_agent = $sql_agent_result->fetch_assoc()) {
                ?>
                <div class="slick-slide-item">
                    <div class="team-1">
                        <div class="team-photo">
                            <a href="#">
                                <img src="admin/upload/agent/<?php echo $rows_of_agent['image']; ?>" alt="<?php echo $rows_of_agent['name']; ?>" class="img-fluid">
                            </a>
                            <ul class="social-list clearfix">
                                <li><a href="<?php echo $rows_of_agent['fb_link']; ?>" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $rows_of_agent['tw_link']; ?>" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo $rows_of_agent['ins_link']; ?>" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-details">
                            <h5><a href="agent-detail.html"><?php echo $rows_of_agent['name']; ?></a></h5>
                            <h6><?php echo $rows_of_agent['email']; ?></h6>
                            <h4><a href="tel:+1-204-777-0187"><?php echo $rows_of_agent['phone']; ?></a></h4>
                        </div>
                    </div>
                </div>
                <?php 
                    } } else {
                        echo "No Data Found !";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Our team end -->

<!-- Testimonial start -->
<div class="testimonial content-area-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 align-self-center">
                <!-- Main title -->
                <div class="main-title main-title-3">
                    <h1>Our Testimonial</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
                    <a href="#" class="btn important-btn btn-theme btn-md">Contact us</a>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <!-- Slick slider area start -->
                <div class="slick-slider-area">
                    <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                        <div class="slick-slide-item">
                            <div class="testimonial-info-box">
                                <div class="profile-user">
                                    <div class="avatar">
                                        <img src="img/avatar/avatar-1.jpg" alt="testimonial-2">
                                    </div>
                                </div>
                                <h5>
                                    <a href="#">Maikel Alisa</a>
                                </h5>
                                <h6>Web Designer, Uk</h6>
                                <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                        <div class="slick-slide-item">
                            <div class="testimonial-info-box">
                                <div class="profile-user">
                                    <div class="avatar">
                                        <img src="img/avatar/avatar-3.jpg" alt="testimonial-2">
                                    </div>
                                </div>
                                <h5>
                                    <a href="#">Carolyn Stone</a>
                                </h5>
                                <h6>Creative Director, india</h6>
                                <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                        <div class="slick-slide-item">
                            <div class="testimonial-info-box">
                                <div class="profile-user">
                                    <div class="avatar">
                                        <img src="img/avatar/avatar-2.jpg" alt="testimonial-2">
                                    </div>
                                </div>
                                <h5>
                                    <a href="#">Auro Navanth</a>
                                </h5>
                                <h6>Office Manager, New York</h6>
                                <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->

<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="img/blog/blog-1.jpg" alt="blog" class="img-fluid bp">
                            <div class="date-box">
                                <span>21</span>Feb
                            </div>
                            <div class="profile-user">
                                <img src="img/avatar/avatar-1.jpg" alt="user">
                            </div>
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Maria Blank</a></strong>
                                    </li>
                                    <li class="float-right mr-0"><a href="#"><i class="flaticon-comment"></i></a>17K</li>
                                    <li class="float-right"><a href="#"><i class="flaticon-calendar"></i></a>73k</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="img/blog/blog-2.jpg" alt="blog" class="img-fluid bp">
                            <div class="date-box">
                                <span>21</span>Feb
                            </div>
                            <div class="profile-user">
                                <img src="img/avatar/avatar-2.jpg" alt="user">
                            </div>
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Karen Paran</a></strong>
                                    </li>
                                    <li class="float-right mr-0"><a href="#"><i class="flaticon-comment"></i></a>17K</li>
                                    <li class="float-right"><a href="#"><i class="flaticon-calendar"></i></a>73k</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-sidebar-right.html">Buying a Best House</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="img/blog/blog-3.jpg" alt="blog" class="img-fluid bp">
                            <div class="date-box">
                                <span>21</span>Feb
                            </div>
                            <div class="profile-user">
                                <img src="img/avatar/avatar-3.jpg" alt="user">
                            </div>
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Brandon Miller</a></strong>
                                    </li>
                                    <li class="float-right mr-0"><a href="#"><i class="flaticon-comment"></i></a>17K</li>
                                    <li class="float-right"><a href="#"><i class="flaticon-calendar"></i></a>73k</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="img/blog/blog-3.jpg" alt="blog" class="img-fluid bp">
                            <div class="date-box">
                                <span>21</span>Feb
                            </div>
                            <div class="profile-user">
                                <img src="img/avatar/avatar-3.jpg" alt="user">
                            </div>
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Brandon Miller</a></strong>
                                    </li>
                                    <li class="float-right mr-0"><a href="#"><i class="flaticon-comment"></i></a>17K</li>
                                    <li class="float-right"><a href="#"><i class="flaticon-calendar"></i></a>73k</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-sidebar-right.html">Find Your Best Real Estate</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Partners strat -->
<div class="partners">
    <div class="container">
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                <div class="slick-slide-item"><img src="img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->

<?php include 'templete/footer.php'; ?>