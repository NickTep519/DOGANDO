<!doctype html>
<html lang="fr">

    <head>
        
        <meta charset="utf-8" />
        <title>Chat | {{config('app.name')}} </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive Bootstrap 5 Chat App" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href= {{asset("asset/images/favicon.ico")}} >

        <!-- magnific-popup css -->
        <link href= {{asset("asset/libs/magnific-popup/magnific-popup.css")}}  rel="stylesheet" type="text/css" />

        <!-- owl.carousel css -->
        <link rel="stylesheet" href= {{asset("asset/libs/owl.carousel/assets/owl.carousel.min.css")}} >

        <link rel="stylesheet" href= {{asset("asset/libs/owl.carousel/assets/owl.theme.default.min.css")}} >

        <!-- Bootstrap Css -->
        <link href= {{asset("asset/css/bootstrap.min.css")}}  id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href= {{asset("asset/css/icons.min.css")}}  rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href= {{asset("asset/css/app.min.css")}}  id="app-style" rel="stylesheet" type="text/css" />


    </head>

    <body>


        <div class="layout-wrapper d-lg-flex">

            <!-- Start left sidebar-menu -->
            <div class="side-menu flex-lg-column me-lg-1 ms-lg-0">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{route('home')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src= {{asset("asset/images/logo.svg")}}  alt="" height="30">
                        </span>
                    </a>

                    <a href="{{route('home')}}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src= {{asset("asset/images/logo.svg")}}  alt="" height="30">
                        </span>
                    </a>
                </div>
                <!-- end navbar-brand-box -->

                <!-- Start side-menu nav -->
                <div class="flex-lg-column my-auto">
                    <ul class="nav nav-pills side-menu-nav justify-content-center" role="tablist">

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Profile">
                            <a class="nav-link" id="pills-user-tab" data-bs-toggle="pill" href="index.html#pills-user" role="tab">
                                <i class="ri-user-2-line"></i>
                            </a>
                        </li>

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Chats">
                            <a class="nav-link active" id="pills-chat-tab" data-bs-toggle="pill" href="index.html#pills-chat" role="tab">
                                <i class="ri-message-3-line"></i>
                            </a>
                        </li>
                      
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Contacts">
                            <a class="nav-link" id="pills-contacts-tab" data-bs-toggle="pill" href="index.html#pills-contacts" role="tab">
                                <i class="ri-contacts-line"></i>
                            </a>
                        </li>

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
                            <a class="nav-link" id="pills-setting-tab" data-bs-toggle="pill" href="index.html#pills-setting" role="tab">
                                <i class="ri-settings-2-line"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown profile-user-dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src= {{asset("asset/images/users/avatar-1.jpg")}}  alt="" class="profile-user rounded-circle">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.html#">Profile <i class="ri-profile-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="index.html#">Setting <i class="ri-settings-3-line float-end text-muted"></i></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html#">Log out <i class="ri-logout-circle-r-line float-end text-muted"></i></a>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- end side-menu nav -->

                <div class="flex-lg-column d-none d-lg-block">
                    <ul class="nav side-menu-nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link light-dark-mode" href="index.html#" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" title="Dark / Light Mode">
                                <!--<i class='ri-sun-line theme-mode-icon'></i>-->
                            </a>
                        </li>

                        <li class="nav-item btn-group dropup profile-user-dropdown">
                            <a class="nav-link dropdown-toggle" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src= {{asset("asset/images/users/avatar-1.jpg")}}  alt="" class="profile-user rounded-circle">
                            </a>
                            <!--<div class="dropdown-menu">
                                <a class="dropdown-item" href="index.html#pills-user">Profile <i class="ri-profile-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="index.html#">Setting <i class="ri-settings-3-line float-end text-muted"></i></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-login.html"> Log out <i class="ri-logout-circle-r-line float-end text-muted"></i></a>
                            </div>-->
                        </li>
                    </ul>
                </div>
                <!-- Side menu user -->

            </div>
            <!-- end left sidebar-menu -->

            <!-- start chat-leftsidebar  -->
            <div class="chat-leftsidebar me-lg-1 ms-lg-0">

                <div class="tab-content">

                    <!-- Start Profile tab-pane -->
                    <div class="tab-pane" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">

                        <!-- Start profile content -->
                        <div>
                            <div class="px-4 pt-4">
                                <div class="user-chat-nav float-end">
                                    <div class="dropdown">
                                        <a href="index.html#" class="font-size-18 text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <!--<i class="ri-more-2-fill"></i>-->
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="index.html#">Edit</a>
                                            <a class="dropdown-item" href="index.html#">Action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="index.html#">Another action</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">Mon Profile</h4>
                            </div>

                            <div class="text-center p-4 border-bottom">
                                <div class="mb-4">
                                    <img src= {{asset("asset/images/users/avatar-1.jpg")}} class="rounded-circle avatar-lg img-thumbnail" alt="">
                                </div>

                                <h5 class="font-size-16 mb-1 text-truncate"> {{$auth_user->name}} </h5>
                                <p class="text-muted text-truncate mb-1"><i class="ri-record-circle-fill font-size-10 text-success me-1 ms-0 d-inline-block"></i> Active</p>
                            </div>
                            <!-- End profile user -->

                            <!-- Start user-profile-desc -->
                            <div class="p-4 user-profile-desc" data-simplebar>
                                <div class="text-muted">
                                    <p class="mb-4">Bonjour !!! Je suis {{ $auth_user->name}}. Le voyage est ma passion. Je suis disponible à recevoir des kilos de colis pour mon prochain voyage</p>
                                </div>


                                <div id="tabprofile" class="accordion">
                                    <div class="accordion-item card border mb-2">
                                        <div class="accordion-header" id="about2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#about" aria-expanded="true" aria-controls="about">
                                                <h5 class="font-size-14 m-0">
                                                    <i class="ri-user-2-line me-2 ms-0 ms-0 align-middle d-inline-block"></i> About
                                                </h5>
                                            </button>
                                        </div>
                                        <div id="about" class="accordion-collapse collapse show" aria-labelledby="about2" data-bs-parent="#tabprofile">
                                            <div class="accordion-body">
                                                <div>
                                                    <p class="text-muted mb-1">Nom</p>
                                                    <h5 class="font-size-14"> {{$auth_user->name}} </h5>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">Email</p>
                                                    <h5 class="font-size-14"> {{$auth_user->email}} </h5>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">Time</p>
                                                    <h5 class="font-size-14">11:40 AM</h5>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">Location</p>
                                                    <h5 class="font-size-14 mb-0"> {{$auth_user->adress}} </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End About card -->
                                    
                                </div>
                                <!-- end profile-user-accordion -->

                            </div>
                            <!-- end user-profile-desc -->
                        </div>
                        <!-- End profile content -->

                    </div>
                    <!-- End Profile tab-pane -->


                    <!-- Start chats tab-pane -->
                    <div class="tab-pane fade show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
                        <!-- Start chats content -->
                        <div>
                            <div class="px-4 pt-4">
                                <h4 class="mb-4">Chats</h4>
                                <div class="search-box chat-search-box">            
                                    <div class="input-group mb-3 rounded-3">
                                        <span class="input-group-text text-muted bg-light pe-1 ps-3" id="basic-addon1">
                                            <i class="ri-search-line search-icon font-size-18"></i>
                                        </span>
                                        <input type="text" class="form-control bg-light" placeholder="Search messages or users" aria-label="Search messages or users" aria-describedby="basic-addon1">
                                    </div> 
                                </div> <!-- Search Box-->
                            </div> <!-- .p-4 -->
    
                            <!-- Start user status -->
                            <div class="px-4 pb-4" dir="ltr">

                                <div class="owl-carousel owl-theme" id="user-status-carousel">

                                    @foreach ($status_users as $user)
                                    <div class="item">
                                        <a href="{{route('conversation.show', $user)}}" class="user-status-box">
                                            <div class="avatar-xs mx-auto d-block chat-user-img online">
                                                <img src= {{asset("asset/images/users/avatar-2.jpg")}}  alt="user-img" class="img-fluid rounded-circle">
                                                <span class="user-status"></span>
                                            </div>
    
                                            <h5 class="font-size-13 text-truncate mt-3 mb-1"> {{$user->name}} </h5>
                                        </a>
                                    </div>
                                    @endforeach
            
                                </div>
                                <!-- end user status carousel -->
                            </div>
                            <!-- end user status -->

                            <!-- Start chat-message-list -->
                            <div class="">
                                <h5 class="mb-3 px-3 font-size-16">Recent</h5>

                                <div class="chat-message-list px-2" data-simplebar>
            
                                    <ul class="list-unstyled chat-list chat-user-list">

                                        @foreach ($conversation_users as $conversation)
                                        <li @class(['', 'active' => $conversation->id === $actif_user->id, 'unread'=> true ]) >
                                            <a href="{{route('conversation.show', $conversation)}}">
                                                <div class="d-flex">                            
                                                    <div class="chat-user-img online align-self-center me-3 ms-0">
                                                        <img src= {{asset("asset/images/users/avatar-2.jpg")}}  class="rounded-circle avatar-xs" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                            
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="text-truncate font-size-15 mb-1">{{$conversation->name}}</h5>
                                                        <p class="chat-user-message text-truncate mb-0">Hey! there I'm available</p>
                                                    </div>
                                                    <div class="font-size-11">05 min</div>
                                                    <div class="unread-message">
                                                        <span class="badge badge-soft-danger rounded-pill">02</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach
    
                                
    
                                        <li>
                                            <a href="index.html#">
                                                <div class="d-flex">
                                                    <div class="chat-user-img align-self-center me-3 ms-0">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                                G
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="text-truncate font-size-15 mb-1">General</h5>
                                                        <p class="chat-user-message text-truncate mb-0">This theme is awesome!</p>
                                                    </div>
                                                    <div class="font-size-11">20 min</div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- End chat-message-list -->
                        </div>
                        <!-- Start chats content -->
                    </div>
                    <!-- End chats tab-pane -->


                    <!-- Start contacts tab-pane -->
                    <div class="tab-pane" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
    
                        <!-- Start Contact content -->
                        <div>
                            <div class="p-4">
                                <div class="user-chat-nav float-end">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add Contact">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-link text-decoration-none text-muted font-size-18 py-0" data-bs-toggle="modal" data-bs-target="#addContact-exampleModal">
                                            <!--<i class="ri-user-add-line"></i>-->
                                        </button>
                                    </div>
                                </div>
                                <h4 class="mb-4">Contacts</h4>

                                <!-- Start Add contact Modal -->
                                <div class="modal fade" id="addContact-exampleModal" tabindex="-1" role="dialog" aria-labelledby="addContact-exampleModalLabel" aria-hidden="true">

                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title font-size-16" id="addContact-exampleModalLabel">Add Contact</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="addcontactemail-input" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="addcontactemail-input" placeholder="Enter Email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="addcontact-invitemessage-input" class="form-label">Invatation Message</label>
                                                        <textarea class="form-control" id="addcontact-invitemessage-input" rows="3" placeholder="Enter Message"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Invite Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Add contact Modal -->

                                <div class="search-box chat-search-box">
                                    <div class="input-group bg-light  input-group-lg rounded-3">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-link text-decoration-none text-muted pe-1 ps-3" type="button">
                                                <i class="ri-search-line search-icon font-size-18"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control bg-light" placeholder="Search users..">
                                    </div>
                                </div>
                                <!-- End search-box -->
                            </div>
                            <!-- end p-4 -->

                            <!-- Start contact lists -->
                            <div class="p-4 chat-message-list chat-group-list" data-simplebar>
        
                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        A
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_a)

                                        @php
                                            $firstLetter = mb_strtoupper(mb_substr($conversation_user_a->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'A')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                   <a href="{{route('conversation.show', $conversation_user_a)}}"><h5 class="font-size-14 m-0"> {{$conversation->name}} </h5></a> 
                                                </div>
                                                <div class="dropdown">
                                                    <a href="{{route('conversation.show', $conversation_user_a)}}" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list A -->
                                
                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        B
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_b)

                                        @php
                                            $firstLetter = mb_strtoupper(mb_substr($conversation_user_b->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'B')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-14 m-0"> {{$conversation_user_b->name}} </h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="{{route('conversation.show', $conversation_user_b)}}" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list B -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        C
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_c)

                                        @php
                                            $firstLetter = mb_strtoupper(mb_substr($conversation_user_c->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'C')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_c)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_c->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="{{route('conversation.show', $conversation_user_c)}}" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list C -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        D
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_d)

                                        @php
                                            $firstLetter = mb_strtoupper(mb_substr($conversation_user_d->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'D')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_d)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_d->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list D -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        E
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_e)

                                        @php
                                            $firstLetter = mb_strtoupper(mb_substr($conversation_user_e->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'E')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_e)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_e->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list E -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        F
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_f)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_f->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'F')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_f)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_f->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list F -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        G
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_g)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_g->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'G')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_g)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_g->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list G -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        H
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_h)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_h->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'H')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_h)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_h->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list H -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        I
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_i)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_i->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'I')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_i)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_i->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list I -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        J
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_j)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_j->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'J')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_j)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_j->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list J -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        K
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_k)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_k->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'K')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_k)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_k->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list K -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        L
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_l)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_l->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'L')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_l)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_l->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list L -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        M
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_m)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_m->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'M')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_m)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_m->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list M -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        N
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_n)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_n->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'N')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_n)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_n->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list N -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        O
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_o)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_o->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'O')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $consersation_user_o)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_o->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list O -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        P
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_p)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_p->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'P')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_p)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_p->name}} </h5> </a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list P -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        Q
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_q)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_q->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'Q')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_q)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_q->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list Q -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        R
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_r)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_r->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'R')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_r)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_r->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list R -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        S
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_s)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_s->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'S')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_s)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_s->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list S -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        T
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_t)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_t->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'T')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_t)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_t->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list T -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        U
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_u)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_u->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'U')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_u)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_u->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list U -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        V
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_v)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_v->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'V')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_v)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_v->name}} </h5> </a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list V -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        W
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_w)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_w->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'W')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_w)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_w->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list W -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        X
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_x)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_x->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'X')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_x)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_x->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list X -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        Y
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_y)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_y->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'Y')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $onversation_user_y)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_y->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list Y -->

                                <div>
                                    <div class="p-3 fw-bold text-primary">
                                        Z
                                    </div>

                                    <ul class="list-unstyled contact-list">

                                        @foreach ($conversation_users as $conversation_user_z)

                                        @php
                                            $firstLetter = strtoupper(substr($conversation_user_z->name, 0, 1))    
                                        @endphp

                                        @if ($firstLetter == 'Z')
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <a href="{{route('conversation.show', $conversation_user_z)}}"><h5 class="font-size-14 m-0"> {{$conversation_user_z->name}} </h5></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="index.html#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!--<i class="ri-more-2-fill"></i>-->
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                                        <a class="dropdown-item" href="index.html#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        @endif     
                                        @endforeach
                            
                                    </ul>
                                </div>
                                <!-- end contact list Z -->

                               
                            </div>
                            <!-- end contact lists -->
                        </div>
                        <!-- Start Contact content -->
                    </div>
                    <!-- End contacts tab-pane -->

                    
                    <!-- Start settings tab-pane -->
                    <div class="tab-pane" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <!-- Start Settings content -->
                        <div>
                            <div class="px-4 pt-4">
                                <h4 class="mb-0">Settings</h4>
                            </div>

                            <div class="text-center border-bottom p-4">
                                <div class="mb-4 profile-user">
                                    <img src= {{asset("asset/images/users/avatar-1.jpg")}}  class="rounded-circle avatar-lg img-thumbnail" alt="">
                                    <button type="button" class="btn btn-light bg-light avatar-xs p-0 rounded-circle profile-photo-edit">
                                        <i class="ri-pencil-fill"></i>
                                    </button>
                                </div>

                                <h5 class="font-size-16 mb-1 text-truncate">Patricia Smith</h5>
                                <div class="dropdown d-inline-block mb-1">
                                    <a class="text-muted dropdown-toggle pb-1 d-block" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Available <i class="mdi mdi-chevron-down"></i>
                                    </a>
          
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="index.html#">Available</a>
                                      <a class="dropdown-item" href="index.html#">Busy</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End profile user -->

                            <!-- Start User profile description -->
                            <div class="p-4 user-profile-desc" data-simplebar>        
                                <div id="settingprofile" class="accordion">
                                    <div class="accordion-item card border mb-2">
                                        <div class="accordion-header" id="personalinfo1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalinfo" aria-expanded="true" aria-controls="personalinfo">
                                                <h5 class="font-size-14 m-0">Personal Info</h5>
                                            </button>
                                        </div>
                                        <div id="personalinfo" class="accordion-collapse collapse show" aria-labelledby="personalinfo1" data-bs-parent="#settingprofile">
                                            <div class="accordion-body">
                                                <div class="float-end">
                                                    <button type="button" class="btn btn-light btn-sm"><i class="ri-edit-fill me-1 ms-0 align-middle"></i> Edit</button>
                                                </div>

                                                <div>
                                                    <p class="text-muted mb-1">Name</p>
                                                    <h5 class="font-size-14">Patricia Smith</h5>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">Email</p>
                                                    <h5 class="font-size-14">adc@123.com</h5>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">Time</p>
                                                    <h5 class="font-size-14">11:40 AM</h5>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">Location</p>
                                                    <h5 class="font-size-14 mb-0">California, USA</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end personal info card -->

                                    <div class="accordion-item card border mb-2">
                                        <div class="accordion-header" id="privacy1">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy" aria-expanded="false" aria-controls="privacy">
                                                <h5 class="font-size-14 m-0">Privacy</h5>
                                            </button>
                                        </div>
                                        <div id="privacy" class="accordion-collapse collapse" aria-labelledby="privacy1" data-bs-parent="#settingprofile">
                                            <div class="accordion-body">
                                                <div class="py-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Profile photo</h5>
                                                        </div>
                                                        <div class="dropdown ms-2 me-0">
                                                            <button class="btn btn-light btn-sm dropdown-toggle w-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Everyone <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="index.html#">Everyone</a>
                                                                <a class="dropdown-item" href="index.html#">selected</a>
                                                                <a class="dropdown-item" href="index.html#">Nobody</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-3 border-top">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Last seen</h5>

                                                        </div>
                                                        <div class="ms-2 me-0">
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input" id="privacy-lastseenSwitch" checked>
                                                                <label class="form-check-label" for="privacy-lastseenSwitch"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-3 border-top">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Status</h5>
                                                        </div>
                                                        <div class="dropdown ms-2 me-0">
                                                            <button class="btn btn-light btn-sm dropdown-toggle w-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Everyone <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="index.html#">Everyone</a>
                                                                <a class="dropdown-item" href="index.html#">selected</a>
                                                                <a class="dropdown-item" href="index.html#">Nobody</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-3 border-top">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Read receipts</h5>
                                                        </div>
                                                        <div class="ms-2 me-0">
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input" id="privacy-readreceiptSwitch" checked>
                                                                <label class="form-check-label" for="privacy-readreceiptSwitch"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="py-3 border-top">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Groups</h5>

                                                        </div>
                                                        <div class="dropdown ms-2 me-0">
                                                            <button class="btn btn-light btn-sm dropdown-toggle w-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Everyone <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="index.html#">Everyone</a>
                                                                <a class="dropdown-item" href="index.html#">selected</a>
                                                                <a class="dropdown-item" href="index.html#">Nobody</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end privacy card -->

                                    <div class="accordion-item card border mb-2">
                                        <div class="accordion-header" id="security1">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#security" aria-expanded="false" aria-controls="security">
                                                <h5 class="font-size-14 m-0"></i> Security</h5>
                                            </button>
                                        </div>
                                        <div id="security" class="accordion-collapse collapse" aria-labelledby="security1" data-bs-parent="#settingprofile">
                                            <div class="accordion-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-0 text-truncate">Show security notification</h5>

                                                    </div>
                                                    <div class="ms-2 me-0">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" id="security-notificationswitch">
                                                            <label class="form-check-label" for="security-notificationswitch"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end security card -->

                                    <div class="accordion-item card border mb-2">
                                        <div class="accordion-header" id="help1">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <h5 class="font-size-14 m-0"></i> Help</h5>
                                            </button>
                                        </div>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="help1" data-bs-parent="#settingprofile">
                                            <div class="accordion-body">
                                                <div class="py-3">
                                                    <h5 class="font-size-13 mb-0"><a href="index.html#" class="text-body d-block">FAQs</a></h5>
                                                </div>
                                                <div class="py-3 border-top">
                                                    <h5 class="font-size-13 mb-0"><a href="index.html#" class="text-body d-block">Contact</a></h5>
                                                </div>
                                                <div class="py-3 border-top">
                                                    <h5 class="font-size-13 mb-0"><a href="index.html#" class="text-body d-block">Terms & Privacy policy</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end profile-setting-accordion -->
                            </div>
                            <!-- End User profile description -->
                        </div>
                        <!-- Start Settings content -->
                    </div>
                    <!-- End settings tab-pane -->

                </div>
                <!-- end tab content -->

            </div>
            <!-- end chat-leftsidebar -->





            @yield('chat-user')







            <!-- audiocall Modal -->
            <div class="modal fade" id="audiocallModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="text-center p-4">
                                <div class="avatar-lg mx-auto mb-4">
                                    <img src= {{asset("asset/images/users/avatar-4.jpg")}}  alt="" class="img-thumbnail rounded-circle">
                                </div>

                                <h5 class="text-truncate">Doris Brown</h5>
                                <p class="text-muted">Start Audio Call</p>

                                <div class="mt-5">
                                    <ul class="list-inline mb-1">
                                        <li class="list-inline-item px-2 me-2 ms-0">
                                            <button type="button" class="btn btn-danger avatar-sm rounded-circle" data-bs-dismiss="modal">
                                                <span class="avatar-title bg-transparent font-size-20">
                                                    <i class="ri-close-fill"></i>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <button type="button" class="btn btn-success avatar-sm rounded-circle">
                                                <span class="avatar-title bg-transparent font-size-20">
                                                    <i class="ri-phone-fill"></i>
                                                </span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- audiocall Modal -->


            <!-- videocall Modal -->
            <div class="modal fade" id="videocallModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="text-center p-4">
                                <div class="avatar-lg mx-auto mb-4">
                                    <img src= {{asset("asset/images/users/avatar-4.jpg")}}  alt="" class="img-thumbnail rounded-circle">
                                </div>

                                <h5 class="text-truncate">Doris Brown</h5>
                                <p class="text-muted mb-0">Start Video Call</p>

                                <div class="mt-5">
                                    <ul class="list-inline mb-1">
                                        <li class="list-inline-item px-2 me-2 ms-0">
                                            <button type="button" class="btn btn-danger avatar-sm rounded-circle" data-bs-dismiss="modal">
                                                <span class="avatar-title bg-transparent font-size-20">
                                                    <i class="ri-close-fill"></i>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <button type="button" class="btn btn-success avatar-sm rounded-circle">
                                                <span class="avatar-title bg-transparent font-size-20">
                                                    <i class="ri-vidicon-fill"></i>
                                                </span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
            
        </div>
        <!-- end  layout wrapper -->

        <!-- JAVASCRIPT -->
        <script src= {{asset("asset/libs/jquery/jquery.min.js")}} ></script>
        <script src= {{asset("asset/libs/bootstrap/js/bootstrap.bundle.min.js")}} ></script>
        <script src= {{asset("asset/libs/simplebar/simplebar.min.js")}} ></script>
        <script src= {{asset("asset/libs/node-waves/waves.min.js")}} ></script>

        <!-- Magnific Popup-->
        <script src= {{asset("asset/libs/magnific-popup/jquery.magnific-popup.min.js")}} ></script>

        <!-- owl.carousel js -->
        <script src= {{asset("asset/libs/owl.carousel/owl.carousel.min.js")}} ></script>

        <!-- page init -->
        <script src= {{asset("asset/js/pages/index.init.js")}} ></script>

        <script src= {{asset("asset/js/app.js")}} ></script>

    </body>
</html>
