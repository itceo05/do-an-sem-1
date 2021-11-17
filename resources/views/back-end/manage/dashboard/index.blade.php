@extends('back-end.master')
@section('Main_Admin')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-cube text-danger icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Total Revenue</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">$6,560</h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-receipt text-warning icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Orders</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">3455</h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-poll-box text-success icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Sales</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">5693</h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-cart-outline icon-lg text-success d-flex align-items-center"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Today Sales</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">$489,271</h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> $489,271 before tax
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{url('assets-admin')}}/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image">
                        <h4 class="font-weight-normal mb-3">Weekly Sales <i
                                class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">$ 15,0000</h2>
                        <h6 class="card-text">Increased by 60%</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{url('assets-admin')}}/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image">
                        <h4 class="font-weight-normal mb-3">Weekly Orders <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">45,6334</h2>
                        <h6 class="card-text">Decreased by 10%</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{url('assets-admin')}}/images/dashboard/circle.svg" class="card-img-absolute"
                            alt="circle-image">
                        <h4 class="font-weight-normal mb-3">Visitors Online <i
                                class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">95,5741</h2>
                        <h6 class="card-text">Increased by 5%</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin">
                <div class="card card-statistics">
                    <div class="row">
                        <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                    <i class="mdi mdi-account-multiple-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                    <div class="wrapper text-center text-sm-left">
                                        <p class="card-text mb-0">New Users</p>
                                        <div class="fluid-container">
                                            <h3 class="mb-0 font-weight-medium">65,650</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                    <i
                                        class="mdi mdi-checkbox-marked-circle-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                    <div class="wrapper text-center text-sm-left">
                                        <p class="card-text mb-0">New Feedbacks</p>
                                        <div class="fluid-container">
                                            <h3 class="mb-0 font-weight-medium">32,604</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                    <i class="mdi mdi-trophy-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                    <div class="wrapper text-center text-sm-left">
                                        <p class="card-text mb-0">Employees</p>
                                        <div class="fluid-container">
                                            <h3 class="mb-0 font-weight-medium">17,583</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                    <i class="mdi mdi-target text-primary mr-0 mr-sm-4 icon-lg"></i>
                                    <div class="wrapper text-center text-sm-left">
                                        <p class="card-text mb-0">Total Sales</p>
                                        <div class="fluid-container">
                                            <h3 class="mb-0 font-weight-medium">61,119</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Tickets</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Assignee </th>
                                        <th> Subject </th>
                                        <th> Status </th>
                                        <th> Last Update </th>
                                        <th> Tracking ID </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{url('assets-admin')}}/images/faces/face1.jpg" class="mr-2"
                                                alt="image">
                                            David Grey
                                        </td>
                                        <td> Fund is not recieved </td>
                                        <td>
                                            <label class="badge badge-gradient-success">DONE</label>
                                        </td>
                                        <td> Dec 5, 2017 </td>
                                        <td> WD-12345 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{url('assets-admin')}}/images/faces/face2.jpg" class="mr-2"
                                                alt="image">
                                            Stella Johnson
                                        </td>
                                        <td> High loading time </td>
                                        <td>
                                            <label class="badge badge-gradient-warning">PROGRESS</label>
                                        </td>
                                        <td> Dec 12, 2017 </td>
                                        <td> WD-12346 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{url('assets-admin')}}/images/faces/face3.jpg" class="mr-2"
                                                alt="image">
                                            Marina Michel
                                        </td>
                                        <td> Website down for one week </td>
                                        <td>
                                            <label class="badge badge-gradient-info">ON HOLD</label>
                                        </td>
                                        <td> Dec 16, 2017 </td>
                                        <td> WD-12347 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{url('assets-admin')}}/images/faces/face4.jpg" class="mr-2"
                                                alt="image">
                                            John Doe
                                        </td>
                                        <td> Loosing control on server </td>
                                        <td>
                                            <label class="badge badge-gradient-danger">REJECTED</label>
                                        </td>
                                        <td> Dec 3, 2017 </td>
                                        <td> WD-12348 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <p class="text-muted">Total Invoice</p>
                        <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold">$65,650</h4>
                            <h6 class="text-success font-weight-semibold ml-2">+876</h6>
                        </div>
                        <small class="text-muted">This has been a great update.</small>
                    </div>
                    <canvas class="mt-2 chartjs-render-monitor" height="50" id="statistics-graph-dark1"
                        style="display: block; height: 40px; width: 256px;" width="320"></canvas>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <p class="text-muted">Total expenses</p>
                        <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold">$65,650</h4>
                            <h6 class="text-danger font-weight-semibold ml-2">-43</h6>
                        </div>
                        <small class="text-muted">view statement</small>
                    </div>
                    <canvas class="mt-2 chartjs-render-monitor" height="50" id="statistics-graph-dark3" width="320"
                        style="display: block; height: 40px; width: 256px;"></canvas>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <p class="text-muted">Unpaid Invoices</p>
                        <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold">$2,542</h4>
                            <h6 class="text-success font-weight-semibold ml-2">+876</h6>
                        </div>
                        <small class="text-muted">view history</small>
                    </div>
                    <canvas class="mt-2 chartjs-render-monitor" height="50" id="statistics-graph-dark2" width="320"
                        style="display: block; height: 40px; width: 256px;"></canvas>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <p class="text-muted">Amount Due</p>
                        <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold">$3450</h4>
                            <h6 class="text-success font-weight-semibold ml-2">+23</h6>
                        </div>
                        <small class="text-muted">65% lower growth</small>
                    </div>
                    <canvas class="mt-2 chartjs-render-monitor" height="50" id="statistics-graph-dark4" width="320"
                        style="display: block; height: 40px; width: 256px;"></canvas>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Project Status</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Name </th>
                                        <th> Due Date </th>
                                        <th> Progress </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> Herman Beck </td>
                                        <td> May 15, 2015 </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar"
                                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 2 </td>
                                        <td> Messsy Adam </td>
                                        <td> Jul 01, 2015 </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                    style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 3 </td>
                                        <td> John Richards </td>
                                        <td> Apr 12, 2015 </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar"
                                                    style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 4 </td>
                                        <td> Peter Meggik </td>
                                        <td> May 15, 2015 </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 5 </td>
                                        <td> Edward </td>
                                        <td> May 03, 2015 </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                    style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 5 </td>
                                        <td> Ronald </td>
                                        <td> Jun 05, 2015 </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-info" role="progressbar"
                                                    style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="text-gray">TUESDAY, APR 9, 2018</p>
                        <ul class="bullet-line-list pb-3">
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex">
                                        <img class="img-xs rounded-circle"
                                            src="{{url('assets-admin')}}/images/faces/face9.jpg" alt="profile image">
                                        <div class="ml-3">
                                            <h6 class="mb-0">Snapchat Hosts</h6>
                                            <small class="text-muted"> Admin Dashboard </small>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="d-block mb-0">06</small>
                                        <small class="text-muted d-block">pm</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex">
                                        <img class="img-xs rounded-circle"
                                            src="{{url('assets-admin')}}/images/faces/face3.jpg" alt="profile image">
                                        <div class="ml-3">
                                            <h6 class="mb-0">Revise Wireframes</h6>
                                            <small class="text-muted"> Company website </small>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="d-block mb-0">11</small>
                                        <small class="text-muted d-block">pm</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex">
                                        <img class="img-xs rounded-circle"
                                            src="{{url('assets-admin')}}/images/faces/face4.jpg" alt="profile image">
                                        <div class="ml-3">
                                            <h6 class="mb-0">Expert instruction</h6>
                                            <small class="text-muted"> Profile App </small>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="d-block mb-0">12</small>
                                        <small class="text-muted d-block">pm</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <p class="text-gray mt-4">TUESDAY, APR 10, 2018</p>
                        <ul class="bullet-line-list">
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex">
                                        <img class="img-xs rounded-circle"
                                            src="{{url('assets-admin')}}/images/faces/face7.jpg" alt="profile image">
                                        <div class="ml-3">
                                            <h6 class="mb-0">Great Logo</h6>
                                            <small class="text-muted"> admin logo </small>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="d-block mb-0">04</small>
                                        <small class="text-muted d-block">pm</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex">
                                        <img class="img-xs rounded-circle"
                                            src="{{url('assets-admin')}}/images/faces/face25.jpg" alt="profile image">
                                        <div class="ml-3">
                                            <h6 class="mb-0">Branding Mockup</h6>
                                            <small class="text-muted"> Company website </small>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="d-block mb-0">08</small>
                                        <small class="text-muted d-block">pm</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex">
                                        <img class="img-xs rounded-circle"
                                            src="{{url('assets-admin')}}/images/faces/face12.jpg" alt="profile image">
                                        <div class="ml-3">
                                            <h6 class="mb-0">Awesome Mobile App</h6>
                                            <small class="text-muted"> Profile App </small>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="d-block mb-0">09</small>
                                        <small class="text-muted d-block">pm</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <img src="{{url('assets-admin')}}/images/faces/face11.jpg" class="img-lg rounded"
                                alt="profile image">
                            <div class="ml-3">
                                <h6>Maria</h6>
                                <p class="text-muted">maria@gmail.com</p>
                                <p class="mt-2 text-success font-weight-bold">Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <img src="{{url('assets-admin')}}/images/faces/face9.jpg" class="img-lg rounded"
                                alt="profile image">
                            <div class="ml-3">
                                <h6>Thomas Edison</h6>
                                <p class="text-muted">thomas@gmail.com</p>
                                <p class="mt-2 text-success font-weight-bold">Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <img src="{{url('assets-admin')}}/images/faces/face12.jpg" class="img-lg rounded"
                                alt="profile image">
                            <div class="ml-3">
                                <h6>Edward</h6>
                                <p class="text-muted">edward@gmail.com</p>
                                <p class="mt-2 text-success font-weight-bold">Tester</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <img class="card-img-top" src="{{url('assets-admin')}}/images/dashboard/img_1.jpg"
                        alt="card images">
                    <div class="card-body pb-0">
                        <p class="text-muted">RAGNAROCK- Museet for pop, Roskilde, Denmark</p>
                        <h5>It’s good to start or finish the day with delicious pancakes :)</h5>
                        <div class="d-flex align-items-center justify-content-between text-muted border-top py-3 mt-3">
                            <p class="mb-0">Published on May 23, 2018</p>
                            <div class="wrapper d-flex align-items-center">
                                <small class="mr-2">93</small>
                                <i class="mdi mdi-heart-outline"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <img class="card-img-top" src="{{url('assets-admin')}}/images/dashboard/img_2.jpg"
                        alt="card images">
                    <div class="card-body pb-0">
                        <p class="text-muted">RAGNAROCK- Museet for pop, Roskilde, Denmark</p>
                        <h5>It’s good to start or finish the day with delicious pancakes :)</h5>
                        <div class="d-flex align-items-center justify-content-between text-muted border-top py-3 mt-3">
                            <p class="mb-0">Published on May 23, 2018</p>
                            <div class="wrapper d-flex align-items-center">
                                <small class="mr-2">93</small>
                                <i class="mdi mdi-heart-outline"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <img class="card-img-top" src="{{url('assets-admin')}}/images/dashboard/img_3.jpg"
                        alt="card images">
                    <div class="card-body pb-0">
                        <p class="text-muted">RAGNAROCK- Museet for pop, Roskilde, Denmark</p>
                        <h5>It’s good to start or finish the day with delicious pancakes :)</h5>
                        <div class="d-flex align-items-center justify-content-between text-muted border-top py-3 mt-3">
                            <p class="mb-0">Published on May 23, 2018</p>
                            <div class="wrapper d-flex align-items-center">
                                <small class="mr-2">93</small>
                                <i class="mdi mdi-heart-outline"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card aligner-wrapper">
                    <div class="card-body">
                        <div class="absolute left top bottom h-100 v-strock-2 bg-success"></div>
                        <p class="text-muted mb-2">Unpaid Invoices</p>
                        <div class="d-flex align-items-center">
                            <h1 class="font-weight-medium mb-2">$2,156</h1>
                            <h5 class="font-weight-medium text-success ml-2">−14.2%</h5>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="bg-success dot-indicator"></div>
                            <p class="text-muted mb-0 ml-2">This month unpaid invoices $567</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card aligner-wrapper">
                    <div class="card-body">
                        <div class="absolute left top bottom h-100 v-strock-2 bg-primary"></div>
                        <p class="text-muted mb-2">Gross volume</p>
                        <div class="d-flex align-items-center">
                            <h1 class="font-weight-medium mb-2">$1,520</h1>
                            <h5 class="font-weight-medium text-success ml-2">+20.7%</h5>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="bg-primary dot-indicator"></div>
                            <p class="text-muted mb-0 ml-2">Next payout -23 aug- $233</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card aligner-wrapper">
                    <div class="card-body">
                        <div class="absolute left top bottom h-100 v-strock-2 bg-danger"></div>
                        <p class="text-muted mb-2">Average revenue</p>
                        <div class="d-flex align-items-center">
                            <h1 class="font-weight-medium mb-2">$6.60</h1>
                            <h5 class="font-weight-medium text-success ml-2">+296.6%</h5>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="bg-danger dot-indicator"></div>
                            <p class="text-muted mb-0 ml-2">Payout for next week $100 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop