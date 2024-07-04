<?php $page = 'student-wishlist'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        Wishlist
        @endslot
        @slot('item1')
         Home
        @endslot
        @slot('item2')
        Wishlist
        @endslot
    @endcomponent

<!-- Page Content -->
<div class="page-content">
    <div class="container">
        <div class="row">
            
          @component('components.sidebar')
            
          @endcomponent
            
            <!-- Student Wishlist -->
            <div class="col-xl-9 col-lg-9">	

                <div class="settings-widget card-info">
                    <div class="settings-menu p-0">
                        <div class="profile-heading">
                            <h3>Wishlist</h3>
                        </div>
                        <div class="checkout-form pb-0">
                            <div class="row">

                                <!-- Course Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="course-box flex-fill">
                                        <div class="product">
                                            <div class="product-img">
                                                <a href="{{url('course-details')}}">
                                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-02.jpg')}}">
                                                </a>
                                                <div class="price">
                                                    <h3>$80 <span>$99.00</span></h3>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="course-group d-flex">
                                                    <div class="course-group-img d-flex">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user2.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        <div class="course-name">
                                                            <h4><a href="{{url('instructor-profile')}}">Cooper</a></h4>
                                                            <p>Instructor</p>
                                                        </div>
                                                    </div>
                                                    <div class="course-share d-flex align-items-center justify-content-center">
                                                        <a href="#"><i class="fa-regular fa-heart color-active"></i></a>
                                                    </div>
                                                </div>
                                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Wordpress for Beginners - Master Wordpress Quickly</a></h3>
                                                <div class="course-info d-flex align-items-center">
                                                    <div class="rating-img d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-01.svg')}}" alt="Img">
                                                        <p>12+ Lesson</p>
                                                    </div>
                                                    <div class="course-view d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-02.svg')}}" alt="Img">
                                                        <p>70hr 30min</p>
                                                    </div>
                                                </div>
                                                <div class="rating mb-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="d-inline-block average-rating"><span>5.0</span> (20)</span>
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
                                                <a href="{{url('course-details')}}">
                                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-03.jpg')}}">
                                                </a>
                                                <div class="price combo">
                                                    <h3>FREE</h3>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="course-group d-flex">
                                                    <div class="course-group-img d-flex">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user5.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        <div class="course-name">
                                                            <h4><a href="{{url('instructor-profile')}}">Jenny</a></h4>
                                                            <p>Instructor</p>
                                                        </div>
                                                    </div>
                                                    <div class="course-share d-flex align-items-center justify-content-center">
                                                        <a href="#"><i class="fa-regular fa-heart color-active"></i></a>
                                                    </div>
                                                </div>
                                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Sketch from A to Z (2022): Become an app designer</a></h3>
                                                <div class="course-info d-flex align-items-center">
                                                    <div class="rating-img d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-01.svg')}}" alt="Img">
                                                        <p>10+ Lesson</p>
                                                    </div>
                                                    <div class="course-view d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-02.svg')}}" alt="Img">
                                                        <p>40hr 10min</p>
                                                    </div>
                                                </div>
                                                <div class="rating mb-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating"><span>3.0</span> (18)</span>
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
                                                <a href="{{url('course-details')}}">
                                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-04.jpg')}}">
                                                </a>
                                                <div class="price">
                                                    <h3>$65 <span>$70.00</span></h3>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="course-group d-flex">
                                                    <div class="course-group-img d-flex">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user4.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        <div class="course-name">
                                                            <h4><a href="{{url('instructor-profile')}}">Nicole Brown</a></h4>
                                                            <p>Instructor</p>
                                                        </div>
                                                    </div>
                                                    <div class="course-share d-flex align-items-center justify-content-center">
                                                        <a href="#"><i class="fa-regular fa-heart color-active"></i></a>
                                                    </div>
                                                </div>
                                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Learn Angular Fundamentals From beginning to advance lavel</a></h3>
                                                <div class="course-info d-flex align-items-center">
                                                    <div class="rating-img d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-01.svg')}}" alt="Img">
                                                        <p>15+ Lesson</p>
                                                    </div>
                                                    <div class="course-view d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-02.svg')}}" alt="Img">
                                                        <p>80hr 40min</p>
                                                    </div>
                                                </div>
                                                <div class="rating mb-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating"><span>4.0</span> (10)</span>
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
                                                <a href="{{url('course-details')}}">
                                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-05.jpg')}}">
                                                </a>
                                                <div class="price combo">
                                                    <h3>FREE</h3>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="course-group d-flex">
                                                    <div class="course-group-img d-flex">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user3.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        <div class="course-name">
                                                            <h4><a href="{{url('instructor-profile')}}">John Smith</a></h4>
                                                            <p>Instructor</p>
                                                        </div>
                                                    </div>
                                                    <div class="course-share d-flex align-items-center justify-content-center">
                                                        <a href="#"><i class="fa-regular fa-heart color-active"></i></a>
                                                    </div>
                                                </div>
                                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Real World Websites with Crash Course</a></h3>
                                                <div class="course-info d-flex align-items-center">
                                                    <div class="rating-img d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-01.svg')}}" alt="Img">
                                                        <p>12+ Lesson</p>
                                                    </div>
                                                    <div class="course-view d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-02.svg')}}" alt="Img">
                                                        <p>70hr 30min</p>
                                                    </div>
                                                </div>
                                                <div class="rating mb-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
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
                                                <a href="{{url('course-details')}}">
                                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-07.jpg')}}">
                                                </a>
                                                <div class="price">
                                                    <h3>$70 <span>$80.00</span></h3>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="course-group d-flex">
                                                    <div class="course-group-img d-flex">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user6.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        <div class="course-name">
                                                            <h4><a href="{{url('instructor-profile')}}">Stella Johnson</a></h4>
                                                            <p>Instructor</p>
                                                        </div>
                                                    </div>
                                                    <div class="course-share d-flex align-items-center justify-content-center">
                                                        <a href="#"><i class="fa-regular fa-heart color-active"></i></a>
                                                    </div>
                                                </div>
                                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Learn JavaScript and Express to become a Expert</a></h3>
                                                <div class="course-info d-flex align-items-center">
                                                    <div class="rating-img d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-01.svg')}}" alt="Img">
                                                        <p>15+ Lesson</p>
                                                    </div>
                                                    <div class="course-view d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-02.svg')}}" alt="Img">
                                                        <p>70hr 30min</p>
                                                    </div>
                                                </div>
                                                <div class="rating mb-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating"><span>4.6</span> (15)</span>
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
                                                <a href="{{url('course-details')}}">
                                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-08.jpg')}}">
                                                </a>
                                                <div class="price combo">
                                                    <h3>FREE</h3>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="course-group d-flex">
                                                    <div class="course-group-img d-flex">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user1.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        <div class="course-name">
                                                            <h4><a href="{{url('instructor-profile')}}">Nicole Brown</a></h4>
                                                            <p>Instructor</p>
                                                        </div>
                                                    </div>
                                                    <div class="course-share d-flex align-items-center justify-content-center">
                                                        <a href="#"><i class="fa-regular fa-heart color-active"></i></a>
                                                    </div>
                                                </div>
                                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Introduction to Programming- Python & Java</a></h3>
                                                <div class="course-info d-flex align-items-center">
                                                    <div class="rating-img d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-01.svg')}}" alt="Img">
                                                        <p>10+ Lesson</p>
                                                    </div>
                                                    <div class="course-view d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/icon/icon-02.svg')}}" alt="Img">
                                                        <p>70hr 30min</p>
                                                    </div>
                                                </div>
                                                <div class="rating mb-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="d-inline-block average-rating"><span>5.0</span> (13)</span>
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
            <!-- /Student Wishlist -->
            
        </div>
    </div>
</div>	
<!-- /Page Content -->

    @endsection