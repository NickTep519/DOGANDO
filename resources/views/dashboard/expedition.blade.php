@extends('dashboard.base')

@section('title', config('app.name').'-'.$user->name )

@section('content')

<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="breadcrumb-content">
              <div class="section-heading">
                <h2 class="sec__title font-size-30 text-white">
                  Mes Expeditions
                </h2>
              </div>
            </div>
            <!-- end breadcrumb-content -->
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="breadcrumb-list text-end">
              <ul class="list-items">
                <li><a href="index.html" class="text-white">Home</a></li>
                <li>Dashboard</li>
                <li>Expeditions</li>
              </ul>
            </div>
            <!-- end breadcrumb-list -->
          </div>
          <!-- end col-lg-6 -->
        </div>
        <!-- end row -->
      </div>
    </div>
    <!-- end dashboard-bread -->
    <div class="dashboard-main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-box">
              <div class="form-title-wrap">
                <div
                  class="d-flex align-items-center justify-content-between"
                >
                  <div>
                    <h3 class="title">Mes Expeditions</h3>
                    <p class="font-size-14">Showing 1 to 7 of 17 entries</p>
                  </div>
                  <span
                    >Total Expeditions
                    <strong class="color-text"> {{$expeditions}} </strong></span
                  >
                </div>
              </div>
              <div>
                <a href="{{route('posts.create')}}" class="theme-btn theme-btn-small" > Ajoutez </a>
              </div>
              <div class="form-content">
                <div class="table-form table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Kilos (kg)</th>
                        <th scope="col">Prix (F CFA)</th>
                        <th scope="col">Villes (D - A)</th>
                        <th scope="col">Compagnie</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @forelse ($posts as $post)

                      <tr>
                        <th scope="row">
                          <i class="la la-plane me-1 font-size-18"></i
                          >Flight
                        </th>
                        <td>
                          <div class="table-content">
                            <h3 class="title">{{ $post->kg }}</h3>
                          </div>
                        </td>
                        <td> {{$post->price}} </td>
                        <td> {{ $post->city_starts }} - {{$post->city_ends}} </td>
                        <td> {{$post->company}} </td>
                        <td>
                          @if ($post->status)
                            <span class="badge text-bg-success py-1 px-2">Terminé</span>     
                          @else
                            <span class="badge text-bg-info py-1 px-2" >En cours..</span>    
                          @endif
                        </td>
                        <td>
                          <div class="table-content">

                            <a href="{{route('posts.edit', $post)}}" class="theme-btn theme-btn-small" > Editer </a>
                            <form action="{{route('posts.destroy', $post)}}" method="POST" >
                              @csrf
                              @method('delete')
                              <button class="theme-btn theme-btn-small">
                                Suprrimer
                              </button>
                            </form>

                            
                          </div>
                          
                        </td>
                      </tr>
                          
                      @empty
                         <P>Vous n'avez encore effectué aucun voyage</P> 
                      @endforelse
                </div>
              </div>
            </div>
            <!-- end form-box -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="Page navigation example">
              
            </nav>
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
    

@endsection