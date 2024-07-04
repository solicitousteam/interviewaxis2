<?php $page = 'blog-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('item1')
            Pages
        @endslot
        @slot('item2')
            Blog Grid
        @endslot
    @endcomponent
    <!-- Blog Grid -->
    <section class="course-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/build/img/blog/representations-user-experience-interface-design.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-grid-box">
                                    <div class="blog-info clearfix">
                                        <div class="post-left">
                                            <ul>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-22.svg') }}"
                                                        alt="">Jun 14, 2024</li>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-23.svg') }}"
                                                        alt="">Programming, Web Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}"> Latest Technologies to Become a Successful Frontend Developer</a></h3>
                                    <div class="blog-content blog-read">
                                        <p>In the ever-evolving world of web development, staying updated with the latest technologies[…]</p>
                                        <a href="{{ url('blog-details') }}" class="read-more btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details2') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/build/img/blog/') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-grid-box">
                                    <div class="blog-info clearfix">
                                        <div class="post-left">
                                            <ul>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-22.svg') }}"
                                                        alt="">May 24, 2024</li>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-23.svg') }}"
                                                        alt="">Programming, Courses</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ url('blog-details2') }}">Technologies Shaping the Future of Job Interviews</a></h3>
                                    <div class="blog-content blog-read">
                                        <p>Advancements in technology are reshaping how interviews are conducted, offering new […]</p>
                                        <a href="{{ url('blog-details2') }}" class="read-more btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details3') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/build/img/blog/resume-apply-work-form-concept.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-grid-box">
                                    <div class="blog-info clearfix">
                                        <div class="post-left">
                                            <ul>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-22.svg') }}"
                                                        alt="">Jun 14, 2023</li>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-23.svg') }}"
                                                        alt="">Programming, Web Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ url('blog-details3') }}"> Power of wellcafted CV</a></h3>
                                    <div class="blog-content blog-read">
                                        <p>In today's competitive job market, having a well-structured CV is crucial. A clear and concise CV allows recruiters to quickly find the information they need and understand your qualifications. A crisp structure highlights[…]</p>
                                        <a href="{{ url('blog-details3') }}" class="read-more btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details4') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/build/img/blog/computer-program-coding-screen.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-grid-box">
                                    <div class="blog-info clearfix">
                                        <div class="post-left">
                                            <ul>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-22.svg') }}"
                                                        alt="">Jun 18, 2023</li>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-23.svg') }}"
                                                        alt="">Programming, Courses</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ url('blog-details4') }}">Latest Tech to lean for a Backend Developer</a></h3>
                                    <div class="blog-content blog-read">
                                        <p>In the ever-evolving world of technology, staying ahead as a backend developer requires […]</p>
                                        <a href="{{ url('blog-details4') }}" class="read-more btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details5') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/build/img/blog/person-front-computer-working-html.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-grid-box">
                                    <div class="blog-info clearfix">
                                        <div class="post-left">
                                            <ul>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-22.svg') }}"
                                                        alt="">Jun 26, 2023</li>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-23.svg') }}"
                                                        alt="">Programming, Web Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ url('blog-details5') }}">Fast-Track Your Fullstack Developer Journey: A Step-by-Step Guide</a></h3>
                                    <div class="blog-content blog-read">
                                        <p>The demand for fullstack developers has never been higher. Companies are seeking  […]</p>
                                        <a href="{{ url('blog-details5') }}" class="read-more btn btn-primary">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details6') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/build/img/blog/medium-shot-woman-working-with-laptop.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-grid-box">
                                    <div class="blog-info clearfix">
                                        <div class="post-left">
                                            <ul>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-22.svg') }}"
                                                        alt="">Feb 14, 2023</li>
                                                <li><img class="img-fluid"
                                                        src="{{ URL::asset('/build/img/icon/icon-23.svg') }}"
                                                        alt="">Programming, Courses</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ url('blog-details6') }}">Nailing the Virtual Interview</a></h3>
                                    <div class="blog-content blog-read">
                                        <p>You’ve prepared well, and now it’s time to shine in your virtual interview.Here’s how to make a lasting impression: 1. Punctuality is Key
Log In Early: Log in 10-15 minutes before the scheduled  time. This shows punctuality and gives you time to address 
 […]</p>
                                        <a href="{{ url('blog-details6') }}" class="read-more btn btn-primary">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                    </div>

                    @component('components.pagination')
                    @endcomponent

                </div>

                @component('components.blogsidebar')
                @endcomponent

            </div>
        </div>
    </section>
    <!-- /Blog Grid -->
@endsection
