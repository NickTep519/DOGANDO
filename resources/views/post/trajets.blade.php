@extends('base')

@section('title', config('app.name').'-Annonces')

@section('banner')

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section inner-banner-section bg-overlay-black bg_img"
    data-background="assets/images/bg/inner-bg.png">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 text-center">
                <div class="banner-content">
                    <h1 class="title">Trajets</h1>
                    <div class="breadcrumb-area">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"> {{config('app.name')}} </a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Trajets</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->    

@endsection

@section('content')

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Book-form
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="book-form-section ptb-120">
        <div class="container">
            <div class="book-form-area bg-overlay-black bg_img" data-background="assets/images/bg/bg-3.png">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header white">
                            <span class="sub-title text-white"><span>DOGANDO</span> Filtre </span>
                            <h2 class="section-title"> Trouver l'annonce à votre exigence </h2>
                        </div>
                        <form class="book-form">
                            <div class="row justify-content-center mb-20-none">

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <label>Poids (kg)</label>
                                    <div class="book-quantity">
                                        <div class="book-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="book-plus-minus-box qty" type="number" name="kg" wire:model.live.debounce.250ms="kg"
                                            >
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <label>Prix / kg</label>
                                    <div class="book-quantity">
                                        <div class="book-plus-minus">
                                            <input class="book-plus-minus-box qty" type="text" name="price"  wire:model.live.debounce.250ms="price"
                                                >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <label>From</label>
                                    <div class="book-form-icon">
                                        <i class="icon-from-airplane"></i>
                                    </div>
                                    <div class="book-quantity">
                                        <div class="book-plus-minus">
                                            <input class="book-plus-minus-box qty" type="text" name="city_starts"  wire:model.live.debounce.250ms="city_starts"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <label>To</label>
                                    <div class="book-form-icon">
                                        <i class="icon-to-airplane"></i>
                                    </div>
                                    <div class="book-quantity">
                                        <div class="book-plus-minus">
                                            <input class="book-plus-minus-box qty" type="text" name="city_ends"  wire:model.live.debounce.250ms="city_ends"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 form-group">
                                    <button type="submit" class="btn--base ml-auto mr-auto mt-30"><i
                                            class="icon-btn-icon"></i> Filtrer</button>
                                </div>
                        
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Book-form
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

       

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="blog-section ptb-120">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-12 col-lg-12 mb-30">
                    <div class="row justify-content-center mb-30-none">

                        @foreach ($posts as $post)
                            
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-30"  >
                            <div class="blog-item">

                                @if ($post->type == 1)
                                <div class="blog-thumb">
                                    <img src=" {{asset('assets/images/blog/voyage.png')}} " alt="blog">
                                </div>    
                                @else
                                <div class="blog-thumb">
                                    <img src=" {{asset('assets/images/blog/expedition.png')}} " alt="blog">
                                </div>
                                @endif
                                
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="date"> {{$post->created_at->translatedFormat('d M Y')}} </span>
                                        <span class="comment"> {{$post->kg}} kg </span>
                                    </div>
                                    <h3 class="title"><a href="{{ route('posts.show', [$post->slug(), $post] ) }}">  {{ $post->city_starts }} - {{ $post->city_ends }} </a></h3>
                                    <p> {{ $post->description }} </p>
                                    <div class="blog-btn">
                                        <a href="{{ route('posts.show', [$post->slug(), $post] ) }}">Voir plus <i
                                                class="icon-Group-2361 ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                      <!--  <div class="col-xl-4 col-lg-4 mb-30">
                            <div class="sidebar">
                                <div class="widget-box mb-30">
                                    <h4 class="widget-title">Recherche</h4>
                                    <div class="search-widget-box">
                                        <form class="search-form">
                                            <input type="text" name="title" class="form--control" placeholder="Recherche"  wire:model.live.debounce.250ms="title">
                                            <button type="submit"><i class="icon-Search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget-box mb-30">
                                    <h4 class="widget-title">Annonces Recentes</h4>
                                    <div class="popular-widget-box">
                                        @foreach ($recent_posts as $post)
                                        <div class="single-popular-item d-flex flex-wrap align-items-center">
                                            <div class="popular-item-thumb">
                                                <img src=" {{asset('assets/images/blog/small-blog-1.png')}} " alt="blog">
                                            </div>
                                            <div class="popular-item-content">
                                                <span class="blog-date"> {{$post->created_at->translatedFormat('d M Y')}} </span>
                                                <h5 class="title"><a href="{{route('posts.show', [$post->slug(), $post])}}"> {{ $post->title }} </a></h5>
                                            </div>
                                        </div>     
                                        @endforeach
                                       
                                    </div>
                                </div>
                               
                            </div>
                        </div>

                    </div> -->
                </div>

            </div>
            <nav>
                <ul class="pagination">
                    <li class="page-item prev">
                        <a class="page-link" href="{{$posts->previousPageUrl()}}" rel="prev" aria-label="Prev &raquo;">PREV</a>
                    </li>

                    @for ($i = 1; $i < $posts->lastPage(); $i++)

                        @if ($posts->currentPage() === $i)
                            <li class="page-item active" aria-current="page"><span class="page-link"> 0{{$i}} </span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{$posts->url($i)}}" > 0{{ $i }}</a></li>
                        @endif

                    @endfor
                    

                    <li class="page-item next">
                        <a class="page-link" href="{{$posts->nextPageUrl()}}" rel="next" aria-label="Next &raquo;">NEXT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        

@endsection