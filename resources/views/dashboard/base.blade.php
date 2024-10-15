<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href=" {{ asset('assets/images/fav.png') }} " type="image/x-icon">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/select2.min.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/line-awesome.css')}} " />
    <link rel="stylesheet" href="  {{asset('css/owl.carousel.min.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/owl.theme.default.min.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/jquery.fancybox.min.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/daterangepicker.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/animate.min.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/animated-headline.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/jquery-ui.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/flag-icon.min.css')}} " />
    <link rel="stylesheet" href=" {{asset('css/style.css')}} " />
  </head>
  <body class="section-bg">

    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
      <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
          <circle
            class="path"
            cx="25"
            cy="25"
            r="20"
            fill="none"
            stroke-width="5"
          ></circle>
        </svg>
      </div>
    </div>
    <!-- end cssload-loader -->



    <!-- ================================
       START USER CANVAS MENU
================================= -->
    <div class="user-canvas-container">
      <div class="side-menu-close">
        <i class="la la-times"></i>
      </div>
      <!-- end menu-toggler -->
      <div class="user-canvas-nav">
        <div class="section-tab section-tab-2 text-center pt-4 pb-3 ps-4">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="notification-tab"
                data-bs-toggle="tab"
                href="user-dashboard.html#notification"
                role="tab"
                aria-controls="notification"
                aria-selected="false"
              >
                Notifications
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="account-tab"
                data-bs-toggle="tab"
                href="user-dashboard.html#account"
                role="tab"
                aria-controls="account"
                aria-selected="true"
              >
                Account
              </a>
            </li>
          </ul>
        </div>
        <!-- end section-tab -->
      </div>
      <div class="user-canvas-nav-content">
        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="notification"
            role="tabpanel"
            aria-labelledby="notification-tab"
          >
            <div class="user-sidebar-item">
              <div class="notification-item">
                <div class="list-group drop-reveal-list">
                  <a href="user-dashboard.html#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element flex-shrink-0 me-3 ms-0">
                        <i class="la la-bell"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your request has been sent</h3>
                        <p class="msg-text">2 min ago</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="user-dashboard.html#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-2 flex-shrink-0 me-3 ms-0">
                        <i class="la la-check"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">
                          Your account has been created
                        </h3>
                        <p class="msg-text">1 day ago</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="user-dashboard.html#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-3 flex-shrink-0 me-3 ms-0">
                        <i class="la la-user"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your account updated</h3>
                        <p class="msg-text">2 hrs ago</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="user-dashboard.html#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-4 flex-shrink-0 me-3 ms-0">
                        <i class="la la-lock"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your password changed</h3>
                        <p class="msg-text">Yesterday</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="user-dashboard.html#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-5 flex-shrink-0 me-3 ms-0">
                        <i class="la la-envelope"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your email sent</h3>
                        <p class="msg-text">Yesterday</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="user-dashboard.html#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-6 flex-shrink-0 me-3 ms-0">
                        <i class="la la-envelope"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your email changed</h3>
                        <p class="msg-text">Yesterday</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                </div>
              </div>
              <!-- end notification-item -->
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="account"
            role="tabpanel"
            aria-labelledby="account-tab"
          >
            <div class="user-action-wrap user-sidebar-panel">
              <div class="notification-item">
                <a href="user-dashboard-profile.html" class="dropdown-item">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm flex-shrink-0 me-2">
                      <img src="images/team8.jpg" alt="team-img" />
                    </div>
                    <span class="font-size-14 font-weight-bold">Ali Tufan</span>
                  </div>
                </a>
                <div class="list-group drop-reveal-list user-drop-reveal-list">
                  <a
                    href="user-dashboard-profile.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-user me-2"></i>My Profile
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a
                    href="user-dashboard-booking.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-shopping-cart me-2"></i>My Booking
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a
                    href="user-dashboard-reviews.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-heart me-2"></i>My Reviews
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a
                    href="user-dashboard-settings.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-gear me-2"></i>Settings
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <div class="section-block"></div>
                  <a
                    href="index.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-power-off me-2"></i>Logout
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                </div>
              </div>
              <!-- end notification-item -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end user-canvas-container -->
    <!-- ================================
       END USER CANVAS MENU
================================= -->



    <!-- ================================
       START DASHBOARD NAV
================================= -->
    <div class="sidebar-nav">
      <div class="sidebar-nav-body">
        <div class="side-menu-close">
          <i class="la la-times"></i>
        </div>
        <!-- end menu-toggler -->
        <div class="author-content">
          <div class="d-flex align-items-center">
            <div class="author-img avatar-sm">
              <img src=" {{asset('images/team8.jpg')}} " alt="testimonial image" />
            </div>
            <div class="author-bio">
              <h4 class="author__title"> {{Auth::user()->name}} </h4>
              <span class="author__meta">Membre depuis {{$user->created_at->translatedFormat('M Y')}} </span>
            </div>
          </div>
        </div>
        <div class="sidebar-menu-wrap">
          <ul class="sidebar-menu list-items">
            <li @class(['', 'page-active' => $active['user']]) >
              <a href="{{route('dashboard.user')}}"
              ><i class="la la-dashboard me-2"></i>Dashboard</a>
            </li>
            <li >
              <a href="{{route('posts.create')}}"
                ><i class="la la-shopping-cart me-2 text-color"></i>Ajouter A</a
              >
            </li>
            <li @class(['', 'page-active' => $active['voyage']]) >
              <a href="{{route('dashboard.voyage')}}"
                ><i class="la la-shopping-cart me-2 text-color"></i> Annonces V</a
              >
            </li>
            <li @class(['', 'page-active' => $active['expedition']]) >
                <a href="{{route('dashboard.expedition')}}"
                  ><i class="la la-shopping-cart me-2 text-color"></i> Annonces Ex</a
                >
            </li>
            <li @class(['', 'page-active' => $active['expedition']]) >
              <a href="{{route('conversation.index')}}"
                > Messages</a
              >
          </li>
            <li @class(['', 'page-active' => $active['profile']]) >
              <a href="{{route('dashboard.profile')}}"
                ><i class="la la-user me-2 text-color-2"></i>Profile</a
              >
            </li>
            <!--  <li>
              <a href="user-dashboard-reviews.html"
                ><i class="la la-star me-2 text-color-3"></i>My Reviews</a
              >
            </li>
            <li>
              <a href="user-dashboard-wishlist.html"
                ><i class="la la-heart me-2 text-color-4"></i>Wishlist</a
              >
            </li> -->
            <li @class(['', 'page-active' => $active['setting']]) >
              <a href="{{route('profile.edit')}}"
                ><i class="la la-cog me-2 text-color-5"></i>Settings</a
              >
            </li>
            <li>
              <form action="{{route('logout')}}" method="POST" >
                @csrf
              <button style="background: none; border: none; padding-left: 12px; font: inherit; color: inherit;"  > <i class="la la-power-off me-2 text-color-6"></i>Logout </button>
              </form>
            </li>
          </ul>
        </div>
        <!-- end sidebar-menu-wrap -->
      </div>
    </div>
    <!-- end sidebar-nav -->
    <!-- ================================
       END DASHBOARD NAV
================================= -->



    <!-- ================================
    START DASHBOARD AREA
================================= -->
    <section class="dashboard-area">
        <div class="dashboard-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <div class="logo me-5">
                                <a href="{{route('home')}}"><img src="{{asset('images/logo2.png')}}" alt="logo"/></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div>     <!-- end menu-toggler -->
                                <div class="user-menu-open">
                                    <i class="la la-user"></i>
                                </div>     <!-- end user-menu-open -->
                            </div>

                            <div class="nav-btn ms-auto">
                                <div class="notification-wrap d-flex align-items-center">
                                    <div class="notification-item me-2">
                                        <div class="dropdown">
                                            <a
                                                href="user-dashboard.html#"
                                                class="dropdown-toggle drop-reveal-toggle-icon"
                                                id="notificationDropdownMenu"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            > <i class="la la-bell"></i> <span class="noti-count"> {{Auth::user()->unreadNotifications->count()}} </span> </a> <!-- nombre de notifications --> 
                                            <div class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right" >
                                                <div class="dropdown-header drop-reveal-header">
                                                    <h6 class="title">
                                                       Vous avez <strong class="text-black"> {{Auth::user()->unreadNotifications->count()}} </strong> notifications 
                                                    </h6>
                                                </div>
                                                <div class="list-group drop-reveal-list">  <!-- listes des notifications -->

                                                  @foreach ( Auth::user()->unreadNotifications as $notification )
                                                  <a
                                                    href="{{ $notification->data['link'] }}"
                                                    class="list-group-item list-group-item-action" 
                                                  >
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="icon-element flex-shrink-0 me-3 ms-0" > 
                                                          <i class="la la-bell"></i>
                                                        </div>
                                                        <div class="msg-content w-100">
                                                          <h3 class="title pb-1">  {{ $notification->data['notif'] }}  </h3>
                                                          <p class="msg-text"> {{$notification->created_at->translatedFormat('i')}} min</p>
                                                        </div>
                                                    </div>     <!-- end msg-body -->
                                                  </a>
                                                  @endforeach
                       
                                                </div>
                                                <a href="user-dashboard.html#" class="dropdown-item drop-reveal-btn text-center" > View all </a>
                                                </div>  <!-- end dropdown-menu -->
                                            </div>
                                        </div>    <!-- end notification-item -->

                                        <div class="notification-item">
                                            <div class="dropdown">
                                                <a
                                                    href="user-dashboard.html#"
                                                    class="dropdown-toggle"
                                                    id="userDropdownMenu"
                                                    data-bs-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                >
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                            <img src=" {{asset('images/team8.jpg')}} " alt="team-img" />     <!-- image de profile -->
                                                        </div>
                                                        <span class="font-size-14 font-weight-bold" > {{Auth::user()->name}}</span>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right" >
                                                    <div class="dropdown-item drop-reveal-header user-reveal-header" >
                                                        <h6 class="title text-uppercase">Bienvenu!</h6>
                                                    </div>
                                                    <div class="list-group drop-reveal-list user-drop-reveal-list" >
                                                    <a
                                                        href="{{route('dashboard.profile')}}"
                                                        class="list-group-item list-group-item-action"
                                                    >
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"> <i class="la la-user me-2"></i>Mon Profile </h3>
                                                            </div>
                                                        </div>     <!-- end msg-body -->
                                                    </a>
                                                    <a
                                                        href="{{route('dashboard.voyage')}}"
                                                        class="list-group-item list-group-item-action"
                                                    >
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"> <i class="la la-shopping-cart me-2"></i>Annonces V </h3>
                                                            </div>
                                                        </div>   <!-- end msg-body -->
                                                    </a>
                                                    <a
                                                        href="{{route('dashboard.expedition')}}"
                                                        class="list-group-item list-group-item-action"
                                                    >
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"> <i class="la la-shopping-cart me-2"></i>Annonces Ex </h3>
                                                            </div>
                                                        </div>    <!-- end msg-body -->
                                                    </a>
                                                    <a
                                                        href="{{route('profile.edit')}}"
                                                        class="list-group-item list-group-item-action"
                                                    >
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"> <i class="la la-gear me-2"></i>Settings </h3>
                                                            </div>
                                                        </div>    <!-- end msg-body -->
                                                    </a>
                                                    <div class="section-block"></div>
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                          <form action="{{route('logout')}}" method="POST">
                                                            @csrf
                                                            <button style="background: none; border: none; padding-left: 17px; font: inherit; color: inherit;"  class="list-group-item list-group-item-action" class="title" > <i class="la la-power-off me-2"></i> Logout </button>
                                                          </form>
                                                        </div>
                                                    </div>    <!-- end msg-body -->
                                                </div>
                                            </div>    <!-- end dropdown-menu -->
                                        </div>
                                    </div>      <!-- end notification-item -->
                                </div>
                            </div>      <!-- end nav-btn -->
                        </div>     <!-- end menu-wrapper -->
                    </div>    <!-- end col-lg-12 -->
                </div>      <!-- end row -->
            </div>  <!-- end container-fluid -->
        </div>     <!-- end dashboard-nav -->

        @yield('content')

    </section>
    <!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->

    <!-- start scroll top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

    <!-- Template JS Files -->
    <script src=" {{asset('js/jquery-3.7.1.min.js')}} "></script>
    <script src=" {{asset('js/jquery-ui.js')}} "></script>

    <script src=" {{asset('js/bootstrap.bundle.min.js')}} "></script>
    <script src=" {{asset('js/select2.min.js')}} "></script>
    <script src=" {{asset('js/moment.min.js')}} "></script>
    <script src=" {{asset('js/daterangepicker.js')}} "></script>
    <script src=" {{asset('js/owl.carousel.min.js')}} "></script>
    <script src=" {{asset('js/jquery.fancybox.min.js')}} "></script>
    <script src="{{asset('js/jquery.countTo.min.js')}}"></script>
    <script src="{{asset('js/animated-headline.js')}}"></script>
    <script src=" {{asset('js/chart.js')}} "></script>
    <script src=" {{asset('js/chart.extension.js')}} "></script>
    <script src=" {{asset('js/bar-chart.js')}} ">
      </script
      <script src="js/jquery.ripples-min.js">
    </script>
    <script src=" {{asset('js/main.js')}} "></script>
  </body>
</html>
