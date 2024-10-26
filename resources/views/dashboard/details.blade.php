@extends('dashboard.base')

@section('title', config('app.name').'-details-'.$post->title )

@section('content')


<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="breadcrumb-content">
              <div class="section-heading">
                <h2 class="sec__title font-size-30 text-white">
                  Details sur l'annonce
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
                <li>Details</li>
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
                <h3 class="title">Details sur l'annonce</h3>
              </div>
              <div class="form-content">
                <ul class="list-items list-items-2 list-items-flush">
                    <li>
                        <span>Annonce :</span>   @if ($post->type) Voyage @else Expedition @endif 
                    </li>
                    <li>
                        <span>Titre : </span> {{$post->title}}  
                    </li>
                    <li>
                        <span>Descripton :</span> {{ $post->description }}
                    </li>
                    <li>
                        <span> Kilo :</span>  {{ $post->kg }} kg
                    </li>
                    <li>
                        <span>Prix :</span>  {{$post->price}} F CFA
                    </li>
                    <li>
                        <span> Ville de depart :</span> {{ $post->city_starts }}
                    </li>
                    <li>
                        <span>Ville d'arrivée :</span>  {{ $post->city_ends }} 
                    </li>
                    <li>
                        <span>M Trans :</span>  {{ $post->m_transport }} 
                    </li>

                    <li>
                        <span>Status :</span>   @if ($post->status) Terminé @else @if ($post->status === NULL) --- @else En cours.. @endif @endif 
                    </li>
                 
                    <li>
                        <span>Date de depart :</span> {{ $post->starts_at->translatedFormat('d M Y') }}
                    </li>

                    <li>
                        <span>Date d'arrivée :</span> {{ $post->ends_at->translatedFormat('d M Y') }}
                    </li>

                    <li> 
                      @if ($post->type)
                      <span> Expedition :</span> @if ($post->status) {{ App\Models\User::find($post->expediteur_id)->name }} @else @if ($post->status === NULL) --- @else En cours.. @endif @endif
                      @else
                      <span> Voyage :</span> @if ($post->status) {{ App\Models\User::find($post->voyageur_id)->name }} @else @if ($post->status === NULL) --- @else En cours.. @endif @endif
                      @endif
                    </li>
                  
                </ul>
                <div class="btn-box mt-4" style="display: flex ; gap:20px; ">
                  <a
                    href="{{route('posts.edit', $post)}}"
                    class="theme-btn theme-btn-small"
                    >Editer</a
                  >

                  <form action="{{route('posts.destroy', $post)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button 
                      class="theme-btn theme-btn-small"
                      data-bs-toggle="modal"
                      data-bs-target="#modalPopup"
                    > Supprimer </button>
                  </form>

                  <a
                    href="{{route('offers.show', $post)}}"
                    class="theme-btn theme-btn-small"
                    >Voire les demande</a
                  >
                </div>

                
              </div>
            </div>
            <!-- end form-box -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="border-top mt-5"></div>
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="copy-right padding-top-30px">
              <p class="copy__desc">
                &copy; Copyright Trizen <span id="get-year"></span> . Made
                with <span class="la la-heart"></span> by
                <a href="https://themeforest.net/user/techydevs/portfolio"
                  >TechyDevs</a
                >
              </p>
            </div>
            <!-- end copy-right -->
          </div>
          <!-- end col-lg-7 -->
          <div class="col-lg-5">
            <div class="copy-right-content text-end padding-top-30px">
              <ul class="social-profile">
                <li>
                  <a href="admin-dashboard-orders-details.html#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li>
                  <a href="admin-dashboard-orders-details.html#"><i class="lab la-twitter"></i></a>
                </li>
                <li>
                  <a href="admin-dashboard-orders-details.html#"><i class="lab la-instagram"></i></a>
                </li>
                <li>
                  <a href="admin-dashboard-orders-details.html#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
            <!-- end copy-right-content -->
          </div>
          <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container-fluid -->
    </div>
    <!-- end dashboard-main-content -->
  </div>
  <!-- end dashboard-content-wrap -->

    
@endsection