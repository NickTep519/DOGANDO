@extends('conversation.index')

@section('chat-user')
      <!-- Start User chat -->
      <div class="user-chat w-100 overflow-hidden">
        <div class="d-lg-flex">

            <!-- start chat conversation section -->
            <div class="w-100 overflow-hidden position-relative">

                <div class="p-3 p-lg-4 border-bottom user-chat-topbar">
                    <div class="row align-items-center">

                        <div class="col-sm-4 col-8">
                            <div class="d-flex align-items-center">
                                <div class="d-block d-lg-none me-2 ms-0">
                                    <a href="javascript: void(0);" class="user-chat-remove text-muted font-size-16 p-2"><i class="ri-arrow-left-s-line"></i></a>
                                </div>
                                <div class="me-3 ms-0">
                                    <img src= {{asset("asset/images/users/avatar-2.jpg")}}  class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-0 text-truncate"><a href="index.html#" class="text-reset user-profile-show"> {{$actif_user->name}} </a> <i class="ri-record-circle-fill font-size-10 text-success d-inline-block ms-1"></i></h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8 col-4">
                          <!--  <ul class="list-inline user-chat-nav text-end mb-0">   

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-search-line"></i>
                                        </button>
                                        <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-md">
                                            <div class="search-box p-2">
                                                <input type="text" class="form-control bg-light border-0" placeholder="Search..">
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                    <button type="button" class="btn nav-btn" data-bs-toggle="modal" data-bs-target="#audiocallModal">
                                        <i class="ri-phone-line"></i>
                                    </button>
                                </li>

                                <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                    <button type="button" class="btn nav-btn" data-bs-toggle="modal" data-bs-target="#videocallModal">
                                        <i class="ri-vidicon-line"></i>
                                    </button>
                                </li>

                                <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                    <button type="button" class="btn nav-btn user-profile-show">
                                        <i class="ri-user-2-line"></i>
                                    </button>
                                </li>

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-block d-lg-none user-profile-show" href="index.html#">View profile <i class="ri-user-2-line float-end text-muted"></i></a>
                                            <a class="dropdown-item d-block d-lg-none" href="index.html#" data-bs-toggle="modal" data-bs-target="#audiocallModal">Audio <i class="ri-phone-line float-end text-muted"></i></a>
                                            <a class="dropdown-item d-block d-lg-none" href="index.html#" data-bs-toggle="modal" data-bs-target="#videocallModal">Video <i class="ri-vidicon-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="index.html#">Archive <i class="ri-archive-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="index.html#">Muted <i class="ri-volume-mute-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="index.html#">Delete <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </li>   

                            </ul>                                    
                        </div> -->
                    </div>
                </div>
                <!-- end chat user head -->


                <!-- start chat conversation -->
                <div class="chat-conversation p-3 p-lg-4" data-simplebar="init">
                    <ul class="list-unstyled mb-0">

                        @if (!$messages->onFirstPage())

                        <li> 
                            <div class="chat-day-title">
                                <a href="{{$messages->previousPageUrl()}}">
                                    <span class="title"> Previous </span> 
                                </a>
                            </div>
                        </li>
                            
                        @endif

                        @forelse ($messages as $message)

                        @if ($message->from->id !== $actif_user->id)

                        <li class="right">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src= {{asset("asset/images/users/avatar-2.jpg")}}  alt="">
                                </div>

                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0">
                                                {{$message->content}}
                                            </p>
                                            <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">{{$message->created_at->translatedFormat('d/m/y  H:i')}}</span></p>
                                        </div>
                                            
                                        <div class="dropdown align-self-start">
                                            <a class="dropdown-toggle" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <!--<i class="ri-more-2-fill"></i>-->
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="index.html#">Copy <i class="ri-file-copy-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="index.html#">Save <i class="ri-save-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="index.html#">Forward <i class="ri-chat-forward-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="index.html#">Delete <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="conversation-name">Moi</div>
                                </div>
                            </div>
                        </li>
                            
                        @else
                        <li>
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src= {{asset("asset/images/users/avatar-2.jpg")}}  alt="">
                                </div>

                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0">
                                                {{$message->content}}
                                            </p>
                                            <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">{{$message->created_at->translatedFormat('d/m/y  H:i')}}</span></p>
                                        </div>
                                        <div class="dropdown align-self-start">
                                            <a class="dropdown-toggle" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <!--<i class="ri-more-2-fill"></i>-->
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="index.html#">Copy <i class="ri-file-copy-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="index.html#">Save <i class="ri-save-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="index.html#">Forward <i class="ri-chat-forward-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="index.html#">Delete <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name">{{$message->from->name}}</div>
                                </div>
                            </div>
                        </li>     
                        @endif
                            
                        @empty

                        <li> 
                            <div class="chat-day-title">
                                <span class="title">Debutez une conversation avec {{$actif_user->name}} </span>
                            </div>
                        </li>
                            
                        @endforelse

                        @if ($messages->hasMorePages())

                        <li> 
                            <div class="chat-day-title">
                                <a href="{{$messages->nextPageUrl()}}">
                                    <span class="title"> Next </span> 
                                </a>
                            </div>
                        </li>
                       
                        @endif
                        
                    </ul>
                </div>
                <!-- end chat conversation end -->


                <!-- start chat input section -->
                <div class="chat-input-section p-3 p-lg-4 border-top mb-0">
                    
                    <div class="row g-0">
                        <form action="" method="POST" class="row g-0" >
                            @csrf

                            <div class="col">
                                <input type="text" name="content" class="form-control form-control-lg bg-light border-light" placeholder="Entrer un message...">
                            </div>

                            <div class="col-auto">
                                <div class="chat-input-links ms-md-2 me-md-0">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Emoji">
                                            <button type="button" class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect">
                                                <i class="ri-emotion-happy-line"></i>
                                            </button>
                                        </li>
                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Attached File">  
                                            <button type="button" class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect">
                                                <i class="ri-attachment-line"></i>
                                            </button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button type="submit" class="btn btn-primary font-size-16 btn-lg chat-send waves-effect waves-light">
                                                <i class="ri-send-plane-2-fill"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>    
                            </div>

                        </form>
                    </div>
                </div>
                <!-- end chat input section -->

            </div>
            <!-- end chat conversation section -->

            <!-- start User profile detail sidebar -->
            <div class="user-profile-sidebar">
                <div class="px-3 px-lg-4 pt-3 pt-lg-4">
                    <div class="user-chat-nav text-end">
                        <button type="button" class="btn nav-btn" id="user-profile-hide">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                </div>

                <div class="text-center p-4 border-bottom">
                    <div class="mb-4">
                        <img src= {{asset("asset/images/users/avatar-4.jpg")}}  class="rounded-circle avatar-lg img-thumbnail" alt="">
                    </div>

                    <h5 class="font-size-16 mb-1 text-truncate">Doris Brown</h5>
                    <p class="text-muted text-truncate mb-1"><i class="ri-record-circle-fill font-size-10 text-success me-1 ms-0"></i> Active</p>
                </div>
                <!-- End profile user -->

                <!-- Start user-profile-desc -->
                <div class="p-4 user-profile-desc" data-simplebar>
                    <div class="text-muted">
                        <p class="mb-4">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual.</p>
                    </div>

                    <div class="accordion" id="myprofile">
    
                        <div class="accordion-item card border mb-2">
                            <div class="accordion-header" id="about3">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#aboutprofile" aria-expanded="true" aria-controls="aboutprofile">
                                    <h5 class="font-size-14 m-0">
                                        <i class="ri-user-2-line me-2 ms-0 align-middle d-inline-block"></i> About
                                    </h5>
                                </button>
                            </div>
                            <div id="aboutprofile" class="accordion-collapse collapse show" aria-labelledby="about3" data-bs-parent="#myprofile">
                                <div class="accordion-body">
                                    <div>
                                        <p class="text-muted mb-1">Name</p>
                                        <h5 class="font-size-14">Doris Brown</h5>
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

                        <div class="accordion-item card border">
                            <div class="accordion-header" id="attachfile3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#attachprofile" aria-expanded="false" aria-controls="attachprofile">
                                    <h5 class="font-size-14 m-0">
                                        <i class="ri-attachment-line me-2 ms-0 align-middle d-inline-block"></i> Attached Files
                                    </h5>
                                </button>
                            </div>
                            <div id="attachprofile" class="accordion-collapse collapse" aria-labelledby="attachfile3" data-bs-parent="#myprofile">
                                <div class="accordion-body">
                                    <div class="card p-2 border mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-3 ms-0">
                                                <div class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                    <i class="ri-file-text-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="text-start">
                                                    <h5 class="font-size-14 mb-1">admin_v1.0.zip</h5>
                                                    <p class="text-muted font-size-13 mb-0">12.5 MB</p>
                                                </div>
                                            </div>

                                            <div class="ms-4 me-0">
                                                <ul class="list-inline mb-0 font-size-18">
                                                    <li class="list-inline-item">
                                                        <a href="index.html#" class="text-muted px-1">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item dropdown">
                                                        <a class="dropdown-toggle text-muted px-1" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="index.html#">Action</a>
                                                            <a class="dropdown-item" href="index.html#">Another action</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="index.html#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card p-2 border mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-3 ms-0">
                                                <div class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="text-start">
                                                    <h5 class="font-size-14 mb-1">Image-1.jpg</h5>
                                                    <p class="text-muted font-size-13 mb-0">4.2 MB</p>
                                                </div>
                                            </div>

                                            <div class="ms-4 me-0">
                                                <ul class="list-inline mb-0 font-size-18">
                                                    <li class="list-inline-item">
                                                        <a href="index.html#" class="text-muted px-1">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item dropdown">
                                                        <a class="dropdown-toggle text-muted px-1" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="index.html#">Action</a>
                                                            <a class="dropdown-item" href="index.html#">Another action</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="index.html#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card p-2 border mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-3 ms-0">
                                                <div class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="text-start">
                                                    <h5 class="font-size-14 mb-1">Image-2.jpg</h5>
                                                    <p class="text-muted font-size-13 mb-0">3.1 MB</p>
                                                </div>
                                            </div>

                                            <div class="ms-4 me-0">
                                                <ul class="list-inline mb-0 font-size-18">
                                                    <li class="list-inline-item">
                                                        <a href="index.html#" class="text-muted px-1">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item dropdown">
                                                        <a class="dropdown-toggle text-muted px-1" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="index.html#">Action</a>
                                                            <a class="dropdown-item" href="index.html#">Another action</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="index.html#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card p-2 border mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-3 ms-0">
                                                <div class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                    <i class="ri-file-text-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="text-start">
                                                    <h5 class="font-size-14 mb-1">Landing-A.zip</h5>
                                                    <p class="text-muted font-size-13 mb-0">6.7 MB</p>
                                                </div>
                                            </div>

                                            <div class="ms-4 me-0">
                                                <ul class="list-inline mb-0 font-size-18">
                                                    <li class="list-inline-item">
                                                        <a href="index.html#" class="text-muted px-1">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item dropdown">
                                                        <a class="dropdown-toggle text-muted px-1" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="index.html#">Action</a>
                                                            <a class="dropdown-item" href="index.html#">Another action</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="index.html#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- end profile-user-accordion -->
                </div>
                <!-- end user-profile-desc -->

            </div>
            <!-- end User profile detail sidebar -->
        </div>
    </div>
    <!-- End User chat -->
@endsection