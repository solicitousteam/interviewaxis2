@if (!Route::is(['index-two', 'index-three', 'index-four']))
    <!-- Footer -->
    <footer class="footer">

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                <img src="{{ URL::asset('/build/img/pngmiddel.png') }}" alt="logo">
                            </div>
                            <div class="footer-about-content">
                                <p>Practice multiple live iterations of your interview by talking with our AI and get instantaneous feedback.</p>
                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-2 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">For Instructor</h2>
                            <ul>
                                <li><a href="{{ url('instructor-profile') }}">Profile</a></li>
                                <li><a href="{{ url('login') }}">Login</a></li>
                                <li><a href="{{ url('register') }}">Register</a></li>
                                <li><a href="{{ url('instructor-list') }}">Instructor</a></li>
                                <li><a href="{{ url('instructor-dashboard') }}"> Dashboard</a></li>
                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-2 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">For Student</h2>
                            <ul>
                                <li><a href="{{ url('student-profile') }}">Profile</a></li>
                                <li><a href="{{ url('login') }}">Login</a></li>
                                <li><a href="{{ url('register') }}">Register</a></li>
                                <li><a href="{{ url('students-list') }}">Student</a></li>
                                <li><a href="{{ url('student-dashboard') }}"> Dashboard</a></li>
                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-4 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-contact">
                            <h2 class="footer-title">News letter</h2>
                            <div class="news-letter">
                                <form>
                                    <input type="text" class="form-control" placeholder="Enter your email address"
                                        name="email">
                                </form>
                            </div>
                            <div class="footer-contact-info">
                                <div class="footer-address">
                                    <img src="{{ URL::asset('/build/img/icon/icon-20.svg') }}" alt=""
                                        class="img-fluid">
                                    <p> Made with ❤️ in India </p>
                                </div>
                                <p>
                                    <img style="max-width: 6%;" src="{{ URL::asset('/build/img/icon/mail.png') }}" alt=""
                                        class="img-fluid">
                                    info@interviewaxis.com
                                </p>
                                 <img src="{{ URL::asset('/build/img/icon/icon-19.svg') }}" alt=""
                                        class="img-fluid">
                                     Chat with us
                                </p>
                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                </div>
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">

                <!-- Copyright -->
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="privacy-policy">
                                <ul>
                                    <li><a href="{{ url('term-condition') }}">Terms</a></li>
                                    <li><a href="{{ url('privacy-policy') }}">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p class="mb-0">&copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Interviewaxis. All rights reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->
@endif
@if (Route::is(['index-two']))
    <!-- Footer -->
    <footer class="footer footer-two" data-aos="fade-up">

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                <img src="{{ URL::asset('/build/img/logo.svg') }}" alt="logo">
                            </div>
                            <div class="footer-about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
                            </div>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=61560660038174" target="_blank"><i class="feather-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/interviewaxis" target="_blank"><i class="feather-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/interviewaxis?igsh=MW9jemR2NWhsYWk1aA==" target="_blank"><i class="feather-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/interviewaxis/" target="_blank"><i class="feather-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu footer-menu-two">
                            <h2 class="footer-title">For Instructor</h2>
                            <ul>
                                <li><a href="{{ url('instructor-profile') }}">Profile</a></li>
                                <li><a href="{{ url('login') }}">Login</a></li>
                                <li><a href="{{ url('register') }}">Register</a></li>
                                <li><a href="{{ url('instructor-list') }}">Instructor</a></li>
                                <li><a href="{{ url('instructor-dashboard') }}"> Dashboard</a></li>
                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu footer-menu-two">
                            <h2 class="footer-title">For Student</h2>
                            <ul>
                                <li><a href="{{ url('student-profile') }}">Profile</a></li>
                                <li><a href="{{ url('login') }}">Login</a></li>
                                <li><a href="{{ url('register') }}">Register</a></li>
                                <li><a href="{{ url('students-list') }}">Student</a></li>
                                <li><a href="{{ url('student-dashboard') }}"> Dashboard</a></li>
                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-contact footer-contact-two">
                            <h2 class="footer-title">Address</h2>
                            <div class="footer-contact-widget">
                                <div class="footer-address">
                                    <h6>Location</h6>
                                    <p>Pune,<br> Maharashtra, India </p>
                                </div>

                                <h6>Email Address</h6>
                                <p>
                                    <a href="mailto:info@interviewaxis.com">info@interviewaxis.com</a>
                                </p>

                                <h6>Phone number</h6>
                                <p class="mb-0">
                                    <a href="tel:+191234567890">+91 7888-286-744</a>
                                </p>
                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                </div>
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">

                <!-- Copyright -->
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="copyright-text">
                                <p class="mb-0">&copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Interviewaxis. All rights reserved.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="privacy-policy">
                                <ul>
                                    <li><a href="{{ url('term-condition') }}">Terms & Condition</a></li>
                                    <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ url('support') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->
@endif
@if (Route::is(['index-three']))
    <!-- Footer -->
    <footer class="footer footer-three">

        <!-- Footer Top -->
        <div class="footer-three-top" data-aos="fade-up">
            <div class="container">
                <div class="footer-three-top-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-12">

                            <!-- Footer Widget -->
                            <div class="footer-widget-three footer-about">
                                <div class="footer-three-logo">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/logo/pngmiddel.png') }}"
                                        alt="logo">
                                </div>
                                <div class="footer-three-about">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit nulla gravida ut
                                        elit arcu egestas felis. Scelerisque at in magna dolor massa ipsum arcu lacus.
                                        Lobortis posuere justo nunc diam ac massa. Maecenas tellus adipiscing ac fames
                                        ut ac posuere. Aliquam, integer proin hendrerit euismod et. </p>
                                </div>
                                <div class="newsletter-title">
                                    <h6>Get Updates</h6>
                                </div>
                                <div class="box-form-newsletter">
                                    <form class="form-newsletter">
                                        <input class="input-newsletter" type="text"
                                            placeholder="Enter your email here">
                                        <button class="btn btn-default font-heading icon-send-letter">Subscribe
                                            Now</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-3 col-12">

                            <!-- Footer Widget -->
                            <div class="footer-widget-three footer-menu-three footer-three-right">
                                <h6 class="footer-three-title">For Instructor</h6>
                                <ul>
                                    <li><a href="{{ url('instructor-profile') }}">Profile</a></li>
                                    <li><a href="{{ url('login') }}">Login</a></li>
                                    <li><a href="{{ url('register') }}">Register</a></li>
                                    <li><a href="{{ url('instructor-list') }}">Instructor</a></li>
                                    <li><a href="{{ url('instructor-dashboard') }}"> Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-3 col-12">

                            <!-- Footer Widget -->
                            <div class="footer-widget-three footer-menu-three">
                                <h6 class="footer-three-title">For Student</h6>
                                <ul>
                                    <li><a href="{{ url('student-profile') }}">Profile</a></li>
                                    <li><a href="{{ url('login') }}">Login</a></li>
                                    <li><a href="{{ url('register') }}">Register</a></li>
                                    <li><a href="{{ url('students-list') }}">Student</a></li>
                                    <li><a href="{{ url('student-dashboard') }}"> Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-three-bottom" data-aos="fade-up">
            <div class="container">

                <!-- Copyright -->
                <div class="copyright-three">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="social-icon-three">
                                <h6>Connect Socially</h6>
                                <ul>
                                    <li>
                                        <a href="#" target="_blank" class="feather-facebook-icon">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="feather-twitter-icon">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="feather-linkedin-icon">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="feather-youtube-icon">
                                            <i class="feather-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="privacy-policy-three">
                                <ul>
                                    <li><a href="{{ url('term-condition') }}">Terms & Condition</a></li>
                                    <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ url('support') }}">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="copyright-text-three">
                                <p class="mb-0">&copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Interviewaxis. All rights reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->
@endif
@if (Route::is(['index-four']))
    <!-- Footer -->
    <footer class="footer footer-five">
        <!-- Footer Top -->
        <div class="footer-top-five">
            <div class="container">

                <div class="footer-five-left">
                    <img src="{{ URL::asset('/build/img/bg/footer-left.svg') }}" alt="Img">
                </div>

                <div class="row">

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">

                        <!-- Footer Widget -->
                        <div class="footer-contact footer-menu-five">
                            <h2 class="footer-title footer-title-five">Get in touch</h2>
                            <div class="footer-contact-info">
                                <div class="footer-address">
                                    <span><i class="feather-map-pin"></i></span>
                                    <p> Pune,<br> Maharashtra, India  </p>
                                </div>
                                <p class="mb-0">
                                    <span class="phone-icon"><i class="fa-solid fa-phone-volume"></i></span>
                                    +91 788-828-6744
                                </p>
                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12">

                        <!-- Footer Widget -->
                        <div class="footer-menu footer-menu-five">
                            <h2 class="footer-title footer-title-five"><i class="fa-sharp fa-solid fa-dash"></i>For
                                Instructor</h2>
                            <ul>
                                <li><a href="{{ url('instructor-profile') }}">Profile</a></li>
                                <li><a href="{{ url('login') }}">Login</a></li>
                                <li><a href="{{ url('register') }}">Register</a></li>
                                <li><a href="{{ url('instructor-list') }}">Instructor</a></li>
                                <li><a href="{{ url('instructor-dashboard') }}"> Dashboard</a></li>
                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-12">

                        <!-- Footer Widget -->
                        <div class="footer-menu footer-menu-five">
                            <h2 class="footer-title footer-title-five">For Student</h2>
                            <ul>
                                <li><a href="{{ url('student-profile') }}">Profile</a></li>
                                <li><a href="{{ url('login') }}">Login</a></li>
                                <li><a href="{{ url('register') }}">Register</a></li>
                                <li><a href="{{ url('students-list') }}">Student</a></li>
                                <li><a href="{{ url('student-dashboard') }}"> Dashboard</a></li>
                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <h2 class="footer-title footer-title-five">Get More Updates</h2>
                        <!-- Footer Widget -->
                        <div class="footer-widget-five">
                            <div class="footer-news-five">
                                <form>
                                    <div class="input-block mb-0">
                                        <input type="text" class="form-control"
                                            placeholder="Enter Your Email Address">
                                        <button type="submit" class="btn btn-one">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                            <div class="footer-about-five">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                </div>

                <div class="footer-five-right">
                    <img src="{{ URL::asset('/build/img/bg/footer-right.svg') }}" alt="Img">
                </div>

            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom footer-bottom-five">
            <div class="container">

                <!-- Copyright -->
                <div class="copyright-five">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="footer-logo-five">
                                <a href="{{ url('index') }}">
                                    <img src="{{ URL::asset('/build/img/logo/logo-five.svg') }}" class="img-fluid"
                                        alt="Footer Logo">
                                </a>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="copyright-text">
                                <p>&copy; 2024 Interviewaxis. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="social-icon-five">
                                <ul class="nav">
                                    <li>
                                        <a href="#" target="_blank" class="twitter-icon">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="linked-icon">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="facebook-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="youtube-icon">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->
@endif
