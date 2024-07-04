<?php $page = 'instructor-quiz-attempts'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Quiz Attempts
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Quiz Attempts
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row">

                @component('components.sidebar')
                @endcomponent

                <!-- Instructor Quiz -->
                <div class="col-xl-9 col-lg-9">	

                    <div class="settings-widget card-details">
                        <div class="settings-menu p-0">
                            <div class="profile-heading">
                                <h3>Quiz Attempts</h3>
                            </div>
                            <div class="checkout-form">
                                <div class="announcement-filter-head">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-block">
                                                <label  class="form-label">Courses</label>
                                                <select class="form-select select country-select"  name="sellist1">
                                                    <option>All</option>
                                                    <option>Javascript Course</option>
                                                    <option> Fullstack Web Developer</option>
                                                    <option>UI/UX Design</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-block">
                                                <label  class="form-label">Sort By</label>
                                                <select class="form-select select country-select"  name="sellist1">
                                                    <option>Ascending</option>
                                                    <option>Descending</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-block">
                                                <label  class="form-label">Created Date</label>
                                                <div class="datepicker-icon">
                                                    <span class="form-icon">
                                                        <i class="bx bx-calendar"></i>
                                                    </span>
                                                    <input type="text" class="form-control datetimepicker">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive custom-table">

                                    <!-- Referred Users-->
                                    <table class="table table-nowrap mb-0">
                                        <thead>
                                          <tr>
                                            <th>Quiz Info</th>
                                            <th>Question</th>
                                            <th>Total Marks</th>
                                            <th>Correct Answers</th>
                                            <th>Incorrect Answers</th>
                                            <th>Earned Marks</th>
                                            <th>Result</th>
                                            <th>Details</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="quiz-table">
                                                        <p>March 12, 2024 05:40 PM</p>
                                                        <p>Quiz <i class="bx bx-info-circle"></i></p>
                                                        <p><span>Student</span> : studentdemo </p>
                                                    </div>
                                                </td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1(50%)</td>
                                                <td><span class="resut-badge badge-light-danger">Fail</span></td>
                                                <td>
                                                    <a href="{{url('student-quiz-details')}}" class="btn btn-light-danger quiz-view">Details</a>
                                                    <a href="#" class="quiz-del ms-3"><i class="bx bx-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="quiz-table">
                                                        <p>March 05, 2024 04:15 PM</p>
                                                        <p>Quiz <i class="bx bx-info-circle"></i></p>
                                                        <p><span>Student</span> : studentdemo </p>
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>2(67%)</td>
                                                <td><span class="resut-badge badge-light-danger">Fail</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{url('instructor-quiz-attempts-details')}}" class="btn btn-light-danger quiz-view">Details</a>
                                                        <a href="#" class="quiz-del ms-3"><i class="bx bx-trash"></i></a>
                                                    </div>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="quiz-table">
                                                        <p>February 27, 2024 03:20 PM</p>
                                                        <p>Quiz <i class="bx bx-info-circle"></i></p>
                                                        <p><span>Student</span> : studentdemo </p>
                                                    </div>
                                                </td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>2(40%)</td>
                                                <td><span class="resut-badge badge-light-danger">Fail</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{url('instructor-quiz-attempts-details')}}" class="btn btn-light-danger quiz-view">Details</a>
                                                        <a href="#" class="quiz-del ms-3"><i class="bx bx-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="quiz-table">
                                                        <p>February 16, 2024 02:40 PM</p>
                                                        <p>Quiz <i class="bx bx-info-circle"></i></p>
                                                        <p><span>Student</span> : studentdemo </p>
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>0</td>
                                                <td>3(100%)</td>
                                                <td><span class="resut-badge badge-light-success">Pass</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{url('instructor-quiz-attempts-details')}}" class="btn btn-light-danger quiz-view">Details</a>
                                                        <a href="#" class="quiz-del ms-3"><i class="bx bx-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="quiz-table">
                                                        <p>January 19, 2024 11:00 AM</p>
                                                        <p>Quiz <i class="bx bx-info-circle"></i></p>
                                                        <p><span>Student</span> : studentdemo </p>
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>0</td>
                                                <td>3</td>
                                                <td>0(0%)</td>
                                                <td><span class="resut-badge badge-light-danger">Fail</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{url('instructor-quiz-attempts-details')}}" class="btn btn-light-danger quiz-view">Details</a>
                                                        <a href="#" class="quiz-del ms-3"><i class="bx bx-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="quiz-table">
                                                        <p>January 08, 2024 09:30 AM</p>
                                                        <p>Quiz <i class="bx bx-info-circle"></i></p>
                                                        <p><span>Student</span> : studentdemo </p>
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>1(33%)</td>
                                                <td><span class="resut-badge badge-light-danger">Fail</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{url('instructor-quiz-attempts-details')}}" class="btn btn-light-danger quiz-view">Details</a>
                                                        <a href="#" class="quiz-del ms-3"><i class="bx bx-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                <!-- /Instructor Quiz -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
