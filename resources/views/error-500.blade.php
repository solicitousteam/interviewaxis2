<?php $page = 'error-500'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="error-box">
        <div class="error-logo">
            <a href="{{ url('index') }}">
                <img src="{{ URL::asset('/build/img/logo.svg') }}" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="error-box-img">
            <img src="{{ URL::asset('/build/img/error.png') }}" alt="" class="img-fluid">
        </div>
        <h3 class="h2 mb-3"> Oops! 500 Internal Server Error</h3>
        <p class="h4 font-weight-normal">We are working on fixing the problem. We back soon</p>
        <a href="{{ url('index') }}" class="btn btn-primary">Back to Home</a>
    </div>
@endsection
