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
                  Mes Voyages
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
                <li>Voyages</li>
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
                    <h3 class="title">Mes voyages</h3>
                  </div>
                  <span
                    >Mes Voyages
                    <strong class="color-text">{{ $voyages }}</strong></span
                  >
                </div>
              </div>
           
              <div class="form-content">
                <div class="table-form table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">M Trans</th>
                        <th scope="col">Kilos (kg)</th>
                        <th scope="col">Prix (F CFA)</th>
                        <th scope="col"> Dates (D - A)</th>
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
                          <i class="la la-plane me-1 font-size-18"></i> {{$post->m_transport}}
                        </th>
                        <td>
                          <div class="table-content">
                            <h3 class="title">{{ $post->kg }}</h3>
                          </div>
                        </td>
                        <td> {{$post->price}} </td>
                        <td>{{$post->starts_at->translatedFormat('d/m/y') }} - {{$post->ends_at->translatedFormat('d/m/y')}}</td>
                        <td> {{ $post->city_starts }} - {{$post->city_ends}} </td>
                        <td> {{$post->company}} </td>
                        <td>
                          @if ($post->status)
                            <span class="badge text-bg-success py-1 px-2">Terminé</span>     
                          @else
                            @if ($post->status === NULL)
                                ---
                            @else
                                <span class="badge text-bg-info py-1 px-2" >En cours..</span> 
                                <span class="form-switch" > 
                                  <input class="form-check-input" type="checkbox" role="switch" id="myCheckbox" data-id="{{ $post->id }}" {{ $post->status ? 'checked' : '' }}>
                                </span> 
                            @endif
                          @endif
                        </td>
                        <td>
                          <div class="table-content">
                            <a
                              href="{{route('dashboard.posts.details', $post)}}"
                              class="theme-btn theme-btn-small"
                              data-bs-toggle="tooltip"
                              data-placement="top"
                              title="View"
                              ><i class="la la-eye"></i
                            ></a>
                          </div> 
                        </td>
                      </tr>
                    
                          
                      @empty
                         <P>Vous n'avez encore effectué aucun voyage</P> 
                      @endforelse
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
              <ul class="pagination">
                <li class="page-item">
                  <a
                    class="page-link page-link-nav"
                    href="{{$posts->previousPageUrl()}}"
                    aria-label="Previous"
                  >
                    <span aria-hidden="true"
                      ><i class="la la-angle-left"></i
                    ></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
    
                @for ($i = 1; $i < $posts->lastPage(); $i++)
    
                  @if ($posts->currentPage() === $i)
                  <li class="page-item active">
                    <a class="page-link page-link-nav" href="{{$posts->url($i)}}"
                      > {{$i}} <span class="sr-only">(current)</span></a
                    >
                  </li>   
                  @else
                  <li class="page-item">
                    <a class="page-link page-link-nav" href="{{$posts->url($i)}}">{{$i}}</a>
                  </li>    
                  @endif    
    
                @endfor
               
                <li class="page-item">
                  <a
                    class="page-link page-link-nav"
                    href="{{$posts->nextPageUrl()}}"
                    aria-label="Next"
                  >
                    <span aria-hidden="true"
                      ><i class="la la-angle-right"></i
                    ></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
       

@endsection