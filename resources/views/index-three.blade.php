<?php $page = 'index-three'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Home Banner -->
    <section class="home-three-slide d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-lg-8 col-md-12 col-12" data-aos="fade-down">
                    <div class="home-three-slide-face">
                        <div class="home-three-slide-text">
                            <h5>The Leader in Online Learning</h5>
                            <h1>Engaging <span>&</span> Accessible Online Courses For All</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum
                                gravida maecenas augue elementum et</p>
                        </div>
                        <div class="banner-three-content">
                            <form class="form" action="{{ url('course-list') }}">
                                <div class="form-inner-three">
                                    <div class="input-group">
                                        <input type="email" class="form-control"
                                            placeholder="Search School, Online eductional centers, etc">
                                        <span class="drop-detail-three">
                                            <select class="form-three-select select">
                                                <option>Select category</option>
                                                <option>Angular</option>
                                                <option>Node Js</option>
                                                <option>React</option>
                                                <option>Python</option>
                                            </select>
                                        </span>
                                        <button class="btn btn-three-primary sub-btn" type="submit"><i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6 col-12" data-aos="fade-up">
                    <div class="girl-slide-img aos">
                        <img class="img-fluid" src="{{ URL::asset('/build/img/slider/home-slider.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!--Online Courses -->
    <section class="section student-course home-three-course">
        <div class="container">
            <div class="course-widget-three">
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/build/img/icon-three/course-01.svg') }}" alt="">
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-blue"><span class="counterUp">10</span>K</h4>
                                        <p>Online Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/build/img/icon-three/course-02.svg') }}" alt="">
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-yellow"><span class="counterUp">200</span>+</h4>
                                        <p>Expert Tutors</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/build/img/icon-three/course-03.svg') }}" alt="">
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-info"><span class="counterUp">6</span>K+</h4>
                                        <p>Ceritified Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three mb-0">
                            <div class="align-items-center">
                                <div class="course-count-three">
                                    <div class="course-img">
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/build/img/icon-three/course-04.svg') }}" alt="">
                                    </div>
                                    <div class="course-content-three course-count ms-0">
                                        <h4 class="text-green"><span class="counterUp">60</span>K +</h4>
                                        <p>Online Students</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Online Courses -->

    <!-- Master skills Career -->
    <section class="master-skill-three">
        <div class="master-three-vector">
            <img class="ellipse-right img-fluid" src="{{ URL::asset('/build/img/bg/pattern-01.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-right">
                    <div class="master-three-images">
                        <div class="master-three-left">
                            <img class="img-fluid" src="{{ URL::asset('/build/img/students/career.png') }}"
                                alt="image-banner" title="image-banner">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-left">
                    <div class="home-three-head" data-aos="fade-up">
                        <h2>Master the skills to drive your career</h2>
                    </div>
                    <div class="home-three-content" data-aos="fade-up">
                        <p>Get certified, master modern tech skills, and level up your career whether you’re starting out or
                            a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their
                            careers.</p>
                    </div>
                    <div class="skils-group">
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-down">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/build/img/icon-three/career-01.svg') }}"
                                            alt="certified">
                                    </div>
                                    <div class="skils-content">
                                        <p class="mb-0">Get certified with 100+ certification courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-up">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/build/img/icon-three/career-02.svg') }}"
                                            alt="Build skills">
                                    </div>
                                    <div class="skils-content">
                                        <p class="mb-0">Build skills your way, from labs to courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-right">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/build/img/icon-three/career-03.svg') }}"
                                            alt="Stay Motivated">
                                    </div>
                                    <div class="skils-content">
                                        <p class="mb-0">Stay motivated with engaging instructors</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-left">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/build/img/icon-three/career-04.svg') }}"
                                            alt="latest cloud">
                                    </div>
                                    <div class="skils-content">
                                        <p class="mb-0">Keep up with the latest in cloud</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Master skills Career -->



    <!-- Favourite Course -->
    <section class="home-three-favourite">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="home-three-head section-header-title" data-aos="fade-up">
                        <div class="row align-items-center d-flex justify-content-between">
                            <div class="col-lg-8 col-sm-12">
                                <h2>Choose favourite Course from top Category</h2>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="see-all">
                                    <a href="{{ url('course-details') }}">See all<span class="see-all-icon"><i
                                                class="fas fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel home-three-favourite-carousel owl-theme aos">
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-1.svg') }}"
                                        alt="Angular Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>Angular Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-2.svg') }}"
                                        alt="Python Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>Python Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-3.svg') }}"
                                        alt="NODE JS Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>NODE JS Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-4.svg') }}"
                                        alt="Laravel Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>Laravel Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-5.svg') }}"
                                        alt="Php Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>PHP Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-6.svg') }}"
                                        alt="Docker Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>Docker Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-2.svg') }}"
                                        alt="Python Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>Python Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-3.svg') }}"
                                        alt="NODE JS Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>NODE JS Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-4.svg') }}"
                                        alt="Laravel Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>Laravel Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-5.svg') }}"
                                        alt="PHP Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>PHP Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/category/category-6.svg') }}"
                                        alt="Docker Development">
                                </div>
                                <div class="categories-content course-info">
                                    <h3>Docker Development</h3>
                                </div>
                                <div class="course-instructors">
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 1"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 2"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="" data-bs-original-title="leader 3"><img
                                                        src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Favourite Course -->
        </div>
    </section>
    <!-- Feature Course -->

    <!-- Courses -->
    <section class="home-three-courses">
        <div class="container">
            <div class="favourite-course-sec">
                <div class="row">
                    <div class="home-three-head section-header-title" data-aos="fade-up">
                        <div class="row align-items-center d-flex justify-content-between">
                            <div class="col-lg-6 col-sm-8">
                                <h2>Courses</h2>
                            </div>
                            <div class="col-lg-6 col-sm-4">
                                <div class="see-all">
                                    <a href="#">See all<span class="see-all-icon"><i
                                                class="fas fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="all-corses-main">
                        <div class="tab-content">
                            <div class="nav tablist-three" role="tablist">

                                <a class="nav-tab active me-3" data-bs-toggle="tab" href="#alltab"
                                    role="tab">All</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#mostpopulartab" role="tab">Most
                                    popular</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#businesstab"
                                    role="tab">Business</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#designtab" role="tab">Design</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#designtab" role="tab">Music</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#programmingtab"
                                    role="tab">Programming</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#databasetab"
                                    role="tab">Database</a>

                            </div>

                            <div class="tab-content">

                                <!-- All -->
                                <div class="tab-pane fade active show" id="alltab" role="tabpanel">
                                    <div class="all-course">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-26.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-27.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user2.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Web
                                                                        Developer Python Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-20.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user3.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">The Complete Business
                                                                        Management Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-21.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user4.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Creative Arts &
                                                                        media Course Completed</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-22.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user5.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-23.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user6.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Python
                                                                        Development Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-24.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user7.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">Build Websites
                                                                        with HTML5 CSS3 Javascript</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-25.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user8.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /All -->

                                <!-- Most popular -->
                                <div class="tab-pane fade" id="mostpopulartab">
                                    <div class="all-course">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-21.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user4.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Creative Arts &
                                                                        media Course Completed</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-22.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user5.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-23.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user6.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Python
                                                                        Development Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-26.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-27.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user2.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Web
                                                                        Developer Python Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-20.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user3.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">The Complete
                                                                        Business Management Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-24.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user7.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">Build Websites
                                                                        with HTML5 CSS3 Javascript</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-25.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user8.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Most popular -->

                                <!-- Business -->
                                <div class="tab-pane fade" id="businesstab">
                                    <div class="businesstab">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-23.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user6.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Python
                                                                        Development Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-26.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-21.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user4.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Creative Arts
                                                                        & media Course Completed</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-22.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user5.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-27.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user2.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Web
                                                                        Developer Python Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-20.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user3.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">The Complete
                                                                        Business Management Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-24.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user7.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">Build Websites
                                                                        with HTML5 CSS3 Javascript</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-25.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user8.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Business -->

                                <!-- Design -->
                                <div class="tab-pane fade" id="designtab">
                                    <div class="designtab">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-27.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user2.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Web
                                                                        Developer Python Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-23.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user6.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Python
                                                                        Development Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-26.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-21.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user4.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Creative Arts
                                                                        & media Course Completed</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-20.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user3.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">The Complete
                                                                        Business Management Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-24.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user7.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">Build Websites
                                                                        with HTML5 CSS3 Javascript</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->



                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-22.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user5.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-25.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user8.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Design -->

                                <!-- Music -->
                                <div class="tab-pane fade" id="musictab">
                                    <div class="music-label">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-21.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user4.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Creative Arts
                                                                        & media Course Completed</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-22.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user5.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-23.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user6.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Python
                                                                        Development Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-26.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-27.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user2.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Web
                                                                        Developer Python Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-20.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user3.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">The Complete
                                                                        Business Management Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-24.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user7.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">Build Websites
                                                                        with HTML5 CSS3 Javascript</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-25.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user8.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Music -->

                                <!-- Programmiing -->
                                <div class="tab-pane fade" id="programmingtab">
                                    <div class="programmingtab">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-23.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user6.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Python
                                                                        Development Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-26.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-21.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user4.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Creative Arts
                                                                        & media Course Completed</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-22.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user5.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML CSS</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-27.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user2.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Web
                                                                        Developer Python Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-20.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user3.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">The Complete
                                                                        Business Management Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-24.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user7.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">Build Websites
                                                                        with HTML5 CSS3 Javascript</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-25.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user8.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML CSS</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Programmiing -->

                                <!-- Database -->
                                <div class="tab-pane fade" id="databasetab">
                                    <div class="databasetab">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-22.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user5.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML CSS</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-27.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user2.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Web
                                                                        Developer Python Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-23.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user6.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Python Development</p>
                                                                    <h3 class="title instructor-text">The Complete Python
                                                                        Development Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-26.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML CSS</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-21.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user4.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Creative Arts
                                                                        & media Course Completed</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-20.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user3.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">The Complete
                                                                        Business Management Course</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-24.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user7.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text">Build Websites
                                                                        with HTML5 CSS3 Javascript</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt=""
                                                                    src="{{ URL::asset('/build/img/course/course-25.jpg') }}">
                                                            </a>
                                                            <div class="course-share heart-three">
                                                                <a href="#rate"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{ url('instructor-profile') }}"><img
                                                                            src="{{ URL::asset('/build/img/user/user8.jpg') }}"
                                                                            alt="" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                <a href="{{ url('course-details') }}">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text">Build Responsive
                                                                        Websites with HTML CSS</h3>
                                                                </a>
                                                            </div>

                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div
                                                                    class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon-three/student.svg') }}"
                                                                        alt="">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Database -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /Courses -->

    <!-- Call to Action -->
    <section class="home-three-transform">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="cta-content">
                        <h2>Transform Access To Education</h2>
                        <p>Create an account to receive our newsletter, course recommendations and promotions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="transform-button-three">
                        <a href="{{ url('register') }}" class="btn btn-action">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action -->

    <!-- Acheive you Goals  -->
    <section class="home-three-goals">
        <div class="container">
            <div class="row align-items-center">

                <!-- Col -->
                <div class="col-xl-3 col-lg-12 col-md-12" data-aos="fade-down">
                    <div class="acheive-goals-main">
                        <h2>Acheive you Goals with DreamsLMS</h2>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="acheive-goals">
                        <div class="acheive-elips-one">
                            <img src="{{ URL::asset('/build/img/icon-three/ellipse-1.svg') }}" alt="">
                        </div>
                        <div class="acheive-goals-content text-center course-count ms-0">
                            <h4><span class="counterUp">253,085</span></h4>
                            <p>Students Enrolled all over World</p>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="acheive-goals">
                        <div class="acheive-elips-two">
                            <img src="{{ URL::asset('/build/img/icon-three/ellipse-2.svg') }}" alt="">
                        </div>
                        <div class="acheive-goals-content text-center course-count ms-0">
                            <h4><span class="counterUp">1,205</span></h4>
                            <p>Total Courses on our Platform</p>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="acheive-goals">
                        <div class="acheive-elips-three">
                            <img src="{{ URL::asset('/build/img/icon-three/ellipse-3.svg') }}" alt="">
                        </div>
                        <div class="acheive-goals-content text-center course-count ms-0">
                            <h4><span class="counterUp">56</span></h4>
                            <p>Countries of Students </p>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

            </div>
        </div>
    </section>
    <!-- /Acheive you Goals  -->

    <!-- Accelerate cloud -->
    <section class="accelerate-cloud-three">
        <div class="container">
            <div class="shapes-three-right">
                <img class="accelerate-one" src="{{ URL::asset('/build/img/bg/shape-1.png') }}" alt="">
                <img class="accelerate-two" src="{{ URL::asset('/build/img/bg/pattern-03.png') }}" alt="">
            </div>
            <div class="shapes-three-left">
                <img class="accelerate-three" src="{{ URL::asset('/build/img/bg/pattern-02.png') }}"
                    alt="">
                <img class="accelerate-four" src="{{ URL::asset('/build/img/bg/shape-2.png') }}" alt="">
                <img class="accelerate-five" src="{{ URL::asset('/build/img/bg/pattern-04.png') }}" alt="">
            </div>
            <div class="home-three-head section-header-title" data-aos="fade-up">
                <div class="row align-items-center d-flex justify-content-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="home-three-head">
                            <h2 class="text-white">Accelerate cloud success with hands-on learning at scaler</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p class="accelerate-three-business">96% of eLearning for Business customers see improved results
                            within six months. Whether you’re a team of 10 or 10,000, faster cloud fluency starts here.</p>
                    </div>
                </div>
            </div>

            <!-- Award Winning -->
            <div class="award-one">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-right">
                        <div class="award-three-images-one">
                            <img class="img-fluid" src="{{ URL::asset('/build/img/students/award-01.png') }}"
                                alt="image-banner" title="image-banner">
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="award-three-content-one">
                            <div class="award-list-info" data-aos="fade-up">
                                <div class="award-win-icon">
                                    <img src="{{ URL::asset('/build/img/icon-three/award.svg') }}" alt="certified">
                                </div>
                                <div class="award-list-content">
                                    <h2>Award Winning Course Management</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum massa
                                        viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer
                                        a felis ac vel mauris a morbi. Scelerisque </p>
                                </div>
                            </div>

                            <div class="award-list d-flex align-items-center">
                                <span class="award-icon">
                                    <img src="{{ URL::asset('/build/img/icon-three/check-round-1.svg') }}"
                                        alt="" class="img-fluid">
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="award-list d-flex align-items-center">
                                <span class="award-icon">
                                    <img src="{{ URL::asset('/build/img/icon-three/check-round-1.svg') }}"
                                        alt="" class="img-fluid">
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="award-list mb-0 d-flex align-items-center" data-aos="fade-up">
                                <span class="award-icon">
                                    <img src="{{ URL::asset('/build/img/icon-three/check-round-1.svg') }}"
                                        alt="" class="img-fluid">
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Award Winning -->

            <!-- Learn Anything -->
            <div class="learn-anything">
                <div class="row align-items-center">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                        <div class="award-three-content-two">
                            <div class="award-list-info">
                                <div class="award-win-icon">
                                    <img class="img-fluid" src="{{ URL::asset('/build/img/icon-three/time.svg') }}"
                                        alt="certified">
                                </div>
                                <div class="award-list-content">
                                    <h2>Learn anything from anywhere anytime</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum massa
                                        viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer
                                        a felis ac vel mauris a morbi. Scelerisque </p>
                                </div>
                            </div>

                            <div class="award-list d-flex align-items-center">
                                <span class="award-icon">
                                    <img src="{{ URL::asset('/build/img/icon-three/check-round-2.svg') }}"
                                        alt="" class="img-fluid">
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="award-list d-flex align-items-center">
                                <span class="award-icon">
                                    <img src="{{ URL::asset('/build/img/icon-three/check-round-2.svg') }}"
                                        alt="" class="img-fluid">
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="award-list d-flex align-items-center">
                                <span class="award-icon">
                                    <img src="{{ URL::asset('/build/img/icon-three/check-round-2.svg') }}"
                                        alt="" class="img-fluid">
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-right">
                        <div class="award-three-images-two">
                            <img class="img-fluid" src="{{ URL::asset('/build/img/students/learn-anything.png') }}"
                                alt="image-banner" title="image-banner">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Learn Anything -->

            <!-- development-carrer-->
            <div class="development-carrer">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-right">
                        <div class="award-three-images-three">
                            <img class="img-fluid" src="{{ URL::asset('/build/img/students/certification.png') }}"
                                alt="image-banner" title="image-banner">
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                        <div class="award-three-content-one">
                            <div class="award-list-info">
                                <div class="award-win-icon">
                                    <img class="img-fluid"
                                        src="{{ URL::asset('/build/img/icon-three/winning.svg') }}" alt="certified">
                                </div>
                                <div class="award-list-content">
                                    <h2>Certification for solid development of your Carrer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum massa
                                        viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer
                                        a felis ac vel mauris a morbi. Scelerisque </p>
                                </div>
                            </div>

                            <div class="award-list d-flex align-items-center">
                                <span class="award-icon">
                                    <img src="{{ URL::asset('/build/img/icon-three/check-round-3.svg') }}"
                                        alt="" class="img-fluid">
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="award-list d-flex align-items-center">
                                <span class="award-icon">
                                    <img src="{{ URL::asset('/build/img/icon-three/check-round-3.svg') }}"
                                        alt="" class="img-fluid">
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /development-carrer -->

        </div>
    </section>
    <!-- Accelerate cloud -->

    <!-- Trending Courses  Three -->
    <section class="home-three-trending">
        <div class="container">
            <div class="row">
                <div class="home-three-head section-header-title" data-aos="fade-up">
                    <div class="row align-items-center d-flex justify-content-between">
                        <div class="col-lg-12">
                            <h2>Most Trending Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel home-three-trending-course owl-theme" data-aos="fade-up">

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-one">
                            <div class="course-title-one">
                                <a href="{{ url('course-details') }}">Personalized Learning</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{ url('course-details') }}">
                                    <h3 class="title instructor-text">Build Responsive Websites with HTML</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                    </p>
                                </a>
                            </div>

                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon-three/student-icon.svg') }}"
                                        alt="student-icon">
                                    <p>400 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>6hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$300</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{ url('course-details') }}"><img
                                            src="{{ URL::asset('/build/img/profiles/avatar-04.jpg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-two">
                            <div class="course-title-one">
                                <a href="{{ url('course-details') }}">Python Development</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{ url('course-details') }}">
                                    <h3 class="title instructor-text">The Complete Python Framework Course 2.0</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                    </p>
                                </a>
                            </div>

                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon-three/student-icon.svg') }}"
                                        alt="">
                                    <p>900 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>9hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$800</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{ url('course-details') }}"><img
                                            src="{{ URL::asset('/build/img/profiles/avatar-05.jpg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-three">
                            <div class="course-title-one">
                                <a href="{{ url('course-details') }}">Business Management</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{ url('course-details') }}">
                                    <h3 class="title instructor-text">The Complete Business Management Course</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                    </p>
                                </a>
                            </div>

                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon-three/student-icon.svg') }}"
                                        alt="">
                                    <p>400 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>6hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$300</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{ url('course-details') }}"><img
                                            src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-four">
                            <div class="course-title-one">
                                <a href="{{ url('course-details') }}">Creative Arts & media</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{ url('course-details') }}">
                                    <h3 class="title instructor-text">Build Creative Arts & Course Completed</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                    </p>
                                </a>
                            </div>

                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon-three/student-icon.svg') }}"
                                        alt="">
                                    <p>900 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>4hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$200</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{ url('course-details') }}"><img
                                            src="{{ URL::asset('/build/img/profiles/avatar-07.jpg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-one">
                            <div class="course-title-one">
                                <a href="{{ url('course-details') }}">Personalized Learning</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{ url('course-details') }}">
                                    <h3 class="title instructor-text">Build Responsive Websites with HTML</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                    </p>
                                </a>
                            </div>

                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon-three/student-icon.svg') }}"
                                        alt="">
                                    <p>600 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>2hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$200</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{ url('course-details') }}"><img
                                            src="{{ URL::asset('/build/img/profiles/avatar-08.jpg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-two">
                            <div class="course-title-one">
                                <a href="{{ url('course-details') }}">Python Development</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{ url('course-details') }}">
                                    <h3 class="title instructor-text">The Complete Python Framework Course 2.0</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                    </p>
                                </a>
                            </div>

                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon-three/student-icon.svg') }}"
                                        alt="">
                                    <p>800 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>3hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$350</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{ url('course-details') }}"><img
                                            src="{{ URL::asset('/build/img/profiles/avatar-09.jpg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-three">
                            <div class="course-title-one">
                                <a href="{{ url('course-details') }}">Business Management</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{ url('course-details') }}">
                                    <h3 class="title instructor-text">The Complete Business Management Course</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                    </p>
                                </a>
                            </div>

                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon-three/student-icon.svg') }}"
                                        alt="">
                                    <p>700 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>4hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$400</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{ url('course-details') }}"><img
                                            src="{{ URL::asset('/build/img/profiles/avatar-10.jpg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-four">
                            <div class="course-title-one">
                                <a href="{{ url('course-details') }}">Creative Arts & media</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{ url('course-details') }}">
                                    <h3 class="title instructor-text">Build Creative Arts & Course Completed</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                    </p>
                                </a>
                            </div>

                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon-three/student-icon.svg') }}"
                                        alt="">
                                    <p>600 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>5hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$400</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{ url('course-details') }}"><img
                                            src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                </div>
            </div>
            <!-- /Favourite Course -->
        </div>
    </section>
    <!-- Feature Course -->

    <section class="gallery-three">
        <div class="container">
            <div class="home-three-head section-header-title" data-aos="fade-up">
                <div class="row align-items-center d-flex justify-content-between">
                    <div class="col-lg-6 col-sm-12">
                        <h2>Courses taught by real instructor</h2>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="see-all">
                            <a href="{{ url('instructor-list') }}">See all<span class="see-all-icon"><i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="courses-gallery-three">
                <div class="row">
                    <!-- Col -->
                    <div class="col-lg-5 col-md-5">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="gallery-three-img-item">
                                    <div class="content-three-main">
                                        <div class="gallery-img">
                                            <img src="{{ URL::asset('/build/img/gallery/gallery-1.jpg') }}"
                                                alt="Instructor">
                                        </div>
                                        <div class="content-three-overlay">
                                            <div class="content-three-text">
                                                <div>
                                                    <h6>Patricia</h6>
                                                    <p>Node Js</p>
                                                </div>
                                                <div>
                                                    <a href="{{ url('instructor-list') }}"
                                                        class="content-three-arrows">
                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="gallery-three-img-item">
                                    <div class="content-three-main">
                                        <div class="gallery-img">
                                            <img src="{{ URL::asset('/build/img/gallery/gallery-2.jpg') }}"
                                                alt="Instructor">
                                        </div>
                                        <div class="content-three-overlay">
                                            <div class="content-three-text">
                                                <div>
                                                    <h6>Patricia</h6>
                                                    <p>Node Js</p>
                                                </div>
                                                <div>
                                                    <a href="{{ url('instructor-list') }}"
                                                        class="content-three-arrows">
                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="gallery-three-img-item mb-0">
                                    <div class="content-three-main">
                                        <div class="gallery-img">
                                            <img src="{{ URL::asset('/build/img/gallery/gallery-3.jpg') }}"
                                                alt="Instructor">
                                        </div>
                                        <div class="content-three-overlay">
                                            <div class="content-three-text">
                                                <div>
                                                    <h6>Patricia</h6>
                                                    <p>Node Js</p>
                                                </div>
                                                <div>
                                                    <a href="{{ url('instructor-list') }}"
                                                        class="content-three-arrows">
                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="gallery-three-img-item mb-0">
                                    <div class="content-three-main">
                                        <div class="gallery-img">
                                            <img src="{{ URL::asset('/build/img/gallery/gallery-4.jpg') }}"
                                                alt="Instructor">
                                        </div>
                                        <div class="content-three-overlay">
                                            <div class="content-three-text">
                                                <div>
                                                    <h6>Patricia</h6>
                                                    <p>Node Js</p>
                                                </div>
                                                <div>
                                                    <a href="{{ url('instructor-list') }}"
                                                        class="content-three-arrows">
                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-3 col-md-3">
                        <div class="gallery-three-img-item mb-0">
                            <div class="content-three-main">
                                <div class="gallery-img">
                                    <img src="{{ URL::asset('/build/img/gallery/gallery-5.jpg') }}" alt="Instructor">
                                </div>
                                <div class="content-three-overlay">
                                    <div class="content-three-text">
                                        <div>
                                            <h6>Patricia</h6>
                                            <p>Node Js</p>
                                        </div>
                                        <div>
                                            <a href="{{ url('instructor-list') }}" class="content-three-arrows">
                                                <span><i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="gallery-three-img-item">
                                    <div class="content-three-main">
                                        <div class="gallery-img">
                                            <img src="{{ URL::asset('/build/img/gallery/gallery-6.jpg') }}"
                                                alt="Instructor">
                                        </div>
                                        <div class="content-three-overlay">
                                            <div class="content-three-text">
                                                <div>
                                                    <h6>Patricia</h6>
                                                    <p>Node Js</p>
                                                </div>
                                                <div>
                                                    <a href="{{ url('instructor-list') }}"
                                                        class="content-three-arrows">
                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="gallery-three-img-item mb-0">
                                    <div class="content-three-main">
                                        <div class="gallery-img">
                                            <img src="{{ URL::asset('/build/img/gallery/gallery-7.jpg') }}"
                                                alt="Instructor">
                                        </div>
                                        <div class="content-three-overlay">
                                            <div class="content-three-text">
                                                <div>
                                                    <h6>Patricia</h6>
                                                    <p>Node Js</p>
                                                </div>
                                                <div>
                                                    <a href="{{ url('instructor-list') }}"
                                                        class="content-three-arrows">
                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="gallery-three-img-item mb-0">
                                    <div class="content-three-main">
                                        <div class="gallery-img">
                                            <img src="{{ URL::asset('/build/img/gallery/gallery-8.jpg') }}"
                                                alt="Instructor">
                                        </div>
                                        <div class="content-three-overlay">
                                            <div class="content-three-text">
                                                <div>
                                                    <h6>Patricia</h6>
                                                    <p>Node Js</p>
                                                </div>
                                                <div>
                                                    <a href="{{ url('instructor-list') }}"
                                                        class="content-three-arrows">
                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </div>
    </section>

    <!-- Become An Instructor -->
    <section class="home-three-become">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8" data-aos="fade-up">
                    <div class="become-content-three">
                        <h2>Become An Instructor</h2>
                        <p>Top instructors from around the world teach millions of students on DreamsLMS.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" data-aos="fade-up">
                    <div class="become-button-three">
                        <a href="{{ url('register') }}" class="btn btn-become">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Become An Instructor -->

    <!-- Leading Companies -->
    <section class="lead-companies-three">
        <div class="container">
            <div class="home-three-head section-header-title aos-init aos-animate">
                <div class="row align-items-center d-flex justify-content-between">
                    <div class="col-lg-12" data-aos="fade-up">
                        <h2>500+ Leading Universities And Companies</h2>
                    </div>
                </div>
            </div>
            <div class="m-0 p-0 lead-group aos" data-aos="fade-up">
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

    <!-- Testimonial -->
    <section class="testimonial-three">
        <div class="container">
            <div class="testimonial-pattern">
                <img class="pattern-left img-fluid" alt=""
                    src="{{ URL::asset('/build/img/bg/pattern-05.svg') }}">
                <img class="pattern-right img-fluid" alt=""
                    src="{{ URL::asset('/build/img/bg/pattern-06.svg') }}">
            </div>
            <div class="testimonial-three-content">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="become-content">
                            <h2 class="aos-init aos-animate">They Trusted us</h2>
                            <h4 class="aos-init aos-animate">We are a very happy because we have a happy customer</h4>
                        </div>

                        <!-- View all Testimonial -->
                        <a href="{{ url('instructor-profile') }}" class="btn btn-action aos-init aos-animate"
                            data-aos="fade-up">View all Testimonial</a>
                        <!-- View all Testimonial -->

                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="swiper-testimonial-three">
                            <div class="swiper-wrapper">

                                <!-- Swiper Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item-five">
                                        <div class="testimonial-quote">
                                            <img class="quote img-fluid" alt=""
                                                src="{{ URL::asset('/build/img/bg/quote.svg') }}">
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas pretium
                                                feugiat tellus eget vitae sagittis id in. In in tempor ac dignissim at.
                                                Scelerisque sociis consequat sit dolor. Vitae donec porttitor risus tellus
                                                eget vitae sagittis id in. In in tempor ac dignissim at. Scelerisque sociis
                                                consequat </p>
                                        </div>
                                        <div class="testimonial-ratings">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <p class="d-inline-block">4.5<span>ratings</span></p>
                                            </div>
                                        </div>
                                        <div class="testimonial-users">
                                            <div class="imgbx">
                                                <img class="img-fluid" alt=""
                                                    src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}">
                                            </div>
                                            <div class="d-block">
                                                <h6>Jeff J. Sparrow</h6>
                                                <p>Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Swiper Slide -->

                                <!-- Swiper Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item-five">
                                        <div class="testimonial-quote">
                                            <img class="quote img-fluid" alt=""
                                                src="{{ URL::asset('/build/img/bg/quote.svg') }}">
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas pretium
                                                feugiat tellus eget vitae sagittis id in. In in tempor ac dignissim at.
                                                Scelerisque sociis consequat sit dolor. Vitae donec porttitor risus tellus
                                                eget vitae sagittis id in. In in tempor ac dignissim at. Scelerisque sociis
                                                consequat </p>
                                        </div>
                                        <div class="testimonial-ratings">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <p class="d-inline-block">5<span>ratings</span></p>
                                            </div>
                                        </div>
                                        <div class="testimonial-users">
                                            <div class="imgbx">
                                                <img class="" alt=""
                                                    src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}">
                                            </div>
                                            <div class="d-block">
                                                <h6>Martin Harn</h6>
                                                <p>Docker Development</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Swiper Slide -->

                                <!-- Swiper Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item-five">
                                        <div class="testimonial-quote">
                                            <img class="quote img-fluid" alt=""
                                                src="{{ URL::asset('/build/img/bg/quote.svg') }}">
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas pretium
                                                feugiat tellus eget vitae sagittis id in. In in tempor ac dignissim at.
                                                Scelerisque sociis consequat sit dolor. Vitae donec porttitor risus tellus
                                                eget vitae sagittis id in. In in tempor ac dignissim at. Scelerisque sociis
                                                consequat </p>
                                        </div>
                                        <div class="testimonial-ratings">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <p class="d-inline-block">4.8<span>ratings</span></p>
                                            </div>
                                        </div>
                                        <div class="testimonial-users">
                                            <div class="imgbx">
                                                <img class="" alt=""
                                                    src="{{ URL::asset('/build/img/profiles/avatar-05.jpg') }}">
                                            </div>
                                            <div class="d-block">
                                                <h6>Noah Aarons</h6>
                                                <p>Business Man</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Swiper Slide -->


                            </div>
                            <div class="testimonial-bottom-nav">
                                <div class="slide-next-btn testimonial-next-pre"><i class="fas fa-arrow-left"></i></div>
                                <div class="slide-prev-btn testimonial-next-pre"><i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Testimonial -->

    <!-- Latest Blog -->
    <section class="latest-blog-three">
        <div class="container">
            <div class="home-three-head section-header-title" data-aos="fade-up">
                <div class="row align-items-center d-flex justify-content-between">
                    <div class="col-lg-6 col-md-8">
                        <h2>Latest news & Events</h2>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="see-all">
                            <a href="{{ url('blog-list') }}">See all<span class="see-all-icon"><i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-blog-main">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-down">
                                <div class="event-blog-three blog-three-one">
                                    <div class="blog-img-three">
                                        <a href="{{ url('blog-list') }}">
                                            <img class="img-fluid" alt=""
                                                src="{{ URL::asset('/build/img/blog/blog-20.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three">
                                                <span class="span-name-three badge-green">Sales</span>
                                            </div>
                                            <a href="{{ url('blog-list') }}">
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean
                                                    accumsan bibendum gravida..Lorem ipsum dolor sit amet, </p>
                                            </a>
                                            <div class="blog-student-count">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>Jun 15, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-down">
                                <div class="event-blog-three blog-three-two">
                                    <div class="blog-img-three">
                                        <a href="{{ url('blog-list') }}">
                                            <img class="img-fluid" alt=""
                                                src="{{ URL::asset('/build/img/blog/blog-21.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three">
                                                <span class="span-name-three badge-info">Sales</span>
                                            </div>
                                            <a href="{{ url('blog-list') }}">
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean
                                                    accumsan bibendum gravida..Lorem ipsum dolor sit amet, </p>
                                            </a>
                                            <div class="blog-student-count">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>Jun 20, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-down">
                                <div class="event-blog-three blog-three-three">
                                    <div class="blog-img-three">
                                        <a href="{{ url('blog-list') }}">
                                            <img class="img-fluid" alt=""
                                                src="{{ URL::asset('/build/img/blog/blog-22.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three">
                                                <span class="span-name-three badge-info">Sales</span>
                                            </div>
                                            <a href="{{ url('blog-list') }}">
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean
                                                    accumsan bibendum gravida..Lorem ipsum dolor sit amet, </p>
                                            </a>
                                            <div class="blog-student-count">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>Jun 05, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-down">
                                <div class="event-blog-three blog-three-four">
                                    <div class="blog-img-three">
                                        <a href="{{ url('blog-list') }}">
                                            <img class="img-fluid" alt=""
                                                src="{{ URL::asset('/build/img/blog/blog-23.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three">
                                                <span class="span-name-three badge-info">Sales</span>
                                            </div>
                                            <a href="{{ url('blog-list') }}">
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean
                                                    accumsan bibendum gravida..Lorem ipsum dolor sit amet, </p>
                                            </a>
                                            <div class="blog-student-count">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>May 31, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-down">
                                <div class="event-blog-three blog-three-five">
                                    <div class="blog-img-three">
                                        <a href="{{ url('blog-list') }}">
                                            <img class="img-fluid" alt=""
                                                src="{{ URL::asset('/build/img/blog/blog-24.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three">
                                                <span class="span-name-three badge-yellow">Sales</span>
                                            </div>
                                            <a href="{{ url('blog-list') }}">
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean
                                                    accumsan bibendum gravida..Lorem ipsum dolor sit amet, </p>
                                            </a>
                                            <div class="blog-student-count">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>Jun 15, 2023</span>
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
    </section>
    <!-- /Latest Blog -->
@endsection
