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
                  Mes Deals
                </h2>
              </div>
            </div>
            <!-- end breadcrumb-content -->
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="breadcrumb-list text-end">
              <ul class="list-items">
                <li><a href="{{route('home')}}" class="text-white">Home</a></li>
                <li>Dashboard</li>
                <li>Deals</li>
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
                    <h3 class="title">Deals Results</h3>
                    <p class="font-size-14">Showing 1 to 7 of 17 entries</p>
                  </div>
                  <span
                    >Total Deals
                    <strong class="color-text">{{$total_deals}}</strong></span
                  >
                </div>
              </div>
              <div>
                <a href="{{route('deals.create')}}" class="theme-btn theme-btn-small" > Ajoutez </a>
              </div>
              <div class="form-content">
                <div class="table-form table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @forelse ($deals as $deal)
                     <tr>
                      <th scope="row">
                        <i class="la la-tree me-1 font-size-18"></i>Deal
                      </th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">
                            {{$deal->name}}
                          </h3>
                        </div>
                      </td>
                      <td>{{$deal->price}}</td>
                      <td>
                        @if ($deal->status)
                            <span class="badge text-bg-success py-1 px-2">Terminé</span>     
                          @else
                            <span class="badge text-bg-info py-1 px-2" >En cours..</span>    
                          @endif
                      </td>
                      <td>
                        <div class="table-content">

                          <a href="{{route('deals.edit', $deal)}}" class="theme-btn theme-btn-small" > Editer </a>
                          <form action="{{route('posts.destroy', $deal)}}" method="POST" >
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
                         <p>Vous n'avez encore aucun deal conclu</p>
                     @endforelse
                    </tbody>
                  </table>
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