<?php $page = 'faq'; ?>
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
            FAQ
        @endslot
    @endcomponent
    @component('components.pagebanner')
        @slot('title')
           About Us
        @endslot
    @endcomponent

    <!-- Help Details -->
    <div class="help-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="help-title">
                        <h1></h1>
                        <center><p>Welcome to Interviewaxis.com, where the future of career preparation meets the cutting-edge technology of today. At Interviewaxis.com, we are dedicated to transforming the way candidates prepare for job interviews by harnessing the power of advanced AI technology. Our mission is to empower individuals to achieve their professional aspirations by providing them with unparalleled tools to enhance their skills, boost their confidence, and gain critical insights into their strengths and areas for improvement.</p></center>
                    </div>
                </div>
            </div>
               <section class="master-skills-sec">
        <div class="container">
            <div class="header-two-title text-center aos-init aos-animate" data-aos="fade-up">
                <p class="tagline">What’s New</p>
                <h2>Master the skills to drive your career</h2>
                <div class="header-two-text aos-init aos-animate" data-aos="fade-up">
                    <p class="mb-0">Get certified, master modern tech skills, and level up your career — whether you’re
                        starting out or a seasoned pro. 95% of eLearning learners report our hands-on content directly
                        helped their careers.</p>
                </div>
            </div>
            <!-- Course Info-->
            <div class="course-info-two">
                <div class="row align-items-center">

                    <!-- Master skills Content -->
                    <div class="col-lg-6 col-md-12 order-lg-0 order-md-0 order-0 aos-init aos-animate" data-aos="fade-up">
                        <div class="join-title-one">
                            <h2>Our Vision</h2>
                            <p>We envision a world where every candidate is thoroughly prepared to face any interview with confidence and competence. By leveraging AI-driven assessments, we aim to bridge the gap between candidates' current capabilities and the demands of the modern job market. Our vision is to create a platform where practice truly meets perfection, setting a new standard for interview preparation.</p>
                        </div>
                    </div>
                    <!-- /Master skills Content -->

                    <!-- Master skills Image -->
                    <div class="col-lg-6 col-md-12 order-lg-1 order-md-1 order-1 aos-init aos-animate" data-aos="fade-up">
                        <div class="join-mentor-img">
                            <div class="winning-two-one">
                                <img src="{{ URL::asset('/build/img/skills/vision.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="joing-icon-award">
                                <img src="{{ URL::asset('/build/img/bg/skill-icon-03.png') }}" alt=""
                                    class="joing-icon-one img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- /Master skills Image -->

                    <!-- Master skills Content -->
                    <div class="col-xl-6 col-lg-7 col-md-12 order-lg-2 order-md-3 order-3 aos-init aos-animate" data-aos="fade-up">
                        <div class="join-mentor-img">
                            <div class="winning-two-two">
                                <img src="{{ URL::asset('/build/img/skills/3056705.jpg') }}" alt=""
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
                    <div class="col-xl-6 col-lg-5 col-md-12 order-lg-3 order-md-2 order-2 aos-init aos-animate" data-aos="fade-up">
                        <div class="join-title-middle">
                            <h2>Our Technology</h2>
                            <p>At Interviewaxis.com, we utilize high-end, cutting-edge AI technology to deliver the most accurate and insightful assessments. Our AI-driven interviews are designed to mimic real-world scenarios, providing candidates with a realistic and comprehensive evaluation of their performance. Through sophisticated algorithms and machine learning, our platform identifies key strengths and pinpoint areas that need improvement, offering personalized feedback and actionable recommendations.</p>
                        </div>
                    </div>
                    <!-- /Master skills Image -->

                    <!-- Master skills Content -->
                    <div class="col-xl-6 col-lg-7 col-md-12 order-lg-4 order-md-4 order-4 aos-init aos-animate" data-aos="fade-up">
                        <div class="join-title-one">
                            <h2>Our Commitment</h2>
                            <p>We are committed to the success of every candidate who uses our platform. Our goal is to not only prepare candidates for interviews but to also equip them with the skills and confidence needed to excel in their careers. With Interviewaxis.com, candidates receive:</p>
                            <p><b>Detailed Performance Analysis:</b> In-depth evaluations of interview responses, highlighting strengths and areas for improvement.</p>
                            <p><b>Personalized Feedback:</b> Tailored advice and strategies to enhance performance and build confidence.</p>
                            <p><b>Skill Enhancement:</b>Focused practice sessions designed to sharpen skills and ensure readiness for any interview scenario.</p>
                            <p><b>Ongoing Support:</b>Continuous access to resources and tools to help candidates stay prepared and confident throughout their job search journey.</p>
                        </div>
                    </div>
                    <!-- /Master skills Content -->

                    <!-- Master skills Image -->
                    <div class="col-xl-6 col-lg-5 col-md-12 order-lg-5 order-md-5 order-5 aos-init aos-animate" data-aos="fade-up">
                        <div class="join-mentor-img mb-0">
                            <div class="winning-two-three">
                                <img src="{{ URL::asset('/build/img/skills/comitment.jpg') }}" alt=""
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
                </div>
            </div>
            
    <!-- /Help Details -->
@endsection
