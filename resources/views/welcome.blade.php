<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>TriblBot</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="{{ asset('index/css/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('index/css/responsive.css')}}" rel="stylesheet">


</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">frfrrr</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
								         	
                                	<li class="nav-item"><a class="nav-link" href="#team">فريق العمل</a></li>
                                	<li class="nav-item"><a class="nav-link" href="#pricing">رسوم الاشتراك</a></li>
                               		<li class="nav-item"><a class="nav-link" href="#screenshot">صور</a></li>  
                                	<li class="nav-item"><a class="nav-link" href="#features">مميزات البوت</a></li>
                                	<li class="nav-item"><a class="nav-link" href="#about">لماذا نحن</a></li>
                                    <li class="nav-item active"><a class="nav-link" href="#home">الرئيسية</a></li>    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a class="sing-up-button" href="auth/login"> الاشتراك / تسجيل الدخول</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home" style="background-image: url(img/bg-img/welcome-bg.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>Bot</h2>
                        <h3>C</h3>
                        <h4>كل ماتحتاحه متوفر لدينا</h4>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="img/bg-img/welcome-img.png" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>لماذا برنامجنا متميز</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-mobile" aria-hidden="true"></i>
                        </div>
                        <h4>سهل الاستعمال</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-ruler-pencil" aria-hidden="true"></i>
                        </div>
                        <h4>Powerful Design</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="ti-settings" aria-hidden="true"></i>
                        </div>
                        <h4>Customizability</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="img/bg-img/image1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h2>Our Best Propositions for You!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2>Awesome Features</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-user" aria-hidden="true"></i>
                        <h5>Awesome Experience</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-pulse" aria-hidden="true"></i>
                        <h5>Fast and Simple</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-dashboard" aria-hidden="true"></i>
                        <h5>Clean Code</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-palette" aria-hidden="true"></i>
                        <h5>Perfect Design</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-crown" aria-hidden="true"></i>
                        <h5>Best Industry Leader</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-headphone" aria-hidden="true"></i>
                        <h5>24/7 Online Support</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->


    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>App Screenshots</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">
                        <div class="single-shot">
                            <img src="img/scr-img/app-1.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-2.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-3.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-4.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-5.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** App Screenshots Area End *****====== -->

    <!-- ***** Pricing Plane Area Start *****==== -->
    <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text  -->
                    <div class="section-heading text-center">
                        <h2>Pricing Plan</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Starter Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>29</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Basic Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>49</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan active text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Advenced Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>69</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Community Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>99</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plane Area End ***** -->

    

    <!-- ***** CTA Area Start ***** -->
    <section class="our-monthly-membership section_padding_50 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="membership-description">
                        <h2>ماذا تنتظر</h2>
                        <p>Find the perfect plan for you — 100% satisfaction guaranteed.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                        <a href="auth/login">اشترك الان</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Our Team</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-1.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Jackson Nash</h4>
                            <p>Tax Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-2.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Alex Manning</h4>
                            <p>CEO-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-3.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Ollie Schneider</h4>
                            <p>Business Planner</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-4.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Roger West</h4>
                            <p>Financer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

   

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>Make by devcode</h2>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
       
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="{{ asset('index/js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('index/js/popper.min.js')}}"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="{{ asset('index/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins JS -->
    <script src="{{ asset('index/js/plugins.js')}}"></script>
    <!-- Slick Slider Js-->
    <script src="{{ asset('index/js/slick.min.js')}}"></script>
    <!-- Footer Reveal JS -->
    <script src="{{ asset('index/js/footer-reveal.min.js')}}"></script>
    <!-- Active JS -->
    <script src="{{ asset('index/js/active.js')}}"></script>
</body>

</html>
