<?php $page = 'register-step-five'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="row">
        @component('components.loginbanner')
        @endcomponent
        <div class="col-lg-8 col-md-6 login-wrap-bg">
            <!-- Login -->
            <div class="login-wrapper">
                <div class="loginbox register-box">
                    <div class="img-logo">
                        <img src="{{ URL::asset('/build/img/logo.svg') }}" class="img-fluid" alt="Logo">
                        <div class="back-home">
                            <a href="{{ url('login') }}">Back to Home</a>
                        </div>
                    </div>
                    <h1>Become An Instructor</h1>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="profile-box">
                                <div class="circle-bar circle-bar1 text-center">
                                    <div class="circle-graph1" data-percent="100">
                                        <p>100% <span>4 of 4</span></p>
                                    </div>
                                </div>
                                <h3>Profile Compleation</h3>
                                <div class="personal-detail d-flex align-items-center">
                                    <span class="active-color"><i class="fa-solid fa-check"></i></span>
                                    <div class="personal-text">
                                        <h4>Personal Details</h4>
                                        <p class="mb-0">Setup Your personal details</p>
                                    </div>
                                </div>
                                <div class="personal-detail d-flex align-items-center">
                                    <span class="active-color"><i class="fa-solid fa-check"></i></span>
                                    <div class="personal-text">
                                        <h4>Social Profiles</h4>
                                        <p class="mb-0">Setup Your Social Profiles links</p>
                                    </div>
                                </div>
                                <div class="personal-detail d-flex align-items-center">
                                    <span class="active-color"><i class="fa-solid fa-check"></i></span>
                                    <div class="personal-text">
                                        <h4>Profile Privacy Settings</h4>
                                        <p class="mb-0">Setup Your Profile Privacy Settings</p>
                                    </div>
                                </div>
                                <div class="personal-detail d-flex align-items-center">
                                    <span class="active-color"><i class="fa-solid fa-check"></i></span>
                                    <div class="personal-text">
                                        <h4>Link Accounts</h4>
                                        <p class="mb-0">Setup Your Linked Accounts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="personal-form">
                                <h4>Your Are Done!</h4>
                                <div class="your-done">
                                    <p>If you need more info, please <a href="{{ url('login') }}">Sign In.</a></p>
                                    <p>Writing headlines for blog posts is as much an art as it is a science and probably
                                        warrants its own post, but for all advise is with what works for your great &
                                        amazing audience.</p>
                                </div>
                                <div class="btn-group work-done d-flex">
                                    <div class="back-btn">
                                        <a href="{{ url('register-step-three') }}" class="btn btn-back">back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Login -->

        </div>

    </div>
@endsection
