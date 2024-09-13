@extends('layout')

@section('content')
<!-- start of hero -->
<section class="hero-slider hero-style-2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-4.jpg">
                            <div class="container inner-text">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Extensive Security for Diverse Clientele</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Proactive security solutions for a diverse range of clients and industries worldwide always.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn-s2">See More</a> 
                                </div>
                                 <div class="video-btns">
                                    <a href="#" class="video-btn" data-type="iframe" tabindex="0"></a> 
                                </div>
                            </div>
                        </div> <!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-6.jpg">
                            <div class="container inner-text">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Altex Security; Where Safety Meets Security</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Unified security services for a diverse global community, delivering protection, trust, and confidence always.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn-s2">See More</a> 
                                </div>
                                 <div class="video-btns">
                                    <a href="#" class="video-btn" data-type="iframe" tabindex="0"></a> 
                                </div>
                            </div>
                        </div> <!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <!-- <div class="swiper-pagination"></div>
                <div class="container">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div> -->

                <div class="container social-container">
                    <div class="social">
                        <span>Follow us: </span>
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100069645893237&mibextid=ZbWKwL"><i class="ti-facebook"></i></a></li>
                            <li><a href=" https://www.tiktok.com/@altex.security?_t=8nZwgcLVFVm&_r=1"><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/altex-security/"><i class="ti-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/altexsecurity?igsh=NWt1emFzN2dhM2Jh&utm_source=qr"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start feature-section -->
        <section class="feature-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="feature-grids">
                            <div class="grid">
                                <i class="fa-solid fa-person-military-pointing"></i>
                                <h3>Security <br>Training</h3>
                            </div>
                            <div class="grid">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <h3>Risk <br>Management</h3>
                            </div>
                            <div class="grid">
                                <i class="fa-solid fa-handshake-simple"></i>
                                <h3>Security <br>Consulting</h3>
                            </div>
                            <div class="grid">
                                <i class="fa-solid fa-users"></i>
                                <h3>Altex <br>Armour</h3>
                            </div>
                            <div class="grid">
                                <i class="fa-solid fa-truck"></i>
                                <h3>Logistics <br>Management</h3>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end feature-section -->
@endsection