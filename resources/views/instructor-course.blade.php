<?php $page = 'instructor-course'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            My Courses
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            My Courses
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row">

                @component('components.sidebar')
                @endcomponent

                <!-- Instructor Courses -->
                <div class="col-xl-9 col-lg-9">

                    <div class="settings-widget card-info">
                        <div class="settings-menu p-0">
                            <div class="profile-heading">
                                <h3>My Courses</h3>
                                <p>Manage your courses and its updates</p>
                            </div>
                            <div class="checkout-form pb-0">
                                <div class="wishlist-tab">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="active" data-bs-toggle="tab"
                                                data-bs-target="#enroll-courses">Publish (6)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#active-courses">Pending (2)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#complete-courses">Draft (1)</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="enroll-courses">
                                        <div class="row">

                                            <!-- Course Grid -->
                                            <div class="col-xxl-4 col-md-6 d-flex">
                                                <div class="course-box flex-fill">
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt="Img"
                                                                    src="{{ URL::asset('/build/img/course/course-02.jpg') }}">
                                                            </a>
                                                            <div class="price">
                                                                <h3>$80 <span>$99.00</span></h3>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="title instructor-text"><a
                                                                    href="{{ url('course-details') }}">Wordpress for
                                                                    Beginners - Master Wordpress Quickly</a></h3>
                                                            <div class="course-info d-flex align-items-center">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                                        alt="Img">
                                                                    <p>12+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                                        alt="Img">
                                                                    <p>70hr 30min</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course-edit-btn d-flex align-items-center justify-content-between">
                                                                <a href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                                                <a href="#"><i class="bx bx-trash me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Course Grid -->

                                            <!-- Course Grid -->
                                            <div class="col-xxl-4 col-md-6 d-flex">
                                                <div class="course-box flex-fill">
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt="Img"
                                                                    src="{{ URL::asset('/build/img/course/course-03.jpg') }}">
                                                            </a>
                                                            <div class="price combo">
                                                                <h3>FREE</h3>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="title instructor-text"><a
                                                                    href="{{ url('course-details') }}">Sketch from A to Z
                                                                    (2022): Become an app designer</a></h3>
                                                            <div class="course-info d-flex align-items-center">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                                        alt="Img">
                                                                    <p>10+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                                        alt="Img">
                                                                    <p>40hr 10min</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course-edit-btn d-flex align-items-center justify-content-between">
                                                                <a href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                                                <a href="#"><i class="bx bx-trash me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Course Grid -->

                                            <!-- Course Grid -->
                                            <div class="col-xxl-4 col-md-6 d-flex">
                                                <div class="course-box flex-fill">
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt="Img"
                                                                    src="{{ URL::asset('/build/img/course/course-04.jpg') }}">
                                                            </a>
                                                            <div class="price">
                                                                <h3>$65 <span>$70.00</span></h3>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="title instructor-text"><a
                                                                    href="{{ url('course-details') }}">Learn Angular
                                                                    Fundamentals From beginning to advance lavel</a></h3>
                                                            <div class="course-info d-flex align-items-center">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                                        alt="Img">
                                                                    <p>15+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                                        alt="Img">
                                                                    <p>80hr 40min</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course-edit-btn d-flex align-items-center justify-content-between">
                                                                <a href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                                                <a href="#"><i
                                                                        class="bx bx-trash me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Course Grid -->

                                            <!-- Course Grid -->
                                            <div class="col-xxl-4 col-md-6 d-flex">
                                                <div class="course-box flex-fill">
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt="Img"
                                                                    src="{{ URL::asset('/build/img/course/course-05.jpg') }}">
                                                            </a>
                                                            <div class="price combo">
                                                                <h3>FREE</h3>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="title instructor-text"><a
                                                                    href="{{ url('course-details') }}">Build Responsive
                                                                    Real World Websites with Crash Course</a></h3>
                                                            <div class="course-info d-flex align-items-center">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                                        alt="Img">
                                                                    <p>12+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                                        alt="Img">
                                                                    <p>70hr 30min</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course-edit-btn d-flex align-items-center justify-content-between">
                                                                <a href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                                                <a href="#"><i
                                                                        class="bx bx-trash me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Course Grid -->

                                            <!-- Course Grid -->
                                            <div class="col-xxl-4 col-md-6 d-flex">
                                                <div class="course-box flex-fill">
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt="Img"
                                                                    src="{{ URL::asset('/build/img/course/course-07.jpg') }}">
                                                            </a>
                                                            <div class="price">
                                                                <h3>$70 <span>$80.00</span></h3>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="title instructor-text"><a
                                                                    href="{{ url('course-details') }}">Learn JavaScript
                                                                    and Express to become a Expert</a></h3>
                                                            <div class="course-info d-flex align-items-center">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                                        alt="Img">
                                                                    <p>15+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                                        alt="Img">
                                                                    <p>70hr 30min</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course-edit-btn d-flex align-items-center justify-content-between">
                                                                <a href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                                                <a href="#"><i
                                                                        class="bx bx-trash me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Course Grid -->

                                            <!-- Course Grid -->
                                            <div class="col-xxl-4 col-md-6 d-flex">
                                                <div class="course-box flex-fill">
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt="Img"
                                                                    src="{{ URL::asset('/build/img/course/course-08.jpg') }}">
                                                            </a>
                                                            <div class="price combo">
                                                                <h3>FREE</h3>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="title instructor-text"><a
                                                                    href="{{ url('course-details') }}">Introduction to
                                                                    Programming- Python & Java</a></h3>
                                                            <div class="course-info d-flex align-items-center">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                                        alt="Img">
                                                                    <p>10+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                                        alt="Img">
                                                                    <p>70hr 30min</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course-edit-btn d-flex align-items-center justify-content-between">
                                                                <a href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                                                <a href="#"><i
                                                                        class="bx bx-trash me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Course Grid -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="active-courses">
                                        <div class="row">

                                            <!-- Course Grid -->
                                            <div class="col-xxl-4 col-md-6 d-flex">
                                                <div class="course-box flex-fill">
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt="Img"
                                                                    src="{{ URL::asset('/build/img/course/course-02.jpg') }}">
                                                            </a>
                                                            <div class="price">
                                                                <h3>$80 <span>$99.00</span></h3>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="title instructor-text"><a
                                                                    href="{{ url('course-details') }}">Wordpress for
                                                                    Beginners - Master Wordpress Quickly</a></h3>
                                                            <div class="course-info d-flex align-items-center">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                                        alt="Img">
                                                                    <p>12+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                                        alt="Img">
                                                                    <p>70hr 30min</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course-edit-btn d-flex align-items-center justify-content-between">
                                                                <a href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                                                <a href="#"><i
                                                                        class="bx bx-trash me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Course Grid -->

                                            <!-- Course Grid -->
                                            <div class="col-xxl-4 col-md-6 d-flex">
                                                <div class="course-box flex-fill">
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt="Img"
                                                                    src="{{ URL::asset('/build/img/course/course-03.jpg') }}">
                                                            </a>
                                                            <div class="price combo">
                                                                <h3>FREE</h3>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="title instructor-text"><a
                                                                    href="{{ url('course-details') }}">Sketch from A to Z
                                                                    (2022): Become an app designer</a></h3>
                                                            <div class="course-info d-flex align-items-center">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                                        alt="Img">
                                                                    <p>10+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                                        alt="Img">
                                                                    <p>40hr 10min</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course-edit-btn d-flex align-items-center justify-content-between">
                                                                <a href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                                                <a href="#"><i
                                                                        class="bx bx-trash me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Course Grid -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="complete-courses">
                                        <div class="row">

                                            <!-- Course Grid -->
                                            <div class="col-xxl-4 col-md-6 d-flex">
                                                <div class="course-box flex-fill">
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <a href="{{ url('course-details') }}">
                                                                <img class="img-fluid" alt="Img"
                                                                    src="{{ URL::asset('/build/img/course/course-04.jpg') }}">
                                                            </a>
                                                            <div class="price">
                                                                <h3>$65 <span>$70.00</span></h3>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="title instructor-text"><a
                                                                    href="{{ url('course-details') }}">Learn Angular
                                                                    Fundamentals From beginning to advance lavel</a></h3>
                                                            <div class="course-info d-flex align-items-center">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                                        alt="Img">
                                                                    <p>15+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                                        alt="Img">
                                                                    <p>80hr 40min</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course-edit-btn d-flex align-items-center justify-content-between">
                                                                <a href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                                                <a href="#"><i
                                                                        class="bx bx-trash me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Course Grid -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dash-pagination">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p>Page 1 of 2</p>
                            </div>
                            <div class="col-6">
                                <ul class="pagination">
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="bx bx-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Instructor Courses -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
