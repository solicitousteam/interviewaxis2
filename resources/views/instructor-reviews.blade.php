<?php $page = 'instructor-reviews'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Reviews
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Reviews
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row">

                @component('components.sidebar')
                @endcomponent

                <!-- Instructor Reviews -->
                <div class="col-xl-9 col-lg-9">

                    <div class="settings-widget card-details">
                        <div class="settings-menu p-0">
                            <div class="profile-heading">
                                <h3>Reviews</h3>
                            </div>
                            <div class="checkout-form">
                                <div class="wishlist-tab">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="active" data-bs-toggle="tab"
                                                data-bs-target="#received-_review">Received</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#given_review">Given</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="received-_review">
                                        <!-- Review -->
                                        <div class="review-wrap">
                                            <div class="review-user-info">
                                                <div class="reviewer">
                                                    <div class="review-img">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/build/img/user/user16.jpg') }}"
                                                                alt="img"></a>
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h6><a href="javascript:void(0);">Ronald Richard</a></h6>
                                                        <p>6 months ago</p>
                                                    </div>
                                                </div>
                                                <div class="reviewer-rating">
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                </div>
                                            </div>
                                            <div class="review-content">
                                                <p>
                                                    The instructor demonstrated unparalleled expertise and a deep
                                                    understanding of the subject,
                                                    making even the most complex topics approachable. Their passion for
                                                    teaching was evident in every
                                                    lecture, captivating students and fostering a love for learning.
                                                    The course was well-structured, with a clear progression that built on
                                                    previous knowledge seamlessly.
                                                </p>
                                                <div class="review-action">
                                                    <a href="javascript:void(0);">Reply </a>
                                                    <a href="javascript:void(0);">View(0)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Review -->
                                        <!-- Review -->
                                        <div class="review-wrap">
                                            <div class="review-user-info">
                                                <div class="reviewer">
                                                    <div class="review-img">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/build/img/user/user14.jpg') }}"
                                                                alt="img"></a>
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h6><a href="javascript:void(0);">Dwayne Stevens</a></h6>
                                                        <p>8 months ago</p>
                                                    </div>
                                                </div>
                                                <div class="reviewer-rating">
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-content">
                                                <p>
                                                    This course was a masterclass in effective online learning, blending
                                                    interactive elements with comprehensive lectures that made each topic
                                                    engaging.
                                                    The instructor's ability to connect with students,
                                                    even through a screen, created a supportive and motivating learning
                                                    environment.
                                                </p>
                                                <div class="review-action">
                                                    <a href="javascript:void(0);">Reply </a>
                                                    <a href="javascript:void(0);">View(1)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Review -->

                                        <!-- Review -->
                                        <div class="review-wrap reply-review">
                                            <div class="review-user-info">
                                                <div class="reviewer">
                                                    <div class="review-img">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/build/img/user/user-17.jpg') }}"
                                                                alt="img"></a>
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h6><a href="javascript:void(0);">Eugene Andre</a></h6>
                                                        <p>8 months ago</p>
                                                    </div>
                                                </div>
                                                <div class="reviewer-rating">
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-content">
                                                <p>
                                                    I'm thrilled to hear that the course exceeded your expectations and that
                                                    you found the
                                                    interactive elements and lectures engaging. Creating an effective online
                                                    learning environment
                                                    is a top priority for me, and your feedback validates these efforts.
                                                    Thank you for your active
                                                    participation and for being such a motivated learner.
                                                </p>
                                                <div class="review-action">
                                                    <a href="javascript:void(0);">Reply </a>
                                                    <a href="javascript:void(0);">View(0)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Review -->

                                        <!-- Review -->
                                        <div class="review-wrap">
                                            <div class="review-user-info">
                                                <div class="reviewer">
                                                    <div class="review-img">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/build/img/user/user13.jpg') }}"
                                                                alt="img"></a>
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h6><a href="javascript:void(0);">John Truman</a></h6>
                                                        <p>9 months ago</p>
                                                    </div>
                                                </div>
                                                <div class="reviewer-rating">
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-content">
                                                <p>
                                                    George, you've made commendable progress in understanding the basics of
                                                    data science.
                                                    Your project showcased a good grasp of data manipulation techniques.
                                                    However, I've observed challenges
                                                    in your approach to statistical modeling, where a clearer understanding
                                                    of concepts is needed.
                                                </p>
                                                <div class="review-action">
                                                    <a href="javascript:void(0);">Reply </a>
                                                    <a href="javascript:void(0);">View(0)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Review -->

                                        <!-- Review -->
                                        <div class="review-wrap">
                                            <div class="review-user-info">
                                                <div class="reviewer">
                                                    <div class="review-img">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/build/img/user/user12.jpg') }}"
                                                                alt="img"></a>
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h6><a href="javascript:void(0);">William Maddox</a></h6>
                                                        <p>1 year ago</p>
                                                    </div>
                                                </div>
                                                <div class="reviewer-rating">
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-content">
                                                <p>
                                                    The instructor managed to create an online course that was as
                                                    engaging and informative as any in-person class. Their expertise was
                                                    evident in every
                                                    lesson, but it was their approachability and dedication to student
                                                    learning that really
                                                    made a difference. The course content
                                                    was rich and varied, offering a deep dive into the subject matter
                                                </p>
                                                <div class="review-action">
                                                    <a href="javascript:void(0);">Reply </a>
                                                    <a href="javascript:void(0);">View(0)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Review -->
                                    </div>
                                    <div class="tab-pane fade" id="given_review">
                                        <!-- Review -->
                                        <div class="review-wrap">
                                            <div class="review-user-info">
                                                <div class="reviewer">
                                                    <div class="review-img">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/build/img/user/user-17.jpg') }}"
                                                                alt="img"></a>
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h6><a href="javascript:void(0);">Eugene Andre</a></h6>
                                                        <p>6 months ago</p>
                                                    </div>
                                                </div>
                                                <div class="reviewer-rating">
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                </div>
                                            </div>
                                            <div class="review-content">
                                                <p>
                                                    Stephen has shown exceptional understanding and engagement in the
                                                    "Introduction to
                                                    Economics" course. Your analytical skills and ability to apply economic
                                                    theories to real-world
                                                    scenarios have been impressive. Your active participation
                                                    in class discussions have also contributed positively to the learning
                                                    environment. Keep up the great work!
                                                </p>
                                                <div class="review-action">
                                                    <a href="javascript:void(0);">Edit</a>
                                                    <a href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Review -->
                                        <!-- Review -->
                                        <div class="review-wrap">
                                            <div class="review-user-info">
                                                <div class="reviewer">
                                                    <div class="review-img">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/build/img/user/user-17.jpg') }}"
                                                                alt="img"></a>
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h6><a href="javascript:void(0);">Eugene Andre</a></h6>
                                                        <p>8 months ago</p>
                                                    </div>
                                                </div>
                                                <div class="reviewer-rating">
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-content">
                                                <p>
                                                    Lashawn , I've noticed your keen interest in "Modern Art History" and
                                                    appreciate your efforts to
                                                    understand complex concepts. However, I encourage you to delve deeper
                                                    into the assigned readings and
                                                    improve your citation skills
                                                    in your essays. Engaging more critically with the material will enhance
                                                    your analyses and academic writing.
                                                </p>
                                                <div class="review-action">
                                                    <a href="javascript:void(0);">Edit</a>
                                                    <a href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Review -->

                                        <!-- Review -->
                                        <div class="review-wrap">
                                            <div class="review-user-info">
                                                <div class="reviewer">
                                                    <div class="review-img">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/build/img/user/user-17.jpg') }}"
                                                                alt="img"></a>
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h6><a href="javascript:void(0);">Eugene Andre</a></h6>
                                                        <p>9 months ago</p>
                                                    </div>
                                                </div>
                                                <div class="reviewer-rating">
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-content">
                                                <p>
                                                    George, you've made commendable progress in understanding the basics of
                                                    data science.
                                                    Your project showcased a good grasp of data manipulation techniques.
                                                    However, I've observed challenges
                                                    in your approach to statistical modeling, where a clearer understanding
                                                    of concepts is needed.
                                                </p>
                                                <div class="review-action">
                                                    <a href="javascript:void(0);">Edit</a>
                                                    <a href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Review -->

                                        <!-- Review -->
                                        <div class="review-wrap">
                                            <div class="review-user-info">
                                                <div class="reviewer">
                                                    <div class="review-img">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/build/img/user/user-17.jpg') }}"
                                                                alt="img"></a>
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h6><a href="javascript:void(0);">Eugene Andre</a></h6>
                                                        <p>1 year ago</p>
                                                    </div>
                                                </div>
                                                <div class="reviewer-rating">
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star filled"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-content">
                                                <p>
                                                    Lisa, while your assignments for "Introduction to Philosophy" show basic
                                                    understanding,
                                                    I encourage you to engage more deeply with the course materials and
                                                    participate in forum discussions.
                                                    Sharing your thoughts and questions
                                                    can greatly enhance your comprehension and contribute to our class
                                                    community.
                                                </p>
                                                <div class="review-action">
                                                    <a href="javascript:void(0);">Edit</a>
                                                    <a href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Review -->
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
                <!-- Instructor Reviews -->



            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection