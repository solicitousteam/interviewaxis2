<?php $page = 'support'; ?>
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
            Support
        @endslot
    @endcomponent
    @component('components.pagebanner')
        @slot('title')
            Support
        @endslot
    @endcomponent

    <!-- Help Details -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <div class="support-wrap">
                        <h5>Submit a Request</h5>
                        <form action="#">
                            <div class="input-block">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="Enter your first Name">
                            </div>
                            <div class="input-block">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Enter your email address">
                            </div>
                            <div class="input-block">
                                <label>Subject</label>
                                <input type="text" class="form-control" placeholder="Enter your Subject">
                            </div>
                            <div class="input-block">
                                <label>Description</label>
                                <textarea class="form-control" placeholder="Write down here" rows="4"></textarea>
                            </div>
                            <button class="btn btn-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Help Details -->
@endsection
