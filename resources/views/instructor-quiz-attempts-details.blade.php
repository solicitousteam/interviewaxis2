<?php $page = 'instructor-quiz-attempts-details'; ?>
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
            
            <!-- Instructor Quiz Details -->
            <div class="col-xl-9 col-lg-9">	

                <div class="quiz-details">
                    <a href="{{url('instructor-quiz-attempts')}}" class="back-link"><i class="bx bx-left-arrow-alt"></i>Back</a>
                    <p>Course: Learn Angular Fundamentals Beginners Guide</p>
                    <h6>Quiz </h6>
                    <ul>
                        <li>Student: studentdemo</li>
                        <li>Quiz Time: 10 Minutes</li>
                        <li>Attempt Time: 7 Seconds</li>
                    </ul>
                </div>

                <!-- Quiz -->
                <div class="table-quiz">					
                    <div class="table-responsive custom-table">											
                        <table class="table table-nowrap mb-0">
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>Question</th>
                                <th>Total Marks</th>
                                <th>Pass Marks</th>
                                <th>Correct Answers</th>
                                <th>Incorrect Answers</th>
                                <th>Earned Marks</th>
                                <th>Result</th>
                                
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
                                    <td>3</td>
                                    <td>3.00</td>
                                    <td>2.40(80%)</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>2.00(67%)</td>
                                    <td><span class="resut-badge badge-light-danger">Fail</span></td>
                                    
                                </tr>
                            </tbody>
                         </table>
                    </div>
                </div>
                <!-- /Quiz -->

                <!-- Quiz Overview -->
                <div class="quiz-overview">
                    <h6>Quiz Overview</h6>
                    <div class="table-responsive custom-table">											
                        <table class="table table-nowrap mb-0">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Type</th>
                                <th>Questions</th>
                                <th>Given  Answers</th>
                                <th>Correct Answers</th>
                                <th>Result</th>
                                <th>Review</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <i class="bx bxs-adjust"></i>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="True / False"><i class="bx bxs-info-circle"></i></a>
                                    </td>
                                    <td>Has Angular been fully supported by all browsers?</td>
                                    <td>True</td>
                                    <td>False</td>
                                    <td><span class="resut-badge badge-light-danger">Incorrect</span></td>
                                    <td>
                                        <a href="#" class="text-success me-2"><i class="bx bx-check"></i></a>
                                        <a href="#" class="text-danger"><i class="bx bx-x"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <i class="bx bxs-adjust"></i>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="True / False"><i class="bx bxs-info-circle"></i></a>
                                    </td>
                                    <td>Has Angular been fully supported by all browsers?</td>
                                    <td>True</td>
                                    <td>True</td>
                                    <td><span class="resut-badge badge-light-success">Correct</span></td>
                                    <td>
                                        <a href="#" class="text-success me-2"><i class="bx bx-check"></i></a>
                                        <a href="#" class="text-danger"><i class="bx bx-x"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <i class="bx bxs-adjust"></i>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="True / False"><i class="bx bxs-info-circle"></i></a>
                                    </td>
                                    <td>Has Angular been fully supported by all browsers?</td>
                                    <td>True</td>
                                    <td>True</td>
                                    <td><span class="resut-badge badge-light-success">Correct</span></td>
                                    <td>
                                        <a href="#" class="text-success me-2"><i class="bx bx-check"></i></a>
                                        <a href="#" class="text-danger"><i class="bx bx-x"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /Quiz Overview -->

                <div class="input-block quiz-description-box">
                    <label class="form-label">Instructor Feedback</label>
                    <div id="editor"></div>
                </div>

                <a href="#" class="btn btn-primary quiz-update-btn">Update</a>
            </div>	
            <!-- /Instructor Quiz Details -->

        </div>
    </div>
</div>	
<!-- /Page Content -->
@endsection