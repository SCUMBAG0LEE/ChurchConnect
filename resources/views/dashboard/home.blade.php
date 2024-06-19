
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Welcome {{ Session::get('name') }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ Session::get('name') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Members</h6>
                                <h3>12345</h3>
                            </div>
                            <div class="db-icon">
                                <img src="{{ URL::to('assets/img/icons/dash-icon-01.png') }}" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Events</h6>
                                <h3>10</h3>
                            </div>
                            <div class="db-icon">
                                <img src="{{ URL::to('assets/img/icons/dash-icon-02.png') }}" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Church Branch</h6>
                                <h3>30+</h3>
                            </div>
                            <div class="db-icon">
                                <img src="{{ URL::to('assets/img/icons/dash-icon-03.svg') }}" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Donations</h6>
                                <h3>$505</h3>
                            </div>
                            <div class="db-icon">
                                <img src="{{ URL::to('assets/img/icons/dash-icon-04.svg') }}" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-6">

                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Overview</h5>
                            </div>
                            <div class="col-6">
                                <ul class="chart-list-out">
                                    <li><span class="circle-blue"></span>Workers</li>
                                    <li><span class="circle-green"></span>Members</li>
                                    <li class="star-menus"><a href="javascript:;"><i
                                                class="fas fa-ellipsis-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="apexcharts-area"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-lg-6">

                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Number of Members</h5>
                            </div>
                            <div class="col-6">
                                <ul class="chart-list-out">
                                    <li><span class="circle-blue"></span>Female</li>
                                    <li><span class="circle-green"></span>Male</li>
                                    <li class="star-menus"><a href="javascript:;"><i
                                                class="fas fa-ellipsis-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="bar"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 d-flex">

            <div class="card flex-fill member-space comman-shadow">
    <div class="card-header d-flex align-items-center">
        <h5 class="card-title">Top Donations</h5>
        <ul class="chart-list-out member-ellips">
            <li class="star-menus">
                <a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table star-member table-hover table-center table-borderless table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th class="text-center">Donation Amount</th>
                        <th class="text-center">Percentage of Total</th>
                        <th class="text-end">Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-nowrap">
                            <div>DON2209</div>
                        </td>
                        <td class="text-nowrap">
                            <a href="profile.html">
                                <img class="rounded-circle" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}" width="25" alt="Donor"> John Doe
                            </a>
                        </td>
                        <td class="text-center">$1185</td>
                        <td class="text-center">15%</td>
                        <td class="text-end">
                            <div>2019</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">
                            <div>DON1245</div>
                        </td>
                        <td class="text-nowrap">
                            <a href="profile.html">
                                <img class="rounded-circle" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}" width="25" alt="Donor"> Jane Smith
                            </a>
                        </td>
                        <td class="text-center">$1195</td>
                        <td class="text-center">20%</td>
                        <td class="text-end">
                            <div>2018</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">
                            <div>DON1625</div>
                        </td>
                        <td class="text-nowrap">
                            <a href="profile.html">
                                <img class="rounded-circle" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}" width="25" alt="Donor"> Robert Brown
                            </a>
                        </td>
                        <td class="text-center">$1196</td>
                        <td class="text-center">22%</td>
                        <td class="text-end">
                            <div>2017</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">
                            <div>DON2516</div>
                        </td>
                        <td class="text-nowrap">
                            <a href="profile.html">
                                <img class="rounded-circle" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}" width="25" alt="Donor"> Emily Davis
                            </a>
                        </td>
                        <td class="text-center">$1187</td>
                        <td class="text-center">18%</td>
                        <td class="text-end">
                            <div>2016</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">
                            <div>DON2209</div>
                        </td>
                        <td class="text-nowrap">
                            <a href="profile.html">
                                <img class="rounded-circle" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}" width="25" alt="Donor"> Michael Lee
                            </a>
                        </td>
                        <td class="text-center">$1185</td>
                        <td class="text-center">15%</td>
                        <td class="text-end">
                            <div>2015</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

            </div>
            <div class="col-xl-6 d-flex">

                <div class="card flex-fill comman-shadow">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="card-title ">Church Activities </h5>
                        <ul class="chart-list-out member-ellips">
                            <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="activity-groups">
                            <div class="activity-awards">
                                <div class="award-boxs">
                                    <img src="assets/img/icons/award-icon-01.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Organized Charity Event”</h4>
                                    <h5>Mary Johnson organized a charity event"</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>1 Day ago</span>
                                </div>
                            </div>
                            <div class="activity-awards">
                                <div class="award-boxs">
                                    <img src="assets/img/icons/award-icon-02.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Participated in Community Outreach</h4>
                                    <h5>Michael Smith participated in community outreach</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>2 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-awards">
                                <div class="award-boxs">
                                    <img src="assets/img/icons/award-icon-03.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Attended Church Conference</h4>
                                    <h5>Sarah Lee attended a church conference</h5>
                                    </div>
                                <div class="award-time-list">
                                    <span>2 Week ago</span>
                                </div>
                            </div>
                            <div class="activity-awards mb-0">
                                <div class="award-boxs">
                                    <img src="assets/img/icons/award-icon-04.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Won Volunteer of the Year</h4>
                                    <h5>John Doe won Volunteer of the Year</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>3 Day ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill fb sm-box">
                    <div class="social-likes">
                        <p>Like us on facebook</p>
                        <h6>50,095</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/social-icon-01.svg" alt="Social Icon">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill twitter sm-box">
                    <div class="social-likes">
                        <p>Follow us on twitter</p>
                        <h6>48,596</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/social-icon-02.svg" alt="Social Icon">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill insta sm-box">
                    <div class="social-likes">
                        <p>Follow us on instagram</p>
                        <h6>52,085</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/social-icon-03.svg" alt="Social Icon">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill linkedin sm-box">
                    <div class="social-likes">
                        <p>Follow us on linkedin</p>
                        <h6>69,050</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/social-icon-04.svg" alt="Social Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
