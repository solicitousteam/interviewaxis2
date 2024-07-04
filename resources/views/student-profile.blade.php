<?php $page = 'student-profile'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            My Profile
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            My Profile
        @endslot
    @endcomponent


    <!-- Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row">

                @component('components.sidebar')
                @endcomponent

                <!-- Student Profile -->
                <div class="col-xl-9 col-lg-9">

                    <div class="settings-widget card-details mb-0">
                        <div class="settings-menu p-0">
                            <div class="profile-heading">
                                <h3>My Profile</h3>
                            </div>
                            <div class="checkout-form personal-address">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>First Name</h6>
                                            <p>Ronald</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>Last Name</h6>
                                            <p>Richard</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>User Name</h6>
                                            <p>studentdemo</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>Email</h6>
                                            <p>studentdemo@example.com</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>Phone Number</h6>
                                            <p>90154-91036</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="contact-info mb-0">
                                            <h6>Bio</h6>
                                            <p>Hello! I'm Ronald Richard. I'm passionate about developing innovative
                                                software solutions, analyzing classic literature. I aspire to become a
                                                software developer, work as an editor. In my free time, I enjoy coding,
                                                reading, hiking etc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Profile -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection