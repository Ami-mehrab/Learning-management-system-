@extends('backend.master')
@section ('content')

<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <!-- <div class="page-title-right">
                
                        </div> -->
                        <h4 class="page-title">LMS Dashboard</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-account-group widget-icon bg-primary-lighten text-primary"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0">Students</h5>
                                    <h3 class="mt-3 mb-3">1,254</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 8.21%</span>
                                        <span class="text-nowrap">New enrollments</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-teach widget-icon bg-success-lighten text-success"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0">Teachers</h5>
                                    <h3 class="mt-3 mb-3">48</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 2.11%</span>
                                        <span class="text-nowrap">This semester</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-book-open-variant widget-icon bg-info-lighten text-info"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0">Active Courses</h5>
                                    <h3 class="mt-3 mb-3">36</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.05%</span>
                                        <span class="text-nowrap">New courses</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-message-alert widget-icon bg-warning-lighten text-warning"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0">Pending Feedback</h5>
                                    <h3 class="mt-3 mb-3">124</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 3.25%</span>
                                        <span class="text-nowrap">From last week</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6">
                    <div class="card card-h-100">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Course Completion Progress</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Detailed View</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div dir="ltr">
                                <div id="course-completion-chart" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Student Engagement</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="chart-content-bg">
                                <div class="row text-center">
                                    <div class="col-sm-4">
                                        <p class="text-muted mb-0 mt-3">Active Students</p>
                                        <h2 class="fw-normal mb-3">
                                            <small class="mdi mdi-checkbox-blank-circle text-primary align-middle me-1"></small>
                                            <span>1,024</span>
                                        </h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-muted mb-0 mt-3">Avg. Time Spent</p>
                                        <h2 class="fw-normal mb-3">
                                            <small class="mdi mdi-checkbox-blank-circle text-success align-middle me-1"></small>
                                            <span>2h 42m</span>
                                        </h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-muted mb-0 mt-3">Completion Rate</p>
                                        <h2 class="fw-normal mb-3">
                                            <small class="mdi mdi-checkbox-blank-circle text-info align-middle me-1"></small>
                                            <span>72%</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div dir="ltr">
                                <div id="engagement-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97,#6c757d"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Top Rated Courses</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">View All</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Export</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 fw-normal">Advanced Data Science</h5>
                                                <span class="text-muted font-13">Dr. Sarah Johnson</span>
                                            </td>
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-14 my-1 fw-normal">4.8</h5>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star-half-full"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 fw-normal">Web Development Bootcamp</h5>
                                                <span class="text-muted font-13">Prof. Michael Chen</span>
                                            </td>
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-14 my-1 fw-normal">4.7</h5>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 fw-normal">Machine Learning Fundamentals</h5>
                                                <span class="text-muted font-13">Dr. Emily Wilson</span>
                                            </td>
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-14 my-1 fw-normal">4.6</h5>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star-outline"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 fw-normal">Digital Marketing Mastery</h5>
                                                <span class="text-muted font-13">Prof. David Rodriguez</span>
                                            </td>
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-14 my-1 fw-normal">4.5</h5>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star-half-full"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 fw-normal">UX/UI Design Principles</h5>
                                                <span class="text-muted font-13">Dr. Lisa Thompson</span>
                                            </td>
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-14 my-1 fw-normal">4.4</h5>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star-outline"></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Recent Feedback</h4>
                            <a href="javascript:void(0);" class="btn btn-sm btn-light">View All <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt="user" width="40">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="font-14 my-1 fw-normal">Robert Johnson</h5>
                                                        <span class="text-muted font-13">Advanced Data Science</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 font-13">"Excellent course content and instructor!"</p>
                                            </td>
                                            <td>
                                                <span class="badge bg-success-lighten text-success">Positive</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt="user" width="40">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="font-14 my-1 fw-normal">Maria Garcia</h5>
                                                        <span class="text-muted font-13">Web Development</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 font-13">"Some videos could be more detailed."</p>
                                            </td>
                                            <td>
                                                <span class="badge bg-warning-lighten text-warning">Neutral</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt="user" width="40">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="font-14 my-1 fw-normal">John Smith</h5>
                                                        <span class="text-muted font-13">Digital Marketing</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 font-13">"The practical assignments were very helpful."</p>
                                            </td>
                                            <td>
                                                <span class="badge bg-success-lighten text-success">Positive</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt="user" width="40">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="font-14 my-1 fw-normal">Emma Wilson</h5>
                                                        <span class="text-muted font-13">UX/UI Design</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 font-13">"Would like more real-world examples."</p>
                                            </td>
                                            <td>
                                                <span class="badge bg-warning-lighten text-warning">Neutral</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/avatar-6.jpg" class="rounded-circle" alt="user" width="40">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="font-14 my-1 fw-normal">David Lee</h5>
                                                        <span class="text-muted font-13">Machine Learning</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 font-13">"The instructor's explanations were very clear."</p>
                                            </td>
                                            <td>
                                                <span class="badge bg-success-lighten text-success">Positive</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 order-lg-1">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Course Categories</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">View All</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Add New</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div id="course-categories-chart" class="apex-charts mb-4 mt-2" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00,#6c757d"></div>

                            <div class="chart-widget-list">
                                <p>
                                    <i class="mdi mdi-square text-primary"></i> Technology
                                    <span class="float-end">32%</span>
                                </p>
                                <p>
                                    <i class="mdi mdi-square text-success"></i> Business
                                    <span class="float-end">24%</span>
                                </p>
                                <p>
                                    <i class="mdi mdi-square text-danger"></i> Science
                                    <span class="float-end">18%</span>
                                </p>
                                <p>
                                    <i class="mdi mdi-square text-warning"></i> Arts
                                    <span class="float-end">14%</span>
                                </p>
                                <p class="mb-0">
                                    <i class="mdi mdi-square text-secondary"></i> Others
                                    <span class="float-end">12%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 order-lg-1">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Recent Activity</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">View All</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body py-0 mb-3" data-simplebar style="max-height: 403px;">
                            <div class="timeline-alt py-0">
                                <div class="timeline-item">
                                    <i class="mdi mdi-account-plus bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="javascript:void(0);" class="text-info fw-bold mb-1 d-block">New student enrolled</a>
                                        <small>Sarah Johnson enrolled in "Advanced Data Science"</small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">15 minutes ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <i class="mdi mdi-book-open-page-variant bg-primary-lighten text-primary timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="javascript:void(0);" class="text-primary fw-bold mb-1 d-block">New course published</a>
                                        <small>"Blockchain Fundamentals" by Dr. Michael Chen</small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">1 hour ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <i class="mdi mdi-message-alert bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="javascript:void(0);" class="text-info fw-bold mb-1 d-block">New feedback received</a>
                                        <small>David Miller rated "Web Development" 5 stars</small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">3 hours ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <i class="mdi mdi-account-check bg-primary-lighten text-primary timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="javascript:void(0);" class="text-primary fw-bold mb-1 d-block">Course completed</a>
                                        <small>Emma Wilson completed "UX/UI Design Principles"</small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">1 day ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <i class="mdi mdi-certificate bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="javascript:void(0);" class="text-info fw-bold mb-1 d-block">Certificate issued</a>
                                        <small>Certificate for "Machine Learning" sent to Robert Johnson</small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">2 days ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection