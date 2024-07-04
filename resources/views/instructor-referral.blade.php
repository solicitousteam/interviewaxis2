<?php $page = 'instructor-referral'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Referrals
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Referrals
        @endslot
    @endcomponent

  <!-- Page Wrapper -->
  <div class="page-content">
    <div class="container">
        <div class="row">
            
            @component('components.sidebar')
            @endcomponent 
            
            <!-- Instructor Referral -->
            <div class="col-xl-9 col-lg-9">	

                <div class="settings-widget card-details">
                    <div class="settings-menu p-0">
                        <div class="profile-heading">
                            <h3>Referrals</h3>
                        </div>
                        <div class="checkout-form pb-0">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card refer-card">
                                        <div class="card-body">
                                            <h6>Net Earnings</h6>
                                            <h3>$12,000</h3>
                                            <p>Earning this month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card refer-card">
                                        <div class="card-body">
                                            <h6>Balance</h6>
                                            <h3>$15,000</h3>
                                            <p>In the Wallet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card refer-card">
                                        <div class="card-body">
                                            <h6>Avg Deal Size</h6>
                                            <h3>$2,000</h3>
                                            <p>Earning this month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card refer-card">
                                        <div class="card-body">
                                            <h6>No of Referrals</h6>
                                            <h3>10</h3>
                                            <p>In this month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 d-flex">
                                    <div class="card link-box flex-fill">
                                        <div class="card-body">
                                            <h5>Your Referral Link</h5>
                                            <p>You can earn easily money by copy and share the below link to your friends</p>
                                            <div class="input-block">
                                                <input type="text" class="form-control" value="https://dreamslmscourse.com/reffer/?refid=345re667877k9">
                                            </div>
                                            <a href="javascript:void(0);">Copy link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 d-flex">
                                    <div class="card link-box flex-fill">
                                        <div class="card-body">
                                            <h5>Withdraw Money</h5>
                                            <ul>
                                                <li>Withdraw money securily to your bank account. </li>
                                                <li>Commision is $25 per transaction under $10,000</li>
                                            </ul>
                                            <a href="javascript:void(0);">Withdraw Money</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="settings-widget card-details">
                    <div class="settings-menu p-0">
                        <div class="profile-heading d-flex align-items-center justify-content-between">
                            <h3>Referred Users</h3>
                            <div class="icon-form mb-0">
                                <span class="form-icon"><i class="bx bx-calendar-edit"></i></span>
                                <input type="text" class="form-control bookingrange" placeholder="">
                            </div>
                        </div>
                        <div class="checkout-form">
                            <div class="table-responsive custom-table">

                                <table class="table table-nowrap mb-0">
                                    <thead>
                                      <tr>
                                        <th>Referred ID</th>
                                        <th>Referrals</th>
                                        <th>URL</th>
                                        <th></th>
                                        <th>Visits</th>
                                        <th>Total Earned</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="tab-title">09341</a></td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="{{url('student-profile')}}" class="avatar">
                                                        <img class="avatar-img" src="{{URL::asset('/build/img/user/user2.jpg')}}" alt="User Image">
                                                    </a>
                                                    <a href="{{url('student-profile')}}">Thompson Hicks</a>
                                                </h2>
                                            </td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon" data-bs-toggle="tooltip" title="Copy"><i class="bx bx-paste"></i></a>
                                            </td>
                                            <td>10</td>
                                            <td>$45.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="tab-title">09342</a></td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="{{url('student-profile')}}" class="avatar">
                                                        <img class="avatar-img" src="{{URL::asset('/build/img/user/user4.jpg')}}" alt="User Image">
                                                    </a>
                                                    <a href="{{url('student-profile')}}">Jennifer Tovar</a>
                                                </h2>
                                            </td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon" data-bs-toggle="tooltip" title="Copy"><i class="bx bx-paste"></i></a>
                                            </td>
                                            <td>15</td>
                                            <td>$75.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="tab-title">09343</a></td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="{{url('student-profile')}}" class="avatar">
                                                        <img class="avatar-img" src="{{URL::asset('/build/img/user/user3.jpg')}}" alt="User Image">
                                                    </a>
                                                    <a href="{{url('student-profile')}}">James Schulte</a>
                                                </h2>
                                            </td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon" data-bs-toggle="tooltip" title="Copy"><i class="bx bx-paste"></i></a>
                                            </td>
                                            <td>20</td>
                                            <td>$100.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="tab-title">09344</a></td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="{{url('student-profile')}}" class="avatar">
                                                        <img class="avatar-img" src="{{URL::asset('/build/img/user/user1.jpg')}}" alt="User Image">
                                                    </a>
                                                    <a href="{{url('student-profile')}}">Kristy Cardona</a>
                                                </h2>
                                            </td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon" data-bs-toggle="tooltip" title="Copy"><i class="bx bx-paste"></i></a>
                                            </td>
                                            <td>1</td>
                                            <td>$44.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="tab-title">09345</a></td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="{{url('student-profile')}}" class="avatar">
                                                        <img class="avatar-img" src="{{URL::asset('/build/img/user/user14.jpg')}}" alt="User Image">
                                                    </a>
                                                    <a href="{{url('student-profile')}}">William Aragon</a>
                                                </h2>
                                            </td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon" data-bs-toggle="tooltip" title="Copy"><i class="bx bx-paste"></i></a>
                                            </td>
                                            <td>5</td>
                                            <td>$25.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="tab-title">09346</a></td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="{{url('student-profile')}}" class="avatar">
                                                        <img class="avatar-img" src="{{URL::asset('/build/img/user/user8.jpg')}}" alt="User Image">
                                                    </a>
                                                    <a href="{{url('student-profile')}}">Shirley Lis</a>
                                                </h2>
                                            </td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon" data-bs-toggle="tooltip" title="Copy"><i class="bx bx-paste"></i></a>
                                            </td>
                                            <td>500</td>
                                            <td>$160.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="tab-title">09347</a></td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="{{url('student-profile')}}" class="avatar">
                                                        <img class="avatar-img" src="{{URL::asset('/build/img/user/user2.jpg')}}" alt="User Image">
                                                    </a>
                                                    <a href="{{url('student-profile')}}">John Brewer</a>
                                                </h2>
                                            </td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon" data-bs-toggle="tooltip" title="Copy"><i class="bx bx-paste"></i></a>
                                            </td>
                                            <td>187</td>
                                            <td>$150.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="tab-title">09348</a></td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="{{url('student-profile')}}" class="avatar">
                                                        <img class="avatar-img" src="{{URL::asset('/build/img/user/user5.jpg')}}" alt="User Image">
                                                    </a>
                                                    <a href="{{url('student-profile')}}">Doris Hughes</a>
                                                </h2>
                                            </td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon" data-bs-toggle="tooltip" title="Copy"><i class="bx bx-paste"></i></a>
                                            </td>
                                            <td>10</td>
                                            <td>$45.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="tab-title">09349</a></td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="{{url('student-profile')}}" class="avatar">
                                                        <img class="avatar-img" src="{{URL::asset('/build/img/user/user13.jpg')}}" alt="User Image">
                                                    </a>
                                                    <a href="{{url('student-profile')}}">Arthur Nalley</a>
                                                </h2>
                                            </td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon" data-bs-toggle="tooltip" title="Copy"><i class="bx bx-paste"></i></a>
                                            </td>
                                            <td>15</td>
                                            <td>$10.00</td>
                                        </tr>
                                        <tr >
                                            <td><a href="javascript:void(0);" class="tab-title">09350</a></td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="{{url('student-profile')}}" class="avatar">
                                                        <img class="avatar-img" src="{{URL::asset('/build/img/user/user6.jpg')}}" alt="User Image">
                                                    </a>
                                                    <a href="{{url('student-profile')}}">Sarah Martinez</a>
                                                </h2>
                                            </td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon" data-bs-toggle="tooltip" title="Copy"><i class="bx bx-paste"></i></a>
                                            </td>
                                            <td>98</td>
                                            <td>$10.00</td>
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
            <!-- /Instructor Referral -->
            
        </div>
    </div>
</div>	
<!-- /Page Wrapper -->
@endsection