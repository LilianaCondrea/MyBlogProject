@extends('layouts.app')

@section('content')
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/articles') }}">Posts</a></li>
                                    <li><a href="{{ url('/contacts') }}">Contacts</a></li>
                                    <li><a href="{{ url('/') }}">Login</a></li>
                                    <li><a href="{{ url('/') }}">Register</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
         </div>
    </div>
</header>



    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="shap_pattern d-none d-lg-block">
                <img src="img/about/grid.png" alt="">
            </div>
            <!-- <div class="social_links">
                <ul>
                    <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                    <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                    <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                </ul>
            </div> -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>
                                Hello,I'm Lily
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->


<!--pentru logare
 @if (auth()->check())
<h1>{{ auth()->user()->name }}</h1>
@else
<h1>nu esti logat</h1>
@endif -->



    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>Build beautiful blog<br>
                                
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Travel</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Web design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Cybersecurity</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->

    <!-- portfolio_area -->
    <div class="portfolio_area portfolio_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white_text text-center">
                        <h3>My awesome stuffs<br>
                             here</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ portfolio_area -->

    <!-- portfolio_image_area  -->
    <div class="portfolio_image_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-5">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <img src="img/portfolio/1.png" alt="">
                        </div>
                        <a href="img/portfolio/1.png" class="popup popup-image"></a>
                        <div class="portfolio_hover">
                            <div class="title">
                                    <h3>Product Design</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-7">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <img src="img/portfolio/2.png" alt="">
                        </div>
                        <a href="img/portfolio/2.png" class="popup popup-image"></a>
                        <div class="portfolio_hover">
                            <div class="title">
                                    <h3>Product Design</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <img src="img/portfolio/3.png" alt="">
                        </div>
                        <a href="img/portfolio/3.png" class="popup popup-image"></a>
                        <div class="portfolio_hover">
                            <div class="title">
                                    <h3>Product Design</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <img src="img/portfolio/4.png" alt="">
                        </div>
                        <a href="img/portfolio/4.png" class="popup popup-image"></a>
                        <div class="portfolio_hover">
                            <div class="title">
                                    <h3>Product Design</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-lg-4">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <img src="img/portfolio/5.png" alt="">
                        </div>
                        <a href="img/portfolio/5.png" class="popup popup-image"></a>
                        <div class="portfolio_hover">
                            <div class="title">
                                    <h3>Product Design</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--/ portfolio_image_area  -->

    <!-- about_me  -->
    <div class="about_me">
        <div class="about_large_title d-none d-lg-block">
                About
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_e_details">
                        <h3>About me</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus com odo viverra maecenas.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about_img">
                        <div class="color_pattern d-none d-lg-block">
                            <img src="img/about/color_grid.png" alt="">
                        </div>
                        <div class="my_Pic">
                                <img src="img/about/cv.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_me  -->


    <!-- testimonial_area  -->
    <div class="testimonial_area ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                            <div class="single_carousel">
                                    <div class="single_testmonial text-center">
                                            <div class="quote">
                                                <img src="img/testmonial/quote.svg" alt="">
                                            </div>
                                            <p>Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world. </p>
                                            <div class="testmonial_author">
                                                <h3>Albert Einstein</h3>
                                                <span>Genius</span>
                                            </div>
                                        </div>
                            </div>
                            <div class="single_carousel">
                                    <div class="single_testmonial text-center">
                                            <div class="quote">
                                                <img src="img/testmonial/quote.svg" alt="">
                                            </div>
                                            <p>The important thing is to not stop questioning. Curiosity has its own reason for existing. </p>
                                            <div class="testmonial_author">
                                                <h3>Albert Einstein</h3>
                                                <span>Genius</span>
                                            </div>
                                        </div>
                            </div>
                            <div class="single_carousel">
                                    <div class="single_testmonial text-center">
                                            <div class="quote">
                                                <img src="img/testmonial/quote.svg" alt="">
                                            </div>
                                            <p>Life is like riding a bicycle. To keep your balance you must keep moving. </p>
                                            <div class="testmonial_author">
                                                <h3>Albert Einstein</h3>
                                                <span>Genius</span>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /testimonial_area  -->
    <!-- footer start -->
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
