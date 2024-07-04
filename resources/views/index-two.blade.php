<?php $page = 'index-two'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Home Banner -->
    <section class="home-two-slide d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 col-12" data-aos="fade-up">
                    <div class="home-slide-face">
                        <div class="home-slide-text ">
                            <h5>The Leader in Online Learning</h5>
                            <h1>Engaging & Accessible Online Courses For All</h1>
                        </div>
                        <div class="banner-content">
                            <form class="form" name="store" id="store" action="{{ url('course-list') }}">
                                <div class="form-inner">
                                    <div class="input-group">
                                        <span class="drop-detail">
                                            <select class="form-control select" name="storeID">
                                                <option value="0">Select Category</option>
                                                <option value="1">Category One</option>
                                                <option value="1">Category Two</option>
                                            </select>
                                        </span>
                                        <input type="email" class="form-control"
                                            placeholder="Search School, Online eductional centers, etc">
                                        <button class="btn btn-primary sub-btn" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="trust-user-two">
                            <p>Trusted by over 15K Users worldwide since 2023</p>
                            <div class="rating-two">
                                <span>4.5</span>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shapes -->
            <div class="shapes">
                <img class="shapes-one" src="{{ URL::asset('/build/img/bg/home-right.png') }}" alt="">
                <img class="shapes-two" src="{{ URL::asset('/build/img/bg/home-right-bottom.png') }}" alt="">
                <img class="shapes-middle" src="{{ URL::asset('/build/img/bg/home-middle.png') }}" alt="">
                <img class="shapes-four wow animate__animated animate__slideInLeft"
                    src="{{ URL::asset('/build/img/bg/home-left.png') }}" alt="">
            </div>
            <!-- /Shapes -->
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft order-lg-1 order-xs-2 order-sm-2" data-aos="fade-up">
                    <div class="header-two-title">
                        <p class="tagline">Learn with DreamLMS</p>
                        <h2 class="mb-0">Get Trained By Experts & Professionals around the World</h2>
                    </div>
                    <div class="header-two-title">
                        <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum
                            massa viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer a
                            felis ac vel mauris a morbi. Scelerisque nunc accumsan elementum aenean nisl lacinia. Congue
                            enim aliquet ac vitae turpis. Neque, bibendum imperdiet sed ullamcorper morbi amet. Facilisi
                            odio amet, nunc quam ut nulla purus adipiscing pharetra.</p>
                        <div class="about-button more-details">
                            <a href="{{ url('course-list') }}" class="discover-btn">Learn more <i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 order-lg-2 order-xs-1 order-sm-1">
                    <div class="stylist-gallery">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-down">
                                <div
                                    class="about-image count-one d-flex align-items-center justify-content-center flex-fill project-details">
                                    <div class="about-count">
                                        <div class="course-img">
                                            <img src="{{ URL::asset('/build/img/icon/count-one.svg') }}" alt="">
                                        </div>
                                        <div class="count-content-three course-count ms-0">
                                            <h4><span class="counterUp">10</span>K</h4>
                                            <p class="mb-0">Online Courses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-down">
                                <div
                                    class="about-image count-two d-flex align-items-center justify-content-center flex-fill project-details">
                                    <div class="about-count">
                                        <div class="course-img">
                                            <img src="{{ URL::asset('/build/img/icon/count-two.svg') }}" alt="">
                                        </div>
                                        <div class="count-content-three course-count ms-0">
                                            <h4><span class="counterUp">215</span>+</h4>
                                            <p class="mb-0">Expert Tutors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-right" data-wow-delay="1.5">
                                <div
                                    class="about-image count-three d-flex align-items-center justify-content-center flex-fill project-details">
                                    <div class="about-count">
                                        <div class="course-img">
                                            <img src="{{ URL::asset('/build/img/icon/count-three.svg') }}" alt="">
                                        </div>
                                        <div class="count-content-three course-count ms-0">
                                            <h4><span class="counterUp">10</span>K</h4>
                                            <p class="mb-0">Ceritified Courses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-left" data-wow-delay="0.5">
                                <div
                                    class="about-image count-four d-flex align-items-center justify-content-center flex-fill project-details">
                                    <div class="about-count">
                                        <div class="course-img">
                                            <img src="{{ URL::asset('/build/img/icon/count-four.svg') }}" alt="">
                                        </div>
                                        <div class="count-content-three course-count ms-0">
                                            <h4><span class="counterUp">10</span>K</h4>
                                            <p class="mb-0">Online Students</p>
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
    <!-- /About us -->

    <!-- Top Categories -->
    <section class="topcategory-sec">
        <div class="container">
            <div class="header-two-title text-center" data-aos="fade-up">
                <p class="tagline">Favourite Course</p>
                <h2>Top Category</h2>
                <div class="header-two-text">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                        bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                </div>
            </div>
            <div class="top-category-group">
                <div class="row">

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="categories-item flex-fill">
                            <div class="categories-icon">
                                <img src="{{ URL::asset('/build/img/category/category-1.svg') }}"
                                    alt="Angular Development">
                            </div>
                            <div class="categories-content">
                                <h3>Angular Development</h3>
                                <p>40 Instructors</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="categories-item flex-fill">
                            <div class="categories-icon">
                                <img src="{{ URL::asset('/build/img/category/category-2.svg') }}"
                                    alt="Python Development">
                            </div>
                            <div class="categories-content">
                                <h3>Python Development</h3>
                                <p>20 Instructors</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="categories-item flex-fill">
                            <div class="categories-icon">
                                <img src="{{ URL::asset('/build/img/category/category-3.svg') }}"
                                    alt="Node Js Development">
                            </div>
                            <div class="categories-content">
                                <h3>Node Js Development</h3>
                                <p>120 Instructors</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="categories-item flex-fill">
                            <div class="categories-icon">
                                <img src="{{ URL::asset('/build/img/category/category-4.svg') }}" alt="Laravel Development">
                            </div>
                            <div class="categories-content">
                                <h3>Laravel Development</h3>
                                <p>40 Instructors</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="categories-item flex-fill">
                            <div class="categories-icon">
                                <img src="{{ URL::asset('/build/img/category/category-5.svg') }}"
                                    alt="PHP Development">
                            </div>
                            <div class="categories-content">
                                <h3>PHP Development</h3>
                                <p>40 Instructors</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="categories-item  flex-fill">
                            <div class="categories-icon">
                                <img src="{{ URL::asset('/build/img/category/category-6.svg') }}"
                                    alt="Swift Development">
                            </div>
                            <div class="categories-content">
                                <h3>Swift Development</h3>
                                <p>40 Instructors</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="categories-item  flex-fill">
                            <div class="categories-icon">
                                <img src="{{ URL::asset('/build/img/category/category-7.svg') }}" alt="Photography">
                            </div>
                            <div class="categories-content">
                                <h3>Photography</h3>
                                <p>40 Instructors</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex">
                        <div class="categories-item  flex-fill" data-aos="fade-up">
                            <div class="categories-icon">
                                <img src="{{ URL::asset('/build/img/category/category-8.svg') }}" alt="Business">
                            </div>
                            <div class="categories-content">
                                <h3>Business</h3>
                                <p>40 Instructors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- View all Category -->
            <div class="col-lg-12">
                <div class="more-details text-center" data-aos="fade-down">
                    <a href="{{ url('job-category') }}" class="discover-btn">View all Category <i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <!-- /View all Category -->
        </div>
    </section>
    <!-- /Top Categories -->

    <!-- Feature Course -->
    <section class="featured-courses-sec">
        <div class="patter-one-main">
            <img class="patter-one" src="{{ URL::asset('/build/img/bg/patter-one.png') }}" alt="">
        </div>
        <div class="container">
            <div class="header-two-title text-center" data-aos="fade-up">
                <p class="tagline">What’s New</p>
                <h2>Featured Courses</h2>
                <div class="header-two-text m-auto text-center d-block">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                        bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                </div>
            </div>
            <div class="featured-courses-two">
                <div class="row">

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="featured-details-two">
                            <div class="product-item-two">
                                <div class="product-img-two">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/course/courses-01.jpg') }}">
                                    </a>
                                    <div class="price-text">
                                        <h4><span>PHP</span></h4>
                                    </div>
                                </div>
                                <div class="course-details-content">
                                    <div class="image-info">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="ms-3">203 reviews</span>
                                    </div>

                                    <div class="name-text featured-info-two">
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">The
                                                Complete Web
                                                Developer PHP framework Course 2.0</a></h3>
                                        <p class="me-3">By<span class="text-danger ms-2">Russell T. Johnson</span></p>
                                    </div>

                                    <div class="featured-info-time d-flex align-items-center">
                                        <div class="hours-time-two d-flex align-items-center">
                                            <span><i class="fa-regular fa-clock me-2"></i></span>
                                            <p>6hr 30min</p>
                                        </div>
                                        <div class="course-view d-inline-flex align-items-center">
                                            <div class="course-price">
                                                <h3>$400 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="featured-details-two">
                            <div class="product-item-two">
                                <div class="product-img-two">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/course/courses-02.jpg') }}">
                                    </a>
                                    <div class="price-text">
                                        <h4><span>Wordpress</span></h4>
                                    </div>
                                </div>
                                <div class="course-details-content">
                                    <div class="image-info">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="ms-2">243 reviews</span>
                                    </div>

                                    <div class="name-text featured-info-two">
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Wordpress
                                                for
                                                Beginners - Master Wordpress Quickly</a></h3>
                                        <p class="me-3">By<span class="text-danger ms-2">Cristofer Nolen</span></p>
                                    </div>

                                    <div class="featured-info-time d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <span><i class="fa-regular fa-clock me-2"></i></span>
                                            <span>6hr 30min</span>
                                        </div>
                                        <div class="course-view d-inline-flex align-items-center">
                                            <div class="course-price">
                                                <h3>$300 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="featured-details-two">
                            <div class="product-item-two">
                                <div class="product-img-two">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/course/courses-03.jpg') }}">
                                    </a>
                                    <div class="price-text">
                                        <h4><span>Angular</span></h4>
                                    </div>
                                </div>
                                <div class="course-details-content">
                                    <div class="image-info">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="ms-2">243 reviews</span>
                                    </div>

                                    <div class="name-text featured-info-two">
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Learn
                                                Angular
                                                Fundamentals From beginning to advance lavel</a></h3>
                                        <p class="me-3">By<span class="text-danger ms-2">Cristofer Nolen</span></p>
                                    </div>

                                    <div class="featured-info-time d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <span><i class="fa-regular fa-clock me-2"></i></span>
                                            <span>6hr 30min</span>
                                        </div>
                                        <div class="course-view d-inline-flex align-items-center">
                                            <div class="course-price">
                                                <h3>$300 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="featured-details-two">
                            <div class="product-item-two">
                                <div class="product-img-two">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/course/courses-04.jpg') }}">
                                    </a>
                                    <div class="price-text">
                                        <h4><span>HTML5</span></h4>
                                    </div>
                                </div>
                                <div class="course-details-content">
                                    <div class="image-info">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/profiles/avatar-04.jpg') }}">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="ms-2">243 reviews</span>
                                    </div>

                                    <div class="name-text featured-info-two">
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Build
                                                Responsive
                                                Real World Websites with HTML5 and CSS3</a></h3>
                                        <p class="me-3">By<span class="text-danger ms-2">Cristofer Nolen</span></p>
                                    </div>

                                    <div class="featured-info-time d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <span><i class="fa-regular fa-clock me-2"></i></span>
                                            <span>6hr 30min</span>
                                        </div>
                                        <div class="course-view d-inline-flex align-items-center">
                                            <div class="course-price">
                                                <h3>$300 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="featured-details-two">
                            <div class="product-item-two">
                                <div class="product-img-two">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/course/courses-05.jpg') }}">
                                    </a>
                                    <div class="price-text">
                                        <h4><span>C#</span></h4>
                                    </div>
                                </div>
                                <div class="course-details-content">
                                    <div class="image-info">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/profiles/avatar-05.jpg') }}">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="ms-2">243 reviews</span>
                                    </div>

                                    <div class="name-text featured-info-two">
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">C#
                                                Developers
                                                Double Your Coding Speed with Visual Studio</a></h3>
                                        <p class="me-3">By<span class="text-danger ms-2">Cristofer Nolen</span></p>
                                    </div>

                                    <div class="featured-info-time d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <span><i class="fa-regular fa-clock me-2"></i></span>
                                            <span>6hr 30min</span>
                                        </div>
                                        <div class="course-view d-inline-flex align-items-center">
                                            <div class="course-price">
                                                <h3>$300 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="featured-details-two">
                            <div class="product-item-two">
                                <div class="product-img-two">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/course/courses-06.jpg') }}">
                                    </a>
                                    <div class="price-text">
                                        <h4><span>UI/UX</span></h4>
                                    </div>
                                </div>
                                <div class="course-details-content">
                                    <div class="image-info">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="ms-2">243 reviews</span>
                                    </div>

                                    <div class="name-text featured-info-two">
                                        <h3 class="title instructor-text"><a
                                                href="{{ url('course-details') }}">Information About
                                                UI/UX Design Degree</a></h3>
                                        <p class="me-3">By<span class="text-danger ms-2">Cristofer Nolen</span></p>
                                    </div>

                                    <div class="featured-info-time d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <span><i class="fa-regular fa-clock me-2"></i></span>
                                            <span>6hr 30min</span>
                                        </div>
                                        <div class="course-view d-inline-flex align-items-center">
                                            <div class="course-price">
                                                <h3>$300 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                </div>
            </div>
            <!-- View all  Courses -->
            <div class="col-lg-12" data-aos="fade-up">
                <div class="more-details text-center">
                    <a href="{{ url('course-details') }}" class="discover-btn">View all Courses <i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <!-- /View all  Courses -->
        </div>
    </section>
    <!-- /Feature Course -->

    <!-- Growup Your Skill Section -->
    <section class="growup-section">
        <div class="home-two-shapes">
            <img src="{{ URL::asset('/build/img/bg/home-right-bottom.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-5 col-12" data-aos="fade-right">
                    <div class="growup-images-two">
                        <div class="growup-skills-img">
                            <img class="" src="{{ URL::asset('/build/img/skil-01.png') }}" alt="image-banner"
                                title="image-banner">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-7 col-12 wow fadeInLeft" data-aos="fade-left">
                    <div class="header-two-title">
                        <p class="tagline">Growup Your Skill</p>
                        <h2 class="text-navy">Learn Anything you want today</h2>
                        <div class="header-two-text">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum
                                massa viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer a
                                felis ac vel mauris a morbi. Scelerisque nunc accumsan elementum aenean nisl lacinia. Congue
                                enim aliquet ac vitae turpis. Neque, bibendum imperdiet sed ullamcorper morbi amet. Facilisi
                                odio amet, nunc quam ut nulla purus adipiscing pharetra.</p>
                        </div>
                    </div>
                    <div class="about-button more-details">
                        <a href="{{ url('register') }}" class="discover-btn">Join Today <i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Growup Your Skill -->

    <!-- Master Skills -->
    <section class="master-skills-sec">
        <div class="container">
            <div class="header-two-title text-center" data-aos="fade-up">
                <p class="tagline">What’s New</p>
                <h2>Master the skills to drive your career</h2>
                <div class="header-two-text" data-aos="fade-up">
                    <p class="mb-0">Get certified, master modern tech skills, and level up your career — whether you’re
                        starting out or a seasoned pro. 95% of eLearning learners report our hands-on content directly
                        helped their careers.</p>
                </div>
            </div>
            <!-- Course Info-->
            <div class="course-info-two">
                <div class="row align-items-center">

                    <!-- Master skills Content -->
                    <div class="col-lg-6 col-md-12 order-lg-0 order-md-0 order-0" data-aos="fade-up">
                        <div class="join-title-one">
                            <h2>Award Winning Course Management</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum massa viverra
                                congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer a felis ac vel
                                mauris a morbi. Scelerisque nunc accumsan elementum aenean nisl lacinia. Congue enim aliquet
                                ac vitae turpis. Neque, bibendum imperdiet sed ullamcorper morbi amet. Facilisi odio amet,
                                nunc quam ut nulla purus adipiscing pharetra.</p>
                        </div>
                    </div>
                    <!-- /Master skills Content -->

                    <!-- Master skills Image -->
                    <div class="col-lg-6 col-md-12 order-lg-1 order-md-1 order-1" data-aos="fade-up">
                        <div class="join-mentor-img">
                            <div class="winning-two-one">
                                <img src="{{ URL::asset('/build/img/skills/skills-01.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="joing-icon-award">
                                <img src="{{ URL::asset('/build/img/bg/skill-icon-01.png') }}" alt=""
                                    class="joing-icon-one img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- /Master skills Image -->

                    <!-- Master skills Content -->
                    <div class="col-xl-6 col-lg-7 col-md-12 order-lg-2 order-md-3 order-3" data-aos="fade-up">
                        <div class="join-mentor-img">
                            <div class="winning-two-two">
                                <img src="{{ URL::asset('/build/img/skills/skills-02.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="joing-icon-award">
                            <img src="{{ URL::asset('/build/img/bg/skill-icon-02.png') }}" alt=""
                                class="joing-icon-two img-fluid">
                        </div>
                    </div>
                    <!-- /Master skills Content -->

                    <!-- Master skills Image -->
                    <div class="col-xl-6 col-lg-5 col-md-12 order-lg-3 order-md-2 order-2" data-aos="fade-up">
                        <div class="join-title-middle">
                            <h2>Award Winning Course Management</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum massa viverra
                                congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer a felis ac vel
                                mauris a morbi. Scelerisque nunc accumsan elementum aenean nisl lacinia. Congue enim aliquet
                                ac vitae turpis. Neque, bibendum imperdiet sed ullamcorper morbi amet. Facilisi odio amet,
                                nunc quam ut nulla purus adipiscing pharetra.</p>
                        </div>
                    </div>
                    <!-- /Master skills Image -->

                    <!-- Master skills Content -->
                    <div class="col-xl-6 col-lg-7 col-md-12 order-lg-4 order-md-4 order-4" data-aos="fade-up">
                        <div class="join-title-one">
                            <h2>Certification for solid development of your Carrer</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum massa viverra
                                congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer a felis ac vel
                                mauris a morbi. Scelerisque nunc accumsan elementum aenean nisl lacinia. Congue enim aliquet
                                ac vitae turpis. Neque, bibendum imperdiet sed ullamcorper morbi amet. Facilisi odio amet,
                                nunc quam ut nulla purus adipiscing pharetra.</p>
                        </div>
                    </div>
                    <!-- /Master skills Content -->

                    <!-- Master skills Image -->
                    <div class="col-xl-6 col-lg-5 col-md-12 order-lg-5 order-md-5 order-5" data-aos="fade-up">
                        <div class="join-mentor-img mb-0">
                            <div class="winning-two-three">
                                <img src="{{ URL::asset('/build/img/skills/skills-03.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="joing-icon-award">
                            <img src="{{ URL::asset('/build/img/bg/skill-icon-03.png') }}" alt=""
                                class="joing-icon-three img-fluid">
                        </div>
                    </div>
                    <!-- /Master skills Image -->

                </div>
            </div>
            <!-- /Course Info -->
        </div>
    </section>
    <!-- /Master Skills -->

    <!-- Testimonial -->
    <section class="testimonial-sec">
        <div class="container">
            <div class="testimonial-two-img">
                <img src="{{ URL::asset('/build/img/bg/map-user.png') }}" alt="" class="img-fluid">
            </div>
            <div class="testimonial-subhead-two">
                <div class="col-xl-8 col-lg-10 col-md-10 mx-auto" data-aos="fade-down">
                    <div class="testimonial-inner">
                        <div class="header-two-title testimonial-head-two text-center">
                            <h2 data-aos="fade-down">Join over <span>5 Million</span> Students</h2>
                            <div class="header-two-text text-center">
                                <p>Get certified, master modern tech skills, and level up your career — whether you’re
                                    starting out or a seasoned pro. 95% of eLearning learners report our hands-on content
                                    directly helped their careers.</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4 col-sm-12" data-aos="fade-up">
                                <div class="course-count-two course-count">
                                    <h4><span class="counterUp text-orange">253,085</span></h4>
                                    <h5>Students Enrolled</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12" data-aos="fade-up">
                                <div class="course-count-two  course-count">
                                    <h4><span class="counterUp text-green">1,205</span></h4>
                                    <h5>Total Courses</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12" data-aos="fade-up">
                                <div class="course-count-two  course-count">
                                    <h4><span class="counterUp text-blue">253,085</span></h4>
                                    <h5>Students Worldwide</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonial -->

    <!-- Trending Course -->
    <section class="trending-course-sec">
        <div class="container">
            <div class="header-two-title text-center" data-aos="fade-up">
                <p class="tagline">New Courses</p>
                <h2>Trending Courses</h2>
                <div class="header-two-text m-auto text-center d-block">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                        bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                </div>
            </div>

            <!-- Trending Course Group -->
            <div class="trending-course-main">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="trending-courses-group">
                            <div class="trending-courses-two">
                                <div class="product-img course-column-img">
                                    <a href="{{ url('instructor-profile') }}">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/skills/skill-01.jpg') }}">
                                    </a>
                                    <div class="trending-price">
                                        <h4><span>Node Js</span></h4>
                                    </div>
                                </div>
                                <div class="course-content-column">
                                    <div class="trending-two-rating align-items-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="ms-2">243 reviews</span>
                                    </div>

                                    <div class="name-text featured-info-two">
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Wordpress
                                                for
                                                Beginners - Master Wordpress Quickly</a></h3>
                                        <div class="time-hours-two">
                                            <span><i class="fa-regular fa-clock me-2"></i></span>
                                            <p>6hr 30min</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="rating-price-two d-flex align-items-center">
                                            <p>Cristofer Nolen</p>
                                        </div>
                                        <div class="course-view d-inline-flex align-items-center">
                                            <div class="course-price-two">
                                                <h3>$300</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="trending-courses-group">
                            <div class="trending-courses-two">
                                <div class="product-img course-column-img">
                                    <a href="{{ url('instructor-profile') }}">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/skills/skill-02.jpg') }}">
                                    </a>
                                    <div class="trending-price">
                                        <h4><span>C#</span></h4>
                                    </div>
                                </div>
                                <div class="course-content-column">
                                    <div class="trending-two-rating align-items-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="ms-2">243 reviews</span>
                                    </div>

                                    <div class="name-text featured-info-two">
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">C#
                                                Developers
                                                Double Your Coding Speed with Visual Studio</a></h3>
                                        <div class="time-hours-two">
                                            <span><i class="fa-regular fa-clock me-2"></i></span>
                                            <p>6hr 30min</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="rating-price-two d-flex align-items-center">
                                            <p>Cristofer Nolen</p>
                                        </div>
                                        <div class="course-view d-inline-flex align-items-center">
                                            <div class="course-price-two">
                                                <h3>$300</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="trending-courses-group">
                            <div class="trending-courses-two">
                                <div class="product-img course-column-img">
                                    <a href="{{ url('instructor-profile') }}">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/skills/skill-03.jpg') }}">
                                    </a>
                                    <div class="trending-price">
                                        <h4><span>Angular</span></h4>
                                    </div>
                                </div>
                                <div class="course-content-column">
                                    <div class="trending-two-rating align-items-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="ms-2">243 reviews</span>
                                    </div>

                                    <div class="name-text featured-info-two">
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Learn
                                                Angular
                                                Fundamentals From beginning to advance lavel</a></h3>
                                        <div class="time-hours-two">
                                            <span><i class="fa-regular fa-clock me-2"></i></span>
                                            <p>6hr 30min</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="rating-price-two d-flex align-items-center">
                                            <p>Cristofer Nolen</p>
                                        </div>
                                        <div class="course-view d-inline-flex align-items-center">
                                            <div class="course-price-two">
                                                <h3>$300</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="trending-courses-group">
                            <div class="trending-courses-two">
                                <div class="product-img course-column-img">
                                    <a href="{{ url('instructor-profile') }}">
                                        <img class="img-fluid" alt=""
                                            src="{{ URL::asset('/build/img/skills/skill-04.jpg') }}">
                                    </a>
                                    <div class="trending-price">
                                        <h4><span>HTML5</span></h4>
                                    </div>
                                </div>
                                <div class="course-content-column">
                                    <div class="trending-two-rating align-items-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="ms-2">243 reviews</span>
                                    </div>

                                    <div class="name-text featured-info-two">
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Build
                                                Responsive
                                                Real World Websites with HTML5 and CSS3</a></h3>
                                        <div class="time-hours-two">
                                            <span><i class="fa-regular fa-clock me-2"></i></span>
                                            <p>6hr 30min</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="rating-price-two d-flex align-items-center">
                                            <p>Cristofer Nolen</p>
                                        </div>
                                        <div class="course-view d-inline-flex align-items-center">
                                            <div class="course-price-two">
                                                <h3>$300</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Trending Course Group -->

            <!-- View all  Courses -->
            <div class="col-lg-12" data-aos="fade-up">
                <div class="more-details text-center">
                    <a href="{{ url('course-details') }}" class="discover-btn">View all Courses <i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <!-- /View all  Courses -->
        </div>
    </section>
    <!-- /Feature Course -->

    <!-- Share your knowledge -->
    <div class="knowledge-sec">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 ps-0">
                    <div class="featured-img-1"></div>
                </div>
                <div class="col-lg-6 col-sm-12" data-aos="fade-up">
                    <div class="joing-group">
                        <div class="section-title">
                            <h2>Want to share your knowledge? Join us a Mentor</h2>
                            <div class="joing-section-text">
                                <p class="mb-0">High-definition video is video of higher resolution and quality than
                                    standard-definition. While there is no standardized meaning for high-definition,
                                    generally any video.</p>
                            </div>
                        </div>
                        <div class="joing-list">
                            <ul>
                                <li data-aos="fade-bottom">
                                    <div class="joing-header">
                                        <span class="joing-icon bg-blue">
                                            <img src="{{ URL::asset('/build/img/icon/joing-01.svg') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="joing-content">
                                            <h5 class="joing-title">Stay motivated with engaging instructors</h5>
                                            <div class="joing-para">
                                                <p>High-definition video is video of higher resolution and quality than
                                                    standard-definition.</p>
                                                <p>While there is no standardized meaning for high-definition, generally any
                                                    video.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-aos="fade-bottom">
                                    <div class="joing-header">
                                        <span class="joing-icon bg-yellow">
                                            <img src="{{ URL::asset('/build/img/icon/joing-02.svg') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="joing-content">
                                            <h5 class="joing-title">Keep up with in the latest in cloud</h5>
                                            <div class="joing-para">
                                                <p>High-definition video is video of higher resolution and quality than
                                                    standard-definition.</p>
                                                <p>While there is no standardized meaning for high-definition, generally any
                                                    video.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-aos="fade-bottom">
                                    <div class="joing-header">
                                        <span class="joing-icon bg-green">
                                            <img src="{{ URL::asset('/build/img/icon/joing-03.svg') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="joing-content aos">
                                            <h5 class="joing-title">Build skills your way, from labs to courses</h5>
                                            <div class="joing-para">
                                                <p>High-definition video is video of higher resolution and quality than
                                                    standard-definition.</p>
                                                <p>While there is no standardized meaning for high-definition, generally any
                                                    video.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-aos="fade-bottom" class="mb-0">
                                    <div class="joing-header">
                                        <span class="joing-icon bg-orange">
                                            <img src="{{ URL::asset('/build/img/icon/joing-04.svg') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="joing-content aos">
                                            <h5 class="joing-title">Get certified with 100+ certification courses</h5>
                                            <div class="joing-para">
                                                <p>High-definition video is video of higher resolution and quality than
                                                    standard-definition.</p>
                                                <p>While there is no standardized meaning for high-definition, generally any
                                                    video.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Share your knowledge -->

    <!-- Feature Instructors -->
    <div class="feature-instructors-sec">
        <div class="container">
            <div class="header-two-title text-center" data-aos="fade-up">
                <p class="tagline">New Courses</p>
                <h2>Featured Instructor</h2>
                <div class="header-two-text aos" data-aos="fade-up">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                        bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                </div>
            </div>
            <!-- Featured Instructor -->
            <div class="featured-instructor-two">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="instructors-widget">
                            <div class="instructors-img">
                                <a href="{{ url('instructor-list') }}">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/instructor/instructor-01.jpg') }}">
                                </a>
                                <div class="featured-border">
                                    <div class="featured-img ">
                                        <img src="{{ URL::asset('/build/img/category/category-1.svg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="course-details-two">
                                <div class="instructors-content text-center">
                                    <h5><a href="{{ url('instructor-profile') }}">Julian Adrose</a></h5>
                                    <p>Angular Expert</p>
                                </div>
                                <div class="course-info"></div>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>50 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="instructors-widget">
                            <div class="instructors-img">
                                <a href="{{ url('instructor-list') }}">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/instructor/instructor-02.jpg') }}">
                                </a>
                                <div class="featured-border">
                                    <div class="featured-img ">
                                        <img src="{{ URL::asset('/build/img/category/category-2.svg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="course-details-two">
                                <div class="instructors-content text-center">
                                    <h5><a href="{{ url('instructor-profile') }}">Gallegos</a></h5>
                                    <p>Python</p>
                                </div>
                                <div class="course-info"></div>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>70 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="instructors-widget">
                            <div class="instructors-img">
                                <a href="{{ url('instructor-list') }}">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/instructor/instructor-03.jpg') }}">
                                </a>
                                <div class="featured-border">
                                    <div class="featured-img ">
                                        <img src="{{ URL::asset('/build/img/category/category-3.svg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="course-details-two">
                                <div class="instructors-content text-center">
                                    <h5><a href="{{ url('instructor-profile') }}">Kristi</a></h5>
                                    <p>Node Js</p>
                                </div>
                                <div class="course-info"></div>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>60 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="instructors-widget">
                            <div class="instructors-img">
                                <a href="{{ url('instructor-list') }}">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/instructor/instructor-04.jpg') }}">
                                </a>
                                <div class="featured-border">
                                    <div class="featured-img ">
                                        <img src="{{ URL::asset('/build/img/category/category-4.svg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="course-details-two">
                                <div class="instructors-content text-center">
                                    <h5><a href="{{ url('instructor-profile') }}">Pinero</a></h5>
                                    <p>Laravel</p>
                                </div>
                                <div class="course-info"></div>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>80 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Featured Instructor -->

            <!-- View all Category -->
            <div class="col-lg-12">
                <div class="more-details text-center" data-aos="fade-up">
                    <a href="{{ url('instructor-list') }}" class="discover-btn discover-btn">View all Instructors <i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <!-- /View all Category -->
        </div>
    </div>
    <!-- /Feature Instructors -->

    <!-- Leading Companies -->
    <section class="real-reviews-sec">
        <div class="container">
            <div class="header-two-title text-center" data-aos="fade-up">
                <p class="tagline">Check out these real reviews</p>
                <h2>Users-love-us Don't take it from us</h2>
                <div class="header-two-text text-center m-auto">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                        bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                </div>
            </div>
            <div class="real-reviews-group">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-up">
                        <div class="reviews-img">
                            <img src="{{ URL::asset('/build/img/reviews-img-two.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-md-12" data-aos="fade-up">
                        <div class="owl-carousel real-reviews owl-theme">
                            <div class="item">
                                <div class="real-reviews-grid">
                                    <div class="review-content">
                                        <h3>Helps us to improve our productivity</h3>
                                        <p>High-definition video is video of higher resolution and quality than
                                            standard-definition. While there is no standardized meaning for high-definition,
                                            generally any video.High-definition video is video of higher resolution and
                                            quality than standard-definition. While there is no standardized meaning for
                                            high-definition, generally any video.High-definition video is video of higher
                                            resolution and quality than standard-definition. While there is no standardized
                                            meaning for high-definition, generally any video.High-definition video is video
                                            of higher resolution and quality than standard-definition. While there is no
                                            standardized meaning for high-definition, generally any video.</p>
                                    </div>
                                    <div class="review-top">
                                        <div class="review-info">
                                            <h3 data-aos="fade-up">William George</h3>
                                            <h5 data-aos="fade-up">CEO & Chairman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="real-reviews-grid">
                                    <div class="review-content">
                                        <h3>Helps us to improve our productivity</h3>
                                        <p>High-definition video is video of higher resolution and quality than
                                            standard-definition. While there is no standardized meaning for high-definition,
                                            generally any video.High-definition video is video of higher resolution and
                                            quality than standard-definition. While there is no standardized meaning for
                                            high-definition, generally any video.High-definition video is video of higher
                                            resolution and quality than standard-definition. While there is no standardized
                                            meaning for high-definition, generally any video.High-definition video is video
                                            of higher resolution and quality than standard-definition. While there is no
                                            standardized meaning for high-definition, generally any video.</p>
                                    </div>
                                    <div class="review-top">
                                        <div class="review-info">
                                            <h3 data-aos="fade-up">Julian Adrose</h3>
                                            <h5 data-aos="fade-up">Manager</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="real-reviews-grid">
                                    <div class="review-content">
                                        <h3>Helps us to improve our productivity</h3>
                                        <p>High-definition video is video of higher resolution and quality than
                                            standard-definition. While there is no standardized meaning for high-definition,
                                            generally any video.High-definition video is video of higher resolution and
                                            quality than standard-definition. While there is no standardized meaning for
                                            high-definition, generally any video.High-definition video is video of higher
                                            resolution and quality than standard-definition. While there is no standardized
                                            meaning for high-definition, generally any video.High-definition video is video
                                            of higher resolution and quality than standard-definition. While there is no
                                            standardized meaning for high-definition, generally any video.</p>
                                    </div>
                                    <div class="review-top">
                                        <div class="review-info">
                                            <h3>Gallegos</h3>
                                            <h5>CEO & MD</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="real-reviews-grid">
                                    <div class="review-content">
                                        <h3>Helps us to improve our productivity</h3>
                                        <p>High-definition video is video of higher resolution and quality than
                                            standard-definition. While there is no standardized meaning for high-definition,
                                            generally any video.High-definition video is video of higher resolution and
                                            quality than standard-definition. While there is no standardized meaning for
                                            high-definition, generally any video.High-definition video is video of higher
                                            resolution and quality than standard-definition. While there is no standardized
                                            meaning for high-definition, generally any video.High-definition video is video
                                            of higher resolution and quality than standard-definition. While there is no
                                            standardized meaning for high-definition, generally any video.</p>
                                    </div>
                                    <div class="review-top">
                                        <div class="review-info">
                                            <h3>William George</h3>
                                            <h5>CEO & Chairman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-between align-items-center">
                                <div class="owl-nav slide-nav-8 nav-control"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="client-two-carousel">
                <div class="lead-group-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="lead-img ms-2">
                            <img class="img-fluid" alt="" src="{{ URL::asset('/build/img/lead-01.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="" src="{{ URL::asset('/build/img/lead-02.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="" src="{{ URL::asset('/build/img/lead-03.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="" src="{{ URL::asset('/build/img/lead-04.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="" src="{{ URL::asset('/build/img/lead-05.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="" src="{{ URL::asset('/build/img/lead-06.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Leading Companies -->

    <!-- Latest Blog -->
    <section class="latest-blog-sec">
        <div class="container">
            <div class="header-two-title text-center" data-aos="fade-up">
                <p class="tagline">News & Events</p>
                <h2>Our Latest Updates</h2>
                <div class="header-two-text text-center aos" data-aos="fade-up">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida
                        maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                </div>
            </div>
            <div class="award-winning-two">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">
                        <div class="event-blog-main">
                            <div class="latest-blog-img">
                                <a href="{{ url('blog-list') }}">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/blog/blog-01.jpg') }}">
                                </a>
                            </div>
                            <div class="latest-blog-content">
                                <div class="event-content-title">
                                    <div class="event-span">
                                        <span class="span-name">Marketing</span>
                                    </div>
                                    <h5><a href="{{ url('blog-list') }}">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit.</a></h5>
                                    <div class="blog-student-count">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span>Jun 15, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">
                        <div class="event-blog-main">
                            <div class="latest-blog-img">
                                <a href="{{ url('blog-list') }}">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/blog/blog-02.jpg') }}">
                                </a>
                            </div>
                            <div class="latest-blog-content">
                                <div class="event-content-title">
                                    <div class="event-span">
                                        <span class="span-name">Sales</span>
                                    </div>
                                    <h5><a href="{{ url('blog-list') }}">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit.</a></h5>
                                    <div class="blog-student-count">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span>Jun 20, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">
                        <div class="event-blog-main">
                            <div class="latest-blog-img">
                                <a href="{{ url('blog-list') }}">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/blog/blog-03.jpg') }}">
                                </a>
                            </div>
                            <div class="latest-blog-content">
                                <div class="event-content-title">
                                    <div class="event-span">
                                        <span class="span-name">Marketing</span>
                                    </div>
                                    <h5><a href="{{ url('blog-list') }}">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit.</a></h5>
                                    <div class="blog-student-count">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span>Jun 05, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- View all  Events -->
            <div class="col-lg-12">
                <div class="more-details text-center" data-aos="fade-down">
                    <a href="{{ url('blog-grid') }}" class="discover-btn">View all Events<i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <!-- /View all  Events -->
        </div>
    </section>
    <!-- /Latest Blog -->
@endsection
