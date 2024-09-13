@extends('layout')

@section('content')
<!-- start contact-section -->
<section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title-s3" style="margin-top: 100px;">
                            <span>#Contact us</span>
                            <h2>Get in touch!</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="col col-xs-12">
                        <div class="contact-info-grids">
                            <div class="grid">
                                <i class="fi flaticon-house"></i>
                                <h4>Head Office</h4>
                                <p>5 Mofoti Street, Wuse 2</p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-email"></i>
                                <h4>Email Address</h4>
                                <p>info@altexsecurity.net</p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-call"></i>
                                <h4>Phone Number</h4>
                                <p>0705 490 0789
                                </p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-alarm"></i>
                                <h4>Opening Hours</h4>
                                <p>Mon - Fri (9am - 6pm)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-area">
                    <div class="row">
                        <div class="col col-md-4">
                            <div class="contact-text">
                                <h3>Still got questions?, then fill out the form!</h3>
                                <p>Our dedicated team is available to answer your questions and respond to your inquiries promptly.</p>
                            </div>
                        </div>
                        <div class="col col-md-8">
                            <div class="contact-form">
                                <form method="post" class="contact-validation-active" id="contact-form-main">
                                    <div>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                                    </div>
                                    <div>
                                        <select name="subject" class="form-control">
                                            <option disabled="disabled" selected>Contact subject</option>
                                            <option>Subject 1</option>
                                            <option>Subject 2</option>
                                            <option>Subject 3</option>
                                        </select>
                                    </div>
                                    <div class="fullwidth">
                                        <textarea class="form-control" name="note"  id="note" placeholder="Case Description..."></textarea>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn-s6"> <i class="fa-solid fa-shield-halved"></i> Send</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-section -->

         <!-- start site-footer -->
         <footer class="site-footer">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget about-widget">
                                <div class="widget-title">
                                    <h3>
                                        copyright@2024 Altex Security
                                    </h3>
                                </div>
                               
                                <!-- <div class="social-icons">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget contact-widget service-link-widget">
                                <div class="widget-title">
                                    <h3>Privacy & Policy</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Quick Links</h3>
                                </div>
                                <!-- <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Our services</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Meet team</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                              <div class="widget about-widget">
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="https://www.facebook.com/profile.php?id=100069645893237&mibextid=ZbWKwL"><i class="ti-facebook"></i></a></li>
                                        <li><a href=" https://www.tiktok.com/@altex.security?_t=8nZwgcLVFVm&_r=1"><i class="fa-brands fa-tiktok"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/altex-security/"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="https://www.instagram.com/altexsecurity?igsh=NWt1emFzN2dhM2Jh&utm_source=qr"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div> 
                                </div>
                            
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <!-- <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="separator"></div>
                        <div class="col col-xs-12">
                            <p class="copyright">Copyright &copy; 2020 Proffer. All rights reserved</p>
                            <div class="extra-link">
                                <ul>
                                    <li><a href="#">Privace & Policy</a></li>
                                    <li><a href="#">terms and conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </footer>
        <!-- end site-footer -->
@endsection