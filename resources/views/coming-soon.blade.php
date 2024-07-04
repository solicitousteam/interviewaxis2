<?php $page = 'come-soon'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="error-box">
        <div class="error-logo">
            <a href="{{ url('index') }}">
                <img src="{{ URL::asset('/build/img/pngmiddel.png') }}" class="img-fluid" alt="Logo">
            </a>
        </div>
        <h4>WE ARE COMING SOON!!</h4>
        <h6 class="font-weight-normal">Stay tuned for something amazing</h6>
        <div class="countdown-container">
            <div class="countdown-el days-c">
                <p class="big-text" id="days">0</p>
                <span>Days</span>
            </div>
            <div class="countdown-el hours-c">
                <p class="big-text" id="hours">0</p>
                <span>hrs</span>
            </div>
            <div class="countdown-el mins-c">
                <p class="big-text" id="mins">0</p>
                <span>mins</span>
            </div>
        </div>
        <div class="error-box-img">
            <img src="{{ URL::asset('/build/img/come-soon.png') }}" alt="" class="img-fluid">
        </div>
        <div class="come-soon-box">
            <h5 class="h4 font-weight-normal">Subscribe to our mailing list to get latest updates</h5>
            <div class="subscribe-soon">
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email">
                        <button class="btn btn-danger" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="social-icon-soon">
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=61560660038174"><i class="fa-brands fa-facebook face-book"></i></a></li>
                    <li><a href="https://x.com/interviewaxis"><i class="fa-brands fa-twitter twit-ter"></i></a></li>
                    <li><a href="https://www.instagram.com/interviewaxis?igsh=MW9jemR2NWhsYWk1aA=="><i class="fa-brands fa-instagram insta-gram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/interviewaxis/"><i class="fa-brands fa-linkedin linked-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
