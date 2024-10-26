@extends('dashboard.base')

@section('title', config('app.name').'-'.$user->name )

@section('content')


<div class="dashboard-content-wrap">


    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Demandes</h2>
                        </div>
                    </div>               <!-- end breadcrumb-content -->
                </div>           <!-- end col-lg-6 -->

                <div class="col-lg-6">
                    <div class="breadcrumb-list text-end">
                        <ul class="list-items">
                            <li><a href="{{route('home')}}" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Booking</li>
                        </ul>
                    </div>         <!-- end breadcrumb-list -->
                </div>          <!-- end col-lg-6 -->
            </div>        <!-- end row -->
        </div>
    </div>

    <!-- end dashboard-bread -->
    <div class="dashboard-main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="title">Demandes</h3>
                                <div class="select-contain select2-container-wrapper">
                                    <select class="select-contain-select">
                                        <option value="1">Any Status</option>
                                        <option value="2">Approved</option>
                                        <option value="3">Pending</option>
                                        <option value="4">Cancelled</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-content pb-2">

                            @forelse ($post->offers as $offer)

                            <div class="card-item card-item-list card-item--list">
                               
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h3 class="card-title"> {{ $offer->voyageur->name }} </h3>
                                        <span class="badge text-bg-warning text-white ms-2">{{ $offer->status }}</span>
                                    </div>

                                    <!-- <ul class="list-items list-items-2 pt-2 pb-3">
                                        <li><span>Start date:</span>12 December 2019</li>
                                        <li><span>End date:</span>12 Jun 2020</li>
                                        <li><span>Booking details:</span> 3 People</li>
                                        <li><span>Client:</span> David Martin</li>
                                    </ul> -->

                                    <div class="btn-box" style="margin-top: 10px" >
                                        <a
                                            href="{{route('conversation.show', $offer->voyageur)}}"
                                            class="theme-btn theme-btn-small theme-btn-transparent"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalPopup"
                                            ><i class="la la-envelope me-1"></i> Env. Message</a
                                        >
                                    </div>
                                </div>

                                <div class="action-btns" style="display: flex ; gap:10px" >
                                    <form action="{{route('offers.update.status', $offer)}}" method="POST" >
                                        @csrf
                                        <input type="hidden" value="accepted" >
                                        <button class="theme-btn theme-btn-small me-2" > Approuver </button>
                                    </form>

                                    <form action="{{route('offers.update.status', $offer)}}" method="POST" >
                                        @csrf
                                        <input type="hidden" value="rejected" >
                                        <button  class="theme-btn theme-btn-small" > Rejeter </button>
                                    </form>
                                </div>

                            </div>       <!-- end card-item -->    
                            @empty
                            <p>Il n'y a encore aucune demande pour cette annonce. </p>    
                            @endforelse

                            

                        </div>


                    </div>
                </div>            <!-- end form-box -->
            </div>            <!-- end col-lg-12 -->
        </div>
    </div>          <!-- end row -->

</div>

       
  <!-- end dashboard-content-wrap -->
    
@endsection