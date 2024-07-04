<?php $page = 'index-four'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Home Banner -->
    <section class="home-slide-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="home-slide-five-face" data-aos="fade-down">
                        <!-- Banner Text -->
                        <div class="home-slide-five-text">
                            <h5>The Leader in Online Learning</h5>
                            <h1>Engaging & Accessible Online Courses For All</h1>
                            <p>Trusted by over 15K Users worldwide since 2023</p>
                        </div>
                        <!-- /Banner Text -->

                        <!-- banner Seach Category -->
                        <div class="banner-content-five">
                            <form class="form" action="{{ url('course-list') }}">
                                <div class="form-inner-five">
                                    <div class="input-group">
                                        <!-- Slect Category -->
                                        <span class="drop-detail-five">
                                            <select class="form-select select">
                                                <option>Category</option>
                                                <option>Angular</option>
                                                <option>Node Js</option>
                                                <option>React</option>
                                                <option>Python</option>
                                            </select>
                                        </span>
                                        <!-- Slect Category -->

                                        <!-- Search -->
                                        <input type="email" class="form-control"
                                            placeholder="Search School, Online eductional centers, etc">
                                        <!-- Search -->

                                        <!-- Submit Button -->
                                        <button class="btn btn-primary sub-btn" type="submit"><span><i
                                                    class="fa-solid fa-magnifying-glass"></i></span></button>
                                        <!-- Submit Button -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /banner Seach Category -->

                        <!-- Review and Experience -->
                        <div class="review-five-group">
                            <div class="review-user-five  d-flex align-items-center">
                                <ul class="review-users-list">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                            data-bs-original-title="leader 1"><img
                                                src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                            data-bs-original-title="leader 2"><img
                                                src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                            data-bs-original-title="leader 3"><img
                                                src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                            data-bs-original-title="leader 3"><img
                                                src="{{ URL::asset('/build/img/profiles/avatar-04.jpg') }}"
                                                alt="img"></a>
                                    </li>
                                </ul>
                                <div class="review-rating-five">
                                    <div class="rating-star">
                                        <p>5</p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience -->
                            <div class="rate-head-five d-flex align-items-center course-count">
                                <h2><span class="counterUp">10</span>+</h2>
                                <p>Years of experience tutors</p>
                            </div>
                            <!-- /Experience -->
                        </div>
                        <!-- /Review and Experience -->
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="banner-slider-img">
                        <div class="row">
                            <div class="col-lg-6 align-self-end">
                                <div class="slider-five-one" data-aos="fade-down">
                                    <img src="{{ URL::asset('/build/img/slider/slider-01.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slider-five-two aos" data-aos="fade-down">
                                    <img src="{{ URL::asset('/build/img/slider/slider-02.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vector-shapes-five">
                <img src="{{ URL::asset('/build/img/bg/banner-vector.svg') }}" alt="">
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Leading Companies -->
    <section class="leading-section-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-down">
                    <div class="leading-five-content course-count">
                        <h2>Trusted By <span class="counterUp">500</span>+</h2>
                        <p>Leading Universities And Companies</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6" data-aos="fade-down">
                    <div class="lead-group-five">
                        <div class="leading-slider-five owl-carousel owl-theme">
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/client/client-01.svg') }}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/client/client-02.svg') }}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/client/client-03.svg') }}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/client/client-04.svg') }}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/client/client-05.svg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Leading Companies -->

    <!-- Course Categories Five -->
    <section class="course-section-five">
        <div class="container">
            <div class="header-five-title text-center" data-aos="fade-down">
                <h2>Course Categories</h2>
                <p>Pick Your Favourite Course</p>
            </div>
            <div class="owl-carousel home-five-course owl-theme aos">

                <!-- Carousel Item -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-01.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>Angular</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-02.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>React JS</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-03.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>Node JS</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-04.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>Docker</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-01.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>Angular</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-02.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>React JS</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-03.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>Node JS</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-04.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>Docker</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-01.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>Angular</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-02.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>React JS</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-03.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>Node JS</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="carousel-five-item" data-aos="fade-down">
                    <div class="course-five-item">
                        <div class="course-five-grid">
                            <div class="course-icon-five">
                                <div class="icon-five-border">
                                    <a href="{{ url('job-category') }}">
                                        <img src="{{ URL::asset('/build/img/course/course-04.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="course-info-five">
                                <a href="{{ url('job-category') }}">
                                    <h3>Docker</h3>
                                    <p>50 Instructors</p>
                                </a>
                            </div>
                            <div class="course-info-btn">
                                <a href="{{ url('job-category') }}" class="btn-five"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

            </div>
        </div>
    </section>
    <!-- /Course Categories Five-->

    <!-- Counter Five-->
    <section class="counter-section-five">
        <div class="container">
            <div class="row align-items-center text-center justify-content-between">
                <!-- col -->
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="fade-down">
                    <div class="count-five">
                        <div class="count-content-five course-count ms-0">
                            <h4><span class="counterUp">145</span></h4>
                            <p class="mb-0">Expert Tutors</p>
                        </div>
                    </div>
                </div>
                <!--/ col -->

                <!-- col -->
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="fade-down">
                    <div class="count-five">
                        <div class="count-content-five course-count ms-0">
                            <h4><span class="counterUp">2,3495</span></h4>
                            <p class="mb-0">Cetified Courses</p>
                        </div>
                    </div>
                </div>
                <!--/ col -->

                <!-- col -->
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="fade-down">
                    <div class="count-five">
                        <div class="count-content-five course-count ms-0">
                            <h4><span class="counterUp">20</span>+</h4>
                            <p class="mb-0">Online students</p>
                        </div>
                    </div>
                </div>
                <!--/ col -->

                <!-- col -->
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="fade-down">
                    <div class="count-five count-five-last count-five-0">
                        <div class="count-content-five course-count ms-0">
                            <h4><span class="counterUp">58,370</span></h4>
                            <p class="mb-0">Online Courses</p>
                        </div>
                    </div>
                </div>
                <!--/ col -->
            </div>
        </div>
    </section>
    <!-- /Counter Five-->

    <!-- Featured Courses Five-->
    <section class="featured-section-five">
        <div class="container">
            <div class="header-five-title text-center" data-aos="fade-down">
                <h2>Featured Courses</h2>
                <p>Pick Your Favourite Course</p>
            </div>
            <div class="row">
                <div class="featured-courses-five-tab">
                    <div class="tab-content">
                        <div class="nav tablist-five" role="tablist">


                            <a class="nav-tab active" data-bs-toggle="tab" href="#ux-design-tab" role="tab">UI/UX
                                Design</a>

                            <a class="nav-tab" data-bs-toggle="tab" href="#development-tab"
                                role="tab">Development</a>

                            <a class="nav-tab" data-bs-toggle="tab" href="#marketing-tab" role="tab">Marketing</a>

                            <a class="nav-tab" data-bs-toggle="tab" href="#business-tab" role="tab">Business</a>

                            <a class="nav-tab" data-bs-toggle="tab" href="#technology-tab" role="tab">Technology</a>

                            <a class="nav-tab" data-bs-toggle="tab" href="#all-category-tab" role="tab">All
                                Category</a>

                        </div>

                        <div class="tab-content">

                            <!-- UI/UX Design -->
                            <div class="tab-pane fade active show" id="ux-design-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-01.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user2.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Cristofer
                                                                        Nolen</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-02.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-03.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user3.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Russell T.
                                                                        Johnson</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-04.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user4.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-05.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user5.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Russell T.
                                                                        Johnson</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-06.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->
                                    </div>
                                </div>
                            </div>
                            <!-- /UI/UX Design -->

                            <!--  Development -->
                            <div class="tab-pane fade" id="development-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-06.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-05.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-04.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-03.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-02.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-01.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->
                                    </div>
                                </div>
                            </div>
                            <!-- / Development -->

                            <!-- Marketing -->
                            <div class="tab-pane fade" id="marketing-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-01.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-02.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-03.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}" class="joing-course-btn">Join
                                                        Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-04.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-05.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-06.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Marketing -->

                            <!--  Business -->
                            <div class="tab-pane fade" id="business-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-06.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-05.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-04.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-03.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-02.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-01.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->
                                    </div>
                                </div>
                            </div>
                            <!-- / Business -->

                            <!-- Technology -->
                            <div class="tab-pane fade" id="technology-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-01.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-02.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-03.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-04.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-05.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-06.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Technology -->

                            <!--  All Category -->
                            <div class="tab-pane fade" id="all-category-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-06.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-05.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-04.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-03.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-02.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->

                                        <!-- Col -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <!-- Product image -->
                                                    <div class="product-img-five">
                                                        <a href="{{ url('course-details') }}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ URL::asset('/build/img/course/featured-course-01.jpg') }}">
                                                        </a>
                                                        <div class="course-share heart-five">
                                                            <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- /Product image -->

                                                    <!-- Product Content -->
                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{ url('course-details') }}">
                                                                    <img src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                                <h6><a href="{{ url('course-details') }}">Nicole
                                                                        Brown</a></h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{ url('course-details') }}">The Complete Web
                                                                Developer PHP framework Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#"><i
                                                                            class="fa-regular fa-clockss"></i></a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2"><i
                                                                        class="fa-solid fa-book-open"></i></span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                    <!--/ Product Content -->
                                                </div>
                                                <!-- Ovelay button -->
                                                <div class="joing-course-ovelay">
                                                    <a href="{{ url('course-details') }}"
                                                        class="joing-course-btn">Join Course</a>
                                                </div>
                                                <!-- Ovelay button -->
                                            </div>
                                        </div>
                                        <!-- /Col -->
                                    </div>
                                </div>
                            </div>
                            <!-- / All Category -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Featured Courses Five-->

    <!-- Master the skills Five -->
    <section class="master-section-five">
        <div class="container">
            <div class="master-five-vector">
                <img class="ellipse-right" src="{{ URL::asset('/build/img/bg/master-vector-left.svg') }}"
                    alt="">
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12" data-aos="fade-down">
                    <div class="section-five-sub">
                        <div class="header-five-title">
                            <h2>Master the skills to drive your career</h2>
                            <p>Pick Your Favourite Course</p>
                        </div>
                        <div class="career-five-content">
                            <p data-aos="fade-down">Get certified, master modern tech skills, and level up your career —
                                whether you’re starting out or a seasoned pro. 95% .</p>
                            <p class="mb-0" data-aos="fade-down">Get certified, master modern tech skills, and level
                                up your career — whether you’re starting out or a seasoned pro. 95% of eLearning learners
                                report our hands-on content directly helped their careers.</p>
                        </div>
                        <a href="{{ url('course-list') }}" class="learn-more-five">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6" data-aos="fade-down">
                            <div class="skill-five-item">
                                <div class="skill-five-icon">
                                    <img src="{{ URL::asset('/build/img/skills/skills-01.svg') }}" class="bg-warning"
                                        alt="Stay motivated">
                                </div>
                                <div class="skill-five-content">
                                    <h3>Stay motivated with engaging instructors</h3>
                                    <p>eLearning learners report our hands-on content directly helped their careers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6" data-aos="fade-down">
                            <div class="skill-five-item">
                                <div class="skill-five-icon">
                                    <img src="{{ URL::asset('/build/img/skills/skills-02.svg') }}" class="bg-info"
                                        alt="Stay motivated">
                                </div>
                                <div class="skill-five-content">
                                    <h3>Keep up with in the latest in cloud</h3>
                                    <p>eLearning learners report our hands-on content directly helped their careers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6" data-aos="fade-down">
                            <div class="skill-five-item">
                                <div class="skill-five-icon">
                                    <img src="{{ URL::asset('/build/img/skills/skills-03.svg') }}" class="bg-danger"
                                        alt="Stay motivated">
                                </div>
                                <div class="skill-five-content">
                                    <h3>Get certified with 100+ certification courses</h3>
                                    <p>eLearning learners report our hands-on content directly helped their careers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6" data-aos="fade-down">
                            <div class="skill-five-item">
                                <div class="skill-five-icon">
                                    <img src="{{ URL::asset('/build/img/skills/skills-04.svg') }}"
                                        class="bg-light-green" alt="Stay motivated">
                                </div>
                                <div class="skill-five-content">
                                    <h3>Build skills your way, from labs to courses</h3>
                                    <p>eLearning learners report our hands-on content directly helped their careers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Master the skills Five -->

    <!-- Experienced Course Five -->
    <section class="experienced-course-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-down">
                    <div class="experienced-five-group">
                        <div class="instructor-vector-left">
                            <img src="{{ URL::asset('/build/img/bg/instructor-vector-left.svg') }}" alt="">
                        </div>
                        <div class="developer-five-list">
                            <ul>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-01.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-02.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-03.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-04.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-05.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-06.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-07.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-08.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-03.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-10.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-11.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-12.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-13.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-14.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-15.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">
                                        <div class="developer-image">
                                            <img src="{{ URL::asset('/build/img/profiles/profile-16.png') }}"
                                                alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="instructor-vector-right">
                            <img src="{{ URL::asset('/build/img/bg/instructor-vector-right.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-down">
                    <div class="experienced-five-sub">
                        <div class="header-five-title header-five-title-inner">
                            <h2 class="ex-five-title">Experienced Course Instructor</h2>
                        </div>
                        <div class="career-five-content">
                            <p class="ex-five-content">Get certified, master modern tech skills, and level up your career
                                — whether you’re starting out or a seasoned pro. 95% . Get certified, master modern tech
                                skills, and level up your career — whether you’re starting out or a seasoned pro. 95% of
                                eLearning learners report our hands-on content directly helped their careers.</p>
                        </div>
                        <a href="{{ url('instructor-list') }}" class="learn-more-five">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experienced Course Five -->

    <!-- Share your knowledge -->
    <section class="share-knowledge-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-down">
                    <div class="section-five-sub">
                        <div class="header-five-title">
                            <h2>Want to share your knowledge? Join us a Mentor</h2>
                        </div>
                        <div class="career-five-content">
                            <p>High-definition video is video of higher resolution and quality than standard-definition.
                                While there is no standardized meaning for high-definition, generally any video.While there
                                is no standardized meaning for high-definition, generally any video.</p>
                        </div>
                        <div class="knowledge-list-five">
                            <ul>
                                <li>
                                    <div class="knowledge-list-group">
                                        <img src="{{ URL::asset('/build/img/icon/award-new.svg') }}" alt="">
                                        <p>Best Courses</p>
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <div class="knowledge-list-group">
                                        <img src="{{ URL::asset('/build/img/icon/award-new.svg') }}" alt="">
                                        <p>Best Courses</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Start Teaching Today -->
                        <a href="{{ url('course-list') }}" class="learn-more-five">Start Teaching Today</a>
                        <!-- /Start Teaching Today -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-down">
                    <div class="joing-count-five text-center">
                        <img src="{{ URL::asset('/build/img/joing-us-skill.png') }}" alt="">
                        <div class="joing-count-five-one course-count">
                            <h3 class="joing-count-number"><span class="counterUp">5,5</span>K<span>+</span></h3>
                            <p class="joing-count-text">Courses</p>
                        </div>
                        <div class="joing-count-five-two course-count">
                            <h3 class="joing-count-number"><span class="counterUp">50</span>K</h3>
                            <p class="joing-count-text">Appreciations</p>
                        </div>
                        <div class="joing-count-five-three course-count">
                            <h3 class="joing-count-number"><span class="counterUp">100</span></h3>
                            <p class="joing-count-text">Countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Share your knowledge -->

    <!-- Achieve your Goals -->
    <section class="goals-section-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-x-4 col-lg-3 col-md-12 col-sm-12" data-aos="fade-down">
                    <div class="header-five-title mb-0">
                        <h2 class="mb-0">Achieve your Goals with DreamsLMS</h2>
                    </div>
                </div>
                <div class="col-x-8 col-lg-9 col-md-12 col-sm-12">
                    <div class="row text-center align-items-center">
                        <!-- col -->
                        <div class="col-lg-3 col-sm-3" data-aos="fade-down">
                            <div class="goals-count-five goals-five-one">
                                <div class="goals-content-five course-count ms-0">
                                    <h4><span class="counterUp">145</span></h4>
                                    <p class="mb-0">Expert Tutors</p>
                                </div>
                            </div>
                        </div>
                        <!--/ col -->

                        <!-- col -->
                        <div class="col-lg-3 col-sm-3" data-aos="fade-down">
                            <div class="goals-count-five goals-five-two">
                                <div class="goals-content-five course-count ms-0">
                                    <h4><span class="counterUp">23495</span></h4>
                                    <p class="mb-0">Cetified Courses</p>
                                </div>
                            </div>
                        </div>
                        <!--/ col -->

                        <!-- col -->
                        <div class="col-lg-3 col-sm-3" data-aos="fade-down">
                            <div class="goals-count-five goals-five-three">
                                <div class="goals-content-five course-count ms-0">
                                    <h4><span class="counterUp">20</span>+</h4>
                                    <p class="mb-0">Online students</p>
                                </div>
                            </div>
                        </div>
                        <!--/ col -->

                        <!-- col -->
                        <div class="col-lg-3 col-sm-3" data-aos="fade-down">
                            <div class="goals-count-five goals-five-four goals-five-last">
                                <div class="goals-content-five course-count ms-0">
                                    <h4><span class="counterUp">58370</span></h4>
                                    <p class="mb-0">Online Courses</p>
                                </div>
                            </div>
                        </div>
                        <!--/ col -->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Achieve your Goals -->

    <!-- Share your knowledge -->
    <section class="transform-section-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-down">
                    <div class="joing-count-five">
                        <img src="{{ URL::asset('/build/img/education.png') }}" alt="">
                        <div class="transform-count-five-one course-count">
                            <h3 class="joing-count-number"><span class="counterUp">100</span></h3>
                            <p class="joing-count-text">Countries</p>
                        </div>
                        <div class="transform-count-five-two course-count">
                            <h3 class="joing-count-number"><span class="counterUp">5,5</span>K<span>+</span></h3>
                            <p class="joing-count-text">Courses</p>
                        </div>
                        <div class="transform-count-five-three course-count">
                            <h3 class="joing-count-number"><span class="counterUp">50</span>K<span>+</span></h3>
                            <p class="joing-count-text">Appreciations</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-down">
                    <div class="transform-access-content">
                        <div class="header-five-title">
                            <h2>Transform Access To Education</h2>
                        </div>
                        <div class="career-five-content">
                            <p class="mb-0">Create an account to receive our newsletter, course recommendations and
                                promotions. Create an account to receive our newsletter, course recommendations and
                                promotions. Create an account to receive our newsletter, course recommendations and
                                promotions.</p>
                        </div>
                        <div class="knowledge-list-five">
                            <ul>
                                <li>
                                    <div class="knowledge-list-group">
                                        <img src="{{ URL::asset('/build/img/icon/award-new.svg') }}" alt="">
                                        <p>Award Winning Course Management</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="knowledge-list-group">
                                        <img src="{{ URL::asset('/build/img/icon/award-new.svg') }}" alt="">
                                        <p>Learn anything from anywhere anytime
                                        </p>
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <div class="knowledge-list-group">
                                        <img src="{{ URL::asset('/build/img/icon/award-new.svg') }}" alt="">
                                        <p>Certification for solid development of your Carrer
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Start Teaching Today -->
                        <a href="{{ url('instructor-course') }}" class="learn-more-five">Start Teaching Today</a>
                        <!-- /Start Teaching Today -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Share your knowledge -->

    <!-- Testimonials -->
    <section class="testimonial-section-five">
        <div class="container">
            <div class="header-five-title text-center" data-aos="fade-down">
                <h2 class="text-warning">Testimonials</h2>
                <p class="text-white">We are a very happy because we have a happy customer </p>
            </div>
            <div class="testimonial-slider-five">
                <div class="testimonial-five lazy slider">
                    <div class="testimonial-carousel">
                        <div class="testimonial-item">
                            <div class="testimonial-content-five">
                                <div class="testimonial-text">
                                    <p>"Thank you very much for your help. This is exactly what I was looking for. You will
                                        not regret it. It really saves me time and effort. Skill is what our business
                                        lacked. Thank you very much for your help. This is exactly what I was looking for.
                                        You will not regret it. It really saves me time and effort. Skill is what our
                                        business lacked."</p>
                                </div>
                                <div class="testimonial-users-group d-flex align-items-center justify-content-between">
                                    <div class="testimonial-users">
                                        <h5>Nikolas Brooten</h5>
                                        <p>Sales Manager</p>
                                    </div>
                                    <div class="testimonial-ratings-five d-inline-flex align-items-center">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-image">
                                <img src="{{ URL::asset('/build/img/testimonial/testimonial-01.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-carousel">
                        <div class="testimonial-item">
                            <div class="testimonial-content-five">
                                <div class="testimonial-text">
                                    <p>"Thank you very much for your help. This is exactly what I was looking for. You will
                                        not regret it. It really saves me time and effort. Skill is what our business
                                        lacked. Thank you very much for your help. This is exactly what I was looking for.
                                        You will not regret it. It really saves me time and effort. Skill is what our
                                        business lacked."</p>
                                </div>
                                <div class="testimonial-users-group d-flex align-items-center justify-content-between">
                                    <div class="testimonial-users">
                                        <h5>Nikolas Brooten</h5>
                                        <p>Sales Manager</p>
                                    </div>
                                    <div class="testimonial-ratings-five d-inline-flex align-items-center">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-image">
                                <img src="{{ URL::asset('/build/img/testimonial/testimonial-02.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-carousel">
                        <div class="testimonial-item">
                            <div class="testimonial-content-five">
                                <div class="testimonial-text">
                                    <p>"Thank you very much for your help. This is exactly what I was looking for. You will
                                        not regret it. It really saves me time and effort. Skill is what our business
                                        lacked. Thank you very much for your help. This is exactly what I was looking for.
                                        You will not regret it. It really saves me time and effort. Skill is what our
                                        business lacked."</p>
                                </div>
                                <div class="testimonial-users-group d-flex align-items-center justify-content-between">
                                    <div class="testimonial-users">
                                        <h5>Nikolas Brooten</h5>
                                        <p>Sales Manager</p>
                                    </div>
                                    <div class="testimonial-ratings-five d-inline-flex align-items-center">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-image">
                                <img src="{{ URL::asset('/build/img/testimonial/testimonial-03.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonials -->

    <!-- Unlimited access -->
    <section class="leading-section-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down">
                    <div class="leading-five-content">
                        <h2>Unlimited access</h2>
                        <p>to 360+ courses and 1,600+ hands-on labs</p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6" data-aos="fade-down">
                    <div class="lead-group-five">
                        <div class="leading-slider-five owl-carousel owl-theme">
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/client/client-01.svg') }}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/client/client-02.svg') }}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/client/client-03.svg') }}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/client/client-04.svg') }}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt=""
                                        src="{{ URL::asset('/build/img/client/client-05.svg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Unlimited access -->

    <!-- Latest Blogs -->
    <section class="blogs-section-five">
        <div class="container">
            <div class="header-five-title text-center" data-aos="fade-down">
                <h2>Latest Blogs</h2>
                <p>Follow the latest and most useful articles on that student's blog</p>
            </div>
            <div class="owl-carousel home-five-blog owl-theme">

                <!-- Carousel Item -->
                <div class="blog-five-item">
                    <div class="product-img-five">
                        <a href="{{ url('blog-details') }}">
                            <img class="img-fluid" alt=""
                                src="{{ URL::asset('/build/img/blog/blog-img-01.jpg') }}">
                        </a>
                    </div>
                    <div class="blog-box-content">
                        <div class="blog-five-header d-flex align-items-center justify-content-between">
                            <div class="blog-five-text">
                                <p>Graphical Design</p>
                            </div>
                            <div class="blog-five-year">
                                <span class="me-2"><i class="fa-solid fa-calendar-days"></i></span>
                                <span>Jun 15, 2023</span>
                            </div>
                        </div>
                        <div class="blog-five-footer">
                            <h3><a href="{{ url('blog-details') }}">11 Tips to Help You Get New Student & Teachers
                                    2.0</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="blog-five-item">
                    <div class="product-img-five">
                        <a href="{{ url('blog-details') }}">
                            <img class="img-fluid" alt=""
                                src="{{ URL::asset('/build/img/blog/blog-img-02.jpg') }}">
                        </a>
                    </div>
                    <div class="blog-box-content">
                        <div class="blog-five-header d-flex align-items-center justify-content-between">
                            <div class="blog-five-text">
                                <p>Graphical Design</p>
                            </div>
                            <div class="blog-five-year">
                                <span class="me-2"><i class="fa-solid fa-calendar-days"></i></span>
                                <span>Jun 20, 2023</span>
                            </div>
                        </div>
                        <div class="blog-five-footer">
                            <h3><a href="{{ url('blog-details') }}">11 Tips to Help You Get New Student & Teachers
                                    2.0</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="blog-five-item">
                    <div class="product-img-five">
                        <a href="{{ url('blog-details') }}">
                            <img class="img-fluid" alt=""
                                src="{{ URL::asset('/build/img/blog/blog-img-03.jpg') }}">
                        </a>
                    </div>
                    <div class="blog-box-content">
                        <div class="blog-five-header d-flex align-items-center justify-content-between">
                            <div class="blog-five-text">
                                <p>Graphical Design</p>
                            </div>
                            <div class="blog-five-year">
                                <span class="me-2"><i class="fa-solid fa-calendar-days"></i></span>
                                <span>Jun 15, 2023</span>
                            </div>
                        </div>
                        <div class="blog-five-footer">
                            <h3><a href="{{ url('blog-details') }}">11 Tips to Help You Get New Student & Teachers
                                    2.0</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="blog-five-item">
                    <div class="product-img-five">
                        <a href="{{ url('blog-details') }}">
                            <img class="img-fluid" alt=""
                                src="{{ URL::asset('/build/img/blog/blog-img-01.jpg') }}">
                        </a>
                    </div>
                    <div class="blog-box-content">
                        <div class="blog-five-header d-flex align-items-center justify-content-between">
                            <div class="blog-five-text">
                                <p>Graphical Design</p>
                            </div>
                            <div class="blog-five-year">
                                <span class="me-2"><i class="fa-solid fa-calendar-days"></i></span>
                                <span>Jun 25, 2023</span>
                            </div>
                        </div>
                        <div class="blog-five-footer">
                            <h3><a href="{{ url('blog-details') }}">11 Tips to Help You Get New Student & Teachers
                                    2.0</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="blog-five-item">
                    <div class="product-img-five">
                        <a href="{{ url('blog-details') }}">
                            <img class="img-fluid" alt=""
                                src="{{ URL::asset('/build/img/blog/blog-img-02.jpg') }}">
                        </a>
                    </div>
                    <div class="blog-box-content">
                        <div class="blog-five-header d-flex align-items-center justify-content-between">
                            <div class="blog-five-text">
                                <p>Graphical Design</p>
                            </div>
                            <div class="blog-five-year">
                                <span class="me-2"><i class="fa-solid fa-calendar-days"></i></span>
                                <span>May 25, 2023</span>
                            </div>
                        </div>
                        <div class="blog-five-footer">
                            <h3><a href="{{ url('blog-details') }}">11 Tips to Help You Get New Student & Teachers
                                    2.0</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="blog-five-item">
                    <div class="product-img-five">
                        <a href="{{ url('blog-details') }}">
                            <img class="img-fluid" alt=""
                                src="{{ URL::asset('/build/img/blog/blog-img-03.jpg') }}">
                        </a>
                    </div>
                    <div class="blog-box-content">
                        <div class="blog-five-header d-flex align-items-center justify-content-between">
                            <div class="blog-five-text">
                                <p>Graphical Design</p>
                            </div>
                            <div class="blog-five-year">
                                <span class="me-2"><i class="fa-solid fa-calendar-days"></i></span>
                                <span>Jun 15, 2023</span>
                            </div>
                        </div>
                        <div class="blog-five-footer">
                            <h3><a href="{{ url('blog-details') }}">11 Tips to Help You Get New Student & Teachers
                                    2.0</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="blog-five-item">
                    <div class="product-img-five">
                        <a href="{{ url('blog-details') }}">
                            <img class="img-fluid" alt=""
                                src="{{ URL::asset('/build/img/blog/blog-img-01.jpg') }}">
                        </a>
                    </div>
                    <div class="blog-box-content">
                        <div class="blog-five-header d-flex align-items-center justify-content-between">
                            <div class="blog-five-text">
                                <p>Graphical Design</p>
                            </div>
                            <div class="blog-five-year">
                                <span class="me-2"><span class="me-2"><i
                                            class="fa-solid fa-calendar-days"></i></span></span>
                                <span>Jun 15, 2023</span>
                            </div>
                        </div>
                        <div class="blog-five-footer">
                            <h3><a href="{{ url('blog-details') }}">11 Tips to Help You Get New Student & Teachers
                                    2.0</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="blog-five-item">
                    <div class="product-img-five">
                        <a href="{{ url('blog-details') }}">
                            <img class="img-fluid" alt=""
                                src="{{ URL::asset('/build/img/blog/blog-img-02.jpg') }}">
                        </a>
                    </div>
                    <div class="blog-box-content">
                        <div class="blog-five-header d-flex align-items-center justify-content-between">
                            <div class="blog-five-text">
                                <p>Graphical Design</p>
                            </div>
                            <div class="blog-five-year">
                                <span class="me-2"><i class="fa-solid fa-calendar-days"></i></span>
                                <span>Jun 20, 2023</span>
                            </div>
                        </div>
                        <div class="blog-five-footer">
                            <h3><a href="{{ url('blog-details') }}">11 Tips to Help You Get New Student & Teachers
                                    2.0</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="blog-five-item">
                    <div class="product-img-five">
                        <a href="{{ url('blog-details') }}">
                            <img class="img-fluid" alt=""
                                src="{{ URL::asset('/build/img/blog/blog-img-03.jpg') }}">
                        </a>
                    </div>
                    <div class="blog-box-content">
                        <div class="blog-five-header d-flex align-items-center justify-content-between">
                            <div class="blog-five-text">
                                <p>Graphical Design</p>
                            </div>
                            <div class="blog-five-year">
                                <span class="me-2"><i class="fa-solid fa-calendar-days"></i></span>
                                <span>Jun 25, 2023</span>
                            </div>
                        </div>
                        <div class="blog-five-footer">
                            <h3><a href="{{ url('blog-details') }}">11 Tips to Help You Get New Student & Teachers
                                    2.0</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

            </div>
        </div>
    </section>
    <!-- Latest Blogs -->
@endsection
