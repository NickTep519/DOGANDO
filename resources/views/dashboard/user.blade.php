@php
    $active_user = true  ; 
@endphp

@extends('dashboard.base')

@section('title', config('app.name').'-'.$user->name )

@section('content')

<div class="dashboard-content-wrap">
    <div class="dashboard-bread">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white"> Bonjour {{Auth::user()->name}} ! </h2>
                        </div>
                    </div>   <!-- end breadcrumb-content -->
                </div>     <!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-end">
                        <ul class="list-items">
                            <li><a href="{{route('home')}}" class="text-white">Home</a></li>
                            <li>Pages</li>
                            <li>User Dashboard</li>
                        </ul>
                    </div>   <!-- end breadcrumb-list -->
                </div>    <!-- end col-lg-6 -->
            </div>   <!-- end row -->
            <div class="row mt-4">
                <div class="col-lg-3 responsive-column-m">
                    <div class="icon-box icon-layout-2 dashboard-icon-box">
                        <div class="d-flex">
                            <div class="info-icon icon-element flex-shrink-0">
                                <i class="la la-shopping-cart"></i>
                            </div>    <!-- end info-icon-->
                            <div class="info-content">
                                <p class="info__desc">Actions</p>
                                    <h4 class="info__title">{{$total_action}}</h4>
                            </div>   <!-- end info-content -->
                        </div>
                    </div>
                </div>     <!-- end col-lg-3 -->

                <div class="col-lg-3 responsive-column-m">
                    <div class="icon-box icon-layout-2 dashboard-icon-box">
                        <div class="d-flex">
                            <div class="info-icon icon-element bg-2 flex-shrink-0">
                                <i class="la la-bookmark"></i>
                            </div>   <!-- end info-icon-->
                            <div class="info-content">
                                <p class="info__desc">Expedition</p>
                                    <h4 class="info__title">{{$action_expedition}}</h4>
                            </div>    <!-- end info-content -->
                        </div>
                    </div>
                </div>       <!-- end col-lg-3 -->

                <div class="col-lg-3 responsive-column-m">
                    <div class="icon-box icon-layout-2 dashboard-icon-box">
                        <div class="d-flex">
                            <div class="info-icon icon-element bg-3 flex-shrink-0">
                                <i class="la la-plane"></i>
                            </div>   <!-- end info-icon-->
                            <div class="info-content">
                                <p class="info__desc">Voyages </p>
                                    <h4 class="info__title"> {{$action_voyage}} </h4>
                            </div>    <!-- end info-content -->
                        </div>
                    </div>
                </div>      <!-- end col-lg-3 -->
                
            </div>    <!-- end row -->
        </div>
    </div>      <!-- end dashboard-bread -->

    <div class="dashboard-main-content">
        <div class="container-fluid">
            <div class="row">
            
                <div class="col-lg-6 responsive-column--m">
                    <div class="form-box dashboard-card">
                        <div class="form-title-wrap">
                            <div class="d-flex justify-content-between align-items-center" >
                                <h3 class="title">Notifications</h3>
                                <button
                                    type="button"
                                    class="icon-element mark-as-read-btn ms-auto me-0"
                                    data-bs-toggle="tooltip"
                                    data-placement="left"
                                    title="Mark all as read"
                                >
                                    <i class="la la-check-square"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-content p-0">
                            <div class="list-group drop-reveal-list">
                                <a
                                    href="user-dashboard.html#"
                                    class="list-group-item list-group-item-action border-top-0"
                                >
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element flex-shrink-0 me-3 ms-0">
                                            <i class="la la-bell"></i>
                                        </div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Group Trip - Available</h3>
                                            <p class="msg-text">2 min ago</p>
                                        </div>

                                        <span
                                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                                            data-bs-toggle="tooltip"
                                            data-placement="left"
                                            title="Mark as read"
                                        > <i class="la la-check-square"></i> </span>
                                    </div>    <!-- end msg-body -->
                                </a>
                                <a
                                    href="user-dashboard.html#"
                                    class="list-group-item list-group-item-action"
                                >
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-1 flex-shrink-0 me-3 ms-0" >
                                            <i class="la la-bell"></i>
                                        </div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">50% Discount Offer</h3>
                                            <p class="msg-text">2 min ago</p>
                                        </div>
                                        <span
                                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                                            data-bs-toggle="tooltip"
                                            data-placement="left"
                                            title="Mark as read"
                                        > <i class="la la-check-square"></i> </span>
                                    </div>     <!-- end msg-body -->
                                </a>

                                <a
                                    href="user-dashboard.html#"
                                    class="list-group-item list-group-item-action"
                                >
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-2 flex-shrink-0 me-3 ms-0" >
                                            <i class="la la-check"></i>
                                        </div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1"> Your account has been created </h3>
                                            <p class="msg-text">1 day ago</p>
                                        </div>
                                        <span
                                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                                            data-bs-toggle="tooltip"
                                            data-placement="left"
                                            title="Mark as read"
                                        > <i class="la la-check-square"></i> </span>
                                    </div>    <!-- end msg-body -->
                                </a>

                                <a
                                    href="user-dashboard.html#"
                                    class="list-group-item list-group-item-action"
                                >
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-3 flex-shrink-0 me-3 ms-0" >
                                            <i class="la la-user"></i>
                                        </div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your account updated</h3>
                                            <p class="msg-text">2 hrs ago</p>
                                        </div>
                                        <span
                                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                                            data-bs-toggle="tooltip"
                                            data-placement="left"
                                            title="Mark as read"
                                        > <i class="la la-check-square"></i> </span>
                                    </div>      <!-- end msg-body -->
                                </a>

                                <a
                                    href="user-dashboard.html#"
                                    class="list-group-item list-group-item-action"
                                >
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-4 flex-shrink-0 me-3 ms-0" >
                                            <i class="la la-lock"></i>
                                        </div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your password changed</h3>
                                            <p class="msg-text">Yesterday</p>
                                        </div>
                                        <span
                                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                                            data-bs-toggle="tooltip"
                                            data-placement="left"
                                            title="Mark as read" > <i class="la la-check-square"></i> </span>
                                    </div>  <!-- end msg-body -->
                                </a>
                            </div>
                        </div>
                    </div>  <!-- end form-box -->
                </div>     <!-- end col-lg-6 -->

                

                <div class="col-lg-6 responsive-column--m">
                    <div class="form-box dashboard-card order-card border-0">
                        <div class="form-title-wrap">
                            <h3 class="title">Orders</h3>
                        </div>

                        <div class="form-content p-0">
                            <div class="list-group drop-reveal-list">
                                <div class="list-group-item list-group-item-action border-top-0" >
                                    <div class="msg-body d-flex align-items-center justify-content-between" >
                                        <div class="msg-content">
                                            <h3 class="title pb-2"> 3 - Night Bahamas - Miami Round-Trip </h3>
                                            <ul class="list-items d-flex align-items-center">
                                                <li class="font-size-14 me-2">
                                                <span
                                                    class="badge text-bg-success py-1 px-2 font-size-13 font-weight-medium"
                                                >Paid</span>
                                                </li>
                                                <li class="font-size-14 me-2">Order: #232</li>
                                                <li class="font-size-14">Date: 11/05/2019</li>
                                            </ul>
                                        </div>
                                        <a
                                            href="user-dashboard.html#"
                                            class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                                        > View Invoice </a>
                                    </div>     <!-- end msg-body -->
                                </div>

                                <div class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center justify-content-between" >
                                        <div class="msg-content">
                                            <h3 class="title pb-2">California To Newyork</h3>
                                            <ul class="list-items d-flex align-items-center">
                                                <li class="font-size-14 me-2">
                                                    <span class="badge text-bg-danger py-1 px-2 font-size-13 font-weight-medium" >UnPaid</span>
                                                </li>
                                                <li class="font-size-14 me-2">Order: #232</li>
                                                <li class="font-size-14">Date: 11/05/2019</li>
                                            </ul>
                                        </div>
                                        <a
                                            href="user-dashboard.html#"
                                            class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                                        > Finish Payment </a>
                                    </div>    <!-- end msg-body -->
                                </div>

                                <div class="list-group-item list-group-item-action">
                                
                                <div class="msg-body d-flex align-items-center justify-content-between" >
                                    <div class="msg-content">
                                        <h3 class="title pb-2"> Two Hour Walking Tour of Manhattan</h3>
                                        <ul class="list-items d-flex align-items-center">
                                            <li class="font-size-14 me-2">
                                                <span class="badge text-bg-success py-1 px-2 font-size-13 font-weight-medium">Paid</span>
                                            </li>
                                            <li class="font-size-14 me-2">Order: #232</li>
                                            <li class="font-size-14">Date: 11/05/2019</li>
                                        </ul>
                                    </div>
                                    <a
                                        href="user-dashboard.html#"
                                        class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                                    > View Invoice </a>
                                </div>      <!-- end msg-body -->
                            </div>

                            <div class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center justify-content-between">
                                    <div class="msg-content">
                                        <h3 class="title pb-2">Dubai to Spain</h3>
                                        <ul class="list-items d-flex align-items-center">
                                            <li class="font-size-14 me-2">
                                                <span class="badge text-bg-success py-1 px-2 font-size-13 font-weight-medium">Paid</span>
                                            </li>
                                            <li class="font-size-14 me-2">Order: #232</li>
                                            <li class="font-size-14">Date: 11/05/2019</li>
                                        </ul>
                                    </div>
                                    <a
                                        href="user-dashboard.html#"
                                        class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                                    > View Invoice </a>
                                </div>        <!-- end msg-body -->
                            </div>

                            <div class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center justify-content-between">
                                    <div class="msg-content">
                                        <h3 class="title pb-2">Parian Holiday Villas</h3>
                                        <ul class="list-items d-flex align-items-center">
                                            <li class="font-size-14 me-2">
                                                <span class="badge text-bg-success py-1 px-2 font-size-13 font-weight-medium">Paid</span>
                                            </li>
                                            <li class="font-size-14 me-2">Order: #232</li>
                                            <li class="font-size-14">Date: 11/05/2019</li>
                                        </ul>
                                    </div>
                                    <a
                                        href="user-dashboard.html#"
                                        class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                                    > View Invoice </a>
                                </div>       <!-- end msg-body -->
                            </div>

                            <div class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center justify-content-between">
                                    <div class="msg-content">
                                        <h3 class="title pb-2">Lake Palace Hotel</h3>
                                        <ul class="list-items d-flex align-items-center">
                                            <li class="font-size-14 me-2">
                                                <span class="badge text-bg-success py-1 px-2 font-size-13 font-weight-medium">Paid</span>
                                            </li>
                                            <li class="font-size-14 me-2">Order: #232</li>
                                            <li class="font-size-14">Date: 11/05/2019</li>
                                        </ul>
                                    </div>
                                    <a
                                        href="user-dashboard.html#"
                                        class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                                    > View Invoice </a>
                                </div>      <!-- end msg-body -->
                            </div>
                        </div>
                    </div>
                </div>         <!-- end form-box -->
            </div>        <!-- end col-lg-6 -->
        </div>       <!-- end row -->
        <div class="border-top mt-4"></div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            &copy; Copyright Trizen <span id="get-year"></span> . Made
                            with <span class="la la-heart"></span> by
                            <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                        </p>
                    </div>      <!-- end copy-right -->
                </div>            <!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="copy-right-content text-end padding-top-30px">
                        <ul class="social-profile">
                            <li>  <a href="user-dashboard.html#"><i class="lab la-facebook-f"></i></a> </li>
                            <li> <a href="user-dashboard.html#"><i class="lab la-twitter"></i></a></li>
                            <li> <a href="user-dashboard.html#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="user-dashboard.html#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>          <!-- end copy-right-content -->
                </div>       <!-- end col-lg-5 -->
            </div>       <!-- end row -->
        </div>   <!-- end container-fluid -->
    </div>      <!-- end dashboard-main-content -->
</div>    <!-- end dashboard-content-wrap -->
    
    
@endsection