@extends('base')

@section('title', config('app.name').'-blog')

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
                    <h1 class="title">Blog</h1>
                    <div class="breadcrumb-area">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Articles</li>
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
        Start Feature
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="feature-section page-wrapper-two ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <span class="sub-title text--base">Articles</span>
                        <h2 class="section-title">Trouver ici de meilleurs articles sur les echanges internationnaux </h2>
                    </div>
                </div>
            </div>

            <div class="feature-area" data-aos="fade-up" data-aos-duration="1200">
                <div class="row justify-content-center m-0">

                    @foreach ($articles as $article)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-content">
                                <h3 class="title">{{ $article->title }}</h3>
                                <p> {{ Str::limit($article->content, 150) }} </p>
                                <div class="feature-btn">
                                    <a href="{{route('blogs.show', $article)}}"><i class="icon-btn-icon-v2 mr-2"></i> Voir..</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    @endforeach

                    <nav>
                        <ul class="pagination">
                            <li class="page-item prev">
                                <a class="page-link" href="{{$articles->previousPageUrl()}}" rel="prev" aria-label="Prev &raquo;">PREV</a>
                            </li>
        
                            @for ($i = 1; $i < $articles->lastPage(); $i++)
        
                                @if ($articles->currentPage() === $i)
                                    <li class="page-item active" aria-current="page"><span class="page-link"> 0{{$i}} </span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{$articles->url($i)}}" > 0{{ $i }}</a></li>
                                @endif
        
                            @endfor
                            
        
                            <li class="page-item next">
                                <a class="page-link" href="{{$articles->nextPageUrl()}}" rel="next" aria-label="Next &raquo;">NEXT</a>
                            </li>
                        </ul>
                    </nav>
                   
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Feature
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


@endsection
